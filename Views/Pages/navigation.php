

<nav id="navigation">
	
	<ul>
		<li class="navigation"><a href="">Accueil</a></li>
		<li class="navigation"><a href="">Forum</a></li>
		<li class="navigation"><a href="">FAQ</a></li>
		<li class="navigation"><a href="">Contact</a></li>
		<li class="login navigation" ><a href="#">Login</a></li>
		<li class="login navigation"><a href="#">Inscription</a></li>
		<li id="profil">
			<details>
			    <summary>Profil Name</summary>
			    <li><a href="">Profil User</a></li>
				<li><a href="">Historique</a></li>
				<li><a href="">Admin</a></li>
				<li><a href="">disconnection</a></li>
			</details>
		</li>
		
	</ul>


</nav>

<script>
	$(function(){
		$('.login').click(function(){

			if ($('#profil').css('display') == 'none') {
				$('#profil').css('display','block');
				$('.login').css('display','none')
			}
			else{
				$('#profil').css('display','none');
			}

		})
	})

</script>