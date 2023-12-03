<?php // HEADER 
require './templates/header.php';
?>

<?php
// YOUR CODE HERE
$province = $_POST['Province'];
$gender = $_POST['Gender'];
$selectedSubjects = $_POST['Subject'];

?>

<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3">
            <?php // province 
            if (isset($province)) {
                echo $province;
            }
            ?>
        </h2>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php
        if (isset($gender)) {
            echo $gender;
            if ($gender == 'male') {
                echo "<img src='images/male.png' width='150' height='150'>";
            } else {
                echo "<img src='images/female.png' width='150' height='150'>";
            }
        }
        ?>
    </div>
</div>

<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body" style="display: flex;">
        <?php
        // YOUR CODE HERE [subject]
        if (isset($selectedSubjects)) {
            foreach ($selectedSubjects as $subject) {
                echo '<div class="alert bg-primary me-2">' . $subject . '</div>';
            }
        }
        ?>
    </div>
</div>

<?php // FOOTER 
require './templates/footer.php';
?>