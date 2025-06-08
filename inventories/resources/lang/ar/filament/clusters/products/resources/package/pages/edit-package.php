<?php

return [
    'notification' => [
        'title' => 'تم تحديث الحزمة',
        'body'  => 'تم تحديث الحزمة بنجاح.',
    ],

    'header-actions' => [
        'print' => [
            'label' => 'طباعة',

            'actions' => [
                'without-content' => [
                    'label' => 'طباعة الباركود',
                ],

                'with-content' => [
                    'label' => 'طباعة الباركود مع المحتوى',
                ],
            ],
        ],

        'delete' => [
            'notification' => [
                'success' => [
                    'title' => 'تم حذف الحزمة',
                    'body'  => 'تم حذف الحزمة بنجاح.',
                ],

                'error' => [
                    'title' => 'تعذر حذف الحزمة',
                    'body'  => 'لا يمكن حذف الحزمة لأنها قيد الاستخدام حالياً.',
                ],
            ],
        ],
    ],
];
