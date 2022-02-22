<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class OrdersDetailsModel extends Model
{
    protected $table = 'orders_details';
    protected $primaryKey = 'orders_details_id';
	protected $returnType = 'array';
    protected $allowedFields = [
         'orders_details_amount',
         'orders_details_quantity',
         'orders_details_orders_id',
         'orders_details_sales_options_id',
         'orders_details_products_id',
        ];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function get_order_detail($orderId)
    {
       
       return $this->db->table('orders_details')
       ->join('orders', 'orders.orders_id = orders_details.orders_details_orders_id')
       ->join('products', 'products.products_id = orders_details.orders_details_products_id')
       ->join('sales_options', 'sales_options.sales_options_id = orders_details.orders_details_sales_options_id')
       ->join('product_categories', 'product_categories.product_categories_id = products.products_product_categorie_id')
       ->select('*')
       ->where('orders_id', $orderId)
       ->get()->getResult();
    }
}