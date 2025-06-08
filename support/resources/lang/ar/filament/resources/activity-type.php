<?php

return [
    'title' => 'الأقسام',

    'navigation' => [
        'title' => 'الأقسام',
        'group' => 'الموظفون',
    ],

    'form' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'معلومات عامة',

                'fields' => [
                    'name'                => 'نوع النشاط',
                    'name-tooltip'        => 'أدخل الاسم الرسمي لنوع النشاط',
                    'action'              => 'الإجراء',
                    'default-user'        => 'المستخدم الافتراضي',
                    'summary'             => 'ملخص',
                    'note'                => 'ملاحظة',
                ],
            ],

            'delay-information' => [
                'title' => 'معلومات التأخير',

                'fields' => [
                    'delay-count'            => 'عدد التأخيرات',
                    'delay-unit'             => 'وحدة التأخير',
                    'delay-form'             => 'شكل التأخير',
                    'delay-form-helper-text' => 'مصدر حساب التأخير',
                ],
            ],

            'advanced-information' => [
                'title' => 'معلومات متقدمة',

                'fields' => [
                    'icon'                => 'الأيقونة',
                    'decoration-type'     => 'نوع الزخرفة',
                    'chaining-type'       => 'نوع الربط',
                    'suggest'             => 'اقتراح',
                    'trigger'             => 'تشغيل',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'الحالة والإعدادات',

                'fields' => [
                    'status'               => 'الحالة',
                    'keep-done-activities' => 'الاحتفاظ بالأنشطة المنجزة',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'       => 'نوع النشاط',
            'summary'    => 'ملخص',
            'planned-in' => 'مخطط في',
            'type'       => 'النوع',
            'action'     => 'الإجراء',
            'status'     => 'الحالة',
            'created-at' => 'تاريخ الإنشاء',
            'updated-at' => 'تاريخ التحديث',
        ],

        'groups' => [
            'name'             => 'الاسم',
            'action-category'  => 'فئة الإجراء',
            'status'           => 'الحالة',
            'delay-count'      => 'عدد التأخيرات',
            'delay-unit'       => 'وحدة التأخير',
            'delay-source'     => 'مصدر التأخير',
            'associated-model' => 'النموذج المرتبط',
            'chaining-type'    => 'نوع الربط',
            'decoration-type'  => 'نوع الزخرفة',
            'default-user'     => 'المستخدم الافتراضي',
            'creation-date'    => 'تاريخ الإنشاء',
            'last-update'      => 'آخر تحديث',
        ],

        'filters' => [
            'action'    => 'الإجراء',
            'status'    => 'الحالة',
            'has-delay' => 'يوجد تأخير',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة نوع النشاط',
                    'body'  => 'تم استعادة نوع النشاط بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف نوع النشاط',
                    'body'  => 'تم حذف نوع النشاط بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم الحذف النهائي لنوع النشاط',
                    'body'  => 'تم حذف نوع النشاط بشكل نهائي بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة أنواع النشاط',
                    'body'  => 'تم استعادة أنواع النشاط بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف أنواع النشاط',
                    'body'  => 'تم حذف أنواع النشاط بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم الحذف النهائي لأنواع النشاط',
                    'body'  => 'تم حذف أنواع النشاط بشكل نهائي بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-type-details' => [
                'title' => 'معلومات عامة',

                'entries' => [
                    'name'                => 'نوع النشاط',
                    'name-tooltip'        => 'أدخل الاسم الرسمي لنوع النشاط',
                    'action'              => 'الإجراء',
                    'default-user'        => 'المستخدم الافتراضي',
                    'plugin'              => 'الإضافة',
                    'summary'             => 'ملخص',
                    'note'                => 'ملاحظة',
                ],
            ],

            'delay-information' => [
                'title' => 'معلومات التأخير',

                'entries' => [
                    'delay-count'            => 'عدد التأخيرات',
                    'delay-unit'             => 'وحدة التأخير',
                    'delay-form'             => 'شكل التأخير',
                    'delay-form-helper-text' => 'مصدر حساب التأخير',
                ],
            ],

            'advanced-information' => [
                'title' => 'معلومات متقدمة',

                'entries' => [
                    'icon'                => 'الأيقونة',
                    'decoration-type'     => 'نوع الزخرفة',
                    'chaining-type'       => 'نوع الربط',
                    'suggest'             => 'اقتراح',
                    'trigger'             => 'تشغيل',
                ],
            ],

            'status-and-configuration-information' => [
                'title' => 'الحالة والإعدادات',

                'entries' => [
                    'status'               => 'الحالة',
                    'keep-done-activities' => 'الاحتفاظ بالأنشطة المنجزة',
                ],
            ],
        ],
    ],
];
