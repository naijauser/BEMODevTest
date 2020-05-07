<?php
return function($kirby, $pages, $page, $site) {
    
    if($kirby->request()->is('POST') && get('login')) {

        if (get('email') == 'hirennamdi@mail.com' && get('password') == 'he_is_competent') {
            $kirby->session()->set('email', get('email'));
            
            Header::redirect($site->url());
        }

    } else if ($kirby->request()->is('POST') && get('logout')) {

        $kirby->session()->clear();

    } else if ($kirby->session()->get('email') != null) {

        Header::redirect($site->url());
    }

};
