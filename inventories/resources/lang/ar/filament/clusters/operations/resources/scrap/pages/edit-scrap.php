<?php

return [
    'notification' => [
        'title' => 'تم تحديث الخردة',
        'body'  => 'تم تحديث الخردة بنجاح.',
    ],

    'header-actions' => [
        'validate' => [
            'label' => 'تأكيد',

            'notification' => [
                'warning' => [
                    'title' => 'المخزون غير كافٍ',
                    'body'  => 'المخزون غير كافٍ لتأكيد الخردة.',
                ],

                'success' => [
                    'title' => 'تم تأكيد الخردة',
                    'body'  => 'تم تأكيد الخردة بنجاح.',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'تم حذف الخردة',
                    'body'  => 'تم حذف الخردة بنجاح.',
                ],

                'error' => [
                    'title' => 'تعذر حذف الخردة',
                    'body'  => 'لا يمكن حذف الخردة لأنها قيد الاستخدام حالياً.',
                ],
            ],
        ],
    ],
];
