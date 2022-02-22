<?php
    session_start();
    require_once("connect.php");
    $Policy_No     = $_SESSION['Policy_No'];
    $Holder_Name   = $_SESSION["Holder_Name"];
    $Insured_Name  = $_SESSION["Insured_Name"];
    $Claimant_Name = $_SESSION["Claimant_Name"];
    $Person_Name   = $_SESSION["Person_Name"];
    $email_Address = $_SESSION["email_Address"];
    $Mobile_No     = $_SESSION["Mobile_No"];
    $Claims_Type   = $_SESSION["Claims_Type"];

    $General_1   = $_SESSION["datepicker1_form_3"];
    $General_2   = $_SESSION["Location_of_incident_form_3"];
    $General_3   = $_SESSION["Description_of_incident_form_3"];
    $General_4   = $_SESSION["Q1_option1_textarea_form_3"];
    $General_5   = $_SESSION["Q2_option1_textarea_form_3"];
    $General_6   = $_SESSION["Q3_option1_textarea_form_3"];
    $General_7   = $_SESSION["Q5_option1_textarea_form_3"];
    $General_8   = $_SESSION["General_Q_Type"];

    $Loss_damage_Details     = $_SESSION["Loss_damage_Details"];
    $Loss_damage_Details_1   = $_SESSION["Loss_damage_Details_1"];
    $Details_Total_Sum       = $_SESSION["Details_Total_Sum"];
    $Loss_damage_Upload      = $_SESSION["Loss_damage_Upload"];
    $Loss_damage_Upload_old  = $_SESSION["Loss_damage_Upload_old"];

    $Business_1     = $_SESSION["Period_B_I_form_3"];
    $Business_Details   = $_SESSION["Business_Details"];
    $Business_Upload      = $_SESSION["Business_Upload"];
    $Business_Upload_old  = $_SESSION["Business_Upload_old"];

    $Loss_Money_1     = $_SESSION["Reason_claims_form_3"];
    $Loss_Money_2   = $_SESSION["Loss_Total_form_3"];
    $Loss_Money_Upload      = $_SESSION["Loss_Money_Upload"];
    $Loss_Money_Upload_old  = $_SESSION["Loss_Money_Upload_old"];

    $Public_1   = $_SESSION["Public_Liability_form_2"];
    $Public_2   = $_SESSION["Details_extent_of_damage_to_Property_of_other_form_2"];
    $Public_3   = $_SESSION["Name_of_the_injured_form_2"];
    $Public_4   = $_SESSION["Details_extent_of_injury_of_other_form_2"];
    $Public_5   = $_SESSION["public_Q1_textarea_form_2"];
    $Public_6   = $_SESSION["public_Q2_textarea_form_2"];
    $Public_7   = $_SESSION["public_Q3_textarea_form_2"];
    $Public_8   = $_SESSION["public_Q3_textarea1_form_2"];
    $Public_9   = $_SESSION["public_Q_Type"];
    $Public_Upload   = $_SESSION["Public_Upload"];
    $Public_Upload_old   = $_SESSION["Public_Upload_old"];

    $Personal_Assault_1     = $_SESSION["Name_I_E_form_3"];
    $Personal_Assault_2   = $_SESSION["Name_C_form_3"];
    $Personal_Assault_3       = $_SESSION["Reason_Claims_P_A"];
    $Personal_Assault_Upload      = $_SESSION["Personal_Assault_Upload"];
    $Personal_Assault_Upload_old  = $_SESSION["Personal_Assault_Upload_old"];

    $Plate_Glass_1     = $_SESSION["Reason_claims_Plate_form_3"];
    $Plate_Glass_2   = $_SESSION["Loss_Total_Plate_form_3"];
    $Plate_Glass_Upload      = $_SESSION["Plate_Glass_Upload"];
    $Plate_Glass_Upload_old  = $_SESSION["Plate_Glass_Upload_old"];

    $Employee_Compensation_1   = $_SESSION["Date_injury"];
    $Employee_Compensation_2   = $_SESSION["Description_incident"];
    $Employee_Compensation_3   = $_SESSION["Sick_leave"];
    $Employee_Compensation_4   = $_SESSION["Nature_injury"];
    $Employee_Compensation_Upload      = $_SESSION["Employee_Compensation_Upload"];
    $Employee_Compensation_Upload_old  = $_SESSION["Employee_Compensation_Upload_old"];

    $Others_1     = $_SESSION["Reason_claims_Others_form_3"];
    $Others_2   = $_SESSION["Loss_Total_Others_form_3"];
    $Others_Upload      = $_SESSION["Others_Upload"];
    $Others_Upload_old  = $_SESSION["Others_Upload_old"];

    $User_Name     = $_SESSION["User_Name"];
    $User_Submission     = $_SESSION["User_Submission"];

    

    // insert f3_holderinfo  //
    $f3_holderinfo  = "INSERT INTO f3_holderinfo (Policy_No, Holder_Name, Insured_Name, Claimant_Name, Person_Name, email_Address, Mobile_No, Claims_Type)";
    $f3_holderinfo .= " VALUES ('$Policy_No', '$Holder_Name', '$Insured_Name', '$Claimant_Name', '$Person_Name', '$email_Address', '$Mobile_No', '$Claims_Type')";

    if ($conn->query($f3_holderinfo) === TRUE ) {
        $last_id = $conn->insert_id;
        $ref_data = 'C'.sprintf("%'.05d\n", $last_id);
        $ref_1 = "UPDATE f3_holderinfo SET reference_id = '$ref_data' WHERE id = '$last_id'";
        $conn->query($ref_1);
        $upload = array();
        $upload_old = array();
        array_push($upload, $Loss_damage_Upload, $Business_Upload, $Loss_Money_Upload, $Public_Upload, $Personal_Assault_Upload, $Plate_Glass_Upload, $Employee_Compensation_Upload, $Others_Upload);
        array_push($upload_old, $Loss_damage_Upload_old, $Business_Upload_old, $Loss_Money_Upload_old, $Public_Upload_old, $Personal_Assault_Upload_old, $Plate_Glass_Upload_old, $Employee_Compensation_Upload_old, $Others_Upload_old);

        foreach ($upload as $key => $upload_value) {
            if($upload_value){
                $explode  = explode(",", $upload_value);
                $explode_old  = explode(",", $upload_old[$key]);
                foreach ($explode as $key1 => $value) {
                    if($value){
                        $f3_image =  "INSERT INTO f3_image (reference_id, Claims_Type, Old_name, New_name)";
                        $f3_image .= " VALUES ('$ref_data', '$key', '$explode_old[$key1]', '$value')";
                        $conn->query($f3_image);
                    }
                }
            }
        }
        echo $ref_data;
    }

    // insert f3_gen //
    $f3_gen  = "INSERT INTO f3_gen (Policy_No, reference_id, Date_time_accident, Location_incident, Description_incident, Q1_description, Q2_description, Q3_description, Q5_description, Questions)";
    $f3_gen .= " VALUES ('$Policy_No', '$ref_data', '$General_1', '$General_2', '$General_3', '$General_4', '$General_5', '$General_6', '$General_7', '$General_8')";
    $conn->query($f3_gen);

    $Type = explode("||", $Claims_Type);

    // insert f3_ldcs_detail_1 //
    if($Type[0] == '1'){
        $insert = array();
        $insert_1 = array();
        $counter = 0;
        foreach (json_decode($Loss_damage_Details) as $parent_key => $parent_value) {
            foreach( $parent_value as $key => $value ) {
                $insert[$counter] = $value;
                $counter ++;
            }
            
            if($insert[4] == 'Sub Total' && $parent_key != 0){
                $sub = "UPDATE f3_ldcs_detail_1 SET sub_total = '$insert[5]' WHERE id = '$ldcs_last_id'";
                $conn->query($sub);
            }else{
                if($insert[1]){
                    $f3_ldcs_detail_1 = "INSERT INTO f3_ldcs_detail_1 (Policy_No, reference_id, Description, Date, Original, Repair, Claim)";
                    $f3_ldcs_detail_1 .= " VALUES ('$Policy_No', '$ref_data', '$insert[1]', '$insert[2]', '$insert[3]', '$insert[4]', '$insert[5]')";
                    $conn->query($f3_ldcs_detail_1);
                    $ldcs_last_id = $conn->insert_id;
                }
            }
            $counter = 0;
        }
        foreach (json_decode($Loss_damage_Details_1) as $parent_key => $parent_value) {
            foreach( $parent_value as $key => $value ) {
                $insert_1[$counter] = $value;
                $counter ++;
            }
            
            if($insert_1[3] == 'Sub Total' && $parent_key != 0){
                $sub = "UPDATE f3_ldcs_detail_2 SET sub_total = '$insert_1[4]', Details_Total_Sum = '$Details_Total_Sum' WHERE id = '$ldcs_last_id'";
                $conn->query($sub);
            }else{
                if($insert_1[1]){
                    $f3_ldcs_detail_2 = "INSERT INTO f3_ldcs_detail_2 (Policy_No, reference_id, Description, Reason_cost, Date, Claim)";
                    $f3_ldcs_detail_2 .= " VALUES ('$Policy_No', '$ref_data', '$insert_1[1]', '$insert_1[2]', '$insert_1[3]', '$insert_1[4]')";
                    echo $f3_ldcs_detail_2;
                    $conn->query($f3_ldcs_detail_2);
                    $ldcs_last_id = $conn->insert_id;
                }
            }
            $counter = 0;
        }
    }
    // insert f3_bi_details //
    if($Type[1] == '1'){
        $insert_2 = array();
        $counter_2 = 0;

        $f3_bi = "INSERT INTO f3_bi (Policy_No, reference_id, Period_Business)";
        $f3_bi .= " VALUES ('$Policy_No', '$ref_data', '$Business_1')";
        $conn->query($f3_bi);

        foreach (json_decode($Business_Details) as $parent_key => $parent_value) {
            foreach( $parent_value as $key => $value ) {
                $insert_2[$counter_2] = $value;
                $counter_2 ++;
            }
            
            if($insert_2[3] == 'Sub Total' && $parent_key != 0){
                $sub = "UPDATE f3_bi_details SET sub_total = '$insert_2[4]' WHERE id = '$bi_details_last_id'";
                $conn->query($sub);
            }else{
                if($insert_2[1]){
                    $f3_bi_details = "INSERT INTO f3_bi_details (Policy_No, reference_id, Description, Reason_cost, Date, Claim)";
                    $f3_bi_details .= " VALUES ('$Policy_No', '$ref_data', '$insert_2[1]', '$insert_2[2]', '$insert_2[3]', '$insert_2[4]')";
                    $conn->query($f3_bi_details);
                    $bi_details_last_id = $conn->insert_id;
                }
            }
            $counter_2 = 0;
        }
    }
    // insert f3_lm //
    if($Type[2] == '1'){
        $f3_lm = "INSERT INTO f3_lm (Policy_No, reference_id, Reason_claims, Total_claimed)";
        $f3_lm .= " VALUES ('$Policy_No', '$ref_data', '$Loss_Money_1', '$Loss_Money_2')";
        $conn->query($f3_lm);
    }
    // insert f3_pl //
    if($Type[3] == '1'){
        $f3_pl = "INSERT INTO f3_pl (Policy_No, reference_id, Name_p_o, Details_d_p_o, Name_injured, Details_i_o, Q1_description, Q2_description, Q3_description, Questions, state_all_name)";
        $f3_pl .= " VALUES ('$Policy_No', '$ref_data', '$Public_1', '$Public_2', '$Public_3', '$Public_4', '$Public_5', '$Public_6', '$Public_7', '$Public_9', '$Public_8')";
        $conn->query($f3_pl);
    }
    // insert f3_pa //
    if($Type[4] == '1'){
        $f3_pa = "INSERT INTO f3_pa (Policy_No, reference_id, Name_i_e, Name_c, Reason_claims)";
        $f3_pa .= " VALUES ('$Policy_No', '$ref_data', '$Personal_Assault_1', '$Personal_Assault_2', '$Personal_Assault_3')";
        $conn->query($f3_pa);
    }
    // insert f3_pg //
    if($Type[5] == '1'){
        $f3_pg = "INSERT INTO f3_pg (Policy_No, reference_id, Reason_claims, Total_claimed)";
        $f3_pg .= " VALUES ('$Policy_No', '$ref_data', '$Plate_Glass_1', '$Plate_Glass_2')";
        $conn->query($f3_pg);
    }
    // insert f3_ec //
    if($Type[5] == '1'){
        $f3_ec = "INSERT INTO f3_ec (Policy_No, reference_id, Date_injury, Description, Sick_leave, Nature_injury)";
        $f3_ec .= " VALUES ('$Policy_No', '$ref_data', '$Employee_Compensation_1', '$Employee_Compensation_2', '$Employee_Compensation_3', '$Employee_Compensation_4')";
        $conn->query($f3_ec);
    }
    // insert f3_others //
    if($Type[5] == '1'){
        $f3_others = "INSERT INTO f3_others (Policy_No, reference_id, Reason_claims, Total_claimed)";
        $f3_others .= " VALUES ('$Policy_No', '$ref_data', '$Others_1', '$Others_2')";
        $conn->query($f3_others);
    }

    // insert f3_applicant_info //
    $f3_applicant_info = "INSERT INTO f3_applicant_info (Policy_No, reference_id, User_Name, User_Submission)";
    $f3_applicant_info .= " VALUES ('$Policy_No', '$ref_data', '$User_Name', '$User_Submission')";
    $conn->query($f3_applicant_info);
    
    $conn->close();
?>