<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>
     <div class="container py-3">
        <div class="jumbotron">
            <h1 class="alert alert-primary text-center">AFFICHAGE DES ETUDIENTS</a></h1>
            </div>
            <a href="create.php"> <button class="btn btn-primary">AJOUT</button> </a>
            <br/> <br>
      <table class="table">
  <thead class="thead thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
       <th scope="col">OPTION</th>
    </tr>
  </thead>
 <tbody>
  
      <?php 
         include 'bdconnexion.php';
         $rep = $bdd->query('SELECT * FROM students');
         while($dn = $rep->fetch())
         {
             
      ?>

 
    <tr>
      <th scope="row"><?php echo $dn['id']; ?></th>
      <td><?php echo $dn['firstname'];?></td>
      <td><?php echo $dn['lastname'];?></td>
      <td><?php echo $dn['email'];?></td>
      <td><?php echo $dn['phone'];?></td>
      <td><a style="text-decoration:none" href="edit.php?id=<?=$dn['id'] ?>"> modifier</a>&nbsp; <a style="text-decoration:none" href="supprimer.php?id=<?=$dn['id']?>">supprimer</a> </td>
      
    </tr>
 <?php } ?>
  </tbody>
</table>


        
    </div>
         
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>