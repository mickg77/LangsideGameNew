<?php require('header.php'); ?>


  <form name="cookieForm" action="" method="POST">
    <input type="text" name="username" id="username">
    <button type="submit" class="btn btn-primary" 
            onclick="writeCookie('username',document.getElementById('username').value,24)">
      WriteCookie
    </button>
    
  </form>
  <img src="images/dog.jpg" alt="pic of dog" onmouseover="writeCookie('pets','user loves dogs',24)">
  <img src="images/car_dog.jpg" alt="pic of dog in car" onmouseover="writeCookie('pets','user loves dogs in cars',24)">
  <script>document.write(readCookie("username"));</script>





<?php require('footer.php'); ?>