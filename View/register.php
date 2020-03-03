<div class="r-title">IPSSI DAY - Réservez vos places dès maintenant !</div>

<form id="form-add-user" method="post" action="/register">
    <div class="f-title">Informations personnelles</div>
    <div class="line"></div>
    <div class="btn-group btn-group-toggle r-category" data-toggle="buttons">
        <label class="btn btn-secondary btn-category active">
            <input type="radio" name="status" value="Professionnal" autocomplete="off" checked> Professionnel
        </label>
        <label class="btn btn-secondary btn-category ">
            <input type="radio" name="status" value="Student" autocomplete="off"> Étudiant
        </label>
    </div>
    <div class="i-name">
        <div class="row">
            <div class="col">
                <label class="l-form" for="lname">Nom*</label>
                <input id="lname" class="i-lname" type="text" name="lname" required>
            </div>
            <div class="col">
                <label class="l-form" for="fname">Prénom*</label>
                <input id="fname"class="i-fname" type="text" name="fname" required>
            </div>
        </div>
    </div>

    <div class="f-title">Informations professionnelles</div>
    <div class="line"></div>
    <label class="l-form" for="society">Nom de société/école*</label>
    <input id="society" class="i-society" type="text" name="society" required>
    <label class="l-form" for="email">Adresse e-mail*</label>
    <input id="email" class="i-email" type="email" name="email" required>
    <input class="i-submit" type="submit" form="form-add-user" value="S'inscrire">
</form>
