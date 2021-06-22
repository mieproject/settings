<?php
return [
    'app' => [
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'info',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'c', // unique name for field
                'label' => ['en'=>'App Name','ar'=> 'عنوان الموقع'], // you know what label it is
                'rules' => 'required|min:2|max:100', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => ['en'=>'MIE Site','ar'=>'موقع MIE'] // default value if you want
            ],
            [
                'type' => 'file', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_logo', // unique name for field
                'rules' => 'required', // validation rule of laravel
                'label' => 'App Logo', // you know what label it is
                'class' => 'logo', // any class for input
//                'value' => assetV2('/uploads/logo/default-logo.png') // default value if you want
                'value' => ('https://i.imgur.com/HLPeW4o.png') // default value if you want
            ],
            [
                'type' => 'file', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_circle_logo', // unique name for field
                'rules' => 'required', // validation rule of laravel
                'label' => 'Circle Logo', // you know what label it is
                'class' => 'c logo', // any class for input
//                'value' => assetV2('/uploads/logo/default-logo.png') // default value if you want
                'value' => ('https://i.imgur.com/HLPeW4o.png') // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_desc', // unique name for field
                'rules' => 'required', // validation rule of laravel
                'label' => ['en'=>'App Description','ar' => 'وصف الموقع'], // you know what label it is
                'class' => 'form-control', // any class for input
                'value' => 'The Laravel web app for educations made by Elzahaby ' // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_address', // unique name for field
                'rules' => 'required', // validation rule of laravel
                'label' => 'Address', // you know what label it is
                'class' => 'form-control', // any class for input
                'value' => '1234, Cairo, Egypt' // default value if you want
            ]
        ]
    ],
    'government'=>[
        'title' => 'Government documentations',
        'desc' => '',
        'icon' => 'business',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'tax_no', // unique name for field
                'label' => 'الرقم الضريبي', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],[
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'commercial_no', // unique name for field
                'label' => 'رقم السجل التجاري', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],

        ]
    ],
    'demo'=>[
        'title' => 'Home Page',
        'desc' => '',
//        'icon' => 'paperclip',

        'elements' => [
            [
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'video', // unique name for field
                'label' => 'Site video (YouTube link)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want

            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'test_text', // unique name for field
                'label' => ['ar'=>'العنوان بجوار الفيديو','en'=>'Title next to video'], // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],[
                'type' => 'textarea', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'long_text', // unique name for field
                'label' => ['ar'=>'النص بجوار الفيديو','en'=>'Text next to video'], // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want

            ],[
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'readmore_link', // unique name for field
                'label' => 'رابط اقرا المزيد', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],

        ]
    ],
    'apps'=>[
        'title' => 'Download Apps',
        'desc' => '',
        'icon' => 'link',

        'elements' => [
            [
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'applink_user_googleplay', // unique name for field
                'label' => 'رابط التطبيق على متجر جوجل (العملاء)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],[
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'applink_user_appstore', // unique name for field
                'label' => 'رابط التطبيق على ابل ستور (العملاء)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want

            ],[
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'applink_salon_googleplay', // unique name for field
                'label' => 'رابط التطبيق على متجر جوجل (الصالونات)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want
            ],[
                'type' => 'url', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'applink_salon_appstore', // unique name for field
                'label' => 'رابط التطبيق على ابل ستور (الصالونات)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '' // default value if you want

            ],

        ]
    ],
    'contact' => [

        'title' => 'Contact Us',
        'desc' => 'information About your app',
        'icon' => 'email',
        'row' => true,

        'elements' => [
            [
                'col' => 'col-6',
                'type' => 'email', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'main_email', // unique name for field
                'label' => 'Main Email', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => 'email@gmail.com' // default value if you want
            ], [
                'col' => 'col-6',
                'type' => 'number', // input fields type
                'data' => 'int', // data type, string, int, boolean
                'name' => 'main_phone', // unique name for field
                'label' => 'Main Phone', // you know what label it is
                'rules' => 'numeric', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => '0123456789' // default value if you want
            ], [
                'col' => 'col-12',
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'main_fax', // unique name for field
                'label' => 'Main Fax', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => 'form-control', // any class for input
                'value' => '05654' // default value if you want
            ]

        ]
    ],
    'socials' => [

        'title' => 'Our Socials',
        'desc' => 'information About your Socials links',
        'icon' => 'send',

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
                'name' => 'fa-snapchat', // unique name for field
                'label' => 'SnapChat', // you know what label it is
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
    
   '-' => [
       'title' => 'About',
       'desc' => 'information About your Socials links',
       'icon' => 'info',

       'elements' => [
           [
               'type' => 'textarea', // input fields type
               'data' => 'string', // data type, string, int, boolean
               'name' => 'whoAreWe', // unique name for field
               'label' => 'من نحن', // you know what label it is
               'rules' => '', // validation rule of laravel
               'class' => '', // any class for input
               'value' => '' // default value if you want
           ],             [
               'type' => 'textarea', // input fields type
               'data' => 'string', // data type, string, int, boolean
               'name' => 'Massage', // unique name for field
               'label' => 'رسالتنا', // you know what label it is
               'rules' => '', // validation rule of laravel
               'class' => '', // any class for input
               'value' => '' // default value if you want
           ], [
               'type' => 'textarea', // input fields type
               'data' => 'string', // data type, string, int, boolean
               'name' => 'vision', // unique name for field
               'label' => 'رؤيتنا', // you know what label it is
               'rules' => '', // validation rule of laravel
               'class' => '', // any class for input
               'value' => '' // default value if you want
           ], [
               'type' => 'textarea', // input fields type
               'data' => 'string', // data type, string, int, boolean
               'name' => 'value', // unique name for field
               'label' => 'قيمنا', // you know what label it is
               'rules' => '', // validation rule of laravel
               'class' => '', // any class for input
               'value' => '' // default value if you want
           ],             [
               'type' => 'textarea', // input fields type
               'data' => 'string', // data type, string, int, boolean
               'name' => 'goals', // unique name for field
               'label' => 'اهدافنا', // you know what label it is
               'rules' => '', // validation rule of laravel
               'class' => '', // any class for input
               'value' => '' // default value if you want
           ],

       ]
   ],

];