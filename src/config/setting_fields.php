<?php
return [
    'app' => [
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fa fa-info-circle',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_name', // unique name for field
                'label' => 'App Name', // you know what label it is
                'rules' => 'required|min:2|max:100', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => 'ELzahaby API' // default value if you want
            ], [
                'type' => 'file', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_logo', // unique name for field
                'rules' => 'required', // validation rule of laravel
                'label' => 'App Logo', // you know what label it is
                'class' => 'app_logo_drop', // any class for input
                'value' => ('https://i.imgur.com/eiOkphq.png') // default value if you want
            ], [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_desc', // unique name for field
                'rules' => 'required', // validation rule of laravel
                'label' => 'App Description', // you know what label it is
                'class' => 'form-control', // any class for input
                'value' => 'The Laravel web app for deals made by CascoCode ' // default value if you want
            ]
        ]
    ],
//    'contact' => [
//
//        'title' => 'Contact Us',
//        'desc' => 'information About your app',
//        'icon' => 'fa fa-envelope',
//        'row' => true,
//
//        'elements' => [
//            [
//                'col' => 'col-6',
//                'type' => 'email', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'main_email', // unique name for field
//                'label' => 'Main Email', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => 'email@gmail.com' // default value if you want
//            ], [
//                'col' => 'col-6',
//                'type' => 'number', // input fields type
//                'data' => 'int', // data type, string, int, boolean
//                'name' => 'main_phone', // unique name for field
//                'label' => 'Main Phone', // you know what label it is
//                'rules' => 'numeric', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => '0123456789' // default value if you want
//            ], [
//                'col' => 'col-12',
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'main_fax', // unique name for field
//                'label' => 'Main Fax', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => '05654' // default value if you want
//            ]
//
//        ]
//    ],
//    'pay1' => [
//        'title' => 'Tab Payment Method',
//        'desc' => 'Your Live Credentials For Tab Payment Method',
//        'icon' => 'fa fa-credit-card',
//        'row' => true,
//
//        'elements' => [
//            [
//                'col' => 'col-6',
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'tab_api', // unique name for field
//                'label' => 'Tab API Key', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => '1tap7' // default value if you want
//            ],[
//                'col' => 'col-6',
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'tab_m_id', // unique name for field
//                'label' => 'Tab Merchant ID', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => '1014' // default value if you want
//            ], [
//                'col' => 'col-6',
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'tab_username', // unique name for field
//                'label' => 'Tab UserName', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => 'test' // default value if you want
//            ], [
//                'col' => 'col-6',
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'tab_m_pass', // unique name for field
//                'label' => 'Tab Password', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => 'test' // default value if you want
//            ]
//        ]
//    ],
//    'pay2' => [
//
//        'title' => 'PayPal',
//        'desc' => 'Your Live Credentials For PayPal',
//        'icon' => 'fa fa-credit-card',
//        'row' => true,
//
//        'elements' => [
//            [
//                'col' => 'col-12',
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'paypal_api', // unique name for field
//                'label' => 'PayPal API', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => '' // default value if you want
//            ], [
//                'col' => 'col-12',
//                'type' => 'text', // input fields type
//                'data' => 'string', // data type, string, int, boolean
//                'name' => 'paypal_key', // unique name for field
//                'label' => 'PayPal API Secret Key', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => 'form-control', // any class for input
//                'value' => '' // default value if you want
//            ]
//        ]
//    ],
    'socials' => [

        'title' => 'Our Socials',
        'desc' => 'information About you',
        'icon' => 'fa fa-paper-plane',

        'elements' => [
            [
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'fa-facebook', // unique name for field
                'label' => 'Facebook', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => '' // default value if you want
            ], [
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'fa-twitter', // unique name for field
                'label' => 'Twitter', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => '' // default value if you want
            ], [
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'fa-youtube', // unique name for field
                'label' => 'Youtube', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => '' // default value if you want
            ],[
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'fa-linkedin', // unique name for field
                'label' => 'Linkedin', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => '' // default value if you want
            ], [
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'fa-instagram', // unique name for field
                'label' => 'Instagram', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => '' // default value if you want
            ],

        ]
    ],
    'about' => [

        'title' => 'About',
        'desc' => 'information About your Socials links',
        'icon' => 'fa fa-paper-plane',

        'elements' => [
            [
                'type' => 'textarea', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'whoAreWe', // unique name for field
                'label' => 'About Us', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],
        ]
    ],
    'slider' => [

        'title' => 'Slider ',
        'desc' => 'add image slider',
        'icon' => 'fa fa-file',

        'elements' => [
            [
                'type' => 'file', // input fields type
                'data' => 'json', // data type, string, int, boolean,json
                'name' => 'slider', // unique name for field
                'label' => 'Slider', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'slider', // any class for input
                'value' => [] // default value if you want
            ],


        ]
    ],
    'fcm' => [

        'title' => 'FCM Setting',
        'desc' => '',
        'icon' => 'fa fa-cloud',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'name' => 'fcm_key', // unique name for field
                'label' => 'Fcm (Legacy server key)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],

        ]
    ],
];
