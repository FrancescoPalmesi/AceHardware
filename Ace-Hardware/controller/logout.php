
<?PHP
session_start();
unset($_SESSION['login_session']);
session_destroy();
header("Location: ../view/login.php");
?>
