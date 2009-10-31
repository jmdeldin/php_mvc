<?php
$title = $status;
require 'common/header.php';
?>

<h1>Error: <?php echo $status ?></h1>
<p>
    The requested resource, <code><?php echo $req ?></code>, was not found.
    <code><?php echo $msg ?></code>
</p>

<?php require 'common/footer.php' ?>

