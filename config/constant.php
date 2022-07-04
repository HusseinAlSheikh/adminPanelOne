<?php

return [
    'links' => [
        0 => [
            'mainTitle' => 'User Managements' ,
            'isSub' => 'Y' ,
            'subMenuArr' => [
                [
                    'title' => 'Users',
                    'links' => [
                        'view' => [
                            'route' => 'viewUsers' ,
                            'icon'  => 'fa fa-users',
                            'title' => 'View'
                        ],
                        'add' => [
                            'route' => 'createUser' ,
                            'icon'  => 'fa fa-plus' ,
                            'title' => 'Add' ,
                        ]
                    ],
                ],
                [
                    'title' => 'Roles',
                    'links' => [
                        'view' => [
                            'route' => 'viewRoles' ,
                            'icon'  => 'fa fa-users',
                            'title' => 'Add' ,
                        ],
                        'add' => [
                            'route' => 'createRole' ,
                            'icon'  => 'fa fa-plus',
                            'title' => 'Add' ,
                        ]
                    ],
                ],
            ],
        ] ,
        1 => [
            'mainTitle' => 'Settings' ,
            'isSub' => 'Y' ,
            'subMenuArr' => [
                [
                    'title' => 'Countries',
                    'links' => [
                        'view' => [
                            'route' => 'viewCountries' ,
                            'icon'  => 'fa fa-users',
                            'title' => 'Add' ,
                        ],
                        'add' => [
                            'route' => 'createCountry' ,
                            'icon'  => 'fa fa-plus',
                            'title' => 'Add' ,
                        ]
                    ],
                ],
                [
                    'title' => 'States',
                    'links' => [
                        'view' => [
                            'route' => 'viewStates' ,
                            'icon'  => 'fa fa-users',
                            'title' => 'Add' ,
                        ],
                        'add' => [
                            'route' => 'createState' ,
                            'icon'  => 'fa fa-plus',
                            'title' => 'Add' ,
                        ]
                    ],
                ],
            ],
        ] ,
    ]
];