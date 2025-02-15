<?php

include "exception/ValidationException.php";
include "data/LoginRequest.php";
include "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Kousaka";
$request->password = "reina";
//ValidationUtil::validate($request);
ValidationUtil::validateReflection($request);

class RegisterRequest{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterRequest();
$register->name = "reina";
$register->address = "kyoto";
$register->email = "reinacantik123@kitauji.com";

ValidationUtil::validateReflection($register);
