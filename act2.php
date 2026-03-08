<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'cap.php';
?>

<p>
    <?php echo "Fitxer actual: " . basename(__FILE__); ?>
</p>

<p>
    <?php echo "Avui és: " . date("d-m-Y"); ?>
</p>

<?php include 'peu.php'; ?>