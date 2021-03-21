//Check Session
if (sessionEmail === null) {
    alert('Sorry you must login')
    window.location.href = base_url;
}

//Back to Top Button
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});

//Hidden password user profile
$(".toggle-new-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
//Extra input type of inspection
$('#selectTypeInspectionId').change(function() {
    if ($(this).val() == 'other') {
        $('.otherinspection').append(
            '<input type="text" id="otherinput" name="type_name" class="form-control" placeholder="Enter other type of inspection">'
        );
    } else {
        $('#otherinput').remove();
    }
});

//disable submit
$(document).ready(function() {
    //Datable
    $('table.dataTable').DataTable({
        fixedHeader: {
            header: true,
            footer: true
        }
    });
    //Autocomplete OFF
    $("form").attr('autocomplete', 'off');

    $('.filter-status').change(function() {
        $(this).closest('form').submit();
    });

    $("#viewdetailnewproject").click(function(e) {
        alert('asdasd')
    });
    //=================================================================


    var myDropzone = Dropzone.forElement("#dropzoneForm");
    $('#buttonAddProject').prop('disabled', true);

    //Keyup change
    $('.field input').on('keyup change', function() {
        var empty = false;
        if (myDropzone.getQueuedFiles().length == 0) {
            empty = true;
        }

        $('.field input').each(function() {
            if ($(this).val().length == 0) {
                empty = true
            }
        });

        if (empty) {
            $('#buttonAddProject').attr('disabled', 'disabled');
        } else {
            $('#buttonAddProject').attr('disabled', false);
        }
    });


    //Add Project
    $("#closeModalAddProject").click(function() {
        window.location.reload(true);
    })

    $("#addProjectFrom").on('submit', function(e) {
        // var start_date = $("#startDateInp").val();
        // var end_date = $("#endDateInp").val();
        // var attachment = $("#attachmentInp").val();
        // var project_name = $("#projectNameInp").val();
        // var vendor = $("#vendorInp").val();
        // var vendor_address = $("#vendorAddressInp").val();
        // var id_type = $("#selectTypeInspectionId").val();
        // var phone = $("#phoneInp").val();
        // var type_name = $("#otherinput").val();
        e.preventDefault();

        if (confirm('Are You?')) {
            $.ajax({
                url: base_url + "index.php/client/CreateNewProjectDashboard/createNewProject",
                type: "POST",
                data: $(this).serialize(),
                dataType: "Json",
                success: function(response) {
                    if (response == "200") {
                        $("#successModal").modal()
                        var myDropzone = Dropzone.forElement("#dropzoneForm");
                        myDropzone.processQueue();
                    } else {
                        $("#successModal").modal()
                        if (response.start_date_error != '') {
                            $("#start_date_error").html(response.start_date_error)
                        } else {
                            $("#start_date_error").html('')
                        }
                        if (response.end_date_error != '') {
                            $("#end_date_error").html(response.end_date_error)
                        } else {
                            $("#end_date_error").html('')
                        }
                        if (response.attachment_error != '') {
                            $("#attachment_error").html(response.attachment_error)
                        } else {
                            $("#attachment_error").html('')
                        }
                        if (response.project_name_error != '') {
                            $("#project_name_error").html(response.project_name_error)
                        } else {
                            $("#project_name_error").html('')
                        }
                        if (response.vendor_error != '') {
                            $("#vendor_error").html(response.vendor_error)
                        } else {
                            $("#vendor_error").html('')
                        }
                        if (response.vendor_address_error != '') {
                            $("#vendor_address_error").html(response.vendor_address_error)
                        } else {
                            $("#vendor_address_error").html('')
                        }
                        if (response.id_type_error != '') {
                            $("#id_type_error").html(response.id_type_error)
                        } else {
                            $("#id_type_error").html('')
                        }
                        if (response.phone_error != '') {
                            $("#phone_error").html(response.phone_error)
                        } else {
                            $("#phone_error").html('')
                        }
                        if (response.type_name_error != '') {
                            $("#type_name_error").html(response.type_name_error)
                        } else {
                            $("#type_name_error").html('')
                        }
                    }
                    console.log(response);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        }
    });
});

//New Project
function viewdetailnewproject(id) {
    $.ajax({
        url: base_url + "index.php/client/DetailProject/getSessionIdProject/" + id,
        type: "GET",
        success: function(response) {
            if (response == 200) {
                window.location.href = base_url + 'index.php/client/DetailProject/detailProjectRequest';
            }
            console.log(response);
        },
        error: function(response) {
            console.log(response);
        }
    });
}