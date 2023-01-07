<?php


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