<?php

return [
    'navigation' => [
        'title' => 'الدروبشيب',
        'group' => 'التحويلات',
    ],

    'table' => [
        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الدروبشيب',
                        'body'  => 'تم حذف الدروبشيب بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف الدروبشيب',
                        'body'  => 'لا يمكن حذف الدروبشيب لأنه قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ], 
        

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'تم حذف الدروبشيب',
                        'body'  => 'تم حذف الدروبشيب بنجاح.',
                    ],

                    'error' => [
                        'title' => 'تعذر حذف الدروبشيب',
                        'body'  => 'لا يمكن حذف الدروبشيب لأنه قيد الاستخدام حالياً.',
                    ],
                ],
            ],
        ],
    ],
];
