<?php

return [
    'title' => 'إدارة الموظفين',
    
    'form' => [
        'fields' => [
            'employee_id'    => 'رقم الموظف',
            'name'          => 'الاسم',
            'email'         => 'البريد الإلكتروني',
            'phone'         => 'رقم الهاتف',
            'department_id' => 'القسم',
            'position_id'   => 'المنصب',
            'manager_id'    => 'المدير المباشر',
            'join_date'     => 'تاريخ التعيين',
            'status'        => 'الحالة',
            'salary'        => 'الراتب',
            'bank_account'  => 'الحساب المصرفي',
            'address'       => 'العنوان',
            'emergency_contact' => 'جهة الاتصال في حالات الطوارئ',
            'documents'     => 'المستندات',
        ],
    ],

    'table' => [
        'description' => 'إدارة معلومات الموظفين في النظام.',
        'header-actions' => [
            'create' => [
                'label' => 'إضافة موظف',
                'notification' => [
                    'title' => 'تم إنشاء الموظف',
                    'body'  => 'تم إنشاء الموظف بنجاح.',
                ],
            ],
        ],
        'columns' => [
            'employee_id'    => 'رقم الموظف',
            'name'          => 'الاسم',
            'department'    => 'القسم',
            'position'      => 'المنصب',
            'manager'       => 'المدير المباشر',
            'email'         => 'البريد الإلكتروني',
            'phone'         => 'رقم الهاتف',
            'status'        => 'الحالة',
            'join_date'     => 'تاريخ التعيين',
            'created_at'    => 'تاريخ الإنشاء',
            'updated_at'    => 'تاريخ التحديث',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث الموظف',
                    'body'  => 'تم تحديث معلومات الموظف بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الموظف',
                    'body'  => 'تم حذف الموظف بنجاح.',
                ],
            ],
            'terminate' => [
                'label' => 'إنهاء الخدمة',
                'notification' => [
                    'title' => 'تم إنهاء خدمة الموظف',
                    'body'  => 'تم إنهاء خدمة الموظف بنجاح.',
                ],
            ],
            'reactivate' => [
                'label' => 'إعادة تفعيل',
                'notification' => [
                    'title' => 'تم إعادة تفعيل الموظف',
                    'body'  => 'تم إعادة تفعيل الموظف بنجاح.',
                ],
            ],
        ],
    ],
]; 