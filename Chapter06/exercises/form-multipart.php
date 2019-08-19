<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    print_r($_FILES);
    print_r($_POST);
}
if ($e = error_get_last()) {
    print_r($e);
}
?>
<html>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Upload">
</form>
</body>
</html>
