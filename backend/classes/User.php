<?php
class User {
    public $name;
    public $surname;
    public $email;
    public $level;
    
    public function __construct($_name, $_surname, $_email, $_level = "free")
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->level = $_level;
    }
}