<?php
class pessoa{
    public $email;
    public $senha;

    public function __construct($email, $senha){
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}
?>