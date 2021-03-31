<?php $title = 'UI ETL with PHP'; ?>
<?php ob_start(); ?>
    <style type="text/css"><?php;include '../Public/CSS/main.css'?></style>
    <div class="hero-full-container background-image-container white-text-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>ETL</h1>
                    <p>FUNNY ETL</p>
                    <br>
                    <a href="index.php?action=startXtraction" class="btn btn-default btn-lg" title="">LAUNCH THE EXTRACTION</a>
                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>