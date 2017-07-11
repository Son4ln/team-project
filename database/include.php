<?php
	
  //khởi tạo table
  include 'migrations/Brands.php';
  include 'migrations/Categories.php';
  include 'migrations/ContactForm.php';
  include 'migrations/ContactInfo.php';
  include 'migrations/Evaluation.php';
  include 'migrations/Images.php';
  include 'migrations/ManageUsers.php';
  include 'migrations/News.php';
  include 'migrations/OrderDetail.php';
  include 'migrations/Orders.php';
  include 'migrations/Products.php';
  include 'migrations/SlideShow.php';
  include 'migrations/Stock.php';
  include 'migrations/Users.php';
  include 'migrations/WishList.php';

  //thêm dữ liệu mẫu
  include 'seeds/BrandsSeeder.php';


  // thêm quan hệ
  include 'relationship.php';
?>