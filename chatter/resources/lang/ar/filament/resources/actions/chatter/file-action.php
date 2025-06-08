<?php

return [
    'setup' => [
        'title'   => 'المرفقات',
        'tooltip' => 'رفع المرفقات',

        'form' => [
            'fields' => [
                'files'                  => 'الملفات',
                'attachment-helper-text' => 'أقصى حجم للملف: 10 ميجابايت. الأنواع المسموح بها: صور، PDF، Word، Excel، نص',

                'actions' => [
                    'delete' => [
                        'title' => 'تم حذف الملف',
                        'body'  => 'تم حذف الملف بنجاح.',
                    ],
                ],
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'تم رفع المرفقات',
                    'body'  => 'تم رفع المرفقات بنجاح.',
                ],

                'warning'  => [
                    'title' => 'لا توجد ملفات جديدة',
                    'body'  => 'تم رفع جميع الملفات مسبقًا.',
                ],

                'error' => [
                    'title' => 'خطأ في رفع المرفقات',
                    'body'  => 'فشل في رفع المرفقات.',
                ],
            ],
        ],
    ],
];
