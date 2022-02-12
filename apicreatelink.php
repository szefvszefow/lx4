<?php
if(isset($_GET['url']) && isset($_GET['nazwa']))
{

$url = $_GET['url'];
$nazwa = $_GET['nazwa'];

$filename = "$nazwa.php";

$kod = '<?php error_reporting(0); function IP() { if ($_SERVER["HTTP_X_FORWARDED_FOR"]) $pobierz = $_SERVER["HTTP_X_FORWARDED_FOR"]; else $pobierz = $_SERVER["REMOTE_ADDR"]; return $pobierz; } $ip = IP();  $data = date("Y-m-d H:i:s"); $plik=fopen("ip.txt","a"); $zawartosc="IP: $ip\nData: $data\n\n"; fwrite($plik, $zawartosc); fclose($plik); ?> <!DOCTYPE html> <html> <head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width"> <title>lx4.pl - twoj krotszy link</title> <link href="style.css" rel="stylesheet" type="text/css" /> </head> <body><script>setTimeout(function(){window.location.href = "'. $url .'";}, 5000);</script><h1>po 5 sekundach zostaniesz przekierowany na odpowiedni link</h1></body></html>';

if (file_exists($filename)) {
    echo "The file $filename exists";
    header('Location: https://lx4.pl/apicreatelink.php');
} else {  
$file = fopen("$nazwa.php","a");
echo fwrite($file, $kod);

header("Location: https://lx4.pl/done.php?url=$url&nazwa=$nazwa");

}
}
?>	
