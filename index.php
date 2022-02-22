<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include("design.php");?>
<style>
  .form-control-customize {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;  
  }
  .form-control-customize:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
  }
  .invalidate {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
  }
  .invalidate:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgb(220 53 69 / 25%);
  }
  .validate {
    border-color: #28a745;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center right calc(0.375em + 0.1875rem);
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
  }
  .validate:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgb(40 167 69 / 25%);
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
                      <li id="personal" onclick="navigation('personal')">Property Claim Info</li>
                      <li id="payment" onclick="navigation('payment')">Review</li>
                      <li id="confirm" onclick="navigation('confirm')">REF.NO</li>
                  </ul> <!-- fieldsets -->

              </form>
          </div>
        </div>
      </div>
      
      <div id="myTab1Content" class="tab-content">
        <div id="home0" role="tabpanel" aria-labelledby="home-tab" class="row tab-pane fade px-4 py-5 show active " style="padding-top:0px !important;">
          <form class="needs-validation0" id="form_3" novalidate>
            <div class="row" style="padding-left:0px !important !important;display:flex">
              <div class="col-md-6">
                <div class="alert alert-primary alert-dismissible fade show">POLICY</div>
                <fieldset class="form-group border p-3">
                  <legend class="w-auto px-2">Policy Information</legend>
                    <div>
                        <div class="form-group">
                          <label for="Policy_No">Policy No.</label>
                          <input type="text" class="form-control-customize" id="Policy_No" aria-describedby="basic-addon3" required>
                          <div class="invalid-feedback">Please provide a valid Policy No.</div>
                        </div>

                        <div class="form-group">
                          <label for="">Name of policy holder</label>
                          <input type="text" class="form-control" id="Holder_Name" aria-describedby="basic-addon3" required>
                          <div class="invalid-feedback">Please provide a valid Name of policy holder.</div>
                        </div>

                        <div class="form-group">
                          <label for="">Name of the insured</label>
                          <input type="text" class="form-control" id="Insured_Name" aria-describedby="basic-addon3" required>
                          <div class="invalid-feedback">Please provide a valid Name of the insured.</div>
                        </div>

                        <div class="form-group">
                          <label for="">Name of the claimant </label>
                          <input type="text" class="form-control" id="Claimant_Name" aria-describedby="basic-addon3" required>
                          <div class="invalid-feedback">Please provide a valid Name of the claimant.</div>
                        </div>

                    </div>
                </fieldset>

                <fieldset class="form-group border p-3">
                  <legend class="w-auto px-2">Contact Information</legend>
                    <div>
                        <div class="form-group">
                          <label for="">Name of contact person</label>
                          <input type="text" class="form-control" id="Person_Name" aria-describedby="basic-addon3" required>
                          <div class="invalid-feedback">Please provide a valid Name of contact person.</div>
                        </div>

                        <div class="form-group">
                          <label for="">Email Address</label>
                          <input type="email" class="form-control" id="email_Address" aria-describedby="basic-addon3" required>
                          <div class="invalid-feedback">Please provide a valid Email Address.</div>
                        </div>

                        <div class="form-group">
                          <label for="">Mobile No.</label>
                          <input type="text" class="form-control-customize" id="Mobile_No" aria-describedby="basic-addon3" required>
                          <div class="invalid-feedback">Please provide a valid Mobile No.</div>
                        </div>
                      </div>
                    <label class="text-uppercase font_size" style="color:#e34141;text-align:justify"><strong>Important:</strong> This  eClaim form should be submitted by the Policy holder/Insured Person.</label>
                </fieldset>
              </div>
              <div class="col-md-6 ">
                <div class="alert alert-primary alert-dismissible fade show"> CLAIM</div>
                <fieldset class="form-group border p-3">
                  <legend class="w-auto px-2">Claims Information</legend>
                  <label class="">Select Claim Types</label>
                      <div class="container magin_bottom_selected_form_2"  id="form_3_type">

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="LDCS_form_3">
                          <label for="LDCS_form_3">Loss or damage to Contents / Stock</label>
                        </div>

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="Business_Interruption_form_3">
                          <label for="Business_Interruption_form_3">Business Interruption</label>
                        </div>

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="Loss_Money_form_3">
                          <label for="Loss_Money_form_3">Loss of Money</label>
                        </div>

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="Public_Liability_form_3">
                          <label for="Public_Liability_form_3">Public Liability</label>
                        </div>

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="Personal_Assault_form_3">
                          <label for="Personal_Assault_form_3">Personal Assault</label>
                        </div>

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="Plate_Glass_form_3">
                          <label for="Plate_Glass_form_3">Plate Glass</label>
                        </div>

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="Employee_Compensation_form_3">
                          <label for="Employee_Compensation_form_3">Employee' Compensation</label>
                        </div>

                        <div class="Claims-type-padding">
                          <input type="checkbox" id="Other_form_3">
                          <label for="Other_form_3">Other(s)</label>
                        </div>

                      </div>

                </fieldset>
              </div>
              <div class="col-md-12 check-box-padding next-previous" id="preview_next_1">
                <div class="col-md-3" style="padding-bottom:10px"><button type ="button" class = "btn btn-outline-primary col-md-12" disabled>PREVIOUS</button></div>
                <div class="col-md-3" style="padding-bottom:10px"><button type ="submit" class = "btn btn-outline-primary col-md-12" onclick="home1_show()">NEXT</button></div>
              </div>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>

</body>
</html>

<script>
  
  VMasker(document.getElementById("Mobile_No")).maskPattern('+(999) 9999-9999');
  VMasker(document.getElementById("Policy_No")).maskPattern('9AA/99999/99');
  
  var OK = '<?php echo isset($_SESSION['Policy_No']) ? $_SESSION['Policy_No'] : '';?>';
  if(OK){
    var Claims_Type = '<?php echo isset($_SESSION['Claims_Type']) ? $_SESSION['Claims_Type'] : '';?>';
    var Claims_Type_Array = Claims_Type.split('||');
    $('#Policy_No').val('<?php echo isset($_SESSION['Policy_No']) ? $_SESSION['Policy_No'] : '';?>');
    $('#Holder_Name').val('<?php echo isset($_SESSION['Holder_Name']) ? $_SESSION['Holder_Name'] : '';?>');
    $('#Insured_Name').val('<?php echo isset($_SESSION['Insured_Name']) ? $_SESSION['Insured_Name'] : '';?>');
    $('#Claimant_Name').val('<?php echo isset($_SESSION['Claimant_Name']) ? $_SESSION['Claimant_Name'] : '';?>');
    $('#Person_Name').val('<?php echo isset($_SESSION['Person_Name']) ? $_SESSION['Person_Name'] : '';?>');
    $('#Mobile_No').val('<?php echo isset($_SESSION['Mobile_No']) ? $_SESSION['Mobile_No'] : '';?>');
    $('#email_Address').val('<?php echo isset($_SESSION['email_Address']) ? $_SESSION['email_Address'] : '';?>');

    if(Claims_Type_Array[0] == '1')
      $('#LDCS_form_3').attr('checked', true);
    if(Claims_Type_Array[1] == '1')
      $('#Business_Interruption_form_3').attr('checked', true);
    if(Claims_Type_Array[2] == '1')
      $('#Loss_Money_form_3').attr('checked', true);
    if(Claims_Type_Array[3] == '1')
      $('#Public_Liability_form_3').attr('checked', true);
    if(Claims_Type_Array[4] == '1')
      $('#Personal_Assault_form_3').attr('checked', true);
    if(Claims_Type_Array[5] == '1')
      $('#Plate_Glass_form_3').attr('checked', true);
    if(Claims_Type_Array[6] == '1')
      $('#Employee_Compensation_form_3').attr('checked', true);
    if(Claims_Type_Array[7] == '1')
      $('#Other_form_3').attr('checked', true);
  }
</script>
