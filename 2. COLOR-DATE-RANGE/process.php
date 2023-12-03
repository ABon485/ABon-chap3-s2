<?php // HEADER 
require_once './templates/header.php';

?>
<?php
    // YOUR CODE HERE 
    $color = $_POST['color'];
    $Range = $_POST['range'];
    $Date = $_POST['date'];

?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php if (isset($color)) { echo $color; } ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php if (isset($Range)) { echo $Range; } ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php if (isset($Date)) { echo $Date; } ?></span>
    </div>

<?php //FOOTER 
require_once './templates/footer.php';

?>