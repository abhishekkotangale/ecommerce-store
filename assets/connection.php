<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "store";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con){
        ?>

        <script>
            alert("connection successful")
        </script>
    <?php
    }else{
        ?>
        <script>
            alert("connection not successful")
        </script>
    <?php
    }
?>
