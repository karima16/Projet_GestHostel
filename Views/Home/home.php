<h1>Bienvenu à GestHostel</h1>
<form action="" method="post">
	<input type="text" id="today" name="daterange"/>
	<select name="adults" id="nbrAdult">
		<option value="" disabled selected>Nombre d'adultes</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<select name="children" id="nbrChild">
		<option value="" disabled selected>Nombre d'enfants</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<select name="roomType" id="roomType">
		<option value="" disabled selected>Type de chambre</option>
		<option value="luxe">Luxe</option>
		<option value="king">King</option>
		<option value="basic">Basic</option>
	</select>
	<select name="cityHotel" id="cityHotel">
		<option value="" disabled selected>Lieu</option>
		<option value="barcelone">Barcelone</option>
		<option value="porto">Porto</option>
		<option value="bruxelles">Bruxelles</option>
	</select>
	<input type="submit" value="Chercher un hotel">
	<input type="button" value="+ Recherches avancées" id="btnRechercheAvancee">
</form>

<div id="rechercheAvancee">test</div>


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

	$('#btnRechercheAvancee').on('click',function(){
		if (($('#rechercheAvancee').css('display')=='none')) {
			$('#rechercheAvancee').css('display','block');
		}
		else{
			$('#rechercheAvancee').css('display','none');
		}

	})
 </script>