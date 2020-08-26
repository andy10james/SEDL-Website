 <?php
//*******************************************************************************************
//
// Filename    : vars.php
// description : DataBase Connection Information 
//             : Could also include other common vars
//             :
//*******************************************************************************************



$host     = "db3050.oneandone.co.uk";
$user     = "dbo356519989";
$pass     = "SR1709UK";
$port     = "3306";
$database = "db356519989";




$link = mysql_connect( "$host:$port", $user, $pass );
if ( ! $link ) die( "Couldn't connect to MySQL" );
mysql_select_db( $database, $link ) or die ( "Couldn't open $db: ".mysql_error() );




?>
