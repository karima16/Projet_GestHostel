<div class="containerLogin">

	<div class="Connecter"> 
    <form action="" >
    <h2>Inscrivez-Vous</h2>
    <label for="nom">Nom :</label><input class="nom" type="text" id="nom" name="nom"><br>
    <label for="prenom">Prénom:</label><input class="prenom" type="text"id="prenom" name="prenom"><br>
    <label for="email">Email:</label> <input class="email" type="text" id="email" name="email"><br>
    <label for="telephone">Telephone:</label><input class="telephone" type="text" id="telephone" name="telephone"><br>
    <label for="pays">Pays:</label> 
    <select name="pays" id="pays" class="inputFix"></select>
    <br>
    <input type="submit" value ="Confirmer">
    </form>
	</div>

	<div>
    <form action="" class="Connecter">
    <h2>Connectez-Vous</h2>
    <label>Login :</label><input type="text" id="login" name="login"><br>
    <label for="password">Password:</label><input class="password" type="text"id="password" name="password"><br>
    <br>
    <input type="submit" value ="Confirmer">
    </form>
	</div>

</div>

<script>
let uri = "https://restcountries.eu/rest/v2/all";
$.ajax({
    url : uri,
	type : 'GET',
	dataType : 'html',
    success:function(rep, statut){
        let objects = eval('('+rep+')');
        console.log(objects);
        for (let i = 0; i < objects.length; i++) {
            $("#pays").append("<option value="+objects[i].name+">"+objects[i].name+"</option>");
        }
    }
});
</script>