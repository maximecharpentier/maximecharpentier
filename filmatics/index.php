<!DOCTYPE html>
<html lang="fr">
    <?php
        $title = 'Maxime Charpentier - Filmatics';
        $description = '';
        include '../inc/head.php';
    ?>
    <body class="body--project" role="document">
        <?php include '../inc/header.php'; ?>
        <section class="section section--heading">
            <img class="heading__image" src="../assets/img/filmatics/filmatics.jpg" alt="Photo du projet Filmatics">
            <h1 class="heading__title">Filmatics</h1>
        </section>
        <section class="section section--intro">
            <div class="section__wrapper">
                <time class="section__date">décembre 2017</time>
                <p class="section__type">Intégration / JavaScript</p>
                <h2 class="section__name">Filmatics</h2>
                <p class="section__text">Réalisation d'un site de streaming de fanfilms gratuit visant à mettre en avant les réalisateurs et leurs créations.</p>
                <!--<a class="section__link" href="">Voir le site</a>-->
            </div>
        </section>
        <section class="section section--summary">
            <div class="section__wrapper">
                <ul class="section__indexes">
                    <li class="section__index">
                        <button class="section__button">Contexte</button>
                    </li>
                    <li class="section__index">
                        <button class="section__button">Design</button>
                    </li>
                    <li class="section__index">
                        <button class="section__button">Slider</button>
                    </li>
                    <li class="section__index">
                        <button class="section__button">Lecteur</button>
                    </li>
                    <li class="section__index">
                        <button class="section__button">Filtres</button>
                    </li>
                    <li class="section__index">
                        <button class="section__button">Modal</button>
                    </li>
                </ul>
            </div>
        </section>
        <section class="section section--counter">
            <div class="section__wrapper">
                <h3 class="section__title">Contexte</h3>
                <p class="section__text">Ce projet à été réalisé en groupe de 5 dans le cadre d'une semaine intensive JavaScript à HETIC. Nous avions eu les consignes le lundi, et nous devions présenter notre projet le vendredi matin. Nous avions donc quatre jours pour réaliser un site de streaming répondant à certains critères :</p>
                <ul class="section__list">
                    <li class="section__item section__item--text">Créer un player avec un design personnalisé</li>
                    <li class="section__item section__item--text">Générer dynamiquement l'affichage des films à partir d'un fichier JavaScript contenant les données</li>
                    <li class="section__item section__item--text">Ajouter la possibilité de filtrer les films par catégories</li>
                    <li class="section__item section__item--text">Chaque film devait avoir une fiche permettant de voir les détails du film</li>
                </ul>
            </div>
        </section>
        <section class="section section--counter">
            <div class="section__wrapper">
                <h3 class="section__title">Design</h3>
                <p class="section__text">Nous avions opté pour un design sombre et épuré, visant à mettre en avant le contenu et immergé l'utilisateur.</p>
                <img class="section__image" src="../assets/img/filmatics/sketch.jpg" alt="Image du site Filmatics">
            </div>
        </section>
        <section class="section section--counter">
            <div class="section__wrapper">
                <h3 class="section__title">Slider</h3>
                <p class="section__text">Un slider permet de mettre en avant les fanfilms les plus populaires de la platforme, avec chaque slide représentant l'univers du film qui lui est dédié et permettant directement de le visionner.</p>
                <video class="section__image" src="../assets/img/filmatics/slider.mp4" autoplay="true" loop muted></video>
            </div>
        </section>
        <section class="section section--counter">
            <div class="section__wrapper">
                <h3 class="section__title">Lecteur</h3>
                <p class="section__text">Nous avons développé un lecteur personnalisé afin de permettre à l'utilisateur différentes actions :</p>
                <ul class="section__list">
                    <li class="section__item section__item--text">Lecture / Pause</li>
                    <li class="section__item section__item--text">Avancer / Reculer part cran de 10s</li>
                    <li class="section__item section__item--text">Réglage du volume sonore</li>
                    <li class="section__item section__item--text">Stop</li>
                    <li class="section__item section__item--text">Plein écran</li>
                    <li class="section__item section__item--text">Indicateur de temps écoulé / temps restant</li>
                    <li class="section__item section__item--text">Possibilité de naviguer librement dans la vidéo</li>
                </ul>
                <img class="section__image" src="../assets/img/filmatics/player.jpg" alt="Image du lecteur Filmatics">
            </div>
        </section>
        <section class="section section--counter">
            <div class="section__wrapper">
                <h3 class="section__title">Filtres</h3>
                <p class="section__text">Nous avons également développé un système de filtre permettant d'afficher la liste de films en fonction de leur catégorie. Les films sont générés dynamiquement via un fichier JavaScript contenant toutes les informations concernant les films.</p>
                <video class="section__image" src="../assets/img/filmatics/filter.mp4" autoplay="true" loop muted></video>
            </div>
        </section>
        <section class="section section--counter">
            <div class="section__wrapper">
                <h3 class="section__title">Modal</h3>
                <p class="section__text">Afin de mettre en avant les auteurs et leurs créations, nous avons réalisé une fenêtre modale informative, apportant à l'utilisateur des détails sur le film : une description, la durée, la date de création, etc...</p>
                <img class="section__image" src="../assets/img/filmatics/modal.jpg" alt="Image des fiches de films Filmatics">
            </div>
        </section>
        <footer class="section section--counter section--footer">
            <div class="section__wrapper">
                <nav class="section__nav">
                    <a class="section__link section__link--previous" href="../nextgen">Projet précédent</a>
                    <a class="section__link section__link--next" href="../spotnride">Projet suivant</a>
                </nav>
                <?php include '../inc/social.php' ?>
            </div>
        </footer>
        <?php include '../inc/modal.php'; ?>
        <script src="../assets/js/global.js"></script>
        <script src="../assets/js/project.js"></script>
        <?php include '../inc/analytics.php'; ?>
    </body>
</html>