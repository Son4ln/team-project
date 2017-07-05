<?php include $clientPath.'view/header.php' ?>
<?php include $clientPath.'view/nav.php' ?>
    <h1>
      Đây là home
    </h1>
    <?php
      $alertLv ="danger";
      LibsFunc::showAlert($alertLv);
    ?>
    <form action="?action=homeAct" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" />
    	<button type="submit">Ok</button>	
    </form>
<?php include $clientPath.'view/footer.php' ?>    
 