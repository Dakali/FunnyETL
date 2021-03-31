<?php $title = 'Synced Datas'; ?>
<?php ob_start(); ?>
    <style type="text/css"><?php;include '../Public/CSS/main.css'?></style>
    <div class="hero-full-container background-image-container white-text-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Finish!!</h1>
                    <p>Something Went Wrong</p>
                    <br>
                    <!--                    <a href="./project.html" class="btn btn-default btn-lg" title="">LAUNCH THE EXTRACTION</a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-2">

                        <div class="text-center">
                            <img src="../Public/assets/Img/extraction.png" alt=""><br/>
                            <span>EXTRACTION FAILED!!</span> May be file issue
                        </div>

                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>