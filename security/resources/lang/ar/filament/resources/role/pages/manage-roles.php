<?php

return [
    'title' => 'إدارة الأدوار',
    
    'form' => [
        'fields' => [
            'name'          => 'الاسم',
            'description'   => 'الوصف',
            'permissions'   => 'الصلاحيات',
            'is_system'     => 'دور النظام',
        ],
    ],

    'table' => [
        'description' => 'إدارة أدوار المستخدمين وصلاحياتهم في النظام.',
        'header-actions' => [
            'create' => [
                'label' => 'إضافة دور',
                'notification' => [
                    'title' => 'تم إنشاء الدور',
                    'body'  => 'تم إنشاء الدور بنجاح.',
                ],
            ],
        ],
        'columns' => [
            'name'          => 'الاسم',
            'description'   => 'الوصف',
            'permissions'   => 'الصلاحيات',
            'is_system'     => 'دور النظام',
            'users_count'   => 'عدد المستخدمين',
            'created_at'    => 'تاريخ الإنشاء',
            'updated_at'    => 'تاريخ التحديث',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث الدور',
                    'body'  => 'تم تحديث الدور بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الدور',
                    'body'  => 'تم حذف الدور بنجاح.',
                ],
            ],
        ],
    ],

    'permissions' => [
        'groups' => [
            'general'       => 'عام',
            'users'         => 'المستخدمين',
            'roles'         => 'الأدوار',
            'settings'      => 'الإعدادات',
            'reports'       => 'التقارير',
            'audit'         => 'التدقيق',
        ],
        'actions' => [
            'view'          => 'عرض',
            'create'        => 'إنشاء',
            'edit'          => 'تعديل',
            'delete'        => 'حذف',
            'manage'        => 'إدارة',
            'export'        => 'تصدير',
            'import'        => 'استيراد',
        ],
    ],
]; 