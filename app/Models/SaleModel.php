<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class SaleModel extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'sales_id';
	protected $returnType = 'array';
    protected $allowedFields = [
         'sales_status',
         'sales_amount',
         'sales_reduction',
         'sales_is_commanded',
         'sales_is_delivable',
         'sales_deliver_man',
         'sales_delivery_date',
         'sales_client_id',
        ];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function get_supply_list()
    {
       
        return $this->db->table('sales')
        ->join('products', 'products.products_id = sales.sales_products_id')
        ->join('sales_options', 'sales_options.sales_options_id = sales.sales_sales_options_id')
        ->join('product_categories', 'product_categories.product_categories_id = products.products_product_categorie_id')
        ->join('exonerations', 'exonerations.exonerations_id = products.products_exonerations_id')
        ->join('providers', 'providers.providers_id = sales.sales_provider_id')

        ->select('*')
        ->get()->getResult();
    }
    public function get_supply($supplieId)
    {
       
        return $this->db->table('sales')
        ->join('products', 'products.products_id = sales.sales_products_id')
        ->join('sales_options', 'sales_options.sales_options_id = sales.sales_sales_options_id')
        ->join('product_categories', 'product_categories.product_categories_id = products.products_product_categorie_id')
        ->join('exonerations', 'exonerations.exonerations_id = products.products_exonerations_id')
        ->join('providers', 'providers.providers_id = sales.sales_provider_id')
        ->select('*')
        ->where('sales_id', $supplieId)
        ->get()->getResult();
    }
    
}