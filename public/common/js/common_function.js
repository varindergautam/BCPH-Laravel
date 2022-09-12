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
            console.log(response);
            // var response = JSON.stringify(response);
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
                $( ".loader" ).hide('slow');
              }, 1000);
        }
    });
}

function printErrorMsg (msg) {
    $.each(msg.errors,function(field_name,error){
        $("#" + field_name + "-error").text(error);
    })
}

function swalSuccessMessage(data) {
    swal({
      title: false,
      text: data.message,
      icon: "success",
      button: false,
    });

    windowReload(data.redirect);
}

function swalErrorMessage(data) {
    swal({
      title: false,
      text: data.message,
      icon: "error",
      button: false,
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