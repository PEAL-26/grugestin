<?php
function input_text($name, $label, $value = null, $placeholder = null, $class = null, $required = false)
{
    $input = '<div class="form-group">';
    $input .= '<label for="' . $name . '">' . $label . '</label>';
    $input .= '<input type="text" name="' . $name . '" id="' . $name . '" class="form-control ' . $class . '" value="' . $value . '" placeholder="' . $placeholder . '" ' . ($required ? 'required' : '') . '>';
    $input .= '</div>';

    return $input;
}

function set_select_custom($name, $values, $selected = '', $class = 'form-select form-select-lg')
{
    $input = '<select name="' . $name . '" class="' . $class . '">';
    $input .= '<option value="">Selecione</option>';
    foreach ($values as $valor) {;

        if ($selected == $valor->id || $selected == $valor->nome) $_selected = 'selected="true"';
        else $_selected = '';

        $input .= '<option value="' . $valor->id . '"' . set_select('id_tipo_curso', $valor->id) . ' ' . $_selected . '>' . $valor->nome . '</option>';
    }
    $input .= '</select>';

    return $input;
}
