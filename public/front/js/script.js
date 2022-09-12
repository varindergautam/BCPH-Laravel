jQuery(document).ready(function() {
    jQuery(".numeric-only").keypress(function(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            jQuery("#errmsg").html("Digits Only").show().fadeOut("slow");
            return false;
        }
    });
});

$(document).on('click', '.which_univeristy', function(){
	var value = $(this).val();
	var remark_name = "#which_univeristy_remarks";
	show_remark(value, remark_name);
	
});

$(document).on('click', '.appointment_holds', function(){
	var value = $(this).val();
	var remark_name = "#appointment_holds_remarks";
	show_remark(value, remark_name);
});

$(document).on('click', '.business_or_profession', function(){
	var value = $(this).val();
	var remark_name = "#business_or_profession_remark";
	show_remark(value, remark_name);
});


$(document).on('click', '.criminal_court', function(){
	var value = $(this).val();
	var remark_name = "#criminal_court_remark";
	show_remark(value, remark_name);
});

$(document).on('click', '.criminal_proceeding_againest_applicant', function(){
	var value = $(this).val();
	var remark_name = "#criminal_proceeding_againest_applicant_remark";
	show_remark(value, remark_name);
});

$(document).on('click', '.suspension_type', function(){
	var value = $(this).val();
	var remark_name = "#suspension_type_remark";
	show_remark(value, remark_name);
});

$(document).on('click', '.declared_insolvent_type', function(){
	var value = $(this).val();
	var remark_name = "#declared_insolvent_type_remark";
	show_remark(value, remark_name);
});

$(document).on('click', '.already_apply_for_enrollment', function(){
	var value = $(this).val();
	var remark_name = "#already_apply_for_enrollment_remark";
	show_remark(value, remark_name);
});

function show_remark(value, remark_name){
	if(value == '1'){
		$(remark_name).show();
	}
	else{
		$(remark_name).hide();
	}
}

