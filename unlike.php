<?php
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "db_penjualan";

        $con = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        $active_ID=$_GET['active_ID'];
        $item_ID=$_GET['item_ID'];

        $sql = "DELETE FROM likes WHERE (active_ID = '$active_ID' AND item_ID = '$item_ID')";
        $result = mysqli_query($con, $sql); 

?>