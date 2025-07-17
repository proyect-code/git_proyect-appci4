<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class Login_Model extends Model{
    protected $table = 'tbl_usuario_acceso_intra';
	protected $primaryKey = 'n_rfc';
    protected $allowedFields = ['n_nombre','n_rfc','n_clave'];
}