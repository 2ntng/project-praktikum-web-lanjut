<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table                = 'product';
    protected $primaryKey           = 'product_id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['user_id', 'category_id', 'name', 'description', 'price', 'stock','image', 'created_at', 'updated_at', 'deleted_at'];
    // protected $DBGroup              = 'default';
    // protected $table                = 'product';
    // protected $primaryKey           = 'product_id';
    // protected $useAutoIncrement     = true;
    // protected $insertID             = 0;
    // protected $returnType           = 'array';
    protected $useSoftDeletes       = true;
    // protected $protectFields        = true;
    // protected $allowedFields        = ['name', 'name', 'description', 'price', 'supply'];

    // // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // // Validation
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
