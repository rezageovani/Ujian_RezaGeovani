<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelKomen extends CI_Model
{
 public function simpanData($data = null)
 {
 $this->db->insert('pendapat', $data);
 }
 //manajemen buku
 public function getKomen()
 {
 return $this->db->get('pendapat');
 }
 public function hapusKomen($where = null)
 {
 $this->db->delete('pendapat', $where);
 }
}
