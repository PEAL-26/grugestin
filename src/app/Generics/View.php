<?php

namespace App\Generics;

class View
{
    public static $templates = [
        'simples' =>  'App/Views/Generics/Views/listagem'
    ];

    /**
     * @param array $tabelaGenerica array com os dados da tabela a ser gerada na view
     *  | Exemplo: [tabelaGenerica => [table_head=>['coluna1'=>'Coluna 1', 'coluna2'=>'Coluna 2', ...]]]
     * @return string
     */
    public static function table_head($tabelaGenerica)
    {
        $table_head = '';
        if (isset($tabelaGenerica) &&  !isset($tabelaGenerica['table_head'])) {
            $table_head .= '<th>Nome</th>';
        } else {
            foreach ($tabelaGenerica['table_head'] as $key => $value) {
                $table_head .= "<th>{$value}</th>";
            }
        }

        return $table_head;
    }

    /**
     * @param Entidade $entidade array com os dados da entidade a ser gerada na view
     * @param array $tabelaGenerica array com os dados da tabela a ser gerada na view
     *  | Exemplo: [tabelaGenerica => [table_body=>['coluna1'=>'Coluna 1', 'coluna2'=>'Coluna 2', ...]]]
     * @return string
     */
    public static function table_body($entidade, $tabelaGenerica)
    {


        $table_body = '';
        if (isset($tabelaGenerica) &&  !isset($tabelaGenerica['table_body'])) {
            $table_body .= "<td>{$entidade->nome}</td>";
        } else {
            foreach ($tabelaGenerica['table_body'] as $key => $value) {
                $table_body .= "<td>{$entidade->$key}</td>";
            }
        }

        return $table_body;
    }

    /**
     * @param Entidade $entidade array com os dados da entidade a ser gerada na view
     * @param array $formularioGenerico array com os dados do formulário a ser gerado
     *  | Exemplo: 
     * [formularioGenerico => [
     * inputs => ['nome_input'=>['lable'=>lableName, 'placeholder'=>'placeholder', 'type'=>'text']],
     * selects => []
     * checks => []
     * ]
     * ]
     * @return string
     */
    public static function getComponentes($entidade, $formularioGenerico)
    {
        foreach ($formularioGenerico as $key => $value) {
            if ($key == 'inputs') {
                foreach ($value as $inputName => $input) {
                    echo "<div class='form-group'>";
                    echo "<label for='{$inputName}'>{$input['label']}</label>";
                    echo "<input type='{$input['type']}' class='form-control' id='{$inputName}' placeholder='{$input['placeholder']}' name='{$inputName}' value='{$entidade->$inputName}'>";
                    echo "</div>";
                }
            } elseif ($key == 'selects') {
                foreach ($value as $selectName => $select) {
                    echo "<div class='form-group'>";
                    echo "<label for='{$selectName}'>{$select['label']}</label>";
                    echo "<select class='form-control' id='{$selectName}' name='{$selectName}'>";
                    foreach ($select['options'] as $optionName => $option) {
                        echo "<option value='{$optionName}'>{$option}</option>";
                    }
                    echo "</select>";
                    echo "</div>";
                }
            } elseif ($key == 'checks') {
                foreach ($value as $checkName => $check) {
                    echo "<div class='form-group'>";
                    echo "<label for='{$checkName}'>{$check['label']}</label>";
                    echo "<div class='form-check'>";
                    foreach ($check['options'] as $optionName => $option) {
                        echo "<input class='form-check-input' type='checkbox' value='{$optionName}' id='{$checkName}'>";
                        echo "<label class='form-check-label' for='{$checkName}'>{$option}</label>";
                    }
                    echo "</div>";
                    echo "</div>";
                }
            }
        }


        // $componenetes = [];
        // if (isset($formularioGenerico)) {
        //     foreach ($formularioGenerico as $key => $conteudo) {
        //         $componenetes[] = self::getComponente($conteudo);
        //     }
        // }

        //return $componenetes;
    }

    /* 
    public static function input($type, $name, $label, $placeholder='', $class='', $value = '')
    {
        $input = "<div class='form-group'>";
        $input .= "<label for='{$name}'>{$label}</label>";
        $input .= "<input type='{$type}' class='form-control {$class}' id='{$name}' name='{$name}' value='{$value}' placeholder='{$placeholder}'>";
        $input .= "</div>";

        return $input;
    }
    */
}
