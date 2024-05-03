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
        $name = $this->getName();
        $modificationDate = $this->getModificationDate();
        $notification = $this->getNotification();
        $description = $this->getDescription();

        $sql = "INSERT INTO lists VALUES(NULL, ?, ?, NOW(), ?, ?, ?, 0, 0)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssss", $userId, $name, $modificationDate, $notification, $description);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function lists($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = ? AND paper_bin = 0 ORDER BY completed, creation_date DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }

    public function upcoming($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = ? AND completed = 0 AND paper_bin = 0 AND (notification IS NOT NULL AND notification != '0000-00-00 00:00:00') AND notification > NOW()";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }

    public function pending($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = ? AND completed = 0";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }

    public function completed($userId)
    {
        $sql = "SELECT * FROM lists WHERE user_id = ? AND completed = 1 AND paper_bin = 0";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }

    public function list($id)
    {
        $sql = "SELECT * FROM lists WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_array();
        } else {
            return false;
        }
    }

    public function getList($id)
    {
        $sql = "SELECT * FROM lists WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function edit($datos)
    {
        $sql = "UPDATE lists SET name = ?, modification_date = NOW(), notification = ?, description = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssi", $datos['name'], $datos['notification'], $datos['description'], $datos['id']);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function trash($id)
    {
        $sql = "UPDATE lists SET paper_bin = 1 WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function paper_bin()
    {
        $sql = "SELECT * FROM lists WHERE user_id = ? AND paper_bin = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $_SESSION['identity']->id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function rest($id)
    {
        $sql = "UPDATE lists SET paper_bin = 0 WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function del($id)
    {
        $sql = "DELETE FROM lists WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function restoreAll($id)
    {
        $sql = "UPDATE lists SET paper_bin = 0 WHERE paper_bin = 1 AND user_id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAll($id)
    {
        $sql = "DELETE FROM lists WHERE paper_bin = 1 AND user_id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function completeList($idList, $completed)
    {
        $sql = "UPDATE lists SET completed = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ii", $completed, $idList);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
