<?php

namespace App\Generics;

use App\Generics\Entidade;
use Exception;

class  Validacao
{

    public static function validarCampoVazio(Entidade $entidade, $campo)
    {
        if (!is_string($campo))  throw new Exception("Campo inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $valor = trim($entidade->{$campo});
        if (is_null($valor) || empty($valor))
            $entidade->addNotificacao("{$campo}", "O campo {$campo} é obrigatório.");
    }

    public static function validarCamposVazios(Entidade $entidade, $campos)
    {
        if (is_array($campos)) {
            foreach ($campos as $campo) {
                var_dump($campo);
                Validacao::validarCampoVazio($entidade, "{$campo}");
            }
        } else {
            Validacao::validarCampoVazio($entidade, "{$campos}");
        }
    }

    public static function validarTamanhoMaximoCampo(Entidade $entidade, $campo, $tamanho)
    {

        if (!is_string($campo))  throw new Exception("Campo inválido.");
        if (!is_int($tamanho)) throw new Exception("Tamanho inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $valor = trim($entidade->{$campo});
        if (!is_null($valor) && !empty($valor)) {
            $_tamanho = strlen($valor);
            if ($_tamanho > $tamanho)
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve ter no máximo {$tamanho} caracteres.");
        }
    }

    public static function validarTamanhoMaximoCampos(Entidade $entidade, $campos, $tamanhos)
    {
        if (is_array($campos) && is_array($tamanhos)) {
            if (count($campos) != count($tamanhos)) throw new Exception("A quantidade de Campos e Tamanhos devem ser o mesmo.");

            foreach ($campos as $key => $campo) {
                Validacao::validarTamanhoMaximoCampo($entidade, $campo, $tamanhos[$key]);
            }
        } else {
            Validacao::validarTamanhoMaximoCampo($entidade, $campos, $tamanhos);
        }
    }

    public static function validarTamanhoMinimoCampo(Entidade $entidade, $campo, $tamanho)
    {
        if (!is_string($campo))  throw new Exception("[{$campo}] Campo inválido.");
        if (!is_int($tamanho)) throw new Exception("Tamanho inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $valor = trim($entidade->{$campo});
        if (!is_null($valor) && !empty($valor)) {
            $_tamanho = strlen($valor);
            if ($_tamanho < $tamanho)
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve ter no mínimo {$tamanho} caracteres.");
        }
    }

    public static function validarTamanhoMinimoCampos(Entidade $entidade, $campos, $tamanhos)
    {
        if (is_array($campos) && is_array($tamanhos)) {
            if (count($campos) != count($tamanhos)) throw new Exception("A quantidade de Campos e Tamanhos devem ser o mesmo.");

            foreach ($campos as $key => $campo) {
                Validacao::validarTamanhoMinimoCampo($entidade, $campo, $tamanhos[$key]);
            }
        } else {
            Validacao::validarTamanhoMinimoCampo($entidade, $campos, $tamanhos);
        }
    }

    public static function validarCampoApenasNumeros(Entidade $entidade, $campo)
    {
        if (!is_string($campo))  throw new Exception("Campo inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $valor = trim($entidade->{$campo});
        if (!is_null($valor) && !empty($valor)) {
            if (!is_numeric($valor))
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve conter apenas números.");
        }
    }

    public static function validarCamposApenasNumeros(Entidade $entidade, $campos)
    {
        if (is_array($campos)) {
            foreach ($campos as $campo) {
                Validacao::validarCampoApenasNumeros($entidade, $campo);
            }
        } else {
            Validacao::validarCampoApenasNumeros($entidade, $campos);
        }
    }

    public static function validarCampoApenasLetras(Entidade $entidade, $campo)
    {
        if (!is_string($campo))  throw new Exception("[{$campo}] Campo inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $valor = trim($entidade->{$campo});
        if (!is_null($valor) && !empty($valor)) {
            if (!preg_match("/^[a-zA-Z ]*$/", $valor))
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve conter apenas letras.");
        }
    }

    public static function validarCamposApenasLetras(Entidade $entidade, $campos)
    {
        if (is_array($campos)) {
            foreach ($campos as $campo) {
                Validacao::validarCampoApenasLetras($entidade, $campo);
            }
        } else {
            Validacao::validarCampoApenasLetras($entidade, $campos);
        }
    }

    public static function validarCampoIgual(Entidade $entidade, $campo, $valor)
    {
        if (!is_string($campo))  throw new Exception("[{$campo}] Campo inválido.");
        if (is_null($valor == 0 ? 1 : $valor) || empty($valor == 0 ? 1 : $valor))  throw new Exception("[{$valor}] Valor inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $_valor = trim($entidade->{$campo});
        if (!is_null($_valor) && !empty($_valor)) {
            if ($_valor != $valor)
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve ser igual a {$valor}.");
        }
    }

    public static function validarCamposIguais(Entidade $entidade, $campos, $valores)
    {
        if (is_array($campos) && is_array($valores)) {
            if (count($campos) != count($valores)) throw new Exception("A quantidade de Campos e Valores devem ser o mesmo.");

            foreach ($campos as $key => $campo) {
                Validacao::validarCampoIgual($entidade, $campo, $valores[$key]);
            }
        } else {
            Validacao::validarCampoIgual($entidade, $campos, $valores);
        }
    }

    public static function validarCampoDiferente(Entidade $entidade, $campo, $valor)
    {
        if (!is_string($campo))  throw new Exception("[{$campo}] Campo inválido.");
        if (is_null($valor == 0 ? 1 : $valor) || empty($valor == 0 ? 1 : $valor))  throw new Exception("[{$valor}] Valor inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $_valor = trim($entidade->{$campo});
        if (!is_null($_valor) && !empty($_valor)) {
            if ($_valor == $valor)
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve ser diferente de {$valor}.");
        }
    }

    public static function validarCamposDiferentes(Entidade $entidade, $campos, $valores)
    {
        if (is_array($campos) && is_array($valores)) {
            if (count($campos) != count($valores)) throw new Exception("A quantidade de Campos e Valores devem ser o mesmo.");

            foreach ($campos as $key => $campo) {
                Validacao::validarCampoDiferente($entidade, $campo, $valores[$key]);
            }
        } else {
            Validacao::validarCampoDiferente($entidade, $campos, $valores);
        }
    }

    public static function validarCampoMenorQue(Entidade $entidade, $campo, $valor)
    {
        if (!is_string($campo))  throw new Exception("[{$campo}] Campo inválido.");
        if (is_null($valor == 0 ? 1 : $valor) || empty($valor == 0 ? 1 : $valor))  throw new Exception("[{$valor}] Valor inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $_valor = trim($entidade->{$campo});
        if (!is_null($_valor) && !empty($_valor)) {
            if ($_valor >= $valor)
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve ser menor que {$valor}.");
        }
    }

    public static function validarCamposMenoresQue(Entidade $entidade, $campos, $valores)
    {
        if (is_array($campos) && is_array($valores)) {
            if (count($campos) != count($valores)) throw new Exception("A quantidade de Campos e Valores devem ser o mesmo.");

            foreach ($campos as $key => $campo) {
                Validacao::validarCampoMenorQue($entidade, $campo, $valores[$key]);
            }
        } else {
            Validacao::validarCampoMenorQue($entidade, $campos, $valores);
        }
    }

    public static function validarCampoMaiorQue(Entidade $entidade, $campo, $valor)
    {
        if (!is_string($campo))  throw new Exception("[{$campo}] Campo inválido.");
        if (is_null($valor == 0 ? 1 : $valor) || empty($valor == 0 ? 1 : $valor))  throw new Exception("[{$valor}] Valor inválido.");
        if (!$entidade->existeProrpiedade($campo))  throw new Exception("O Campo [{$campo}] não existe.");

        $_valor = trim($entidade->{$campo});
        if (!is_null($_valor) && !empty($_valor)) {
            if ($_valor <= $valor)
                $entidade->addNotificacao("{$campo}", "O campo {$campo} deve ser maior que {$valor}.");
        }
    }

    public static function validarCamposMaioresQue(Entidade $entidade, $campos, $valores)
    {
        if (is_array($campos) && is_array($valores)) {
            if (count($campos) != count($valores)) throw new Exception("A quantidade de Campos e Valores devem ser o mesmo.");

            foreach ($campos as $key => $campo) {
                Validacao::validarCampoMaiorQue($entidade, $campo, $valores[$key]);
            }
        } else {
            Validacao::validarCampoMaiorQue($entidade, $campos, $valores);
        }
    }
    
}
