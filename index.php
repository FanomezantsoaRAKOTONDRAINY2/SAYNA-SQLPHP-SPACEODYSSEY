<?php
    include('pages/header.php');
    include "pages/menuGauche.php";
    include 'database/dbConnect.php';


?>

                    <!--Main page-->

    <div class="content-wrapper"  style="background-color: #35394B">

        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h1><span style="font-size: 50px"><?php echo $total_rows ?></span></h1>

                        <p>PLANETES</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-globe"></i>
                    </div>
                    <a href="pages/planete.php" class="small-box-footer">Vers planetes<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h1><span style="font-size: 50px"><?php echo $total_rows1 ?></span></h1>

                        <p>Astronautes</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Vers astronautes <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><span style="font-size: 50px">0</span></h3>

                        <p>indisponible pour le moment</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><span style="font-size: 50px">0</span></h3>

                        <p>Indisponible pour le moment</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <br>
        <br>
        <br>
        <br>



    </div>




<?php
include "pages/footer.php";
?>
