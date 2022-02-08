<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class SalesOptions extends Model
{
    protected $table = 'sales_options';
    protected $primaryKey = 'sales_options_id';
	protected $returnType = 'array';
    protected $allowedFields = [
         'sales_options_name',
         'sales_options_description',
         'sales_options_isActive',
        ];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



}