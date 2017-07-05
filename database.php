<?php
     $table = "testTable";

try {
     
     $db = new PDO("mysql:dbname=testdb;host=localhost", "root", "" );
     $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling

     $deltable = "DROP TABLE IF EXISTS $table";
     $db->exec($deltable);
     
     $sql ="CREATE table $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     Prename VARCHAR( 50 ) NOT NULL, 
     Name VARCHAR( 250 ) NOT NULL,
     StreetA VARCHAR( 150 ) NOT NULL, 
     StreetB VARCHAR( 150 ) NOT NULL, 
     StreetC VARCHAR( 150 ) NOT NULL, 
     County VARCHAR( 100 ) NOT NULL,
     Postcode VARCHAR( 50 ) NOT NULL,
     Country VARCHAR( 50 ) NOT NULL);" ;
     $db->exec($sql);  
     

     

} catch(PDOException $e) {
    echo $e->getMessage();
}
?>