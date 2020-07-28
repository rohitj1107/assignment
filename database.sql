DROP TABLE IF EXISTS c_order;
CREATE TABLE c_order (
  o_id int(20) NOT NULL AUTO_INCREMENT,
  po_id int(20) NOT NULL,
  o_name varchar(200) NOT NULL,
  o_size char(20) NOT NULL,
  o_price char(200) NOT NULL,
  PRIMARY KEY (o_id),
  KEY po_id (po_id),
  CONSTRAINT c_order_ibfk_1 FOREIGN KEY (po_id) REFERENCES product (p_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS product;
CREATE TABLE product (
  p_id int(20) NOT NULL AUTO_INCREMENT,
  p_image varchar(225) DEFAULT NULL,
  p_name varchar(200) NOT NULL,
  p_description text DEFAULT NULL,
  p_size varchar(200) NOT NULL,
  p_price varchar(200) NOT NULL,
  PRIMARY KEY (p_id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO product VALUES (1,'http://192.168.64.2/cart/asset/one.png','Skirt and Top','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','S | M | L','1000 | 1468 | 2000'),(2,'http://192.168.64.2/cart/asset/two.png','Skirt and Top','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','S | M | L','1020 | 1400 | 2020');
