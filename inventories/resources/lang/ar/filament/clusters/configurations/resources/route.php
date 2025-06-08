<?php

return [
    'navigation' => [
        'title' => 'المسارات',
        'group' => 'إدارة المستودعات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عام',

                'fields' => [
                    'route'             => 'المسار',
                    'route-placeholder' => 'مثال: استقبال على مرحلتين',
                    'company'           => 'الشركة',
                ],
            ],

            'applicable-on' => [
                'title'       => 'ينطبق على',
                'description' => 'اختر الأماكن التي يمكن تطبيق هذا المسار فيها.',

                'fields' => [
                    'products'                        => 'المنتجات',
                    'products-hint-tooltip'           => 'إذا تم الاختيار، سيكون هذا المسار متاحًا للاختيار على المنتج.',
                    'product-categories'              => 'فئات المنتجات',
                    'product-categories-hint-tooltip' => 'إذا تم الاختيار، سيكون هذا المسار متاحًا للاختيار على فئة المنتج.',
                    'warehouses'                      => 'المستودعات',
                    'warehouses-hint-tooltip'         => 'عندما يتم تعيين مستودع لهذا المسار، سيُعتبر المسار الافتراضي للمنتجات التي تمر عبر ذلك المستودع.',
                    'packaging'                       => 'التغليف',
                    'packaging-hint-tooltip'          => 'إذا تم الاختيار، سيكون هذا المسار متاحًا للاختيار على التغليف.',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'route'      => 'المسار',
            'company'    => 'الشركة',
            'deleted-at' => 'تم الحذف بتاريخ',
            'created-at' => 'تم الإنشاء بتاريخ',
            'updated-at' => 'تم التحديث بتاريخ',
        ],

        'groups' => [
            'created-at' => 'تم الإنشاء بتاريخ',
            'updated-at' => 'تم التحديث بتاريخ',
        ],

        'filters' => [
            'company'  => 'الشركة',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث المسار',
                    'body'  => 'تم تحديث المسار بنجاح.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة المسار',
                    'body'  => 'تم استعادة المسار بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المسار',
                    'body'  => 'تم حذف المسار بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم الحذف النهائي للمسار',
                        'body'  => 'تم حذف المسار نهائيًا بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف المسار',
                        'body'  => 'لا يمكن حذف المسار لأنه قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تمت استعادة المسارات',
                    'body'  => 'تم استعادة المسارات بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المسارات',
                    'body'  => 'تم حذف المسارات بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم الحذف النهائي للمسارات',
                        'body'  => 'تم حذف المسارات نهائيًا بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف المسارات',
                        'body'  => 'لا يمكن حذف المسارات لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'  => 'عام',

                'entries' => [
                    'route'             => 'المسار',
                    'route-placeholder' => 'مثال: استقبال على مرحلتين',
                    'company'           => 'الشركة',
                ],
            ],

            'applicable-on' => [
                'title'       => 'ينطبق على',
                'description' => 'اختر الأماكن التي يمكن اختيار هذا المسار فيها.',

                'entries' => [
                    'products'                        => 'المنتجات',
                    'products-hint-tooltip'           => 'إذا تم الاختيار، سيكون هذا المسار متاحًا للاختيار على المنتج.',
                    'product-categories'              => 'فئات المنتجات',
                    'product-categories-hint-tooltip' => 'إذا تم الاختيار، سيكون هذا المسار متاحًا للاختيار على فئة المنتج.',
                    'warehouses'                      => 'المستودعات',
                    'warehouses-hint-tooltip'         => 'عندما يتم تعيين مستودع لهذا المسار، سيُعتبر المسار الافتراضي للمنتجات التي تمر عبر ذلك المستودع.',
                    'packaging'                       => 'التغليف',
                    'packaging-hint-tooltip'          => 'إذا تم الاختيار، سيكون هذا المسار متاحًا للاختيار على التغليف.',
                ],
            ],

            'record-information' => [
                'title' => 'معلومات السجل',

                'entries' => [
                    'created-by'   => 'تم الإنشاء بواسطة',
                    'created-at'   => 'تم الإنشاء بتاريخ',
                    'last-updated' => 'آخر تحديث',
                ],
            ],
        ],
    ],
];
