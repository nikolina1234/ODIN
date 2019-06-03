<?php

//session_start();



?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="container">

    <div class="row " style="height:10%;background-color:#459BF0;">
        <div class="col my-auto">
            <h3 class="text-center text-dark"><i>POENI</i></h3>
        </div>
        <!-- Dodatak za opis pravila igre-->



    </div>

    <!-- Izgled igrice  -->
    <div class="row " style="background-color:#F0F0F0">
        <!-- Radi lakseg pozicioniranja a i prikaza igraca -->

        <!-- Prikazi buttona za slova-->
        <div class="row">
            <div class="col-sm-12 mt-sm-3">
                <center>
                    <h3><span class="label label-default">
                            <?php
                            if(!isset($_SESSION['gostime'])) echo $_SESSION['gostime'];
                                else if(!isset($_SESSION['username'])) echo $_SESSION['username'];
                            else
                                echo 'GOST';
                            ?>
                        </span></h3>
                </center>
            </div>

        </div>
        <div class="col-6 text-center border border-dark mt-sm-4">
            <center>
                <div class="row">
                    <div class="col-sm-12 mt-sm-2">

                        <div class="input-group mb-3" style = "width:70%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333; width: 120px; text-align: center;" >
                                    Slagalica
                                </span>
                            </div>
                            <input type="text" class="form-control" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray;" id = "slagalica" value=<?php
                                if(!empty($_SESSION['slagalica'])) echo $_SESSION['slagalica'];
                                else echo 0;
                            ?>>
                        </div>

                        <div class="input-group mb-3" style = "width:70%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333; width: 120px; text-align: center;" >
                                    Moj Broj
                                </span>
                            </div>
                            <input type="text" class="form-control" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray;" id = "slagalica" value=<?php
                            if(!empty($_SESSION['moj_broj'])) echo $_SESSION['moj_broj'];
                            else echo 0;
                            ?>>
                        </div>


                        <div class="input-group mb-3" style = "width:70%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333; width: 120px; text-align: center;" >
                                    Skočko
                                </span>
                            </div>
                            <input type="text" class="form-control" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray;" id = "slagalica" value=<?php
                            if(!empty($_SESSION['skocko'])) echo $_SESSION['skocko'];
                            else echo 0;
                            ?>>
                        </div>



                        <div class="input-group mb-3" style = "width:70%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333; width: 120px; text-align: center;" >
                                    Ko zna zna
                                </span>
                            </div>
                            <input type="text" class="form-control" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray;" id = "slagalica" value=<?php
                            if(!empty($_SESSION['ko_zna_zna'])) echo $_SESSION['ko_zna_zna'];
                            else echo 0;

                            ?>>
                        </div>



                        <div class="input-group mb-3" style = "width:70%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333; width: 120px; text-align: center;" >
                                    Spojnice
                                </span>
                            </div>
                            <input type="text" class="form-control" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray;" id = "slagalica" value=<?php
                            if(!empty($_SESSION['spojnice'])) echo $_SESSION['spojnice'];
                            else echo 0;
                            ?>>
                        </div>



                        <div class="input-group mb-3" style = "width:70%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333; width: 120px; text-align: center;" >
                                    Asocijacije
                                </span>
                            </div>
                            <input type="text" class="form-control" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray;" id = "slagalica" value=<?php
                            if(!empty($_SESSION['asocijacije'])) echo $_SESSION['asocijacije'];
                            else echo 0;
                            ?>>
                        </div>

                        <div class="input-group mb-3" style = "width:70%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333; width: 120px; text-align: center;" >
                                    Ukupno
                                </span>
                            </div>
                            <input type="text" class="form-control" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray;" id = "slagalica" value=<?php
                            if(!empty($_SESSION['uk_poeni'])) echo $_SESSION['uk_poeni  '];
                            else echo 0;
                            ?>>
                        </div>

                    </div>
                </div>


            </center>





        </div>



