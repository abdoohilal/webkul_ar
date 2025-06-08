<?php

return [
    'title' => 'المستخدمون',

    'navigation' => [
        'title' => 'المستخدمون',
        'group' => 'الإعدادات',
    ],

    'global-search' => [
        'name'  => 'الاسم',
        'email' => 'البريد الإلكتروني',
    ],

    'form' => [
        'sections' => [
            'general-information' => [
                'title'  => 'المعلومات العامة',
                'fields' => [
                    'name'                  => 'الاسم',
                    'email'                 => 'البريد الإلكتروني',
                    'password'              => 'كلمة المرور',
                    'password-confirmation' => 'تأكيد كلمة المرور',
                ],
            ],

            'permissions' => [
                'title'  => 'الصلاحيات',
                'fields' => [
                    'roles'               => 'الأدوار',
                    'permissions'         => 'الصلاحيات',
                    'resource-permission' => 'صلاحية المورد',
                    'teams'               => 'الفرق',
                ],
            ],

            'avatar' => [
                'title' => 'الصورة الشخصية',
            ],

            'lang-and-status' => [
                'title'  => 'اللغة والحالة',
                'fields' => [
                    'language' => 'اللغة المفضلة',
                    'status'   => 'الحالة',
                ],
            ],

            'multi-company' => [
                'title'             => 'شركات متعددة',
                'allowed-companies' => 'الشركات المسموح بها',
                'default-company'   => 'الشركة الافتراضية',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'avatar'              => 'الصورة الشخصية',
            'name'                => 'الاسم',
            'email'               => 'البريد الإلكتروني',
            'teams'               => 'الفرق',
            'role'                => 'الدور',
            'resource-permission' => 'صلاحية المورد',
            'default-company'     => 'الشركة الافتراضية',
            'allowed-company'     => 'الشركة المسموح بها',
            'created-at'          => 'تاريخ الإنشاء',
            'updated-at'          => 'تاريخ التحديث',
        ],

        'filters' => [
            'resource-permission' => 'صلاحية المورد',
            'teams'               => 'الفرق',
            'roles'               => 'الأدوار',
            'default-company'     => 'الشركة الافتراضية',
            'allowed-companies'   => 'الشركات المسموح بها',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تعديل المستخدم',
                    'body'  => 'تم تعديل المستخدم بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المستخدم',
                    'body'  => 'تم حذف المستخدم بنجاح.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة المستخدم',
                    'body'  => 'تم استعادة المستخدم بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة المستخدمين',
                    'body'  => 'تم استعادة المستخدمين بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المستخدمين',
                    'body'  => 'تم حذف المستخدمين بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف المستخدمين نهائياً',
                    'body'  => 'تم حذف المستخدمين نهائياً بنجاح.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'تم إنشاء المستخدمين',
                    'body'  => 'تم إنشاء المستخدمين بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general-information' => [
                'title'   => 'المعلومات العامة',
                'entries' => [
                    'name'                  => 'الاسم',
                    'email'                 => 'البريد الإلكتروني',
                    'password'              => 'كلمة المرور',
                    'password-confirmation' => 'تأكيد كلمة المرور',
                ],
            ],

            'permissions' => [
                'title'   => 'الصلاحيات',
                'entries' => [
                    'roles'               => 'الأدوار',
                    'permissions'         => 'الصلاحيات',
                    'resource-permission' => 'صلاحية المورد',
                    'teams'               => 'الفرق',
                ],
            ],

            'avatar' => [
                'title' => 'الصورة الشخصية',
            ],

            'lang-and-status' => [
                'title'   => 'اللغة والحالة',
                'entries' => [
                    'language' => 'اللغة المفضلة',
                    'status'   => 'الحالة',
                ],
            ],

            'multi-company' => [
                'title'             => 'شركات متعددة',
                'allowed-companies' => 'الشركات المسموح بها',
                'default-company'   => 'الشركة الافتراضية',
            ],
        ],
    ],
];
