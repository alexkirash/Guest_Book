<?php session_start();
// подключаемся к серверу, выбираем базу данных и устанавливаем кодировку

require_once "include/config.php";

//$admin = "olexandr.kirash@gmail.com";
//$site = "http://dkws.org.ua/";

@mysql_connect($dbhost, $dbuser, $dbpasswd) or
die("Не вдалося підключитися д бази даних!");

@mysql_select_db($dbname) or die("Не можу знайти базу даних з таким іменем!");

mysql_query('SET NAMES cp1251;');

$name = $_POST['name'];
$email = $_POST['email'];
$homepage = $_POST['homepage'];
$captcha= $_POSP['captcha'];
$message = $_POST['message'];

// избавляемся от вредоносного кода
$name = strip_tags($name);
$name = HtmlSpecialChars($name);
if(!preg_match('|^[a-zA-Z0-9]+$|i', $name))
{
    echo 'The entered data format is not valid!';
}

$email = strip_tags($email);
$email = HtmlSpecialChars($email);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail ($email) Indicated correctly.\n";
} else {
    echo "E-mail ($email) Invalid.\n";
}

$homepage = strip_tags($homepage);
$homepage = HtmlSpecialChars($homepage);
if (filter_var($homepage, FILTER_VALIDATE_URL)) {
    echo "URL ($homepage) Indicated correctly.\n";
} else {
    echo "URL ($homepage) Invalid.\n";
}

$captcha = strip_tags($captcha);
$captcha = HtmlSpecialChars($captcha);
if (md5($_POST['captcha']) == $_SESSION['randomnr2'])	{ 
			echo "Hey great , it appears you are not a robot";
	}	else {  
			echo "You're a very naughty robot!";
	}

$message = strip_tags($message);
$message = HtmlSpecialChars($message);

if (strlen($name)==1) $name = "Гость";
if (strlen($message)==1) die('You forgot to specify the message text!');

$q = "insert into guest_book values(\"$id\", \"$name\", \"$email\", \"$homepage\", \"$captcha\", \"$message\")";

mysql_query($q) or die('MySQL insert error');

$ID = mysql_insert_id();

echo "<p>Your message has been successfully added to the database. Return to the previous page and update it to display the information.";

?>