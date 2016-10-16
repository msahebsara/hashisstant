<?php

namespace App;

class HashHelper {
    
    /*
    *
    * Creates a hash of a passsword with a cost default of 10.
    *
    * @param   string $password
    * @param   int    $cost    
    * @return  hash
    */
    public static function create($password, $cost = 10) {
        return password_hash($password, PASSWORD_BCRYPT, [
            'cost' => $cost
        ]);
    }

    /*
    *
    * Verifys a hashed passsword against an input.
    *
    * @param   string $input
    * @param   hash   $hash    
    * @return  boolean
    */
    public static function check($input, $hash) {
        return password_verify($input, $hash);
    }
}