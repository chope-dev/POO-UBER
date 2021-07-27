<?php
class Account {
public $id = integer;
public $name = string;
public $document = string;
public $email = string;
public $password = string;
}

//Declarando metodo constructor

class Account {
public $id;
public $name;
public $document;
public $email;
public $password;

public function __construct($name, $document) {
    $this->name = $name;
    $this->document = $document;
}
}