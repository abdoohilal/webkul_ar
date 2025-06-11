<?php

return [
    'navigation' => [
        'title' => 'المنتجات',
        'group' => 'المخزون',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عام',

                'fields' => [
                    'receive-from'         => 'الاستلام من',
                    'contact'              => 'الاتصال',
                    'delivery-address'     => 'عنوان التسليم',
                    'operation-type'       => 'نوع العملية',
                    'source-location'      => 'موقع المصدر',
                    'destination-location' => 'موقع الوجهة',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title' => 'العمليات',

                'fields' => [
                    'product'        => 'المنتج',
                    'final-location' => 'الموقع النهائي',
                    'description'    => 'الوصف',
                    'scheduled-at'   => 'المجدول عند',
                    'deadline'       => 'الموعد النهائي',
                    'packaging'      => 'التعبئة',
                    'demand'         => 'الطلب',
                    'quantity'       => 'الكمية',
                    'unit'           => 'الوحدة',
                    'picked'         => 'تم اختيارها',

                    'lines' => [
                        'modal-heading' => 'إدارة حركات المخزون',
                        'add-line'      => 'إضافة خط',

                        'fields' => [
                            'lot'       => 'الدفعة/الرقم التسلسلي',
                            'pick-from' => 'الاختيار من',
                            'location'  => 'التخزين في',
                            'package'   => 'حزمة الوجهة',
                            'quantity'  => 'الكمية',
                            'uom'       => 'وحدة القياس',
                        ],
                    ],
                ],
            ],

            'additional' => [
                'title' => 'إضافي',

                'fields' => [
                    'responsible'                  => 'المسؤول',
                    'shipping-policy'              => 'سياسة الشحن',
                    'shipping-policy-hint-tooltip' => 'يحدد ما إذا كان يجب تسليم البضائع جزئيًا أو دفعة واحدة.',
                    'scheduled-at'                 => 'مجدول عند',
                    'scheduled-at-hint-tooltip'    => 'الوقت المجدول لمعالجة الجزء الأول من الشحنة. سيتم تعيين هذا التاريخ لجميع حركات المخزون عند ضبطه يدويًا.',
                    'source-document'              => 'المستند المصدر',
                    'source-document-hint-tooltip' => 'مرجع المستند',
                ],
            ],

            'note' => [
                'title' => 'ملاحظات',

                'fields' => [],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'reference'       => 'المرجع',
            'from'            => 'من',
            'to'              => 'إلى',
            'contact'         => 'الاتصال',
            'responsible'     => 'المسؤول',
            'scheduled-at'    => 'مجدول عند',
            'deadline'        => 'الموعد النهائي',
            'closed-at'       => 'مغلق عند',
            'source-document' => 'المستند المصدر',
            'operation-type'  => 'نوع العملية',
            'company'         => 'الشركة',
            'state'           => 'الحالة',
            'deleted-at'      => 'تم الحذف عند',
            'created-at'      => 'تم الإنشاء عند',
            'updated-at'      => 'تم التحديث عند',
        ],

        'groups' => [
            'state'           => 'الحالة',
            'source-document' => 'المستند المصدر',
            'operation-type'  => 'نوع العملية',
            'schedule-at'     => 'مجدول عند',
            'created-at'      => 'تم الإنشاء عند',
        ],

        'filters' => [
            'name'                 => 'الاسم',
            'state'                => 'الحالة',
            'partner'              => 'الشريك',
            'responsible'          => 'المسؤول',
            'owner'                => 'المالك',
            'source-location'      => 'موقع المصدر',
            'destination-location' => 'موقع الوجهة',
            'deadline'             => 'الموعد النهائي',
            'scheduled-at'         => 'مجدول عند',
            'closed-at'            => 'مغلق عند',
            'created-at'           => 'تم الإنشاء عند',
            'updated-at'           => 'تم التحديث عند',
            'company'              => 'الشركة',
            'creator'              => 'المنشئ',
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'معلومات عامة',
                'entries' => [
                    'contact'              => 'الاتصال',
                    'operation-type'       => 'نوع العملية',
                    'source-location'      => 'موقع المصدر',
                    'destination-location' => 'موقع الوجهة',
                ],
            ],
        ],

        'tabs' => [
            'operations' => [
                'title'   => 'العمليات',
                'entries' => [
                    'product'        => 'المنتج',
                    'final-location' => 'الموقع النهائي',
                    'description'    => 'الوصف',
                    'scheduled-at'   => 'مجدول عند',
                    'deadline'       => 'الموعد النهائي',
                    'packaging'      => 'التعبئة',
                    'demand'         => 'الطلب',
                    'quantity'       => 'الكمية',
                    'unit'           => 'الوحدة',
                    'picked'         => 'تم اختيارها',
                ],
            ],
            'additional' => [
                'title'   => 'معلومات إضافية',
                'entries' => [
                    'responsible'     => 'المسؤول',
                    'shipping-policy' => 'سياسة الشحن',
                    'scheduled-at'    => 'مجدول عند',
                    'source-document' => 'المستند المصدر',
                ],
            ],
            'note' => [
                'title' => 'ملاحظات',
            ],
        ],
    ],

    'tabs' => [
        'todo'     => 'لإنجاز',
        'my'       => 'تحويلاتي',
        'starred'  => 'المميزة',
        'draft'    => 'مسودة',
        'waiting'  => 'في الانتظار',
        'ready'    => 'جاهزة',
        'done'     => 'تمت',
        'canceled' => 'ألغيت',
    ],
];
