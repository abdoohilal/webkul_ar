<?php

return [
    'title' => 'تخصيصي',

    'model-label' => 'تخصيصي',

    'navigation' => [
        'title' => 'تخصيصي',
    ],

    'form' => [
        'fields' => [
            'name'                => 'الاسم',
            'name-placeholder'    => 'نوع الإجازة (من بداية الصلاحية إلى نهاية الصلاحية/بدون حد)',
            'time-off-type'       => 'نوع الإجازة',
            'allocation-type'     => 'نوع التخصيص',
            'validity-period'     => 'فترة الصلاحية',
            'date-from'           => 'تاريخ البدء',
            'date-to'             => 'تاريخ الانتهاء',
            'date-to-placeholder' => 'بدون حد',
            'allocation'          => 'التخصيص',
            'allocation-suffix'   => 'عدد الأيام',
            'reason'              => 'السبب',
        ],
    ],

    'table' => [
        'columns' => [
            'time-off-type'   => 'نوع الإجازة',
            'amount'          => 'الكمية',
            'allocation-type' => 'نوع التخصيص',
            'status'          => 'الحالة',
        ],

        'groups' => [
            'time-off-type'   => 'نوع الإجازة',
            'employee-name'   => 'اسم الموظف',
            'allocation-type' => 'نوع التخصيص',
            'status'          => 'الحالة',
            'start-date'      => 'تاريخ البدء',
        ],

        'actions' => [
            'approve' => [
                'title' => [
                    'validate' => 'التحقق',
                    'approve'  => 'الموافقة',
                ],
                'notification' => [
                    'title' => 'تمت الموافقة على التخصيص',
                    'body'  => 'تمت الموافقة على التخصيص بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف التخصيص',
                    'body'  => 'تم حذف التخصيص بنجاح.',
                ],
            ],

            'refused' => [
                'title'        => 'رفض',
                'notification' => [
                    'title' => 'تم رفض التخصيص',
                    'body'  => 'تم رفض التخصيص بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف التخصيصات',
                    'body'  => 'تم حذف التخصيصات بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'allocation-details' => [
                'title'   => 'تفاصيل التخصيص',
                'entries' => [
                    'name'                => 'الاسم',
                    'time-off-type'       => 'نوع الإجازة',
                    'allocation-type'     => 'نوع التخصيص',
                ],
            ],

            'validity-period' => [
                'title'   => 'فترة الصلاحية',
                'entries' => [
                    'date-from' => 'تاريخ البدء',
                    'date-to'   => 'تاريخ الانتهاء',
                    'reason'    => 'السبب',
                ],
            ],
            'allocation-status' => [
                'title'   => 'حالة التخصيص',
                'entries' => [
                    'date-to-placeholder' => 'بدون حد',
                    'allocation'          => 'عدد الأيام',
                    'allocation-value'    => ':days عدد الأيام',
                    'state'               => 'الحالة',
                ],
            ],
        ],
    ],
];
