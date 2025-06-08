<?php

return [
    'title' => 'إدارة التذاكر',
    
    'form' => [
        'fields' => [
            'subject'           => 'الموضوع',
            'description'       => 'الوصف',
            'status'           => 'الحالة',
            'priority'         => 'الأولوية',
            'department_id'    => 'القسم',
            'assigned_to_id'   => 'تعيين إلى',
            'customer_id'      => 'العميل',
            'attachments'      => 'المرفقات',
        ],
    ],

    'table' => [
        'description' => 'إدارة تذاكر الدعم الفني في النظام.',
        'header-actions' => [
            'create' => [
                'label' => 'إضافة تذكرة',
                'notification' => [
                    'title' => 'تم إنشاء التذكرة',
                    'body'  => 'تم إنشاء التذكرة بنجاح.',
                ],
            ],
        ],
        'columns' => [
            'ticket_number'  => 'رقم التذكرة',
            'subject'       => 'الموضوع',
            'status'        => 'الحالة',
            'priority'      => 'الأولوية',
            'department'    => 'القسم',
            'assigned_to'   => 'تعيين إلى',
            'customer'      => 'العميل',
            'created_at'    => 'تاريخ الإنشاء',
            'updated_at'    => 'تاريخ التحديث',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث التذكرة',
                    'body'  => 'تم تحديث التذكرة بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف التذكرة',
                    'body'  => 'تم حذف التذكرة بنجاح.',
                ],
            ],
            'close' => [
                'label' => 'إغلاق التذكرة',
                'notification' => [
                    'title' => 'تم إغلاق التذكرة',
                    'body'  => 'تم إغلاق التذكرة بنجاح.',
                ],
            ],
            'reopen' => [
                'label' => 'إعادة فتح التذكرة',
                'notification' => [
                    'title' => 'تم إعادة فتح التذكرة',
                    'body'  => 'تم إعادة فتح التذكرة بنجاح.',
                ],
            ],
        ],
    ],
]; 