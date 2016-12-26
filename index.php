<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PokerStats</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,700,600,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>

         <link rel="stylesheet" href="css/mystyle.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!--<link rel="stylesheet" href="css/owl.transitions.css">-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!--<script src="js/vendor/modernizr-2.6.2.min.js"></script>-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
         
         <!-- header Start
         ================================================= -->
        
        
        <?php
        //configurazione
        
        require 'configura.php';
        $con = connetti();
        session_start();
        
        
        ?>
        <!--core applicazione -->
        <script type="text/javascript">

            var raise = 0;
            var fold = 0;
            var check = 0;
            var call  = 0;
            var plays = 0;
            var total = 0;
            var match = 0; 
            var perc_raise = 0;
            var perc_check = 0;
            var perc_fold = 0;
            var perc_call = 0;
            var perc_hand_match = 0;

        </script>    
        <script rel="text/javascript" src="js/app.js"></script>

        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="block-left">
							<nav class="navbar navbar-default" role="navigation">
							  <div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <div class="nav-logo">
									<a href="index.html"><h1 class="poker_logo">PokerStats</h1></a>
								  </div>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
									<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
									<li><a href="#how">Come funziona?</a></li>
									<li><a href="#app">Applicazione</a></li>
								  </ul>
								</div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
                        </div>
                    </div><!-- .col-md-12 -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #heder close -->

        <!-- Slider Start
        ============================================================== -->

        <section id="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="slider-text-area">
                                <div class="slider-text">
                                    <h2>Poker Stats </h2> 
                                    <p class="sub-slider-text">Una buona mano di poker?<br>Una questione statistica!</p>
                                    <p class="slider-p">Traccia le tue mosse per ottenere le tue vittorie.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #slider close -->
        
     
        <!-- Service Start 
        ============================================================= -->
        <a name="how"></a>
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-top">
                            <div class="service-header">
                                <h1>Come funziona?</h1>
                                <p>Poker Stats è un'applicazione web <br /> che ti permette di tracciare le tue mosse di gioco durante una partita di poker.</p>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- row close -->
				<div class="row">
					<div class="col-md-12">
						<div class="block-bottom">
							<div class="service-tab">
								  <!-- Nav tabs -->
								  <ul class="badhon-tab" role="tablist">
									<li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
									<i class="fa fa-thumbs-o-down"></i>
									Traccia i check
									</a></li>
									<li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
									<i class="fa fa-thumbs-o-up"></i>
									Traccia i raise
									</a></li>
									<li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
									<i class="fa fa-sign-out"></i>
									Traccia i fold
									</a></li>
									<li><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
									<i class="fa fa-trophy"></i>
									Vittorie o Scofitte
									</a></li>
									<li><a href="#umbrella" aria-controls="settings" role="tab" data-toggle="tab">
									<i class="fa fa-bar-chart-o"></i>
									Statistiche combinazioni!
									</a></li>
								  </ul>

								  <!-- Tab panes -->
								  <div class="tab-content edit-tab-content">
									<div class="tab-pane active edit-tab" id="home">
										<div class="teb-icon-edit">
											<i class="fa fa-thumbs-o-down"></i>
										</div>
										<h1>Traccia i check</h1>
										<p>Tieni il conto di quante volte fai check.<br />Tenere a mente quante volte giochi senza puntare,<br>eviterà di mostrarti impossibilitato a continuare a giocare.</p>
									</div>
									<div class="tab-pane edit-tab" id="profile">
										<div class="teb-icon-edit">
											<i class="fa fa-thumbs-o-up"></i>
										</div>
										<h1>Traccia i raise</h1>
                                        <p>Tieni il conto di quante volte fai raise.<br />Quante volte punti 
                                            durante una partita eviterà di scoprire subito il tuo gioco,<br>
                                            e soprattuto ti regolarai a non sperperare tutto quello che hai vinto</p>
									</div>
									<div class="tab-pane edit-tab" id="messages">
										<div class="teb-icon-edit">
											 <i class="fa fa-sign-out"></i>
										</div>
										<h1>Tracci i fold</h1>
										<p>Controlla quante volte abbandoni la mano di gioco,<br>
                                            in questo modo capirai se conviene continuare a giocare</p>
									</div>
									<div class="tab-pane edit-tab" id="settings">
										<div class="teb-icon-edit">
											 <i class="fa fa-trophy"></i>
										</div>
										<h1>Vinci o Perdi?</h1>
										<p>Scopri quante volte hai vinto o perso,<br>tenendo conto statisticamente sul numero di partite giocate</p>
									</div>
									<div class="tab-pane edit-tab" id="umbrella">
										<div class="teb-icon-edit">
											<i class="fa fa-bar-chart-o"></i>
										</div>
										<h1>Statistiche combinazioni vincenti</h1>
										<p>Scopri quali sono le combinazioni vincenti,<br>che hanno fatto vincere te o i tuoi avversari, <br>cosi saprei con quale combo vale la pena di rischiare.</p>
									</div>
								  </div>
							</div>
						</div>
					</div><!-- .col-md-12 close -->
				</div><!-- row close -->
            </div><!-- .container close -->
        </section><!-- #service close -->


        <!-- contant-1 start
        ===================================================== -->
        <a name="app"></a>
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-top">
                            <div class="service-header">
                                <h1>Applicazione</h1>
                                <p>Segnala i tuoi stati di partita <br>per ricevere feedback sul tuo stato di gioco</p>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
                </div><!-- row close -->
                
                   <?php
        
                    if(isset($_POST['token_chiudi_partita'])){
                        session_unset();
                        ?>
                            <div class="container" style="margin-top:100px;">
                                <div class="row">
                                   <div class="alert alert-info alert-dismissable">
                                       <a class="close" data-dismiss="alert">×</a>
                                       <h3 align="center">Partita conclusa!</h3>
                                   </div>
                                </div>    
                            </div>   
                        <?php
                    }

                    if(isset($_POST['token_crea_partita'])){

                        //variabili 
                        $num_giocatori = pulisci($_POST['num_giocatori']);

                        $sql_crea_partita = "INSERT INTO torneo(num_giocatori) VALUE('$num_giocatori');";
                        $ris = esegui_query($con,$sql_crea_partita);
                        $id = mysqli_insert_id($con);
                        $_SESSION['id_partita'] = $id;

                       // unset($_SESSION['id_partita']);
                       
                        $_SESSION['stato_partita']="PRE-FLOP";
                        ?>
                                <div class="container" style="margin:40px 0px 20px;">
                                    <div class="row">
                                       <div class="alert alert-success alert-dismissable">
                                           <a class="close" data-dismiss="alert">×</a>
                                           <h3 align="center">Partita creata con successo!</h3>
                                       </div>
                                    </div>    
                                </div>     
                        <?php
                         echo "<h4 align='center'>Stai giocando la partita N° ".$_SESSION['id_partita']."</h4>";
                    }//chiudi token_crea_partita

                    if(isset($_POST['token_chiudi_preflop'])){
                        $_SESSION['stato_partita']="FLOP";
                        ?>
                               <div class="container" style="margin-top:100px;">
                                    <div class="row">
                                       <div class="alert alert-info alert-dismissable">
                                           <a class="close" data-dismiss="alert">×</a>
                                           <h3 align="center">SEI passato alla fase di FLOP!</h3>
                                       </div>
                                    </div>    
                                </div>  
                        <?php
                    }

                    ?>
               
                <div class="row">
                    <?php
                    if(!isset($_SESSION['id_partita']))
                    {    
                    ?>
                    <div class="col-md-6">
                          
                        <h2>Crea nuova partita!</h2>
                        <form method="post" action="index.php"> 
                            <label>Numero di giocatori</label>
                            <select name="num_giocatori" class="form-control">
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                            <br>
                            <input type="hidden" value="1" name="token_crea_partita">
                           <button class="btn btn-primary"><i class="fa fa-plus"> Crea TORNEO</i></button>
                        </form>
                    </div>
                    <?php
                    }
                    else
                    {    
                    ?>
                    <div class="col-md-6">
                        <div class="block-left">
                            <div class="contant-1-text-area">
                                <div class="contant-1-head">
                                    <h1>Stato della partita</h1>
                                </div>
                                <div class="contant-1-text">
                                    <h2>Come procede la partita fino adesso?</h2>
                                    <p>Scopri quante volte hai fatto check,raise o hai lasciato la mano</p>

                                       <div class="tabs">
                                    <ul class="tab-links">
                                        <li id="pre-flop" class="active"><a href="#tab1">Pre-FLOP</a></li>
                                        <li id="flop"><a href="#tab2">FLOP</a></li>
                                        <li id="turn"><a href="#tab3">TURN</a></li>
                                        <li id="river"><a href="#tab4">RIVER</a></li>
                                    </ul>

                                    <div class="tab-content">
                                    <div id="tab1" class="tab active">
                                        <?php
                                        if($_SESSION['stato_partita']=="PRE-FLOP")
                                        {    
                                        ?>
                                        <div class="btn_poker">
                                                  <button class="btn btn-primary" id="btn-newplay">
                                                        <i class="fa fa-plus"></i>   Nuova mano
                                                  </button>
                                                  <br>
                                                  <button class="btn btn-info" id="btn-call">
                                                    <i class="fa fa-phone"></i>   Faccio call
                                                  </button>
                                                  <br>
                                                  <button class="btn btn-success" id="btn-raise">
                                                    <i class="fa fa-thumbs-o-up"></i>   Faccio raise
                                                  </button>
                                                  <br>
                                                  <!--<button class="btn btn-warning" id="btn-check"><i class="fa fa-thumbs-o-down"></i>   Faccio check</button>
                                                  <br>-->
                                                  <button class="btn btn-danger" id="btn-fold">
                                                    <i class="fa fa-sign-out"></i> Lascio la mano
                                                  </button>
                                        </div>
                                        <div class="blocco_comandi">
                                            <form action="index.php" method="post">  
                                                    <input type="hidden" value="1" name="token_chiudi_preflop">
                                                    <button class="btn btn-warning" id="btn-pre-flop"><i class="fa fa-caret-right" align="center"></i> Passa al Flop</button>
                                            </form>        
                                        </div> 
                                        <?php
                                        }
                                        else
                                        {
                                            echo "<p>Apri la fase di pre-flop per giocare</p>";
                                        }    
                                        ?>
                                     </div>

                                    <div id="tab2" class="tab" style="display:none;">
                                    <?php
                                    if($_SESSION['stato_partita']=="FLOP")
                                    { 
                                    ?>    
                                    <p>Fase di FLOP</p>
                                    <p>Traccia le mosse tue e dei tuoi avversari durante la fase di flop.</p>
                                    <?php
                                    }
                                    else{
                                        ?>
                                      
                                        <p>Chiudi la fase di pre-flop prima di iniziare questa fase di gioco</p>   
                                      
                                          <?php
                                      }
                                    ?>
                                    </div>

                                    <div id="tab3" class="tab" style="display:none;">
                                    <p>Tab #3 content goes here!</p>
                                    <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
                                    </div>

                                    <div id="tab4" class="tab" style="display:none;">
                                    <p>Tab #4 content goes here!</p>
                                    <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
                                    </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                            <div>
                                    <form method="post" action="index.php" >
                                        <input type="hidden" value="1" name="token_chiudi_partita">
                                        <button class="btn btn-danger"><i class="fa fa-sign-out"></i> Chiudi Partita</button>
                                    </form>
                            </div>
                    </div><!-- .col-md-6 close -->
                    <?php
                    }//chiudi else di $_SESSEION['id_partita'];
                    ?>
                    <div class="col-md-6">
                        <div class="block-right">
                              <div class="poker_status">
                                 <img src="img/call.jpg" class="img-responsive img-circle">
                                 <h3>Call</h3>
                                  <p id="call-score">
                                    <script type="text/javascript">
                                        document.write(call);
                                    </script>
                                    Volte
                                </p>
                                <p id="call-perc"></p>
                             </div>    
                             <div class="poker_status">
                                 <img src="img/poker-raising.jpg" class="img-responsive img-circle">
                                 <h3>Raise</h3>
                                  <p id="raise-score">
                                    <script type="text/javascript">
                                        document.write(raise);
                                    </script>
                                    Volte
                                </p>
                                <p id="raise-perc"></p>
                             </div> 
                             <!--<div class="poker_status">
                                 <img src="img/check.jpg" class="img-responsive img-circle" style="background:center bottom">
                                 <h3>Check</h3>
                                 <p id="check-score">
                                    <script type="text/javascript">
                                        document.write(check);
                                    </script>
                                    Volte
                                </p>
                                <p id="check-perc"></p>
                             </div>-->
                             <div class="poker_status">
                                 <img src="img/fold.jpg" class="img-responsive img-circle" style="background:center bottom">
                                 <h3>Fold</h3>
                                 <p id="fold-score">
                                    <script type="text/javascript">
                                        document.write(fold);
                                    </script>
                                    Volte
                                    <p id="fold-perc"></p>
                                </p>
                             </div>  
                        </div>
                    </div><!-- .col-md-6 close -->
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #contant-1 close -->

        <div class="row poker-footer-img">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="col-md-4">
                                <div class="poker-block">
                                    <h4 id="total-score">
                                        <script type="text/javascript">
                                            document.write(plays);
                                        </script>
                                    </h4>
                                    <p>Partite Giocate</p>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="poker-block">
                                    <h4 id="total-actions">
                                        <script type="text/javascript">
                                            document.write(total);
                                        </script>
                                    </h4>
                                    <p>Totale Azioni</p>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="poker-block">
                                    <h4 id="total-fold">
                                        <script type="text/javascript">
                                            document.write(perc_hand_match);
                                        </script>
                                    </h4>
                                    <p>Abbandono su totale pertite</p>
                                </div>    
                            </div>
                        </div>
                    </div>    
        </div>


        <!-- footer Start
        ====================================================================== -->

        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="footer-contant">
                                <h3>Say Hi, Get In Touch</h3>
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-tumblr"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                    <a href="#"><i class="fa fa-flickr"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                                <div class="support-link">
                                    <ul>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Press</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Developers</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- #footer -->



        <script src="js/bootstrap.min.js"></script>
         <script>
           jQuery(document).ready(function() {
           
            jQuery('.tabs .tab-links a').on('click', function(e)  {
            var currentAttrValue = jQuery(this).attr('href');

            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

            e.preventDefault();
            });
            
      
            });
         </script>  
         <?php
          sconnetti($con)
         ?>
    </body>
</html>
