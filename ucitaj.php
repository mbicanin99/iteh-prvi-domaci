   <?php

    $query = "select l.id, l.model, l.procesor, l.ram, l.hdd, l.cena, p.naziv from laptop l join proizvodjac p on l.proizvodjac_id=p.id";
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "laptopovi";
    $connection = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n" . $connection->error);
    $rez = $connection->query($query);

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
           <td>
               <a href="izmena.php?id=<?php echo $laptop['id'] ?>"><button type="button" class="btn btn-warning" id="izmena_dugme">Izmena</button></a>
           </td>
           <td><button type="button" class="btn btn-danger" value="<?php echo $laptop['id'] ?>" id="obrisi_dugme">Brisanje</button></td>
       </tr>

   <?php endwhile; ?>