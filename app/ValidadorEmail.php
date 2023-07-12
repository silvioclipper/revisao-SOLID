<?php

declare(strict_types=1);

namespace app;

class ValidadorEmail
{
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