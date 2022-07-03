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
                        '0' => [
                            'route' => 'viewUsers' ,
                            'icon'  => 'fa fa-users',
                            'title' => 'View'
                        ],
                        '1' => [
                            'route' => 'createUser' ,
                            'icon'  => 'fa fa-plus' ,
                            'title' => 'Add' ,
                        ]
                    ],
                ],
                [
                    'title' => 'Roles',
                    'links' => [
                        0 => [
                            'route' => 'viewRoles' ,
                            'icon'  => 'fa fa-users',
                            'title' => 'Add' ,
                        ],
                        '1' => [
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
                        0 => [
                            'route' => 'viewCountries' ,
                            'icon'  => 'fa fa-users',
                            'title' => 'Add' ,
                        ],
                        1 => [
                            'route' => 'createCountry' ,
                            'icon'  => 'fa fa-plus',
                            'title' => 'Add' ,
                        ]
                    ],
                ],
                [
                    'title' => 'States',
                    'links' => [
                        0 => [
                            'route' => 'viewStates' ,
                            'icon'  => 'fa fa-users'
                        ],
                        1 => [
                            'route' => 'createState' ,
                            'icon'  => 'fa fa-plus'
                        ]
                    ],
                ],
            ],
        ] ,
    ]
];