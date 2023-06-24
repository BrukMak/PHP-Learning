<?php

class User{
    private $name;
    public $email;
    public $password;
    
public function __construct($name, $email, $password){
    $this -> name = $name;
    $this -> email = $email;
    $this -> password = $password;

}
function get_name(){
    return $this -> name;
}
}

// Instantiate a User object

// $user1 = new User('Beza', 'bruk@gmail.com', '1234');
// echo $user1->get_name() . "<br>";
// echo $user1->email ."<br>";
// echo $user1->password;


// Inheritance

class Employee extends User{
    private $title;
    public function __construct($name, $email, $password, $title)
    {
        parent:: __construct($name, $email, $password);
        $this -> title = $title;
        
    }
    public function get_title() {
        return $this -> title;
    }
}

$emp1 = new Employee('Sara', 'sara@gmail.com', '567', 'Manager');
echo $emp1->get_title();
