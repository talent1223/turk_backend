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
  
  `flat` VARCHAR(256),	
  `padded_bubble_mailer` VARCHAR(256),	
  `parcel` VARCHAR(256),	
  `flat_rate_envelope` VARCHAR(256),	
  `flat_rate_legal_envelope` VARCHAR(256),	
  `flat_rate_padded_envelope` VARCHAR(256),	
  `small_flat_rate_box` VARCHAR(256),	
  `medium_flat_rate_box` VARCHAR(256),	
  `large_flat_rate_box` VARCHAR(256),	
  `regional_rate_box_a` VARCHAR(256),
  `regional_rate_box_b` VARCHAR(256),
  
  `weight_lbs` VARCHAR(256),	
  `weight_oz` VARCHAR(256),	
  
  `dimensions` VARCHAR(256),	
  
  `created` DATETIME NOT NULL,
  `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) CHARSET=utf8;          