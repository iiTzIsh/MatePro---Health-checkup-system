<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- header -->

    <!-- body part -->
    <table>
        <?php
            include '../config.php';

            $sql = "SELECT * FROM plan";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['height'].'</td>';
                    echo '<td><button onclick="location.href=\'planUpdate.php?id='.$row["id"].'\'">Update</button></td>';
                    echo '<td><button onclick="location.href=\'planDelete.php?id='.$row["id"].'\'">Delete</button></td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>

    <br><br>
    <a href="index.php">
    <button>Back</button></a>
    
</body>
</html>