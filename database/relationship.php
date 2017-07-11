<?php
	class Relationship extends DataBase{
		function createRelationship (){
		  parent::setConnect();
		  // tạo quan hệ giữa User và Manage User
		  try {
			$userToManage = "Alter table manage_user
							 Add constraint	manage
							 Foreign key (user_id)
							 References users (user_id);
							";
			$this->db->exec($userToManage);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //Tạo quan hệ giữa product và user
      	  try {
			$userToProduct = "Alter table products
							  Add constraint	user_product
							  Foreign key (user_id)
							  References users (user_id);
							";
			$this->db->exec($userToProduct);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //Tạo quan hệ giữa brand và product
      	  try {
			$brandToProduct = "Alter table products 
							   Add constraint	brand_product
							   Foreign key (brand_id)
							   References brands (brand_id);
							  ";
			$this->db->exec($brandToProduct);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //tạo quan hệ giữa product và images
      	  try {
			$imagesToProduct = "Alter table products 
							   Add constraint	image_product
							   Foreign key (image_id)
							   References images (image_id);
							  ";
			$this->db->exec($imagesToProduct);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //tạo quan hệ giữa order và user
      	  try {
			$userToOrder = "Alter table orders 
							Add constraint	user_orders
							Foreign key (user_id)
							References users (user_id);
							";
			$this->db->exec($userToOrder);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //tạo quan hệ giữa order và order detail
      	  try {
			$orderToDetail = "Alter table order_detail
							  Add constraint	orders_detail
							  Foreign key (order_id)
							  References orders (order_id);
							  ";
			$this->db->exec($orderToDetail);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //tạo quan hệ giữa evaluation và user
      	  try {
			$userToEval = "Alter table evaluation
							Add constraint	user_evaluation
							Foreign key (user_id)
							References users (user_id);
							";
			$this->db->exec($userToEval);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //tạo quan hệ giữa evaluation và products
      	  try {
			$evalToProduct = "Alter table evaluation
							  Add constraint	product_evaluation
							  Foreign key (product_id)
							  References products (product_id);
							";
			$this->db->exec($evalToProduct);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //tạo quan hệ giữa wishlish và user
      	  try {
			$userToWish = "Alter table wishlist
						   Add constraint	user_wishlist
						   Foreign key (user_id)
						   References users (user_id);
							";
			$this->db->exec($userToWish);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //tạo quan hệ giữa wishlist và product
      	  try {
			$wishToProducts = "Alter table wishlist
							   Add constraint	product_wishlist
							   Foreign key (product_id)
							   References products (product_id);
							";
			$this->db->exec($wishToProducts);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //stock với user 
      	  try {
			$stockToUser = "Alter table stock
							Add constraint	user_stock
							Foreign key (user_id)
							References users (user_id);
							";
			$this->db->exec($stockToUser);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //stock vs products
      	  try {
			$stockToProduct = "Alter table stock
							   Add constraint	product_stock
							   Foreign key (product_id)
							   References products (product_id);
							";
			$this->db->exec($stockToProduct);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }

      	  //news với user
      	  try {
			$userToNews = "Alter table news
						   Add constraint	user_news
						   Foreign key (user_id)
						   References users (user_id);
							";
			$this->db->exec($userToNews);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }
			
		}
	}
?>