<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="margin:0">
     <div class="container">
        <div class="jumbotron">
            <h1 class="alert alert-primary text-center">afficher <a href="create.php" style="text-decoration:none"> les etudient</a></h1>
      
      <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
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
    </tr>
 <?php } ?>
  </tbody>
</table>


        </div>
    </div>
         
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>