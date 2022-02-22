<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  session_destroy();
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
                      <li class="active" id="personal">Property Claim Info</li>
                      <li class="active" id="payment">Review</li>
                      <li class="active" id="confirm" onclick="navigation('confirm')">REF.NO</li>
                  </ul>

              </form>
          </div>
        </div>
      </div>
      
      <div id="myTab1Content" class="tab-content">
        <div id="home3" role="tabpanel" aria-labelledby="send-tab" class="tab-pane fade px-4 py-5 active show" style="padding-top:0px !important">
            <div class="row email_style">
                <div class="col-md-12"><h2>Your eClaim submission has been made successfully.</h2></div>
                <div class="col-md-12"><h2>Reference No.<span id="reference" style="color: #d12727"></span></h4></div>
                <div class="col-md-12"><h2>You will receive an email confirmation in respect of that claim submission soonest.</h4></div>
            </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
<script>
  $(document).ready(function(){
    if(!'<?php echo isset($_SESSION['Policy_No']) ? $_SESSION['Policy_No'] : '';?>'){
      location.href= "index.php";
    }
    var date = new Date().getFullYear();
    var reference = '<?php echo isset($_SESSION['Policy_No']) ? $_SESSION['Policy_No'] : '';?>' + '-' + localStorage.getItem('reference') + '/' + date;
    $('#reference').html(reference);
  })
</script>
