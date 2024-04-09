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
        $sql = "INSERT INTO users VALUES(NULL, '{$this->getUsername()}', '{$this->getEmail()}','{$this->getPassword()}',CURDATE(),2,NULL)";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
            $this->db->close();
            return $result;
        }
        return $result;
    }

    public function login()
    {
        $result = false;
        $email = $this->email;

        $password = $this->password;
        // Comprobar si existe el usuario
        $sql = "SELECT * FROM users WHERE email ='$email'";
        $login = $this->db->query($sql);
        if ($login && $login->num_rows == 1) {
            $user = $login->fetch_object();
            $verify = password_verify($password, $user->password);

            if ($verify) {
                $verify = $user;
                $this->db->close();
                return $verify;
            }
        }
        $this->db->close();
        return $result;
    }
    public function editAcount($newDataUser)
    {
        $id = $_SESSION['identity']->id;



        $sql = "UPDATE users SET username='{$this->getUsername()}', email='{$this->getEmail()}'";

        if (isset($newDataUser['password'])) {
            $sql .= ", password='{$this->getPassword()}'";
            $_SESSION['identity']->password = $this->password;
        }
        if ($this->getImage() != null) {
            $sql .= ", imagen='{$this->getImage()}'";
            $_SESSION['identity']->image = $this->image;
        }

        $sql .= " WHERE id= " . $id . ";";

        $save = $this->db->query($sql);


        if ($save) {
            $_SESSION['identity']->username = $this->username;
            $_SESSION['identity']->email = $this->email;
            return true;
        }

        return false;
    }
}
//  PENDIENTE, GUARDAR CONTRASEÑA Y GUARDAR IMAGEN
