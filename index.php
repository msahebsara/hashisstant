<?php

require 'HashHelper.php';

use App\HashHelper;

$hash = HashHelper::create('password', 12); 

var_dump(HashHelper::check('notpass', $hash)); 
var_dump(HashHelper::check('password', $hash));
