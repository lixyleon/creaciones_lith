<?php
include("admin/bd.php");





    
    for($i = 1; $i<4; $i++){
        echo "    <div class='card mb-3' style='width: 18rem;'>
            <img src='images/$i.png' class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>Card $i</h5>
            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the  content.</p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
        </div>";
       
      
}



?>