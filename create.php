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
    <br>
    <br>
    <br>
    <div class="container jumbotron">
       
    <form action="store.php" method="POST">
         <div class="row">
        <div class="col">
        <div class="form-group">
            <label for="nom">nom: </label>
            <input type="text" class="form-control" name="nom">
        </div></div>
        <div class="col">
        <div class="form-group">
            <label for="prenom">prenom: </label>
            <input type="text" class="form-control" name="prenom">
        </div></div></div>
        <div class="row">
            <div class="col">
        <div class="form-group">
            <label for="email">email: </label>
            <input type="text" class="form-control" name="email">
        </div></div>
        <div class="col">
        <div class="form-group">
            <label for="phone">phone: </label>
            <input type="text" class="form-control" name="phone">
        </div></div> </div>
        <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-danger">AJOUT</button></div></div>
   
   </form>
   </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</html>