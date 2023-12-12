<?php


class LevelModel extends SistemModel
{
    public function getAll()
    {
      $q = "SELECT * FROM Level";

      return $this->db->query($q)->fetch_all(MYSQLI_ASSOC);
    }

    public function getByID($id)
    {
      $q = "SELECT * FROM Level WHERE id='$id'";

      return $this->db->query($q)->fetch_all(MYSQLI_ASSOC);
    }

    public function delete($id)
    {
      $q = "DELETE FROM level WHERE id='$id' ";
      return $this->db->query($q);
    }

    public function insert($nama_level)
    {
      $q = "INSERT INTO level (nama_level) VALUES ('$nama_level')";
      return $this->db->query($q);
    }

    public function update($id, $nama_level)
    {
      $q = "UPDATE level SET nama_level='$nama_level' WHERE id='$id'";
      return $this->db->query($q);
    }
}