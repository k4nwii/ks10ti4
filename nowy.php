<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form method="POST">
        <input type="text" name="liczba">
        <input type="submit" name="klik" value="REZERWUJ">
    </form>

    <?php
        if(isset($_POST["klik"]))
        {
            echo "Dodano rezerwację do bazy";
            $polonczenie = new MySqli('localhost', 'root', '', 'kacper1');
            
            $liczba = $_POST['liczba'];
            $sql = "INSERT INTO tabela(id, cos) VALUES (NULL, '$liczba')";
            $polonczenie->query($sql);
            mysqli_close($polonczenie);
        }
    ?>
    </body>
</html>