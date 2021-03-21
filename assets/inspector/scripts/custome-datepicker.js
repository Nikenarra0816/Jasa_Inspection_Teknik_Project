$(function() {

  $('input[name="datetimes"]').daterangepicker({
  	timePicker: true,
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datetimes"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('M/DD/YY hh:mm A') + ' - ' + picker.endDate.format('M/DD/YY hh:mm A'));
  });

  $('input[name="datetimes"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});