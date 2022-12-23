<?php

$action = isset($_GET['action'])? $_GET['action']: 'blue' ;


$messages = [
  ["name"=>'Alex', 'msg' => 'bla-bla'],
  ["name"=>'Lilu', 'msg' => 'bla-bla'],
  ["name"=>'Seva', 'msg' => 'bla-bla-ass'],
  ["name"=>'Polina', 'msg' => 'bla-bla-ddd'],
  ["name"=>'Federico', 'msg' => 'bla-bla--- '],
];


function blue($messages){
    $str = "";
    foreach( $messages as   $key => $value   ) {
      $name = $value['name'];
      $msg = $value['msg'];

      $str .=  '<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">'.
      '<div class="card-header">'.  $name  . '</div>' .
      '<div class="card-body">'.
      '<h5 class="card-title"></h5>'.
        '<p class="card-text">' . $msg . '</p>'.
      '</div></div>'  ;
    }
    return $str;
}


function dark($messages){
  $str = "";
    foreach( $messages as   $key => $value   ) {
      $name = $value['name'];
      $msg = $value['msg'];

      $str .=  '<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">'.
      '<div class="card-header">'.  $name  . '</div>' .
      '<div class="card-body">'.
      '<h5 class="card-title"></h5>'.
        '<p class="card-text">' . $msg . '</p>'.
      '</div></div>'  ;
    }
    return $str;


}

$str = $action($messages);



?>

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