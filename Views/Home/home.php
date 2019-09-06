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
	<input type="button" value="Chercher un hotel" id="btnHotelRecherche">
	<input type="button" value="+ Recherches avancées" id="btnRechercheAvancee">
</form>

<div id="rechercheAvancee">
	<form action="#">

		<h1>Recherche avancée</h1>
	<div id="avancedSearch">
		<table>
		  <tr>
		    <td><label for="wifi">Wifi</label>
				<input type="checkbox" name="wifi"></td>
		    <td><label for="tv">Tv</label>
				<input type="checkbox" name="tv"></td>
		    <td><label for="balcony">Balcony</label>
				<input type="checkbox" name="balcony"></td>
		  </tr>
		  <tr>
		    <td><label for="miniBar">Mini-bar</label>
				<input type="checkbox" name="miniBar"></td>
		    <td><label for="petsAllowed">Pets allowed</label>
				<input type="checkbox" name="petsAllowed"></td>
		    <td><label for="airConditioning">Air conditioning</label>
				<input type="checkbox" name="airConditioning"></td>
		  </tr>
		   <tr>
		    <td><label for="pool">pool</label>
				<input type="checkbox" name="pool"></td>
		    <td><label for="valet">Valet</label>
				<input type="checkbox" name="valet"></td>
		    <td><label for="roomervice">Room service</label>
				<input type="checkbox" name="roomervice"></td>
		  </tr>
		</table>
</div>
<div id="blocStar">
	<div class="rate">
			
			 <p>Nombre d'étoiles</p>  
			<input type="radio" id="star7" name="rate" value="7" />
		    <label for="star7" title="text"></label>
			<input type="radio" id="star6" name="rate" value="6" />
		    <label for="star6" title="text"></label>
		    <input type="radio" id="star5" name="rate" value="5" />
		    <label for="star5" title="text"></label>
		    <input type="radio" id="star4" name="rate" value="4" />
		    <label for="star4" title="text"></label>
		    <input type="radio" id="star3" name="rate" value="3" />
		    <label for="star3" title="text"></label>
		    <input type="radio" id="star2" name="rate" value="2" />
		    <label for="star2" title="text"></label>
		    <input type="radio" id="star1" name="rate" value="1" />
		    <label for="star1" title="text"></label>		
			
		</div>
	</div>	

</form>
</div>

<div id="hotelRecherche">
	test2
</div>
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
	$('#btnHotelRecherche').on('click',function(){
		if (($('#hotelRecherche').css('display')=='none')) {
			$('#hotelRecherche').css('display','block');
		}
		else{
			$('#hotelRecherche').css('display','none');
		}

	})
 </script>