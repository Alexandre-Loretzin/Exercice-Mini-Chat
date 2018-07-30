
setInterval(function(){ 
// $.get("includes/truc.php", function(data){
//     $("#chat").html(data);
// })
   $("#chat").load("includes/truc.php");
}, 2000);