<?php
class Event {
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getEventList()
    {
        // $this->db->query('SELECT * FROM EVENT');
        $this->db->query('SELECT * FROM event');
        // $this->db->bind(':id', $id);
        $row = $this->db->fetchAll();
        return $row;
    }

    public function getEvent($id)
    {
        $this->db->query('SELECT * FROM event WHERE ID = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }
}
?>