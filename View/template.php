<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate"/>
    <meta content="Rozorus" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">



    <link href="./assets/favicon.ico" rel="icon">

    <!-- notifications css -->
    <link rel="stylesheet" href="../Public/assets/Plugins/notifications/css/lobibox.min.css"/>
<!--    &lt;!&ndash; Bootstrap core CSS&ndash;&gt;-->
<!--    <link href="Public/CSS/bootstrap.min.css" rel="stylesheet"/>-->
    <!-- animate CSS-->
    <link href="../Public/CSS/animate.css" rel="stylesheet" type="text/css"/>

<!--    <link href="" rel="stylesheet">-->


    <title><?=$title;?></title>

    <link href="../Public/CSS/main.css" rel="stylesheet">
</head>

<body>
<header>
    <nav class="navbar navbar-default active">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.html" title="">
                    <img src="" class="navbar-logo-img" alt="WEB ETL">
    WEB UI ETL
</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
<!--                    <li><a href="./index.html" title="">Home</a></li>-->
<!--                    <li><a href="./project.html" title="">Project</a></li>-->
                    <li>
                        <p>
                            <a href="./components.html" class="btn btn-default navbar-btn" title="">About</a>
                        </p>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

<?= $content ;?>

<div class="section-container">
    <div class="container text-center">
        <div class="row section-container-spacer">
            <div class="col-xs-12 col-md-12">
                <h2>Partners</h2>
                <p>They help us</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="../Public/assets/Img" alt="Rozorus"
                     class="reveal img-responsive reveal-content image-center">
                <h3>Rozorus</h3>
                <h4>Dev</h4>
                <p>passionate about everything</p>
                <p>
                    <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </p>
            </div>


        </div>
    </div>
</div>

<div class="section-container">
    <div class="container text-center">
        <div class="row section-container-spacer">
            <div class="col-xs-12 col-md-12">
                <h2 class="text-center">Customers</h2>
                <p>The Trust us</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <img src="../Public/assets/Img" alt="ISJ" class="img-responsive reveal-content image-center">

            </div>
            <div class="col-xs-12 col-md-4">
                <img src="../Public/assets/Img" alt="Eukoenu" class="img-responsive reveal-content image-center">

            </div>
        </div>
    </div>
</div>


<div class="section-container contact-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="section-container-spacer">
                    <h2 class="text-center">Contact</h2>
                    <p class="text-center">Propositions of ameliorations? Submit them by Sending us a message</p>
                </div>
                <div class="card-container">
                    <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
                        <form action="" class="reveal-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="email"></label><input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                                <div class="col-md-5">
                                    <ul class="list-unstyled address-container">
                                        <li>
                        <span class="fa-icon">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
+ 237 6 93 93 97 96
</li>
                                        <li>
                        <span class="fa-icon">
                          <i class="fa fa fa-map-o" aria-hidden="true"></i>
                        </span>
Yaoundé, C'est la base
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-image col-xs-12" style="background-image: url('Public/assets/Img/')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        navbarFixedTopAnimation();
    });
</script>

<footer class="footer-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>Rozorus</h3>

                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <p>Passion from the depths <small><a href="http://rozorus.netlify.app"
                                                          title="check my work"></a></small>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <p class="text-right">
                            <a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon"
                               title="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>


            </div>
            <p>Copyright <script>document.write(new Date().getFullYear());</script> EUKOENU</p>
        </div>
    </div>
</footer>



<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        navActivePage();
        scrollRevelation('.reveal');
    });
</script>




<!-- Google Analytics: change UA-XXXXX-X to be your site's ID

<script>
  (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
<script type="text/javascript" src="../Public/JS/main.0cf8b554.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="../Public/JS/jquery.min.js"></script>
<script src="../Public/JS/popper.min.js"></script>
<script src="../Public/JS/bootstrap.min.js"></script>

<!--notification js -->
<script src="../Public/assets/Plugins/notifications/js/lobibox.min.js"></script>
<script src="../Public/assets/Plugins/notifications/js/notifications.min.js"></script>
<script src="../Public/assets/Plugins/notifications/js/notification-custom-script.js"></script>
</body>

</html>