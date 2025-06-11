<?php

return [
    'navigation' => [
        'title' => 'الكميات',
        'group' => 'التعديلات',
    ],

    'form' => [
        'fields' => [
            'location'         => 'الموقع',
            'product'          => 'المنتج',
            'package'          => 'الحزمة',
            'lot'              => 'الأرقام التسلسلية / الدفعات',
            'counted-qty'      => 'الكمية المحسوبة',
            'scheduled-at'     => 'موعد الجدولة',
            'storage-category' => 'فئة التخزين',
        ],
    ],

    'table' => [
        'columns' => [
            'location'           => 'الموقع',
            'product'            => 'المنتج',
            'product-category'   => 'فئة المنتج',
            'lot'                => 'الأرقام التسلسلية / الدفعات',
            'storage-category'   => 'فئة التخزين',
            'available-quantity' => 'الكمية المتاحة',
            'quantity'           => 'الكمية',
            'package'            => 'الحزمة',
            'last-counted-at'    => 'آخر تاريخ للحساب',
            'on-hand'            => 'الكمية الموجودة',
            'counted'            => 'الكمية المحسوبة',
            'difference'         => 'الفرق',
            'scheduled-at'       => 'موعد الجدولة',
            'user'               => 'المستخدم',
            'company'            => 'الشركة',

            'on-hand-before-state-updated' => [
                'notification' => [
                    'title' => 'تم تحديث الكمية',
                    'body'  => 'تم تحديث الكمية بنجاح.',
                ],
            ],
        ],

        'groups' => [
            'product'          => 'المنتج',
            'product-category' => 'فئة المنتج',
            'location'         => 'الموقع',
            'storage-category' => 'فئة التخزين',
            'lot'              => 'الأرقام التسلسلية / الدفعات',
            'company'          => 'الشركة',
            'package'          => 'الحزمة',
        ],

        'filters' => [
            'product'             => 'المنتج',
            'uom'                 => 'وحدة القياس',
            'product-category'    => 'فئة المنتج',
            'location'            => 'الموقع',
            'storage-category'    => 'فئة التخزين',
            'lot'                 => 'الأرقام التسلسلية / الدفعات',
            'company'             => 'الشركة',
            'package'             => 'الحزمة',
            'on-hand-quantity'    => 'الكمية الموجودة',
            'difference-quantity' => 'كمية الفرق',
            'incoming-at'         => 'الوارد في',
            'scheduled-at'        => 'موعد الجدولة',
            'user'                => 'المستخدم',
            'created-at'          => 'تاريخ الإنشاء',
            'updated-at'          => 'تاريخ التحديث',
            'creator'             => 'المنشئ',
        ],

        'header-actions' => [
            'create' => [
                'label' => 'إضافة كمية',

                'notification' => [
                    'title' => 'تمت إضافة الكمية',
                    'body'  => 'تمت إضافة الكمية بنجاح.',
                ],

                'before' => [
                    'notification' => [
                        'title' => 'الكمية موجودة بالفعل',
                        'body'  => 'الكمية موجودة بالفعل لهذا التكوين. يرجى تحديث الكمية الحالية بدلاً من ذلك.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'apply' => [
                'label' => 'تطبيق',

                'notification' => [
                    'title' => 'تم تطبيق التغييرات',
                    'body'  => 'تم تطبيق تغييرات الكمية بنجاح.',
                ],
            ],

            'clear' => [
                'label' => 'مسح',

                'notification' => [
                    'title' => 'تم مسح التغييرات',
                    'body'  => 'تم مسح تغييرات الكمية بنجاح.',
                ],
            ],
        ],
    ],
];
