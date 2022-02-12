<?php
if(isset($_GET['url']) && isset($_GET['nazwa']))
{
		
$url= $_GET['url'];
$nazwa = $_GET['nazwa'];

echo "gotowe, twoj link zostal stworzony link: <a href='https://lx4.pl/$nazwa'>lx4.pl/$nazwa</a>";
}
?>
