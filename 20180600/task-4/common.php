<?php

/**
 * @param string $parameterName
 * @param array $parameters
 * @return string
 */
function getParameter(string $parameterName, array $parameters): string
{
    $filterValue = '';
    $isValueSet = isset($parameters[$parameterName]);
    if ($isValueSet) {
        $filterValue = $parameters[$parameterName];
    }
    return $filterValue;
}

/**
 * @param mysqli $dbConnection
 * @param bool $isSuccess
 * @param bool $isDbFail
 */
function initializeDbConnection(mysqli $dbConnection, bool &$isSuccess, bool &$isDbFail)
{
    $isDbFail = !$dbConnection;
    $isSuccess = !$isDbFail;

    if ($isSuccess) {
        $isSuccess = setRequestCharset($dbConnection);
    }

    if ($isSuccess) {
        $isSuccess = selectDatabase($dbConnection);
    }
}

/**
 * @return mysqli
 */
function getDbConnection(): mysqli
{
    $dbConnection = mysqli_connect(
        'localhost',
        'root',
        'admin'
    );
    return $dbConnection;
}

/**
 * @param $dbFail
 * @param $dbConnection
 */
function closeConnection(bool $dbFail, mysqli $dbConnection)
{
    if (!$dbFail) {
        mysqli_close($dbConnection);
    }
}

/**
 * @param $dbConnection
 * @return bool
 */
function setRequestCharset(mysqli $dbConnection): bool
{
    $result = mysqli_set_charset(
        $dbConnection,
        'utf8'
    );

    return $result;
}

/**
 * @param $dbConnection
 * @return bool
 */
function selectDatabase(mysqli $dbConnection): bool
{
    $selectDbResult = mysqli_select_db(
        $dbConnection,
        'citycall'
    );
    return $selectDbResult;
}

/**
 * @return array
 */
function getColumnNames(): array
{
    $numberColumn = 'number_azs';
    $cityColumn = 'city_azs';
    $streetColumn = 'street_azs';
    $regionColumn = 'region_azs';
    return array($numberColumn, $cityColumn, $streetColumn, $regionColumn);
}
