
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------
  | DATABASE CONNECTIVITY SETTINGS
  | -------------------------------------------------------------------
  | This file will contain the settings needed to access your database.
  |
  | For complete instructions please consult the 'Database Connection'
  | page of the User Guide.
  |
  | -------------------------------------------------------------------
  | EXPLANATION OF VARIABLES
  | -------------------------------------------------------------------
  |
  |	['hostname'] The hostname of your database server.
  |	['username'] The username used to connect to the database
  |	['password'] The password used to connect to the database
  |	['database'] The name of the database you want to connect to
  |	['dbdriver'] The database type. ie: mysql.  Currently supported:
  mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
  |	['dbprefix'] You can add an optional prefix, which will be added
  |				 to the table name when using the  Active Record class
  |	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
  |	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
  |	['cache_on'] TRUE/FALSE - Enables/disables query caching
  |	['cachedir'] The path to the folder where cache files should be stored
  |	['char_set'] The character set used in communicating with the database
  |	['dbcollat'] The character collation used in communicating with the database
  |	['swap_pre'] A default table prefix that should be swapped with the dbprefix
  |	['autoinit'] Whether or not to automatically initialize the database.
  |	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
  |							- good for ensuring strict SQL while developing
  |
  | The $active_group variable lets you choose which connection group to
  | make active.  By default there is only one group (the 'default' group).
  |
  | The $active_record variables lets you determine whether or not to load
  | the active record class
 */

if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== FALSE) {
    $active_group = "developer";
} else {
    $active_group = "developer_prod";
}
$active_record = TRUE;


$db['developer']['hostname'] = "localhost";
$db['developer']['username'] = "root";
$db['developer']['password'] = "";
$db['developer']['database'] = "aivo";
$db['developer']['dbdriver'] = "mysqli";
$db['developer']['dbprefix'] = "";
$db['developer']['pconnect'] = TRUE;
$db['developer']['db_debug'] = TRUE;
$db['developer']['cache_on'] = FALSE;
$db['developer']['cachedir'] = "";
$db['developer']['char_set'] = "utf8";
$db['developer']['dbcollat'] = "utf8_general_ci";

$db['developer_prod']['hostname'] = "localhost";
$db['developer_prod']['username'] = "root";
$db['developer_prod']['password'] = "mysql";
$db['developer_prod']['database'] = "aivo";
$db['developer_prod']['dbdriver'] = "mysql";
$db['developer_prod']['dbprefix'] = "";
$db['developer_prod']['pconnect'] = TRUE;
$db['developer_prod']['db_debug'] = TRUE;
$db['developer_prod']['cache_on'] = FALSE;
$db['developer_prod']['cachedir'] = "";
$db['developer_prod']['char_set'] = "utf8";
$db['developer_prod']['dbcollat'] = "utf8_general_ci";



/* End of file database.php */
/* Location: ./application/config/database.php */
//=======
?>
