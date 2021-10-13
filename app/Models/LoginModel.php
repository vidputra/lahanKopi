<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = "tb_admin";
    protected $primaryKey = "id_admin";
    protected $allowedFields = ["id_admin", "uname", "password"];
    protected $returnType = "object";
}
