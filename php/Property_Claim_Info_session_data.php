<?php 
    session_start();

    $_SESSION['User_Name']     = $_POST["user_1"];
    $_SESSION['User_Submission']     = $_POST["user_2"];

    $_SESSION['Loss_damage_Details']     = $_POST["Loss_damage_1"];
    $_SESSION['Loss_damage_Details_1']     = $_POST["Loss_damage_5"];
    $_SESSION['Details_Total_Sum']     = $_POST["Loss_damage_6"];
    $_SESSION['Loss_damage_Upload']    = $_POST["Loss_damage_2"];
    $_SESSION['Loss_damage_Upload_old']    = $_POST["Loss_damage_3"]; 
    $_SESSION['Loss_damage_Upload_old_split']    = $_POST["Loss_damage_4"]; 

    $_SESSION['datepicker1_form_3']     = $_POST["General_1_form_3"];
    $_SESSION['Location_of_incident_form_3']     = $_POST["General_2_form_3"];
    $_SESSION['Description_of_incident_form_3']     = $_POST["General_3_form_3"];
    $_SESSION['Q1_option1_textarea_form_3']     = $_POST["General_4_form_3"];
    $_SESSION['Q2_option1_textarea_form_3']     = $_POST["General_5_form_3"];
    $_SESSION['Q3_option1_textarea_form_3']     = $_POST["General_6_form_3"];
    $_SESSION['Q5_option1_textarea_form_3']     = $_POST["General_7_form_3"];
    $_SESSION['General_Q_Type']     = $_POST["General_8_form_3"];

    $_SESSION['Period_B_I_form_3']     = $_POST["Business_1_form_3"];
    $_SESSION['Business_Details']     = $_POST["Business_2_form_3"];
    $_SESSION['Business_Upload']    = $_POST["Business_3_form_3"];
    $_SESSION['Business_Upload_old']    = $_POST["Business_4_form_3"]; 
    $_SESSION['Business_Upload_old_split']    = $_POST["Business_5_form_3"]; 

    $_SESSION['Reason_claims_form_3']     = $_POST["Loss_Money_1"];
    $_SESSION['Loss_Total_form_3']     = $_POST["Loss_Money_2"];
    $_SESSION['Loss_Money_Upload']     = $_POST["Loss_Money_3"];
    $_SESSION['Loss_Money_Upload_old']     = $_POST["Loss_Money_4"];
    $_SESSION['Loss_Money_Upload_old_split']     = $_POST["Loss_Money_5"];

    $_SESSION['Public_Liability_form_2']     = $_POST["public_1_form_2"];
    $_SESSION['Details_extent_of_damage_to_Property_of_other_form_2']     = $_POST["public_2_form_2"];
    $_SESSION['Name_of_the_injured_form_2']     = $_POST["public_3_form_2"];
    $_SESSION['Details_extent_of_injury_of_other_form_2']     = $_POST["public_4_form_2"];
    $_SESSION['public_Q1_textarea_form_2']     = $_POST["public_5_form_2"];
    $_SESSION['public_Q2_textarea_form_2']     = $_POST["public_6_form_2"];
    $_SESSION['public_Q3_textarea_form_2']     = $_POST["public_7_form_2"];
    $_SESSION['public_Q3_textarea1_form_2']     = $_POST["public_8_form_2"];
    $_SESSION['public_Q_Type']     = $_POST["public_9_form_2"];
    $_SESSION['Public_Upload']     = $_POST["public_10_form_2"];
    $_SESSION['Public_Upload_old']     = $_POST["public_11_form_2"];
    $_SESSION['Public_Upload_old_split']     = $_POST["public_12_form_2"];

    $_SESSION['Reason_claims_Plate_form_3']     = $_POST["Plate_Glass_1"];
    $_SESSION['Loss_Total_Plate_form_3']     = $_POST["Plate_Glass_2"];
    $_SESSION['Plate_Glass_Upload']     = $_POST["Plate_Glass_3"];
    $_SESSION['Plate_Glass_Upload_old']     = $_POST["Plate_Glass_4"];
    $_SESSION['Plate_Glass_Upload_old_split']     = $_POST["Plate_Glass_5"];
    
    $_SESSION['Reason_claims_Others_form_3']     = $_POST["Others_1"];
    $_SESSION['Loss_Total_Others_form_3']     = $_POST["Others_2"];
    $_SESSION['Others_Upload']     = $_POST["Others_3"];
    $_SESSION['Others_Upload_old']     = $_POST["Others_4"];
    $_SESSION['Others_Upload_old_split']     = $_POST["Others_5"];

    $_SESSION['Name_I_E_form_3']     = $_POST["Personal_Assault_1"];
    $_SESSION['Name_C_form_3']     = $_POST["Personal_Assault_2"];
    $_SESSION['Reason_Claims_P_A']     = $_POST["Personal_Assault_3"];
    $_SESSION['Personal_Assault_Upload']     = $_POST["Personal_Assault_4"];
    $_SESSION['Personal_Assault_Upload_old']     = $_POST["Personal_Assault_5"];
    $_SESSION['Personal_Assault_Upload_old_split']     = $_POST["Personal_Assault_6"];

    $_SESSION['Date_injury']     = $_POST["Employee_Compensation_1"];
    $_SESSION['Description_incident']     = $_POST["Employee_Compensation_2"];
    $_SESSION['Sick_leave']     = $_POST["Employee_Compensation_3"];
    $_SESSION['Nature_injury']     = $_POST["Employee_Compensation_4"];
    $_SESSION['Employee_Compensation_Upload']     = $_POST["Employee_Compensation_5"];
    $_SESSION['Employee_Compensation_Upload_old']     = $_POST["Employee_Compensation_6"];
    $_SESSION['Employee_Compensation_Upload_old_split']     = $_POST["Employee_Compensation_7"];

    echo $_SESSION['Period_B_I_form_3'].$_SESSION['Business_Details'].$_SESSION['Business_Upload_old'];

?>