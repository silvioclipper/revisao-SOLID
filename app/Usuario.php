<?php

declare(strict_types=1);

namespace app;

use app\Mail;

class Usuario
{
    public function __construct( 
        public int $id, 
        public string $nome, 
        public string $email
    ){ }
}
