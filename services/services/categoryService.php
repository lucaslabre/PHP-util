<?php
    
    function category (string $name, string $age, string $password) : ?string {
        $categories = array("infantil", "adolescente", "adulto");
        
        if (validateName($name) && validatePassword($password) && validateAge($age)) {
            removeMessageError();
            for ($i = 0; $i < count($categories); $i++) {
                if ($age <= 12 && $i == 0) {
                    setMessageSuccess("$name Jogará na categoria ".$categories[$i]);
                    return null;
                }
            
                if ($age > 12 && $age < 18 && $i == 1) {
                    setMessageSuccess("$name Jogará na categoria ".$categories[$i]);
                    return null;
                }
            
                if ($age >= 18 && $i == 2) {
                    setMessageSuccess("$name Jogará na categoria ".$categories[$i]);
                    return null;
                }
            }
        }
        else {
            removeMessageSuccess();
            return getMessageError();
        }
    }
?>