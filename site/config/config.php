<?php 


return [
    // other options...
    'pedroborges.meta-tags.default' => function ($page, $site) {
        return [
            'title' => $site->title(),
            'meta' => [
                'title' => $page->meta_title(),
                'description' => $page->meta_description()
            ],
        ];
    },
    'email' => [
        'transport' => [
        //   'type' => 'smtp',
        //   'host' => 'smtp.company.com',
          'port' => 465,
          'security' => true
        ]
    ],
    // 'debug' => true
    'panel' =>[
        'install' => true
      ]
    
];