<?php
	class ManageUsers extends DataBase{
		function createManageUsers (){
		  parent::setConnect();	
		  try {
			$createManageUsers = "Create table manage_user (
								  notify_id		int(11)		Auto_increment	Not null,
								  content		text					Not null,
								  user_id		int(11)					Not null,
								  Primary key (notify_id)
								  );"
								;
			$this->db->exec($createManageUsers);
		  }
		  catch(PDOException $e) {
        	echo $e->getMessage();
      	  }
			
		}
	}
?>