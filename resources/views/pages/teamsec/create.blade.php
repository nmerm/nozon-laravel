                <h3>Membre secondaire</h3>
                <div class="row">
                    <div class="administration" id="creerEquipe">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-membre">Créer un membre</button>
                    </div>
                    <form class="form-add-membre">
                    <!--
                        <select name="nbrMembres" id="nbrMembres" class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                    -->
                        <div class="form-group">
                            <input type="hidden" name="secondaire">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Nom">
                            <label>Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom"/>
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="email@email.com" />
                            <label>Fonction</label>
                            <input type="text" class="form-control" placeholder="fonctions" />
                            <label>Département</label>
                            <input type="text" class="form-control" placeholder="Département" />
                            <label>Année(s) d'étude</label>
                            <input type="number" class="form-control" placeholder="2 ans" />
                            <label>Insérer une image</label>
                            <input type="file" name="imgMembre"/>
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Ecrire ici..."></textarea>
                            <button class="btn btn-nozon" id="btnCreer">Ajouter membre</button>
                        </div>
                    </form>

                    <div class="administration" id="modEquipe">
                        @include('pages.teamsec.edit')
                    </div>
                </div>