<?php require_once('includes/initialize.php') ;

require_login();


include('includes/app_head.php');
?>
<?php include('includes/menu_head.php'); ?>
<?php $bool = $_SESSION['toast'] ?? false; ?>
<div class="page">

    <div class="ui fluid container">

<?php
function get_percent($row_tot,$row_side)
{
    if($row_tot>0){
        $int = $row_side*100/$row_tot;
        $percent =  round($int,0);
    }
    else {
        $percent = 0;
    }

    return $percent;
}

$row_cl = Client::rows_tot();
$row_cl_part = Client::rows_part();
$row_cl_pro = Client::rows_pro();

?>
<style>
.ui.fluid.card{
    height: 65vh;
    overflow: scroll;
}
</style>


        <!-- begin row stats-->
        <div class="ui row equal width padded grid" id="example1">
            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
                                    <h4 class="column">Total clients</h4>
                                </div>





                                <div class="value">
                                    <i class="users huge icon"></i>
                                </div>



                                <div class="label">
                                    <span class="ui center aligned header"><?php echo $row_cl;?></span> <br>
                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>


                                <div class="centered row">
                                    <div class="canvas">
                                        <canvas id="myChart1"></canvas>

                                        <span><b>Partiulier:</b> <?php echo '('.$row_cl_part.')'; echo get_percent($row_cl,$row_cl_part);?> %</span>
                                        <span><b>Profitionnel:</b><?php echo '('.$row_cl_pro.')'; echo get_percent($row_cl,$row_cl_pro);?> %</span>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
                                    <h4 class="column">Total Revenue </h4>
                                </div>

<?php
$total = Facture::find_total_revenu();
$rows_tot = Facture::rows_tot();
$rows_cache = Facture::rows_cache();
$rows_cheque = Facture::rows_cheque();
$rows_ccp = Facture::rows_ccp();


?>



                                <div class="value">
                                    <i class="huge money bill alternate outline icon"></i>
                                </div>



                                <div class="label">
                                    <span class="ui center aligned header"><?php echo $total.' DA'. $rows_tot;  ?></span> <br>

                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>


                                <div class="centered row">
                                    <div class="canvas">
                                        <canvas id="myChart2"></canvas>
                                        <span><b>Cache:</b> <?php echo '('.$rows_cache.')';echo get_percent($rows_tot,$rows_cache);?> %</span>
                                        <span><b>Chèque:</b> <?php echo '('.$rows_cheque.')';echo get_percent($rows_tot,$rows_cheque);?> %</span>
                                        <span><b>CCP:</b> <?php echo '('.$rows_ccp.')';echo get_percent($rows_tot,$rows_ccp);?> %</span>
                                        
                                        
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
<?php 
$row_hyb = Hebergement::rows_tot();
$row_hyb_dns = Hebergement::rows_dns();
$row_hyb_else = Hebergement::rows_else();
?>
                                    <h4 class="column">Total Hébérgement</h4>
                                </div>





                                <div class="value">
                                    <i class="database huge icon"></i>
                                </div>



                                <div class="label">
                                    <span class="ui center aligned header"><?php echo $row_hyb; ?></span> <br>
                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>


                                <div class="centered row">
                                    <div class="canvas">
                                        <canvas id="myChart3"></canvas>

                                        <span><b>domaine:</b> <?php echo '('.$row_hyb_dns.')';echo get_percent($row_hyb,$row_hyb_dns);?>%</span>
                                        <span><b>domaine+pack: </b><?php echo '('.$row_hyb_else.')';echo get_percent($row_hyb,$row_hyb_else);?>%</span>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
<?php
$row_con = Conception::rows_tot();
$row_con_stat = Conception::rows_statique();
$row_con_dyn = Conception::rows_dynamique();
?>
                                    <h4 class="column">Total Conception</h4>
                                </div>




                                <div class="value">
                                    <i class="file code huge icon"></i>

                                </div>



                                <div class="label">
                                    <span class="ui center aligned header"><?php echo $row_con;?></span> <br>
                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>
                                <div class="centered row">

                                    <div class="canvas">
                                        <canvas id="myChart4"></canvas>

                                        <span><b>Statique:</b><?php echo '('.$row_con_stat.')'; echo get_percent($row_con,$row_con_stat);?>%</span>
                                        <span><b>Dynamique:</b><?php echo '('.$row_con_dyn.')'; echo get_percent($row_con,$row_con_dyn); ?> %</span>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>







        </div>

        <!-- end row stats-->

        <!-- begin row tables-->

        <div class="ui row equal width  padded  grid">

            <div class="row">

                <div class="column ">
                    <!-- début des avertissements-->

                    <div class="ui fluid card">
                        <div class="ui content grid">
                            <div class="row">
                                <h2 class="thirteen wide column">Hébérgements en urgence</h2>
                                <?php
$rows_exp = Hebergement::rows_expiré();
$rows_envoie = Hebergement::rows_envoie_expiré();
?>

                                <div class="two wide column">

                                    <div class="ui search  column" id="load_search">
                                        <div class="ui icon input">
                                            <input class="prompt" type="text" placeholder="cherher..."
                                                id="search">
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                                    </div>
                                    
                                </div>


                                <h4 class="thirteen wide column">Expirés:&nbsp; <span class="ui red text"><?php echo $rows_exp;?></span></h4>
                                <h4 class="thirteen wide column">En voie d'expiration:&nbsp <span class="ui orange text"><?php echo $rows_envoie;?></span></h4>

                            </div>
                           

                            <div class="row">
                                <div id="left" class="column">
                                    <table class="ui striped large selectable  red table" id="table">
                                        <thead>
                                            <tr>
                                            
                                                <th>Nom et Prénom</th>
                                                <th>pack</th>
                                                <th>URL</th>
                                                <th>date expiration</th>
                                                <th colspan="3">jours restants</th>
                                            </tr>
                                        </thead>
<?php
$hyb_expiré = Hebergement::find_expired();
?>
                                        <tbody>
                                            <?php
                                            
                                            
                                            if($hyb_expiré){
                                                foreach($hyb_expiré as $expiré){
                                                    $date_now =  (new \DateTime())->format('Y-m-d G:i:s');
                                                    $id=$expiré->id_cl;
                                                    $name = Hebergement::find_name($id);
                                                    $id_p = $expiré->id_pack;
                                                    $nom_pack = Hebergement::find_pack($id_p);
                                                    
                                                     ?>
                                            <tr class="red">
                                                
                                                <td><i class="skull crossbones icon"></i><?php echo $id.'-'.$name;?></td>
                                                <td><?php echo h($expiré->id_pack).'-'.$nom_pack ;?></td>
                                                <td><?php echo h($expiré->url_heb) ;?></td>
                                                <td><?php echo h($expiré->date_fin_heb) ;?></td>
                                                <td><b></b><?php echo Hebergement::find_delai($expiré->date_fin_heb)?></td>
                                                <form action="hebergements/sup_hyb_exp.php?id=<?php echo $expiré->id_heb;?>" method="POST">
                                                <td> <button class="ui tiny red button" name="supprimer"><i class="minus circle icon"></i><span>Supprimer</span></button></td>
                                                <td> </td>
                                                </form>       
                                                
                                            </tr>
                                           
                                            
                                            
                                            <?php 
                                                }
                                            }
                                            else echo 'pas d\'ebergement expiré';
                                            ?>

<?php
$hebergement = new Hebergement;
$client = new Client;
$hyb_expiré = $hebergement->find_going_expired();
?>

                                            
                                            <?php
                                            
                                            if($hyb_expiré){
                                                foreach($hyb_expiré as $expiré){
                                                    $date_now =  (new \DateTime())->format('Y-m-d G:i:s');
                                                    $id=$expiré->id_cl;
                                                    $name = Hebergement::find_name($id);
                                                    $id_p = $expiré->id_pack;
                                                    $nom_pack = Hebergement::find_pack($id_p);
                                                    
                                                    
                                                     ?>
                                            <tr class="green">
                                                <td><i class="exclamation triangle orange icon"></i><?php echo $id.'-'.$name;?></td>
                                                <td><?php echo h($expiré->id_pack).'-'.$nom_pack ;?></td>
                                                <td><?php echo h($expiré->url_heb) ;?></td>
                                                <td><?php echo h($expiré->date_fin_heb) ;?></td>
                                                <td><b></b><?php echo Hebergement::find_delai($expiré->date_fin_heb)?></td>
                                                <td></td>
                                                <td></td>
                                                
                                            </tr>
                                            <?php 
                                                }
                                            }
                                            else echo '<h3  style="color:red;">pas d\'ebergement ni expiré ni en voie d\'expiration</h3>';
                                            ?>
                                            
                                            

                                            <!-- <tr class="orange">
                                                <td><i class="exclamation triangle icon"></i>---</td>
                                                <td>Pack wind</td>
                                                <td>mohammed.org</td>
                                                <td>28/2/2019</td>
                                                <td><b>7 jours</b></td>

                                                
                                            </tr> -->
                                           

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin des avertissements-->

                </div><!-- fin de colonne-->

            </div>
<?php

$conception = Conception::find_all_dash();

?>
            <div class="row">
                <div class="column ">
                    <!-- début des avertissements-->

                    <div class="ui fluid card">
                        <div class="content">
                            <h2>Conception non terminée</h2>
                            <div id="middle">
                                <table class="ui celled orange table">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>délai restant</th>
                                           
                                            <th>Versement</th>
                                            <th>Prix</th>
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    if($conception){
                                        foreach($conception as $cons)
                                        {
                                      $id = $cons->id_cl;
                                      $name = Conception::find_name($id);
                                      $date_now =  (new \DateTime())->format('Y-m-d');
                                      $date_fin = Conception::date_fin($cons->date_deb_con,$cons->delai_con);
                                      $delai = Conception::delai($date_now,$date_fin);


                                        
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $name;?></td>
                                            <td><?php echo h($cons->nom_con); ?> </td>
                                            <td><?php echo $delai;?></td>
                                            
                                            <td><?php echo h($cons->versement_con).' DA';?></td>
                                            <td><?php echo h($cons->prix_con).' DA';?></td>
                                            
                                            <td>
                                                <div class="ui bulleted list">
                                                <div class="item"><?php echo h($cons->commentaire_con);?></div>
                                                </div>
                                            </td>
                                            
                                        </tr>

                                       

                                        
                                        <?php
                                        }
                                    }else echo '<h3 style="color:orange;">pas de conception à finir</h3>'; 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- fin des avertissements-->

                </div><!-- fin de colonne-->

            </div>






        </div>
        <!--fin grid-->





        <!-- end row tables-->

    </div>


</div>

</div>

<?php 

if(isset($_POST['supprimer'])){

echo "<script>alert('supprimer');</script>";
}

?>


<script src="dist/Chart.bundle.js"></script>
<script src="dist/jquery.circliful.js"></script>

<script>
$(document).ready(() => {
    <?php
if($bool){
    echo "
    $('body')
 .toast({
   class: 'success',
   message: `hybergement a été supprimer !`
 })
;
    ";
}    
$_SESSION['toast'] = false;
?>

})

$(function() {


    // Write on keyup event of keyword input element
    $("#search").keyup(function() {
        $('#load_search').toggleClass('loading');
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("#table tbody tr"), function() {
            if ($(this).text().toLowerCase().indexOf(searchText) === -1)
                $(this).hide();
            else
                $(this).show();
        });
    });






    $('.ui.progress').progress();

    // js toggle example "1"
    $("#leftbar-toggle").click(function() {
        event.preventDefault();
        $("body").toggleClass("opened");
    });

    // js toggle example "2"
    /*
     $(".leftbar").hover(function() {
       $("body").toggleClass("opened");
     });
     */
    // js toggle example "3"
    // $("#leftbar-toggle").click(function() {
    //   $("body").toggleClass("opened");
    // });

});

var ctx = document.getElementById("myChart1");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Particulier", "Profitionnel"],

        datasets: [{
            data: [<?php echo get_percent($row_cl,$row_cl_part);?>, <?php echo get_percent($row_cl,$row_cl_pro);?>],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',

            ]

        }]
    },

    options: 0
});


var ctx = document.getElementById("myChart2");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Cache", "Chèque", "CCP"],

        datasets: [{
            data: [<?php echo get_percent($rows_tot,$rows_cache);?>, <?php echo get_percent($rows_tot,$rows_cheque);?>, <?php echo get_percent($rows_tot,$rows_ccp);?>],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',
                '#903749'

            ]

        }]
    },

    options: 0
});

var ctx = document.getElementById("myChart3");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Domaine", "Domaine+pack"],

        datasets: [{
            data: [<?php echo get_percent($row_cl,$row_hyb_dns);?>,<?php echo get_percent($row_cl,$row_hyb_else);?>],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',


            ]

        }]
    },

    options: 0
});

var ctx = document.getElementById("myChart4");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Statique", "Dynamique"],

        datasets: [{
            data: [<?php echo get_percent($row_cl,$row_con_stat);?>, <?php echo get_percent($row_cl,$row_con_dyn);?>],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',

            ]

        }]
    },

    options: 0
});
</script>

</body>

</html>