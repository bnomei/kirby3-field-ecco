<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('bnomei/field-ecco', [
    'fieldMethods' => [
        'ecco' => function ($field, string $a, string $b = ''): string {
            return $field->bool() ? $a : $b;
        }
    ]
]);
