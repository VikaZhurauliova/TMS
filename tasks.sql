SELECT * FROM products WHERE count >= 1 ORDER BY name ASC; 
 
SELECT manufacturer, COUNT(*) AS count FROM products GROUP BY manufacturer; 
 
SELECT * FROM products WHERE currency = ' BYN' AND price > 2000 AND manufacturer = 'iphone'; 
 
SELECT * FROM products WHERE name LIKE '%plus%' OR name LIKE '%max%';

SELECT * FROM products WHERE count >= 1 AND currency = ' BYN' AND price >= 200 AND price <= 1000;

SELECT * FROM products WHERE manufacturer = 'Google' OR manufacturer = 'iPhone' OR manufacturer = 'Samsung';

SELECT AVG(price) as average_price, manufacturer FROM products GROUP BY manufacturer;

SELECT * FROM products GROUP BY manufacturer ORDER BY manufacturer ASC;
