<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductCategory extends Model
{
    // protected $DBGroup              = 'default';
    protected $table                = 'product_category';
    protected $primaryKey           = 'category_id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['name', 'description', 'created_at', 'updated_at', 'deleted_at'];
    protected $useSoftDeletes       = true;

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks       = true;
    // protected $beforeInsert         = [];
    // protected $afterInsert          = [];
    // protected $beforeUpdate         = [];
    // protected $afterUpdate          = [];
    // protected $beforeFind           = [];
    // protected $afterFind            = [];
    // protected $beforeDelete         = [];
    // protected $afterDelete          = [];
}
