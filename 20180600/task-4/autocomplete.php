<?php
error_reporting(E_ALL);

require_once('common.php');

$dbConnection = getDbConnection();

$isSuccess = false;
$isDbFail = false;
initializeDbConnection($dbConnection, $isSuccess, $isDbFail);

if ($isSuccess) {
    list($letGetNumber, $letGetRegion, $letGetCity, $letGetStreet) = getFlags();

    list($selectPhrase, $groupByPhrase) = getPhrases($letGetNumber, $letGetRegion, $letGetCity, $letGetStreet);

    $limitPhrase = getLimitPhrase($_GET);

    $azsRequestText = compileAzsRequestText($selectPhrase, $groupByPhrase, $limitPhrase, $_GET);

    $getAzsRequest = $dbConnection->query($azsRequestText);
}

$applicableAzses = array();
$isSuccess = !empty($getAzsRequest);
if ($isSuccess) {
    if ($getAzsRequest->num_rows > 0) {
        $applicableAzses = $getAzsRequest->fetch_all(MYSQLI_ASSOC);
    }
}

closeConnection($isDbFail, $dbConnection);

$result = json_encode($applicableAzses);

echo $result;

/**
 * @param string $selectPhrase
 * @param string $groupByPhrase
 * @param string $limitPhrase
 * @param array $parameters
 * @return string
 */
function compileAzsRequestText(string $selectPhrase, string $groupByPhrase, string $limitPhrase, array $parameters): string
{
    list($numberColumn, $cityColumn, $streetColumn, $regionColumn) = getColumnNames();

    list($numberFilter, $regionFilter, $cityFilter, $streetFilter) = getParameters($parameters);

    $get_azs_sql
        = "
SELECT 
      $selectPhrase    
FROM 
  address A
WHERE 
        A.$numberColumn LIKE '%$numberFilter%'
    AND A.$cityColumn LIKE '%$cityFilter%'
    AND A.$streetColumn LIKE '%$streetFilter%'
    AND A.$regionColumn LIKE '%$regionFilter%'
$groupByPhrase
$limitPhrase";
    return $get_azs_sql;
}

/**
 * @param array $parameters
 * @return array
 */
function getParameters(array $parameters): array
{
    $numberFilter = getParameter('azs_number', $parameters);
    $regionFilter = getParameter('azs_region', $parameters);
    $cityFilter = getParameter('azs_city', $parameters);
    $streetFilter = getParameter('azs_street', $parameters);
    return array($numberFilter, $regionFilter, $cityFilter, $streetFilter);
}

/**
 * @param $letGetNumber
 * @param $letGetRegion
 * @param $letGetCity
 * @param $letGetStreet
 * @return array
 */
function getPhrases($letGetNumber, $letGetRegion, $letGetCity, $letGetStreet): array
{
    list($numberColumn, $cityColumn, $streetColumn, $regionColumn) = getColumnNames();

    $selectPhrase = ' null ';
    $groupByPhrase = ' GROUP BY ';
    if ($letGetNumber) {
        $selectPhrase = "A.$numberColumn AS $numberColumn";
        $groupByPhrase .= "A.$numberColumn";
    } elseif ($letGetRegion) {
        $selectPhrase = "A.$regionColumn AS $regionColumn";
        $groupByPhrase .= "A.$regionColumn";
    } elseif ($letGetCity) {
        $selectPhrase = "A.$cityColumn AS $cityColumn";
        $groupByPhrase .= "A.$cityColumn";
    } elseif ($letGetStreet) {
        $selectPhrase = "A.$streetColumn AS $streetColumn";
        $groupByPhrase .= "A.$streetColumn";
    } else {
        $groupByPhrase = '';
    }
    return array($selectPhrase, $groupByPhrase);
}

/**
 * @return array
 */
function getFlags(): array
{
    $letGetNumber = getFlag('number', $_GET);
    $letGetRegion = getFlag('region', $_GET);
    $letGetCity = getFlag('city', $_GET);
    $letGetStreet = getFlag('street', $_GET);
    return array($letGetNumber, $letGetRegion, $letGetCity, $letGetStreet);
}

/**
 * @param string $flagName
 * @param array $parameters
 * @return bool
 */
function getFlag(string $flagName, array $parameters): bool
{
    $result = isset($parameters[$flagName]);
    return $result;
}

/**
 * @param array $parameters
 * @return string
 */
function getLimitPhrase(array $parameters): string
{
    $outputLimit = getParameter('maxRows', $parameters);

    $limitPhrase = '';
    if (!empty($outputLimit)) {
        $limitPhrase = " LIMIT $outputLimit ";
    }
    return $limitPhrase;
}
