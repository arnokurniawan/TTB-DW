CREATE DATABASE inventory;

USE inventory;

CREATE TABLE suppliers_tb ( 
id INT NOT NULL AUTO_INCREMENT, 
company_name VARCHAR(30) NOT NULL, 
address VARCHAR(50) , 
phone VARCHAR(30) , 
PRIMARY KEY (id) 
);

CREATE TABLE products_tb ( 
id INT NOT NULL AUTO_INCREMENT, 
product_name VARCHAR(30) NOT NULL,  
supplier_id INT , 
PRIMARY KEY(id),
FOREIGN KEY (supplier_id) REFERENCES suppliers_tb(id)
);

INSERT INTO suppliers_tb(company_name, address, phone)
VALUES ('PT.DumbWays','Jalan Kemana Saja', 08389696969);

INSERT INTO suppliers_tb(company_name, address, phone)
VALUES ('PT.WaysDumb','Jalanin aja dulu', 0821692121212);

INSERT INTO products_tb(product_name, supplier_id)
VALUES ('MSI GL63', 2);

INSERT INTO products_tb(product_name, supplier_id)
VALUES ('Acer Predator Triton 300', 1);

INSERT INTO products_tb(product_name, supplier_id)
VALUES ('HP Omen 15', 1);

INSERT INTO products_tb(product_name, supplier_id)
VALUES ('Macbook Pro 18', 2);

DESCRIBE suppliers_tb;

DESCRIBE products_tb;

INSERT INTO suppliers_tb(company_name, address, phone)
VALUES ('PT.Mejik','Jl Wonderland', 086921692169);
INSERT INTO suppliers_tb(company_name, address, phone)
VALUES ('PT.Sera','Jl. Nusakambangan', 082169216921);

INSERT INTO products_tb(product_name, supplier_id)
VALUES ('Lenovo Ideal Pad', 3);

INSERT INTO products_tb(product_name, supplier_id)
VALUES ('Razer Blade Stealth', 4);

INSERT INTO products_tb(product_name, supplier_id)
VALUES ('Lenovo Thinkpad T420', 3);

SELECT * FROM products_tb;

SELECT product_name FROM products_tb WHERE supplier_id=1;

UPDATE products_tb
    -> SET product_name = 'Acer Swift'
    -> WHERE supplier_id=3 AND id=5;

UPDATE products_tb SET product_name = 'MSI GL61' WHERE supplier_id=3 AND id=7;

SELECT * FROM products_tb INNER JOIN suppliers_tb ON products_tb.supplier_id=suppliers_tb.id;

UPDATE products_tb SET product_name = 'Acer Nitro' WHERE supplier_id=1 AND id=3;



























