<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use app\Usuario;
use app\ValidadorEmail;

$usuario = new Usuario(1, 'clipper', 'clipper@gmail.com');
$validadorEmail = new ValidadorEmail;

if ($validadorEmail->validarEmail($usuario->email)) {
    echo "E-mail válido para o usuário {$usuario->nome}";

    $validadorEmail->enviarEmail($usuario->email, "Conta criada.");
} else {
    echo "Conta não criada.";
}
