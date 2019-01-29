<?php
require "classes.php";
require "DB.php";



$host = '127.0.0.1';
$db   = 'cg_16_reviews';
$user = 'Admin';
$pass = 'aselasel';
$charset = 'utf8';

#$dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $charset;
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];

# - Этап 1й (Подключение)
$pdo = new \PDO($dsn, $user, $pass, $opt);


print_r($_POST);

$stmt = $pdo->prepare("
    SELECT
        *
    FROM
        `reviews`
");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$start = new Main;
$start->render();


if(($_POST) == false){

    die;
}



if($_POST['register-password'] !== $_POST['register-password2']){
    $_POST[] = null; 
    header('Location: /login.php');
}


if($_POST['homepage']){
}else{
    $_POST['homepage'] = '0';
}

 
$_POST['IP'] = $_SERVER["REMOTE_ADDR"];;
 
$user_agent = $_SERVER["HTTP_USER_AGENT"];
if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
else $browser = "Неизвестный";
$_POST['browser'] = $browser;




foreach($result as $value){
    if($value['text'] == $_POST['text']){
        die;
    }
}



$stmt = $pdo->prepare("
        INSERT INTO
            `reviews` (
                `username`,
                `email`,
                `password`,
                `browser`,
                `IP`,
                `homepage`,
                `text`,
                `time`
            ) VAlUES (
                :username,
                :email,
                :password,
                :browser,
                :IP,
                :homepage,
                :text,
                :time
            )
");

$stmt->execute([
    ':username' => $_POST['register-username'],
    ':email' => $_POST['register-email'],
    ':password' => sha1($_POST['register-password']),
    ':browser' => $_POST['browser'],
    ':IP' => $_POST['IP'],
    ':homepage' => $_POST['homepage'],
    ':text' => $_POST['text'],
    ':time' => time()
]);

$restID = $pdo->LastInsertId();





