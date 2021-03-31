<?php $title = 'Synced Datas'; ?>
<?php ob_start(); ?>
<style type="text/css"><?php;include '../Public/CSS/main.css'?></style>
    <div class="hero-full-container background-image-container white-text-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Finish!!</h1>
                    <p>Here, the synchronised datas</p>
                    <br>
<!--                    <a href="./project.html" class="btn btn-default btn-lg" title="">LAUNCH THE EXTRACTION</a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <h2>The Board</h2>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>

                        <button type="button" class="btn btn-info m-1" onclick="info_noti()">INFO NOTIFICATIONS</button>
                        <button type="button" class="btn btn-danger m-1" onclick="round_error_noti()">WARNING NOTIFICATIONS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>
<?php require("template.php"); ?>