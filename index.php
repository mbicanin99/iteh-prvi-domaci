<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ITEH Laptopovi</title>
</head>

<body>

    <h2 class="text-center" id="naslov">Dobro došli na Laptop World!</h2>
    <a href="dodaj.php"><button class="btn btn-primary" id="button_dodaj">Dodaj novi</button></a>
    <div class="container">
        <table id="tbl-laptop" class="display" style="width:1350px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Proizvođač</th>
                    <th>Model</th>
                    <th>Procesor</th>
                    <th>RAM</th>
                    <th>HDD</th>
                    <th>Cena RSD</th>
                    <th>Izmena</th>
                    <th>Brisanje</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</body>

</html>