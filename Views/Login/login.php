<div class="containerLogin">

	<div class="Connecter"> 
    <form action="" method="post">
    <h2>Inscrivez-Vous</h2>
    <label for="nom">Nom :</label><input type="text" id="nom" name="nom" class="inputLogin" required><br>
    <label for="prenom">Prénom:</label><input type="text"id="prenom" name="prenom" class="inputLogin" required><br>
    <label for="email">Email:</label> <input type="text" id="email" name="email" class="inputLogin" required><br>
    <label for="password">Password:</label> <input type="password" id="password" name="password" class="inputLogin" required><br>
    <label for="passwordConfirm">Password (confirm):</label> <input type="password" id="passwordConfirm" name="passwordConfirm" class="inputLogin" required><br>
    <label for="telephone">Telephone:</label><input type="text" id="telephone" name="telephone"  class="inputLogin" required><br>
    <label for="pays">Pays:</label> 
    <select name="pays" id="pays" class="inputFix"></select><br>
    <input type="submit" value ="Confirmer" class="inputLogin">
    </form>
	</div>

	<div>
		<h2>OU</h2>
	</div>

	<div class="Connecter">
    <form action="" method="post">
    <h2>Connectez-Vous</h2>
    <label for="login">Email:</label><input type="text" id="login" name="login" class="inputLogin" required><br>
    <label for="password">Password:</label><input type="password"id="password" name="password" class="inputLogin" required><br>
    <input type="submit" value ="Confirmer" class="inputLogin">
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

$("#telephone").keypress(function(){
    let regex = "^[0-9]{4,12}";
    let telephone = $("#telephone").val();
    if(telephone.match(regex)){
        $("#telephone").css("borderColor", "green");
    }
    else{
        $("#telephone").css("borderColor", "red");
    }
});

$("#telephone").change(function(){
    let regex = "^[0-9]{4,12}";
    let telephone = $("#telephone").val();
    if(telephone.match(regex)){
        $("#telephone").css("borderColor", "green");
    }
    else{
        $("#telephone").css("borderColor", "red");
    }
});

$("#password").keypress(function(){
    let regex = "^[a-zA-Z0-9._%+-]{6,30}$";
    let password = $("#password").val();
    if(password.match(regex)){
        $("#password").css("borderColor", "green");
    }
    else{
        $("#password").css("borderColor", "red");
    }
});

$("#password").change(function(){
    let regex = "^[a-zA-Z0-9._%+-]{6,30}$";
    let password = $("#password").val();
    if(password.match(regex)){
        $("#password").css("borderColor", "green");
    }
    else{
        $("#password").css("borderColor", "red");
    }
});




</script>