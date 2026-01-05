<!--On charge le header-->
<?php $this->view("deffay/header", $data); ?>

<!-- teams section start -->
<section class="teams" id="teams">
    <div class="max-width">
        <h2 class="title"></h2>
        <div class="carousel owl-carousel">
            <a href="#mariage">
                <div class="card">
                    <div class="box">
                        <img src="<?=ASSETS?>deffay/img/mariage.jpg" alt="">
                        <div class="text">Mariage</div>
                        <p class="description">
                            Deffay est un lieu d’exception pour la plus belle journée de votre vie…
                        </p>
                    </div>
                </div>
            </a>
            <a href="#hebergement">
                <div class="card">
                    <div class="box">
                        <img src="<?=ASSETS?>deffay/img/hebergement.jpg" alt="">
                        <div class="text">Hébergement</div>
                        <p class="description">
                            Nous vous proposons une large gamme d’hébergements.
                        </p>
                    </div>
                </div>
            </a>
            <a href="#orangerie">
                <div class="card">
                    <div class="box">
                        <img src="<?=ASSETS?>deffay/img/orangerie.jpg" alt="">
                        <div class="text">Orangerie</div>
                        <p class="description">
                            Nous vous proposons une orangerie d’une capacité de 350 personnes.
                        </p>
                    </div>
                </div>
            </a>
            <a href="#equipe">
                <div class="card">
                    <div class="box">
                        <img src="<?=ASSETS?>deffay/img/equipe.jpg" alt="">
                        <div class="text">Equipe</div>
                        <p class="description">
                            Notre équipe est là pour vous aider dans la préparation...
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- différents services -->
<section class="about" id="about">
    <div class="max-width" id="equipe">
        <!--<h2 class="title"></h2>-->
        <div class="about-content">
            <div class="column left">
                <img src="<?=ASSETS?>deffay/img/equipe.jpg" alt="">
            </div>
            <div class="column right">
                <div class="text" >Notre équipe</div>
                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                    impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500,
                    quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen
                    de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la
                    bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les
                    années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus
                    récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                </p>
            </div>
        </div>
    </div>
    <div class="max-width" id="mariage">
        <div class="about-content">
            <div class="column left">
                <img src="<?=ASSETS?>deffay/img/mariage.jpg" alt="">
            </div>
            <div class="column right">
                <div class="text">Mariage</div>
                <p>
                    Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre
                    elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une
                    seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr
                    qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur
                    Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai
                    générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison
                    de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi
                    obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                </p>
            </div>
        </div>
    </div>
    <div class="max-width" id="hebergement">
        <div class="about-content">
            <div class="column left">
                <img src="<?=ASSETS?>deffay/img/hebergement.jpg" alt="">
            </div>
            <div class="column right">
                <div class="text">Hébergement</div>
                <p>
                    Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre
                    elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une
                    seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr
                    qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur
                    Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai
                    générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison
                    de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi
                    obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                </p>
            </div>
        </div>
    </div>
    <div class="max-width" id="orangerie">
        <div class="about-content">
            <div class="column left">
                <img src="<?=ASSETS?>deffay/img/orangerie.jpg" alt="">
            </div>
            <div class="column right">
                <div class="text">Orangerie</div>
                <p>
                    Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre
                    elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une
                    seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr
                    qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur
                    Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai
                    générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison
                    de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi
                    obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.
                </p>
            </div>
        </div>
    </div>
</section>

<!--On charge le footer-->
<?php $this->view("deffay/footer", $data); ?>

