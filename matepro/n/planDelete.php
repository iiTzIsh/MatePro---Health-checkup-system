<?php
    include '../config.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM plan WHERE id = $id";

        $result = mysqli_query($conn, $sql);
        if($result) {
            header('location: planView.php');
        }
    }
?>