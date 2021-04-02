<?php $title = 'UI ETL with PHP'; ?>
<?php ob_start(); $type ='';$message ='';?>

    <style type="text/css"><?php;include '../Public/CSS/main.css'?></style>
    <div class="hero-full-container background-image-container white-text-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>ETL</h1>
                    <p>FUNNY ETL</p>
                    <br>
                    <a href="../index.php?action=startXtraction" class="btn btn-default btn-lg" title="">LAUNCH THE EXTRACTION</a>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(
            function () {
                $("#frmCSVImport").on(
                    "submit",
                    function () {
                        $("response").attr("class", "");
                        $("response").html("");
                        var fileType = ".csv";
                        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + " )$");
                        if (!regex.test($("#file").val().toLowerCase())) {
                            $("#response").addClass("error");
                            $("#response").addClass("display-block");
                            $("#response").html(
                                "Invalid file. Upload a correct one please : <b>" + fileType + "<b>"
                            );
                            return false;
                        }
                        return true;
                    }
                );

            }
        );
    </script>


    <div class="section-container contact-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="section-container-spacer">
                        <h2 class="text-center">Using Csv file</h2>
                        <p class="text-center">Here you can extract data manualy from a CSV file</p>
                    </div>
                    <div class="card-container">
                        <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
                            <form action="../index.php?action=csvSubmit" method="post" enctype="multipart/form-data" name="frmCSVImport" id="frmCSVImport" class="reveal-content">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="csv">Your csv file goes here</label><input type="file" class="form-control" id="csv" name="file" accept=".csv" >
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                                        <button type="reset" class="btn btn-danger" name="reset" id="reset">Reset</button>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="list-unstyled address-container">
                                            <li>

                                                <?php
                                                if ($type == "succes") {
                                                    echo "<font color='green'><b>" . $message . "</b><br><br></font>";
                                                }
                                                if ($type == "erreur") { echo "<font color='red'><b>" . $message . "</b><br><br></font>";

                                                } ?>
                                            </li>
                                            <li>
                                                <?php if (isset($_GET['errorCsv'])) {
                                                    echo "<font color='red'><b> Error on csv importation</b><br><br></font>";
                                                } ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-image col-xs-12" style="background-image: url('../Public/assets/Img/fbl.jpg')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript"><?php ;
        include '../Public/JS/jquery-3.2.1.min.js' ?></script>
<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>