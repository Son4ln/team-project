<?php
  //tạo biến toàn cục
  //lấy thư mục gốc bắt đầu từ htdocs
  $root = getenv('DOCUMENT_ROOT');
  //lấy tên website

  $webPath = "/team-project/";
  $adminPath = "../";
  $backToPath = "../../";
  //sử dụng đường dẫn $root và $webPath để upload hình ảnh vào thư mục public

  //thêm các modul & controller
  include 'include.php';

  //sử dụng thư viện trait
  use LibsFunc;
  //gọi function bằng cú pháp <Tên Trait>::<Tên function> thay thế cho phương thức extends

  // lấy action
  if(isset($_GET["action"])){
    $action=$_GET["action"]; }
  elseif (isset($_POST['action']))
  {
    $action=$_POST["action"];
  }
  else{
    $action="home";
  }
  //khởi tạo action
  switch ($action) {
    case 'home':
      include $adminPath."view/home.php";
      break;

    default:
      //include lỗi 404 vào đây
      break;
  }
?>
