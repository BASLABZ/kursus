<?php
/*//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
//define database connection
define("DATABASE_HOST", "localhost"); //database host
define("DATABASE_NAME", "hijabjogjastore_v2"); //nama database
define("DATABASE_USER", "root"); //user database
define("DATABASE_PASSWORD", ""); // password 
//connect it!
mysql_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD) or die("<p>Koneksi Gagal! cek konfigurasi koneksi:<br />" .mysql_error(). "</p>");
//echo "<p>Koneksi server suskes!</p>";  // uncomment for displaying success connection test message.
mysql_select_db(DATABASE_NAME) or die ("Database <strong>".DATABASE_NAME."</strong> tidak bisa dibuka! pastikan database <big><strong>".DATABASE_NAME."</strong></big> ada dalam sistem.");
//echo "<p>Terhubung dengan MySQL, mengunakan database <b>".DATABASE_NAME."</b> </p>"; //uncomment for displaying success connection test message.
//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
*/
mysql_connect('localhost','root','');
mysql_select_db("siantro");
?>