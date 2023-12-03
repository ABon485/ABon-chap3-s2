<?php // HEADER 
require '../1. TEXT-EMAIL-NUMBER-PASSWORD/templates/header.php';

?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
    $name = $_POST['text'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = $_POST['message'];
?>
    <li class="list-group-item"><?php  if (isset($name)) { echo $name; }?></li>
    <li class="list-group-item"><?php if (isset($number)) { echo $number; }  ?></li>
    <li class="list-group-item"><?php if (isset($email)) { echo $email; }  ?></li>
    <li class="list-group-item"><?php  if (isset($password)) { echo $password; } ?></li>
    <li class="list-group-item"><?php  if (isset($message)) { echo $message; } ?></li>

</ul>
<?php // FOOTER
require '../1. TEXT-EMAIL-NUMBER-PASSWORD/templates/footer.php';

?>