<?php
// db connect
include("mysql_connect.inc.php");

// value from search
$q = $_GET['q'];

// db queries
$sql = "SELECT accNo, name
        FROM Details
        WHERE name LIKE '%$q%';";
$result = mysqli_query($db_link, $sql);

// declaring vars
$return = '';
$resultC = 0;

// proccessing the results
while($row = mysqli_fetch_row($result)){
    $return .= "<button class=\"list-group-item result\" userno=\"$row[0]\" username=\"$row[1]\" onclick=\"addResult(this)\">$row[1]</button>";
    $resultC++;
}

// returning to the caller
if($resultC == 0){
    echo 'None';
} else {
    echo $return;
}

?>