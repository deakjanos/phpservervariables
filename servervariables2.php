<?

	session_start();

 print '<h1>A $_SERVER tartalma</h1>';
 foreach ($_SERVER as $kulcs => $ertek){
   print "$kulcs : $ertek <br>\n";
 }
 print '<h1>A $_COOKIE tartalma</h1>';
 foreach ($_COOKIE as $kulcs => $ertek){
   print "$kulcs : $ertek <br>\n";
 }
 print '<h1>A $_FILES tartalma</h1>';
 foreach ($_FILES as $kulcs => $ertek){
   print "$kulcs : $ertek <br>\n";
 }
 print '<h1>A $_REQUEST tartalma</h1>';
 foreach ($_REQUEST as $kulcs => $ertek){
   print "$kulcs : $ertek <br>\n";
   

 }
 print '<h1>A $_SESSION tartalma</h1>';
 foreach ($_SESSION as $kulcs => $ertek){
   print "$kulcs : $ertek <br>\n";
 }
 print '<h1>A $_GET tartalma</h1>';
 foreach ($_GET as $kulcs => $ertek){
   print "$kulcs : $ertek <br>\n";
 }
 print '<h1>A $_POST tartalma</h1>';
 foreach ($_POST as $kulcs => $ertek){
   print "$kulcs : $ertek <br>\n";
 }

?>