<?php
class Banner {
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBanners() {
        $this->db->query("SELECT * FROM banner");
        $row = $this->db->fetchAll();
        return $row;
    }

    public function getBanner($id) {
        $this->db->query('SELECT * FROM banner WHERE ID = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }

    public function deleteBanner($id) {
        $this->db->query('DELETE FROM banner WHERE ID = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) { 
            return true;
        } else {
            return false;
        }
    }

    public function updateBanner($id, $title, $des, $images) {
        $this->db->query("UPDATE banner SET ID = :id , TITLE = :title, DESCRIPTION = :des, IMAGES = :images WHERE ID = :id");
        $this->db->bind(':id', $id);
        $this->db->bind(':title', $title);
        $this->db->bind(':des', $des);
        $this->db->bind(':images', $images);
        if ($this->db->execute()) { 
            return true;
        } else {
            return false;
        }
    }

    public function createBanner($title, $des, $images) {
        $this->db->query("INSERT INTO banner (TITLE, DESCRIPTION, IMAGES) VALUES (:title, :des, :images)");
        $this->db->bind(':title', $title);
        $this->db->bind(':des', $des);
        $this->db->bind(':images', $images);
        if ($this->db->execute()) { 
            return true;
        } else {
            return false;
        }
    }
}