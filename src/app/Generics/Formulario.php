<?php

namespace App\Generics;

class Formulario
{
    public static function input($label, $type, $placeholder = '')
    {
        return [
            'label' => $label,
            'placeholder' => $label,
            'type' => $type

        ];
    }

    public static function select($label, $options)
    {
        return [
            'label' => $label,
            'options' => $options
        ];
    }

    public static function checkbox($label, $options)
    {
        return [
            'label' => $label,
            'options' => $options
        ];
    }
}
