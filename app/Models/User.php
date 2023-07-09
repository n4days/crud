<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    // protected $useAutoIncrement = true;
    protected $allowedField = ['nama','hp','alamat','created_at','updated_at','deleted_at'];
    protected $returnType   = 'object';
    protected $useTimestamps   = 'true';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}