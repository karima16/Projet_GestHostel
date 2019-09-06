<div class="containerLogin">

    <form action="">
    <h2>Inscrivez-Vous</h2>
    <label for="nom">Nom :</label><input type="text" id="nom" name="nom"><br>
    <label for="prenom">Prénom:</label><input type="text"id="prenom" name="prenom"><br>
    <label for="email">Email:</label> <input type="text" id="email" name="email"><br>
    <label for="telephone">Telephone:</label><input type="text" id="telephone" name="telephone"><br>
    <label for="pays">Pays:</label> 
    <select name="pays" id="pays"></select>
    <br>
    <input type="submit" value ="Confirmer">
    </form>

    <form action="">
    <h2>Connectez-Vous</h2>
    <label for="login">Login :</label><input type="text" id="login" name="login"><br>
    <label for="password">Password:</label><input type="password"id="password" name="password"><br>
    <br>
    <input type="submit" value ="Confirmer">
    </form>

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