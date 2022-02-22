<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include("design.php");
?>
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
                            <li id="payment" onclick="navigation('payment')">Review</li>
                            <li id="confirm" onclick="navigation('confirm')">REF.NO</li>
                        </ul> <!-- fieldsets -->

                    </form>
                </div>
            </div>
        </div>
      
        <div id="myTab1Content" class="tab-content">
            <div id="home1" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5 active show" style="padding-top:0px !important">
                <form class="needs-validation1" novalidate>
                
                    <div class="row">

                        <!-- //////////////////new form 3//////////////// -->

                        <div class="Claims_top_ttt col-md-12 check-box-padding">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">General</legend>
                                <div class="magin_bottom_selected_form_2">
                                    <div><label >Date & time of accident</label> </div>
                                    <div><input  class="form-control" id="datepicker1_form_3"  required></div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div><label >Location of incident</label> </div>
                                    <div><input  class="form-control" id="Location_of_incident_form_3"  required></div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div><label >Description of incident</label> </div>
                                    <div><textarea  class="md-textarea form-control" rows="2" id="Description_of_incident_form_3" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q1 : Is there any sign of forcible entry or exit at the premises in case of theft or burglary loss?
                                    </div>
                                    <div class="container">
                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q1_option_form_3" id="Q1_option1_form_3">
                                        <label class="form-check-label" for="Q1_option1_form_3">
                                            Yes, please state how did the culprit(s) enter the premises. 			
                                        </label>
                                        </div>
                                        <div class="magin_bottom_selected_form_2"><textarea  class="md-textarea form-control" rows="2" id="Q1_option1_textarea_form_3" style="display:none" required></textarea></div>

                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q1_option_form_3" id="Q1_option2_form_3" checked>
                                        <label class="form-check-label" for="Q1_option2_form_3">
                                            No
                                        </label>
                                        </div>

                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q1_option_form_3" id="Q1_option3_form_3" checked>
                                        <label class="form-check-label" for="Q1_option3_form_3">
                                            Not applicable
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q2 : Has/ Will the incident been reported/ be reported to the local police/ management office/ any other Authorit(ies)/ part(ies)?						
                                    </div>
                                    <div class="container">
                                    <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q2_option_form_3" id="Q2_option1_form_3">
                                        <label class="form-check-label" for="Q2_option1_form_3">
                                            Yes, please state details (e.g. police report number, etc)			
                                        </label>
                                    </div>
                                    <div class="magin_bottom_selected_form_2"><textarea  class="md-textarea form-control" rows="2" id="Q2_option1_textarea_form_3" style="display:none" required></textarea></div>

                                    <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q2_option_form_3" id="Q2_option2_form_3" checked>
                                        <label class="form-check-label" for="Q2_option2_form_3">
                                            No
                                        </label>
                                    </div>

                                    </div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q3 : Have you lodged/ Are you going to lodge complaint/ claim against any other part(ies) concerning the loss/damage?						
                                    </div>
                                    <div class="container">
                                    <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q3_option_form_3" id="Q3_option1_form_3">
                                        <label class="form-check-label" for="Q3_option1_form_3">
                                            Yes, please state details
                                        </label>
                                    </div>
                                    <div class="magin_bottom_selected_form_2"><textarea  class="md-textarea form-control" rows="2" id="Q3_option1_textarea_form_3" style="display:none" required></textarea></div>

                                    <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q3_option_form_3" id="Q3_option2_form_3" checked>
                                        <label class="form-check-label" for="Q3_option2_form_3">
                                            No
                                        </label>
                                    </div>

                                    </div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q4 : Are you the owner of damaged or lost item(s)/propert(ies)?			
                                    </div>
                                    <div class="check-box">
                                    <div class="col-md-6 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q4_option_form_3" id="Q4_option1_form_3">
                                        <label class="form-check-label" for="Q4_option1_form_3">
                                        Yes
                                        </label>
                                    </div>

                                    <div class="col-md-6 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q4_option_form_3" id="Q4_option2_form_3" checked>
                                        <label class="form-check-label" for="Q4_option2_form_3">
                                        No
                                        </label>
                                    </div>

                                    </div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q5 : Are the Insured also insured with any other insurance for the Insured propert(ies) as a result of the same incident? 						
                                    </div>
                                    <div class="container">
                                    <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q5_option_form_3" id="Q5_option1_form_3">
                                        <label class="form-check-label" for="Q5_option1_form_3">
                                            Yes, please state details
                                        </label>
                                    </div>
                                    <div class="magin_bottom_selected_form_2"><textarea  class="md-textarea form-control" rows="2" id="Q5_option1_textarea_form_3" style="display:none" required></textarea></div>

                                    <div class="col-md-12 magin_bottom_selected_form_2">
                                        <input class="form-check-input" type="radio" name="Q5_option_form_3" id="Q5_option2_form_3" checked>
                                        <label class="form-check-label" for="Q5_option2_form_3">
                                            No
                                        </label>
                                    </div>

                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Loss_d_c_s_form_3" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Loss or damaged to Content / Stock </legend>
                                    <div class="container">
                                        <div style="text-align: end; padding-top:20px" >
                                            <button type="button" class = "btn btn-outline-primary" data-toggle="modal" data-target="#myModal">Add</button>
                                        </div>
                                        <div class="col-md-12 check-box-padding"><label class="Claims-type">Details of damaged or lost properties</label></div>
                                        
                                        <div class="card card-cascade narrower" id="first" style="margin-bottom:30px">
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
                                                            <th style="width:87px">Status</th>
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
                                                        <td></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>

                                        <div style="text-align: end; padding-top:20px" >
                                            <button type="button" class = "btn btn-outline-primary" data-toggle="modal" data-target="#myModal_1">Add</button>
                                        </div>

                                        <div class="col-md-12 check-box-padding"><label class="Claims-type">Details of other claim item(s)</label></div>
                                        
                                        <div class="card card-cascade narrower" id="second" style="margin-bottom:30px">
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
                                                            <th style="width:87px">Status</th>
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
                                                            <td> </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="Total_sum">
                                        <div style="padding-left:12px" class="sub_width">Total claimed amount HK$ :</div>
                                        <div id="Total_sum">0</div>
                                    </div>

                                    <div class="row check-box" style="margin-bottom:10px"> 
                                    <div class="col-md-6">
                                        <label class="Claims-type">Upload (if any applicable)</label>
                                        <ol>
                                            <li>Photograph showing the damaged propert (ies)</li>
                                            <li>Purchase invoice / receipt of the lost/ damaged propert(ies)</li>
                                            <li>Repair/ Replacement quotation(s) of the lost/ damaged propert(ies)</li>
                                            <li>Other(s)</li>
                                        </ol>
                                        <label class="text-uppercase font_size" style="color:#e34141;text-align:justify"><strong>Note to Insured:</strong> All supporting document(s) should be submitted within 12 months from the date of incident, otherwise the right of claim shall be therefore forfeited. All original supporting documents should be properly kept.</label>

                                    </div>

                                    <div class="col-md-6" style="padding-top:3%">
                                        
                                        <div class="form-group">
                                            <div id="uploaded_file_9"></div>
                                                <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                                <input type="hidden" id="file_name_9">
                                                <input type="hidden" id="old_file_name_9">
                                                <input type="hidden" id="old_file_name_split_9">
                                                <div class="next-previous">
                                                <input id='files_9' type="file" class="" accept="image/*,.pdf" multiple >
                                                <button onclick="fileName_Delete(event,'files_9')" class = "btn btn-outline-danger file_delete">Delete</button>
                                                </div>
                                                <div class="invalid-feedback">Please provide value.</div>
                                            </div>
                                            <div class="form-group">
                                                <button onclick="data_upload(event,9)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                            </div>
                                        </div>

                                    </div>
                            </fieldset>
                        </div>

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Business_Interruption_form_3" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Business Interruption</legend>
                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Period of Business Interruption </label> </div>
                                        <div><input  class="form-control" id="Period_B_I_form_3" required></div>
                                    </div>
                                    <div class="container">

                                        <div style="text-align: end; padding-top:20px" >
                                            <button type="button" class = "btn btn-outline-primary" data-toggle="modal" data-target="#myModal_2">Add</button>
                                        </div>

                                        <div class="col-md-12 check-box-padding"><label class="Claims-type">Details of fee / additional expenditure</label></div>
                                        
                                        <div class="card card-cascade narrower" id="third" style="margin-bottom:30px">
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
                                                            <th style="width:87px">Status</th>
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
                                                            <td></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row check-box" style="margin-bottom:10px"> 
                                    <div class="col-md-6">
                                        <label class="Claims-type">Upload (if any applicable)</label>
                                        <ol>
                                            <li>Proof of claim</li>
                                            <li>Quotation(s) of any fee or additional expenditure</li>
                                            <li>Official fee / additional expenditure payment receipt</li>
                                            <li>Other(s)</li>
                                        </ol>
                                    </div>

                                    <div class="col-md-6" style="padding-top:3%">
                                        
                                        <div class="form-group">
                                            <div id="uploaded_file_10"></div>
                                                <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                                <input type="hidden" id="file_name_10">
                                                <input type="hidden" id="old_file_name_10">
                                                <input type="hidden" id="old_file_name_split_10">
                                                <div class="next-previous">
                                                <input id='files_10' type="file" class="" accept="image/*,.pdf" multiple >
                                                <button onclick="fileName_Delete(event,'files_10')" class = "btn btn-outline-danger file_delete">Delete</button>
                                                </div>
                                                <div class="invalid-feedback">Please provide value.</div>
                                            </div>
                                            <div class="form-group">
                                                <button onclick="data_upload(event,10)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                            </div>
                                        </div>

                                    </div>
                            </fieldset>
                        </div>

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Loss_Money" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Loss of Money</legend>

                                    <div class="container" style="margin-bottom:10px">
                                    <div><label >Reason of claims</label> </div>
                                    <div><textarea  class="md-textarea form-control" rows="2" id="Reason_claims_form_3" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>

                                    <div class="row Claims_top" style="margin-bottom:10px;display:flex">
                                    <div class="col-md-4" ><label style="padding-top:6px">Total Claimed amount HK$</label> </div>
                                    <div class="col-md-8"><input type="text" step="0.01" class="md-textarea form-control" id="Loss_Total_form_3" required><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>
                                    
                                    <div class="row check-box" style="margin-bottom:10px"> 
                                    <div class="col-md-6 ">
                                        <label class="Claims-type">Upload (if any applicable)</label>
                                        <ol>
                                            <li>Proof of claim</li>
                                            <li>Relevant accounting record</li>
                                            <li>Police statement</li>
                                            <li>Other(s)</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6" style="padding-top:3%">
                                        <div class="form-group">
                                            <div id="uploaded_file_11"></div>
                                            <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                            <input type="hidden" id="file_name_11">
                                            <input type="hidden" id="old_file_name_11">
                                            <input type="hidden" id="old_file_name_split_11">
                                            <div class="next-previous">
                                            <input id='files_11' type="file" class="" accept="image/*,.pdf" multiple >
                                            <button onclick="fileName_Delete(event,'files_11')" class = "btn btn-outline-danger file_delete">Delete</button>
                                            </div>
                                            <div class="invalid-feedback">Please provide value.</div>
                                        </div>
                                        <div class="form-group">
                                        <button onclick="data_upload(event,11)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                        </div>
                                    </div>
                                    </div>
                            </fieldset>
                        </div> 

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Public_Liability" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Public Liability</legend>
                                <div class="col-md-12 check-box-padding"><label class="Claims-type-form_2">Damage to Property of other(s)</label></div>
                                <div class="magin_bottom_selected_form_2">
                                    <div><label>Name of the property owner :</label> </div>
                                    <div><input class="form-control" id="Public_Liability_form_2" required></div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div><label>Details & extent of damage to Property of other(s) : </label> </div>
                                    <div><textarea  class="md-textarea form-control" rows="2" id="Details_extent_of_damage_to_Property_of_other_form_2" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                </div>

                                <div class="col-md-12 check-box-padding"><label class="Claims-type-form_2">Injury to other(s)</label></div>
                                <div class="magin_bottom_selected_form_2">
                                    <div><label>Name of the injured :</label> </div>
                                    <div><input class="form-control" id="Name_of_the_injured_form_2" required></div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div><label>Details & extent of injury of other(s) : </label> </div>
                                    <div><textarea  class="md-textarea form-control" rows="2" id="Details_extent_of_injury_of_other_form_2" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q1 : Was/Were other wrongdoer(s) involved in the same incident? 							
                                    </div>
                                    <div class="container">
                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                            <input class="form-check-input" type="radio" name="public_Q1_form_2" id="public_Q1_option1_form_2">
                                            <label class="form-check-label" for="public_Q1_option1_form_2">
                                                Yes, please state the name(s), address(es) & telephone No.(s) of the wrongdoer(s)									
                                            </label>
                                        </div>
                                        <div class="magin_bottom_selected_form_2"><textarea  class="md-textarea form-control" rows="2" id="public_Q1_textarea_form_2" style="display:none" required></textarea></div>

                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                            <input class="form-check-input" type="radio" name="public_Q1_form_2" id="public_Q1_option2_form_2" checked>
                                            <label class="form-check-label" for="public_Q1_option2_form_2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q2 : Has any communication, verbal or written, been made to you by or on behalf of any injured or owner(s) of the damaged property?							
                                    </div>
                                    <div class="container">
                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                            <input class="form-check-input" type="radio" name="public_Q2_form_2" id="public_Q2_option1_form_2">
                                            <label class="form-check-label" for="public_Q2_option1_form_2">
                                                Yes, please give particulars (any written communication being received must be forwarded to us immediately unanswered for our handling)														
                                            </label>
                                        </div>
                                        <div class="magin_bottom_selected_form_2"><textarea  class="md-textarea form-control" rows="2" id="public_Q2_textarea_form_2" style="display:none" required></textarea></div>

                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                            <input class="form-check-input" type="radio" name="public_Q2_form_2" id="public_Q2_option2_form_2" checked>
                                            <label class="form-check-label" for="public_Q2_option2_form_2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div class="alert alert-info fade in  show font_size">
                                        Q3 : Has any step been taken to compromise or settle the matter?							
                                    </div>
                                    <div class="container">
                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                            <input class="form-check-input" type="radio" name="public_Q3_form_2" id="public_Q3_option1_form_2">
                                            <label class="form-check-label" for="public_Q3_option1_form_2">
                                                Yes, please state the nature and by whom it was carried out with any compensation amount and withhold any further communication with any involved part(ies).							
                                            </label>
                                        </div>
                                        <div class="magin_bottom_selected_form_2"><textarea  class="md-textarea form-control" rows="2" id="public_Q3_textarea_form_2" style="display:none" required></textarea></div>

                                        <div class="col-md-12 magin_bottom_selected_form_2">
                                            <input class="form-check-input" type="radio" name="public_Q3_form_2" id="public_Q3_option2_form_2" checked>
                                            <label class="form-check-label" for="public_Q3_option2_form_2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="magin_bottom_selected_form_2">
                                    <div><label>State all Name(s), address(es) and telephone No.(s) of witness(es) of the incident, if any. </label> </div>
                                    <div><textarea class="md-textarea form-control" rows="2" id="public_Q3_textarea1_form_2" required=""></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                </div>

                                <div class="row check-box" style="margin-bottom:10px"> 
                                    <div class="col-md-6">
                                        <label class="Claims-type">Upload (if any applicable)</label>
                                        <ol>
                                            <li>Photograph of the scene</li>
                                            <li>Police Report</li>
                                            <li>Management Office report</li>
                                            <li>Other(s)</li>
                                        </ol>
                                    </div>

                                    <div class="col-md-6" style="padding-top:3%">
                                        
                                        <div class="form-group">
                                            <div id="uploaded_file_12"></div>
                                                <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                                <input type="hidden" id="file_name_12">
                                                <input type="hidden" id="old_file_name_12">
                                                <input type="hidden" id="old_file_name_split_12">
                                                <div class="next-previous">
                                                    <input id='files_12' type="file" class="" accept="image/*,.pdf" multiple >
                                                    <button onclick="fileName_Delete(event,'files_12')" class = "btn btn-outline-danger file_delete">Delete</button>
                                                </div>
                                                <div class="invalid-feedback">Please provide value.</div>
                                        </div>
                                        <div class="form-group">
                                            <button onclick="data_upload(event,12)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Personal_Assault" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Personal Assault</legend>
                                    
                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Name of injured employee:</label> </div>
                                        <div><input  class="form-control" id="Name_I_E_form_3"  required></div>
                                    </div>

                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Name of the claimant:</label> </div>
                                        <div><input  class="form-control" id="Name_C_form_3"  required></div>
                                    </div>

                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Reason of Claims:</label> </div>
                                        <div><textarea  class="md-textarea form-control" rows="2" id="Reason_Claims_P_A" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>

                                    
                                    <div class="row check-box" style="margin-bottom:10px"> 
                                    <div class="col-md-6 ">
                                        <label class="Claims-type">Upload (if any applicable)</label>
                                        <ol>
                                            <li>Proof of claim</li>
                                            <li>Medical Certificate /Report</li>
                                            <li>Other(s)</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6" style="padding-top:3%">
                                        <div class="form-group">
                                            <div id="uploaded_file_13"></div>
                                            <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                            <input type="hidden" id="file_name_13">
                                            <input type="hidden" id="old_file_name_13">
                                            <input type="hidden" id="old_file_name_split_13">
                                            <div class="next-previous">
                                            <input id='files_13' type="file" class="" accept="image/*,.pdf" multiple >
                                            <button onclick="fileName_Delete(event,'files_13')" class = "btn btn-outline-danger file_delete">Delete</button>
                                            </div>
                                            <div class="invalid-feedback">Please provide value.</div>
                                        </div>
                                        <div class="form-group">
                                        <button onclick="data_upload(event,13)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                        </div>
                                    </div>
                            </fieldset>
                        </div>

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Plate_Glass" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Plate Glass</legend>

                                    <div class="container" style="margin-bottom:10px">
                                    <div><label >Reason of claims</label> </div>
                                    <div><textarea  class="md-textarea form-control" rows="2" id="Reason_claims_Plate_form_3" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>

                                    <div class="row Claims_top" style="margin-bottom:10px;display:flex">
                                    <div class="col-md-4" ><label style="padding-top:6px">Total Claimed amount HK$</label> </div>
                                    <div class="col-md-8"><input type="text" step="0.01" class="md-textarea form-control" id="Loss_Total_Plate_form_3" required><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>
                                    
                                    <div class="row check-box" style="margin-bottom:10px"> 
                                    <div class="col-md-6 ">
                                        <label class="Claims-type">Upload (if any applicable)</label>
                                        <ol>
                                            <li>Photograph showing the damaged plate glass</li>
                                            <li>Repair/ Replacement quotation(s) of the damaged plate glass</li>
                                            <li>Official Repair / Replacement payment receipt</li>
                                            <li>Other</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6" style="padding-top:3%">
                                        <div class="form-group">
                                            <div id="uploaded_file_14"></div>
                                            <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                            <input type="hidden" id="file_name_14">
                                            <input type="hidden" id="old_file_name_14">
                                            <input type="hidden" id="old_file_name_split_14">
                                            <div class="next-previous">
                                            <input id='files_14' type="file" class="" accept="image/*,.pdf" multiple >
                                            <button onclick="fileName_Delete(event,'files_14')" class = "btn btn-outline-danger file_delete">Delete</button>
                                            </div>
                                            <div class="invalid-feedback">Please provide value.</div>
                                        </div>
                                        <div class="form-group">
                                        <button onclick="data_upload(event,14)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                        </div>
                                    </div>
                                    </div>
                            </fieldset>
                        </div> 

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Employee_Compensation" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Employee's Compensation</legend>

                                    <div class="container" style="margin-bottom:10px">
                                        <label style="border-bottom: 1px solid #deddf3;">Important Notes</label>
                                        <label style="text-align:justify; font-size:15px"><strong>1. </strong> Lodge your claim online with your supporting document(s) and a copy of the completed Notice of Accident (<font style="color:#e34141">download here</font>) including Notice of Accident Form 2, Form 2A or Form 2B, which is applicable.</label>
                                        <label style="text-align:justify; font-size:15px"><strong>2. </strong> <font style="text-decoration: underline;color:#e34141">The Employer of Insured person <font style="color:#673ab7">MUST</font> notify the Labour Department</font> within 14 days (in case of injury) or 7 days (in case of death) after the accident comes to knowledge. Please access to Employees' Compensation Section in the Labour Department's website <a href="https://www.labour.gov.hk/eng/public/content2_7.htm" style="color:#e34141">https://www.labour.gov.hk/eng/ public/ content2_7.htm</a> for more details.</label>
                                        <label style="text-align:justify; font-size:15px"><strong>3. </strong> Immediate make a report to the police for a traffic accident, robbery, or any case involving criminal acts and upload a copy of police report.</label>
                                    </div>

                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Date of injury:</label> </div>
                                        <div><input  class="form-control" id="Date_injury" required></div>
                                    </div>

                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Description of incident:</label> </div>
                                        <div><textarea  class="md-textarea form-control" rows="2" id="Description_incident" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>

                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Sick leave: </label> </div>
                                        <div><input  class="form-control" id="Sick_leave" required></div>
                                    </div>

                                    <div class="container" style="margin-bottom:10px">
                                        <div><label >Nature of injury:</label> </div>
                                        <div><textarea  class="md-textarea form-control" rows="2" id="Nature_injury" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>

                                    <div class="row check-box" style="margin-bottom:10px"> 
                                        <div class="col-md-6 ">
                                            <label class="Claims-type">Upload Documents</label>
                                            <ol>
                                                <li>Labour Department's Form 2/2A/2B</li>
                                                <li>Medical Receipt(s)</li>
                                                <li>Medical Certificate(s)/Report(s)</li>
                                                <li>Other(s)</li>
                                            </ol>
                                        </div>
                                        <div class="col-md-6" style="padding-top:3%">
                                            <div class="form-group">
                                                <div id="uploaded_file_15"></div>
                                                <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                                <input type="hidden" id="file_name_15">
                                                <input type="hidden" id="old_file_name_15">
                                                <input type="hidden" id="old_file_name_split_15">
                                                <div class="next-previous">
                                                    <input id='files_15' type="file" class="" accept="image/*,.pdf" multiple >
                                                    <button onclick="fileName_Delete(event,'files_15')" class = "btn btn-outline-danger file_delete">Delete</button>
                                                </div>
                                                <div class="invalid-feedback">Please provide value.</div>
                                            </div>
                                            <div class="form-group">
                                            <button onclick="data_upload(event,15)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                            </div>
                                        </div>
                                    </div>
                            </fieldset>
                        </div> 

                        <div class="Claims_top_ttt col-md-12 check-box-padding" id="Others" style="display:none">
                            <fieldset class="form-group border p-3 fieldset_background">
                                <legend class="w-auto px-2">Others</legend>

                                    <div class="container" style="margin-bottom:10px">
                                    <div><label >Reason of claims</label> </div>
                                    <div><textarea  class="md-textarea form-control" rows="2" id="Reason_claims_Others_form_3" required></textarea><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>

                                    <div class="row Claims_top" style="margin-bottom:10px;display:flex">
                                    <div class="col-md-4" ><label style="padding-top:6px">Total Claimed amount HK$</label> </div>
                                    <div class="col-md-8"><input type="text" step="0.01" class="md-textarea form-control" id="Loss_Total_Others_form_3" required><div class="invalid-feedback">Please provide value.</div></div>
                                    </div>
                                    
                                    <div class="row check-box" style="margin-bottom:10px"> 
                                    <div class="col-md-6 ">
                                        <label class="Claims-type">Upload (if any applicable)</label>
                                        <ol>
                                            <li>Photograph showing the damaged plate glass</li>
                                            <li>Repair/ Replacement quotation(s) of the damaged plate glass</li>
                                            <li>Official Repair / Replacement payment receipt</li>
                                            <li>Other</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6" style="padding-top:3%">
                                        <div class="form-group">
                                            <div id="uploaded_file_16"></div>
                                            <label style="font-size: 13px;">Select File to Upload(pdf, doc, image), The total size is less than 6MB.</label>
                                            <input type="hidden" id="file_name_16">
                                            <input type="hidden" id="old_file_name_16">
                                            <input type="hidden" id="old_file_name_split_16">
                                            <div class="next-previous">
                                            <input id='files_16' type="file" class="" accept="image/*,.pdf" multiple >
                                            <button onclick="fileName_Delete(event,'files_16')" class = "btn btn-outline-danger file_delete">Delete</button>
                                            </div>
                                            <div class="invalid-feedback">Please provide value.</div>
                                        </div>
                                        <div class="form-group">
                                        <button onclick="data_upload(event,16)" class = "btn btn-outline-primary col-md-12">UPLOAD</button>
                                        </div>
                                    </div>
                                    </div>
                            </fieldset>
                        </div> 

                        <!-- //////////////////new form 3//////////////// -->


                        

                        <div class="rrr col-md-12 check-box-padding">
                            <div class="row check-box" style="margin-bottom:10px"> 
                                <div class="col-md-12 ">
                                <label class="Claims-type" style='font-size: 20px;font-weight: bold;'>Declaration & Authorization	</label>
                                <ol style="padding-left:30px">
                                    <li>I/We declare that the above information is in all respect true and complete to the best of my/ our knowledge and belief</li>
                                    <li>It is agreed that upon request by XXXXX, I/We shall make a statutory declaration to re-affirm the genuineness of all information contained in this claim submission and</li>
                                    <li>I/We believe that the facts stated in this claim form are true and correct. I acknowledge that the Insurers will rely upon the information supplied by me/ the policyholder/ the insured person, which I verily and honestly believe to be true and correct, in prosecuting or defending any claims or proceedings in future, and the signatory/ the policyholders/ insured person under this policy, if so required by the Insurers, will be asked and are bound to sign any court documents on the basis of information provided herein.</li>
                                </ol>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-6 Claims_top" style="margin-bottom:10px">
                            <div class=" check-box-padding" ><label>Name of Applicant:</label> </div>
                            <div class=" check-box-padding"><input class="md-textarea form-control" id="Name_of_Applicant" required><div class="invalid-feedback">Please provide Name of Applicant.</div></div>
                        </div>

                        <div class="col-md-6 Claims_top" style="margin-bottom:10px">
                            <div class=" check-box-padding"><label >Submission Date</label> </div>
                            <div class=" check-box-padding"><input  class="form-control" id="datepicker_Submission" required><div class="invalid-feedback">Please provide Submission Date.</div></div>
                        </div>

                        </div>

                        </div>
                        
                        <div class=" col-md-12 check-box-padding">
                            <div class="col-md-12 check-box-padding next-previous " id="preview_next_2">
                                <div class="col-md-3" style="padding-bottom:10px"><button type = "button" class = "btn btn-outline-primary col-md-12" onclick="home_show()">PREVIOUS</button></div>
                                <div class="col-md-3" style="padding-bottom:10px"><button type = "submit" class = "btn btn-outline-success col-md-12" id="preview" >PREVIEW</button></div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
  </div>


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">1. Details of damaged or lost properties</h4>
            </div>
            <div class="modal-body">
            <div class="container" style="margin-bottom:10px">
                <div><label >Description of property</label> </div>
                <div><textarea  class="md-textarea form-control" rows="2" id="modal_Replacement_Reason"></textarea></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Date of purchase or installation(YYYY-MM-DD)</label> </div>
                <div><input class="form-control" id="datepicker14"></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Original purchase price(HK$)</label> </div>
                <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_price"></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Repair / Replacement cost (if applicable)(HK$)</label> </div>
                <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_cost"></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Claim amount(HK$)</label> </div>
                <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_amount"></div>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger col-md-2" data-dismiss="modal" id="close">Close</button>
            <button type="button" class="btn btn-outline-success col-md-2" id="modal_ok">OK</button>
            </div>
        </div>
        </div>
    </div>

    <div id="myModal_edit" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">1. Details of damaged or lost properties</h4>
            </div>
            <div class="modal-body">
            <div class="container" style="margin-bottom:10px">
                <div><label >Description of property</label> </div>
                <div><textarea  class="md-textarea form-control" rows="2" id="modal_Replacement_Reason_edit"></textarea></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Date of purchase or installation(YYYY-MM-DD)</label> </div>
                <div><input class="form-control" id="datepicker14_edit"></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Original purchase price(HK$)</label> </div>
                <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_price_edit"></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Repair / Replacement cost (if applicable)(HK$)</label> </div>
                <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_cost_edit"></div>
            </div>

            <div class="container" style="margin-bottom:10px">
                <div><label >Claim amount(HK$)</label> </div>
                <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_amount_edit"></div>
            </div>
            <input type="hidden" id="id">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger col-md-2" data-dismiss="modal" id="close_edit">Close</button>
            <button type="button" class="btn btn-outline-success col-md-2" onclick="modal_ok_edit()">OK</button>
            </div>
        </div>
        </div>
    </div>

    <div id="myModal_1" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">2. Details of other claim item(s)</h4>
            </div>
            <div class="modal-body">
                <div class="container" style="margin-bottom:10px">
                    <div><label >Description of item</label> </div>
                    <div><textarea  class="md-textarea form-control" rows="2" id="modal_Description_item"></textarea></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Reason of cost(s) / expense(s) incurred</label> </div>
                    <div><input class="form-control" id="modal_Reason_cost"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Date of purchase or installation (DDMMYYYY)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="form-control" id="modal_date"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Claim amount(HK$)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_amount_1"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger col-md-2" data-dismiss="modal" id="close_1">Close</button>
                <button type="button" class="btn btn-outline-success col-md-2" id="modal_ok_1">OK</button>
            </div>
        </div>
        </div>
    </div>

    <div id="myModal_edit_1" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">2. Details of other claim item(s)</h4>
            </div>
            <div class="modal-body">
                <div class="container" style="margin-bottom:10px">
                    <div><label >Description of item</label> </div>
                    <div><textarea  class="md-textarea form-control" rows="2" id="modal_Description_item_edit"></textarea></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Reason of cost(s) / expense(s) incurred</label> </div>
                    <div><input class="form-control" id="modal_Reason_cost_edit"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Date of purchase or installation (DDMMYYYY)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="form-control" id="modal_date_edit"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Claim amount(HK$)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_amount_edit_1"></div>
                </div>
            </div>
            <input type="hidden" id="id_1">
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger col-md-2" data-dismiss="modal" id="close_edit_1">Close</button>
                <button type="button" class="btn btn-outline-success col-md-2" onclick="modal_ok_edit_1()">OK</button>
            </div>
        </div>
        </div>
    </div>

    <div id="myModal_2" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Details of fee / additional expenditure </h4>
            </div>
            <div class="modal-body">
                <div class="container" style="margin-bottom:10px">
                    <div><label >Description of fee / additional expenditure</label> </div>
                    <div><textarea  class="md-textarea form-control" rows="2" id="modal_Description_fee"></textarea></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Reason of fee / additional expenditure incurred</label> </div>
                    <div><input class="form-control" id="modal_Reason_fee"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Date of fee / additional expenditure incurred(YYYYMMDD)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="form-control" id="modal_date_fee"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Claim amount(HK$)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_amount_2"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger col-md-2" data-dismiss="modal" id="close_2">Close</button>
                <button type="button" class="btn btn-outline-success col-md-2" id="modal_ok_2">OK</button>
            </div>
        </div>
        </div>
    </div>

    <div id="myModal_edit_2" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Details of fee / additional expenditure </h4>
            </div>
            <div class="modal-body">
                <div class="container" style="margin-bottom:10px">
                    <div><label >Description of fee / additional expenditure</label> </div>
                    <div><textarea  class="md-textarea form-control" rows="2" id="modal_Description_fee_edit"></textarea></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Reason of fee / additional expenditure incurred</label> </div>
                    <div><input class="form-control" id="modal_Reason_fee_edit"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Date of fee / additional expenditure incurred(YYYYMMDD)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="form-control" id="modal_date_fee_edit"></div>
                </div>

                <div class="container" style="margin-bottom:10px">
                    <div><label >Claim amount(HK$)</label> </div>
                    <div class="col-md-12 check-box-padding"><input class="md-textarea form-control" step="0.01" type="text" id="modal_amount_edit_2"></div>
                </div>
            </div>
            <input type="hidden" id="id_2">
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger col-md-2" data-dismiss="modal" id="close_edit_2">Close</button>
                <button type="button" class="btn btn-outline-success col-md-2" onclick="modal_ok_edit_2()">OK</button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
        // Question 1 option
        $('#Q1_option1_form_3').click(function() {
            if ($(this).is(':checked')) {
                $("#Q1_option1_textarea_form_3").show();
            }
        });
        $('#Q1_option2_form_3').click(function() {
            if ($(this).is(':checked')) {
                $("#Q1_option1_textarea_form_3").hide();
            }
        });
        $('#Q1_option3_form_3').click(function() {
            if ($(this).is(':checked')) {
                $("#Q1_option1_textarea_form_3").hide();
            }
        });
        // End Question 1 option

        // Question 2 option
        $('#Q2_option1_form_3').click(function() {
            if ($(this).is(':checked')) {
                $("#Q2_option1_textarea_form_3").show();
            }
        });
        $('#Q2_option2_form_3').click(function() {
            if ($(this).is(':checked')) {
                $("#Q2_option1_textarea_form_3").hide();
            }
        });
        // End Question 2 option 

        // Question 3 option
        $('#Q3_option1_form_3').click(function() {
            if ($(this).is(':checked')) {
                $("#Q3_option1_textarea_form_3").show();
            }
        });
        $('#Q3_option2_form_3').click(function() {
            if ($(this).is(':checked')) {
                $("#Q3_option1_textarea_form_3").hide();
            }
        });
        // End Question 3 option 

        // Question 5 option
        $('#Q5_option1_form_3').click(function() {
        if ($(this).is(':checked')) {
            $("#Q5_option1_textarea_form_3").show();
        }
        });
        $('#Q5_option2_form_3').click(function() {
        if ($(this).is(':checked')) {
            $("#Q5_option1_textarea_form_3").hide();
        }
        });
        // End Question 5 option 

        // Public Question 1 option
        $('#public_Q1_option1_form_2').click(function() {
        if ($(this).is(':checked')) {
            $("#public_Q1_textarea_form_2").show();
        }
        });
        $('#public_Q1_option2_form_2').click(function() {
        if ($(this).is(':checked')) {
            $("#public_Q1_textarea_form_2").hide();
        }
        });
        //Public End Question 1 option 

        // Public Question 2 option
        $('#public_Q2_option1_form_2').click(function() {
        if ($(this).is(':checked')) {
            $("#public_Q2_textarea_form_2").show();
        }
        });
        $('#public_Q2_option2_form_2').click(function() {
        if ($(this).is(':checked')) {
            $("#public_Q2_textarea_form_2").hide();
        }
        });
        //Public End Question 2 option 

        // Public Question 3 option
        $('#public_Q3_option1_form_2').click(function() {
        if ($(this).is(':checked')) {
            $("#public_Q3_textarea_form_2").show();
        }
        });
        $('#public_Q3_option2_form_2').click(function() {
        if ($(this).is(':checked')) {
            $("#public_Q3_textarea_form_2").hide();
        }
        });
        //Public End Question 3 option 
    })

    if(!'<?php echo isset($_SESSION['Policy_No']) ? $_SESSION['Policy_No'] : '';?>'){
      location.href= "index.php";
    }
    VMasker(document.getElementById("modal_price")).maskMoney();
    VMasker(document.getElementById("modal_cost")).maskMoney();
    VMasker(document.getElementById("modal_amount")).maskMoney();
    VMasker(document.getElementById("Loss_Total_form_3")).maskMoney();
    VMasker(document.getElementById("Loss_Total_Plate_form_3")).maskMoney();
    VMasker(document.getElementById("Loss_Total_Others_form_3")).maskMoney();
    VMasker(document.getElementById("modal_amount_1")).maskMoney();
    VMasker(document.getElementById("modal_amount_2")).maskMoney();

    VMasker(document.getElementById("modal_price_edit")).maskMoney();
    VMasker(document.getElementById("modal_cost_edit")).maskMoney();
    VMasker(document.getElementById("modal_amount_edit")).maskMoney();
    VMasker(document.getElementById("modal_amount_edit_1")).maskMoney();
    VMasker(document.getElementById("modal_amount_edit_2")).maskMoney();

    var Claims_Type = '<?php echo isset($_SESSION['Claims_Type']) ? $_SESSION['Claims_Type'] : '' ;?>';
    var Claims_Type_Array = Claims_Type.split('||');
    var insert_id = 1;
    var insert_id_1 = 1;
    var insert_id_2 = 1;
    if(Claims_Type_Array[0] == '1'){
        $('#Loss_d_c_s_form_3').show();
        var uploaded_split = '<?php echo isset($_SESSION['Loss_damage_Upload_old_split']) ? $_SESSION['Loss_damage_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Loss_damage_Upload_old']) ? $_SESSION['Loss_damage_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Loss_damage_Upload']) ? $_SESSION['Loss_damage_Upload'] : '' ;?>';

        $('#file_name_9').val(file_name);
        $('#old_file_name_9').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_9").val();

                $("#old_file_name_split_9").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_9').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 9 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }

        if('<?php echo isset($_SESSION['Loss_damage_Details']) ? $_SESSION['Loss_damage_Details'] : '' ;?>'){
            var Loss_damage_Details = '<?php echo isset($_SESSION['Loss_damage_Details']) ? $_SESSION['Loss_damage_Details'] : '' ;?>';
                var details = JSON.parse(Loss_damage_Details);
                console.log(details);
            var counter = 0;
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
                                '<div class="next-previous">',
                                    '<strong style="font-size:25px;"></strong>',
                                    '<div class="upload_layout">',
                                        '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit" onclick="InsertEdit(event,'+insert_id+')"><i class="fa fa-pencil"></i></button>',
                                        '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table('+insert_id+');delete_data('+insert_id+');"><i class="fa fa-trash-o"></i></button>',
                                    '</div>',
                                    '</div>',
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
                            '<td>',
                                '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit" onclick="InsertEdit(event,'+insert_id+')"><i class="fa fa-pencil"></i></button>',
                                '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table('+insert_id+');getItemNumber();delete_data('+insert_id+');"><i class="fa fa-trash-o"></i></button>',
                            '</td>',
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

        if('<?php echo isset($_SESSION['Loss_damage_Details_1']) ? $_SESSION['Loss_damage_Details_1'] : '' ;?>'){
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
                            '<td>',
                                '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_1" onclick="InsertEdit_1(event,'+insert_id_1+')"><i class="fa fa-pencil"></i></button>',
                                '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_1('+insert_id_1+');getItemNumber_1();delete_data_1('+insert_id_1+');"><i class="fa fa-trash-o"></i></button>',
                            '</td>',
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
                                    '<div class="next-previous">',
                                        '<strong style="font-size:25px;"></strong>',
                                        '<div class="upload_layout">',
                                            '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_1" onclick="InsertEdit_1(event,'+insert_id_1+')"><i class="fa fa-pencil"></i></button>',
                                            '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_1('+insert_id_1+');delete_data_1('+insert_id_1+');"><i class="fa fa-trash-o"></i></button>',
                                        '</div>',
                                    '</div>',
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
        }

        let dollarUSLocale = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
        $('#Total_sum').html(dollarUSLocale.format(Number($('#subtotal_form_3').html().replace(/[$,]/g,''))*1 + Number($('#subtotal').html().replace(/[$,]/g,''))*1));
    
        
    }
    if(Claims_Type_Array[1] == '1'){
        $('#Business_Interruption_form_3').show();
        var uploaded_split = '<?php echo isset($_SESSION['Business_Upload_old_split']) ? $_SESSION['Business_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Business_Upload_old']) ? $_SESSION['Business_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Business_Upload']) ? $_SESSION['Business_Upload'] : '' ;?>';

        $('#Period_B_I_form_3').val('<?php echo isset($_SESSION['Period_B_I_form_3']) ? $_SESSION['Period_B_I_form_3'] : '' ;?>');
        
        $('#file_name_10').val(file_name);
        $('#old_file_name_10').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_10").val();

                $("#old_file_name_split_10").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_10').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 10 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }

        if('<?php echo isset($_SESSION['Business_Details']) ? $_SESSION['Business_Details'] : '' ;?>'){
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
                            '<td>',
                            '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_2" onclick="InsertEdit_2(event,'+insert_id_2+')"><i class="fa fa-pencil"></i></button>',
                            '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_2('+insert_id_2+');getItemNumber_2();delete_data_2('+insert_id_2+');"><i class="fa fa-trash-o"></i></button>',
                            '</td>',
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
                                '<div class="next-previous">',
                                    '<strong style="font-size:25px;"></strong>',
                                    '<div class="upload_layout">',
                                        '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit_2" onclick="InsertEdit_2(event,'+insert_id_2+')"><i class="fa fa-pencil"></i></button>',
                                        '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table_2('+insert_id_2+');delete_data_2('+insert_id_2+');"><i class="fa fa-trash-o"></i></button>',
                                    '</div>',
                                '</div>',
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
        }
    }
    if(Claims_Type_Array[2] == '1'){
        $('#Loss_Money').show();
        var uploaded_split = '<?php echo isset($_SESSION['Loss_Money_Upload_old_split']) ? $_SESSION['Loss_Money_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Loss_Money_Upload_old']) ? $_SESSION['Loss_Money_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Loss_Money_Upload']) ? $_SESSION['Loss_Money_Upload'] : '' ;?>';

        $('#Reason_claims_form_3').val('<?php echo isset($_SESSION['Reason_claims_form_3']) ? $_SESSION['Reason_claims_form_3'] : '' ;?>');
        $('#Loss_Total_form_3').val('<?php echo isset($_SESSION['Loss_Total_form_3']) ? $_SESSION['Loss_Total_form_3'] : '' ;?>');

        $('#file_name_11').val(file_name);
        $('#old_file_name_11').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_11").val();

                $("#old_file_name_split_11").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_11').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 11 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }
    }
    if(Claims_Type_Array[3] == '1'){
        $('#Public_Liability').show();
        $('#Public_Liability_form_2').val('<?php echo isset($_SESSION['Public_Liability_form_2']) ? $_SESSION['Public_Liability_form_2'] : '' ;?>');
        $('#Details_extent_of_damage_to_Property_of_other_form_2').val('<?php echo isset($_SESSION['Details_extent_of_damage_to_Property_of_other_form_2']) ? $_SESSION['Details_extent_of_damage_to_Property_of_other_form_2'] : '' ;?>');
        $('#Name_of_the_injured_form_2').val('<?php echo isset($_SESSION['Name_of_the_injured_form_2']) ? $_SESSION['Name_of_the_injured_form_2'] : '' ;?>');
        $('#Details_extent_of_injury_of_other_form_2').val('<?php echo isset($_SESSION['Details_extent_of_injury_of_other_form_2']) ? $_SESSION['Details_extent_of_injury_of_other_form_2'] : '' ;?>');
        $('#public_Q3_textarea1_form_2').text('<?php echo isset($_SESSION['public_Q3_textarea1_form_2']) ? $_SESSION['public_Q3_textarea1_form_2'] : '' ;?>');
        
        var public_Q_Type = '<?php echo isset($_SESSION['public_Q_Type']) ? $_SESSION['public_Q_Type'] : '' ;?>';
        var public_Q_Type_Array = public_Q_Type.split('||');
        if(public_Q_Type_Array[0] == '1'){
            $('#public_Q1_textarea_form_2').show();
            $('#public_Q1_textarea_form_2').text('<?php echo isset($_SESSION['public_Q1_textarea_form_2']) ? $_SESSION['public_Q1_textarea_form_2'] : '' ;?>');
            $('#public_Q1_option1_form_2').attr('checked', true);
        }
        if(public_Q_Type_Array[1] == '1'){
            $('#public_Q2_textarea_form_2').show();
            $('#public_Q2_option1_form_2').attr('checked', true);
            $('#public_Q2_textarea_form_2').text('<?php echo isset($_SESSION['public_Q2_textarea_form_2']) ? $_SESSION['public_Q2_textarea_form_2'] : '' ;?>');
        }
        if(public_Q_Type_Array[2] == '1'){
            $('#public_Q3_textarea_form_2').show();
            $('#public_Q3_option1_form_2').attr('checked', true);
            $('#public_Q3_textarea_form_2').text('<?php echo isset($_SESSION['public_Q3_textarea_form_2']) ? $_SESSION['public_Q3_textarea_form_2'] : '' ;?>');
        }

        
        var uploaded_split = '<?php echo isset($_SESSION['Public_Upload_old_split']) ? $_SESSION['Public_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Public_Upload_old']) ? $_SESSION['Public_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Public_Upload']) ? $_SESSION['Public_Upload'] : '' ;?>';

        $('#file_name_12').val(file_name);
        $('#old_file_name_12').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_12").val();

                $("#old_file_name_split_12").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_12').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 12 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }
    }
    if(Claims_Type_Array[4] == '1'){
        $('#Personal_Assault').show();
        var uploaded_split = '<?php echo isset($_SESSION['Personal_Assault_Upload_old_split']) ? $_SESSION['Personal_Assault_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Personal_Assault_Upload_old']) ? $_SESSION['Personal_Assault_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Personal_Assault_Upload']) ? $_SESSION['Personal_Assault_Upload'] : '' ;?>';

        $('#Name_I_E_form_3').val('<?php echo isset($_SESSION['Name_I_E_form_3']) ? $_SESSION['Name_I_E_form_3'] : '' ;?>');
        $('#Name_C_form_3').val('<?php echo isset($_SESSION['Name_C_form_3']) ? $_SESSION['Name_C_form_3'] : '' ;?>');
        $('#Reason_Claims_P_A').val('<?php echo isset($_SESSION['Reason_Claims_P_A']) ? $_SESSION['Reason_Claims_P_A'] : '' ;?>');

        $('#file_name_13').val(file_name);
        $('#old_file_name_13').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_13").val();

                $("#old_file_name_split_13").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_13').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 5 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }
    }
    if(Claims_Type_Array[5] == '1'){
        $('#Plate_Glass').show();
        var uploaded_split = '<?php echo isset($_SESSION['Plate_Glass_Upload_old_split']) ? $_SESSION['Plate_Glass_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Plate_Glass_Upload_old']) ? $_SESSION['Plate_Glass_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Plate_Glass_Upload']) ? $_SESSION['Plate_Glass_Upload'] : '' ;?>';

        $('#Reason_claims_Plate_form_3').val('<?php echo isset($_SESSION['Reason_claims_Plate_form_3']) ? $_SESSION['Reason_claims_Plate_form_3'] : '' ;?>');
        $('#Loss_Total_Plate_form_3').val('<?php echo isset($_SESSION['Loss_Total_Plate_form_3']) ? $_SESSION['Loss_Total_Plate_form_3'] : '' ;?>');

        $('#file_name_14').val(file_name);
        $('#old_file_name_14').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_14").val();

                $("#old_file_name_split_14").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_14').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 14 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }
    }
    if(Claims_Type_Array[6] == '1'){
        $('#Employee_Compensation').show();
        var uploaded_split = '<?php echo isset($_SESSION['Employee_Compensation_Upload_old_split']) ? $_SESSION['Employee_Compensation_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Employee_Compensation_Upload_old']) ? $_SESSION['Employee_Compensation_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Employee_Compensation_Upload']) ? $_SESSION['Employee_Compensation_Upload'] : '' ;?>';

        $('#Date_injury').val('<?php echo isset($_SESSION['Date_injury']) ? $_SESSION['Date_injury'] : '' ;?>');
        $('#Description_incident').val('<?php echo isset($_SESSION['Description_incident']) ? $_SESSION['Description_incident'] : '' ;?>');
        $('#Sick_leave').val('<?php echo isset($_SESSION['Sick_leave']) ? $_SESSION['Sick_leave'] : '' ;?>');
        $('#Nature_injury').val('<?php echo isset($_SESSION['Nature_injury']) ? $_SESSION['Nature_injury'] : '' ;?>');

        $('#file_name_15').val(file_name);
        $('#old_file_name_15').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_15").val();

                $("#old_file_name_split_15").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_15').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 15 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }
    }
    if(Claims_Type_Array[7] == '1'){
        $('#Others').show();
        var uploaded_split = '<?php echo isset($_SESSION['Others_Upload_old_split']) ? $_SESSION['Others_Upload_old_split'] : '' ;?>';
        var uploaded = '<?php echo isset($_SESSION['Others_Upload_old']) ? $_SESSION['Others_Upload_old'] : '' ;?>';
        var file_name = '<?php echo isset($_SESSION['Others_Upload']) ? $_SESSION['Others_Upload'] : '' ;?>';

        $('#Reason_claims_Others_form_3').val('<?php echo isset($_SESSION['Reason_claims_Others_form_3']) ? $_SESSION['Reason_claims_Others_form_3'] : '' ;?>');
        $('#Loss_Total_Others_form_3').val('<?php echo isset($_SESSION['Loss_Total_Others_form_3']) ? $_SESSION['Loss_Total_Others_form_3'] : '' ;?>');

        $('#file_name_16').val(file_name);
        $('#old_file_name_16').val(uploaded);

        var uploaded_split_array = uploaded_split.split(',');
        var uploaded_array = uploaded.split(',');
        var file_name_array = file_name.split(',');

        for (let index = 0; index < uploaded_split_array.length; index++) {
            if(uploaded_array[index]){
                var element_old = uploaded_array[index];

                if(element_old.length >= 15){
                    var first_name = element_old.slice(0, 3);
                    var last_name = element_old.slice(-9);
                    var element_old = first_name + '...' + last_name;
                }
                var name_part_split = $("#old_file_name_split_16").val();

                $("#old_file_name_split_16").val(name_part_split.concat(element_old+','));
                $('#uploaded_file_16').append([
                    '<div class="img_style">',
                        '<div>' + element_old + '</div>',
                        '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ 16 +'`'+ ','+'`'+ file_name_array[index] +'`'+ ','+ '`'+ uploaded_array[index] +'`'+ ','+ '`'+ uploaded_split_array[index] +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                    '</div>'
                ].join(''));
            }
        }
    }
    

    if('<?php echo isset($_SESSION['User_Name']) ? $_SESSION['User_Name'] : '' ;?>'){
        $('#Name_of_Applicant').val('<?php echo isset($_SESSION['User_Name']) ? $_SESSION['User_Name'] : '' ;?>');
    }
    if('<?php echo isset($_SESSION['User_Submission']) ? $_SESSION['User_Submission'] : '' ;?>'){
        $('#datepicker_Submission').val('<?php echo isset($_SESSION['User_Submission']) ? $_SESSION['User_Submission'] : '' ;?>');
    }

    ///////////// General ///////////////

    if('<?php echo isset($_SESSION['datepicker1_form_3']) ? $_SESSION['datepicker1_form_3'] : '' ;?>'){
        $('#datepicker1_form_3').val('<?php echo isset($_SESSION['datepicker1_form_3']) ? $_SESSION['datepicker1_form_3'] : '' ;?>');
    }

    $('#Location_of_incident_form_3').val('<?php echo isset($_SESSION['Location_of_incident_form_3']) ? $_SESSION['Location_of_incident_form_3'] : '' ;?>');
    $('#Description_of_incident_form_3').val('<?php echo isset($_SESSION['Description_of_incident_form_3']) ? $_SESSION['Description_of_incident_form_3'] : '' ;?>');
    
    var General_Q_Type = '<?php echo isset($_SESSION['General_Q_Type']) ? $_SESSION['General_Q_Type'] : '' ;?>';
    var General_Q_Type_Array = General_Q_Type.split('||');
    if(General_Q_Type_Array[0] == '2'){
        $('#Q1_option1_textarea_form_3').show();
        $('#Q1_option1_form_3').attr('checked', true);
        $('#Q1_option1_textarea_form_3').val('<?php echo isset($_SESSION['Q1_option1_textarea_form_3']) ? $_SESSION['Q1_option1_textarea_form_3'] : '' ;?>');
    }
    if(General_Q_Type_Array[0] == '1'){
        $('#Q1_option2_form_3').attr('checked', true);
    }
    if(General_Q_Type_Array[1] == '1'){
        $('#Q2_option1_textarea_form_3').show();
        $('#Q2_option1_form_3').attr('checked', true);
        $('#Q2_option1_textarea_form_3').val('<?php echo isset($_SESSION['Q2_option1_textarea_form_3']) ? $_SESSION['Q2_option1_textarea_form_3'] : '' ;?>');
    }
    if(General_Q_Type_Array[2] == '1'){
        $('#Q3_option1_textarea_form_3').show();
        $('#Q3_option1_form_3').attr('checked', true);
        $('#Q3_option1_textarea_form_3').val('<?php echo isset($_SESSION['Q3_option1_textarea_form_3']) ? $_SESSION['Q3_option1_textarea_form_3'] : '' ;?>');
    }
    if(General_Q_Type_Array[3] == '1'){
        $('#Q4_option1_form_3').attr('checked', true);
    }
    if(General_Q_Type_Array[4] == '1'){
        $('#Q5_option1_textarea_form_3').show();
        $('#Q5_option1_form_3').attr('checked', true);
        $('#Q5_option1_textarea_form_3').val('<?php echo isset($_SESSION['Q5_option1_textarea_form_3']) ? $_SESSION['Q5_option1_textarea_form_3'] : '' ;?>');
    }

    
    

</script>


<script src="js/timepicker.js"></script>