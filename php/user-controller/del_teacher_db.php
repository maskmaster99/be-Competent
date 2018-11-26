<?php

$t_id=$_POST['select_teacher'];

require"../../includes/dbconnect.php";

$query="select * from teacher where t_id = '$t_id' ";
$result = $conn->query($query);
//var_dump($result1);

if($result->num_rows > 0) {
              //  echo"record exists";
              $sql1= " DELETE FROM teacher where t_id= '$t_id'";
              $r1 = $conn->query($sql1);
              $sql2="DELETE FROM takes where t_id='$t_id'";
              $r2=$conn->query($sql2);
              
              header("location: /edu_site/php/del_teacher.php?deleted=1");
}
else{
  header("location: /edu_site/php/del_teacher.php?not_exist=1");
}
