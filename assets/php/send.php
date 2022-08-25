<?php
try {
    header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');
    $email =$_POST['email'];
$pass =$_POST['pass'];
$pass2 =$_POST['pass2'];

echo 'Вы зарегистрировались по данным:<br>';
echo $email;
echo '<br>';
echo $pass;
echo '<br>';
echo $pass2;

    $mypdo=new PDO("pgsql:host=localhost;dbname=test","postgres","root");
    $sql = "INSERT INTO commands(email,pass,pass2) VALUES ('$email','$pass','$pass2')";
    $query = $mypdo->prepare($sql);
    $mypdo->query($sql);
    
    /*or
$link = pg_connect("host=localhost port=5432 dbname=test user=postgres password=root");
  $sql = ("INSERT INTO commands (email,pass,pass2) VALUES ('$email','$pass','$pass2')");
    pg_query($sql); $link = null;
*/


    $mypdo = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
