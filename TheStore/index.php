
<?php
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $totalCost = $_POST['totalCost'];
    $markets = $_POST['markets'];
	    $cardNum = $_POST['cardNum'];
}
$con = mysql_connect("localhost","root" ,"");
// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }
  mysql_select_db('my_db1');
 
 $query = "Insert into count (name,cardNum,price, markets) VALUES ('$name',$cardNum,$totalCost,'$markets' );";
mysql_query($query);

?>
    Thenk You <?php echo $name; ?>  Your order is accepted.
	<?php
  die();
?>