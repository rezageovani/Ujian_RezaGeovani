<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUpload extends CI_Model
{
 public function simpanData($data = null)
 {
 $this->db->insert('videos', $data);
 }
 //manajemen buku
 public function getKomen()
 {
 return $this->db->get('videos');
 }
 public function hapusKomen($where = null)
 {
 $this->db->delete('videos', $where);
 }
}
