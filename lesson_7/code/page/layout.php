<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

  <div class="container">
<!--
  <nav class="nav">
  <a class="nav-link active" href="about.php">Active</a>
  <a class="nav-link" href="contact.php">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav> -->


<div>ddd  <?php   $str = "	d&#34&#34  nav-link active&#34;"; echo $str;  ?></div>
    
  <form  method="POST" action="index.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Имя</label>
    <input type="text" name="login"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="имя">

  </div>
  <div class="form-group">
   <label for="exampleFormControlTextarea1" class="form-label">Сообщение</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href=http://localhost:8000/?action=dark > Dark</a>
<a href=http://localhost:8000/?action=blue > Blue</a>


  <div class="row">
    <div class="col">
       <?php echo $str ?>
    </div>
   
  </div>




</div>

</body>
</html>