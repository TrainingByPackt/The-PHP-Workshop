<?php

session_start();

$username = 'admin';
// for convenience, generate password hash with command line
// > php -r "echo password_hash('admin', PASSWORD_BCRYPT);"
$passwordHash = '$2y$10$Y09UvSz2tQCw/454Mcuzzuo8ARAjzAGGf8OPGeBloO7j47Fb2v.lu'; // admin

if (array_key_exists('do', $_GET) && $_GET['do'] === 'logout') {
    session_destroy();
    session_regenerate_id();
    header('Location: ./super-post-secured.php', true);
    return;
}

$formError = '';
if (count($_POST)) {
    $formUsername = $_POST['username'] ?? '';
    $formPassword = $_POST['password'] ?? '';
    if ($formUsername !== $username) {
        $formError = sprintf('The username [%s] was not found.', $formUsername);
    } elseif (!password_verify($formPassword, $passwordHash)) {
        $formError = 'The provided password is invalid.';
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['loginTime'] = date(\DATE_COOKIE);
        header('Location: ./super-post-secured.php', true);
        return;
    }
}

if (array_key_exists('username', $_SESSION)) {
    include 'super-post-secured-page.php';
} else {
    include 'super-post-secured-form.php';
}
