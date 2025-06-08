<?php

return [
    'title'      => 'نوع الإجازة',
    'navigation' => [
        'title' => 'نوع الإجازة',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title'  => 'معلومات عامة',
                'fields' => [
                    'name'                => 'العنوان',
                    'approval'            => 'الموافقة',
                    'requires-allocation' => 'يتطلب تخصيص',
                    'employee-requests'   => 'طلبات الموظف',
                    'display-option'      => 'خيار العرض',
                ],
            ],
            'display-option' => [
                'title'  => 'خيار العرض',
                'fields' => [
                    'color' => 'اللون',
                ],
            ],
            'configuration' => [
                'title' => 'الإعدادات',

                'fields' => [
                    'notified-time-off-officers'           => 'إعلام ضباط الإجازات',
                    'take-time-off-in'                     => 'أخذ الإجازة في',
                    'public-holiday-included'              => 'تشمل العطلات الرسمية',
                    'allow-to-attach-supporting-document' => 'السماح بإرفاق مستندات داعمة',
                    'show-on-dashboard'                    => 'عرض في لوحة التحكم',
                    'allow-negative-cap'                   => 'السماح بالسالب',
                    'kind-off-time'                        => 'نوع الوقت',
                    'max-negative-cap'                     => 'الحد الأقصى للسالب',
                    'kind-of-time'                        => 'نوع الإجازة',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                    => 'الاسم',
            'company-name'            => 'الشركة',
            'color'                   => 'اللون',
            'notified-time-officers'  => 'إعلام ضباط الإجازات',
            'time-off-approval'       => 'موافقة الإجازة',
            'requires-allocation'     => 'يتطلب تخصيص',
            'allocation-approval'     => 'موافقة التخصيص',
            'employee-request'        => 'طلب الموظف',
        ],

        'filters' => [
            'name'                => 'الاسم',
            'company-name'        => 'الشركة',
            'time-off-approval'   => 'موافقة الإجازة',
            'requires-allocation' => 'يتطلب تخصيص',
            'time-type'           => 'نوع الوقت',
            'request-unit'        => 'وحدة الطلب',
            'created-by'          => 'تم الإنشاء بواسطة',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف نوع الإجازة',
                    'body'  => 'تم حذف نوع الإجازة بنجاح.',
                ],
            ],
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة نوع الإجازة',
                    'body'  => 'تم استعادة نوع الإجازة بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة نوع الإجازة',
                    'body'  => 'تم استعادة نوع الإجازة بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف نوع الإجازة',
                    'body'  => 'تم حذف نوع الإجازة بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم الحذف النهائي لنوع الإجازة',
                    'body'  => 'تم حذف نوع الإجازة نهائياً بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title'   => 'معلومات عامة',
                'entries' => [
                    'name'                => 'العنوان',
                    'approval'            => 'الموافقة',
                    'requires-allocation' => 'يتطلب تخصيص',
                    'employee-requests'   => 'طلبات الموظف',
                    'display-option'      => 'خيار العرض',
                ],
            ],
            'display-option' => [
                'title'   => 'خيار العرض',
                'entries' => [
                    'color' => 'اللون',
                ],
            ],
            'configuration' => [
                'title' => 'الإعدادات',

                'entries' => [
                    'notified-time-off-officers'           => 'إعلام ضباط الإجازات',
                    'take-time-off-in'                     => 'أخذ الإجازة في',
                    'public-holiday-included'              => 'تشمل العطلات الرسمية',
                    'allow-to-attach-supporting-document' => 'السماح بإرفاق مستندات داعمة',
                    'show-on-dashboard'                    => 'عرض في لوحة التحكم',
                    'kind-off-time'                        => 'نوع الوقت',
                    'max-negative-cap'                     => 'الحد الأقصى للسالب',
                    'kind-of-time'                        => 'نوع الإجازة',
                ],
            ],
        ],
    ],
];
