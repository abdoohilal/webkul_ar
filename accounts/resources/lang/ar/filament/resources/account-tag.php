<?php

return [
    'form' => [
        'fields' => [
            'color'         => 'اللون',
            'country'       => 'الدولة',
            'applicability' => 'التطبيق',
            'name'          => 'الاسم',
            'status'        => 'الحالة',
            'tax-negate'    => 'تعويض الضريبة',
        ],
    ],

    'table' => [
        'columns' => [
            'color'         => 'اللون',
            'country'       => 'الدولة',
            'created-by'    => 'أنشأ بواسطة',
            'applicability' => 'التطبيق',
            'name'          => 'الاسم',
            'status'        => 'الحالة',
            'tax-negate'    => 'تعويض الضريبة',
            'created-at'    => 'تاريخ الإنشاء',
            'updated-at'    => 'تاريخ التحديث',
            'deleted-at'    => 'تاريخ الحذف',
        ],

        'filters' => [
            'bank'           => 'البنك',
            'account-holder' => 'صاحب الحساب',
            'creator'        => 'المنشئ',
            'can-send-money' => 'يمكنه إرسال الأموال',
        ],

        'groups' => [
            'country'       => 'الدولة',
            'created-by'    => 'أنشأ بواسطة',
            'applicability' => 'التطبيق',
            'name'          => 'الاسم',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث وسم الحساب',
                    'body'  => 'تم تحديث وسم الحساب بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف وسم الحساب',
                    'body'  => 'تم حذف وسم الحساب بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف أوسمة الحسابات',
                    'body'  => 'تم حذف أوسمة الحسابات بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'color'         => 'اللون',
            'country'       => 'الدولة',
            'applicability' => 'التطبيق',
            'name'          => 'الاسم',
            'status'        => 'الحالة',
            'tax-negate'    => 'تعويض الضريبة',
        ],
    ],
];
