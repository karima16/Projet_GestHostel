<div class="containerLogin">

	<div class="Connecter"> 
    <form action="" >
    <h2>Inscrivez-Vous</h2>
    <label for="nom">Nom :</label><input type="text" id="nom" name="nom" required><br>
    <label for="prenom">Prénom:</label><input type="text"id="prenom" name="prenom" required><br>
    <label for="email">Email:</label> <input type="text" id="email" name="email" required><br>
    <label for="telephone">Telephone:</label><input type="text" id="telephone" name="telephone" required><br>
    <label for="pays">Pays:</label> 
    <select name="pays" id="pays" class="inputFix"></select>
    <br>
    <input type="submit" value ="Confirmer">
    </form>
	</div>

	<div class="Connecter">
    <form action="">
    <h2>Connectez-Vous</h2>
    <label for="login">Login :</label><input type="text" id="login" name="login" required><br>
    <label for="password">Password:</label><input type="password"id="password" name="password" required><br>
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

$("#nom").keypress(function(){
    let regex = "^[a-zA-Z]{4,55}$";
    let nom = $("#nom").val();
    if(nom.match(regex)){
        $("#nom").css("borderColor", "green");
    }
    else{
        $("#nom").css("borderColor", "red");
    }
});

$("#nom").change(function(){
    let regex = "^[a-zA-Z]{4,55}$";
    let nom = $("#nom").val();
    if(nom.match(regex)){
        $("#nom").css("borderColor", "green");
    }
    else{
        $("#nom").css("borderColor", "red");
    }
});

$("#prenom").keypress(function(){
    let regex = "^[a-zA-Z]{4,55}$";
    let prenom = $("#prenom").val();
    if(prenom.match(regex)){
        $("#prenom").css("borderColor", "green");
    }
    else{
        $("#prenom").css("borderColor", "red");
    }
});

$("#prenom").change(function(){
    let regex = "^[a-zA-Z]{4,55}$";
    let prenom = $("#prenom").val();
    if(prenom.match(regex)){
        $("#prenom").css("borderColor", "green");
    }
    else{
        $("#prenom").css("borderColor", "red");
    }
});


$("#email").keypress(function(){
    let regex = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}";
    let email = $("#email").val();
    if(email.match(regex)){
        $("#email").css("borderColor", "green");
    }
    else{
        $("#email").css("borderColor", "red");
    }
});

$("#email").change(function(){
    let regex = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}";
    let email = $("#email").val();
    if(email.match(regex)){
        $("#email").css("borderColor", "green");
    }
    else{
        $("#email").css("borderColor", "red");
    }
});





</script>