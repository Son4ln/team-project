<?php
  $clientPath = "../";

  //thêm các modul & controller
  include 'include.php';

  //sử dụng thư viện trait
  //gọi function bằng cú pháp <Tên Trait>::<Tên function> thay thế cho phương thức extends

  //upload path

  $uploadPath = $clientPath.'public/upload';

  //Session start
  session_start();

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
      $user = new UsersController();
      $user -> testUser();
      include $clientPath."view/home.php";
      break;

    case 'homeAct':
      $file = $_FILES['file'];
      $action = 'home';
      $mess = 'thành công';
      // LibsFunc::uploadFile($file,$uploadPath);
      Libs::redirect($action,$mess);
      break;

    default:
      //include giao diện lỗi 404 không tìm thấy link website vào đây
      break;
  }
?>
