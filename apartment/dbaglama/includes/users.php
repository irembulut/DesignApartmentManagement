<!DOCTYPE html>
<html>
<head>
<title>title</title>
</head>

<body>
    <table>
        <tr>
            <th>username</th>
            <th>email</th>
            
        </tr>
        <?php 
        include ("config.inc.php");

        $sql="SELECT * FROM users ";
        $result= $link -> query($sql);

        if($result -> num_rows >0){ 
            while($row = $result -> fetch_assoc()){

                echo "<tr><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td></tr>" ;

            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }

        ?>
    </table>

</body>

</html>


