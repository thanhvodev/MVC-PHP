<?php
class Blog {
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getBlogList()
    {
        $this->db->query('SELECT * FROM BLOG');
        // $this->db->bind(':id', $id);
        $row = $this->db->fetchAll();
        return $row;
    }

    public function getBlog($id)
    {
        $this->db->query('SELECT * FROM BLOG WHERE ID = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }
}
?>