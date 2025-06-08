<?php

return [
    'title' => 'المهارات',

    'navigation' => [
        'title' => 'المهارات',
    ],

    'form' => [
        'sections' => [
            'skill-details' => [
                'title' => 'تفاصيل المهارة',

                'fields' => [
                    'employee'       => 'الموظف',
                    'skill'          => 'المهارة',
                    'skill-level'    => 'مستوى المهارة',
                    'skill-type'     => 'نوع المهارة',
                ],
            ],
            'addition-information' => [
                'title' => 'Additional Information',

                'fields' => [
                    'created-by' => 'الموظف المنشئ',
                    'updated-by' => 'الموظف المحدث',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'id'              => 'ID',
            'employee'        => 'Employee',
            'skill'           => 'Skill',
            'skill-level'     => 'Level',
            'skill-type'      => 'Skill Type',
            'user'            => 'User',
            'proficiency'     => 'Proficiency',
            'created-by'      => 'Created By',
            'created-at'      => 'Created At',
        ],

        'filters' => [
            'employee'        => 'Employee',
            'skill'           => 'Skill',
            'skill-level'     => 'Level',
            'skill-type'      => 'Skill Type',
            'user'            => 'User',
            'created-by'      => 'Created By',
            'created-at'      => 'Created At',
            'updated-at'      => 'Updated At',
        ],

        'groups' => [
            'employee'   => 'Employee',
            'skill-type' => 'Skill Type',
        ],
    ],

    'infolist' => [
        'sections' => [
            'skill-details' => [
                'title' => 'Skill Details',

                'entries' => [
                    'employee'        => 'Employee',
                    'skill'           => 'Skill',
                    'skill-level'     => 'Level',
                    'skill-type'      => 'Skill Type',
                ],
            ],

            'additional-information' => [
                'title' => 'Additional Information',

                'entries' => [
                    'created-by' => 'Created By',
                    'updated-by' => 'Updated By',
                ],
            ],
        ],
    ],
];
