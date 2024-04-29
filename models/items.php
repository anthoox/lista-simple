<?php


class Items
{
    private $id;
    private $user_id;
    private $list_id;
    private $name;
    private $price;
    private $units;
    private $notification;
    private $notes;
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

    public function getNotification()
    {
        return $this->notification;
    }

    public function setNotification($notification)
    {
        $this->notification = $notification;
        return $this;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }
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
        $sql = "SELECT * FROM items WHERE list_id = " . $listId . " ORDER BY completed, creation_date desc";

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

    public function save($listId, $userId)
    {
        $sql = "INSERT INTO items VALUES(NULL, $userId, $listId, '{$this->getName()}', '{$this->getPrice()}', '{$this->getUnits()}' ,'
        {$this->getNotification()}' ,'{$this->getNotes()}', 0, NOW())";

        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
            $this->db->close();
            return $result;
        }
        $this->db->close();
        return $result;
    }

    public function getItem($itemId)
    {
        $sql = "SELECT * FROM items WHERE id = '{$itemId}' ";
        $result = $this->db->query($sql);
        if ($result) {
            $dataLists = $result->fetch_assoc();

            if (!empty($dataLists)) {

                return $dataLists;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function edit($dataItem)
    {


        $sql = "UPDATE items SET name = '{$dataItem['name']}', price = '{$dataItem['price']}', numer = '{$dataItem['units']}', notification_date = '{$dataItem['notification']}', notes = '{$dataItem['notes']}' WHERE id = '{$dataItem['idItem']}'";


        $save = $this->db->query($sql);


        if ($save) {
            return true;
        } else {
            return false;
        }
    }

    public function del($idItem)
    {
        $sql = "DELETE FROM items WHERE id = '{$idItem}'";
        $restul = $this->db->query($sql);
        if ($restul) {
            return true;
        } else {
            return false;
        }
    }

    public function getItemsInfo($idList)
    {
        $sql = "SELECT 
                (SELECT COUNT(id) FROM items WHERE list_id = $idList) AS total_items,
                (SELECT COUNT(id) FROM items WHERE list_id = $idList AND completed = 1) AS completed_items";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function totalPrice($idList)
    {
        $sql = "SELECT SUM(price * numer) AS totalPrice FROM items WHERE list_id = $idList";
        $result = $this->db->query($sql);


        if ($result) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}
