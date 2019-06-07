
<!--
    @author Nikolina Stojić 0639/2016
-->

<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- resursi potrebni za dropdown i input-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- potrebno za timer -->
<script src="resources/jquery.progressBarTimer.js"></script>

<?php
    session_start();
    if(isset($_POST['gostime'])) $_SESSION['gostime'] = $_POST['gostime'];
    $_SESSION['uk_poeni'] = 0;

?>



<div class="container">



    <!-- Kao zaglavlje za ime igre i pravila igre-->
        <div class="row " style="height:10%;background-color:#459BF0;">
            <div class="col my-auto">
                        <h3 class="text-center text-dark"><i>Slagalica</i></h3>
            </div>
            <!-- Dodatak za opis pravila igre-->
            <div class = "col-sm-2 mt-sm-3">
                <div class = "text-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pravila igre
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item-text">Ako reč ne postoji u bazi dobija se 0 poena. Ako postoji za svako slovo se dobija 2 poena. Ukoliko je jednaka onoj koju je dobio kompjuter dobija se dodatnih 5 poena.</a>

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
            <!-- prikaz igraca i njegovih poena -->
            <div class="form-group align-items-center">
                <center>
                    <label for="name" class="control-label"><?php
                        if(!empty($_SESSION['gostime'])) echo $_SESSION['gostime'];
                        else if(!empty($_SESSION['username'])) echo $_SESSION['username'];
                        else
                                echo 'GOST';
                    ?></label>
                </center>

                <input class = "text-center rounded"  value = "0"   type="text" class="form-control" id="broj_poena" readonly style = "background-color: #0080FF; width: 70px; height:70px; margin-left: 30%;color: white; font-size: 25px;">
            </div>
        </div>
        <!-- Prikazi buttona za slova-->
        <div class="col-8 text-center border border-dark mt-sm-4">
            <center>
                <div class="row">
                    <div class="col-sm-12 mt-sm-2">

                        <h3 style = "font-style: italic; font-family: Verdana; font-size: 20">
                            Ponuđena slova:
                        </h3>
                    </div>
                </div>

            </center>
            <div class="row">

                <div class="col-sm-12 mt-sm-4">
                    <button type="button" class="btn btn-secondary btn-lg" name="btn0" id = "id0" onclick="dugme_klik(this.name)">? </button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn1" id = "id1" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn2" id = "id2" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn3" id = "id3" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn4" id = "id4" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn5" id = "id5" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn6" id = "id6" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn7" id = "id7" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn8" id = "id8" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn9" id = "id9" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn10" id = "id10" onclick="dugme_klik(this.name)">?</button>
                    <button type="button" class="btn btn-secondary btn-lg" name="btn11" id = "id11" onclick="dugme_klik(this.name)">?</button>
                </div>
            </div>

            <br>
            <br>


            <center>
                <div class = "row">

                    <!-- dugme za pocetak igre -->
                    <div class = "col-sm-6">
                        <button type="button" class="btn btn-dark btn-lg" value="start" onclick="zapocni_igru()">Započni igru</button>
                    </div>

                    <!-- dugme za kraj igre-->
                    <div class = "col-sm-6">
                        <button type="button" id = "konacno" class="btn btn-dark btn-lg" onclick="kraj_igre()">Konačna reč</button>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-10">

                        <!-- prikaz korisnikove reci-->
                        <div class="input-group mb-3" style="width:80%;margin-left: 110px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-center" id="basic-addon1" style="color: #333333; display: inline-block;width: 100px;">Vaša reč</span>
                            </div>
                            <input type="text" class="form-control text-center" aria-label="rec_igraca" id = "rec_igraca" aria-describedby="basic-addon1" readonly style="background-color: white">
                        </div>

                    </div>

                    <!-- dugme za brisanje poslednjeg slova -->
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-dark btn-small" value="start" onclick="brisi()">Obriši</button>
                    </div>

                </div>

            </center>

            <center>
                <div class="row">
                    <div class="col-sm-10">

                        <!-- deo za prikaz korisnikove reci -->
                        <div class="input-group mb-3" style="width: 80%;margin-left: 110px">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-center" id="basic-addon1" style="color: #333333;display: inline-block; width: 100px;">Kompjuter</span>
                            </div>
                            <input type="text" class="form-control text-center" aria-label="kompjuter_rec" aria-describedby="basic-addon1" readonly style = "background-color:darkgray; " id = "kompjuter_rec">
                        </div>

                    </div>

                    <div class="col-sm-2"></div>
                </div>

            </center>
            <br>
            <br>
            <br>
        </div>

        <div class="col-sm-2 mt-sm-6">
            <center>
                <!-- dugme za prelazak na moj broj -->
                <form action="http://localhost/SlagalicaIgniter/MojBrojController">
                    <button id = "kraj" type="submit" class="btn btn-danger btn-lg" style="margin-top: 375px; display: none;">Moj Broj</button>
                </form>
            </center>

        </div>

        <script lang="javascript">


            var redosled = []; /*redosled slova*/
            var moze = false; /*da li rec postoji ili ne postoji u bazi, potrebno za racunanje poena*/
            var br_sl = 0; /*SP*/
            var slova = []; /*slova ko stek*/
            var slova_lat = []; /*za latinicni prikaz*/
            var igra_pocela = false;
            var igra_kraj = false;
            var najduza =<?php
               echo "\"".$this->najduza_rec."\"";
            ?>  /*najduza rec koju je racunar nasao u bazi*/


            /*podesavanja izgleda i funkcionisanja tajmera*/
            var tajmer = $('#tajmer_bar').progressBarTimer({
                timeLimit: 60,
                warningThreshold: 20,
                smooth: true,
                baseStyle: 'bg-success',
                warningStyle: 'bg-danger',
                completeStyle: '',
                onFinish:function () {
                   igra_kraj = true;
                   kraj_igre();
                }
                });
            /*prebacivanje generisanih slova u js promenljivu radi lakseg baratanja s njom*/
            var js_niz = [
                <?php
                echo "'".$this->niz[0]."'".","
                    ."'".$this->niz[1]."'".","
                    ."'".$this->niz[2]."'".","
                    ."'".$this->niz[3]."'".","
                    ."'".$this->niz[4]."'".","
                    ."'".$this->niz[5]."'".","
                    ."'".$this->niz[6]."'".","
                    ."'".$this->niz[7]."'".","
                    ."'".$this->niz[8]."'".","
                    ."'".$this->niz[9]."'".","
                    ."'".$this->niz[10]."'".","
                    ."'".$this->niz[11]."'";

                ?>
            ];

            var lat = {а:'a', б:'b', в:'v',г:'g',д:'d',ђ:'đ',е:'e',ж:'ž',з:'z',и:'i',ј:'j',к:'k',л:'l',љ:'lj',м:'m',н:'n',њ:'nj',о:'o',п:'p',р:'r',с:'s',т:'t',ћ:'ć',у:'u',ф:'f',х:'h',ц:'c',ч:'č',џ:'dž',ш:'š'}




            /**
             * Zapocinje igru setovanjem tajmera i prikazom generisanih slova
             * @return void*/
            function zapocni_igru() {
                    if(!igra_kraj && !igra_pocela) {
                        tajmer.start();
                        igra_pocela = true;
                        for (i = 0; i < 12; i++) {
                            var elem = document.getElementById("id" + i);
                            elem.innerHTML = lat[js_niz[i]];
                            elem.value = js_niz[i];
                        }
                    }


            }
            /**
             * Klikom na bilo koje od 12 dugmadi dodaje se slovo datoj reci
            * i vrsi se provera da li takva rec postoji u bazi
             *
             * @return void*/
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
                    slova.push(document.getElementById(redosled[br_sl]).value);
                    slova_lat.push(lat[document.getElementById(redosled[br_sl]).value]);
                    br_sl++;
                    slova_kon = slova_lat.join("");
                    $('#rec_igraca').attr('placeholder', slova_kon);
                    proveri();
                }
            }

            /**
             * Pritiskom na dugme obrisi skida poslednje slovo i proverava da li takva rec
            * postoji u bazi
             * @return void*/
            function brisi() {
                if(igra_pocela && !igra_kraj && br_sl != 0) {
                    id = redosled.pop();
                    slova.pop();
                    slova_lat.pop();
                    br_sl--;
                    slova_kon = slova_lat.join("");

                    $("#" + id).prop('disabled', false);
                    $('#rec_igraca').attr('placeholder', slova_kon);
                    proveri();
                }
            }

            /**
             * Poziva se kad je isteklo vreme ili kad je pritisnuta konacna rec.
            * Prikazuje najduzu rec u bazi koja postoji za tu kombinaciju slova i poziva funkciju koja racuna poene
             * @return void*/
            function kraj_igre() {
                if(igra_pocela){
                    igra_kraj = true;
                    var resenje = [];
                    var razdvoj = najduza.split('');
                    for(i=0;i<najduza.length;i++){
                        resenje[i] = lat[razdvoj[i]];
                    }
                    resenje = resenje.join("");
                        $('#kompjuter_rec').attr('placeholder', resenje);
                    tajmer.stop();
                    $("#kraj").show();
                    poeni();
                }
            }

            /**
             * Proverava da li trenutna rec postoji u bazi i boji polje u zavisnosti od toga
             * @return void*/
            function proveri() {
                var xhttp = new XMLHttpRequest();
                var rec = "";
                for (i = 0; i < slova.length; i++) rec += slova[i];
                xhttp.open("GET", "http://localhost/SlagalicaIgniter/SlagalicaController/ceker?word=" + rec);
                xhttp.send(null);
                xhttp.onreadystatechange=(e)=>{
                    if(xhttp.responseText == true && slova.length>0){
                        $("#basic-addon1").css('background-color', 'green');
                        $("#basic-addon1").css('color', 'white');
                        moze = true;
                    }
                    else {
                        $("#basic-addon1").css('background-color', 'red');
                        $("#basic-addon1").css('color', 'white');
                        moze = false;
                    }
                    if(slova.length == 0){
                        $("#basic-addon1").css('background-color', '#ECEFF1');
                        $("#basic-addon1").css('color', '#333333');
                        moze = false;
                    }
                }

            }

            /**
             * Racuna broj poena i salje ih serveru
             * Poziva se iskljucivo iz funkcije kraj_igre()
             * */
            function poeni() {
                proveri();
                points = 0;
                if(moze){
                    points = slova_kon.length*2;
                    if(najduza==slova_kon) points = points+5;
                }

                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.send("igra=slagalica&ukupno="+points);
                xhttp.onload = (e) => {

                }

                elem = document.getElementById("broj_poena");
                elem.value = points;
            }
        </script>

    </div>
    </div>
