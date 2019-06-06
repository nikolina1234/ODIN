
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- resursi potrebni za dropdown i input-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- potrebno za timer -->
<script src="http://localhost/SlagalicaIgniter/resources/jquery.progressBarTimer.js"></script>
<?php
    //session_start();
    $_SESSION['uk_poeni'] = $_SESSION['slagalica'] + $_SESSION['moj_broj'] + $_SESSION['skocko'] + $_SESSION['ko_zna_zna'];
?>
<div class="container">



    <!-- Kao zaglavlje za ime igre i pravila igre-->
        <div class="row " style="height:10%;background-color:#459BF0;">
            <div class="col my-auto">
                        <h3 class="text-center text-dark"><i>Spojnice</i></h3>
            </div>
            <!-- Dodatak za opis pravila igre-->
            <div class = "col-sm-2 mt-sm-3">
                <div class = "text-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pravila igre
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item-text">Za svaki pogodjen par pojmova dobijate po 4 poena.</a>

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
    <div class="row h-60" style="background-color:#F0F0F0">
	
	
        <!-- Radi lakseg pozicioniranja a i prikaza igraca -->
        <div class="col-2">
			 <div class="form-group align-items-center">
                <center>
                    <label for="name" class="control-label"><?php
                        if(!empty($_SESSION['gostime'])) echo $_SESSION['gostime'];
                        else if(!empty($_SESSION['username'])) echo $_SESSION['username'];
                        else
                                echo 'GOST';
                    ?></label>
                </center>

                <input class = "text-center rounded" value = <?php echo $_SESSION['uk_poeni']?>   type="text" class="form-control" id="broj_poena" readonly style = "background-color: #0080FF; width: 70px; height:70px; margin-left: 30%;color: white; font-size: 25px;">
            </div>
        </div>
		
		
        <!-- Prikazi buttona za slova-->
        <div class="col-8 text-center border border-dark mt-sm-4">
            <table class="table">
                <tr>
                    <td align="center" colspan="2">
                        <label> 
                            <?php
                                if (isset($_SESSION['opis']))
                                {
                                    echo "<h4>".$_SESSION['opis']."</h4>";
                                    unset($_SESSION['opis']);
                                }
                            ?>
                        </label>
                    </td>

                    <tr>
                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="1" type="button" value="<?php if (isset($_SESSION['spojniceLevo'])) {echo $_SESSION['spojniceLevo'][0]; unset($_SESSION['spojniceLevo'][0]);}?>" onclick="oboji1('1')" style="width:90%;">
                                </td>

                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="2" type="button" value="<?php if (isset($_SESSION['spojniceDesno'])) {echo $_SESSION['spojniceDesno'][0]; unset($_SESSION['spojniceDesno'][0]);}?>" disabled='true' onclick="oboji2('2')" style="width:90%;">
                                </td>
                                </td>
                    </tr>

                    <tr>
                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="3" type="button" value="<?php if (isset($_SESSION['spojniceLevo'])) {echo $_SESSION['spojniceLevo'][1]; unset($_SESSION['spojniceLevo'][1]);}?>" onclick="oboji1('3')" style="width:90%;">
                                </td>
                                </td>

                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="4" type="button" value="<?php if (isset($_SESSION['spojniceDesno'])) {echo $_SESSION['spojniceDesno'][1]; unset($_SESSION['spojniceDesno'][1]);}?>" disabled onclick="oboji2('4')" style="width:90%;">
                                </td>
                                </td>
                    </tr>

                    <tr>
                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="5" type="button" value="<?php if (isset($_SESSION['spojniceLevo'])) {echo $_SESSION['spojniceLevo'][2]; unset($_SESSION['spojniceLevo'][2]);}?>" onclick="oboji1('5')" style="width:90%;">
                                </td>
                                </td>

                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="6" type="button" value="<?php if (isset($_SESSION['spojniceDesno'])) {echo $_SESSION['spojniceDesno'][2]; unset($_SESSION['spojniceDesno'][2]);}?>" disabled onclick="oboji2('6')" style="width:90%;">
                                </td>
                                </td>
                    </tr>

                    <tr>
                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="7" type="button" value="<?php if (isset($_SESSION['spojniceLevo'])) {echo $_SESSION['spojniceLevo'][3]; unset($_SESSION['spojniceLevo'][3]);}?>" onclick="oboji1('7')" style="width:90%;">
                                </td>
                                </td>

                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="8" type="button" value="<?php if (isset($_SESSION['spojniceDesno'])) {echo $_SESSION['spojniceDesno'][3]; unset($_SESSION['spojniceDesno'][3]);}?>" disabled onclick="oboji2('8')" style="width:90%;">
                                </td>
                                </td>
                    </tr>

                    <tr>
                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="9" type="button" value="<?php if (isset($_SESSION['spojniceLevo'])) {echo $_SESSION['spojniceLevo'][4]; unset($_SESSION['spojniceLevo'][4]);}?>" onclick="oboji1('9')" style="width:90%;">
                                </td>
                                </td>

                                <td align="center">
                                    <input class="btn btn-light text-dark btn-lg border border-dark" id="10" type="button" value="<?php if (isset($_SESSION['spojniceDesno'])) {echo $_SESSION['spojniceDesno'][4]; unset($_SESSION['spojniceDesno'][5]);}?>" disabled onclick="oboji2('10')" style="width:90%;">
                                </td>
                                </td>
                    </tr>


                    
                </tr>
            </table>
        </div>

        <div class="col-2 text-center mt-sm-4">
            <form method="post" action="http://localhost/SlagalicaIgniter/AsocijacijeController/Asocijacije">
                <input type="submit" id="sledecaIgra" class="btn btn-dark text-light" value="Sledeca igra" disabled=true>
            </form>
        </div>
        <script lang="javascript">
		
                var tajmer = $('#tajmer_bar').progressBarTimer({
                timeLimit: 60,
                warningThreshold: 20,
                smooth: true,
                baseStyle: 'bg-success',
                warningStyle: 'bg-danger',
                completeStyle: '',
                onFinish:function () {				
                    document.getElementById('sledeca').disabled = false;

                    for ($i=1;$i < 11;$i++)
                    {
                        document.getElementById($i).disabled = true;
                    }
                }
				});				

		         tajmer.start(); 

            var poeni = 0;
            var br = 0;
            var kliknuto;
			
			var kliknutaDugmad = new Array(0,0,0,0,0,0,0,0,0,0,0);
			
            function oboji1(idDugme)
            {
                var dugme = document.getElementById(idDugme);
                
                kliknuto = idDugme;

				kliknutaDugmad[idDugme] = 1;
				
                dugme.className = "btn btn-primary text-light btn-lg border border-dark";

                for (i=1;i<11;i++)
                {
                    if (i % 2 == 0)
                    {
                        var dugme1 = document.getElementById(i);
						
						if (kliknutaDugmad[i] == 0)
						{
							dugme1.disabled = false;
						}
                    }
                    else
                    {
                        var dugme2 = document.getElementById(i);
                        
                        if (kliknutaDugmad[i] == 0)
                            dugme2.disabled = true;
                    }
                }
            }

            function oboji2(idDugme)
            {
                var dugme = document.getElementById(idDugme);

				//kliknutaDugmad[idDugme] = 1;
	
                var kliknutoDugme = document.getElementById(kliknuto); //levo

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/SlagalicaIgniter/SpojniceController/check',
                    data: { 
                        'opis1':  kliknutoDugme.value,
                        'opis2': dugme.value
                    },
                    success: function(msg){
                        
                        if (msg)
                        {
                            kliknutaDugmad[idDugme] = 1;

                            kliknutoDugme.className = "btn btn-success text-light btn-lg border border-dark";

                            dugme.className = "btn btn-success text-light btn-lg border border-dark";
							
							poeni += 4;
							
							var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=spojnice&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

                    nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
                        }
                        else
                        {
                            
                            kliknutoDugme.className = "btn btn-danger text-light btn-lg border border-dark";  
							
							poeni += 0;
							
							var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=spojnice&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

                    nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
                        }
                    }
                });

                for (i=1;i<11;i++)
                {
                    if (i % 2 == 0)
                    {
                        var dugme2 = document.getElementById(i);

                        dugme2.disabled = true;
                    }
                    else
                    {
                        var dugme1 = document.getElementById(i);
                        if (kliknutaDugmad[i] == 0)
						{
                            dugme1.disabled = false;
                        }
                    }
                }

                br++;

                if (br == 5)
                {
                    for (i=1;i<11;i++)
                       {

                        tajmer.stop();
                            
                        var dugmence = document.getElementById(i);

                        dugmence.disabled = true;

                        var sledecaIgra = document.getElementById("sledecaIgra");

                        sledecaIgra.disabled = false;
                    }
                
                   

                       
                    
                }     
            }
        </script>

    </div>
    </div>
