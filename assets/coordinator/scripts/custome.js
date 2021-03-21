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

//disable submit
$(document).ready(function() {
    //Datable
    $('table.dataTable').DataTable({
        fixedHeader: {
            header: true,
            footer: true
        },
        columnDefs: [{ "width": "150px", "targets": [0] }]
    });

    //=================================================================

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