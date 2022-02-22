var myBooks, myBooks_1, myBooks_2;
var insert_id = 1;
var insert_id_1 = 1;
var insert_id_2 = 1;
'use strict'

$(document).ready(function (){
  $('#account').hover(function(){
    $('#account').css('cursor','pointer');
  });
  $('#personal').hover(function(){
    $('#personal').css('cursor','pointer');
  });
  $('#payment').hover(function(){
    $('#payment').css('cursor','pointer');
  });
  $('#confirm').hover(function(){
    $('#confirm').css('cursor','pointer');
  });

  $('#preview').click(function (){
      var forms = document.querySelectorAll('.needs-validation1');
      var ClaimsType;
      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
          event.preventDefault(event);
          form.classList.add('was-validated')

        }, false)
      });
      $.post('php/getClaimType.php',
        function(params) {
          ClaimsType = params.split('||');
          var num = 0;
          if($('#datepicker1_form_3').val() == ""){
            toastr.error("Enter the Date & time of accident.","General");return;num++;
          }
          if($('#Location_of_incident_form_3').val() == ""){
            toastr.error("Enter the Location of incident.","General");return;num++;
          }
          if($('#Description_of_incident_form_3').val() == ""){
            toastr.error("Enter the Description of incident.","General");return;num++;
          }
          if (ClaimsType[0] == '1') {
              if($('#files_9').val() != ""){
                toastr.error("There are files that are not uploading.","Loss or damaged to Content / Stock");return;num++;
              }
          }
          if (ClaimsType[1] == '1') {
              if($('#Period_B_I_form_3').val() == ""){
                  toastr.error("Enter the Period of Business Interruption.","Business Interruption");return;num++;
              }else if($('#files_10').val() != ""){
                toastr.error("There are files that are not uploading.","Business Interruption");return;num++;
              }
          }
          if (ClaimsType[2] == '1') {
              if($('#Reason_claims_form_3').val() == ""){
                  toastr.error("Enter the Reason of claims.","Loss of Money");return;num++;
              }else if($('#Loss_Total_form_3').val() == "" || $('#Loss_Total_form_3').val() == "0.00" || $('#Loss_Total_form_3').val() == "0"){
                  toastr.error("Enter the Total Claimed amount HK$","Loss of Money");return;num++;
              }else if($('#files_11').val() != ""){
                toastr.error("There are files that are not uploading.","Loss of Money");return;num++;
              }
          }
          if (ClaimsType[3] == '1') {
              if($('#Public_Liability_form_2').val() == ""){
                  toastr.error("Enter the Name of the property owner.","Public Liability");return;num++;
              }else if($('#Details_extent_of_damage_to_Property_of_other_form_2').val() == ""){
                  toastr.error("Enter the Details & extent of damage to Property of other(s).","Public Liability");return;num++;
              }else if($('#Name_of_the_injured_form_2').val() == ""){
                  toastr.error("Enter the Name of the injured.","Public Liability");return;num++;
              }else if($('#Details_extent_of_injury_of_other_form_2').val() == ""){
                  toastr.error("Enter the Details & extent of injury of other(s).","Public Liability");return;num++;
              }else if($('#public_Q3_textarea1_form_2').val() == ""){
                  toastr.error("Enter the State all Name(s), address(es) and telephone No.(s) of witness(es) of the incident, if any.","Public Liability");return;num++;
              }else if($('#files_12').val() != ""){
                toastr.error("There are files that are not uploading.","Public Liability");return;num++;
              }
          }
          if (ClaimsType[4] == '1') {
              if($('#Name_I_E_form_3').val() == ""){
                  toastr.error("Enter the Name of injured employee.","Personal Assault");return;num++;
              }else if($('#Name_C_form_3').val() == ""){
                  toastr.error("Enter the Name of the claimant.","Personal Assault");return;num++;
              }else if($('#Reason_Claims_P_A').val() == ""){
                  toastr.error("Enter the Reason of Claims.","Personal Assault");return;num++;
              }else if($('#files_13').val() != ""){
                toastr.error("There are files that are not uploading.","Personal Assault");return;num++;
              }
          }
          if (ClaimsType[5] == '1') {
              if($('#Reason_claims_Plate_form_3').val() == ""){
                  toastr.error("Enter the Reason of claims.","Plate Glass");return;num++;
              }else if($('#Loss_Total_Plate_form_3').val() == "" || $('#Loss_Total_Plate_form_3').val() == "0.00" || $('#Loss_Total_Plate_form_3').val() == "0"){
                  toastr.error("Enter the Total Claimed amount HK$","Plate Glass");return;num++;
              }else if($('#files_14').val() != ""){
                toastr.error("There are files that are not uploading.","Plate Glass");return;num++;
              }
          }
          if (ClaimsType[6] == '1') {
            if($('#Date_injury').val() == ""){
                toastr.error("Enter the Date of injury.","Employee's Compensation");return;num++;
            }else if($('#Description_incident').val() == ""){
                toastr.error("Enter the Description of incident.","Employee's Compensation");return;num++;
            }else if($('#Sick_leave').val() == ""){
                toastr.error("Enter the Sick leave.","Employee's Compensation");return;num++;
            }else if($('#Nature_injury').val() == ""){
                toastr.error("Enter the Nature of injury.","Employee's Compensation");return;num++;
            }else if($('#files_15').val() != ""){
              toastr.error("There are files that are not uploading.","Employee's Compensation");return;num++;
            }
        }
          if (ClaimsType[7] == '1') {
              if($('#Reason_claims_Others_form_3').val() == ""){
                  toastr.error("Enter the Reason of claims.","Others");return;num++;
              }else if($('#Loss_Total_Others_form_3').val() == "" || $('#Loss_Total_Others_form_3').val() == "0.00" || $('#Loss_Total_Others_form_3').val() == "0"){
                  toastr.error("Enter the Total Claimed amount HK$","Others");return;num++;
              }else if($('#files_16').val() != ""){
                toastr.error("There are files that are not uploading.","Others");return;num++;
              }
          }
          
          if($('#Name_of_Applicant').val() == ""){
              toastr.error("Enter the Name of Applicant");return;num++;
          }
          if($('#datepicker_Submission').val() == ""){
              toastr.error("Enter the Submission Date & Time");return;num++;
          }
          if(num == 0){
            var tableToObj = function( table ) {
                var trs = table.rows,
                    trl = trs.length,
                    i = 0,
                    j = 0,
                    keys = [],
                    obj, ret = [];
            
                for (; i < trl; i++) {
                    if (i == 0) {
                        for (; j < trs[i].children.length-1; j++) {
                            keys.push(trs[i].children[j].innerHTML);
                        }
                    } else {
                        obj = {};
                        for (j = 0; j < trs[i].children.length-1; j++) {
                            obj[keys[j]] = trs[i].children[j].innerHTML;
                        }
                        ret.push(obj);
                    }
                }
                
                return ret;
            };
            myBooks = tableToObj(document.getElementsByTagName('table')[0]);
            myBooks_1 = tableToObj(document.getElementsByTagName('table')[1]);
            myBooks_2 = tableToObj(document.getElementsByTagName('table')[2]);

            var public_Q1 = public_Q2 = public_Q3 = General_Q1 = General_Q2 = General_Q3 = General_Q4 = General_Q5 = General_Q6 = General_Q7 = General_Q8 = 0;

            if ($('#public_Q1_option1_form_2').is(':checked')){
              public_Q1 = 1;    
            }
            if ($('#public_Q2_option1_form_2').is(':checked')){
              public_Q2 = 1;    
            }
            if ($('#public_Q3_option1_form_2').is(':checked')){
              public_Q3 = 1;    
            }
            var public_Q_Type = public_Q1 + "||" + public_Q2 + "||" + public_Q3;

            /////////////////////////////////////////////////////
            if ($('#Q1_option1_form_3').is(':checked')){
              General_Q1 = 2;    
            }
            if ($('#Q1_option2_form_3').is(':checked')){
              General_Q1 = 1;    
            }
            if ($('#Q2_option1_form_3').is(':checked')){
              General_Q2 = 1;    
            }
            if ($('#Q3_option1_form_3').is(':checked')){
              General_Q3 = 1;    
            }
            if ($('#Q4_option1_form_3').is(':checked')){
              General_Q4 = 1;    
            }
            if ($('#Q5_option1_form_3').is(':checked')){
              General_Q5 = 1;    
            }

            var General_Q_Type = General_Q1 + "||" + General_Q2 + "||" + General_Q3 + "||" + General_Q4 + "||" + General_Q5 ;

            $.post("php/Property_Claim_Info_session_data.php",
            {

              //////////////////////////////////////////////////////////////

              'General_1_form_3' : $('#datepicker1_form_3').val(),
              'General_2_form_3' : $('#Location_of_incident_form_3').val(),
              'General_3_form_3' : $('#Description_of_incident_form_3').val(),
              'General_4_form_3' : $('#Q1_option1_textarea_form_3').val(),
              'General_5_form_3' : $('#Q2_option1_textarea_form_3').val(),
              'General_6_form_3' : $('#Q3_option1_textarea_form_3').val(),
              'General_7_form_3' : $('#Q5_option1_textarea_form_3').val(),
              'General_8_form_3' : General_Q_Type,
              
              'Loss_damage_1' : JSON.stringify(myBooks),
              'Loss_damage_5' : JSON.stringify(myBooks_1),
              'Loss_damage_6' : $('#Total_sum').html(),
              'Loss_damage_2' : $('#file_name_9').val(),
              'Loss_damage_3' : $('#old_file_name_9').val(),
              'Loss_damage_4' : $('#old_file_name_split_9').val(),

              'Business_1_form_3' : $('#Period_B_I_form_3').val(),
              'Business_2_form_3' : JSON.stringify(myBooks_2),
              'Business_3_form_3' : $('#file_name_10').val(),
              'Business_4_form_3' : $('#old_file_name_10').val(),
              'Business_5_form_3' : $('#old_file_name_split_10').val(),

              'Loss_Money_1' : $('#Reason_claims_form_3').val(),
              'Loss_Money_2' : $('#Loss_Total_form_3').val(),
              'Loss_Money_3' : $('#file_name_11').val(),
              'Loss_Money_4' : $('#old_file_name_11').val(),
              'Loss_Money_5' : $('#old_file_name_split_11').val(),

              'public_1_form_2' : $('#Public_Liability_form_2').val(),
              'public_2_form_2' : $('#Details_extent_of_damage_to_Property_of_other_form_2').val(),
              'public_3_form_2' : $('#Name_of_the_injured_form_2').val(),
              'public_4_form_2' : $('#Details_extent_of_injury_of_other_form_2').val(),
              'public_5_form_2' : $('#public_Q1_textarea_form_2').val(),
              'public_6_form_2' : $('#public_Q2_textarea_form_2').val(),
              'public_7_form_2' : $('#public_Q3_textarea_form_2').val(),
              'public_8_form_2' : $('#public_Q3_textarea1_form_2').val(),
              'public_9_form_2' : public_Q_Type,
              'public_10_form_2' : $('#file_name_12').val(),
              'public_11_form_2' : $('#old_file_name_12').val(),
              'public_12_form_2' : $('#old_file_name_split_12').val(),

              'Personal_Assault_1' : $('#Name_I_E_form_3').val(),
              'Personal_Assault_2' : $('#Name_C_form_3').val(),
              'Personal_Assault_3' : $('#Reason_Claims_P_A').val(),
              'Personal_Assault_4' : $('#file_name_13').val(),
              'Personal_Assault_5' : $('#old_file_name_13').val(),
              'Personal_Assault_6' : $('#old_file_name_split_13').val(),

              'Plate_Glass_1' : $('#Reason_claims_Plate_form_3').val(),
              'Plate_Glass_2' : $('#Loss_Total_Plate_form_3').val(),
              'Plate_Glass_3' : $('#file_name_14').val(),
              'Plate_Glass_4' : $('#old_file_name_14').val(),
              'Plate_Glass_5' : $('#old_file_name_split_14').val(),

              'Employee_Compensation_1' : $('#Date_injury').val(),
              'Employee_Compensation_2' : $('#Description_incident').val(),
              'Employee_Compensation_3' : $('#Sick_leave').val(),
              'Employee_Compensation_4' : $('#Nature_injury').val(),
              'Employee_Compensation_5' : $('#file_name_15').val(),
              'Employee_Compensation_6' : $('#old_file_name_15').val(),
              'Employee_Compensation_7' : $('#old_file_name_split_15').val(),

              'Others_1' : $('#Reason_claims_Others_form_3').val(),
              'Others_2' : $('#Loss_Total_Others_form_3').val(),
              'Others_3' : $('#file_name_16').val(),
              'Others_4' : $('#old_file_name_16').val(),
              'Others_5' : $('#old_file_name_split_16').val(),

              'user_1'        : $('#Name_of_Applicant').val(),
              'user_2'        : $('#datepicker_Submission').val(),

            },
            function(response){
            });
            location.href = "Review.php";
          }
          num = 0;
        });

  
      
  
      // var divShowData = document.getElementById('showData');
      // divShowData.innerHTML = "";
      // divShowData.appendChild(table);
      // $('#home1').removeClass("active show");
      // $('#home2').addClass("active show");
      // $('#payment').addClass("active");
  })

    $("#modal_ok").click(function (){
        insert_id_item = $('#first .table_tbody').length + 1;
        var A = $('#modal_Replacement_Reason').val();
        var B = $('#datepicker14').val();
        var C = $('#modal_price').val();
        var D = $('#modal_cost').val();
        var number = $('#modal_amount').val();
        var E = Number(number.replace(/[^0-9\.]+/g,""));
        var total_1 = $('#subtotal').html();
        var total = Number(total_1.replace(/[^0-9\.]+/g,""));
        let dollarUSLocale = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
        if(A == '' || B == '' || C == '' || D == '' || E == '' || C == '0.00' || D== '0.00' || number == '0.00' || C == '0' || D== '0' || number == '0' ){
            toastr.error("Enter the Value !!");
        }else{
            $('#tbody').append([
                '<tr class="table_tr_'+ insert_id+' table_tbody">',
                    '<td><span>'+insert_id_item+'</span></td>',
                    '<td>'+A+'</td>',
                    '<td>'+B+'</td>',
                    '<td>'+C+'</td>',
                    '<td>'+D+'</td>',
                    '<td>'+number+'</td>',
                    '<td>',
                      '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit" onclick="InsertEdit(event,'+insert_id+')"><i class="fa fa-pencil"></i></button>',
                      '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_table('+insert_id+');getItemNumber();delete_data('+insert_id+');"><i class="fa fa-trash-o"></i></button>',
                    '</td>',
                '</tr>'
            ].join(''));

            $('#accordion').append([
              '<div id="card_'+insert_id+'">',
                '<div class="card" >',
                  '<div class="card-header">',
                    '<h5 class="mb-0">',
                        '<button onclick="stop(event)" class="btn btn-link" data-toggle="collapse" data-target="#collapse'+insert_id+'" >',
                            '<i class="indicator fa fa-chevron-circle-down" aria-hidden="true" style="padding-right: 12px;"></i><span>Item ' + insert_id_item,
                        '</span></button>',
                    '</h5>',
                  '</div>',

                  '<div id="collapse'+insert_id+'" class="collapse">',
                    '<div class="card-body">',
                      '<div class="next-previous">',
                          '<strong style="font-size:25px;"></strong>',
                          '<div class="upload_layout">',
                              '<button class="btn btn-outline-primary" style="padding: 2px 8px 2px 8px;" data-toggle="modal" data-target="#myModal_edit" onclick="InsertEdit(event,'+insert_id+')"><i class="fa fa-pencil"></i></button>',
                              '<button class="btn btn-outline-danger" style="padding: 2px 8px 2px 8px;" onclick="delete_data('+insert_id+');delete_table('+insert_id+');"><i class="fa fa-trash-o"></i></button>',
                          '</div>',
                        '</div>',
                        '<div style="padding:10px;">',
                          '<div class="moblie_view">',
                            '<strong class="mobile_title" >Description of property</strong>',
                            '<label class="moblie_insert">'+A+'</label>',
                          '</div>',
                          '<div class="moblie_view">',
                              '<strong class="mobile_title" >Date of purchase or installation</strong>',
                              '<label class="moblie_insert">'+B+'</label>',
                          '</div>',
                          '<div class="moblie_view">',
                              '<strong class="mobile_title" >Original purchase price(HK$)</strong>',
                              '<label class="moblie_insert">'+C+'</label>',
                          '</div>',
                          '<div class="moblie_view">',
                              '<strong class="mobile_title" >Repair / Replacement cost (if applicable) (HK$)</strong>',
                              '<label class="moblie_insert">'+D+'</label>',
                          '</div>',
                          '<div class="moblie_view">',
                              '<strong class="mobile_title" >Claims amount (HK$)</strong>',
                              '<label class="moblie_insert">'+number+'</label>',
                          '</div>',
                        '</div>',
                      '</div>',
                    '</div>',
                  '</div>',
                '</div>',
              '</div>'
            ].join(''));

            $('#subtotal').html(dollarUSLocale.format(total*1 + E*1));
            $('#subtotal_1').html(dollarUSLocale.format(total*1 + E*1));
            $("#close").click();
            $('#modal_Replacement_Reason').val(''); 
            $('#datepicker14').val('');
            $('#modal_price').val('');
            $('#modal_cost').val('');
            $('#modal_amount').val('');
            $('#Total_sum').html(dollarUSLocale.format(Number($('#subtotal_form_3').html().replace(/[$,]/g,''))*1 + Number($('#subtotal').html().replace(/[$,]/g,''))*1));
            insert_id++;
        }
    })

    $("#modal_ok_1").click(function (){
      insert_id_1_item = $('#second .table_tbody').length + 1;
      var A = $('#modal_Description_item').val();
      var B = $('#modal_Reason_cost').val();
      var C = $('#modal_date').val();
      var number = $('#modal_amount_1').val();
      var E = Number(number.replace(/[^0-9\.]+/g,""));
      var total_1 = $('#subtotal_form_3').html();
      var total = Number(total_1.replace(/[^0-9\.]+/g,""));
      let dollarUSLocale = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
      if(A == '' || B == '' || C == '' || E == '' || C == '0.00' || number == '0.00' || C == '0' || number == '0' ){
          toastr.error("Enter the Value !!");
      }else{
          $('#tbody_1').append([
                '<tr class="table_tr_1_'+ insert_id_1+' table_tbody">',
                    '<td><span>'+insert_id_1_item+'</span></td>',
                    '<td>'+A+'</td>',
                    '<td>'+B+'</td>',
                    '<td>'+C+'</td>',
                    '<td>'+number+'</td>',
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
                          '<i class="indicator fa fa-chevron-circle-down" aria-hidden="true" style="padding-right: 12px;"></i><span>Item ' + insert_id_1_item,
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
                          '<label class="moblie_insert">'+A+'</label>',
                        '</div>',
                        '<div class="moblie_view">',
                            '<strong class="mobile_title" >Date of purchase or installation</strong>',
                            '<label class="moblie_insert">'+B+'</label>',
                        '</div>',
                        '<div class="moblie_view">',
                            '<strong class="mobile_title" >Original purchase price(HK$)</strong>',
                            '<label class="moblie_insert">'+C+'</label>',
                        '</div>', 
                        '<div class="moblie_view">',
                            '<strong class="mobile_title" >Claims amount (HK$)</strong>',
                            '<label class="moblie_insert">'+number+'</label>',
                        '</div>',
                      '</div>',
                    '</div>',
                  '</div>',
                '</div>',
              '</div>',
            '</div>'
          ].join(''));

          $('#subtotal_form_3').html(dollarUSLocale.format(total*1 + E*1));
          $('#subtotal_1_form_3').html(dollarUSLocale.format(total*1 + E*1));
          $("#close_1").click();
          $('#modal_Description_item').val(''); 
          $('#modal_Reason_cost').val('');
          $('#modal_date').val('');
          $('#modal_amount_1').val('');
          $('#Total_sum').html(dollarUSLocale.format(Number($('#subtotal_form_3').html().replace(/[$,]/g,''))*1 + Number($('#subtotal').html().replace(/[$,]/g,''))*1));
          insert_id_1++;
      }
    })

    $("#modal_ok_2").click(function (){
      insert_id_2_item = $('#third .table_tbody').length + 1;
      var A = $('#modal_Description_fee').val();
      var B = $('#modal_Reason_fee').val();
      var C = $('#modal_date_fee').val();
      var number = $('#modal_amount_2').val();
      var E = Number(number.replace(/[^0-9\.]+/g,""));
      var total_1 = $('#subtotal2_form_3').html();
      var total = Number(total_1.replace(/[^0-9\.]+/g,""));
      let dollarUSLocale = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
      if(A == '' || B == '' || C == '' || E == '' || C == '0.00' || number == '0.00' || C == '0' || number == '0' ){
          toastr.error("Enter the Value !!");
      }else{

          $('#tbody_2').append([
            '<tr class="table_tr_2_'+ insert_id_2+' table_tbody">',
                '<td><span>'+insert_id_2_item+'</span></td>',
                '<td>'+A+'</td>',
                '<td>'+B+'</td>',
                '<td>'+C+'</td>',
                '<td>'+number+'</td>',
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
                          '<i class="indicator fa fa-chevron-circle-down" aria-hidden="true" style="padding-right: 12px;"></i><span>Item ' + insert_id_2_item,
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
                          '<label class="moblie_insert">'+A+'</label>',
                        '</div>',
                        '<div class="moblie_view">',
                            '<strong class="mobile_title" >Date of purchase or installation</strong>',
                            '<label class="moblie_insert">'+B+'</label>',
                        '</div>',
                        '<div class="moblie_view">',
                            '<strong class="mobile_title" >Original purchase price(HK$)</strong>',
                            '<label class="moblie_insert">'+C+'</label>',
                        '</div>', 
                        '<div class="moblie_view">',
                            '<strong class="mobile_title" >Claims amount (HK$)</strong>',
                            '<label class="moblie_insert">'+number+'</label>',
                        '</div>',
                      '</div>',
                    '</div>',
                  '</div>',
                '</div>',
              '</div>',
            '</div>'
          ].join(''));

          $('#subtotal2_form_3').html(dollarUSLocale.format(total*1 + E*1));
          $('#subtotal_2_form_3').html(dollarUSLocale.format(total*1 + E*1));
          $("#close_2").click();
          $('#modal_Description_fee').val(''); 
          $('#modal_Reason_fee').val('');
          $('#modal_date_fee').val('');
          $('#modal_amount_2').val('');
          insert_id_2++;
      }
    })

    $('#Policy_No').keyup(function(){
      var is = IsPolicy_No(this.value);
      if($('#form_3').hasClass('was-validated')){
        if(is == true){
          $('#Policy_No').removeClass('invalidate');
          $('#Policy_No').addClass('validate');
        }else{
          $('#Policy_No').addClass('invalidate');
          $('#Policy_No').removeClass('validate');
        }
      }
    })

    $('#Mobile_No').keyup(function(){
      var is_1 = IsMobile_No(this.value);
      if($('#form_3').hasClass('was-validated')){
        if(is_1 == true){
          $('#Mobile_No').removeClass('invalidate');
          $('#Mobile_No').addClass('validate');
        }else{
          $('#Mobile_No').addClass('invalidate');
          $('#Mobile_No').removeClass('validate');
        }
      }
    })
  })
  function delete_table(id){
    var value_1 = $($('.table_tr_'+id).find('td')[5]).text();
    var value = Number(value_1.replace(/[^0-9\.]+/g,""));
    var subt = $('#subtotal').html();
    var subtotal = Number(subt.replace(/[^0-9\.]+/g,""));
    let dollarUSLocale = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    let dollarUS = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    $('#subtotal').html(dollarUS.format(subtotal*1 - value*1));
    $('#subtotal_1').html(dollarUS.format(subtotal*1 - value*1));
    $('#Total_sum').html(dollarUSLocale.format(Number($('#subtotal_form_3').html().replace(/[$,]/g,''))*1 + Number($('#subtotal').html().replace(/[$,]/g,''))*1));
  }

  function delete_table_1(id){
    var value_1 = $($('.table_tr_1_'+id).find('td')[4]).text();
    var value = Number(value_1.replace(/[^0-9\.]+/g,""));
    var subt = $('#subtotal_form_3').html();
    var subtotal = Number(subt.replace(/[^0-9\.]+/g,""));
    let dollarUSLocale = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    let dollarUS = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    $('#subtotal_form_3').html(dollarUS.format(subtotal*1 - value*1));
    $('#subtotal_1_form_3').html(dollarUS.format(subtotal*1 - value*1));
    $('#Total_sum').html(dollarUSLocale.format(Number($('#subtotal_form_3').html().replace(/[$,]/g,''))*1 + Number($('#subtotal').html().replace(/[$,]/g,''))*1));
  }

  function delete_table_2(id){
    var value_1 = $($('.table_tr_2_'+id).find('td')[4]).text();
    var value = Number(value_1.replace(/[^0-9\.]+/g,""));
    var subt = $('#subtotal2_form_3').html();
    var subtotal = Number(subt.replace(/[^0-9\.]+/g,""));
    let dollarUS = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    $('#subtotal2_form_3').html(dollarUS.format(subtotal*1 - value*1));
    $('#subtotal_2_form_3').html(dollarUS.format(subtotal*1 - value*1));
  }
  function getItemNumber(){
    for(var i = 0; i < $('#first .table_tbody').length; i++){
      var index = i + 1;
      $($('#first .table_tbody')[i]).find('span').text(index);
    }
  }
  function getItemNumber_1(){
    for(var i = 0; i < $('#second .table_tbody').length; i++){
      var index = i + 1;
      $($('#second .table_tbody')[i]).find('span').text(index);
    }
  }
  function getItemNumber_2(){
    for(var i = 0; i < $('#third .table_tbody').length; i++){
      var index = i + 1;
      $($('#third .table_tbody')[i]).find('span').text(index);
    }
  }
  function InsertEdit(e, id){
    e.preventDefault();
    $('#id').val(id); 
    $('#modal_Replacement_Reason_edit').val($($('.table_tr_'+id).find('td')[1]).text()); 
    $('#datepicker14_edit').val($($('.table_tr_'+id).find('td')[2]).text());
    $('#modal_price_edit').val($($('.table_tr_'+id).find('td')[3]).text());
    $('#modal_cost_edit').val($($('.table_tr_'+id).find('td')[4]).text());
    $('#modal_amount_edit').val($($('.table_tr_'+id).find('td')[5]).text());
  }
  function InsertEdit_1(e, id){
    e.preventDefault();
    $('#id_1').val(id); 
    $('#modal_Description_item_edit').val($($('.table_tr_1_'+id).find('td')[1]).text()); 
    $('#modal_Reason_cost_edit').val($($('.table_tr_1_'+id).find('td')[2]).text());
    $('#modal_date_edit').val($($('.table_tr_1_'+id).find('td')[3]).text());
    $('#modal_amount_edit_1').val($($('.table_tr_1_'+id).find('td')[4]).text());
  }
  function InsertEdit_2(e, id){
    e.preventDefault();
    $('#id_2').val(id);
    $('#modal_Description_fee_edit').val($($('.table_tr_2_'+id).find('td')[1]).text()); 
    $('#modal_Reason_fee_edit').val($($('.table_tr_2_'+id).find('td')[2]).text());
    $('#modal_date_fee_edit').val($($('.table_tr_2_'+id).find('td')[3]).text());
    $('#modal_amount_edit_2').val($($('.table_tr_2_'+id).find('td')[4]).text());
  }
  function modal_ok_edit(){
    $("#close_edit").click();
    var id = $('#id').val();
    var c = $('#modal_amount_edit').val();
    var original = $($('#first .table_tr_'+id).find('td')[5]).text();
    var total = $('#subtotal').text();
    var subtotal = Number(total.replace(/[^0-9\.]+/g,""));
    var clamin = Number(c.replace(/[^0-9\.]+/g,""));
    var origi_clamin = Number(original.replace(/[^0-9\.]+/g,""));

    $($('#first .table_tr_'+id).find('td')[1]).text($('#modal_Replacement_Reason_edit').val());
    $($('#first .table_tr_'+id).find('td')[2]).text($('#datepicker14_edit').val());
    $($('#first .table_tr_'+id).find('td')[3]).text($('#modal_price_edit').val());
    $($('#first .table_tr_'+id).find('td')[4]).text($('#modal_cost_edit').val());
    $($('#first .table_tr_'+id).find('td')[5]).text($('#modal_amount_edit').val());

    $($('#first #collapse'+id).find('.moblie_view')[0]).find('label').html($('#modal_Replacement_Reason_edit').val());
    $($('#first #collapse'+id).find('.moblie_view')[1]).find('label').html($('#datepicker14_edit').val());
    $($('#first #collapse'+id).find('.moblie_view')[2]).find('label').html($('#modal_price_edit').val());
    $($('#first #collapse'+id).find('.moblie_view')[3]).find('label').html($('#modal_cost_edit').val());
    $($('#first #collapse'+id).find('.moblie_view')[4]).find('label').html($('#modal_amount_edit').val());

    let dollarUS = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    $('#subtotal').html(dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));
    $('#subtotal_1').html(dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));
  }
  function modal_ok_edit_1(){
    $("#close_edit_1").click();
    var id = $('#id_1').val();
    var c = $('#modal_amount_edit_1').val();
    var original = $($('#second .table_tr_1_'+id).find('td')[4]).text();
    var total = $('#subtotal_form_3').text();
    var subtotal = Number(total.replace(/[^0-9\.]+/g,""));
    var clamin = Number(c.replace(/[^0-9\.]+/g,""));
    var origi_clamin = Number(original.replace(/[^0-9\.]+/g,""));
    console.log($('#modal_Description_item_edit').val());
    $($('#second .table_tr_1_'+id).find('td')[1]).text($('#modal_Description_item_edit').val());
    $($('#second .table_tr_1_'+id).find('td')[2]).text($('#modal_Reason_cost_edit').val());
    $($('#second .table_tr_1_'+id).find('td')[3]).text($('#modal_date_edit').val());
    $($('#second .table_tr_1_'+id).find('td')[4]).text($('#modal_amount_edit_1').val());

    $($('#collapse_1_'+id).find('.moblie_view')[0]).find('label').html($('#modal_Description_item_edit').val());
    $($('#collapse_1_'+id).find('.moblie_view')[1]).find('label').html($('#modal_Reason_cost_edit').val());
    $($('#collapse_1_'+id).find('.moblie_view')[2]).find('label').html($('#modal_date_edit').val());
    $($('#collapse_1_'+id).find('.moblie_view')[3]).find('label').html($('#modal_amount_edit_1').val());

    let dollarUS = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    console.log(total,dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));
    $('#subtotal_form_3').html(dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));
    $('#subtotal_1_form_3').html(dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));
  }
  function modal_ok_edit_2(){
    $("#close_edit_2").click();
    var id = $('#id_2').val();
    var c = $('#modal_amount_edit_2').val();
    var original = $($('.table_tr_2_'+id).find('td')[4]).text();
    var total = $('#subtotal2_form_3').text();
    var subtotal = Number(total.replace(/[^0-9\.]+/g,""));
    var clamin = Number(c.replace(/[^0-9\.]+/g,""));
    var origi_clamin = Number(original.replace(/[^0-9\.]+/g,""));
    $($('.table_tr_2_'+id).find('td')[1]).text($('#modal_Description_fee_edit').val());
    $($('.table_tr_2_'+id).find('td')[2]).text($('#modal_Reason_fee_edit').val());
    $($('.table_tr_2_'+id).find('td')[3]).text($('#modal_date_fee_edit').val());
    $($('.table_tr_2_'+id).find('td')[4]).text($('#modal_amount_edit_2').val());

    $($('#collapse_2_'+id).find('.moblie_view')[0]).find('label').html($('#modal_Description_fee_edit').val());
    $($('#collapse_2_'+id).find('.moblie_view')[1]).find('label').html($('#modal_Reason_fee_edit').val());
    $($('#collapse_2_'+id).find('.moblie_view')[2]).find('label').html($('#modal_date_fee_edit').val());
    $($('#collapse_2_'+id).find('.moblie_view')[3]).find('label').html($('#modal_amount_edit_2').val());

    let dollarUS = Intl.NumberFormat('en-US',{style:'currency',currency:'USD'});
    console.log(subtotal,clamin,origi_clamin);
    console.log(dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));

    $('#subtotal2_form_3').html(dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));
    $('#subtotal_2_form_3').html(dollarUS.format(subtotal*1 + clamin*1 - origi_clamin*1));
  }


  function delete_data(e){
    $('#card_'+e).remove();
    $('.table_tr_'+e).remove();
    $('#row_table_'+e).remove();

    for(var i = 0; i < $('#first .card-header').length; i++){
      var index = i + 1;
      $($('#first .card-header')[i]).find('span').text("Item " + index);
    }
  }
  function delete_data_1(e){
    $('#card_1_'+e).remove();
    $('.table_tr_1_'+e).remove();
    $('#row_table_1_'+e).remove();

    for(var i = 0; i < $('#second .card-header').length; i++){
      var index = i + 1;
      $($('#second .card-header')[i]).find('span').text("Item " + index);
    }
  }
  function delete_data_2(e){
    $('#card_2_'+e).remove();
    $('.table_tr_2_'+e).remove();
    $('#row_table_2_'+e).remove();

    for(var i = 0; i < $('#third .card-header').length; i++){
      var index = i + 1;
      $($('#third .card-header')[i]).find('span').text("Item " + index);
    }
  }

  function stop(e){
    e.preventDefault();
  }
  function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (bytes == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
 }
  function data_upload(e, value){
    e.preventDefault();
    var total_size = 0;
    var id = 'files_' + value;
    var name = 'file_name_' + value;
    var old_name = 'old_file_name_' + value;
    var old_name_split = 'old_file_name_split_' + value;
    var form_data = new FormData();
    var totalfiles = document.getElementById(id).files.length;
    for (var index = 0; index < totalfiles; index++) {
      console.log(document.getElementById(id).files[index].type);
        var upload_type = document.getElementById(id).files[index].type;
        var extension = upload_type.split('/');
        if(extension[0] == 'image' || upload_type == 'application/pdf'){
          form_data.append("files[]", document.getElementById(id).files[index]);
          var each = document.getElementById(id).files[index].size;
          total_size = total_size + each;
        }else{
          toastr.error('You can upload only Image and PDF files.');
        }
    }
    
    if(total_size < 6300000){
      $.ajax({
        url: 'php/ajaxfile.php',
        type: 'post',
        data: form_data,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function (response) {
            toastr.success("Success File Upload !!!");
            var original = $("#"+ name).val();
            var name_part = $("#"+ old_name).val();
            $("#"+ name).val(original.concat(response[0]+','));
            $("#"+ old_name).val(name_part.concat(response[1]+','));
            $("#"+ id).val('');

            for (let index = 0; index < response[0].length; index++) {
              var element = response[0][index];
              var element_old = response[1][index];
              if(element_old.length >= 15){
                var first_name = element_old.slice(0, 3);
                var last_name = element_old.slice(-9);
                var element_old = first_name + '...' + last_name;
              }
              var name_part_split = $("#"+ old_name_split).val();
              $("#"+ old_name_split).val(name_part_split.concat(element_old+','));
              console.log(element,response[1][index],element_old);
              $('#uploaded_file_'+ value).append([
                '<div class="img_style">',
                  '<div>' + element_old + '</div>',
                  '<div><button type="button" class="btn_style" onclick="remove_file('+'`'+ value +'`'+ ','+'`'+ element +'`'+ ','+ '`'+ response[1][index] +'`'+ ','+ '`'+ element_old +'`'+');this.parentElement.parentElement.remove();">Remove</button></div>',
                '</div>'
              ].join(''));
            }
        }
      });
    }else{
      toastr.error('The size of the uploaded files are '+bytesToSize(total_size)+ '.<br>'+'The maximum file size for uploads is 6MB.');
    }
      
  }

  function remove_file(id , data, data_old, data_old_split){
    var name = 'file_name_' + id;
    var name_old = 'old_file_name_' + id;
    var name_old_split = 'old_file_name_split_' + id;
    $.post("php/delete.php",
      {
        delete_file: data,
      },
      function(response){
          var searched_val = $("#"+ name).val();
          var searched_val_old = $("#"+ name_old).val();
          var searched_val_old_split = $("#"+ name_old_split).val();
          var ttt = searched_val.split(',');
          var ttt1 = searched_val_old.split(',');
          var ttt2 = searched_val_old_split.split(',');
          var index = ttt.indexOf(response);
          var index1 = ttt1.indexOf(data_old);
          var index2 = ttt2.indexOf(data_old_split);
          ttt.splice(index, 1);
          ttt1.splice(index1, 1);
          ttt2.splice(index2, 1);
          $("#"+ name).val(ttt);
          $("#"+ name_old).val(ttt1);
          $("#"+ name_old_split).val(ttt2);
        toastr.success('Success File Delete !!');
      });
  }
  function cancel(){
    $.post("php/allDataRemove.php",
    {
      fileNames: $('#file_name').val()
    },
    function(data){
      if(data == 'success')
        location.href = 'index.php';
    });
  }

  

  function home1_show(){
    var next_var;
    var policy_no = $('#Policy_No').val();
    var forms = document.querySelectorAll('.needs-validation0');
    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        event.preventDefault(event);
        form.classList.add('was-validated')
      }, true)
    })

    ////////// Policy_No validate //////
    if(IsPolicy_No($('#Policy_No').val()) == false){
      toastr.error("Incorrect the Policy No value.");
      $('#Policy_No').addClass('invalidate');

    }else if(IsPolicy_No($('#Policy_No').val()) == true){
      $('#Policy_No').addClass('validate');

    }
    ///// Mobile_No validat  ////////
    if(IsMobile_No($('#Mobile_No').val()) == false){
      toastr.error("Incorrect the Mobile No value.");
      $('#Mobile_No').addClass('invalidate');

    }else if(IsMobile_No($('#Mobile_No').val()) == true){
      $('#Mobile_No').addClass('validate');

    }

    if($('#Policy_No').val() == ''){
      toastr.error("Enter the Policy No.");
    }else if($('#Holder_Name').val() == ""){
      toastr.error("Enter the Name of policy holder.");
    }else if($('#Insured_Name').val() == ""){
      toastr.error("Enter the Name of the insured.");
    }else if($('#Claimant_Name').val() == ""){
      toastr.error("Enter the Name of the claimant.");
    }else if($('#Person_Name').val() == ""){
      toastr.error("Enter the Name of contact person.");
    }else if($('#email_Address').val() == ""){
      toastr.error("Enter the Email Address.");
    }else if($('#Mobile_No').val() == ''){
      toastr.error("Enter the Mobile No.");
    }else{
      if(IsEmail($('#email_Address').val()) == false){
        toastr.error("Incorrect Email value.");
      }else{
        $.post("php/validate.php",
        {
          policy_no: policy_no,
        },
        function(data){
          if(data == 'true'){
            var n = $( "input[type=checkbox]:checked" ).length;
            if (n > 0){
              location.href = "Property_Claim_Info.php";
            }else{
              toastr.warning('You must select one of Claim Types.');
            }
          }
          else
            toastr.error("Incoreect Policy No.");
        }); 
      }
    } 
    


    var LDCS_form_3 = Business_Interruption_form_3 = Loss_Money_form_3 = Public_Liability_form_3 = Personal_Assault_form_3 = Plate_Glass_form_3 = Employee_Compensation_form_3 = Other_form_3 = 0;
    if ($('#LDCS_form_3').is(':checked')){
      LDCS_form_3 = 1;
    }
    if ($('#Business_Interruption_form_3').is(':checked')){
      Business_Interruption_form_3 = 1;
    }
    if ($('#Loss_Money_form_3').is(':checked')){
      Loss_Money_form_3 = 1;
    }
    if ($('#Public_Liability_form_3').is(':checked')){
      Public_Liability_form_3 = 1;
    }
    if ($('#Personal_Assault_form_3').is(':checked')){
      Personal_Assault_form_3 = 1;
    }
    if ($('#Plate_Glass_form_3').is(':checked')){
      Plate_Glass_form_3 = 1;
    }
    if ($('#Employee_Compensation_form_3').is(':checked')){
      Employee_Compensation_form_3 = 1;
    }
    if ($('#Other_form_3').is(':checked')){
      Other_form_3 = 1;
    }

    var Claims_Type = LDCS_form_3 + '||' + Business_Interruption_form_3 + '||' + Loss_Money_form_3 + '||' + Public_Liability_form_3 + '||' + Personal_Assault_form_3 + '||' + Plate_Glass_form_3 + '||' + Employee_Compensation_form_3 + '||' + Other_form_3;

    $.post("php/claim_info_session_data.php",
    {
      'Policy_No'     : $('#Policy_No').val(),
      'Holder_Name'   : $('#Holder_Name').val(),
      'Insured_Name'  : $('#Insured_Name').val(),
      'Claimant_Name' : $('#Claimant_Name').val(),
      'Person_Name'   : $('#Person_Name').val(),
      'Mobile_No'     : $('#Mobile_No').val(),
      'email_Address' : $('#email_Address').val(),
      'Claims_Type'   : Claims_Type
    },
    function(data){
    }); 
}
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
      return false;
    }else{
      return true;
    }
}
function IsPolicy_No(data) {
    // You can change uppercase and lowercase .
    var regex1 = /^([0-9]{1})+([a-zA-Z]{2})+\/([0-9]{5})+\/([0-9]{2,5})+$/;

    if(!regex1.test(data)) {
      return false;
    }else{
      return true;
    }
}
function IsMobile_No(data) {
    // You can change uppercase and lowercase .
    var regex = /^\+?[(]?([0-9]{3})\)?[). ]?([0-9]{4})[-.]?([0-9]{4,7})$/;
    if(!regex.test(data)) {
      return false;
    }else{
      return true;
    }
}
  function home_show(){
    location.href = "index.php";
    $('#home1').removeClass("active show");
    $('#home0').addClass("active show");
    $('#personal').removeClass("active");
    $('#payment').removeClass("active");
    $('#confirm').removeClass("active");

  }
  function before(){
    location.href = "Property_Claim_Info.php";
    $('#home2').removeClass("active show");
    $('#home1').addClass("active show");
    $('#payment').removeClass("active");
    $('#confirm').removeClass("active");
}

 
function replace(value) {
  if(value){
    var listName='', number = 0;
    var object = value.split(',');
    for (const key in object) {
      if(object[key]){
        number = key*1 + 1;
        listName += number +'. ' + object[key] +'<br>';
      }
    }
    return listName;
  }
}
function navigation(key){
  var find = $( "#"+key ).hasClass( "active");
  switch (key) {
    case 'account':
      if(find == true){
        location.href = "index.php";
      }
      break;
    case 'personal':
      if(find == true){
        location.href = "Property_Claim_Info.php";
      }
      break;
    case 'payment':
      if(find == true){
        location.href = "Review.php";
      }
      break;
    case 'confirm':
      if(find == true){
        location.href = " REF_NO.php";
      }
      break;
  }
}
function submit(){
  if ($('#I_agree').is(':checked')) {
    $.post("php/insert_data.php",
    function(data){
      var date = new Date().getFullYear();
      var reference = data + '/' + date;
      $('#reference').text(reference);
      localStorage.setItem('reference', data);
        $('#screen_loading').show();
        $.post("send_email/send_email.php",
        { 
          reference: reference
        },
        function(params) {
          $('#screen_loading').hide();
          // if(params == '1'){
            // $('#home2').removeClass("active show");
            // $('#home3').addClass("active show");
            // $('#confirm').addClass("active");
            location.href = "REF_NO.php";
            toastr.success('Success Mail Sending.');
          // }else{
          //   toastr.error('Fail Mail Sending.');
          // }
        });
    });
  }else{
    toastr.error("You must agree to all the declarations.");
  }

}

$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 600
    });
    });
    
    $('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
    return false;
    })
    
});
function fileName_Delete(e, id) {
  e.preventDefault();
  $('#'+id).val('');
}
/* Preview and Validate */
// $("#form input[type='file']").on("change", function(){
	
// 	$("#upload-preview").uploadImagesPreview("#form", 
// 	{
// 		image_type: "jpg|jpeg|png|gif",
// 		min_size: 24,
// 		max_size: (1024*1024*3), /* 3 Mb */
// 		max_files: 10
// 	}, function(){
// 		switch(__errors__upload__) /* Check the possibles erros */
// 		{
// 			case 'ERROR_CONTENT_TYPE': alert("Error content type"); break;
// 			case 'ERROR_MIN_SIZE': alert("Error min size"); break;
// 			case 'ERROR_MAX_SIZE': alert("Error max size"); break;
// 			case 'ERROR_MAX_FILES': alert("Error max files"); break;
// 			default: $("#btn").removeAttr("disabled"); break; /* Activate the button Form */
// 		}
// 	});
// });