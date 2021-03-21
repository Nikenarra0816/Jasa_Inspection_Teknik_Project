$(function() {

    $('input[name="datetimes"]').daterangepicker({

        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $('input[name="datetimes"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' until ' + picker.endDate.format('YYYY-MM-DD'));
        $('input[name="start_date"]').val(picker.startDate.format('YYYY-MM-DD'));
        $('input[name="end_date"]').val(picker.endDate.format('YYYY-MM-DD'));
    });

    $('input[name="datetimes"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
        $('input[name="start_date"]').val('');
        $('input[name="end_date"]').val('');
    });

});