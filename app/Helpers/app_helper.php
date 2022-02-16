<?php

use App\Models\PermissionModel;
use App\Models\GroupPermissionModel;
use App\Models\GroupModel;
use App\Models\ClientModel;
use App\Models\ProviderModel;
use App\Models\DeliveryMenModel;
use App\Models\ProductCategoriesModel;
use App\Models\SalesOptionsModel;
use App\Models\ConfigModel;


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
			if(count($groups) >0)
				return (array) json_decode($groups[0]->permissions);
				return [];
	}
}

if (!function_exists("permission_list_foreach_group")) {
function permission_list_foreach_group()
	{
		$modelGroup = new GroupModel();
		$modelGroupPermission = new GroupPermissionModel();
		$groups = $modelGroup->get()->getResult();
		$data = [];
		foreach ($groups as $group){
			$temp = $modelGroupPermission->get_permission_by_group($group->id);
			if(count($temp) > 0)
				$data[$group->id] =  ((array) json_decode($temp[0]->permissions));
			else
				$data[$group->id] = $temp;

			
			
		}
		return $data;
	}
}

if (!function_exists("permission_list_group")) {
function permission_list_group($id)
	{
		$modelGroupPermission = new GroupPermissionModel();
		$data = [];
			$temp = $modelGroupPermission->get_permission_by_group($id);
			if(count($temp) > 0)
				return((array) json_decode($temp[0]->permissions));
				return $temp;						
	}
}

if (!function_exists("getPermissionByModule")) {
function getPermissionByModule()
	{
		$modelPermission = new PermissionModel();
		$permissions = $modelPermission->getPermissionsGroupByModule();
		$data = [];
		foreach ($permissions as $permission){

			$data[$permission->module] = $modelPermission->where(['module' => $permission->module])->get()->getResult();
		}
		return $data;
	}
}

if (!function_exists("retrivePermissionByModule")) {
function retrivePermissionByModule($permissions)
	{

		$data = [];
		$temp = [];
		$index = "";
		foreach ($permissions as $key => $permission){
			if( $permission->module == $index || $index==""){
				$temp[count($temp)] = $permission;
				$index = $permission->module;
			}else{
				$data[$index] = $temp;
				$temp = [];
				$temp[count($temp)] = $permission;
				$index = $permission->module;
			}
			//$data[$permission->module] = $modelPermission->where(['module' => $permission->module])->get()->getResult();
		}
		if($index!= "" && count($temp)>0)
			$data[$index] = $temp;	
		return $data;
	}
}

if (!function_exists("insertPermissions")) {
function insertPermissions($groupId, $request)
	{
		$modelPermission = new PermissionModel();
		$modelGroupPermission = new GroupPermissionModel();
		$permissions = $modelPermission->get()->getResult();
		$data = [];
		foreach ($permissions as $permission){
			if($request->getPost($permission->id) != null){
				$data[$permission->id] =$permission;
				//$modelGroupPermission->insert(["group_id"=> $groupId,"permission_id"=>$permission->id]);
			}
		}
		$modelGroupPermission->insert(["group_id"=> $groupId,"permissions"=>json_encode($data)]);
		return $data;
	}
}

if (!function_exists("updatePermissions")) {
function updatePermissions($groupId, $request)
	{
		$modelPermission = new PermissionModel();
		$modelGroupPermission = new GroupPermissionModel();
		$modelGroupPermission->where("group_id", $groupId)->delete();
		$permissions = $modelPermission->get()->getResult();
		$data = [];
		foreach ($permissions as $permission){
			if($request->getPost($permission->id) != null){
				$data[$permission->id] =$permission;
				//$modelGroupPermission->insert(["group_id"=> $groupId,"permission_id"=>$permission->id]);
			}
		}
		$modelGroupPermission->insert(["group_id"=> $groupId,"permissions"=>json_encode($data)]);
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
				$clientModel = new ClientModel();
				return $clientModel->insert($data);
			case '2':
				$providerModel = new ProviderModel();
				return $providerModel->insert($data);

			case '3':
				$deliveryMenModel = new DeliveryMenModel();
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
				return new ClientModel();;
			case '2':
				return new ProviderModel();

			case '3':
				return new DeliveryMenModel();
			default:
				return null;
		}
	}
}


if (!function_exists("productParams")) {
function productParams()
	{
		return [
				"1"=>[
					"title"=>"Liste des catégories de produit",
					"externalName"=>"catégorie de produit",
					"table"=>"product_categories",
					"externalNewRoute"=>"/product_category",

				],
				"2"=>[
					"title"=>"Liste des options de vente",
					"externalName"=>"options de vente",
					"externalNewRoute"=>"/sales_option",
					"table"=>"sales_options",
				]
				
		];
	}
}



if (!function_exists("productInsert")) {
function productInsert($type, $data)
	{
		switch ($type) {
			case '1':
				$clientModel = new ProductCategoriesModel();
				return $clientModel->insert($data);
			case '2':
				$providerModel = new SalesOptionsModel();
				return $providerModel->insert($data);			
			default:
				return null;
		}
	}
}

if (!function_exists("productModel")) {
function productModel($type)
	{
		switch ($type) {
			case '1':
				return new ProductCategoriesModel();;
			case '2':
				return  new SalesOptionsModel();
			default:
				return null;
		}
	}
}


if (!function_exists("getConfigList")) {
	function getConfigList()
		{
			$modelConfig = new ConfigModel();
			$configList = $modelConfig->get()->getResult();
			$data = [];
			foreach ($configList as $config){
				$data[$config->config_code] = $config;
			}
			return $data;
		}
	}



?>
