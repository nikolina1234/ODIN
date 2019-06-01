
<?php
    session_start();
?>
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
            <div class="form-group align-items-center">
                <center>
                    <label for="name" class="control-label"><?php
                        if(!empty($_SESSION['gostime'])) echo $_SESSION['gostime'];
                        else echo 'GOST';
                        ?></label>
                </center>

                <input align="center" type="text" value = <?php echo $_SESSION['uk_poeni']?> class="form-control" id="broj_poena" readonly style = "background-color: #0080FF; width: 70px; height:70px; margin-left: 30%;color: white; font-size: 25px;">
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
                    <button type="button" class="btn btn-secondary btn-lg" name="btn0" id = "id0" onclick="dugme_klik(this.name)">?</button>
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
                        <button type="button" class="btn btn-dark btn-lg" value="start" onclick="zapocni_igru()">Započni</button>
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
        <!-- ISPRAVITI ACTION -->
        <div class="col-sm-2 mt-sm-6">
            <center>
                <form action="http://localhost/SlagalicaIgniter/MojBrojController">
                    <button id = "kraj" type="submit" class="btn btn-danger btn-lg" style="margin-top: 400px; display: none">Skočko</button>
                </form>
            </center>

        </div>

        <script language="javascript">
            var redosled = [];
            var br_sl = 0;
            var slova = [];
            var igra_pocela = false;
            var igra_kraj = false;
            var trazi_se = 0; /*koji broj se trazi*/
            var uzeo = [false, false, false, false, false, false];

            /*podesavanja izgleda i funkcionisanja tajmera*/
            var tajmer = $('#tajmer_bar').progressBarTimer({
                timeLimit: 90,
                warningThreshold: 30,
                smooth: true,
                baseStyle: 'bg-success',
                warningStyle: 'bg-danger',
                completeStyle: '',
                onFinish:function () {
                    igra_kraj = true;
                    kraj_igre();
                }
            });


            function isOperacija(izraz) {
                return izraz == '+' || izraz == '-' || izraz == '*' || izraz == '/';
            }

            function nextValid(izraz) {
                if (izraz == "") return {broj: true, otvorena: true, zatvorena: false, operacija: false};
                var n = izraz.length;
                if (isOperacija(izraz[n - 1]) || izraz[n - 1] == '(') return {broj: true, otvorena: true, zatvorena: false, operacija: false};
                var s = 0;
                var i;
                for (i = 0; i < n; i++) if (izraz[i] == '(') s++; else if (izraz[i] == ')') s--;
                if (izraz[n - 1] == ')') return {broj: false, otvorena: false, zatvorena: s > 0, operacija: true};
                return {broj: false, otvorena: false, zatvorena: s > 0, operacija: true};
            }


            /*zapocinje igru setovanjem tajmera i prikazom generisanih brojeva*/
            function zapocni_igru() {

                    if(!igra_pocela && !igra_kraj) {
                        tajmer.start();
                        validiraj();
                        igra_pocela = true;
                        while(trazi_se ===0) trazi_se = Math.floor(Math.random() * 1000);
                        $('#rec_igraca').attr('placeholder', trazi_se);
                        nmbr1 = Math.floor(Math.random() * 3) + 1;
                        nmbr1 = nmbr1*5;
                        prvi_elem = document.getElementById("id4");
                        prvi_elem.value = nmbr1;
                        prvi_elem.innerHTML = nmbr1;
                        nmbr2 = Math.floor(Math.random() * 3) + 1;
                        nmbr2 = nmbr2*25;
                        drugi_elem = document.getElementById("id5");
                        drugi_elem.value = nmbr2;
                        drugi_elem.innerHTML = nmbr2;

                        for (i = 0; i < 4; i++) {
                            var elem = document.getElementById("id" + i);
                            moj_br = Math.floor(Math.random() * 10);
                            while (moj_br == 0) moj_br = Math.floor(Math.random() * 10);
                            elem.innerHTML = moj_br;
                            elem.value = moj_br;
                        }
                    }



            }
            /*Klikom na bilo koje od 12 dugmadi dodaje se slovo datoj reci
            * i vrsi se provera da li takva rec postoji u bazi*/

            function validiraj() {
                slova_kon = slova.join("");
                var x = nextValid(slova_kon);
                var i;
                for (i = 0; i < 6; i++) $('#id' + i).prop('disabled', !x.broj || uzeo[i]);
                $('#id10').prop('disabled', !x.otvorena);
                $('#id11').prop('disabled', !x.zatvorena);
                for (i = 6; i < 10; i++) $('#id' + i).prop('disabled', !x.operacija);
            }

            function dugme_klik(ime) {
                if (igra_pocela && !igra_kraj) {
                    var tacno = true;
                    if (ime === "btn0"){

                        if (tacno) {
                            redosled.push("id0");
                            $("#id0").prop('disabled', true);
                            uzeo[0] = true;
                        }
                    }
                    if (ime === "btn1") {

                        if(tacno) {
                            redosled.push("id1");
                            $("#id1").prop('disabled', true);
                            uzeo[1] = true;
                        }
                    }
                    if (ime === "btn2") {

                        if(tacno){
                            redosled.push("id2");
                            $("#id2").prop('disabled', true);
                            uzeo[2] = true;

                        }
                    }
                    if (ime === "btn3") {

                        if(tacno) {
                            redosled.push("id3");
                            $("#id3").prop('disabled', true);
                            uzeo[3] = true;

                        }
                    }
                    if (ime === "btn4") {

                        if(tacno) {
                            redosled.push("id4");
                            $("#id4").prop('disabled', true);
                            uzeo[4] = true;
                        }
                    }
                    if (ime === "btn5") {

                        if(tacno) {
                            redosled.push("id5");
                            $("#id5").prop('disabled', true);
                            uzeo[5] = true;
                        }
                    }
                    if (ime === "btn6") {

                        if (tacno)
                            redosled.push("id6");

                    }
                    if (ime === "btn7") {

                        if(tacno)
                            redosled.push("id7");

                    }
                    if (ime === "btn8") {
                        if(tacno)
                            redosled.push("id8");

                    }
                    if (ime === "btn9") {
                        if(tacno)
                            redosled.push("id9");

                    }
                    if (ime === "btn10") {
                        if(tacno)
                            redosled.push("id10");

                    }
                    if (ime === "btn11") {
                        if(tacno)
                            redosled.push("id11");

                    }
                    if(tacno) {

                        slova.push(document.getElementById(redosled[br_sl]).value);

                        br_sl++;
                        slova_kon = slova.join("");
                        $('#kombinacija_taster').attr('placeholder', slova_kon);
                        validiraj();
                    }

                }
            }

            /*Pritiskom na dugme obrisi skida poslednje slovo i proverava da li takva rec
            * postoji u bazi*/
            function brisi() {
                if(igra_pocela && !igra_kraj && br_sl != 0) {
                    id = redosled.pop();
                    slova.pop();
                    id_broj = id.charAt(2);
                    id_broj_kon = parseInt(id_broj);
                    if(id_broj<6) uzeo[id_broj_kon] = false;
                    br_sl--;
                    slova_kon = slova.join("");

                    $("#" + id).prop('disabled', false);
                    $('#kombinacija_taster').attr('placeholder', slova_kon);
                    validiraj();
                }
            }
            /*Poziva se kad je isteklo vreme ili kad je pritisnuta konacna rec.
            * Prikazuje najduzu rec u bazi koja postoji za tu kombinaciju slova*/
            function kraj_igre() {
                if(igra_pocela){

                    igra_kraj = true;


                    tajmer.stop();
                    if (slova_kon === "") res = "Nije definisano";
                    else
                        try{
                            res = eval(slova_kon);

                        }
                        catch (e) {
                            res = 'Nije ispravan izraz';
                        }
                    alert(res);
                    $("#kraj").show();
                }



            }
        </script>

    </div>
</div>