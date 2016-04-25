 $( document ).ready(function() {
 	$('#login').click(function(){
      	$('#login-modal').modal({
			show: true
		});
  	});
  	$('#signin').click(function(){
      	$('#signin-modal').modal({
			show: true
		});
  	});
  	$('#birthday').daterangepicker({
		singleDatePicker: true,
		locale: {
			format: 'MM/DD/YYYY'
		}
	});
 });
