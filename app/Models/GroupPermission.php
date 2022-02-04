<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class GroupPermission extends Model
{
    protected $table = 'groups_permissions';
    protected $primaryKey = 'group_id, permission_id';
	protected $returnType = 'array';
    protected $allowedFields = ['group_id', 'permission_id'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



    public function get_permission_by_group($group)
    {
       
        return $this->db->table('permissions')->join('groups_permissions', 'permissions.id = groups_permissions.permission_id')
        ->select('name, permissions.id as permission_id, group_id ')
        ->where('groups_permissions.group_id', $group)
        ->get()->getResultArray();
    
    }
    public function get_goupId($group)
    {
       
        return $this->db->table('groups_permissions')->select('permission_id')
        ->where('group_id', $group)
        ->get()->getResult();
    
    }

}