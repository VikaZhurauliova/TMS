SELECT o.id, c.phone, o.pay_type, p.name as product_name, cat.name as category_name, s.adress, s.work_hours, pp.price, cu.code as currency FROM `orders`as o
INNER JOIN order_product as op ON op.order_id = o.id
INNER JOIN products as p ON p.id = op.product_id
INNER JOIN categories as cat ON cat.id = p.category_id
INNER JOIN customers as c ON o.customer_id = c.id
INNER JOIN products_prices as pp ON pp.product_id = p.id
INNER JOIN stores as s ON s.id = pp.store_id
INNER JOIN currencies as cu ON cu.id = pp.currency_id;