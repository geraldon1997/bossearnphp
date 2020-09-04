<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>Bossearn</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php

use App\Models\Role;

echo ASSETS; ?>/Images/logo.jpeg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo ASSETS; ?>/Images/logo.jpeg">

    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo ASSETS; ?>/Css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="<?php echo ASSETS; ?>/Css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo ASSETS; ?>/Css/style.css" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="<?php echo ASSETS; ?>/Css/animate.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="<?php echo ASSETS; ?>/Css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="<?php echo ASSETS; ?>/Css/colors.css" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="<?php echo ASSETS; ?>/Css/version/marketing.css" rel="stylesheet">

    <script src="<?php echo ASSETS; ?>/Js/jquery.js"></script>
    
    <link rel='stylesheet' href='<?php echo ASSETS; ?>/Css/share-button.css' type='text/css' media='all'/>
    
    


<style>
    #logo{
        width: 100px;
        height: 70px;
    }
    share-button{
        background-color: gold;
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    #logout:hover{
        cursor: pointer;
    }
    .page-wrapper{
        text-align: center;
    }
    .tbl{
        overflow: auto;
    }
    .market-header{
        width: 100% !important;
    }

    .content{
        margin-top: 100px;
    }
    th{
        padding: 10px;
        font-size: 1.3em;
        font-weight: bolder;
        color: black;
        white-space: nowrap;
    }
    td{
        white-space: nowrap;
    }

    @media (max-width: 700px){
        th{
            padding: 3px;
            font-size: 1.2em;
            white-space: nowrap;
        }
        td{
            padding: 1px;
            white-space: nowrap;
        }
        .btn{
            margin-bottom: 10px;
        }
    }
</style>

</head>
<body>

    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo HOME; ?>"><img src="<?php echo ASSETS; ?>/Images/version/logo.jpeg" alt="bossearn" id="logo"></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">

                          	<li class="nav-item">
                                <a class="nav-link" href="<?php echo HOME; ?>">Home</a>
                            </li>

                            <?php if (isset($_SESSION['uname']) && Role::role() === 'admin') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo SPONSORED; ?>">sponsored</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo COUPONPAGE; ?>">coupons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo ADDNEWSPAGE; ?>">posts</a>
                            </li>
                            <?php endif; ?>

                            <?php if (!isset($_SESSION['uname'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo LOGIN; ?>">login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo REGISTER; ?>">register</a>
                            </li>
                            <?php endif; ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo HOW; ?>">how it works</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo CONTACT; ?>">contact us</a>
                            </li>

                            <?php if (isset($_SESSION['uname'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo LOGOUT; ?>">logout</a>
                            </li>
                            <?php endif; ?>

                        </ul>
                        <!-- <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" placeholder="How may I help?">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
<div class="page-wrapper">

{{content}}

</div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                        <div class="copyright">&copy; Bossearn 2020</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop"></div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->

       
    <script src="<?php echo ASSETS; ?>/Js/share-button.js"></script>
    <script src="<?php echo ASSETS; ?>/Js/tether.min.js"></script>
    <script src="<?php echo ASSETS; ?>/Js/bootstrap.min.js"></script>
    <script src="<?php echo ASSETS; ?>/Js/animate.js"></script>
    <script src="<?php echo ASSETS; ?>/Js/custom.js"></script>

    <script>
        $( document ).ready(function() {
            new ShareButton({
                networks: {
                    whatsapp: {
                        enabled: false
                    },
                    googlePlus: {
                        enabled: false
                    },
                    facebook: {
                        url: 'http://facebook.com',
                        title: 'testing',
                        description: 'testing the share button',
                        image: 'hello'
                    },
                    twitter: {
                        url: 'http://twitter.com',
                        title: 'testing',
                        description: 'testing the share button',
                        image: 'test'
                    }
                },
                ui: {
                    flyout: 'bottom middle'
                    }
            });     
        });
    </script>
    
</body>
</html>