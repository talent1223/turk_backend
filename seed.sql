CREATE TABLE `data` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  
  `ship_from_name` VARCHAR(256),
  `ship_from_address1` VARCHAR(256),
  `ship_from_address2` VARCHAR(256),
  `ship_from_city` VARCHAR(256),
  `ship_from_state` VARCHAR(256),
  `ship_from_zip` VARCHAR(256),
  
  `ship_to_name` VARCHAR(256),
  `ship_to_address1` VARCHAR(256),
  `ship_to_address2` VARCHAR(256),
  `ship_to_city` VARCHAR(256),
  `ship_to_state` VARCHAR(256),
  `ship_to_zip` VARCHAR(256),
  
  `return_address_name` VARCHAR(256),
  `return_address_address1` VARCHAR(256),
  `return_address_address2` VARCHAR(256),
  `return_address_city` VARCHAR(256),
  `return_address_state` VARCHAR(256),
  `return_address_zip` VARCHAR(256),
  
  `flat_rate` VARCHAR(256),	
  `services` VARCHAR(256),	
  
  `weight_lbs` VARCHAR(256),	
  `weight_oz` VARCHAR(256),	
  
  `dimensions` VARCHAR(256),	
  
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP

) CHARSET=utf8;          