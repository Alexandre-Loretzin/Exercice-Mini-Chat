//requette Ajax pour rafraichir les messages.
setInterval(function(){ 
   $("#chat").load("includes/truc.php");
}, 2000);