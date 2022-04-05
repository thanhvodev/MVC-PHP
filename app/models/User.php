<?php


class User
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM user WHERE EMAIL = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->fetch();
        $hashedPassword = $row->PASSWORD;
        if(password_verify($password, $hashedPassword)){
            return $row;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO user (USERNAME, PASSWORD, EMAIL) VALUES (:username, :password, :email)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function updateData($data)
    {
        $this->db->query('UPDATE user SET USERNAME=:username, EMAIL=:email, ADDRESS=:address, PHONENUM=:phonenum WHERE ID=:id ');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phonenum', $data['phonenum']);
        $this->db->bind(':id', $_SESSION['user_id']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    public function updatePassword($data)
    {
        $this->db->query('UPDATE user SET PASSWORD=:password WHERE ID=:id ');
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id', $_SESSION['user_id']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function updateProfilePic($data)
    {
        $this->db->query('UPDATE user SET IMAGE=:image WHERE ID=:id ');
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':id', $_SESSION['user_id']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}