<?php
session_start();
$_SESSION['score'] = 0;
$_SESSION['hp'] = 5;
$_SESSION['count'] = 1;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>This or That</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
        h1 {
            text-align: center;
        }

        .button {
            width: 50px;
            height: auto;
            margin: auto auto;
            text-align: center;
        }

        p {
            text-align: center;
        }

        .ptengah {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>
        This or That : Math Edition
    </h1>
    <?php
    if (!isset($_COOKIE["user"])) { ?>
        <p class="ptengah">Halo Master !, Nampaknya ini Permainan pertama anda, silahkan isi username anda !</p>
        <form action="init.php" method="POST" class="ptengah" enctype="multipart/form-data" >
            <input type="text" name="nama" style="text-align:center;" /><br>
            <!-- <input type="file" name="photo" id="photo"><br> -->
            <input type="submit" name="submit" style="margin-top: 10px; margin-bottom: 10px;" />
        </form>
    <?php
} else {
    echo '<p>Halo ' . $_COOKIE["user"] . '!</p>'; // Tombol untuk bermain
    if (isset($_COOKIE['lasttime']) and isset($_COOKIE['score'])) {
        echo "<p>Sebelumnya, terakhir kali Anda main game ini tanggal " . $_COOKIE['lasttime'] . " dengan score " . $_COOKIE['score'] . "</p>";
    }
    ?>
        <!-- Tombol untuk bermain-->
        <form method="post" class="ptengah" action="game.php">
            <input type="submit" name="maju" value="start">
        </form>
        <!-- Tombol untuk cara bermain-->
        <form method="post" class="ptengah" action="bermain.html">
            <input type="submit" name="go" value="About">
        </form>
         <form method="post" class="ptengah" action="petunjuk.html">
            <input type="submit" name="go" value="Petunjuk permainan">
        </form>
        <?php
        echo '<p>Bukan ' . $_COOKIE["user"] . '? <br/>Klik <a href="hapus.php">disini</a></p>';
    }
    ?>
</body>

</html>
