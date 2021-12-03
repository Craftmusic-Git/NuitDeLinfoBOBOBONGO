<head> 
    <meta charset="utf-8"/>
    <link rel="icon" href="Front/images/favicon.png" />
    <meta name="viewport" content="width=devise-width, initial-scale=0.5">
    <title> 
            Le Sauvetage Minimal
    </title> 
    <link rel="stylesheet" href="Front/style.css"/>
    <script src="./API/JS/ajax.js"></script>
    <script type="text/javascript" src="./API/JS/searchBDD.js"></script>
</head>
<body>
	<div class="content">
		<div class="informations">
			<div id="infos" aria-label=" Recherchez une personne ou un bateau grâce à son nom, ou simplement le début de celui-ci "></div>
			<div id="about" class="clickable" aria-label=" A Propos "></div>
			<div id="contact" class="clickable" aria-label=" Nous Contacter "></div>
			<div id="official_site" class="clickable" aria-label=" Site officiel des sauveteurs du dunkerquois " onclick="window.open('https://sauveteurdudunkerquois.fr/', '_blank')"></div>
		</div>
		<div class="search" id="search">
			<input type="text" name="" placeholder="Recherchez une personne ou un bateau">
			<button class="submit clickable" onclick="searchBDD()"></button>
		</div>
		<div id="divResults"></div>

	</div>
</body>