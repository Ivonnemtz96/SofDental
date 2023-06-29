<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'current';
include('includes/head.php');
?>

<body>

    <div class="wrapper">
        <?php
            include('includes/header.php');
            include('modules/gallery.php');
            include('includes/redes.php');
            include('includes/footer.php');
        ?>
    </div>

    <?
     include('includes/scripts.php');   
     include('includes/redirect.php');   
    ?>

</body>

</html>