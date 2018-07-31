<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Minichat</title>
  </head>
  <body>

  <!--Formulaire chat-->
    <div class="container_fluid">  
        <div class="jumbotron ">
            <h1 class="display-4">Mini Chat ! </h1>
            <p class="lead">Entrer votre pseudo et votre message</p>
            <hr class="my-4">
            <p class="lead">
            </p>
                <form action="config/store.php" method="post" >
                    <input type="text" placeholder="Pseudo" name="pseudo" value='<?php echo $_COOKIE["cookiepseudo"]?>' >
                    <input type="text" placeholder="message" name="message" required >
                    <input class="btn btn-primary btn-lg" type="submit" value="chat !" name="send">
                </form>
        </div>
    </div>

 <!--Messages chat-->
    <div id="chat" style="padding : 10px">
        <?php include "includes/truc.php";?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript"  src="JS/mini.js"></script>
</body>
</html>