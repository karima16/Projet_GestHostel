<?php 

require_once("Views/Login/login.php");

?>

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