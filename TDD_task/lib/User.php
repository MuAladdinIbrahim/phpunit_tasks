<?php

class User
{
    private $name;
    private $email;

    public function __construct($data = [])
    {
        $this->name = isset($data['name']) ? $data['name'] : 'Muhammad';
        $this->email = isset($data['email']) ? $data['email'] : 'muhammadalaa27@gmail.com';
    }

    public function set_user_name($name)
    {
        $this->name = $name;
    }
    public function set_email($email)
    {
        $this->email = $email;
    }
    public function get_user_name()
    {
        return $this->name;
    }
    public function get_email()
    {
        return $this->email;
    }
}
