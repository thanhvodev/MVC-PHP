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
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getOrders($id)
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = 'SELECT * FROM orders WHERE USERID =' .  $id;
        $result = $conn->query($sql);
        $conn->close();

        // $this->db->query('SELECT * FROM orders WHERE USERID = :userid');
        // $this->db->bind(':userid', $id);
        // $row = $this->db->fetch();
        return $result;
    }


    public function register($data)
    {
        $this->db->query('INSERT INTO user (USERNAME, PASSWORD, EMAIL, IMAGE) VALUES (:username, :password, :email, :image)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':image', 'profile_picture.jpg');
        if ($this->db->execute()) {
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

        if ($this->db->execute()) {
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

        if ($this->db->execute()) {
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

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = 'SELECT * FROM user WHERE EMAIL = "' . $email . '"';
        $result = $conn->query($sql);
        $conn->close();

        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function resetPassword($email)
    {
        $this->db->query('UPDATE user SET PASSWORD=:password WHERE EMAIL=:email ');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', password_hash("123456789", PASSWORD_DEFAULT));

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllUsers()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = 'SELECT * FROM user WHERE PERMISSION <> 1';
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM user WHERE id=:id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function ban_user($id)
    {
        $this->db->query('UPDATE user SET PERMISSION=:permission WHERE ID=:id');
        $this->db->bind(':permission', -1);
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function unban_user($id)
    {
        $this->db->query('UPDATE user SET PERMISSION=:permission WHERE ID=:id');
        $this->db->bind(':permission', 0);
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}