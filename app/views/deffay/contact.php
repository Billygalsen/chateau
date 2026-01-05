<!--On charge le header-->
<?php $this->view("deffay/header", $data); ?>

<!-- contact section start -->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title"></h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Comment entrer en contact ?</div>
                <p>Vous pouvez nous contacter par téléphone ou mail, ou en nous envoyant un message dépuis le formulaire de contact à votre droite.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-phone-alt"></i>
                        <div class="info">
                            <div class="head">Téléphone</div>
                            <div class="sub-title">06 15 78 01 90</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">abc@gmail.com</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Adresse</div>
                            <div class="sub-title">blablabla à remplir</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">
                <div class="text">Envoyer un message</div>
                <form action="#" method="post">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" name="nom" placeholder="Nom" required>
                        </div>
                        <div class="field email">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <input type="text" name="sujet" placeholder="Sujet" required>
                    </div>
                    <div class="field textarea">
                        <textarea cols="30" rows="10" name="message" placeholder="Message..." required></textarea>
                    </div>
                    <div class="button-area">
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--On charge le footer-->
<?php $this->view("deffay/footer", $data); ?>
