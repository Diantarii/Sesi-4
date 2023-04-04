<?php
    $usr="";
    $pwd="";
    $salah=0;
    
    if(isset($_GET["txUSER"])){
        $usr=$_GET["txUSER"];
        $pwd=$_GET["txPASS"];

        if($usr==""){
            $salah=1;
        }else{
            echo "Isi Dari Field User :  ".$usr;
        }
        if($pwd==""){
            $salah=1;
        }else{
            echo "Isi Dari Field Password :  ".$pwd;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dengan Metode GET</title>
</head>
<body>
    <?php
    if($salah==1){
        echo "<div style='color:red'>User Name/Password Masih Kosong</div>";
    }
    ?>

    <form method="GET" action="latihan01.php">
        <div>
            User name
            <input type="text" name="txUSER" required>
        </div>
        <div>
            Password
            <input type="password" name="txPASS" required>
        </div>
        <div>
            <button type="submit"> Login </button>
        </div>

    </form>

</body>
</html>