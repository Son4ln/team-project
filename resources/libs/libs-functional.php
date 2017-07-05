<?php
  trait Libs {

    function uploadFile($file,$path){
      $fileName = time().'-'.$file['name'];
      $source = $file['tmp_name'];
      $target = $path.DIRECTORY_SEPARATOR.$fileName;
      move_uploaded_file($source, $target);
    }

    function redirect ($action,$mes){
      $_SESSION['rwMessage'] = $mes;
      header("location:?action=$action");
    }

    function showAlert ($alertLv){
      if(isset($_SESSION['rwMessage'])){
          echo '<div class="alert alert-'.$alertLv.'">'.$_SESSION['rwMessage'].'</div>';
          unset($_SESSION['rwMessage']);
        }
    }

  }
?>