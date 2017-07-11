<?php
  class DataBase {

    public $database = "royalwines";
    var $db = null;
    function createDataBase(){
      try {

        $this->db = new PDO("mysql:dbname=;host=localhost", "root", "" );
        $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling

        $deldb = "drop database IF EXISTS $this->database";
        $this->db->exec($deldb);

        $createdb = "CREATE DATABASE $this->database CHARACTER SET utf8 COLLATE utf8_general_ci";
        $this->db->exec($createdb);
     
      } catch(PDOException $e) {
        echo $e->getMessage();
      }
    }

    function setConnect () {
      $this->db = new PDO("mysql:dbname=$this->database;host=localhost", "root", "" );
      $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      //Error Handling
    }
  }

  $dataBase = new DataBase();
  $dataBase -> createDataBase();

  //include lớp con kế thừa lớp database
  include "database/include.php";

  //khai báo object
  //khai báo migrate
  $contactInfo = new ContactInfo();
  $manageUsers = new ManageUsers();
  $brands = new Brands();
  $cate = new Categories();
  $contactForm = new ContactForm();
  $eval = new Evaluation();
  $img = new Images();
  $news = new News();
  $orderDetail = new OrderDetail();
  $orders = new Orders();
  $products = new Products();
  $slideShow = new SlideShow();
  $stock = new Stock();
  $users = new Users();
  $wishList = new WishList();
  $rela = new Relationship();

  //khai báo seeder
  $brandsSeeder = new BrandsSeeder();

  //sử dụng phương thức của lớp con
  //sử dụng migrate
  $contactInfo -> createContactInfo();
  $manageUsers -> createManageUsers();
  $brands -> createBrands();
  $cate -> createCategories();
  $contactForm -> createContactForm();
  $eval -> createEvaluation();
  $img -> createImages();
  $news -> createNews();
  $orderDetail -> createOrderDetail();
  $orders -> createOrders();
  $products -> createProducts();
  $slideShow -> createSlideShow();
  $stock -> createStock();
  $users -> createUsers();
  $wishList -> createWishList();
  $rela -> createRelationship();

  //sử dụng seeder
  $brandsSeeder -> createBrandsSeeder();
?>