<?php
    function validateName (string $name) : bool {
        if (empty($name)) {
            setMessageError('O campo nome é obrigatório.');
            return false;
        }
        elseif (!preg_match("/^[a-zA-Z]+$/", $name)) {
            setMessageError("Insira um nome válido.");
            return false;
        }
        return true;
    }

    function validatePassword (string $password) : bool {
        if (strlen($password) < 3) {
            setMessageError("A senha deve conter pelo menos 3 caracteres.");
            return false;
        }
        return true;
    }

    function validateAge (string $age) : bool {
        if (!is_numeric($age)) {
            setMessageError("Insira sua idade apenas com números.");
            return false;
        }
        return true;
    }

?>