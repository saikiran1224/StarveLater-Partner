<?php
     
    $dbname = "starvelater";
    $con = mysqli_connect("localhost","saikirankkd1","Gmrit@224",$dbname);

    if(!$con){
        die("Connection Failed :" + mysqli_connect_error());
    }

    $query = "DELETE FROM items WHERE item_id='".$_POST['id']."'";
    $result = mysqli_query($con,$query);

    if($result) {
    	echo "Data Updated";
    }
    
?>