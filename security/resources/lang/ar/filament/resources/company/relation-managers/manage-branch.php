<?php

return [
    'form' => [
        'tabs' => [
            'general-information' => [
                'title' => 'المعلومات العامة',

                'sections' => [
                    'branch-information' => [
                        'title' => 'معلومات الفرع',

                        'fields' => [
                            'company-name'                => 'اسم الشركة',
                            'registration-number'         => 'رقم التسجيل',
                            'tax-id'                      => 'الرقم الضريبي',
                            'tax-id-tooltip'              => 'الرقم الضريبي هو معرف فريد لشركتك.',
                            'color'                       => 'اللون',
                            'company-id'                  => 'معرف الشركة',
                            'company-id-tooltip'          => 'معرف الشركة هو معرف فريد لشركتك.',
                        ],
                    ],

                    'branding' => [
                        'title'  => 'العلامة التجارية',
                        'fields' => [
                            'branch-logo' => 'شعار الفرع',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'معلومات العنوان',

                'sections' => [
                    'address-information' => [
                        'title' => 'معلومات العنوان',

                        'fields' => [
                            'street1'                => 'الشارع 1',
                            'street2'                => 'الشارع 2',
                            'city'                   => 'المدينة',
                            'zip'                    => 'الرمز البريدي',
                            'country'                => 'البلد',
                            'country-currency-name'  => 'اسم العملة',
                            'country-phone-code'     => 'رمز الهاتف',
                            'country-code'           => 'الرمز',
                            'country-name'           => 'اسم البلد',
                            'country-state-required' => 'الحالة مطلوبة',
                            'country-zip-required'   => 'الرمز البريدي مطلوب',
                            'country-create'         => 'إنشاء بلد',
                            'state'                  => 'المقاطعة/الولاية',
                            'state-name'             => 'اسم المقاطعة/الولاية',
                            'state-code'             => 'رمز المقاطعة/الولاية',
                            'zip-code'               => 'الرمز البريدي',
                            'state-create'           => 'إنشاء ولاية/مقاطعة',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'معلومات إضافية',

                        'fields' => [
                            'default-currency'        => 'العملة الافتراضية',
                            'currency-name'           => 'اسم العملة',
                            'currency-full-name'      => 'الاسم الكامل للعملة',
                            'currency-symbol'         => 'رمز العملة',
                            'currency-iso-numeric'    => 'الرمز الرقمي ISO للعملة',
                            'currency-decimal-places' => 'خانات عشرية للعملة',
                            'currency-rounding'       => 'تقريب العملة',
                            'currency-status'         => 'حالة العملة',
                            'currency-create'         => 'إنشاء عملة',
                            'company-foundation-date' => 'تاريخ تأسيس الشركة',
                            'status'                  => 'الحالة',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'معلومات الاتصال',

                'sections' => [
                    'contact-information' => [
                        'title' => 'معلومات الاتصال',

                        'fields' => [
                            'email-address' => 'البريد الإلكتروني',
                            'phone-number'  => 'رقم الهاتف',
                            'mobile-number' => 'رقم الهاتف المحمول',
                        ],
                    ],
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'الشعار',
            'company-name'         => 'اسم الفرع',
            'branches'             => 'الفروع',
            'email'                => 'البريد الإلكتروني',
            'city'                 => 'المدينة',
            'country'              => 'البلد',
            'currency'             => 'العملة',
            'status'               => 'الحالة',
            'created-at'           => 'تاريخ الإنشاء',
            'updated-at'           => 'تاريخ التحديث',
        ],

        'groups' => [
            'company-name' => 'اسم الفرع',
            'city'         => 'المدينة',
            'country'      => 'البلد',
            'state'        => 'المقاطعة/الولاية',
            'email'        => 'البريد الإلكتروني',
            'phone'        => 'الهاتف',
            'currency'     => 'العملة',
            'created-at'   => 'تاريخ الإنشاء',
            'updated-at'   => 'تاريخ التحديث',
        ],

        'filters' => [
            'trashed' => 'محذوف',
            'status'  => 'الحالة',
            'country' => 'البلد',
        ],

        'header-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'تم إنشاء الفرع',
                    'body'  => 'تم إنشاء الفرع بنجاح.',
                ],
            ],
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث الفرع',
                    'body'  => 'تم تحديث الفرع بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الفرع',
                    'body'  => 'تم حذف الفرع بنجاح.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الفرع',
                    'body'  => 'تم استعادة الفرع بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الفروع',
                    'body'  => 'تم استعادة الفروع بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الفروع',
                    'body'  => 'تم حذف الفروع بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم الحذف النهائي للفروع',
                    'body'  => 'تم الحذف النهائي للفروع بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'tabs' => [
            'general-information' => [
                'title' => 'المعلومات العامة',

                'sections' => [
                    'branch-information' => [
                        'title' => 'معلومات الفرع',

                        'entries' => [
                            'company-name'                => 'اسم الشركة',
                            'registration-number'         => 'رقم التسجيل',
                            'registration-number-tooltip' => 'الرقم الضريبي هو معرف فريد لشركتك.',
                            'color'                       => 'اللون',
                        ],
                    ],

                    'branding' => [
                        'title'   => 'العلامة التجارية',
                        'entries' => [
                            'branch-logo' => 'شعار الفرع',
                        ],
                    ],
                ],
            ],

            'address-information' => [
                'title' => 'معلومات العنوان',

                'sections' => [
                    'address-information' => [
                        'title' => 'معلومات العنوان',

                        'entries' => [
                            'street1'                => 'الشارع 1',
                            'street2'                => 'الشارع 2',
                            'city'                   => 'المدينة',
                            'zip'                    => 'الرمز البريدي',
                            'country'                => 'البلد',
                            'country-currency-name'  => 'اسم العملة',
                            'country-phone-code'     => 'رمز الهاتف',
                            'country-code'           => 'الرمز',
                            'country-name'           => 'اسم البلد',
                            'country-state-required' => 'الحالة مطلوبة',
                            'country-zip-required'   => 'الرمز البريدي مطلوب',
                            'country-create'         => 'إنشاء بلد',
                            'state'                  => 'المقاطعة/الولاية',
                            'state-name'             => 'اسم المقاطعة/الولاية',
                            'state-code'             => 'رمز المقاطعة/الولاية',
                            'zip-code'               => 'الرمز البريدي',
                            'state-create'           => 'إنشاء ولاية/مقاطعة',
                        ],
                    ],

                    'additional-information' => [
                        'title' => 'معلومات إضافية',

                        'entries' => [
                            'default-currency'        => 'العملة الافتراضية',
                            'currency-name'           => 'اسم العملة',
                            'currency-full-name'      => 'الاسم الكامل للعملة',
                            'currency-symbol'         => 'رمز العملة',
                            'currency-iso-numeric'    => 'الرمز الرقمي ISO للعملة',
                            'currency-decimal-places' => 'خانات عشرية للعملة',
                            'currency-rounding'       => 'تقريب العملة',
                            'currency-status'         => 'حالة العملة',
                            'currency-create'         => 'إنشاء عملة',
                            'company-foundation-date' => 'تاريخ تأسيس الشركة',
                            'status'                  => 'الحالة',
                        ],
                    ],
                ],
            ],

            'contact-information' => [
                'title' => 'معلومات الاتصال',

                'sections' => [
                    'contact-information' => [
                        'title' => 'معلومات الاتصال',

                        'entries' => [
                            'email-address' => 'البريد الإلكتروني',
                            'phone-number'  => 'رقم الهاتف',
                            'mobile-number' => 'رقم الهاتف المحمول',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
