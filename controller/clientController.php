<?php
  $clientPath = "../";

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
      include $clientPath."view/home.php";
      break;

    default:
      //include giao diện lỗi 404 không tìm thấy link website vào đây
      break;
  }
?>
