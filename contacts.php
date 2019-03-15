<!DOCTYPE html>
<html>
<head>
	<title>FICHE D'INFORMATIONS</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	form{
		background-color: blue;
        width: 50%;
	}
    label{
    	text-align: center;
    	text-align: none;
    }
    legend{
    	background-color: blue;
    }
    footer{
    	text-align: center;
    	background-color: blue;
    }
    body{
    	background-color: green;
    	background-image: url(developpeur.jpg);
    	background-repeat: no-repeat;
		background-size: 105%;
    }

    img{
    	font-size: 100%;
     }

</style>
<body>

	<div align="center">
	<form method="POST" action="recueil.php">
		
		
		<table>
		<img src="téléchargé.png" width="15%" height="10%"><br><br><br>

		<label for="Nom"><small> NOM </small></label>
		<input type="text" name="Nom" ><br><br><br>

		<label for="Prénom"><small>PRENOM </small></label>
		<input type="text" name="Prénom" ><br><br><br>

		<label for="ids"> <small>ADRESSE  </small></label>
		<input type="text" name="ids" ><br><br><br>

		<label for="Profession"> <small>PROFESSION </small></label>
		<input type="text" name="Profession" ><br><br><br>

		<input type="submit" name="Valider" align="rigth">
        </table><br><br><br><br><br><br><br>
	</form></div>
	<footer width: 100% ><hr> 
	
	<p>MERCI DE VOTRE COMPREHENSION</p><br><hr>
	</footer>
</body>
</html>