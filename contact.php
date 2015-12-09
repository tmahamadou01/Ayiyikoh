<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Contact Ayiyikoh</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file://
        -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
       
    </head>
        <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" id="fixed">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="index.html"><img src="img/logo.png" style="height:70px;"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-top:13px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html">Accueil</a>
                        </li>
                        <li>
                            <a href="about.html">A Propos</a>
                        </li>
                        <li>
                            <a href="index.html">Activités</a>
                        </li>
                        <li>
                            <a href="projet.html">Nos Projets</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://en.wordpress.com/typo/?subdomain=ayiyikoh">Blog</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="section"></div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-success" style="font-size:50px;padding-bottom:50px;">CONTACTEZ NOUS</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <form method="POST" action="contact.php" enctype="multipart/form-data">
                            <div id="contact">
                                    <div class="form-group">
                                        <label for="nom">Prenom, Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom">
                                        </div>
                                    <div class="form-group">
                                        <label for="email">Adresse e-mail</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                   </div>
                                   <div class="form-group">
                                      <label for="message">Message</label>
                                      <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                                    </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox"> Se souvenir</label>
                                  </div>
                                  <button type="submit" class="btn btn-default" name="ok">Envoyez le message</button>
                            </div>
                        </form>

                        <?php
                       
                            if (isset($_POST[ok])) {

                          
                                alert('données ajouter');
                            }
                        ?>

                    </div>

                </div>
            </div>
        </div>
        <footer class="section section-primary" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="email" class="control-label">Inscription à notre Newlestter</label>
                                </div>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email" placeholder="Email" style="width:400px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-default">S'inscrire</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <p>
                            
                            <div class="ace-line primary-author-a-1z67zuz76zkz122zz75zpz81zyz122zez76zz88zz122zz83z" id="magicdomid780">
                                <span class="author-a-1z67zuz76zkz122zz75zpz81zyz122zez76zz88zz122zz83z">
                                <i class="fa fa-2x fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Contacts : 
                                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 00(225) 57583482
                                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 00(225) 57088382
                                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 00(225) 47629362
                                <br /><i class="fa fa-2x fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;e-mail : ayiyikoh@gmail.com /</span>
                            </div>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <a target="_blank" href="https://twitter.com/ayiyikoh"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                        <a target="_blank" href="https://www.facebook.com/ayiyikoh?fref=ts"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/logo.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center">&copy;  2015 Fablab Ayiyikôh - Identité visuelle : <a target="_blank" href="http://www.telekoura.tk">MT</a> - Réalisation : <a target="_blank" href="http://www.telekoura.tk">MT</a><h4>
                    </div>
                </div>
            </div> 
        </footer>

                <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    

</body></html>