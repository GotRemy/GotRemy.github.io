<html>
<head>
<title>Elaboration d'un QUESTIONNAIRE</title>
<link rel="stylesheet" href="questionnaires.css" type="text/css" />
</head>
<body>
<form method="POST" action="traiter_questionnaire.php">
<!-- Zone de saisie du QUESTIONNAIRE -->
<!-- Nom (name), Libellé à afficher (displayName), Description (description) -->
<fieldset>
<legend>Questionnaire</legend>
	<label for="name">Nom :</label>
	<input type="text" name="name" size="40" maxlength="40"/>
	<label for="displayName">Libellé à afficher :</label>
	<input type="text" name="displayName" size="40" maxlength="60"/>
	<label for="description">Descriptif :</label>
	<textarea name="description" cols="30" rows="4"></textarea>
</fieldset>
<!-- Boutons -->
<p>
	<input type="submit" value="Envoyer" />
	<input type="reset" value="Annuler" />
</p>
</form>
</body>
</html>