<?php

return [
    'title' => 'إدارة رموز الدفع',
    
    'form' => [
        'fields' => [
            'company_id'           => 'الشركة',
            'payment_method_id'    => 'طريقة الدفع',
            'partner_id'           => 'الشريك',
            'payment_details'      => 'تفاصيل الدفع',
            'provider_reference_id' => 'مرجع المزود',
            'is_active'            => 'نشط',
        ],
    ],

    'table' => [
        'description' => 'إدارة رموز الدفع المحفوظة في النظام.',
        'header-actions' => [
            'create' => [
                'label' => 'إضافة رمز دفع',
                'notification' => [
                    'title' => 'تم إنشاء رمز الدفع',
                    'body'  => 'تم إنشاء رمز الدفع بنجاح.',
                ],
            ],
        ],
        'columns' => [
            'company_id'           => 'الشركة',
            'payment_method_id'    => 'طريقة الدفع',
            'partner_id'           => 'الشريك',
            'payment_details'      => 'تفاصيل الدفع',
            'provider_reference_id' => 'مرجع المزود',
            'is_active'            => 'نشط',
            'created_at'           => 'تاريخ الإنشاء',
            'updated_at'           => 'تاريخ التحديث',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث رمز الدفع',
                    'body'  => 'تم تحديث رمز الدفع بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف رمز الدفع',
                    'body'  => 'تم حذف رمز الدفع بنجاح.',
                ],
            ],
        ],
    ],
]; 