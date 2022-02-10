<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'products_id';
	protected $returnType = 'array';
    protected $allowedFields = [
         'products_name',
         'products_barre_code',
         'products_description',
         'products_isActive',
        ];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



}