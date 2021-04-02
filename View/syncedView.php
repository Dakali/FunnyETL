<?php $title = 'Synced Datas'; ?>
<?php ob_start();
//$dir = realpath($_SERVER["DOCUMENT_ROOT"]);
?>

<!--    <style type="text/css">--><?php //;
//        include '../Public/CSS/main.css' ?><!--</style>-->
<!--<!--<link rel="stylesheet" href="-->--><?php ////echo $dir.'\Public\CSS\main.css';?><!--<!--">-->-->
    <div class="hero-full-container background-image-container white-text-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Finish!!</h1>
                    <p>Here, the synchronised datas</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <h2>The Datas Board</h2>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Matricule</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Niveau</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            while ($info = $datas->fetch()) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $info['matricule']; ?></td>
                                    <td><?= $info['nom']; ?></td>
                                    <td><?= $info['niveau']; ?></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            $datas->closeCursor();
                            ?>
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