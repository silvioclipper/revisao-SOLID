<?php

declare(strict_types=1);

namespace app;

use app\Mail;

class Usuario
{
    public int $id;

    public string $nome;

    public string $email;

    public function __construct( int $id, string $nome, string $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function validarEmail(string $email): bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function enviarEmail(string $email, string $mensagem): void
    {
        $mail = new Mail();
        $mail->send($email, $mensagem);
    }

}
