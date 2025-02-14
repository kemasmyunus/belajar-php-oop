<?php

include "exception/ValidationException.php";
include "data/LoginRequest.php";
include "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "reina";
$loginRequest->password = "";

try{
    validateLoginRequest($loginRequest);
    echo "Valid";
}catch(ValidationException $exception){
    echo "Validation error : {$exception->getMessage()}".PHP_EOL;
}catch(Exception $exception){
    echo "error : {$exception->getMessage()}".PHP_EOL;
    var_dump($exception->getTrace());
    echo "$exception->getTraceAsString()";
}finally{
    echo "ERROR ATAU TIDAK, BLOCK INI AKAN TETAP DI EKSEKUSI".PHP_EOL;
}

/** Multiple Try Catch
 * kalau mau misal pesan yang keluar sama maka bisa dihubungkan dengan tanta |
 * contoh :
 * catch(ValidationException | Exception $exception)
 */
