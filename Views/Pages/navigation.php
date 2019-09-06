

<nav id="navigation">
	
	<ul>
		<li class="navigation"><a href="?section=accueil">Accueil</a></li>
		<li class="navigation"><a href="?section=forum">Forum</a></li>
		<li class="navigation"><a href="?section=faq">FAQ</a></li>
		<li class="navigation"><a href="?section=contact">Contact</a></li>
		<li class="login navigation" ><a href="?section=login">Login</a></li>
		<li class="login navigation"><a href="?section=inscription">Inscription</a></li>
		<li id="profil">
			<details>
			    <summary>Profil Name</summary>
			    <li><a href="?section=profil">Profil User</a></li>
				<li><a href="?section=historique">Historique</a></li>
				<li><a href="?section=admin">Admin</a></li>
				<li><a href="?section=deconnexion">Déconnexion</a></li>
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