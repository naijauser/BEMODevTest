<?php
return function($kirby, $pages, $page) {

    $alert = null;
    
    if($kirby->request()->is('POST') && get('submit')) {
        // check the honeypot
        // if(empty(get('website')) === false) {
        //     go($page->url());
        //     exit;
        // }

        $data = [
            'name'  => get('name'),
            'email' => get('email'),
            'message'  => get('message')
        ];

        $rules = [
            'name'  => ['required', 'min' => 3],
            'email' => ['required', 'email'],
            'message'  => ['required', 'min' => 3, 'max' => 3000],
        ];

        $messages = [
            'name'  => 'Please enter a valid name',
            'email' => 'Please enter a valid email address',
            'message'  => 'Please enter a message between 3 and 3000 characters'
        ];

        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {

                $kirby->email([
                    'template' => 'email',
                    'from'     => 'yourcontactform@yourcompany.com',
                    'replyTo'  => $data['email'],
                    'to'       => $page->email(),
                    'subject'  => esc($data['name']) . ' sent you a message from your contact form',
                    'data'     => [
                        'message'   => esc($data['message']),
                        'sender' => esc($data['name'])
                    ]
                ]);

            } catch (Exception $error) {
                $alert['error'] = "The form could not be sent";
            }

            // no exception occured, let's send a success message
            if (empty($alert) === true) {
                $success = 'Your message has been sent, thank you. We will get back to you soon!';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};