<?php require 'common/header.php' ?>

<h1><?php echo $title ?></h1>

<p><?php echo $content ?></p>

<?php if (isset($arr)): ?>
<pre>
ARGS (ROT13):
<?php print_r($arr); ?>
</pre>
<?php endif ?>

<?php require 'common/footer.php' ?>

