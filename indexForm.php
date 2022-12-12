<?php
if($_POST == NULL){
?>
    <form action="index.php" class="row needs-validation" method="post" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-auto">
                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                <select class="form-select" name="civilite" id="autoSizingSelect">
                <option selected>Civilité</option>
                <option value="Dr">Dr</option>
                <option value="M.">M.</option>
                <option value="Mme">Mme</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="validationCustom01" class="form-label">Prénom</label>
                <input type="text"  name="prenom" class="form-control" id="validationCustom01" value="" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col">
                <label for="validationCustom02" class="form-label">Nom</label>
                <input type="text"  name="nom" class="form-control" id="validationCustom02" value="" required>
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="input-group">
            <input type="file" name="fichier" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <button class="btn btn-outline-primary" type="submit">Valider</button>
            </div>
        </div>
    </form>
<?php
}else{
    echo "";
}
?>