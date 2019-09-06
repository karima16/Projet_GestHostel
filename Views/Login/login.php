<form action=""></form>
<label for="nom">Nom :</label><input type="text" id="nom" name="nom" value=""><br>
<label for="prenom">Prénom:</label><input type="text"id="Prenom" name="prenom" =""><br>
<label for="email">Email:</label> <input type="text" id="email" name="email"><br>
<label for="text">Telephone:</label><input type="text" id="telephone" name="telephone"><br>
<label for="text">Pays:</label> 
<select name="Pays" id="pays"></select>

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