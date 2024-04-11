<?php
function getCountStudents($db)
{
    $sql = "SELECT COUNT(*) as aantal FROM student;";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $CountStudents = $row['aantal'];
    return $CountStudents;
}


?>