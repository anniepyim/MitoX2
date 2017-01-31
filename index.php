<?php 
// restore existing user upload session when browser was closed
if ($_COOKIE['mitoviz_user_upload']!='') { 
        session_id($_COOKIE['mitoviz_user_upload']);
}

if (isset($_GET["muu"])) {
        session_id($_GET["muu"]);
}

session_start();

$id = session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MitoXplorer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    
    <!-- CSS for database -->
    <link href="css/database.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="icon" type="image/png" href="img/logos/favicon.png">

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MitoXplorer</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#database">Database</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#analysis">Analysis</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To MitoXplorer</div>
                <div class="intro-heading">Let's get started!</div>
                <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>

            </div>
        </div>
    </header>
    
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">MitoXplorer - A Visualization Tool for Mitochondrial Gene Expression and Mutation</h3>
                    <p class="large">Mitochondria are important organelles of eukaryotic cells. They serve primarily as a powerhouse to generate energy, and are also responsible for a lot of crucial biological functions.</p>
                    <p class="large">MitoXplorer maps mutation and expression data to our mitochondrial model that consists of known functions of mitochondria, and allows user to explore the data in an interactive way. You could start with browsing our <a class="page-scroll" href="#database">databases</a>, doing <a class="page-scroll" href="#analysis">comparative analysis</a> on them or even <a class="page-scroll" href="#analysis">upload your own data</a>.</p>
                    <p class="large">We also provide pipelines and other plugin for <a class="page-scroll" href="#download">downloading</a> to aid your analysis in mitochondrial genes and mitochondria-related research.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Database Grid Section -->
    <section id="database" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Database</h2>
                    <h3 class="section-subheading text-muted">Browse our public databases</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 database-item">
                    <a href="#database-aneuploidy" class="database-link" data-toggle="modal">
                        <div class="database-hover">
                            <div class="database-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/database/aneuploidy.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="database-caption">
                        <h4>Aneuploidy</h4>
                        <p class="text-muted">Cell lines with chromosome anomaly</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 database-item">
                    <a href="#database-trisomy" class="database-link" data-toggle="modal">
                        <div class="database-hover">
                            <div class="database-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/database/trisomy21.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="database-caption">
                        <h4>Trisomy 21</h4>
                        <p class="text-muted">Human and Mouse sample</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 database-item">
                    <a href="#database-tcga" class="database-link" data-toggle="modal">
                        <div class="database-hover">
                            <div class="database-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/database/tcga.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="database-caption">
                        <h4>TCGA project</h4>
                        <p class="text-muted">The Cancer Genome Atlas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Analysis Section -->
    <section id="analysis">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Analysis</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center analysis">
                <div class="col-md-6">
                    <ul class="list-inline analysis">
                        <li>
                            <a href="#analysis-compare" class="database-link" data-toggle="modal"><i class="fa fa-laptop"></i></a>
                        </li>
                    </ul>
                    <h4 class="service-heading">Comparative Analysis</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline analysis">
                        <li>
                            <a href="#analysis-upload" class="database-link" data-toggle="modal"><i class="fa fa-upload"></i></a>
                        </li>
                    </ul>
                    <h4 class="service-heading">Upload and Visualize Your Data</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Download Grid Section -->
    <section id="download" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Download</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 database-item">
                    <a href="#databaseModal1" class="database-link" data-toggle="modal">
                        <div class="database-hover">
                            <div class="database-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/download/pipeline.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="database-caption">
                        <h4>RNA-seq pipeline</h4>
                        <p class="text-muted">Analysis Pipeline</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 database-item">
                    <a href="#databaseModal2" class="database-link" data-toggle="modal">
                        <div class="database-hover">
                            <div class="database-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/download/fiji.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="database-caption">
                        <h4>Mitomorph</h4>
                        <p class="text-muted">FIJI Plugin</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Interested in our project? Contact us through email or with the form below!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <h4>Dr. Bianca Habermann</h4>
                    <p>Group leader Computational biology</p><br>
                    <h4>Max Planck Institute of Biochemistry</h4>
                    <p>
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:your-email@your-domain.com">habermann@biochem.mpg.de</a><br>
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+49 1234567<br>

                        <span><i class="fa fa-map-marker fa-1x"></i></span>Am Klopferspitz 18 <br>
                        <span><i class="fa fa-map-marker fa-1x" style="opacity:0;"></i></span>82152 Martinsried Germany<br>
                    </p>
                </div>
                <div class="col-lg-1"><hr></div>
                <div class="col-lg-6">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-l">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright">Copyright &copy; Max-Planck-Gesellschaft, München 2016</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- database Modals -->
    <!-- Use the modals below to showcase details about your database projects! -->

    <!-- database Aneuploidy 1 -->
    <div class="database-modal modal fade" id="database-aneuploidy" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Aneuploidy</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-aneuploidy">
                                    </div><br><br>
                                </form>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- database trisomy -->
    <div class="database-modal modal fade" id="database-trisomy" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Trisomy 21</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-trisomy">
                                    </div><br><br>
                                </form>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- database TCGA-->
    <div class="database-modal modal fade" id="database-tcga" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>TCGA</h2>
                                <p class="text-muted">Select Cancer Type to Browse Data</p>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">
                                        <a href="#database-brca" class="database-link" data-toggle="modal" data-dismiss="modal"><div class="database thumbnail">
                                            <div class="caption">
                                                <h3 style="font-size:16px;font-color:black">BRCA</h3> 
                                            </div>   
                                        </div></a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <a href="#database-lihc" class="database-link" data-toggle="modal" data-dismiss="modal"><div class="database thumbnail">
                                            <div class="caption">
                                                <h3 style="font-size:16px;font-color:black">LIHC</h3> 
                                            </div>   
                                        </div></a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <a href="#database-luad" class="database-link" data-toggle="modal" data-dismiss="modal"><div class="database thumbnail">
                                            <div class="caption">
                                                <h3 style="font-size:16px;font-color:black">LUAD</h3> 
                                            </div>   
                                        </div></a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <a href="#database-prad" class="database-link" data-toggle="modal" data-dismiss="modal"><div class="database thumbnail">
                                            <div class="caption">
                                                <h3 style="font-size:16px;font-color:black">PRAD</h3> 
                                            </div>   
                                        </div></a>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <a href="#database-thca" class="database-link" data-toggle="modal" data-dismiss="modal"><div class="database thumbnail">
                                            <div class="caption">
                                                <h3 style="font-size:16px;font-color:black">THCA</h3> 
                                            </div>   
                                        </div></a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- database TCGA BRCA-->
    <div class="database-modal modal fade" id="database-brca" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>TCGA - BRCA</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-brca">
                                    </div><br><br>
                                </form>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- database TCGA LIHC-->
    <div class="database-modal modal fade" id="database-lihc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>TCGA - LIHC</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-lihc">
                                    </div><br><br>
                                </form>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- database TCGA LUAD-->
    <div class="database-modal modal fade" id="database-luad" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>TCGA - LUAD</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-luad">
                                    </div><br><br>
                                </form>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- database TCGA PRAD-->
    <div class="database-modal modal fade" id="database-prad" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>TCGA - THCA</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-prad">
                                    </div><br><br>
                                </form>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- database TCGA THCA-->
    <div class="database-modal modal fade" id="database-thca" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>TCGA - PRAD</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-thca">
                                    </div><br><br>
                                </form>
                                <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Comparative analysis tutorial -->
    <div class="database-modal modal fade" id="analysis-compare" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <div class="col-lg-12">
                                <h2>Comparative Analysis</h2><hr>
                                </div>
                                <div class="col-lg-9"><img src="img/analysis/compare1.png" style="max-width:100%;max-height: 100%;"></div>
                                <div class="col-lg-3">
                                    <p>Here are some descriptions on how to use the tool...</p>

<p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>

<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>
                                </div>
                                
                                <div class="col-lg-12">
                                <a href="compare.php"><button type="button" class="btn btn-primary">Start Analysis</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Upload tutorial -->
    <div class="database-modal modal fade" id="analysis-upload" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <div class="col-lg-12">
                                <h2>Analyse Your Data</h2><hr>
                                </div>
                                <div class="col-lg-9">
                                    <img src="img/analysis/upload1.png" style="max-width:100%;max-height: 100%;">
                                </div>
                                <div class="col-lg-3">
                                    <p>Here are some descriptions on how to upload the data...</p>
<p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>
                                </div>                      
                                <div class="col-lg-12">
                                <a href="upload.html"><button type="button" class="btn btn-primary">Upload Data</button></a>&nbsp;&nbsp;<b> OR </b>&nbsp;&nbsp;<a href="#database-user" class="database-link" data-toggle="modal" data-dismiss="modal"><button type="button" class="btn btn-primary" data-dismiss="modal">Check Your Database</button></a> 
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- database USER -->
    <div class="database-modal modal fade" id="database-user" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>My Data</h2>
                                <form name = "compareform" action="compare.php" method="get">
                                    <p class="text-muted"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 1.2em"></span> Click on individual samples to visualize their expression and mutation profile<br>
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true" style="font-size: 1.2em"></span>
                                    Or select up to 6 samples for comparative analysis</p>     
                                    <div style = "display:none" id = "warning1"><font color="red">Please select 6 samples at most!!</font></div>
                                    <div style = "display:none" id = "warning2"><font color="red">Please select samples!!</font></div><br>
                                    <input id="readygo" type="submit" class="btn btn-success" value="Go!">
                                    <div><hr></div>
                                    <div class="row" id="userfiles-user">
                                    </div><br><br>
                                </form>
                                <a href="upload.html"><button type="button" class="btn btn-primary dismiss">Upload Data</button></a><br><br>
                                <a href="upload/destroy.php" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete all your uploaded samples?');">Restore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    
        
    <!--Database Javascript -->
    <script src="js/handlebars-v4.0.5.js"></script>
    <script id="userFilesTemplate" type="text/x-handlebars-template">
    
    <div class="row">
        {{#if containfiles}}
        {{#files}}
        <div class="col-sm-4 col-md-3">
            <div class="database thumbnail">
                <div class="caption">
                <span class="glyphicon glyphicon-ok" aria-hidden="true" style="float: left; color:white;display:none;font-size: 1.2em"></span>
                    <a href="mitomodel.php?id={{mitomodel}}"><span class="glyeye glyphicon glyphicon-eye-open" aria-hidden="true" style="float: right;font-size: 1.2em;color:black"></span></a>
                    <h3 style="font-size:14px">{{name}}</h3>
                </div>
                <input style="visibility:hidden" class="comparecheckbox" type="checkbox" name="compare[]" value="./data/{{url}}">    
            </div>
        </div>
        {{/files}}
        {{else}}
        <div class = "col-md-12" style="margin-top:10px;text-align: center;font-size:16px">
        It is currently empty! Would you like to upload some files?
        </div>
    {{/if}}
    </div>
    
    </script>
    

    <!-- RENDER TEMPLATE AFTER EVERYTHING ELSE LOADED -->
    
    <script data-userid="../data/aneuploidy/,../data/trisomy/,../data/TCGA/BRCA/,../data/TCGA/LIHC/,../data/TCGA/LUAD/,../data/TCGA/PRAD/,../data/TCGA/THCA/,<?php echo '../data/user_uploads/'.$id.'/json/'; ?>" data-type="userfiles-aneuploidy,userfiles-trisomy,userfiles-brca,userfiles-lihc,userfiles-luad,userfiles-prad,userfiles-thca,userfiles-user" src="js/userFiles.js"></script>
    <!--<script data-userid="../data/trisomy/" data-type="userfiles-trisomy" src="js/userFiles.js"></script>
    <script data-userid="../data/TCGA/HCC" data-type="userfiles-tcga" src="js/userFiles.js"></script>-->
    

</body>

</html>
