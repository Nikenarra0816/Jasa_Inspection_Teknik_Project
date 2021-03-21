$(document).ready(function() {
    $("input[name$='chooseSuit']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#note-inspector" + test).show();
    });
});