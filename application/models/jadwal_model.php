<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_model
{
      public function jadualok($id, $user)
      {
            $id = $user['id'];
            $query = "SELECT `user`.`name`, `jam`.`jam`,`lapangan`.`lapangan` FROM `jadwal` 
            JOIN `jam` ON `jadwal`.`id_jam`= `jam`.`kode_jam`
            JOIN `user` ON `jadwal`.`name_id`=`user`.`id`
            JOIN `lapangan`ON `lapangan`.`id`=`jadwal`.`id_lapangan`
            WHERE  `jadwal`.`name_id`=$id 
            ";
            return $this->db->query($query)->result_array();
      }

      public function jadualerr($id, $user)
      {
            $id = $user['id'];
            $query = "SELECT `user`.`name`, `jam`.`jam`,`lapangan`.`lapangan` FROM `jadwal` 
            JOIN `jam` ON `jadwal`.`id_jam`= `jam`.`kode_jam`
            JOIN `user` ON `jadwal`.`name_id`=`user`.`id`
            JOIN `lapangan`ON `lapangan`.`id`=`jadwal`.`id_lapangan`
            WHERE  `jadwal`.`name_id`=$id 
            ";
            return $this->db->query($query)->result_array();
      }
}