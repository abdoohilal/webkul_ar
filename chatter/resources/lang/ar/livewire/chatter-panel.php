<?php

return [
    'placeholders' => [
        'no-record-found' => 'لم يتم العثور على سجلات.',
        'loading'         => 'جاري تحميل المحادثة...',
    ],

    'activity-infolist' => [
        'title' => 'النشاطات',
    ],

    'cancel-activity-plan-action' => [
        'title' => 'إلغاء النشاط',
    ],

    'delete-message-action' => [
        'title' => 'حذف الرسالة',
    ],

    'edit-activity' => [
        'title' => 'تعديل النشاط',

        'form' => [
            'fields' => [
                'activity-plan' => 'خطة النشاط',
                'plan-date'     => 'تاريخ الخطة',
                'plan-summary'  => 'ملخص الخطة',
                'activity-type' => 'نوع النشاط',
                'due-date'      => 'تاريخ الاستحقاق',
                'summary'       => 'الملخص',
                'assigned-to'   => 'تعيين إلى',
            ],
        ],

        'action' => [
            'notification' => [
                'success' => [
                    'title' => 'تم تحديث النشاط',
                    'body'  => 'تم تحديث النشاط بنجاح.',
                ],
            ],
        ],
    ],

    'process-message' => [
        'original-note' => '<br><div><span class="font-bold">الملاحظة الأصلية</span>: :body</div>',
        'feedback'      => '<div><span class="font-bold">التغذية الراجعة</span>: <p>:feedback</p></div>',
    ],

    'mark-as-done' => [
        'title' => 'تحديد كمكتمل',
        'form'  => [
            'fields' => [
                'feedback' => 'التغذية الراجعة',
            ],
        ],

        'footer-actions' => [
            'label' => 'مكتمل وجدولة التالي',

            'actions' => [
                'notification' => [
                    'mark-as-done' => [
                        'title' => 'تم تحديد النشاط كمكتمل',
                        'body'  => 'تم تحديد النشاط كمكتمل بنجاح.',
                    ],
                ],
            ],
        ],
    ],
]; 