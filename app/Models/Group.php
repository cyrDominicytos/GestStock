<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Group extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'id';
	protected $returnType = 'array';
    protected $allowedFields = ['id', 'name', 'description', 'guard'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


}