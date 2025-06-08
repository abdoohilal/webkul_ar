<?php

return [
    'title' => 'سجل التدقيق',
    
    'table' => [
        'description' => 'سجل جميع الأنشطة والأحداث في النظام.',
        'columns' => [
            'user'          => 'المستخدم',
            'action'        => 'الإجراء',
            'model'         => 'النموذج',
            'model_id'      => 'معرف النموذج',
            'old_values'    => 'القيم القديمة',
            'new_values'    => 'القيم الجديدة',
            'ip_address'    => 'عنوان IP',
            'user_agent'    => 'متصفح المستخدم',
            'created_at'    => 'تاريخ الإنشاء',
        ],
        'filters' => [
            'user'          => 'المستخدم',
            'action'        => 'الإجراء',
            'model'         => 'النموذج',
            'date_range'    => 'النطاق الزمني',
        ],
        'actions' => [
            'view' => [
                'label' => 'عرض التفاصيل',
            ],
            'export' => [
                'label' => 'تصدير السجل',
                'notification' => [
                    'title' => 'تم تصدير السجل',
                    'body'  => 'تم تصدير سجل التدقيق بنجاح.',
                ],
            ],
        ],
    ],

    'actions' => [
        'created'   => 'إنشاء',
        'updated'   => 'تحديث',
        'deleted'   => 'حذف',
        'restored'  => 'استعادة',
        'logged_in' => 'تسجيل الدخول',
        'logged_out'=> 'تسجيل الخروج',
    ],
]; 