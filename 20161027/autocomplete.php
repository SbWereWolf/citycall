<?
error_reporting(E_ALL);


$C_SHOW = 'show';
$C_NUMBER = 'number';
$C_REGION = 'region';
$C_CITY = 'city';
$C_STREET = 'street';
$C_azs_number = 'azs_number';
$C_azs_region = 'azs_region';
$C_azs_city = 'azs_city';
$C_azs_street = 'azs_street';
$C_max_rows = 'maxRows';

if (isset($_GET[$C_SHOW])) {
    $c_show = true;
} else {
    $c_show = false;
}
if (isset($_GET[$C_NUMBER])) {
    $c_get_number = true;
} else {
    $c_get_number = false;
}
if (isset($_GET[$C_REGION])) {
    $c_get_region = true;
} else {
    $c_get_region = false;
}
if (isset($_GET[$C_CITY])) {
    $c_get_city = true;
} else {
    $c_get_city = false;
}
if (isset($_GET[$C_STREET])) {
    $c_get_street = true;
} else {
    $c_get_street = false;
}
if (isset($_GET[$C_azs_number])) {
    $c_number = $_GET[$C_azs_number];
} else {
    $c_number = '';
}
if (isset($_GET[$C_azs_region])) {
    $c_region = $_GET[$C_azs_region];
} else {
    $c_region = '';
}
if (isset($_GET[$C_azs_city])) {
    $c_city = $_GET[$C_azs_city];
} else {
    $c_city = '';
}
if (isset($_GET[$C_azs_street])) {
    $c_street = $_GET[$C_azs_street];
} else {
    $c_street = '';
}
if (isset($_GET[$C_max_rows])) {
    $c_limit = " LIMIT $_GET[$C_max_rows]";
} else {
    $c_limit = '';
}

$c_select_number = "A.number_azs AS number_azs";
$c_select_region = "A.region_azs AS region_azs";
$c_select_city = "A.city_azs  AS city_azs";
$c_select_street = "A.street_azs AS street_azs";

$c_select_field = 'null';

if($c_get_number){
    $c_select_field = $c_select_number;
}elseif($c_get_region){
    $c_select_field = $c_select_region;
}elseif($c_get_city){
$c_select_field = $c_select_city;
}
elseif($c_get_street){
$c_select_field = $c_select_street;
}

if($c_show){
    echo "<pre>select_field = $c_select_field</pre>";
}

$server_name = 'localhost';
$username = 'root';
$password = 'dkIDxm2rxzIC9aI';

$db_connection = mysqli_connect(
    $server_name,
    $username,
    $password
);
if ($c_show) {
    echo '<pre> $db_connection = mysqli_connect($servername, $username, $password); : ';
    print_r($db_connection);
    echo '</pre>';
}

$c_db_encoding = 'utf8';

mysqli_set_charset(
    $db_connection,
    $c_db_encoding
);

if (!$db_connection) {
    $Connection_failed_message = mysqli_connect_error();
    if( $c_show){
        echo ' Connection failed: '
            . $Connection_failed_message;
    }
}

$mysqli_select_db_result = mysqli_select_db(
    $db_connection,
    'testing'
);

if ($c_show) {
    echo '<pre>'
        . ' $mysqli_select_db_result = mysqli_select_db($db_connection,\'testing\'); : ';
    print_r($mysqli_select_db_result);
    echo '</pre>';
}

$get_azs_sql
    = "
SELECT 
      $c_select_field    
FROM 
  address A
WHERE 
        A.number_azs LIKE '%$c_number%'
    AND A.city_azs LIKE '%$c_city%'
    AND A.street_azs LIKE '%$c_street%'
    AND A.region_azs LIKE '%$c_region%'
$c_limit";

if ($c_show) {
    echo '<pre> $get_azs_sql : ';
    print_r($get_azs_sql);
    echo '</pre>';
}

$get_azs_sql_result = $db_connection->query($get_azs_sql);
if ($c_show) {
    echo '<pre> $get_azs_sql_result = $db_connection->query($get_azs_sql); : ';
    print_r($get_azs_sql_result);
    echo '</pre>';
}

$azs_array = array();
if ($get_azs_sql_result->num_rows > 0) {
    while (
    $row = $get_azs_sql_result->fetch_assoc()) {
        $azs_array [] = $row;
    }
}

if ($c_show) {
    echo '<pre>';
    foreach ($azs_array as $azs) {
        print_r($azs);
        echo '<br />';
    }
    echo '</pre>';
}

$mysqli_close_result = mysqli_close($db_connection);
if ($c_show) {
    echo '<pre>'
        . ' $mysqli_close_result = mysqli_close($db_connection) : ';
    print_r($mysqli_close_result);
    echo '</pre>';
}

$result =json_encode ($azs_array);

echo $result;
?>