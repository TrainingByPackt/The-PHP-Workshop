<?php if ($formError) {
    echo sprintf('<p style="color: red">%s</p>', $formError);
} ?>
<form method="post">
    <label for="user">Username:</label><br>
    <input type="text" name="username" id="user"><br>
    <label for="pass">Username:</label><br>
    <input type="password" name="password" id="pass"><br>
    <input type="submit" value="Login">
</form>
