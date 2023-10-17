<form action="" method="post">
       <input type="hidden" value="t">
       <input type="submit" value="change header" name="submit">
    </form>

<?php

$var= "hello world";
$new= "i hate world";

if (isset($_POST['submit']) ) {
    $var= $new;
    echo $var;
} else {
    echo $var;
}
?>