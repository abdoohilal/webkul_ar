<?php

return [
    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'عام',
                'fields' => [
                    'name' => 'الاسم',
                    'type' => 'النوع',
                ],
            ],
            'options' => [
                'title'  => 'الخيارات',
                'fields' => [
                    'name'        => 'الاسم',
                    'color'       => 'اللون',
                    'extra-price' => 'سعر إضافي',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'        => 'الاسم',
            'type'        => 'النوع',
            'deleted-at'  => 'تاريخ الحذف',
            'created-at'  => 'تاريخ الإنشاء',
            'updated-at'  => 'تاريخ التحديث',
        ],
        'groups' => [
            'type'       => 'النوع',
            'created-at' => 'تاريخ الإنشاء',
            'updated-at' => 'تاريخ التحديث',
        ],
        'filters' => [
            'type' => 'النوع',
        ],
        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الخاصية',
                    'body'  => 'تمت استعادة الخاصية بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الخاصية',
                    'body'  => 'تم حذف الخاصية بنجاح.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الخاصية نهائيًا',
                        'body'  => 'تم حذف الخاصية نهائيًا بنجاح.',
                    ],
                    'error' => [
                        'title' => 'تعذر حذف الخاصية',
                        'body'  => 'لا يمكن حذف الخاصية لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الخصائص',
                    'body'  => 'تمت استعادة الخصائص بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الخصائص',
                    'body'  => 'تم حذف الخصائص بنجاح.',
                ],
            ],
            'force-delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الخصائص نهائيًا',
                        'body'  => 'تم حذف الخصائص نهائيًا بنجاح.',
                    ],
                    'error' => [
                        'title' => 'تعذر حذف الخصائص',
                        'body'  => 'لا يمكن حذف الخصائص لأنها قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'معلومات عامة',
                'entries' => [
                    'name' => 'الاسم',
                    'type' => 'النوع',
                ],
            ],
            'record-information' => [
                'title' => 'معلومات السجل',
                'entries' => [
                    'creator'    => 'تم الإنشاء بواسطة',
                    'created_at' => 'تاريخ الإنشاء',
                    'updated_at' => 'آخر تحديث',
                ],
            ],
        ],
    ],
]; 