<?php

require 'HashHelper.php';

use App\HashHelper;

$hash = HashHelper::create('password'); 
var_dump(HashHelper::check('notpass', $hash)); 
var_dump(HashHelper::check('password', $hash));
