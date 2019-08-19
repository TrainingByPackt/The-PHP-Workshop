<html lang="en">
<body>
<pre>
<?php if($_SERVER['REQUEST_METHOD'] === 'POST'){
    print_r($_FILES);
    print_r($_POST);
}
if ($e = error_get_last()) {
    print_r($e);
}
?>
</pre>
<form method="post" enctype="application/x-www-form-urlencoded">
    <input type="text" name="nickname">
    <input type="submit" value="Save">
</form>
</body>
</html>
