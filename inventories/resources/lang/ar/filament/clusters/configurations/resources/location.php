<?php

return [
    'navigation' => [
        'title' => 'المواقع',
        'group' => 'إدارة المستودعات',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عام',

                'fields' => [
                    'location'                     => 'الموقع',
                    'location-placeholder'         => 'مثال: المخزون الاحتياطي',
                    'parent-location'              => 'الموقع الرئيسي',
                    'parent-location-hint-tooltip' => 'الموقع الرئيسي الذي يشمل هذا الموقع. على سبيل المثال، "منطقة الإرسال" هي جزء من الموقع الرئيسي "البوابة 1".',
                    'external-notes'               => 'ملاحظات خارجية',
                ],
            ],

            'settings' => [
                'title'  => 'الإعدادات',

                'fields' => [
                    'location-type'                 => 'نوع الموقع',
                    'company'                       => 'الشركة',
                    'storage-category'              => 'فئة التخزين',
                    'is-scrap'                      => 'هل هو موقع للخردة؟',
                    'is-scrap-hint-tooltip'         => 'حدد هذا الخيار لتعيين هذا الموقع لتخزين البضائع التالفة أو غير الصالحة.',
                    'is-dock'                       => 'هل هو موقع تحميل؟',
                    'is-dock-hint-tooltip'          => 'حدد هذا الخيار لتعيين هذا الموقع لتخزين البضائع الجاهزة للشحن.',
                    'is-replenish'                  => 'هل هو موقع للتجديد؟',
                    'is-replenish-hint-tooltip'     => 'قم بتمكين هذا الخيار لاسترجاع جميع الكميات المطلوبة للتجديد في هذا الموقع.',
                    'logistics'                     => 'الخدمات اللوجستية',
                    'removal-strategy'              => 'استراتيجية الإزالة',
                    'removal-strategy-hint-tooltip' => 'يحدد الطريقة الافتراضية لتحديد الرف أو الدفعة أو الموقع المناسب لسحب المنتجات. يمكن تطبيق هذه الطريقة على مستوى فئة المنتج، مع الرجوع للمواقع الرئيسية إذا لم يتم تعيينها هنا.',
                    'cyclic-counting'               => 'العدّ الدوري',
                    'inventory-frequency'           => 'تكرار الجرد',
                    'last-inventory'                => 'آخر جرد',
                    'last-inventory-hint-tooltip'   => 'تاريخ آخر جرد في هذا الموقع.',
                    'next-expected'                 => 'التاريخ المتوقع التالي',
                    'next-expected-hint-tooltip'    => 'تاريخ الجرد القادم المخطط له وفقاً للجدول الدوري.',
                ],
            ],

            'additional' => [
                'title'  => 'معلومات إضافية',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'location'         => 'الموقع',
            'type'             => 'النوع',
            'storage-category' => 'فئة التخزين',
            'company'          => 'الشركة',
            'deleted-at'       => 'تاريخ الحذف',
            'created-at'       => 'تاريخ الإنشاء',
            'updated-at'       => 'تاريخ التحديث',
        ],

        'groups' => [
            'warehouse'       => 'المستودع',
            'type'            => 'النوع',
            'created-at'      => 'تاريخ الإنشاء',
            'updated-at'      => 'تاريخ التحديث',
        ],

        'filters' => [
            'location' => 'الموقع',
            'type'     => 'النوع',
            'company'  => 'الشركة',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث الموقع',
                    'body'  => 'تم تحديث الموقع بنجاح.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الموقع',
                    'body'  => 'تم استعادة الموقع بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الموقع',
                    'body'  => 'تم حذف الموقع بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم الحذف القسري للموقع',
                        'body'  => 'تم حذف الموقع نهائيًا بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف الموقع',
                        'body'  => 'لا يمكن حذف الموقع لأنه قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'print' => [
                'label' => 'طباعة الباركود',
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تمت استعادة المواقع',
                    'body'  => 'تمت استعادة المواقع بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المواقع',
                    'body'  => 'تم حذف المواقع بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم الحذف القسري للمواقع',
                        'body'  => 'تم حذف المواقع نهائيًا بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف المواقع',
                        'body'  => 'لا يمكن حذف المواقع لأنها قيد الاستخدام حالياً.',
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
                    'location'                     => 'الموقع',
                    'location-placeholder'         => 'مثال: المخزون الاحتياطي',
                    'parent-location'              => 'الموقع الرئيسي',
                    'parent-location-hint-tooltip' => 'الموقع الرئيسي الذي يشمل هذا الموقع. على سبيل المثال، "منطقة الإرسال" هي جزء من الموقع الرئيسي "البوابة 1".',
                    'external-notes'               => 'ملاحظات خارجية',
                ],
            ],

            'settings' => [
                'title'  => 'الإعدادات',

                'entries' => [
                    'location-type'                 => 'نوع الموقع',
                    'company'                       => 'الشركة',
                    'storage-category'              => 'فئة التخزين',
                    'is-scrap'                      => 'هل هو موقع للخردة؟',
                    'is-scrap-hint-tooltip'         => 'حدد هذا الخيار لتعيين هذا الموقع لتخزين البضائع التالفة أو غير الصالحة.',
                    'is-dock'                       => 'هل هو موقع تحميل؟',
                    'is-dock-hint-tooltip'          => 'حدد هذا الخيار لتعيين هذا الموقع لتخزين البضائع الجاهزة للشحن.',
                    'is-replenish'                  => 'هل هو موقع للتجديد؟',
                    'is-replenish-hint-tooltip'     => 'قم بتمكين هذا الخيار لاسترجاع جميع الكميات المطلوبة للتجديد في هذا الموقع.',
                    'logistics'                     => 'الخدمات اللوجستية',
                    'removal-strategy'              => 'استراتيجية الإزالة',
                    'removal-strategy-hint-tooltip' => 'يحدد الطريقة الافتراضية لتحديد الرف أو الدفعة أو الموقع المناسب لسحب المنتجات.',
                    'cyclic-counting'               => 'العدّ الدوري',
                    'inventory-frequency'           => 'تكرار الجرد',
                    'last-inventory'                => 'آخر جرد',
                    'last-inventory-hint-tooltip'   => 'تاريخ آخر جرد في هذا الموقع.',
                    'next-expected'                 => 'التاريخ المتوقع التالي',
                    'next-expected-hint-tooltip'    => 'تاريخ الجرد القادم وفقًا للجدول الدوري.',
                ],
            ],

            'additional' => [
                'title'  => 'معلومات إضافية',
            ],

            'record-information' => [
                'title' => 'معلومات السجل',

                'entries' => [
                    'created-by'   => 'تم الإنشاء بواسطة',
                    'created-at'   => 'تاريخ الإنشاء',
                    'last-updated' => 'آخر تحديث',
                ],
            ],
        ],
    ],
];
