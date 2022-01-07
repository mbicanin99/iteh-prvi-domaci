 <?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "laptopovi";
    $connection = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n" . $connection->error);

    $query1 = "delete from laptop where id=" . $_POST['id'];
    $connection->query($query1);

    $query2 = "select l.id, l.model, l.procesor, l.ram, l.hdd, l.cena, p.naziv from laptop l join proizvodjac p on l.proizvodjac_id=p.id";
    $rez = $connection->query($query2);

    while ($laptop = mysqli_fetch_array($rez)) :
    ?>
     <tr>
         <td><?php echo $laptop['id'] ?></td>
         <td><?php echo $laptop['naziv'] ?></td>
         <td><?php echo $laptop['model'] ?></td>
         <td><?php echo $laptop['procesor'] ?></td>
         <td><?php echo $laptop['ram'] ?></td>
         <td><?php echo $laptop['hdd'] ?></td>
         <td><?php echo $laptop['cena'] ?></td>
         <td><button type="button" class="btn btn-warning" value="<?php echo $laptop['id'] ?>" id="izmena_dugme">Izmena</button></td>
         <td><button type="button" class="btn btn-danger" value="<?php echo $laptop['id'] ?>" id="obrisi_dugme">Brisanje</button></td>
     </tr>

 <?php endwhile; ?>