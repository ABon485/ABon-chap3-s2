<?php
$password = $_POST['password'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($password == "1234") {
        $hiddenData = 'This is sensitive data visible only if the user knows the correct password';
    } else {
        $errorMessage = 'Incorrect password';
    }
}

?>
<?php if (isset($hiddenData)) { ?>
        <div id="hidden"><?php echo $hiddenData; ?></div>
<?php } ?>

<?php if (isset($errorMessage)) { ?>
        <div><?php echo $errorMessage; ?></div>
<?php } ?>