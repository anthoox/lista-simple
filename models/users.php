<?php

class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $registration_date;
    private $rol;
    private $image;

    private $db;

    public function __construct()
    {
        $this->db = DataBase::connect();
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername($username)
    {
        $this->username = $this->db->real_escape_string($username);

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    /**
     * Set the value of password
     */
    public function setPassword($password)
    {
        $this->password =  $password;

        return $this;
    }

    /**
     * Get the value of registration_date
     */
    public function getRegistrationDate()
    {
        return $this->registration_date;
    }

    /**
     * Set the value of registration_date
     */
    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;

        return $this;
    }

    /**
     * Get the value of rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function save()
    {
        $username = $this->getUsername();
        $email = $this->getEmail();
        $password = $this->getPassword();

        $sql = "INSERT INTO users VALUES(NULL, ?, ?, ?, CURDATE(), 2, NULL)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $password);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function login()
    {
        $result = false;
        $email = $this->email;
        $password = $this->password;

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $login = $stmt->get_result();

        if ($login->num_rows == 1) {
            $user = $login->fetch_object();
            if (password_verify($password, $user->password)) {
                $result = $user;
            }
        }

        return $result;
    }

    public function edit($newDataUser)
    {
        $id = $_SESSION['identity']->id;
        $sql = "UPDATE users SET username = ?, email = ?";
        $params = array($this->getUsername(), $this->getEmail());

        if (isset($newDataUser['password'])) {
            $sql .= ", password = ?";
            $params[] = $this->getPassword();
            $_SESSION['identity']->password = $this->password;
        }

        if ($this->getImage() != null) {
            $sql .= ", image = ?";
            $params[] = $this->getImage();
            $_SESSION['identity']->image = $this->image;
        }

        $sql .= " WHERE id = ?";
        $params[] = $id;

        $stmt = $this->db->prepare($sql);
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['identity']->username = $this->username;
            $_SESSION['identity']->email = $this->email;
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
        $id = $_SESSION['identity']->id;
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();

        if ($result && $this->db->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteData($data)
    {
        $email = $data;
        $sql = "DELETE FROM lists WHERE user_id = (SELECT id FROM users WHERE email = ?)";


        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $result = $stmt->execute();

        if ($result && $this->db->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
