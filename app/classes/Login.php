<?php
namespace app\classes;

Class Login
{
  // public $email;
  // public $password;
  public string $senha;

  public string $name;

  public function auth(string $email, int $password)
  {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $this->senha = $hash;
    $this->name = 'eduardo';
    return 'O meu email é '. $email . ' e minha senha é ' . $hash; 
  }
}
