<?php 
setcookie('user', $user['name'], time() - 10, "/");
header('location: /')
 ?>