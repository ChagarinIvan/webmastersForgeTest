<?php
$lang = $_SESSION['lang'];
$lang_array=$_SESSION['language'][$lang];
?>
<h1><?php echo $lang_array['error404'];?></h1>
<p><?php echo $lang_array['not-found'];?></p>