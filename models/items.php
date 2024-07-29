<?php


class Items
{
    private $id;
    private $user_id;
    private $list_id;
    private $name;
    private $price;
    private $units;
    // private $notification;

    private $completed;

    private $db;

    public function __construct()
    {
        $this->db = DataBase::connect();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getListId()
    {
        return $this->list_id;
    }

    public function setListId($list_id)
    {
        $this->list_id = $list_id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getUnits()
    {
        return $this->units;
    }

    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    // public function getNotification()
    // {
    //     return $this->notification;
    // }

    // public function setNotification($notification)
    // {
    //     $this->notification = $notification;
    //     return $this;
    // }

    public function getcompleted()
    {
        return $this->completed;
    }

    public function setcompleted($completed)
    {
        $this->completed = $completed;
        return $this;
    }

    public function items($listId)
    {
        $sql = "SELECT * FROM items WHERE list_id = ? ORDER BY completed";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $listId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }

    public function save($listId, $userId)
    {
        $idUser = (int)$userId;
        $idList = (int)$listId;
        $name = $this->getName();
        $price = $this->getPrice();
        $units = $this->getUnits();
        // $notification = $this->getNotification();


        $sql = "INSERT INTO items VALUES(NULL, ?, ?, ?, ?, ?, 0, NOW())";

        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("iisss", $idUser, $idList, $name, $price, $units);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getItem($itemId)
    {
        $sql = "SELECT * FROM items WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $itemId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function edit($dataItem)
    {
        $sql = "UPDATE items SET name = ?, price = ?, numer = ? WHERE id = ?";

        $stmt = $this->db->prepare($sql);

        $stmt->bind_param("siii", $dataItem['name'], $dataItem['price'], $dataItem['units'],  $dataItem['idItem']);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function del($idItem)
    {
        $sql = "DELETE FROM items WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $idItem);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getItemsInfo($idList)
    {
        $sql = "SELECT 
                (SELECT COUNT(id) FROM items WHERE list_id = ?) AS total_items,
                (SELECT COUNT(id) FROM items WHERE list_id = ? AND completed = 1) AS completed_items";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ii", $idList, $idList);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function totalPrice($idList)
    {
        $sql = "SELECT SUM(price * numer) AS totalPrice FROM items WHERE list_id = ? AND completed != 0";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $idList);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function completed($idList, $completed)
    {
        $sql = "UPDATE items SET completed = ? WHERE id = ?";
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
