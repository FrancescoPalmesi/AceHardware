
<?php
if (isset($_POST['login']) && ($_POST['senha']) ) {
$login = $_POST['login'];
$senha = $_POST['senha'];
if ($login=="admin@gmail.com" && $senha=="123") {
session_start();
$_SESSION['login_session'] = $login;
session_id();
header("Location:../view/Principal.php");
} else {
header("Location:../view/login.php");
}
}else{
echo "Valores nulos";
} ?>