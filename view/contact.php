<main class="container formulaire">

    <h2>Vous souhaitez me contacter?</h2>
    <p>
        N'hésitez pas m'envoyer une demande de contact via le formulaire ci-dessous
    </p>
    <form method="post" action="">
        <div class="row">
            <div class="col s12 l6">
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" name="name" type="text" class="validate">
                    <label for="name">Nom</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="tel" class="validate">
                    <label for="email">EMAIL</label>
                </div>
            </div>
            <div class="col s12 l6">
                <div class="input-field">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="msg" name="msg" class="materialize-textarea" placeholder="Message"></textarea>
                    <label for="msg"></label>
                </div>
            </div>
        </div>
        <div class="row right-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
        <div class="g-recaptcha" data-sitekey="6LenijgUAAAAAN9bdvoXJmw8SqGcTUFmkzPDiBxe"></div>
    </form>
</main>
