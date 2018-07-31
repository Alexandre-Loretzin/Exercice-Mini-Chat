 //requette Ajax pour rafraichir les messages.
 setInterval(function(){ 
    $("#chat").load("includes/truc.php");
 }, 1000);

//requette ajax pour stocker les messages
function storeMessage(event, form){
    event.preventDefault();

    $.post({
        url: 'config/store.php',
        data : $(form).serialize(),
        success: function(error){
            if (error){
                alert(error);
            }
            $('input[name="message"]').val("");
        }
    })
}

