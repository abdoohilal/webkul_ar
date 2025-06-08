<?php

return [
    'navigation' => [
        'title' => 'القواعد',
        'group' => 'إدارة المخزن',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عام',

                'fields' => [
                    'name'                        => 'الاسم',
                    'action'                      => 'الإجراء',
                    'operation-type'              => 'نوع العملية',
                    'source-location'             => 'موقع المصدر',
                    'destination-location'        => 'موقع الوجهة',
                    'supply-method'               => 'طريقة التوريد',
                    'supply-method-hint-tooltip'  => 'السحب من المخزون: المنتجات تُؤخذ مباشرة من المخزون المتاح في موقع المصدر.<br/>تشغيل قاعدة أخرى: يتجاهل النظام المخزون المتوفر ويبحث عن قاعدة مخزون لتجديد موقع المصدر.<br/>السحب من المخزون، وإذا لم يتوفر، تشغيل قاعدة أخرى: يتم أخذ المنتجات أولاً من المخزون المتوفر. وإذا لم يتوفر، يقوم النظام بتطبيق قاعدة مخزون لجلب المنتجات إلى موقع المصدر.',
                    'automatic-move'              => 'التحريك التلقائي',
                    'automatic-move-hint-tooltip' => 'عملية يدوية: تنشئ تحريك مخزون منفصل بعد التحريك الحالي.<br/>تلقائي بدون خطوة مضافة: يستبدل الموقع مباشرة في التحريك الأصلي بدون إضافة خطوة إضافية.',

                    'action-information' => [
                        'pull' => 'عندما تكون المنتجات مطلوبة في <b>:sourceLocation</b>، يتم إنشاء :operation من <b>:destinationLocation</b> لتلبية الطلب.',
                        'push' => 'عندما تصل المنتجات إلى <b>:sourceLocation</b>، يتم إنشاء <b>:operation</b> لنقلها إلى <b>:destinationLocation</b>.',
                    ],
                ],
            ],

            'settings' => [
                'title'  => 'الإعدادات',

                'fields' => [
                    'partner-address'              => 'عنوان الشريك',
                    'partner-address-hint-tooltip' => 'العنوان الذي يجب تسليم البضائع إليه. اختياري.',
                    'lead-time'                    => 'مدة التنفيذ (بالأيام)',
                    'lead-time-hint-tooltip'       => 'سيتم حساب تاريخ النقل المتوقع باستخدام مدة التنفيذ هذه.',
                ],

                'fieldsets' => [
                    'applicability' => [
                        'title'  => 'الملاءمة',

                        'fields' => [
                            'route'   => 'المسار',
                            'company' => 'الشركة',
                        ],
                    ],

                    'propagation' => [
                        'title'  => 'الانتشار',

                        'fields' => [
                            'propagation-procurement-group'              => 'انتشار مجموعة الشراء',
                            'propagation-procurement-group-hint-tooltip' => 'إذا تم تحديدها، فإن إلغاء التحريك الذي تم إنشاؤه بواسطة هذه القاعدة سيُلغي أيضاً التحريك التالي.',
                            'cancel-next-move'                           => 'إلغاء التحريك التالي',
                            'warehouse-to-propagate'                     => 'المستودع الذي سينتشر إليه',
                            'warehouse-to-propagate-hint-tooltip'        => 'المستودع المخصص للتحريك أو الشراء المُنشأ، والذي قد يختلف عن المستودع الذي تُطبق عليه هذه القاعدة (مثلاً قواعد إعادة التوريد من مستودع آخر).',
                        ],
                    ],
                ],

            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                 => 'الاسم',
            'action'               => 'الإجراء',
            'source-location'      => 'موقع المصدر',
            'destination-location' => 'موقع الوجهة',
            'route'                => 'المسار',
            'deleted-at'           => 'تاريخ الحذف',
            'created-at'           => 'تاريخ الإنشاء',
            'updated-at'           => 'تاريخ التحديث',
        ],

        'groups' => [
            'action'               => 'الإجراء',
            'source-location'      => 'موقع المصدر',
            'destination-location' => 'موقع الوجهة',
            'route'                => 'المسار',
            'created-at'           => 'تاريخ الإنشاء',
            'updated-at'           => 'تاريخ التحديث',
        ],

        'filters' => [
            'action'               => 'الإجراء',
            'source-location'      => 'موقع المصدر',
            'destination-location' => 'موقع الوجهة',
            'route'                => 'المسار',
            'company'              => 'الشركة',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث القاعدة',
                    'body'  => 'تم تحديث القاعدة بنجاح.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة القاعدة',
                    'body'  => 'تم استعادة القاعدة بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف القاعدة',
                    'body'  => 'تم حذف القاعدة بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم الحذف الإجباري للقاعدة',
                        'body'  => 'تم حذف القاعدة إجباريًا بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف القاعدة',
                        'body'  => 'لا يمكن حذف القاعدة لأنها مستخدمة حاليًا.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة القواعد',
                    'body'  => 'تم استعادة القواعد بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف القواعد',
                    'body'  => 'تم حذف القواعد بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم الحذف الإجباري للقواعد',
                        'body'  => 'تم حذف القواعد إجباريًا بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف القواعد',
                        'body'  => 'لا يمكن حذف القواعد لأنها مستخدمة حاليًا.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'تفاصيل القاعدة',

                'description' => [
                    'pull' => 'عندما تكون المنتجات مطلوبة في <b>:sourceLocation</b>، يتم إنشاء <b>:operation</b> من <b>:destinationLocation</b> لتلبية الطلب.',
                    'push' => 'عندما تصل المنتجات إلى <b>:sourceLocation</b>، يتم إنشاء <b>:operation</b> لنقلها إلى <b>:destinationLocation</b>.',
                ],

                'entries' => [
                    'name'                 => 'اسم القاعدة',
                    'action'               => 'الإجراء',
                    'operation-type'       => 'نوع العملية',
                    'source-location'      => 'موقع المصدر',
                    'destination-location' => 'موقع الوجهة',
                    'route'                => 'المسار',
                    'company'              => 'الشركة',
                    'partner-address'      => 'عنوان الشريك',
                    'lead-time'            => 'مدة التنفيذ',
                    'action-information'   => 'معلومات الإجراء',
                ],
            ],

            'record-information' => [
                'title' => 'معلومات السجل',

                'entries' => [
                    'created-by'   => 'أنشأ بواسطة',
                    'created-at'   => 'تاريخ الإنشاء',
                    'last-updated' => 'آخر تحديث',
                ],
            ],
        ],
    ],
];
