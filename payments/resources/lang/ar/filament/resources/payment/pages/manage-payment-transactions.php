<?php

return [
    'title' => 'إدارة معاملات الدفع',
    
    'form' => [
        'fields' => [
            'move_id'              => 'قيد المحاسبة',
            'journal_id'          => 'اليومية',
            'company_id'          => 'الشركة',
            'statement_id'        => 'كشف الحساب المصرفي',
            'partner_id'          => 'الشريك',
            'currency_id'         => 'العملة',
            'foreign_currency_id' => 'العملة الأجنبية',
            'account_number'      => 'رقم الحساب',
            'partner_name'        => 'اسم الشريك',
            'transaction_type'    => 'نوع المعاملة',
            'payment_reference'   => 'مرجع الدفع',
            'internal_index'      => 'الفهرس الداخلي',
            'transaction_details' => 'تفاصيل المعاملة',
            'amount'              => 'المبلغ',
            'amount_currency'     => 'المبلغ بالعملة',
            'amount_residual'     => 'المبلغ المتبقي',
            'is_reconciled'       => 'تم التسوية',
        ],
    ],

    'table' => [
        'description' => 'إدارة معاملات الدفع في النظام.',
        'columns' => [
            'move_id'              => 'قيد المحاسبة',
            'journal_id'          => 'اليومية',
            'company_id'          => 'الشركة',
            'statement_id'        => 'كشف الحساب المصرفي',
            'partner_id'          => 'الشريك',
            'currency_id'         => 'العملة',
            'foreign_currency_id' => 'العملة الأجنبية',
            'account_number'      => 'رقم الحساب',
            'partner_name'        => 'اسم الشريك',
            'transaction_type'    => 'نوع المعاملة',
            'payment_reference'   => 'مرجع الدفع',
            'internal_index'      => 'الفهرس الداخلي',
            'transaction_details' => 'تفاصيل المعاملة',
            'amount'              => 'المبلغ',
            'amount_currency'     => 'المبلغ بالعملة',
            'amount_residual'     => 'المبلغ المتبقي',
            'is_reconciled'       => 'تم التسوية',
            'created_at'          => 'تاريخ الإنشاء',
            'updated_at'          => 'تاريخ التحديث',
        ],
        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث المعاملة',
                    'body'  => 'تم تحديث المعاملة بنجاح.',
                ],
            ],
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف المعاملة',
                    'body'  => 'تم حذف المعاملة بنجاح.',
                ],
            ],
        ],
    ],
]; 