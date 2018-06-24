<?php
error_reporting(E_ALL);

require_once('common.php');

$dbConnection = getDbConnection();

$isSuccess = false;
$isDbFail = false;
initializeDbConnection($dbConnection, $isSuccess, $isDbFail);

$azs_array = getFinalAzs($isSuccess, $dbConnection);

closeConnection($isDbFail, $dbConnection);

$result = json_encode($azs_array);

echo $result;

/**
 * @param $isSuccess
 * @param $dbConnection
 * @return array
 */
function getFinalAzs(bool $isSuccess, mysqli $dbConnection): array
{
    list($numberColumn, $cityColumn, $streetColumn, $regionColumn) = getColumnNames();

    $baseIndex = 0;

    $finalAzs = getEmptyAzs($baseIndex, $numberColumn, $cityColumn, $streetColumn, $regionColumn);

    $numberFilter = getParameter('azs_number', $_GET);
    $regionFilter = getParameter('azs_region', $_GET);
    $cityFilter = getParameter('azs_city', $_GET);
    $streetFilter = getParameter('azs_street', $_GET);

    $azsRequestText = "
SELECT 
        A.$numberColumn
      , A.$cityColumn
      , A.$streetColumn
      , A.$regionColumn
FROM 
  address A
WHERE 
        A.$numberColumn LIKE '%$numberFilter%'
    AND A.$cityColumn LIKE '%$cityFilter%'
    AND A.$streetColumn LIKE '%$streetFilter%'
    AND A.$regionColumn LIKE '%$regionFilter%'
LIMIT 2";

    $azsRequestResult = null;
    if ($isSuccess) {
        $azsRequestResult = $dbConnection->query($azsRequestText);

        $isSuccess = !empty($azsRequestResult);
    }

    $let_set_value_to_array_if_num_rows_equal_this = 1;

    if ($isSuccess && $azsRequestResult->num_rows === $let_set_value_to_array_if_num_rows_equal_this) {
        $finalAzs [$baseIndex] = $azsRequestResult->fetch_assoc();
    }
    return $finalAzs;
}

/**
 * @param $baseIndex
 * @param $numberColumn
 * @param $cityColumn
 * @param $streetColumn
 * @param $regionColumn
 * @return array
 */
function getEmptyAzs(int $baseIndex, string $numberColumn, string $cityColumn, string $streetColumn, string $regionColumn): array
{
    return array($baseIndex =>
        array(
            $numberColumn => null,
            $cityColumn => null,
            $streetColumn => null,
            $regionColumn => null
        )
    );
}
