<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'orders_id';
	protected $returnType = 'array';
    protected $allowedFields = [
         'orders_status',
         'orders_amount',
         'orders_client_id',
         'orders_delivery_date',
        ];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_order_list()
    {
       
       return $this->db->table('orders')
        ->join('clients', 'orders.orders_client_id = clients.clients_id')
        ->select('*')
        ->get()->getResult();
    }



}