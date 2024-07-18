<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/le-tapir.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/9c87998ff2.js" crossorigin="anonymous"></script>
    <title>Arcadia</title>
</head>

<body>

    <!-- Navbar -->

    <?php

    include ('./Librairies/navbar.php');

    ?>

    <!-- Script pour Menu burger -->

    <script src="./Script/script-burger.js"></script>

    <!-- Main image -->

    <section>
        <div class="hero-image">
            <div class="hero-text">
                <h1 class="main-tittle">Le Tapir Alias "Bosco"</h1>
                <p>Tapirus terrestris</p>
            </div>
        </div>
    </section>

    <!-- Section tapir -->

    <section>
        <div class="container">
            <h1>Présentation du Tapir</h1>
            <p>Explorez le monde fascinant de Bosco et découvrez comment vous pouvez contribuer à sa conservation
                lors de votre prochaine visite au zoo.</p>
            <p> Son pelage épais est d'un brun foncé à noir, parfois agrémenté de nuances de gris sur le ventre. Il
                se distingue par son museau allongé et flexible, idéal pour atteindre les feuilles et les plantes
                aquatiques.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire du Tapir</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Bosco</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Tapir terrestre d'Amérique (Tapirus terrestris)</li>
                        <li><strong>Genre:</strong> Mâle</li>
                        <li><strong>Taille:</strong> 2 mètres de long</li>
                        <li><strong>Age:</strong> 8 ans</li>
                        <li><strong>Poids:</strong> 210 kg</li>
                        <li><strong>Région d'origine:</strong> Forêts tropicales d'Afrique du Sud</li>
                        <li><strong>Habitat:</strong> Jungle</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Bosco</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Fruits, plantes aquatiques et feuilles</li>
                        <li><strong>Grammage de la nourriture:</strong> 12 kg de végétaux</li>
                        <li><strong>Date de passage:</strong> 28/06/2024</li>
                    </ul>
                </div>
            </div>
        </div>



    </section>

    <!-- Footer -->

    <?php

    include ("./Librairies/footer.php");

    ?>

</body>

</html>