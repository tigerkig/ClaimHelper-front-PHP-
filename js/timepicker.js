$(document).ready(function (){

/////////////////////////////////////// Moblie Responsive /////////////////////////////////////////
    var width = $(window).width();
    if (width < 500){
        /////// Employee timepicker/////////

        $('#datepicker').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        
        $('#datepicker1').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        

        $('#datepicker2').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
            format: 'YYYY-MM-DD',
            }
        });
        

        $('#datepicker1').on('change', function(){
            $('#datepicker2').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                opens: 'center',
                maxDate: new Date(),
                minDate:moment($('#datepicker1').val(), "YYYY-M-DD").add(1, 'd'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
            // $('#datepicker2').val('');
        })
        $('#datepicker2').on('change', function(){
            $('#datepicker1').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                opens: 'center',
                maxDate:moment($('#datepicker2').val(), "YYYY-M-DD").add('d'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
        })

        ///////////Personal Accident datepicker///////////

        $('#datepicker4').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker4').val('');

        $('#datepicker5').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker5').val('');

        $('#datepicker6').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
            format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker6').val('');

        $('#datepicker5').on('change', function(){
            $('#datepicker6').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                opens: 'center',
                maxDate: new Date(),
                minDate:moment($('#datepicker5').val(), "YYYY-M-DD").add(1, 'd'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
            // $('#datepicker6').val('');
        })
        $('#datepicker6').on('change', function(){
            $('#datepicker5').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                opens: 'center',
                maxDate:moment($('#datepicker6').val(), "YYYY-M-DD").add('d'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
        })

    ///////// Repatriation //////////

        $('#datepicker7').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker7').val('');

    /////////////// Clinical Expenses ///////////////

        $('#datepicker8').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker8').val('');

    ////////////// Surgical & Hospitalization Expense ///////////////

        $('#datepicker9').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker9').val('');

    //////////// Dental Expenses /////////////

        $('#datepicker10').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker10').val('');

    //////////// Loss of Services Cash Allowance ///////////

        $('#datepicker11').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker11').val('');

        $('#datepicker12').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker12').val('');

        $('#datepicker13').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
            format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker13').val('');

        $('#datepicker12').on('change', function(){
            $('#datepicker13').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                opens: 'center',
                maxDate: new Date(),
                minDate:moment($('#datepicker12').val(), "YYYY-M-DD").add(1, 'd'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
            // $('#datepicker13').val('');
        })
        $('#datepicker13').on('change', function(){
            $('#datepicker12').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                opens: 'center',
                maxDate:moment($('#datepicker13').val(), "YYYY-M-DD").add('d'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
        })

    //////// Date of purchase or installation(YYYY-MM-DD) /////////

        $('#datepicker14').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        $('#datepicker14_edit').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'center',
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker14').val('');

    /////////// Submission Date /////////////

        $('#datepicker_Submission').daterangepicker({
            singleDatePicker: true,
            timePicker: true,
            opens: 'center',
            timePicker24Hour: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD HH:MM',
            }
        });

        $('#modal_date').daterangepicker({
            singleDatePicker: true,
            opens: 'center',
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });

        $('#modal_date_fee').daterangepicker({
            singleDatePicker: true,
            opens: 'center',
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });

        $('#modal_date_fee_edit').daterangepicker({
            singleDatePicker: true,
            opens: 'center',
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        
        $('#Period_B_I_form_3').daterangepicker({
            opens: 'center',
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY/MM/DD',
            }
        });

        $('#Sick_leave').daterangepicker({
            opens: 'center',
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY/MM/DD',
            }
        });

        $('#Date_injury').daterangepicker({
            singleDatePicker: true,
            opens: 'center',
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });

        $('#datepicker1_form_3').daterangepicker({
            singleDatePicker: true,
            opens: 'center',
            timePicker: true,
            timePicker24Hour: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD HH:MM',
            }
        });
        
    }else{

///////////////////////////////////////////////////////////////////////////////////////////////
/////// Employee timepicker/////////

        $('#datepicker').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        $('#datepicker').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD'));
        });
        // $('#datepicker').val('');
        
        $('#datepicker1').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker1').val('');

        $('#datepicker2').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
            format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker2').val('');

        $('#datepicker1').on('change', function(){
            $('#datepicker2').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                maxDate: new Date(),
                minDate:moment($('#datepicker1').val(), "YYYY-M-DD").add(1, 'd'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
            // $('#datepicker2').val('');
        })
        $('#datepicker2').on('change', function(){
            $('#datepicker1').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                maxDate:moment($('#datepicker2').val(), "YYYY-M-DD").add('d'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
        })

    ///////////Personal Accident datepicker///////////

        $('#datepicker4').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker4').val('');

        $('#datepicker5').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker5').val('');

        $('#datepicker6').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
            format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker6').val('');

        $('#datepicker5').on('change', function(){
            $('#datepicker6').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                maxDate: new Date(),
                minDate:moment($('#datepicker5').val(), "YYYY-M-DD").add(1, 'd'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
            // $('#datepicker6').val('');
        })
        $('#datepicker6').on('change', function(){
            $('#datepicker5').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                maxDate:moment($('#datepicker6').val(), "YYYY-M-DD").add('d'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
        })

    ///////// Repatriation //////////

        $('#datepicker7').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker7').val('');

    /////////////// Clinical Expenses ///////////////

        $('#datepicker8').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker8').val('');

    ////////////// Surgical & Hospitalization Expense ///////////////

        $('#datepicker9').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker9').val('');

    //////////// Dental Expenses /////////////

        $('#datepicker10').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker10').val('');

    //////////// Loss of Services Cash Allowance ///////////

        $('#datepicker11').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker11').val('');

        $('#datepicker12').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker12').val('');

        $('#datepicker13').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
            format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker13').val('');

        $('#datepicker12').on('change', function(){
            $('#datepicker13').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                maxDate: new Date(),
                minDate:moment($('#datepicker12').val(), "YYYY-M-DD").add(1, 'd'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
            // $('#datepicker13').val('');
        })
        $('#datepicker13').on('change', function(){
            $('#datepicker12').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                maxDate:moment($('#datepicker13').val(), "YYYY-M-DD").add('d'),
                locale: {
                    format: 'YYYY-M-DD'
                },
            })
        })
    //////// Date of purchase or installation(YYYY-MM-DD) /////////

        $('#datepicker14').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        $('#datepicker14_edit').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });
        // $('#datepicker14').val('');

    /////////// Submission Date /////////////

        $('#datepicker_Submission').daterangepicker({
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD HH:MM',
            }
        });

        $('#modal_date').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });

        $('#modal_date_fee').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });

        $('#modal_date_fee_edit').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });

        $('#Period_B_I_form_3').daterangepicker({
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY/MM/DD',
            }
        });

        $('#Sick_leave').daterangepicker({
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY/MM/DD',
            }
        });

        $('#Date_injury').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD',
            }
        });

        $('#datepicker1_form_3').daterangepicker({
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
            showDropdowns: true,
            maxDate: new Date(),
            locale: {
                format: 'YYYY-MM-DD HH:MM',
            }
        });
    }

})
