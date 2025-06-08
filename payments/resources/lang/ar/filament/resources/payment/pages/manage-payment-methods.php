<?php

return [
    'title' => 'إدارة طرق الدفع',
    
    'form' => [
        'fields' => [
            'name'                    => 'الاسم',
            'code'                    => 'الرمز',
            'is_active'              => 'نشط',
            'support_refund'         => 'يدعم الاسترداد',
            'support_tokenization'    => 'يدعم الترميز',
            'support_express_checkout' => 'يدعم الدفع السريع',
            'sort'                   => 'ترتيب',
        ],
    ],

    'table' => [
        'description' => 'إدارة طرق الدفع المتاحة في النظام.',
        'header-actions' => [
            'create' => [
                'label' => 'إضافة طريقة دفع',
                'notification' => [
                    'title' => 'تم إنشاء طريقة الدفع',
                    'body'  => 'تم إنشاء طريقة الدفع بنجاح.',
                ],
            ],
        ],
        'columns' => [
            'name'                    => 'الاسم',
            'code'                    => 'الرمز',
            'is_active'              => 'نشط',
            'support_refund'         => 'يدعم الاسترداد',
            'support_tokenization'    => 'يدعم الترميز',
            'support_express_checkout' => 'يدعم الدفع السريع',
            'sort'                   => 'ترتيب',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث طريقة الدفع',
                    'body'  => 'تم تحديث طريقة الدفع بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف طريقة الدفع',
                    'body'  => 'تم حذف طريقة الدفع بنجاح.',
                ],
            ],
        ],
    ],
]; 