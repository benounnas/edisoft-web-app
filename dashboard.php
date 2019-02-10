<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
    <script src="dist/jquery-3.3.1.min.js"></script> 
    <script src="dist/semantic.min.js"></script>
    
    <style>
      
     
      /* menu */

      .leftbar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 50px; /*default width*/
        background-color: #EB2939;
        transition: width 0.4s;
        z-index: 1000;
        overflow: hidden;
      }

      .leftbar .ui.link.list .item {
        padding: 15px 0 15px;
      }

      .leftbar .ui.link.list .item .icon, .leftbar .ui.link.list .item .content {
        color: white;
      }

      .leftbar .ui.link.list .item:hover {
        background-color: white;
      }

      .leftbar .ui.link.list .item:hover .icon, .leftbar .ui.link.list .item:hover .content {
        color: black;
      }

      .leftbar .ui.link.list .item.active {
        background-color: black;
      }

      .leftbar .ui.link.list .item.active .icon, .leftbar .ui.link.list .item.active .content {
        color: white;
      }
      
      .leftbar .ui.link.list .item .icon {
        padding-right: 0;
      }

      .leftbar .ui.link.list .item .icon::before {
        display: inline-block;
        width: 50px;
      }
      .ui .middle.aligned.link .list .content{
        
      }
      
      /* content */

      .page {
        transform: translateX(0);
        transition: margin-left 0.4s, transform 0.4s;
        padding-left: 50px;
        background-color:gainsboro;

      }

     #left, #middle, #right {
        overflow: scroll;
        height: 300px !important;
      }
      
      

      /* css toggle example "1" 

      body.opened .leftbar {
        width: 200px;
      }
      body.opened .page {
        margin-left: 200px;
      }
      */
      /* css toggle example "2" */
      
      body.opened .leftbar {
        width: 200px;
      }
      

      /* css toggle example "3" */
      /*
      body.opened .leftbar {
        width: 200px;
      }
      body.opened .page {
        transform: translateX(150px);
      }
      body.opened::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 900;
        background-color: black;
        opacity: .5;
      }
      */


.power.off {
    border-left: 1px solid;
    padding-left: 10px;
    margin-left: 10px;
}

#head{
    width: 100%;
    background-color: white;
    border-bottom: 1px solid gray;
    height: 52px;
}


.canvas span{
    margin-left: 3px;
}
.ui.card{
  width: 100%;
}
.user_session {
    display: inline-block;
    float: right;
    margin-right: 15px;
    margin-top: 0px;
}
    
    </style>
  </head>

  <body>
    
    <div class="leftbar">
      <div class="ui middle aligned link list">
        
        <a class="item" id="leftbar-toggle" href="#">
          <i class="sidebar large icon"></i>
        </a>
        
        <a class="item" href="#">
          <i class="home large icon"></i>
          <div class="content">Accueil</div>
        </a>
        <a class="item" href="#">
          <i class="users large icon"></i>
          <div class="content">Client</div>
        </a>
        <a class="item" href="#">
            <i class="file code large icon"></i>
            <div class="content">Conception</div>
          </a>
          <a class="item" href="#">
              <i class="database large icon"></i>
              <div class="content">Hébergement</div>
            </a>
            <a class="item" href="#">
                <i class="globe large icon"></i>
                <div class="content">DNS</div>
              </a>
              <a class="item" href="#">
                  <i class="cloud upload large icon"></i>
                  <div class="content">Payement</div>
                </a>
               
       
      </div>      
    </div>
    <!-- end leftbar -->    


    <div class="page">

      <div class="ui fluid container">

          <div class="ui padded grid">
            <!-- begin row head-->
                          <div class="streched row" id="head">
                                  <div class="twelve wide column">
                                          <img  src="images/logo.png" alt=""  class="ui tiny image" style="margin-left: 2%;">
                                      </div>

                                

                                  
                                            <div class="four wide column">
                                                <div class="user_session">    
                                                    <i class="big user circle icon"></i>
                                                                
                                                    <span>Mohamed</span>
                                                    
                                                    <a href="login/deconnecter.php"><i class="large power off icon" ></i></a>
                                              </div>
                                            </div> 
                                    
                                              
                                            

                                

                          </div> 

            <!-- end row head-->


            <!-- begin row stats-->
              <div class="ui row equal width padded grid">
                <div class="column">
                  
                  
                       <div class="ui card">
                          <div class="ui statistics content">
                              <div class=" ">
                                <div class="ui grid ">
                                    <div class="row"><h4 class="column">Total clients</h4></div>
                                    
                                  


                                      
                                          <div class="value">
                                              <i class="users huge icon"></i>
                                            </div>
                                    
                                      
                                      
                                          <div class="label">
                                              <span class="ui center aligned header">10000</span> <br>
                                           <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine
                                          </div>
  
                                 
                                      <div class="centered row">    
                                          <div class="canvas">
                                              <canvas  id="myChart1"></canvas>
                                   
                                              <span><b>Partiulier:</b> 10%</span>                                                 
                                              <span><b>Profitionnel:</b> 20%</span>                                                 
                                                    
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
                                  <h4 class="column">Total Revenue </h4></div>
                                 
                               


                                   
                                       <div class="value">
                                          <i class="huge money bill alternate outline icon"></i>
                                         </div>
                                 
                                   
                                   
                                       <div class="label">
                                          <span class="ui center aligned header">1000000 DZD</span> <br>

                                        <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine
                                       </div>

                              
                                    <div class="centered row">    
                                       <div class="canvas">
                                           <canvas  id="myChart2"></canvas>
                                
                                           <span><b>Cache:</b> 10%</span>                                                 
                                           <span><b>Chèque:</b> 20%</span>                                                 
                                           <span><b>CCP:</b> 70%</span>      
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
                               <h4 class="column">Total Hébérgement</h4> 
                               </div>
                             
                           


                               
                                   <div class="value">
                                      <i class="database huge icon"></i>
                                     </div>
                             
                               
                               
                                   <div class="label">
                                       <span class="ui center aligned header">10000</span> <br>
                                    <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine
                                   </div>

                          
                              <div class="centered row">     
                                  <div class="canvas">
                                       <canvas  id="myChart3"></canvas>
                            
                                       <span><b>domaine:</b> 40%</span>
                                       <span><b>domaine+pack: </b>60%</span>
                                       
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
                           
                           <h4 class="column">Total Conception</h4> 
                          </div>
                         


                           
                               <div class="value">
                                  <i class="file code huge icon"></i>
                                   
                                 </div>
                         
                           
                           
                                 <div class="label">
                                    <span class="ui center aligned header">10000</span> <br>
                                 <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine
                                </div>
                       <div class="centered row">

                               <div class="canvas">
                                   <canvas  id="myChart4"></canvas>
                        
                                   <span><b>Statique:</b>  50%</span>
                                   <span><b>Dynamique:</b>  50M</span>
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

                  <div class="column " >
                      <!-- début des avertissements-->
  
                     <div class="ui fluid card" >
                        <div class="content" >
                            <h2>Client à notifier!</h2>
                           <div id="left">
                              <table class="ui striped large selectable  red table">
                                  <thead>
                                    <tr>
                                      <th>Nom et Prénom</th>
                                      <th colspan="1">Hébérgement</th>
                                      <th></th>
                                      <th>date expiration</th>
                                      <th colspan="2">jours restants</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>BENOUNNAS Oussama</td>
                                      <td>Pack Sunshine</td>
                                      <td></td>
                                      <td>10/2/2019</td>
                                      <td>23 jours</td>
                                      <td class="selectable ">
                                          <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                       
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>Gaci Mohammed lamine</td>
                                        <td>Pack Thunder</td>
                                        <td></td>
                                        <td>3/2/2019</td>
                                        <td>2 jours</td>
                                        <td class="selectable">
                                            <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td> Hachemi said</td>
                                          <td>DNS</td>
                                          <td>.com</td>
                                          <td>1/3/2019</td>
                                          <td>10 jours</td>
                                          <td class="selectable">
                                              <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BENOUNNAS Oussama</td>
                                            <td>Pack Sunshine</td>
                                            <td></td>
                                            <td>10/2/2019</td>
                                            <td>23 jours</td>
                                            <td class="selectable">
                                                <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>Gaci Mohammed lamine</td>
                                              <td>Pack Thunder</td>
                                              <td></td>
                                              <td>3/2/2019</td>
                                              <td>2 jours</td>
                                              <td class="selectable">
                                                  <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Hachemi said</td>
                                                <td>DNS</td>
                                                <td>.com</td>
                                                <td>1/3/2019</td>
                                                <td>10 jours</td>
                                                <td class="selectable">
                                                    <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                                  </td>
                                              </tr>
                                        
                                  
                                  </tbody>
                                </table>
                           </div>
                           </div>
                        </div>
            <!-- fin des avertissements-->
  
              </div><!-- fin de colonne-->
  
              </div>

              <div class="row">
                  <div class="column ">
                      <!-- début des avertissements-->
      
                     <div class="ui fluid card">
                        <div class="content">
                            <h2>Conception non terminée</h2>
                           <div id="middle">
                              <table class="ui celled table" >
                                  <thead>
                                    <tr>
                                      <th>Client</th>
                                      <th>Nom du site</th>
                                      <th>délai restant</th>
                                      <th>état d'avancement</th>
                                      <th colspan="1">Commentaire</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Ooredoo</td>
                                      <td>Oooredoo.dz</td>
                                      <td>15 jours</td>
                                      <td>28%</td>
                                      <td><div class="ui bulleted list">
                                          <div class="item">conception de la base de données</div>
                                         
                                          <div class="item">Harmonie des couleurs</div>
                                        </div></td>
                                    </tr>

                                    <tr>
                                        <td>Ooredoo</td>
                                        <td>Oooredoo.dz</td>
                                        <td>15 jours</td>
                                        <td>28%</td>
                                        <td><div class="ui bulleted list">
                                            <div class="item">conception de la base de données</div>
                                           
                                            <div class="item">Harmonie des couleurs</div>
                                          </div></td>
                                      </tr>

                                      <tr>
                                          <td>Ooredoo</td>
                                          <td>Oooredoo.dz</td>
                                          <td>15 jours</td>
                                          <td>28%</td>
                                          <td><div class="ui bulleted list">
                                              <div class="item">conception de la base de données</div>
                                             
                                              <div class="item">Harmonie des couleurs</div>
                                            </div></td>
                                        </tr>
                                
                                  </tbody>
                                </table>
                           </div>
                           </div>
                        </div>
            <!-- fin des avertissements-->
      
              </div><!-- fin de colonne-->
      
              </div>
           





            </div><!--fin grid-->





            <!-- end row tables-->

          </div>


      </div>

    </div>





    <script src="dist/Chart.bundle.js"></script>
<script src="dist/jquery.circliful.js"></script>

    <script>


      $(function() {

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
var myPieChart = new Chart(ctx,{
    type: 'doughnut',
    
    data: {
        labels: ["Particulier", "Profitionnel"],
        
        datasets: [{
            data: [50,50],
            backgroundColor: [
                '#521262',
                '#3490de', 
               
            ]
           
        }]
    },
    
    options: 0
});


var ctx = document.getElementById("myChart2");
var myPieChart = new Chart(ctx,{
    type: 'doughnut',
    
    data: {
        labels: ["Cache", "Chèque", "CCP"],
        
        datasets: [{
            data: [10,20, 70],
            backgroundColor: [
                '#521262',
                '#3490de', 
                'teal'
               
            ]
           
        }]
    },
    
    options: 0
});

var ctx = document.getElementById("myChart3");
var myPieChart = new Chart(ctx,{
    type: 'doughnut',
    
    data: {
        labels: ["Domaine", "Domaine+pack"],
        
        datasets: [{
            data: [40,60],
            backgroundColor: [
                '#521262',
                '#3490de', 
                
               
            ]
           
        }]
    },
    
    options: 0
});

var ctx = document.getElementById("myChart4");
var myPieChart = new Chart(ctx,{
    type: 'doughnut',
    
    data: {
        labels: ["Statique", "Dynamique"],
        
        datasets: [{
            data: [50,50],
            backgroundColor: [
                '#521262',
                '#3490de', 
               
            ]
           
        }]
    },
    
    options: 0
});
      
    </script>

  </body>
</html>