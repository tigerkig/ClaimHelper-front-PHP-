<?php 
    session_start();
    $_SESSION['Policy_No']     = $_POST["Policy_No"];
    $_SESSION['Holder_Name']   = $_POST["Holder_Name"];
    $_SESSION['Insured_Name']  = $_POST["Insured_Name"];
    $_SESSION['Claimant_Name'] = $_POST["Claimant_Name"];
    $_SESSION['Person_Name']  = $_POST["Person_Name"];
    $_SESSION['email_Address'] = $_POST["email_Address"];
    $_SESSION['Mobile_No']     = $_POST["Mobile_No"];
    $_SESSION['Claims_Type']   = $_POST["Claims_Type"];
?>