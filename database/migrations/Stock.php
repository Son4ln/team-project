<?php
	class Stock extends DataBase{
		function createStock (){
		  parent::setConnect();	
		  try {
		  	parent::setConnect();
			$createStock = "Create table stock (
							stock_id		int(11)		Auto_increment	Not null,
							input_date		date					Not null,
							quantity_input	tinyint(4)				Not null,
							price_input		int(11)					Not null,
							original		text					Not null,
							user_id		int(11)					Not null, 
							product_id		int(11)					Not null, 
							Primary key (stock_id)
						  );
						";
			$this->db->exec($createStock);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }
			
		}
	}
?>