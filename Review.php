<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include("design.php");
?>
<style>
    label{
        margin-bottom: 20px;
    }

</style>
<body style="color:#51575c">
    <div class="container py-5" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;">
        <div class="p-5 bg-white rounded shadow mb-5 container-height">

            <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="border:none">
                <div class="row">
                <div class="col-md-12 mx-0">
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            
                            <li class="active" id="account" onclick="navigation('account')">Claim Info</li>
                            <li class="active" id="personal" onclick="navigation('personal')">Property Claim Info</li>
                            <li class="active" id="payment" onclick="navigation('payment')">Review</li>
                            <li id="confirm" onclick="navigation('confirm')">REF.NO</li>
                        </ul> <!-- fieldsets -->

                    </form>
                </div>
            </div>
        </div>
      
        <div id="myTab1Content" class="tab-content">
        <div id="home2" role="tabpanel" aria-labelledby="preview-tab" class="tab-pane fade px-4 py-5 active show " style="padding-top:0px !important">
            <div class="row" style="padding:0px !important;">
                <div class="col-lg-6 ">
                    <div class="title">Policy Information</div>
                    <div class="preview">
                        <div>
                        <label class="subject">Policy No:</label>
                        <label id="Policy_No_1"></label>
                        </div>

                        <div>
                        <label class="subject">Holder Name:</label>
                        <label id="Holder_Name_1"></label>
                        </div>

                        <div>
                        <label class="subject">Insured Name:</label>
                        <label id="Insured_Name_1"></label>
                        </div>

                        <div>
                        <label class="subject">Claimant Name:</label>
                        <label id="Claimant_Name_1"></label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="title">Contact Information</div>
                    <div class="preview">

                        <div>
                        <label class="subject">Person Name:</label>
                        <label id="Person_Name_1"></label>
                        </div>

                        <div>
                        <label class="subject">Email Address:</label>
                        <label id="email_Address_1"></label>
                        </div>

                        <div>
                        <label class="subject">Mobile No:</label>
                        <label id="Mobile_No_1"></label>
                        </div>
                    </div>
                </div>
 

                <!-- //////////////////////////////////////////// -->

                <div class="col-md-12 preview_top">
                    <div class="title">General</div>
                    <div class="preview">
                        <div>
                            <label class="subject">Date & time of accident:</label>
                            <label id="General_show_1"></label>
                        </div>

                        <div>
                            <label class="subject">Location of incident:</label>
                            <label id="General_show_2"></label>
                        </div>

                        <div>
                            <label class="subject">Description of incident:</label>
                            <label id="General_show_3"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q1 : Is there any sign of forcible entry or exit at the premises in case of theft or burglary loss?
                            </label>
                            <label id="General_Q1_result"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q2 : Has/ Will the incident been reported/ be reported to the local police/ management office/ any other Authorit(ies)/ part(ies)?						
                            </label>
                            <label id="General_Q2_result"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q3 : Have you lodged/ Are you going to lodge complaint/ claim against any other part(ies) concerning the loss/damage?						
                            </label>
                            <label id="General_Q3_result"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q4 : Are you the owner of damaged or lost item(s)/propert(ies)?			
                            </label>
                            <label id="General_Q4_result"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q5 : Are the Insured also insured with any other insurance for the Insured propert(ies) as a result of the same incident? 						
                            </label>
                            <label id="General_Q5_result"></label>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 preview_top" id="damage2" style="display:none">
                    <div class="title">Loss or damaged to Content / Stock  </div>
                    <div class="preview">
                        <div id="first">
                            <div><label class="subject">Details of damaged or lost properties:</label></div>
                            <div class="card card-cascade narrower" style="margin-bottom:30px">
                                <div id="accordion" style="display:none"></div>
                                <div style="display:none; width:100%; background: aliceblue" id="subtotal_hidden_1">
                                    <div style="padding-left:12px" class="sub_width">Sub Total</div>
                                    <div id="subtotal_1">0</div>
                                </div>
                                <div id="table_responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead-dark" style="font-size: 13px">
                                            <tr>
                                                <th>No</th>
                                                <th>Description of property</th>
                                                <th>Date of purchase or installation</th>
                                                <th>Original purchase price(HK$)</th>
                                                <th>Repair / Replacement cost (if applicable) (HK$)</th>
                                                <th>Claims amount (HK$)</th>
                                                <!-- <th style="width:87px">Status</th> -->
                                            </tr>
                                        </thead>

                                        <tbody id="tbody">
                                        </tbody>

                                        <tfoot id="tfoot">
                                            <tr style=" background: aliceblue;">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Sub Total</td>
                                                <td id="subtotal">0</td>
                                                <!-- <td></td> -->
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="second">
                            <div><label class="subject">Details of other claim item(s):</label></div>
                            <div class="card card-cascade narrower" style="margin-bottom:30px">
                                <div id="accordion_1" style="display:none"></div>
                                <div style="display:none; width:100%; background: aliceblue" id="subtotal_hidden_1">
                                    <div style="padding-left:12px" class="sub_width">Sub Total</div>
                                    <div id="subtotal_1_form_3">0</div>
                                </div>
                                <div id="table_responsive_1">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead-dark" style="font-size: 13px">
                                            <tr>
                                                <th>No</th>
                                                <th>Description of item</th>
                                                <th>Reason of cost(s) / expense(s) incurred (HK$)</th>
                                                <th>Date of purchase or installation</th>
                                                <th>Claims amount (HK$)</th>
                                                <!-- <th style="width:87px">Status</th> -->
                                            </tr>
                                        </thead>

                                        <tbody id="tbody_1">
                                        </tbody>

                                        <tfoot id="tfoot_1">
                                            <tr style=" background: aliceblue;">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Sub Total</td>
                                                <td id="subtotal_form_3">0</td>
                                                <!-- <td> </td> -->
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="Total_sum">
                            <div style="padding-bottom:12px" class="sub_width">Total claimed amount HK$ :</div>
                            <div id="Total_sum">0</div>
                        </div>

                        <div class="upload_layout">
                            <div class="subject"><label >Uploaded files:</label></div>
                            <div style="padding-left: 5px;"><label id="damage_show_5"></label></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 preview_top" id="Business_Interruption" style="display:none">
                    <div class="title">Business Interruption</div>
                    <div class="preview">

                        <div>
                            <label class="subject">Period of Business Interruption :</label>
                            <label id="Business_Interruption_show_1"></label>
                        </div>

                        <div id="third">
                            <div><label class="subject">Details of fee / additional expenditure:</label></div>
                            <div class="card card-cascade narrower" style="margin-bottom:30px">
                                <div id="accordion_2" style="display:none"></div>
                                <div style="display:none; width:100%; background: aliceblue" id="subtotal_hidden_2">
                                    <div style="padding-left:12px" class="sub_width">Sub Total</div>
                                    <div id="subtotal_2_form_3">0</div>
                                </div>
                                <div id="table_responsive_2">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead-dark" style="font-size: 13px">
                                            <tr >
                                                <th>No</th>
                                                <th>Description of fee / additional expenditure</th>
                                                <th>Reason of fee / additional expenditure incurred </th>
                                                <th>Date of fee / additional expenditure incurred </th>
                                                <th>Claims amount (HK$)</th>
                                                <!-- <th style="width:87px">Status</th> -->
                                            </tr>
                                        </thead>

                                        <tbody id="tbody_2"></tbody>

                                        <tfoot id="tfoot_2">
                                            <tr style=" background: aliceblue;">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Sub Total</td>
                                                <td id="subtotal2_form_3">0</td>
                                                <!-- <td></td> -->
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="upload_layout">
                            <div class="subject"><label >Uploaded files:</label></div>
                            <div style="padding-left: 5px;"><label id="Business_Interruption_show_2"></label></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 preview_top" id="Loss_Money" style="display:none">
                    <div class="title">Loss of Money</div>
                    <div class="preview">
                        <div>
                        <label class="subject">Reason of claims:</label>
                        <label id="Loss_Money_show_1"></label>
                        </div>

                        <div>
                        <label class="subject">Total Claimed amount HK$:</label>
                        <label id="Loss_Money_show_2"></label>
                        </div>

                        <div class="upload_layout">
                        <div class="subject"><label >Uploaded files:</label></div>
                        <div style="padding-left: 5px;"><label id="Loss_Money_show_3"></label></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 preview_top" id="public_2" style="display:none">
                    <div class="title"> Public Liability</div>
                    <div class="preview">
                        <div>
                            <label class="subject">Name of the property owner :</label>
                            <label id="public_show_1"></label>
                        </div>

                        <div>
                            <label class="subject">Details & extent of damage to Property of other(s) :</label>
                            <label id="public_show_2"></label>
                        </div>

                        <div>
                            <label class="subject">Name of the injured :</label>
                            <label id="public_show_3"></label>
                        </div>

                        <div>
                            <label class="subject">Details & extent of injury of other(s) :</label>
                            <label id="public_show_4"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q1 : Was/Were other wrongdoer(s) involved in the same incident? 							
                            </label>
                            <label id="public_Q1_result"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q2 : Has any communication, verbal or written, been made to you by or on behalf of any injured or owner(s) of the damaged property?							
                            </label>
                            <label id="public_Q2_result"></label>
                        </div>

                        <div>
                            <label class="subject">
                                Q3 : Has any step been taken to compromise or settle the matter?							
                            </label>
                            <label id="public_Q3_result"></label>
                        </div>

                        <div>
                            <label class="subject">
                                State all Name(s), address(es) and telephone No.(s) of witness(es) of the incident, if any. 	
                            </label>
                            <label id="public_Q4_result"></label>
                        </div>

                        <div class="upload_layout">
                            <div class="subject"><label >Uploaded files:</label></div>
                            <div style="padding-left: 5px;"><label id="public_show_5"></label></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 preview_top" id="Personal_Assault" style="display:none">
                    <div class="title">Personal Assault</div>
                    <div class="preview">
                        <div>
                        <label class="subject">Name of injured employee:</label>
                        <label id="Personal_Assault_show_1"></label>
                        </div>

                        <div>
                        <label class="subject">Name of the claimant:</label>
                        <label id="Personal_Assault_show_2"></label>
                        </div>

                        <div>
                        <label class="subject">Reason of Claims:</label>
                        <label id="Personal_Assault_show_3"></label>
                        </div>

                        <div class="upload_layout">
                        <div class="subject"><label >Uploaded files:</label></div>
                        <div style="padding-left: 5px;"><label id="Personal_Assault_show_4"></label></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 preview_top" id="Plate_Glass" style="display:none">
                    <div class="title">Plate Glass</div>
                    <div class="preview">
                        <div>
                        <label class="subject">Reason of claims:</label>
                        <label id="Plate_Glass_show_1"></label>
                        </div>

                        <div>
                        <label class="subject">Total Claimed amount HK$:</label>
                        <label id="Plate_Glass_show_2"></label>
                        </div>

                        <div class="upload_layout">
                        <div class="subject"><label >Uploaded files:</label></div>
                        <div style="padding-left: 5px;"><label id="Plate_Glass_show_3"></label></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 preview_top" id="Employee_Compensation" style="display:none">
                    <div class="title">Employee's Compensation</div>
                    <div class="preview">
                        <div>
                        <label class="subject">Date of injury:</label>
                        <label id="Employee_Compensation_show_1"></label>
                        </div>

                        <div>
                        <label class="subject">Description of incident:</label>
                        <label id="Employee_Compensation_show_2"></label>
                        </div>

                        <div>
                        <label class="subject">Sick leave:</label>
                        <label id="Employee_Compensation_show_3"></label>
                        </div>

                        <div>
                        <label class="subject">Nature of injury:</label>
                        <label id="Employee_Compensation_show_4"></label>
                        </div>

                        <div class="upload_layout">
                        <div class="subject"><label >Uploaded files:</label></div>
                        <div style="padding-left: 5px;"><label id="Employee_Compensation_show_5"></label></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 preview_top" id="Others" style="display:none">
                    <div class="title">Others</div>
                    <div class="preview">
                        <div>
                        <label class="subject">Reason of claims:</label>
                        <label id="Others_show_1"></label>
                        </div>

                        <div>
                        <label class="subject">Total Claimed amount HK$:</label>
                        <label id="Others_show_2"></label>
                        </div>

                        <div class="upload_layout">
                        <div class="subject"><label >Uploaded files:</label></div>
                        <div style="padding-left: 5px;"><label id="Others_show_3"></label></div>
                        </div>

                    </div>
                </div>
                

                <div class="col-md-12 preview_top" id="user2">
                    <div class="title">User Information</div>
                    <div class="preview">
                        <div>
                        <label class="subject">Name of Applicant:</label>
                        <label id="user_show_1"></label>
                        </div>

                        <div>
                        <label class="subject">Submission Date &amp; Time:</label>
                        <label id="user_show_2"></label>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="I_agree_margin">
                    <input type="checkbox" id="I_agree">
                    <label for="I_agree">I/We have read and agreed to all the declarations, terms and conditions and Personal Information Collection Statement.</label>
                    </div>
                    <div class="col-md-12 check-box-padding next-previous row" style="margin-left:0px">
                    <div class="col-md-6 check-box-padding" style="margin-bottom:10px"><button type="button" class="btn btn-outline-primary col-md-4" onclick="before()">PREVIOUS</button></div>
                    <div class="col-md-6 check-box-padding" style="text-align:end">
                        <button type="button" class="btn btn-outline-danger col-md-4" style="margin-bottom:10px" onclick="cancel()">CANCEL</button>
                        <button type="submit" class="btn btn-outline-success col-md-4" style="margin-bottom:10px" id="submit" onclick="submit()" >CONFIRM</button>
                    </div>
                    </div>
                </div>
                <div>
            </div>
        </div>

    </div>
  </div>
  <input type="hidden" id="file_name">

  <div class="spinner-border text-primary" style="display:none;width:5rem; height:5rem;position:fixed;top:45%;right:43%" role="status" id="screen_loading" >
    <span class="sr-only">Loading...</span>
  </div>

</body>
</html>

<script>
    if(!'<?php echo isset($_SESSION['Policy_No']) ? $_SESSION['Policy_No'] : '';?>'){
      location.href= "index.php";
    }
    var Claims_Type = '<?php echo isset($_SESSION['Claims_Type']) ? $_SESSION['Claims_Type'] : '' ;?>';
    var Claims_Type_Array = Claims_Type.split('||');
    $('#Policy_No_1').html('<?php echo isset($_SESSION['Policy_No']) ? $_SESSION['Policy_No'] : '' ;?>');
    $('#Holder_Name_1').html('<?php echo isset($_SESSION['Holder_Name']) ? $_SESSION['Holder_Name'] : '' ;?>');
    $('#Insured_Name_1').html('<?php echo isset($_SESSION['Insured_Name']) ? $_SESSION['Insured_Name'] : '' ;?>');
    $('#Claimant_Name_1').html('<?php echo isset($_SESSION['Claimant_Name']) ? $_SESSION['Claimant_Name'] : '' ;?>');
    $('#Person_Name_1').html('<?php echo isset($_SESSION['Person_Name']) ? $_SESSION['Person_Name'] : '' ;?>');
    $('#Mobile_No_1').html('<?php echo isset($_SESSION['Mobile_No']) ? $_SESSION['Mobile_No'] : '' ;?>');
    $('#email_Address_1').html('<?php echo isset($_SESSION['email_Address']) ? $_SESSION['email_Address'] : '' ;?>');
    var filename = 
            '<?php echo isset($_SESSION['Loss_damage_Upload']) ? $_SESSION['Loss_damage_Upload'] : '' ;?>' + ',' +
            '<?php echo isset($_SESSION['Business_Upload']) ? $_SESSION['Business_Upload'] : '' ;?>' + ',' +
            '<?php echo isset($_SESSION['Loss_Money_Upload']) ? $_SESSION['Loss_Money_Upload'] : '' ;?>' + ',' +
            '<?php echo isset($_SESSION['Public_Upload']) ? $_SESSION['Public_Upload'] : '' ;?>' + ',' +
            '<?php echo isset($_SESSION['Plate_Glass_Upload']) ? $_SESSION['Plate_Glass_Upload'] : '' ;?>' + ',' +
            '<?php echo isset($_SESSION['Others_Upload']) ? $_SESSION['Others_Upload'] : '' ;?>' + ',' +
            '<?php echo isset($_SESSION['Personal_Assault_Upload']) ? $_SESSION['Personal_Assault_Upload'] : '' ;?>' + ',' +
            '<?php echo isset($_SESSION['Employee_Compensation_Upload']) ? $_SESSION['Employee_Compensation_Upload'] : '' ;?>';
    $('#file_name').val(filename);
    if('<?php echo isset($_SESSION['Claims_Info_Checked']) ? $_SESSION['Claims_Info_Checked'] : '' ;?>' == '1'){
        $('#Claims_Information_2').show();
        $('#Claims_Information_view').html('<?php echo isset($_SESSION['Claims_Info']) ? $_SESSION['Claims_Info'] : '' ;?>');
    }

    if(Claims_Type_Array[0] == '1'){
        $('#damage2').show();
        if('<?php echo isset($_SESSION['Loss_damage_Details']) ? $_SESSION['Loss_damage_Details'] : '' ;?>'){
            var Loss_damage_Details = '<?php echo isset($_SESSION['Loss_damage_Details']) ? $_SESSION['Loss_damage_Details'] : '' ;?>';
            var details = JSON.parse(Loss_damage_Details);
            var counter = 0, insert_id = 1;;
            for (var key in details) {
                var dep_data = [];
                for (var key_val in details[key]) {
                    dep_data[counter] = details[key][key_val];
                    counter++;
                }
                if(dep_data[0]){
                    var number = dep_data[5];
                    var E = Number(number.replace(/[^0-9\.]+/g,""));
                    $('#accordion').append([
                        '<div id="card_'+insert_id+'">',
                            '<div class="card" >',
                            '<div class="card-header">',
                                '<h5 class="mb-0">',
                                    '<button onclick="stop(event)" class="btn btn-link" data-toggle="collapse" data-target="#collapse'+insert_id+'" >',
                                        '<i class="indicator fa fa-chevron-circle-down" aria-hidden="true" style="padding-right: 12px;"></i><span>Item ' + insert_id,
                                    '</span></button>',
                                '</h5>',
                            '</div>',

                            '<div id="collapse'+insert_id+'" class="collapse">',
                                '<div class="card-body">',
                                        // '<div class="next-previous">',
                                        //     '<strong style="font-size:25px;"></strong>',
                                        //     '<div class="upload_layout">',
                                        //         '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit" onclick="InsertEdit(event,'+insert_id+')"><i class="fa fa-pencil"></i></button>',
                                        //         '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table('+insert_id+');delete_data('+insert_id+');"><i class="fa fa-trash-o"></i></button>',
                                        //     '</div>',
                                        // '</div>',
                                        '<div style="padding:10px;">',
                                            '<div class="moblie_view">',
                                                '<strong class="mobile_title" >Description of property</strong>',
                                                '<label class="moblie_insert">'+dep_data[1]+'</label>',
                                            '</div>',
                                            '<div class="moblie_view">',
                                                '<strong class="mobile_title" >Date of purchase or installation</strong>',
                                                '<label class="moblie_insert">'+dep_data[2]+'</label>',
                                            '</div>',
                                            '<div class="moblie_view">',
                                                '<strong class="mobile_title" >Original purchase price(HK$)</strong>',
                                                '<label class="moblie_insert">'+dep_data[3]+'</label>',
                                            '</div>',
                                            '<div class="moblie_view">',
                                                '<strong class="mobile_title" >Repair / Replacement cost (if applicable) (HK$)</strong>',
                                                '<label class="moblie_insert">'+dep_data[4]+'</label>',
                                            '</div>',
                                            '<div class="moblie_view">',
                                                '<strong class="mobile_title" >Claims amount (HK$)</strong>',
                                                '<label class="moblie_insert">'+dep_data[5]+'</label>',
                                            '</div>',
                                        '</div>',
                                    '</div>',
                                '</div>',
                            '</div>',
                            '</div>',
                        '</div>'
                    ].join(''));

                    $('#tbody').append([
                        '<tr class="table_tr_'+ insert_id+' table_tbody">',
                            '<td><span>'+insert_id+'</span></td>',
                            '<td>'+dep_data[1]+'</td>',
                            '<td>'+dep_data[2]+'</td>',
                            '<td>'+dep_data[3]+'</td>',
                            '<td>'+dep_data[4]+'</td>',
                            '<td>'+dep_data[5]+'</td>',
                            // '<td>',
                            //     '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit" onclick="InsertEdit(event,'+insert_id+')"><i class="fa fa-pencil"></i></button>',
                            //     '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table('+insert_id+');getItemNumber();delete_data('+insert_id+');"><i class="fa fa-trash-o"></i></button>',
                            // '</td>',
                        '</tr>'
                    ].join(''));

                }

                if(dep_data[0] == ''){
                    $('#subtotal_1').html(dep_data[5]);
                    $('#subtotal').html(dep_data[5]);
                }
                counter = 0;
                insert_id++;
            }
        }
        var Loss_damage_Details_1 = '<?php echo isset($_SESSION['Loss_damage_Details_1']) ? $_SESSION['Loss_damage_Details_1'] : '' ;?>';
        var details = JSON.parse(Loss_damage_Details_1);
        var counter_1 = 0;
        for (var key in details) {
            var dep_data = [];
            for (var key_val in details[key]) {
                dep_data[counter_1] = details[key][key_val];
                counter_1++;
            }
            if(dep_data[0]){
                var number = dep_data[4];
                var E = Number(number.replace(/[^0-9\.]+/g,""));
                $('#tbody_1').append([
                    '<tr class="table_tr_1_'+ insert_id_1+' table_tbody">',
                        '<td><span>'+insert_id_1+'</span></td>',
                        '<td>'+dep_data[1]+'</td>',
                        '<td>'+dep_data[2]+'</td>',
                        '<td>'+dep_data[3]+'</td>',
                        '<td>'+dep_data[4]+'</td>',
                        // '<td>',
                        //     '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_1" onclick="InsertEdit_1(event,'+insert_id_1+')"><i class="fa fa-pencil"></i></button>',
                        //     '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_1('+insert_id_1+');getItemNumber_1();delete_data_1('+insert_id_1+');"><i class="fa fa-trash-o"></i></button>',
                        // '</td>',
                    '</tr>'
                ].join(''));

                $('#accordion_1').append([
                    '<div id="card_1_'+insert_id_1+'">',
                        '<div class="card" >',
                            '<div class="card-header">',
                                '<h5 class="mb-0">',
                                    '<button onclick="stop(event)" class="btn btn-link" data-toggle="collapse" data-target="#collapse_1_'+insert_id_1+'" >',
                                        '<i class="indicator fa fa-chevron-circle-down" aria-hidden="true" style="padding-right: 12px;"></i><span>Item ' + insert_id_1,
                                    '</span></button>',
                                '</h5>',
                            '</div>',

                            '<div id="collapse_1_'+insert_id_1+'" class="collapse">',
                            '<div class="card-body">',
                                // '<div class="next-previous">',
                                //     '<strong style="font-size:25px;"></strong>',
                                //     '<div class="upload_layout">',
                                //         '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_1" onclick="InsertEdit_1(event,'+insert_id_1+')"><i class="fa fa-pencil"></i></button>',
                                //         '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_1('+insert_id_1+');delete_data_1('+insert_id_1+');"><i class="fa fa-trash-o"></i></button>',
                                //     '</div>',
                                // '</div>',
                                '<div style="padding:10px;">',
                                    '<div class="moblie_view">',
                                    '<strong class="mobile_title" >Description of property</strong>',
                                    '<label class="moblie_insert">'+dep_data[1]+'</label>',
                                    '</div>',
                                    '<div class="moblie_view">',
                                        '<strong class="mobile_title" >Date of purchase or installation</strong>',
                                        '<label class="moblie_insert">'+dep_data[2]+'</label>',
                                    '</div>',
                                    '<div class="moblie_view">',
                                        '<strong class="mobile_title" >Original purchase price(HK$)</strong>',
                                        '<label class="moblie_insert">'+dep_data[3]+'</label>',
                                    '</div>', 
                                    '<div class="moblie_view">',
                                        '<strong class="mobile_title" >Claims amount (HK$)</strong>',
                                        '<label class="moblie_insert">'+dep_data[4]+'</label>',
                                    '</div>',
                                '</div>',
                                '</div>',
                            '</div>',
                            '</div>',
                        '</div>',
                    '</div>'
                ].join(''));

            }

            if(dep_data[0] == ''){
                $('#subtotal_1_form_3').html(dep_data[4]);
                $('#subtotal_form_3').html(dep_data[4]);
            }
            counter_1 = 0;
            insert_id_1++;
        }

        let dollarUSLocale = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
        $('#Total_sum').html(dollarUSLocale.format(Number($('#subtotal_1_form_3').html().replace(/[$,]/g,''))*1 + Number($('#subtotal_1').html().replace(/[$,]/g,''))*1));
    
        if('<?php echo isset($_SESSION['Loss_damage_Upload']) ? $_SESSION['Loss_damage_Upload'] : '' ;?>'){
            $('#damage_show_5').html(replace('<?php echo isset($_SESSION['Loss_damage_Upload_old_split']) ? $_SESSION['Loss_damage_Upload_old_split'] : '' ;?>'));
        }
    }
    if(Claims_Type_Array[1] == '1'){
        $('#Business_Interruption').show();
        $('#Business_Interruption_show_1').html('<?php echo isset($_SESSION['Period_B_I_form_3']) ? $_SESSION['Period_B_I_form_3'] : '' ;?>');
        var Business_Details = '<?php echo isset($_SESSION['Business_Details']) ? $_SESSION['Business_Details'] : '' ;?>';
        var details = JSON.parse(Business_Details);
        var counter_2 = 0;
        for (var key in details) {
            var dep_data = [];
            for (var key_val in details[key]) {
                dep_data[counter_2] = details[key][key_val];
                counter_2++;
            }
            if(dep_data[0]){
                var number = dep_data[4];
                var E = Number(number.replace(/[^0-9\.]+/g,""));
                $('#tbody_2').append([
                    '<tr class="table_tr_2_'+ insert_id_2+' table_tbody">',
                        '<td><span>'+insert_id_2+'</span></td>',
                        '<td>'+dep_data[1]+'</td>',
                        '<td>'+dep_data[2]+'</td>',
                        '<td>'+dep_data[3]+'</td>',
                        '<td>'+dep_data[4]+'</td>',
                        // '<td>',
                        // '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_2" onclick="InsertEdit_2(event,'+insert_id_2+')"><i class="fa fa-pencil"></i></button>',
                        // '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_2('+insert_id_2+');getItemNumber_2();delete_data_2('+insert_id_2+');"><i class="fa fa-trash-o"></i></button>',
                        // '</td>',
                    '</tr>'
                ].join(''));

                $('#accordion_2').append([
                    '<div id="card_2_'+insert_id_2+'">',
                    '<div class="card" >',
                        '<div class="card-header">',
                        '<h5 class="mb-0">',
                            '<button onclick="stop(event)" class="btn btn-link" data-toggle="collapse" data-target="#collapse_2_'+insert_id_2+'" >',
                                '<i class="indicator fa fa-chevron-circle-down" aria-hidden="true" style="padding-right: 12px;"></i><span>Item ' + insert_id_2,
                            '</span></button>',
                        '</h5>',
                        '</div>',

                        '<div id="collapse_2_'+insert_id_2+'" class="collapse">',
                        '<div class="card-body">',
                            // '<div class="next-previous">',
                            //     '<strong style="font-size:25px;"></strong>',
                            //     '<div class="upload_layout">',
                            //         '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_2" onclick="InsertEdit_2(event,'+insert_id_2+')"><i class="fa fa-pencil"></i></button>',
                            //         '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_2('+insert_id_2+');delete_data_2('+insert_id_2+');"><i class="fa fa-trash-o"></i></button>',
                            //     '</div>',
                            // '</div>',
                            '<div style="padding:10px;">',
                                '<div class="moblie_view">',
                                '<strong class="mobile_title" >Description of property</strong>',
                                '<label class="moblie_insert">'+dep_data[1]+'</label>',
                                '</div>',
                                '<div class="moblie_view">',
                                    '<strong class="mobile_title" >Date of purchase or installation</strong>',
                                    '<label class="moblie_insert">'+dep_data[2]+'</label>',
                                '</div>',
                                '<div class="moblie_view">',
                                    '<strong class="mobile_title" >Original purchase price(HK$)</strong>',
                                    '<label class="moblie_insert">'+dep_data[3]+'</label>',
                                '</div>', 
                                '<div class="moblie_view">',
                                    '<strong class="mobile_title" >Claims amount (HK$)</strong>',
                                    '<label class="moblie_insert">'+dep_data[4]+'</label>',
                                '</div>',
                            '</div>',
                            '</div>',
                        '</div>',
                        '</div>',
                    '</div>',
                    '</div>'
                ].join(''));

            }

            if(dep_data[0] == ''){
                $('#subtotal_2_form_3').html(dep_data[4]);
                $('#subtotal2_form_3').html(dep_data[4]);
            }
            counter_2 = 0;
            insert_id_2++;
        }
        if('<?php echo isset($_SESSION['Business_Upload']) ? $_SESSION['Business_Upload'] : '' ;?>'){
            $('#Business_Interruption_show_2').html(replace('<?php echo isset($_SESSION['Business_Upload_old_split']) ? $_SESSION['Business_Upload_old_split'] : '' ;?>'));
        }
    }
    if(Claims_Type_Array[2] == '1'){
        $('#Loss_Money').show();
        $('#Loss_Money_show_1').html('<?php echo isset($_SESSION['Reason_claims_form_3']) ? $_SESSION['Reason_claims_form_3'] : '' ;?>');
        $('#Loss_Money_show_2').html('<?php echo isset($_SESSION['Loss_Total_form_3']) ? $_SESSION['Loss_Total_form_3'] : '' ;?>');
        $('#Loss_Money_show_3').html(replace('<?php echo isset($_SESSION['Loss_Money_Upload_old_split']) ? $_SESSION['Loss_Money_Upload_old_split'] : '' ;?>'));
        
    }
    if(Claims_Type_Array[3] == '1'){
        $('#public_2').show();
        $('#public_show_1').html('<?php echo isset($_SESSION['Public_Liability_form_2']) ? $_SESSION['Public_Liability_form_2'] : '' ;?>');
        $('#public_show_2').html('<?php echo isset($_SESSION['Details_extent_of_damage_to_Property_of_other_form_2']) ? $_SESSION['Details_extent_of_damage_to_Property_of_other_form_2'] : '' ;?>');
        $('#public_show_3').html('<?php echo isset($_SESSION['Name_of_the_injured_form_2']) ? $_SESSION['Name_of_the_injured_form_2'] : '' ;?>');
        $('#public_show_4').html('<?php echo isset($_SESSION['Details_extent_of_injury_of_other_form_2']) ? $_SESSION['Details_extent_of_injury_of_other_form_2'] : '' ;?>');
        $('#public_Q4_result').html('<?php echo isset($_SESSION['public_Q3_textarea1_form_2']) ? $_SESSION['public_Q3_textarea1_form_2'] : '' ;?>');
        var public_Q_Type = '<?php echo isset($_SESSION['public_Q_Type']) ? $_SESSION['public_Q_Type'] : '' ;?>';
        var public_Q_Type_Array = public_Q_Type.split('||');
        if(public_Q_Type_Array[0] == '1'){
            $('#public_Q1_result').html('Yes,' + '<?php echo isset($_SESSION['public_Q1_textarea_form_2']) ? $_SESSION['public_Q1_textarea_form_2'] : '' ;?>');
        }else{
            $('#public_Q1_result').html('No');
        }

        if(public_Q_Type_Array[1] == '1'){
            $('#public_Q2_result').html('Yes,' + '<?php echo isset($_SESSION['public_Q2_textarea_form_2']) ? $_SESSION['public_Q2_textarea_form_2'] : '' ;?>');
        }else{
            $('#public_Q2_result').html('No');
        }

        if(public_Q_Type_Array[2] == '1'){
            $('#public_Q3_result').html('Yes,' + '<?php echo isset($_SESSION['public_Q3_textarea_form_2']) ? $_SESSION['public_Q3_textarea_form_2'] : '' ;?>');
        }else{
            $('#public_Q3_result').html('No');
        }
        $('#public_show_5').html(replace('<?php echo isset($_SESSION['Public_Upload_old_split']) ? $_SESSION['Public_Upload_old_split'] : '' ;?>'));
        
    }
    if(Claims_Type_Array[4] == '1'){
        $('#Personal_Assault').show();
        $('#Personal_Assault_show_1').html('<?php echo isset($_SESSION['Name_I_E_form_3']) ? $_SESSION['Name_I_E_form_3'] : '' ;?>');
        $('#Personal_Assault_show_2').html('<?php echo isset($_SESSION['Name_C_form_3']) ? $_SESSION['Name_C_form_3'] : '' ;?>');
        $('#Personal_Assault_show_3').html('<?php echo isset($_SESSION['Reason_Claims_P_A']) ? $_SESSION['Reason_Claims_P_A'] : '' ;?>');
        $('#Personal_Assault_show_4').html(replace('<?php echo isset($_SESSION['Personal_Assault_Upload_old_split']) ? $_SESSION['Personal_Assault_Upload_old_split'] : '' ;?>'));
        
    }
    if(Claims_Type_Array[5] == '1'){
        $('#Plate_Glass').show();
        $('#Plate_Glass_show_1').html('<?php echo isset($_SESSION['Reason_claims_Plate_form_3']) ? $_SESSION['Reason_claims_Plate_form_3'] : '' ;?>');
        $('#Plate_Glass_show_2').html('<?php echo isset($_SESSION['Loss_Total_Plate_form_3']) ? $_SESSION['Loss_Total_Plate_form_3'] : '' ;?>');
        $('#Plate_Glass_show_3').html(replace('<?php echo isset($_SESSION['Plate_Glass_Upload_old_split']) ? $_SESSION['Plate_Glass_Upload_old_split'] : '' ;?>'));
        
    }
    if(Claims_Type_Array[6] == '1'){
        $('#Employee_Compensation').show();
        $('#Employee_Compensation_show_1').html('<?php echo isset($_SESSION['Date_injury']) ? $_SESSION['Date_injury'] : '' ;?>');
        $('#Employee_Compensation_show_2').html('<?php echo isset($_SESSION['Description_incident']) ? $_SESSION['Description_incident'] : '' ;?>');
        $('#Employee_Compensation_show_3').html('<?php echo isset($_SESSION['Sick_leave']) ? $_SESSION['Sick_leave'] : '' ;?>');
        $('#Employee_Compensation_show_4').html('<?php echo isset($_SESSION['Nature_injury']) ? $_SESSION['Nature_injury'] : '' ;?>');
        $('#Employee_Compensation_show_5').html(replace('<?php echo isset($_SESSION['Employee_Compensation_Upload_old_split']) ? $_SESSION['Employee_Compensation_Upload_old_split'] : '' ;?>'));
        
    }
    if(Claims_Type_Array[7] == '1'){
        $('#Others').show();
        $('#Others_show_1').html('<?php echo isset($_SESSION['Reason_claims_Others_form_3']) ? $_SESSION['Reason_claims_Others_form_3'] : '' ;?>');
        $('#Others_show_2').html('<?php echo isset($_SESSION['Loss_Total_Others_form_3']) ? $_SESSION['Loss_Total_Others_form_3'] : '' ;?>');
        $('#Others_show_3').html(replace('<?php echo isset($_SESSION['Others_Upload_old_split']) ? $_SESSION['Others_Upload_old_split'] : '' ;?>'));
        
    }
    
    $('#user_show_1').html('<?php echo isset($_SESSION['User_Name']) ? $_SESSION['User_Name'] : '' ;?>');
    $('#user_show_2').html('<?php echo isset($_SESSION['User_Submission']) ? $_SESSION['User_Submission'] : '' ;?>');


    //////////////////////////////////////////////

    $('#General_show_1').html('<?php echo isset($_SESSION['datepicker1_form_3']) ? $_SESSION['datepicker1_form_3'] : '' ;?>');
    $('#General_show_2').html('<?php echo isset($_SESSION['Location_of_incident_form_3']) ? $_SESSION['Location_of_incident_form_3'] : '' ;?>');
    $('#General_show_3').html('<?php echo isset($_SESSION['Description_of_incident_form_3']) ? $_SESSION['Description_of_incident_form_3'] : '' ;?>');
    var General_Q_Type = '<?php echo isset($_SESSION['General_Q_Type']) ? $_SESSION['General_Q_Type'] : '' ;?>';
    var General_Q_Type_Array = General_Q_Type.split('||');
    if(General_Q_Type_Array[0] == '2'){
        $('#General_Q1_result').html('Yes,' + '<?php echo isset($_SESSION['Q1_option1_textarea_form_3']) ? $_SESSION['Q1_option1_textarea_form_3'] : '' ;?>');
    }else if (General_Q_Type_Array[0] == '1') {
        $('#General_Q1_result').html('No');
    } else {
        $('#General_Q1_result').html('Not applicable');
    }

    if(General_Q_Type_Array[1] == '1'){
        $('#General_Q2_result').html('Yes,' + '<?php echo isset($_SESSION['Q2_option1_textarea_form_3']) ? $_SESSION['Q2_option1_textarea_form_3'] : '' ;?>');
    }else{
        $('#General_Q2_result').html('No');
    }

    if(General_Q_Type_Array[2] == '1'){
        $('#General_Q3_result').html('Yes,' + '<?php echo isset($_SESSION['Q3_option1_textarea_form_3']) ? $_SESSION['Q3_option1_textarea_form_3'] : '' ;?>');
    }else{
        $('#General_Q3_result').html('No');
    }

    if(General_Q_Type_Array[3] == '1'){
        $('#General_Q4_result').html('Yes');
    }else{
        $('#General_Q4_result').html('No');
    }

    if(General_Q_Type_Array[4] == '1'){
        $('#General_Q5_result').html('Yes,' + '<?php echo isset($_SESSION['Q5_option1_textarea_form_3']) ? $_SESSION['Q5_option1_textarea_form_3'] : '' ;?>');
    }else{
        $('#General_Q5_result').html('No');
    }

</script>