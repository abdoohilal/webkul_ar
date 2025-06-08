<?php

return [
    'setup' => [
        'title'        => 'ملاحظة السجل',
        'submit-title' => 'سجل',

        'form' => [
            'fields' => [
                'hide-subject'            => 'إخفاء الموضوع',
                'add-subject'             => 'إضافة موضوع',
                'subject'                 => 'الموضوع',
                'write-message-here'      => 'اكتب رسالتك هنا',
                'attachments-helper-text' => 'أقصى حجم للملف: 10 ميجابايت. الأنواع المسموح بها: صور، PDF، Word، Excel، نص',
            ],
        ],

        'actions' => [
            'notification' => [
                'success' => [
                    'title' => 'تمت إضافة ملاحظة السجل',
                    'body'  => 'تمت إضافة ملاحظة السجل بنجاح.',
                ],

                'error' => [
                    'title' => 'خطأ في إضافة الملاحظة',
                    'body'  => 'فشل في إضافة ملاحظة السجل الخاصة بك',
                ],
            ],
        ],
    ],
];
