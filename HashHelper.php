<?php

namespace App;

class HashHelper {
    
    /*
    *
    * Creates a hash of a passsword with a cost default of 10.
    *
    * @param   $password
    * @param   $cost    
    * @return  $hash
    */
    public static function create($password, $cost = 10) {
        return password_hash($password, PASSWORD_BCRYPT, [
            'cost' => $cost
        ]);
    }
}