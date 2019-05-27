
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- resursi potrebni za dropdown i input-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- potrebno za timer -->
<script src="resources/jquery.progressBarTimer.js"></script>

<div class="container">



    <!-- Kao zaglavlje za ime igre i pravila igre-->
    <div class="row " style="height:10%;background-color:#459BF0;">
        <div class="col my-auto">
            <h3 class="text-center text-dark"><i>Moj Broj</i></h3>
        </div>
        <!-- Dodatak za opis pravila igre-->
        <div class = "col-sm-2 mt-sm-3">
            <div class = "text-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pravila igre
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item-text">Pravila pravila da bi me udavila</a>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Progres bar za prikaz preostalog vremena-->
    <div class="row h-35" style="background-color:#F0F0F0">
        <div class = "col-2"></div>
        <div class="col-8 mt-sm-3">
            <div id = "tajmer_bar"></div>
        </div>
    </div>
    <!-- Izgled igrice  -->
    <div class="row " style="background-color:#F0F0F0">
        <!-- Radi lakseg pozicioniranja a i prikaza igraca -->
        <div class="col-2">
            <div class="form-group">
                <label for="name" class="control-label">Ime korisnika</label>
                <input type="number" value='' class="form-control" id="broj_poena" readonly style = "background-color: blue;">
            </div>
        </div>
        <!-- Prikazi buttona za slova-->
        <div class="col-8 text-center border border-dark mt-sm-4">
            <center>
                <div class="row">
                    <div class="col-sm-12 mt-sm-2">
                        <div class="input-group mb-3" style = "width:25%;, height: 30px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333;"> &nbsp; Broj &nbsp;</span>
                            </div>
                            <input type="text" class="form-control" aria-label="rec_igraca" id = "rec_igraca" aria-describedby="basic-addon1" readonly style="background-color: white">
                        </div>


                    </div>
                </div>

            </center>
            <div class="row">

                <div class="col-sm-6 mt-sm-4">
                    <button type="button" class="btn btn-secondary btn-lg" name="btn0" id = "id0" onclick="dugme_klik(this.name)">? </button>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn1" id = "id1" onclick="dugme_klik(this.name)">?</button>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn2" id = "id2" onclick="dugme_klik(this.name)">?</button>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn3" id = "id3" onclick="dugme_klik(this.name)">?</button>

              </div>
                <div class="col-sm-3 mt-sm-4">
                    <button type="button" class="btn btn-secondary btn-lg" name="btn4" id = "id4" onclick="dugme_klik(this.name)">?</button>
                </div>
                <div class="col-sm-3 mt-sm-4">
                    <button type="button" class="btn btn-secondary btn-lg" name="btn5" id = "id5" onclick="dugme_klik(this.name)">?</button>

                </div>
            </div>

            <br>
            <br>

            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-secondary btn-lg" name="btn6" id = "id6" onclick="dugme_klik(this.name)" value = "+">+</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn7" id = "id7" onclick="dugme_klik(this.name)" value = "-">-</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn8" id = "id8" onclick="dugme_klik(this.name)" value="*">*</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn9" id = "id9" onclick="dugme_klik(this.name)" value="/">/</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn10" id = "id10" onclick="dugme_klik(this.name)" value="(">(</button>
                    &nbsp;
                    <button type="button" class="btn btn-secondary btn-lg" name="btn11" id = "id11" onclick="dugme_klik(this.name)" value=")">)</button>


                </div>

            </div>

            <br>
            <br>


            <center>
                <div class = "row">
                    <div class = "col-sm-6">
                        <button type="button" class="btn btn-dark btn-lg" value="start" onclick="zapocni_igru()">Započni igru</button>
                    </div>

                    <div class = "col-sm-6">
                        <button type="button" id = "konacno" class="btn btn-dark btn-lg" onclick="kraj_igre()">Konačno</button>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-10">

                        <div class="input-group mb-3" style = "width:85%; margin-left: 110px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color: #333333;"> &nbsp; Kombinacija  &nbsp;</span>
                            </div>
                            <input type="text" class="form-control" aria-label="kombinacija_taster" id = "kombinacija_taster" aria-describedby="basic-addon1" readonly style="background-color: white">
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-dark btn-small" value="start" onclick="brisi()">Obriši</button>
                    </div>

                </div>

            </center>

            <br>
            <br>
            <br>



        </div>

        <script language="javascript">
            var tajmer = $('#tajmer_bar').progressBarTimer({
                timeLimit: 60,
                warningThreshold: 20,
                smooth: true,
                baseStyle: 'bg-success',
                warningStyle: 'bg-danger',
                completeStyle: '',
                onFinish:function () {
                    alert("ENDE");
                }
            });
            var red = [];
            var redosled = [];
            var br_sl = 0;

            var igra_pocela = false;
            var igra_kraj = false;

            function zapocni_igru() {
                if(!igra_kraj) {
                    tajmer.start();
                    igra_pocela = true;

                }


            }

            function dugme_klik(ime) {
                if (igra_pocela && !igra_kraj) {
                    if (ime === "btn0"){
                        redosled.push("id0");
                        $("#id0").prop('disabled', true);
                    }
                    if (ime === "btn1") {
                        redosled.push("id1");
                        $("#id1").prop('disabled', true);
                    }
                    if (ime === "btn2") {
                        redosled.push("id2");
                        $("#id2").prop('disabled', true);
                    }
                    if (ime === "btn3") {
                        redosled.push("id3");
                        $("#id3").prop('disabled', true);
                    }
                    if (ime === "btn4") {
                        redosled.push("id4");
                        $("#id4").prop('disabled', true);
                    }
                    if (ime === "btn5") {
                        redosled.push("id5");
                        $("#id5").prop('disabled', true);
                    }
                    if (ime === "btn6") {
                        redosled.push("id6");
                        $("#id6").prop('disabled', true);
                    }
                    if (ime === "btn7") {
                        redosled.push("id7");
                        $("#id7").prop('disabled', true);
                    }
                    if (ime === "btn8") {
                        redosled.push("id8");
                        $("#id8").prop('disabled', true);
                    }
                    if (ime === "btn9") {
                        redosled.push("id9");
                        $("#id9").prop('disabled', true);
                    }
                    if (ime === "btn10") {
                        redosled.push("id10");
                        $("#id10").prop('disabled', true);
                    }
                    if (ime === "btn11") {
                        redosled.push("id11");
                        $("#id11").prop('disabled', true);
                    }
                    red.push(document.getElementById(redosled[br_sl]).value);
                    br_sl++;
                    red = red.join("");
                    $('#kombinacija_taster').attr('placeholder', red);

                }
            }

            function brisi() {
                if(igra_pocela && !igra_kraj && br_sl != 0) {
                    id = redosled.pop();
                    red.pop();
                    br_sl--;
                    red = red.join("");

                    $("#" + id).prop('disabled', false);
                    $('#kombinacija_taster').attr('placeholder', red);
                    proveri();
                }
            }
        </script>

    </div>
</div>
