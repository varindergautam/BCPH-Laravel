function postAjax(url, method, formData){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        method: method,
        data: formData,
        processData: false,
        contentType: false,
        dataType : "json",
        beforeSend: function(){
            $(".error").text("");
            $('.loader').show();
        },
        success: function (response) {
            if(response.status == 0){
                swalErrorMessage(response);
            }else{
                swalSuccessMessage(response);
            }
        },
        error: function(data) {
            var errors = $.parseJSON(data.responseText);
            printErrorMsg(errors);
        },
        complete: function(){
            setTimeout(function() {
                $( ".loader" ).fadeOut();
              }, 700);
        }
    });
}

function printErrorMsg (msg) {
    $.each(msg.errors,function(field_name,error){
        $("#" + field_name + "-error").text(error);
    })
}

function swalSuccessMessage(data) {
    var message = '<strong>' + data.message + '</strong>';
    Swal.fire({
      title: false,
      html: message,
      icon: "success",
    //   button: false,
    // timer: 2000,
    showCancelButton: false,
    showConfirmButton: false
    });

    windowReload(data.redirect);
}

function swalErrorMessage(data) {
    var message = '<strong>' + data.message + '</strong>';
    Swal.fire({
      title: false,
    //   text: data.message,
        html: message,
      icon: "error",
    //   button: false,
    showCancelButton: false,
    showConfirmButton: false
    });

    windowReload(data.redirect);
}

function windowReload(url) {
    setTimeout(function(){
    //    window.location.reload();
    if(url != undefined){
        window.location.replace(url)
    }
    else{
        window.location.reload();
    }
    }, 2000);
}