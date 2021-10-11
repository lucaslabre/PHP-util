<?php // Cabeçalho para criar uma session
    session_start();
?>

<?php
    function setMessageSuccess(string $message) : void {
        $_SESSION['mensagem de sucesso'] = $message;  
    }

    function getMessageSuccess() : ?string {
        if (isset($_SESSION['mensagem de sucesso'])) {
            return $_SESSION['mensagem de sucesso'];
        }
        return null;
    }

    function setMessageError(string $message) : void {
        $_SESSION['mensagem de erro'] = $message;  
    }

    function getMessageError() : ?string {
        if (isset($_SESSION['mensagem de erro'])) {
            return $_SESSION['mensagem de erro'];
        }
        return null;
    }

    function removeMessageError() : void {
        if (isset($_SESSION['mensagem de erro'])) {
            unset($_SESSION['mensagem de erro']);
        }
    }

    function removeMessageSuccess () : void {
        if (isset($_SESSION['mensagem de sucesso'])) {
            unset($_SESSION['mensagem de sucesso']);
        }
    }