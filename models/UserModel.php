<?php


class UserModel extends SistemModel
{
    public function getUser($email, $password)
    {
        $q = "SELECT
                id,
                nama,
                email,
                id_level,
                tanggal,
                Id_status
                FROM user
                WHERE email='$email' AND password='$password'";
        return $this->db->query($q)->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllUser()
    {
        $q = "SELECT 
        user.id, 
        user.nama, 
        user.email, 
        level.nama_level, 
        status.nama_status 
        FROM user
        LEFT JOIN level ON level.id=user.id_level
        LEFT JOIN status ON status.id=user.id_status
        ";

        return $this->db->query($q)->fetch_all(MYSQLI_ASSOC);
    }
    public function insert($nama,  $email, $password, $id_level, $id_status)
    {
      $q = "INSERT INTO user ( nama, email, password, id_level, id_status) VALUES ('$nama', '$email','$password','$id_level','$id_status')";
      return $this->db->query($q);
    }
    public function getByID($id)
    {
      $q = "SELECT * FROM user WHERE id='$id'";

      return $this->db->query($q)->fetch_all(MYSQLI_ASSOC);
    }
    public function update($id, $nama, $email, $password, $id_level, $id_status)
    {
      $q = "UPDATE user SET 
      nama='$nama', email='$email',  id_level='$id_level', id_status='$id_status' WHERE id='$id' ";
      return $this->db->query($q);
    }
    public function delete($id)
    {
      $q = "DELETE FROM user WHERE id='$id' ";
      return $this->db->query($q);
    }
}