<?php

echo "Hello, World!";

class Calculatrice {
    public function addition($a, $b) {
        return $a + $b;
    }

    public function soustraction($a, $b) {
        return $a - $b;
    }

    public function multiplication($a, $b) {
        return $a * $b;
    }

    public function division($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            throw new InvalidArgumentException("Division par zéro impossible");
        }
    } 
}

?>
