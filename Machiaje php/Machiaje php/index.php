
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Machiaje</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs3 mb-5" style="background-color: #00ff7572">Machiaje</nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        
        
        ?>
        <a href="add.php" class="btn btn-dark mb-3">Add</a>
    </div>
    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nume</th>
      <th scope="col">Tip de ten</th>
      <th scope="col">Brand</th>
      <th scope="col">Produs de zi sau de seara</th>
      <th scope="col">Price</th>
      <th scope="col">Actiuni</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include "connectare.php";
    $sql="SELECT name.id,name.name,tipten.tipten,brand.brand,ziseara.ziseara,pret.pret FROM name,tipten,brand,ziseara,pret WHERE name.id=tipten.id && tipten.id=brand.id && brand.id=ziseara.id && ziseara.id=pret.id ORDER BY name.id";
    $query=mysqli_query($con,$sql);
  

    while($row=mysqli_fetch_assoc($query)){
    ?>


<tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['tipten']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['ziseara']?></td>
      <td><?php echo $row['pret']?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
      </td>
    </tr>
   
<?php
    }
?>

  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>