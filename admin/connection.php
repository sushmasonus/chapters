<?php

class Connection {
    public $db;

    function __construct($database, $user = "root", $pass = "") {

        $this->db = new PDO('mysql:host=localhost;dbname=' . $database, $user, $pass);
    }
     public function insertChapter($insert)
    {
        $sql = "INSERT INTO chapters (name,content)
                VALUES (?,?);";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($insert);
    }
       public function updateChapter($update)
    {

        $sql    =   "update chapters set
                     chapters.name = ?,
                     chapters.content = ?
                    where chapters.id = ?;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($update);
    }
     public function getAllChapters()
    {
        $sql    =   "select * from chapters";
        $sth    =   $this->db->query($sql);
        return $sth->fetchAll();
    }
     public function getChapter($chapters_id)
    {
        $sql    =   "select * from chapters where chapters.id=?";
        $stmt   =   $this->db->prepare($sql);
        $stmt->execute([
                $chapters_id,
            ]);
        return $stmt->fetch();
    }
     public function delete($chapters_id)
    {

        $sql = "delete from chapters where chapters.id = ?";
        $stmt = $this->db->prepare($sql);
         $stmt->execute([
                 $chapters_id,
                ]);
    }
    public function deleteAllChapters()
    {

        $sql  = "delete from chapters";
        $stmt = $this->db->query($sql);
        $stmt->execute();
    }
}
