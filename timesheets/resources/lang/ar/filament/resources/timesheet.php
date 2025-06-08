<?php

return [
    'title' => 'جداول الوقت',

    'navigation' => [
        'title' => 'جداول الوقت',
        'group' => 'المشروع',
    ],

    'form' => [
        'date'                   => 'التاريخ',
        'employee'               => 'الموظف',
        'project'                => 'المشروع',
        'task'                   => 'المهمة',
        'description'            => 'الوصف',
        'time-spent'             => 'الوقت المنقضي',
        'time-spent-helper-text' => 'الوقت المنقضي بالساعات (مثال: 1.5 ساعة تعني ساعة ونصف)',
    ],

    'table' => [
        'columns' => [
            'date'        => 'التاريخ',
            'employee'    => 'الموظف',
            'project'     => 'المشروع',
            'task'        => 'المهمة',
            'description' => 'الوصف',
            'time-spent'  => 'الوقت المنقضي',
            'created-at'  => 'تاريخ الإنشاء',
            'updated-at'  => 'تاريخ التحديث',
        ],

        'groups' => [
            'date'       => 'التاريخ',
            'employee'   => 'الموظف',
            'project'    => 'المشروع',
            'task'       => 'المهمة',
            'creator'    => 'المنشئ',
        ],

        'filters' => [
            'date-from'  => 'التاريخ من',
            'date-until' => 'التاريخ إلى',
            'employee'   => 'الموظف',
            'project'    => 'المشروع',
            'task'       => 'المهمة',
            'creator'    => 'المنشئ',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث جدول الوقت',
                    'body'  => 'تم تحديث جدول الوقت بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف جدول الوقت',
                    'body'  => 'تم حذف جدول الوقت بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف جداول الوقت',
                    'body'  => 'تم حذف جداول الوقت بنجاح.',
                ],
            ],
        ],
    ],
];
