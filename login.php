<?php
ini_set('session.use_strict_mode', 1);
require_once './admin/start.php';
my_session_start();

$gitHubUser = $_POST['gitHubUser'];
$password = $_POST['password'];

$get = file_get_contents("http://api-github-tagger.herokuapp.com/users/$gitHubUser");

$response = json_decode($get, true);

if ($gitHubUser != null && $password == $response['password']) {
    $_SESSION['gitHubUser'] = $gitHubUser;
    $_SESSION['password'] = $password;
    echo "Login realizado com sucesso";
    header("Location: ./repositories/list-repositories.php");
}
else {
    unset($_SESSION['gitHubUser']);
    unset($_SESSION['senha']);
    echo '<script type="text/javascript">';
    echo 'alert("Os dados de usuário não são válidos!Tente novamente.")';
    echo '</script>';
    header("refresh:1, url=index.php");
}
?>