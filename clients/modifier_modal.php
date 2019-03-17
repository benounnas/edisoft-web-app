
<style>
#search {
    background: inherit !important;
    margin-bottom: 10px;
    border: 0;
}

.prompt {
    border-radius: 5px !important;
}

label {
    float: left;
}
</style>


<?php
$client = Client::find_by_id($id);





?>




    <div class="page">

        <div class="ui fluid container">


            <div class="ui padded grid">
            <h1>Modifier client N° <?php echo $id; ?></h1>

                <div class="ui fifteen wide column row centered grid" id="modifier_grid<?php echo $id; ?>">
                    <h2 class="ui left aligned header"><i class=" icons">
                            <i class="users icon"></i>
                            <i class="corner add icon"></i>
                        </i>&nbsp;modifier le client</h2>
                    <form method="POST" class="ui form" id="modifier_form<?php echo $id; ?>" action="update_client.php?id=<?php echo $id; ?>">
                        <div class="two fields">
                            <div class="field">
                                <label>Nom</label>
                                <input type="text" name="nom_cl" placeholder="Nom de client">
                            </div>
                            <div class="field">
                                <label>Prenom</label>
                                <input type="text" name="prenom_cl" placeholder="Prenom de client">
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label style="">Adress</label>
                                <input type="text" name="adresse" placeholder="Adresse" >
                            </div>
                            <div class="field">
                                <label>E-mail</label>
                                <input type="Email" name="email" placeholder="exemple@gmail.com">
                            </div>
                            <div class="field">
                                <label>Telephon</label>
                                <input type="text" name="telephon" placeholder="">
                            </div>

                        </div>
                        <label>Vous ètes:</label><br><br>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" id="particulier<?php echo -$id; ?>" name="check" value="particulier" class="hidden"
                                        <?php if($client->type_cl == 1) echo "checked";?> >
                                    <label>Particulier</label>
                                </div>
                            </div>

                        </div>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" id="professionnel<?php echo -$id; ?>" name="check" value="professionnel"
                                        class="hidden" <?php if($client->type_cl == 0){ echo "checked";}?>>
                                    <label>Professionnel</label>
                                </div>
                            </div>
                        </div>
                        <div class=" one  fields">
                            <div class="<?php if($client->type_cl == 1) echo "disabled";?> field" id="myfield<?php echo $id; ?>">
                                <label>Nom de l'entreprise</label>
                                <input type="text" name="entreprise" placeholder="Entreprise" id="myCheck<?php echo $id; ?>">
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field">
                            
                                <input type="submit" class="ui yellow button" value="Modifier" name="modifier">
                            </div>
                        </div>

                        <div class="ui error message"></div>
                    </form><!-- end form -->

                </div><!-- end segment-->





            </div><!-- end grid-->


        </div><!-- end container-->



    </div>
    <!--fin page-->

    <div id="modifier_success<?php echo $id; ?>" hidden>


<div class="ui centered grid">
    <div class="ten wide column row">
        <div class="row">
            <div class="ui big success message">
                <div class="sixteen wide column">
                <i class="check big icon"></i><h2> modification réussite</h2> 
                </div>
                <br>
                        
                <div class="sixteen wide column">
                <button class="ui green button" id="modif_refresh_button<?php echo $id; ?>"><i class="sync alternate icon"></i>Actualiser</button>
                </div>
       

            </div>
        </div>
        
    </div>

    <div class="row"></div>

</div>
</div>


    <script>

$(function() {
      
});



    $('.menu .item')
        .tab();

    $('.ui.radio.checkbox')
        .checkbox();


     $('#particulier<?php echo -$id; ?>').change(function() {
         $("#myfield<?php echo $id; ?>").hide(500, function() {

         });
         document.getElementById("myCheck<?php echo $id; ?>").disabled = true;

     });
     $('#professionnel<?php echo -$id; ?>').change(function() {

        $('#modifier_form<?php echo $id; ?>').form('add rule', 'entreprise', ['empty']); // hadi hia li rigaltha be js ta3 entreprise
         $("#myfield<?php echo $id; ?>").show(500, function() {

         });
         $("#myfield<?php echo $id; ?>").removeClass('disabled');
         document.getElementById("myCheck<?php echo $id; ?>").disabled = false;

     });
    

    $('#modifier_form<?php echo $id; ?>')
        .form({
            on: 'blur',
            fields: {

                nom_cl: {
                    identifier: 'nom_cl',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un nom'
                        },

                    ]
                },
                prenom_cl: {
                    identifier: 'prenom_cl',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un prenom'
                        },

                    ]
                },
                adresse_cl: {
                    identifier: 'adresse',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque une adresse'
                        },

                    ]
                },
                email_cl: {
                    identifier: 'email',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un email'
                        },

                    ]
                },
                telephon_cl: {
                    identifier: 'telephon',
                    rules: [{
                            type: 'number',
                            prompt: 'manque un numero telephon'
                        },

                    ]
                }
              

            }
        });


$('#modifier_form<?php echo $id; ?>')

  .form('set values', {
    nom_cl     : '<?php echo h($client->nom_cl); ?>',
    prenom_cl  : '<?php echo h($client->prenom_cl); ?>',
    adresse    : '<?php echo h($client->adresse_cl); ?>',
    email      : '<?php echo h($client->email_cl); ?>',
    telephon   : '<?php echo h($client->num_tel_cl); ?>',
    check      : '<?php echo h($client->type_cl);?>',
    entreprise : '<?php echo h($client->nom_societe_cl) ?? '';?>',
    terms      : true
  })
;
    </script>


    