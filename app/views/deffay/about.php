<!--On charge le header-->
<?php $this->view("deffay/header", $data); ?>

<!-- about section start -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title"></h2>
        <div class="about-content">
            <div class="column left">
                <img src="<?=ASSETS?>deffay/img/chateau-du-deffay.jpg" alt="">
            </div>
            <div class="column right">
                <div class="text">Le domaine du Deffay</div>
                <p>
                    Le domaine du Deffay est un lieu d’exception pour la plus belle journée de votre vie… Un mariage
                    dans le parc d’un château avec une superbe orangerie pour votre réception. Un lieu d’exception et
                    unique en Loire-Atlantique. Le luxe d’un mariage grandiose pouvant aller jusqu’à 350 personnes. Mais
                    c’est aussi, un lieu chargé d’histoire plus qu’un lieu, le début d’une nouvelle aventure, un parc à
                    disposition de 30 hectares, de la cour d’honneur du château. Profitez d’une vue sur un étang naturel
                    de 5 ha et de sa forêt de chênes centenaires. Le cadre se prête à la perfection pour vos photos de
                    groupe ou en couple, votre cérémonie d’engagement ou encore votre team building.
                </p>
            </div>
        </div>
    </div>
</section>

<!--On charge le footer-->
<?php $this->view("deffay/footer", $data); ?>
