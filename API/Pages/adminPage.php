<head> 
    <meta charset="utf-8"/>
    <link rel="icon" href="../../Front/images/favicon.png" />
    <meta name="viewport" content="width=devise-width, initial-scale=0.5">
    <title> 
            Le Sauvetage Minimal
    </title>
    <link rel="stylesheet" href="../../Front/style.css"/>
    <script src="../JS/ajax.js"></script>
    <script src="../JS/getArticleCreation.js"></script>
</head>
<body>
    <div class="contentAdmin">
        <?php include './popup.php'; ?>
        <?php include './popupValid.php'; ?>
        <script type="text/javascript" src="../JS/gererPage.js"></script>
        <div class="navBar">
            <ul>
                <li>
                    <h2 class="clickable" onclick="gererPage()">Gérer les pages</h2>
                    <p>Gérez ici vos pages</p>
                </li>
                <li onclick="window.open('../../index.php', '_blank')">
                    <h2 class="clickable">Accédez au site public</h2>
                    <p>Visionnez à quoi ressemble votre site</p>
                </li>
            </ul>
        </div>
        <div class="editor" id="editor"></div>

    </div>
</body>