<?php

class Lists
{
    private $id;
    private $user_id;
    private $name;
    private $create_date;
    private $modification_date;
    private $notification;
    private $description;
    private $paper_bin;
    private $complete;

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
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of create_date
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set the value of create_date
     */
    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * Get the value of modification_date
     */
    public function getModificationDate()
    {
        return $this->modification_date;
    }

    /**
     * Set the value of modification_date
     */
    public function setModificationDate($modification_date)
    {
        $this->modification_date = $modification_date;

        return $this;
    }

    /**
     * Get the value of notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set the value of notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of paper_bin
     */
    public function getPaperBin()
    {
        return $this->paper_bin;
    }

    /**
     * Set the value of paper_bin
     */
    public function setPaperBin($paper_bin)
    {
        $this->paper_bin = $paper_bin;

        return $this;
    }

    /**
     * Get the value of complete
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set the value of complete
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    public function save($userId)
    {
        $date = date('Y-m-d');

        $sql = "INSERT INTO lists VALUES(NULL, $userId, '{$this->getName()}', '$date', '{$this->getModificationDate()}', '{$this->getNotification()}' ,'{$this->getDescription()}' , 0, 0)";

        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
            $this->db->close();
            return $result;
        }
        return $result;
    }

    public function lists($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = " . $userId . " AND paper_bin = 0";

        $result = $this->db->query($sql);
        if ($result) {
            $dataLists = $result->fetch_All();

            if (!empty($dataLists)) {

                return $dataLists;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function upcoming($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = " . $userId . " AND paper_bin = 0 AND (notification IS NOT NULL AND notification != '0000-00-00 00:00:00') AND notification > NOW()";
        $result = $this->db->query($sql);
        if ($result) {
            $dataLists = $result->fetch_All();

            if (!empty($dataLists)) {

                return $dataLists;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function pending($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = " . $userId . " AND completed = 0";
        $result = $this->db->query($sql);
        if ($result) {
            $dataLists = $result->fetch_All();

            if (!empty($dataLists)) {

                return $dataLists;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function completed($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = " . $userId . " AND completed = 1 AND paper_bin = 0";
        $result = $this->db->query($sql);

        if ($result) {
            $dataLists = $result->fetch_all();

            if (!empty($dataLists)) {

                return $dataLists;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function list($id)
    {
        $sql = "SELECT * FROM lists WHERE id = " . $id;
        $result = $this->db->query($sql);
        if ($result) {
            $dataList = $result->fetch_array();

            if (!empty($dataList)) {
                return $dataList;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function edit($datos)
    {
        $modification = date("Y-m-d");
        $sql = "UPDATE lists SET name = '{$datos['name']}', modification_date = '$modification', notification = '{$datos['notification']}',  description = '{$datos['description']}' WHERE id = '{$datos['id']}'";

        $save = $this->db->query($sql);


        if ($save) {
            return true;
        } else {
            return false;
        }
    }

    public function trash($id)
    {
        $sql = "UPDATE lists SET paper_bin = 1 WHERE id = '{$id}'";
        $save = $this->db->query($sql);


        if ($save) {
            return true;
        } else {
            return false;
        }
    }

    public function paper_bin()
    {
        $sql = "SELECT * FROM lists WHERE user_id = '{$_SESSION['identity']->id}' AND paper_bin = 1";
        $result = $this->db->query($sql);


        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function rest($id)
    {
        $sql = "UPDATE lists SET paper_bin = 0 WHERE id = '{$id}'";
        $save = $this->db->query($sql);

        if ($save) {
            return true;
        } else {
            return false;
        }
    }
    public function del($id)
    {
        $sql = "DELETE FROM lists WHERE id = '{$id}'";
        $restul = $this->db->query($sql);
        if ($restul) {
            return true;
        } else {
            return false;
        }
    }
}
