================ Inventory View===================
CREATE OR REPLACE VIEW inventory AS

SELECT 
sales.`*`,
sell_details.`*`,

product_categories.`*`,
products.`*`,
exonerations.`*`, 
sales_options.`*`,

SUM(supplies.supplies_selling_quantity) AS supply_quantity_total,
SUM(sell_details.sell_details_quantity) AS sell_quantity_total,
(SUM(supplies.supplies_selling_quantity) - SUM(sell_details.sell_details_quantity)) AS quantity_inventory,

product_prices.`*`,

clients.`*`,
supplies.`*`

FROM sales, sales_options, sell_details, product_categories, products, product_prices, clients, exonerations, supplies
WHERE sales.sales_client_id = clients.clients_id
AND sales.sales_id = sell_details.sell_details_sales_id
AND sell_details.sell_details_products_id = products.products_id
AND sell_details.sell_details_sales_options_id = sales_options.sales_options_id
AND sell_details.sell_details_products_id = supplies.supplies_products_id
AND sell_details.sell_details_sales_options_id = supplies.supplies_sales_options_id
AND product_categories.product_categories_id = products.products_product_categorie_id
AND exonerations.exonerations_id = products.products_exonerations_id
AND product_prices.product_prices_product_id = products.products_id
AND product_prices.product_prices_sales_option_id = sales_options.sales_options_id 

GROUP BY product_categories.product_categories_id,
products.products_id, 
sales_options.sales_options_id 


================= insert_product_prices TRIGGER =======

CREATE TRIGGER `insert_product_prices` 
AFTER INSERT ON `product_prices`
FOR EACH ROW
	
	IF (SELECT products_id FROM inventory 
	WHERE products_id = NEW.product_prices_product_id 
	AND sales_options_id = NEW.product_prices_sales_option_id) = NULL || (SELECT products_id FROM inventory 
	WHERE products_id = NEW.product_prices_product_id 
	AND sales_options_id = NEW.product_prices_sales_option_id) <= 0  THEN
	
	INSERT INTO `sell_details` 
			 (`sell_details_amount`,
			  `sell_details_quantity`,
			  `s    ell_details_sales_options_id`,
			  `sell_details_sales_id`,
			  `sell_details_products_id`
			  ) 
			 VALUES 
			 (0,
			  0,
			  NEW.product_prices_sales_option_id,
			  1,
			  
			  NEW.product_prices_product_id
			  
			  )
	ENDIF
