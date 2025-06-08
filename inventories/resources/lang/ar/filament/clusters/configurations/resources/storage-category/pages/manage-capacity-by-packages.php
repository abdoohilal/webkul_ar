<?php

return [
'title' => 'سعة الحزمة',

'form' => [
'package-type' => 'نوع الحزمة',
'qty' => 'الكمية',
],

'table' => [
'header-actions' => [
'create' => [
'label' => 'إضافة سعة نوع الحزمة',

'notification' => [
'title' => 'تم إنشاء سعة نوع الحزمة',
'body' => 'تمت إضافة سعة نوع الحزمة بنجاح.',
],
],
],

'columns' => [
'package-type' => 'نوع الحزمة',
'qty' => 'الكمية',
],

'actions' => [
'edit' => [
'notification' => [
'title' => 'تم تحديث سعة نوع الحزمة',
'body' => 'تم تحديث سعة نوع الحزمة بنجاح.',
],
],

'delete' => [
'notification' => [
'title' => 'تم حذف سعة نوع الحزمة',
'body' => 'تم حذف سعة نوع الحزمة بنجاح.',
],
],
],
],
];