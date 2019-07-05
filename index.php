<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My resume</title>
    <link rel="stylesheet" href="cv.css">

    <script type="text/javascript">
        var langueDuSite = "fr";
        alert("Mon site est en langue " + langueDuSite);

        var nomUtilisateur = "Clem";
        alert("Hello " + nomUtilisateur);

        var mon_chiffre = prompt("Veuillez indiquer un chiffre");
        if (mon_chiffre < 2) {
            alert("mon chiffre est plus petit que 2");
        } else if (mon_chiffre > 2) {
            alert("mon chiffre est plus grand que 2");
        } else {
            alert("mon chiffre doit probablement être égal à 2");
        }

    </script>
</head>

<body>

    <img src="buddy.jpg">
    <h1>Clémentine LEVASSEUR</h1>
    <p><strong class="orange">Address : </strong>Iles Caraïbes</p>
    <p><strong class="orange">Mail : </strong>levasseur.clementine@gmail.com</p>
    <p><strong id="id_orange">Phone : </strong>06.11.70.00.00</p>

    <div class="affichage_pc">
        <h1>Work history</h1>
        <ol>
            <li>Assistante oenologue</li>
            <li>Employée viticole</li>
        </ol>

        <h1>Education</h1>
        <ul>
            <li>CQP ouvrier viticole</li>
            <li>DE Dégustation de vins et tous types d'alcool</li>
        </ul>

        <a href="contact.php">Contact</a>
    </div>


</body>

</html>
