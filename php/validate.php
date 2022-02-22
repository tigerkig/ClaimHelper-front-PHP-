<?php
  require_once("connect.php");
  $policy_no = $_POST['policy_no'];
  $sql = "SELECT id FROM validate where policy_no = '$policy_no'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo 'true';
  } else {
    echo 'false';
  }
  $conn->close();
?>