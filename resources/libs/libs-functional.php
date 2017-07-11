<?php
  trait Libs {

    // upload file
    function uploadFile($file,$path){
      $fileName = time().'-'.$file['name'];
      $source = $file['tmp_name'];
      $target = $path.DIRECTORY_SEPARATOR.$fileName;
      move_uploaded_file($source, $target);
    }

    //delete file
    function deleteFile ($file,$path){
      if(file_exists($path.DIRECTORY_SEPARATOR.$file)){
        unlink($path.DIRECTORY_SEPARATOR.$file);
      }
    }

    // redirect by action
    function redirect ($action){
      header("location:?action=$action");
    }

    // set alert message
    function setAlert ($mes) {
      $_SESSION['rwMessage'] = $mes;
    }

    //get alert message with class boostrap
    function getAlert ($alertLv){
      if(isset($_SESSION['rwMessage'])){
          echo '<div class="alert alert-'.$alertLv.'">'.$_SESSION['rwMessage'].'</div>';
          unset($_SESSION['rwMessage']);
        }
    }

  }
?>