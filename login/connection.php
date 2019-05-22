<?php
$db_host = 'local';
$db_user = 'root';
$db_pwd = 'bcl';
$database = 'olxsanjib';
 
$connectionInfo = array("UID" => $db_user, "PWD" => $db_pwd, "Database"=>$database); 
$conn = sqlsrv_connect( $db_host, $connectionInfo);
if( !$conn )
{
     echo "Connection could not be established.\n";
     die( print_r( sqlsrv_get_last_message(), true));
}
?>