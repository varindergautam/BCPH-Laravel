//update user status
jQuery(document).on('click', ".update_status", function () {
    var id = $(this).attr('data-id');
    var title = $(this).attr('data-title');
    var url = $(this).attr('data-url');
    var icon = $(this).attr('data-icon');
    var success_msg = $(this).attr('data-success');
    var cancel_msg = $(this).attr('data-cancel');
    var data_table = $(this).attr('data-table');
    var body = 'Are you sure to change status?';

    swal({
        // title: title,
        text: body,
        icon: icon,
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status == 1) {
                            swal(success_msg, {
                                icon: "success",
                            });

                            setTimeout(function () {
                                window.location.reload();
                            }, 2000);
                        } else if (response.status == 0) {
                            swal(response.message, {
                                icon: "warning",
                            });
                        }
                    }
                });
            } else {
                swal(cancel_msg);
                if ($(this).attr('data-status') == 0) {
                    $('#togle-' + id).prop('checked', false);
                } else {
                    $('#togle-' + id).prop('checked', true);
                }
            }
        });
});

//Delete Student
jQuery(document).on('click', ".delete-data", function () {
    var title = $(this).attr('data-title');
    var body = $(this).attr('data-body');
    var url = $(this).attr('data-url');
    var icon = $(this).attr('data-icon');
    var success_msg = $(this).attr('data-success');
    var cancel_msg = $(this).attr('data-cancel');

    swal({
        title: title,
        text: body,
        icon: icon,
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "GET",
                url: url,
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    if (response.status == 1) {
                        swal(success_msg, {
                            icon: "success",
                        });

                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    } else if (response.status == 0) {
                        swal(response.message, {
                            icon: "warning",
                        });

                    }
                }
            });
        } else {
            swal(cancel_msg);
        }
    });
});


//show image after upload file
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-img-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

jQuery(".image").change(function () {
    readURL(this);
});


//Float Number Validation
jQuery('.float_number').keypress(function (event) {
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});

//number validation
jQuery(".number").keypress(function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        return false;
    }
});



//Append Service text field
var rowNum = 0;
jQuery(document).on('click', '.append_service', function (e) {
    e.preventDefault();

    rowNum++;
    $('.append_service_form').append(
        '<div class="mt-4 row">' +
        '<label class="col-md-2">Service ' + rowNum + '</label>' +
        '<input type="text" id="service' + rowNum + '" class=" form-control col-md-7" name="service[]">' +
        '<div class="col-sm-3 ">' +
        '<a href="" class="btn btn-primary append_remove">Remove</a>' +
        '</div>' +
        '</div>'
    );
});

jQuery(document).on('click', '.append_remove', function (e) {
    e.preventDefault();
    console.log($(this).parent().parent());
    jQuery(this).parent().parent().remove();
});


//Drop search with list
jQuery("#selUser").select2();

// Check all 
$('#checkall').click(function(){
  if($(this).is(':checked')){
     $('.delete_check').prop('checked', true);
  }else{
     $('.delete_check').prop('checked', false);
  }
});


//Delete All category Records
$('#delete_record').click(function(){

  var deleteids_arr = [];
  // Read all checked checkboxes
  $("input:checkbox[class=delete_check]:checked").each(function () {
     deleteids_arr.push($(this).val());
  });

  // Check checkbox checked or not
  if(deleteids_arr.length > 0){

     // Confirm alert
     // var confirmdelete = confirm("Once category is delete, all medicine and subcateogory will be deleted related to this category!");
     // if (confirmdelete == true) {
     //    $.ajax({
     //       method: 'get',
     //       url: BASE_URL +'/admin/category/delete_all',
     //       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     //       data: {deleteids_arr: deleteids_arr},
     //       success: function(response){
     //          location.reload(true);
     //       }
     //    });
     // }

     swal({
        title: 'Once category is delete, all medicine and subcateogory will be deleted related to this category!',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
             method: 'get',
             url: BASE_URL +'/admin/category/delete_all',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data: {deleteids_arr: deleteids_arr},
             success: function(response){
              console.log(response);

                location.reload(true);
             
             }
          });
        } else {
            swal({title: 'Your category is safe!'});
        }
    });
  }
  else
  {
    swal({
        title: 'Please, Select first any category!',
        showCancelButton: false,
        showConfirmButton: true,
        dangerMode: true,
    })
  }
});


//Delete All subcategory Records
$('#delete_subcategory_record').click(function(){

  var deleteids_arr = [];
  // Read all checked checkboxes
  $("input:checkbox[class=delete_check]:checked").each(function () {
     deleteids_arr.push($(this).val());
  });

  // Check checkbox checked or not
  if(deleteids_arr.length > 0){

     // Confirm alert
     // var confirmdelete = confirm("Once sub category is delete, all medicine will be deleted related to this sub category!");
     // if (confirmdelete == true) {
     //    $.ajax({
     //       method: 'get',
     //       url: BASE_URL +'/admin/subcategory/delete_all',
     //       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     //       data: {deleteids_arr: deleteids_arr},
     //       success: function(response){
     //          location.reload(true);
     //       }
     //    });
     // } 

     swal({
        title: 'Once sub category is delete, all medicine will be deleted related to this sub category!',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
             method: 'get',
             url: BASE_URL +'/admin/subcategory/delete_all',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data: {deleteids_arr: deleteids_arr},
             success: function(response){
              console.log(response);

                location.reload(true);
             
             }
          });
        } else {
            swal({title: 'Your sub category is safe!'});
        }
    });
  }
  else
  {
    swal({
        title: 'Please, Select first any sub category!',
        showCancelButton: false,
        showConfirmButton: true,
        dangerMode: true,
    })
  }
});


//Delete All Medicines Records
$('#delete_medicine_record').click(function(){

  var deleteids_arr = [];
  // Read all checked checkboxes
  $("input:checkbox[class=delete_check]:checked").each(function () {
     deleteids_arr.push($(this).val());
  });

  // Check checkbox checked or not
  if(deleteids_arr.length > 0){

     // Confirm alert
     // var confirmdelete = confirm("All medicine will be deleted!");
     // if (confirmdelete == true) {
        // $.ajax({
        //    method: 'get',
        //    url: BASE_URL +'/admin/medicine/delete_all',
        //    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //    data: {deleteids_arr: deleteids_arr},
        //    success: function(response){
        //     console.log(response);

        //       location.reload(true);
           
        //    }
        // });
     // }

    swal({
        title: 'Are you sure want to delete?',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
             method: 'get',
             url: BASE_URL +'/admin/medicine/delete_all',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data: {deleteids_arr: deleteids_arr},
             success: function(response){
              console.log(response);

                location.reload(true);
             
             }
          });
        } else {
            swal({title: 'Your medicine is safe!'});
        }
    });
  }
  else
  {
    swal({
        title: 'Please, Select first any medicine!',
        showCancelButton: false,
        showConfirmButton: true,
        dangerMode: true,
    })
  }
});



//Delete All Category Doctor Records
$('#delete_category_doctor_record').click(function(){

  var deleteids_arr = [];
  // Read all checked checkboxes
  $("input:checkbox[class=delete_check]:checked").each(function () {
     deleteids_arr.push($(this).val());
  });

  // Check checkbox checked or not
  if(deleteids_arr.length > 0){

     // Confirm alert
     // var confirmdelete = confirm("All category doctor will be deleted!");
     // if (confirmdelete == true) {
     //    $.ajax({
     //       method: 'get',
     //       url: BASE_URL +'/admin/category_doctor/delete_all',
     //       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     //       data: {deleteids_arr: deleteids_arr},
     //       success: function(response){
     //        console.log(response);
            
     //          location.reload(true);
           
     //       }
     //    });
     // }

     swal({
        title: 'Are you sure want to delete?',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
             method: 'get',
             url: BASE_URL +'/admin/category_doctor/delete_all',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data: {deleteids_arr: deleteids_arr},
             success: function(response){
              console.log(response);

                location.reload(true);
             
             }
          });
        } else {
            swal({title: 'Your category is safe!'});
        }
    }); 
  }
  else
  {
    swal({
        title: 'Please, Select first any doctor category!',
        showCancelButton: false,
        showConfirmButton: true,
        dangerMode: true,
    })
  }
});


//Delete All Clinic Records
$('#delete_clinic_record').click(function(){

  var deleteids_arr = [];
  // Read all checked checkboxes
  $("input:checkbox[class=delete_check]:checked").each(function () {
     deleteids_arr.push($(this).val());
  });

  // Check checkbox checked or not
  if(deleteids_arr.length > 0){

     // Confirm alert
     // var confirmdelete = confirm("All clinic will be deleted!");
     // if (confirmdelete == true) {
     //    $.ajax({
     //       method: 'get',
     //       url: BASE_URL +'/admin/clinic/delete_all',
     //       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     //       data: {deleteids_arr: deleteids_arr},
     //       success: function(response){
     //        console.log(response);
            
     //          location.reload(true);
           
     //       }
     //    });
     // }

     swal({
        title: 'Are you sure want to delete?',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
             method: 'get',
             url: BASE_URL +'/admin/clinic/delete_all',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data: {deleteids_arr: deleteids_arr},
             success: function(response){
              console.log(response);

                location.reload(true);
             
             }
          });
        } else {
            swal({title: 'Your clinic is safe!'});
        }
    });  
  }
  else
  {
    swal({
        title: 'Please, Select first any clinic!',
        showCancelButton: false,
        showConfirmButton: true,
        dangerMode: true,
    })
  }
});



//Delete All Doctor Records
$('#delete_doctor_record').click(function(){

  var deleteids_arr = [];
  // Read all checked checkboxes
  $("input:checkbox[class=delete_check]:checked").each(function () {
     deleteids_arr.push($(this).val());
  });

  // Check checkbox checked or not
  if(deleteids_arr.length > 0){

     // Confirm alert
     // var confirmdelete = confirm("All doctor will be deleted!");
     // if (confirmdelete == true) {
     //    $.ajax({
     //       method: 'get',
     //       url: BASE_URL +'/admin/doctor/delete_all',
     //       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
     //       data: {deleteids_arr: deleteids_arr},
     //       success: function(response){
     //        console.log(response);
            
     //          location.reload(true);
           
     //       }
     //    });
     // }

     swal({
        title: 'Are you sure want to delete?',
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
             method: 'get',
             url: BASE_URL +'/admin/doctor/delete_all',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             data: {deleteids_arr: deleteids_arr},
             success: function(response){
              console.log(response);

                location.reload(true);
             
             }
          });
        } else {
            swal({title: 'Your doctor is safe!'});
        }
    });   
  }
  else
  {
    swal({
        title: 'Please, Select first any doctor!',
        showCancelButton: false,
        showConfirmButton: true,
        dangerMode: true,
    })
  }
});
