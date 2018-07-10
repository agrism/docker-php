<pre><?php

echo "Hostname redis can be found ".gethostbyname('redis')."\n";

$hostname="mysql";
$username="app-user";
$password="app-pass";
$dbname="my-app";


try{
	
	$sonnectionString = "mysql:host=$hostname;dbname=$dbname,$username,$password";
	var_dump($sonnectionString);
	$dbh = new PDO($sonnectionString);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connection to the database at hostname 'mysql'". gethostbyname('mysql')."\n";
	
} catch(Exception $e){
	echo $e->getMessage();
}
?>
</pre>