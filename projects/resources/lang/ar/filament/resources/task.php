<?php

return [
    'title' => 'المهام',

    'navigation' => [
        'title' => 'المهام',
        'group' => 'المشروع',
    ],

    'global-search' => [
        'project'   => 'المشروع',
        'customer'  => 'العميل',
        'milestone' => 'المرحلة',
    ],

    'form' => [
        'sections' => [
            'general' => [
                'title' => 'عام',
                'fields' => [
                    'title'             => 'العنوان',
                    'title-placeholder' => 'عنوان المهمة...',
                    'tags'              => 'الوسوم',
                    'name'              => 'الاسم',
                    'color'             => 'اللون',
                    'description'       => 'الوصف',
                    'project'           => 'المشروع',
                    'status'            => 'الحالة',
                    'start_date'        => 'تاريخ البدء',
                    'end_date'          => 'تاريخ الانتهاء',
                ],
            ],

            'additional' => [
                'title' => 'معلومات إضافية',
            ],

            'settings' => [
                'title' => 'الإعدادات',
                'fields' => [
                    'project'                     => 'المشروع',
                    'milestone'                   => 'المرحلة',
                    'milestone-hint-text'         => 'تسليم خدماتك تلقائيًا عند الوصول إلى مرحلة من خلال ربطها بعنصر أمر بيع.',
                    'name'                        => 'الاسم',
                    'deadline'                    => 'الموعد النهائي',
                    'is-completed'                => 'تم الإنجاز',
                    'customer'                    => 'العميل',
                    'assignees'                   => 'المسند إليهم',
                    'allocated-hours'             => 'الساعات المخصصة',
                    'allocated-hours-helper-text' => 'بالساعات (مثال: 1.5 ساعة تعني ساعة و30 دقيقة)',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'                  => 'المعرف',
            'priority'            => 'الأولوية',
            'state'               => 'الحالة',
            'new-state'           => 'الحالة الجديدة',
            'update-state'        => 'تحديث الحالة',
            'title'               => 'العنوان',
            'project'             => 'المشروع',
            'project-placeholder' => 'مهمة خاصة',
            'milestone'           => 'المرحلة',
            'customer'            => 'العميل',
            'assignees'           => 'المسند إليهم',
            'allocated-time'      => 'الوقت المخصص',
            'time-spent'          => 'الوقت المستغرق',
            'time-remaining'      => 'الوقت المتبقي',
            'progress'            => 'التقدم',
            'deadline'            => 'الموعد النهائي',
            'tags'                => 'الوسوم',
            'stage'               => 'المرحلة',
        ],

        'groups' => [
            'state'      => 'الحالة',
            'project'    => 'المشروع',
            'milestone'  => 'المرحلة',
            'customer'   => 'العميل',
            'deadline'   => 'الموعد النهائي',
            'stage'      => 'المرحلة',
            'created-at' => 'تاريخ الإنشاء',
        ],

        'filters' => [
            'title'             => 'العنوان',
            'priority'          => 'الأولوية',
            'low'               => 'منخفض',
            'high'              => 'مرتفع',
            'state'             => 'الحالة',
            'tags'              => 'الوسوم',
            'allocated-hours'   => 'الساعات المخصصة',
            'total-hours-spent' => 'إجمالي الساعات المستغرقة',
            'remaining-hours'   => 'الساعات المتبقية',
            'overtime'          => 'العمل الإضافي',
            'progress'          => 'التقدم',
            'deadline'          => 'الموعد النهائي',
            'created-at'        => 'تاريخ الإنشاء',
            'updated-at'        => 'تاريخ التحديث',
            'assignees'         => 'المسند إليهم',
            'customer'          => 'العميل',
            'project'           => 'المشروع',
            'stage'             => 'المرحلة',
            'milestone'         => 'المرحلة',
            'company'           => 'الشركة',
            'creator'           => 'المنشئ',
        ],

        'actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة المهمة',
                    'body'  => 'تمت استعادة المهمة بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المهمة',
                    'body'  => 'تم حذف المهمة بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف المهمة نهائيًا',
                    'body'  => 'تم حذف المهمة نهائيًا بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة المهام',
                    'body'  => 'تمت استعادة المهام بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المهام',
                    'body'  => 'تم حذف المهام بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم حذف المهام نهائيًا',
                    'body'  => 'تم حذف المهام نهائيًا بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'general' => [
                'title' => 'عام',
                'entries' => [
                    'title'       => 'العنوان',
                    'state'       => 'الحالة',
                    'tags'        => 'الوسوم',
                    'priority'    => 'الأولوية',
                    'description' => 'الوصف',
                ],
            ],

            'project-information' => [
                'title' => 'معلومات المشروع',
                'entries' => [
                    'project'   => 'المشروع',
                    'milestone' => 'المرحلة',
                    'customer'  => 'العميل',
                    'assignees' => 'المسند إليهم',
                    'deadline'  => 'الموعد النهائي',
                    'stage'     => 'المرحلة',
                ],
            ],

            'time-tracking' => [
                'title' => 'تتبع الوقت',
                'entries' => [
                    'allocated-time'        => 'الوقت المخصص',
                    'time-spent'            => 'الوقت المستغرق',
                    'time-spent-suffix'     => ' ساعة',
                    'time-remaining'        => 'الوقت المتبقي',
                    'time-remaining-suffix' => ' ساعة',
                    'progress'              => 'التقدم',
                ],
            ],

            'additional-information' => [
                'title' => 'معلومات إضافية',
            ],

            'record-information' => [
                'title' => 'معلومات السجل',
                'entries' => [
                    'created-at'   => 'تاريخ الإنشاء',
                    'created-by'   => 'تم الإنشاء بواسطة',
                    'last-updated' => 'آخر تحديث',
                ],
            ],

            'statistics' => [
                'title' => 'الإحصائيات',
                'entries' => [
                    'sub-tasks'         => 'المهام الفرعية',
                    'timesheet-entries' => 'إدخالات جدول الوقت',
                ],
            ],
        ],
    ],
]; 