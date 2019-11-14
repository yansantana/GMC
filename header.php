<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="all.css" type="text/css">
        <link rel="stylesheet" href="home.css" type="text/css">
        <link rel="icon" type="image/png" sizes="16x16" href="#">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
        <!-- Additional tags here -->
        <?php if (function_exists('customPageHeader')){
        customPageHeader();
        }?>
    </head>
    <body>
    <header class="site-header">
        <nav class="navbar navbar-expand-md navbar-light bg-steel">
            <div class="lalang">
            </div>
            <div class="container">
                <a href="{"><img src="" class="navbar-brand logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggle">
                    <div class="navbar-nav mr-auto">
                    </div>
                    <div class="navbar-nav">
                            <div class="dropdown nav-item nav-link">
                                    <a>FREE ASSESMENT  <i class="arrow"></i></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown dropright"> 
                                            <a class="dropdown-item" href="#">TEMPORARY RESIDENCE</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Visitor Visa</a>
                                                <a class="dropdown-item" href="studypermit.php">Study Permit</a>
                                                <a class="dropdown-item" href="#">Work Permit</a>
                                            </div>
                                        </div>
                                        <div class="dropdown dropright"> 
                                            <a class="dropdown-item" href="#">PERMANENT RESIDENCE</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">EXPRESS ENTRY</a>
                                                <a class="dropdown-item" href="#">FAMILY SPONSORSHIP</a>
                                                <a class="dropdown-item" href="#">FEDERAL BUSINESS IMMIGRATION</a>
                                                <a class="dropdown-item" href="#">HUMANITARIAN AND COMPASSIONATE</a>
                                                <a class="dropdown-item" href="#">REFUGEE CLAIMS</a>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="#">CITIZENSHIP</a>
                                        <a class="dropdown-item" href="#">GENERAL ASSESSMENT</a>
                                        <a class="dropdown-item" href="#">IMMIGRATION ASSESSMENT</a>
                                    </div>
                            </div>
                            <div class="dropdown nav-item nav-link">
                                    <a>COMPANY UPDATES</a>
                            </div>
                            <div class="dropdown nav-item nav-link">
                                    <a>IMMIGRATION NEWS</a>
                            </div>
                            <div class="dropdown nav-item nav-link">
                                    <a>ABOUT US</a>
                            </div>
                            <div class="dropdown nav-item nav-link">
                                    <a>CONTACT US</a>
                            </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
