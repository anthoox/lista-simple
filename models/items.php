<?php


class Items
{
    private $id;
    private $user_id;
    private $list_id;
    private $name;
    private $price;
    private $number;
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
        return $this->id;
    }

    public function setUserId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getListId()
    {
        return $this->id;
    }

    public function setListId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->id;
    }

    public function setName($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getPrice()
    {
        return $this->id;
    }

    public function setPrice($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNumber()
    {
        return $this->id;
    }

    public function setNumber($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNotification()
    {
        return $this->id;
    }

    public function setNotification($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNotes()
    {
        return $this->id;
    }

    public function setNotes($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getcompleted()
    {
        return $this->id;
    }

    public function setcompleted($id)
    {
        $this->id = $id;
        return $this;
    }

    public function items($listId)
    {
        $sql = "SELECT * FROM items WHERE list_id = " . $listId;

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
}
