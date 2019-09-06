<?php 
require_once("Views/Home/home.php");

 ?>
 <script>
 	$(function() {
	  $('input[name="daterange"]').daterangepicker({
	    opens: 'left',
	    locale:{
	    	format : 'DD-MM-YYYY'
	    }
	  });
	});
	var field = document.querySelector('#today');
	var date = new Date();

	// Set the date
	field.value = date.getFullYear().toString() + '-' + (date.getMonth() + 1).toString().padStart(2, 0) + 
	    '-' + date.getDate().toString().padStart(2, 0);
 </script>