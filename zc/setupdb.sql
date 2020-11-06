CREATE DATABASE IF NOT EXISTS f35ee;
USE f35ee;

SELECT "Dropping tables" AS MESSAGE;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS de_products;

SET FOREIGN_KEY_CHECKS = 1;




CREATE TABLE de_products (
    product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(30) NOT NULL,
    product_price DOUBLE NOT NULL,
    
);


SELECT "Filling product table" AS MESSAGE;
INSERT INTO f35ee.de_products (product_id, product_name, product_price)
    VALUES
    (NULL, "bedroom1", 20.00 ),
    (NULL, "bedroom2", 25.00  ),
    (NULL, "livingroom1", 30.00 ),
    (NULL, "livingroom2", 35.00),
    (NULL, "outdoor1", 40.00 ),
    (NULL, "outdoor2", 45.00  ),
    (NULL, "toilet1", 50.00  ),
    (NULL, "toilet2", 55.00 );
   

