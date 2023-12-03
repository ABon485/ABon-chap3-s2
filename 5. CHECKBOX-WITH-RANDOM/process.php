<?php require_once './templates/header.php'; ?>

<?php
    $colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
    // CODE HERE 
    $selectedSubjects = $_POST['Subject'];
?>

<div class="card">
    <div class="card-body">
        <?php
            // CODE HERE
            if (isset($selectedSubjects)) {
                echo '<div class="d-flex">';
                foreach ($selectedSubjects as $subject) {
                    echo '<div class="alert bg-' . $colors[array_rand($colors)] . ' me-2">' . $subject . '</div>';
                }
                echo '</div>';
            }
            ?>
    </div>
</div>

<?php require_once './templates/footer.php'; ?>