<?php

use App\Models\Permission;
use App\Models\GroupPermission;
use App\Models\Group;
use App\Models\Client;
use App\Models\Provider;
use App\Models\DeliveryMen;


// Function: used to convert a string to revese in order
if (!function_exists("status")) {
	function status($statusId)
	{
		return ($statusId== 1) ? ("<div class='badge badge-success fw-bolder'>Actif</div>") : ("<div class='badge badge-danger fw-bolder'>InActif</div>"); 
	}
}
if (!function_exists("deleteUser")) {
function deleteUser($statusId)
{
	return ($statusId== 1) ? ("<span class='text-danger'>Bannir</span>") : ("<span class='text-success'>Activer</span>"); 
}

if (!function_exists("groups_array")) {
function groups_array($groups)
	{
		$data = [];
		foreach ($groups as $group){
			$data[count($data)] = $group->group_id;
		}
		return $data;
	}
}
if (!function_exists("permission_array")) {
function permission_array($groups)
	{
		$data = [];
		foreach ($groups as $group){
			$data[count($data)] = $group->permission_id;
		}
		return $data;
		}
	}
}

if (!function_exists("permission_list_foreach_group")) {
function permission_list_foreach_group()
	{
		$modelGroup = new Group();
		$modelGroupPermission = new GroupPermission();
		$groups = $modelGroup->get()->getResult();
		$data = [];
		$temp = [];
		foreach ($groups as $group){
			$data[$group->id] = $modelGroupPermission->get_permission_by_group($group->id);
			
		}

		return $data;
	}
}

if (!function_exists("getPermissionByModule")) {
function getPermissionByModule()
	{
		$modelPermission = new Permission();
		$permissions = $modelPermission->getPermissionsGroupByModule();
		$data = [];
		foreach ($permissions as $permission){

			$data[$permission->module] = $modelPermission->where(['module' => $permission->module])->get()->getResult();
		}
		return $data;
	}
}

if (!function_exists("insertPermissions")) {
function insertPermissions($groupId, $request)
	{
		$modelPermission = new Permission();
		$modelGroupPermission = new GroupPermission();
		$permissions = $modelPermission->get()->getResult();
		$data = [];
		foreach ($permissions as $permission){
			if($request->getPost($permission->id) != null){
				$modelGroupPermission->insert(["group_id"=> $groupId,"permission_id"=>$permission->id]);
			}
		}
		return $data;
	}
}
if (!function_exists("updatePermissions")) {
function updatePermissions($groupId, $request)
	{
		$modelPermission = new Permission();
		$modelGroupPermission = new GroupPermission();
		$modelGroupPermission->where("group_id", $groupId)->delete();
		$permissions = $modelPermission->get()->getResult();
		$data = [];
		foreach ($permissions as $permission){
			if($request->getPost($permission->id) != null){
				$modelGroupPermission->insert(["group_id"=> $groupId,"permission_id"=>$permission->id]);
			}
		}
		return $data;
	}
}

if (!function_exists("externalParams")) {
function externalParams()
	{
		return [
				"1"=>[
					"title"=>"Liste des clients",
					"externalName"=>"client",
					"table"=>"clients",
				],
				"2"=>[
					"title"=>"Liste des fournisseurs",
					"externalName"=>"fournisseur",
					"externalNewRoute"=>"",
					"table"=>"providers",
				],
				"3"=>[
					"title"=>"Liste des livreurs",
					"externalName"=>"livreur",
					"externalNewRoute"=>"",
					"table"=>"delivery_mens",
				],
				
		];
	}
}

if (!function_exists("externalInsert")) {
function externalInsert($type, $data)
	{
		switch ($type) {
			case '1':
				$clientModel = new Client();
				return $clientModel->insert($data);
			case '2':
				$providerModel = new Provider();
				return $providerModel->insert($data);

			case '3':
				$deliveryMenModel = new DeliveryMen();
				return $deliveryMenModel->insert($data);
			
			default:
				return null;
		}
	}
}

if (!function_exists("externalModel")) {
function externalModel($type)
	{
		switch ($type) {
			case '1':
				return new Client();;
			case '2':
				return new Provider();

			case '3':
				return new DeliveryMen();
			default:
				return null;
		}
	}
}
if (!function_exists("deactiveExternal")) {
function deactiveExternal($type)
	{
		switch ($type) {
			case '1':
				return new Client();;
			case '2':
				return new Provider();

			case '3':
				return new DeliveryMen();
			default:
				return null;
		}
	}
}


?>
