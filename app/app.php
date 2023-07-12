<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use app\Usuario;

$usuario = new Usuario(1, 'clipper', 'clipper@gmail.com');

if ($usuario->validarEmail($usuario->email)) {
    echo "E-mail válido para o usuário {$usuario->nome}";

    $usuario->enviarEmail($usuario->email, "Conta criada.");
} else {
    echo "Conta não criada.";
}
