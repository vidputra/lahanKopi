<?php

namespace App\Models;

use CodeIgniter\Model;

class UserPemetaanModels extends Model
{
    protected $table = "tb_pemetaan";
    protected $primaryKey = "id_pm";
    protected $allowedFields = ["id_pm", "kecamatan", "tahun", "luas_lahan", "produksi", "produktifitas"];
    protected $returnType = "object";
}
