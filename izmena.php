<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Izmena Laptopa</title>
</head>

<body>

    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "laptopovi";
    $connection = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n" . $connection->error);
    $query = "select * from laptop where id=" . $_GET['id'];

    $rez = $connection->query($query);
    $laptop = mysqli_fetch_array($rez);
    ?>


    <form method="post" id="forma-dodaj">
        <div class="mb-2">
            <label class="form-label">Proizvođač</label>
            <select class="form-select" name="select-dodaj">
                <?php
                $query2 = "select * from proizvodjac";
                $rez = $connection->query($query2);

                while ($proizvodjac = mysqli_fetch_array($rez)) {
                ?>
                    <option value="<?php echo $proizvodjac['id']; ?>"><?php echo $proizvodjac['naziv']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-2">
            <label class="form-label">Model</label>
            <input type="text" class="form-control" name="model" value="<?php echo $laptop['model'] ?>">
        </div>
        <div class="mb-2">
            <label class="form-label">Procesor</label>
            <input type="text" class="form-control" name="procesor" value="<?php echo $laptop['procesor'] ?>">
        </div>
        <div class="mb-2">
            <label class="form-label">RAM</label>
            <input type="text" class="form-control" name="ram" value="<?php echo $laptop['ram'] ?>">
        </div>
        <div class="mb-2">
            <label class="form-label">HDD</label>
            <input type="text" class="form-control" name="hdd" value="<?php echo $laptop['hdd'] ?>">
        </div>
        <div class="mb-2">
            <label class="form-label">Cena</label>
            <input type="number" class="form-control" name="cena" value="<?php echo $laptop['cena'] ?>">
        </div>

        <button type="submit" class="btn btn-primary mt-2" name="izmena_dugme" id="dugme">Izmeni</button>
    </form>

    <?php
    require 'Laptop.php';

    if (isset($_POST['izmena_dugme'])) {
        $laptop = new Laptop();
        if ($laptop->izmeni($_GET['id'], $_POST['model'], $_POST['procesor'], $_POST['ram'], $_POST['hdd'], $_POST['cena'], $_POST['select-dodaj'])) {
            header('Location: index.php');
        } else {
            echo 'Neuspešno izvršena izmena!';
        }
    }
    ?>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>