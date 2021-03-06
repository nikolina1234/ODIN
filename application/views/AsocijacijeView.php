<!--
    @author Igor Durić 0646/16
-->

<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- resursi potrebni za dropdown i input-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- potrebno za timer -->
<script src="http://localhost/SlagalicaIgniter/resources/jquery.progressBarTimer.js"></script>
<?php

//ovde treba da se procita onaj niz iz asocijacijeController.php, tj sve kolone i da se samo ubace ovde... i to je to... TREBALO BI DA RADI

$a1 = $_SESSION['a1'];
$a2 = $_SESSION['a2'];
$a3 = $_SESSION['a3'];
$a4 = $_SESSION['a4'];
$b1 = $_SESSION['b1'];
$b2 = $_SESSION['b2'];
$b3 = $_SESSION['b3'];
$b4 = $_SESSION['b4'];
$c1 = $_SESSION['c1'];
$c2 = $_SESSION['c2'];
$c3 = $_SESSION['c3'];
$c4 = $_SESSION['c4'];
$d1 = $_SESSION['d1'];
$d2 = $_SESSION['d2'];
$d3 = $_SESSION['d3'];
$d4 = $_SESSION['d4'];
$akonacno = $_SESSION['a_konacno'];
$bkonacno = $_SESSION['b_konacno'];
$ckonacno = $_SESSION['c_konacno'];
$dkonacno = $_SESSION['d_konacno'];

    //session_start();
    $_SESSION['uk_poeni'] =  $_SESSION['slagalica'] + $_SESSION['moj_broj'] + $_SESSION['skocko'] + $_SESSION['spojnice'] + $_SESSION['ko_zna_zna'];

?>

<div class="container">



    <!-- Kao zaglavlje za ime igre i pravila igre-->
        <div class="row " style="height:10%;background-color:#459BF0;">
            <div class="col my-auto">
                        <h3 class="text-center text-dark"><i>Asocijacije</i></h3>
            </div>
            <!-- Dodatak za opis pravila igre-->
            <div class = "col-sm-2 mt-sm-3">
                <div class = "text-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pravila igre
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item-text">Morate prvo otvoriti bilo koje polje da biste mogli da pogadjate. Za tacno konacno resenje dobijate 8 poena,
							za svaku pogodjenu kolonu dobijate po 3 poena, i za svako neotvoreno polje dobijane 1 poen.
							</a>

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
    <div class="row h-90" style="background-color:#F0F0F0">
	
	
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
                <br>
				<br>
				<form method="post" action="http://localhost/SlagalicaIgniter/PoeniController/points">
				<center>
				   <input type="submit" class="btn btn-dark text-light" id="sledeca" value="kraj" disabled=true>
				</center>
				</form>
			</div>
        </div>
		
		
		
		
        <!-- Prikazi buttona za slova-->
        <div class="col-10 text-center border border-dark mt-sm-4">
		   <div class="row">
		      <div class="col-3"><button id="A1" class="btn btn-secondary btn-block" >A1</button></div>
			  <div class="col-6"></div>
			  <div class="col-3"><button id="B1" class="btn btn-secondary btn-block" value='B1' >B1</button></div>
		   </div>
		   <br>
		   <div class="row">
		      <div class="col-1"></div>
			  <div class="col-3"><button id="A2" class="btn btn-secondary btn-block" value='A2' >A2</button></div>
			  <div class="col-4"></div>
			  <div class="col-3"><button id="B2" class="btn btn-secondary btn-block" value='B2' >B2</button></div>
			  <div class="col-1"></div>
		   </div>
		   <br>
		   <div class="row">
		      <div class="col-2"></div>
			  <div class="col-3"><button value="A3" class="btn btn-secondary btn-block"  id="A3">A3</button></div>
			  <div class="col-2"></div>
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='B3'  id="B3">B3</button></div>
			  <div class="col-2"></div>
		   </div>
		   <br>
		   <div class="row">
		      <div class="col-3"></div>
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='A4' id="A4">A4</button></div>
			 
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='B4'  id="B4">B4</button></div>
			  <div class="col-3"></div>
		   </div>
		   <br>
		   <div class="row">
		      <div class="offset-2 col-2" align="right"><input id="dugmeA" type="button" class="btn btn-secondary btn-block btn-sm btn-info" value="Potvrdi A" onclick="proveriA()" disabled=true></div>
			  <div class="col-1"><input type="text" size="10"  maxlength="20" id="A" placeholder="A"></div>
			  <div class="col-1"></div>
			  <div class="col-1"><input type="text" size="10" maxlength="20" id="B" placeholder="B"></div>
			  <div class="col-1"></div>
			  <div class="col-2"><input id="dugmeB" type="button" class="btn btn-secondary btn-block btn-sm btn-info" value="Potvrdi B" onclick="proveriB()" disabled=true></div>
			  <div class="col-2"></div>
		   </div>
		   <br>
		   <div class="row">
		     <div class="col-3"></div>
			 <div class="col-2"></div>
			 <div class="col-2" align="center"><input id="Konacno" type="text" size="15"  maxlength="20" placeholder="Konacno"></div>
			 <div class="col-1"></div>
			 <div class="col-2"><input id="dugmeKon" type="button" class="btn btn-secondary btn-block btn-sm btn-info" value="Potvrdi Konacno"  align="right" onclick="proveriKonacno()" disabled=true></div>
			 <div class="col-2"></div>
		   </div>
		   <br>
		   <div class="row">
		   <div class="offset-2 col-2" align="right"><input id="dugmeC" type="button" class="btn btn-secondary btn-block btn-sm btn-info" value="Potvrdi C" onclick="proveriC()" disabled=true></div>
			  <div class="col-1"><input type="text" size="10"  maxlength="20" id="C" placeholder="C"></div>
			  <div class="col-1"></div>
			  <div class="col-1"><input type="text" size="10"  maxlength="20" id="D" placeholder="D"></div>
			  <div class="col-1"></div>
			  <div class="col-2"><input id="dugmeD" type="button" class="btn btn-secondary btn-block btn-sm btn-info" value="Potvrdi D"  onclick="proveriD()" disabled=true></div>
			  <div class="col-2"></div>
		   </div>
		   <br>
		   <div class="row">
		      <div class="col-3"></div>
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='C4'  id="C4">C4</button></div>
			 
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='D4'  id="D4">D4</button></div>
			  <div class="col-3"></div>
		   </div>
		   <br>
		   <div class="row">
		      <div class="col-2"></div>
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='C3' id="C3">C3</button></div>
			  <div class="col-2"></div>
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='D3'  id="D3">D3</button></div>
			  <div class="col-2"></div>
		   </div>
		   <br>
		   <div class="row">
		      <div class="col-1"></div>
			  <div class="col-3" width="20px"><button class="btn btn-secondary btn-block" value='C2'  id="C2">C2</button></div>
			  <div class="col-4"></div>
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='D2'  id="D2">D2</button></div>
			  <div class="col-1"></div>
		   </div>
		   <br>
		   <div class="row">
		       <div class="col-3"><button class="btn btn-secondary btn-block" value='C1'  id="C1">C1</button></div>
			  <div class="col-6"></div>
			  <div class="col-3"><button class="btn btn-secondary btn-block" value='D1' id="D1">D1</button></div>
		   </div>
		   
	    </div>
</div>
</div>
<script>

   var aaa1 = 0;
   var aaa2 = 0;
   var aaa3 = 0;
   var aaa4 = 0;
   var bbb1 = 0;
   var bbb2 = 0;
   var bbb3 = 0;
   var bbb4 = 0;
   var ccc1 = 0;
   var ccc2 = 0;
   var ccc3 = 0;
   var ccc4 = 0;
   var ddd1 = 0;
   var ddd2 = 0;
   var ddd3 = 0;
   var ddd4 = 0;
   var aaakon = 0;
   var bbbkon = 0;
   var ccckon = 0;
   var dddkon = 0;
				var tajmer = $('#tajmer_bar').progressBarTimer({
                timeLimit: 60,
                warningThreshold: 20,
                smooth: true,
                baseStyle: 'bg-success',
                warningStyle: 'bg-danger',
                completeStyle: '',
                onFinish:function () {				
					var dugme = document.getElementById('A1');
					if(aaa1 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $a1;?>"
					}
					dugme.disabled = true;
				
					dugme = document.getElementById('A2');
					if(aaa2 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $a2;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('A3');
					if(aaa3 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $a3;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('A4');
					if(aaa4 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $a4;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('B1');
					if(bbb1 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $b1;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('B2');
					if(bbb2 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $b2;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('B3');
					if(bbb3 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $b3;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('B4');
					if(bbb4 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $b4;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('C1');
					if(ccc1 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $c1;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('C2');
					if(ccc2 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $c2;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('C3');
					if(ccc3 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $c3;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('C4');
					if(ccc4 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $c4;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('D1');
					if(ddd1 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $d1;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('D2');
					if(ddd2 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $d2;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('D3');
					if(ddd3 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $d3;?>"
					}
					dugme.disabled = true;
					
					dugme = document.getElementById('D4');
					if(ddd4 == 0) {dugme.className = "btn btn-primary btn-block";
					dugme.innerHTML = "<?php echo $d4;?>"
					}
					dugme.disabled = true;

					document.getElementById('dugmeA').disabled = true;
					document.getElementById('dugmeB').disabled = true;
					document.getElementById('dugmeC').disabled = true;
					document.getElementById('dugmeD').disabled = true;
					document.getElementById('dugmeKon').disabled = true;

					document.getElementById('sledeca').disabled = false;
					var inputBox = 	document.getElementById('A');
					inputBox.value = "<?php echo $akonacno;?>"
					if(aaakon == 0)inputBox.className = 'bg-primary';
					inputBox.readOnly = true;
					
					inputBox = 	document.getElementById('B');
					inputBox.value = "<?php echo $bkonacno;?>"
					if(bbbkon == 0)inputBox.className = 'bg-primary';
					inputBox.readOnly = true;
					
					inputBox = 	document.getElementById('C');
					inputBox.value = "<?php echo $ckonacno;?>"
					if(ccckon == 0)inputBox.className = 'bg-primary';
					inputBox.readOnly = true;
					
					inputBox = 	document.getElementById('D');
					inputBox.value = "<?php echo $dkonacno;?>"
					if(dddkon == 0)inputBox.className = 'bg-primary';
					inputBox.readOnly = true;
					
					inputBox = document.getElementById('Konacno');
			        inputBox.value = "<?php echo $_SESSION['asoc_konacno']; ?>"
					inputBox.className = 'bg-primary';
					inputBox.readOnly = true;
                }
				});				

				tajmer.start();



		var flag = 0;
		var flagA = 0;
		var flagB = 0;
		var flagC = 0;
		var flagD = 0;
		var poeni = 0;
		
		document.getElementById('A1').addEventListener("click", function(){promeni('A1');});
		
		document.getElementById('A2').addEventListener("click", function(){promeni('A2');});
		
		document.getElementById('A3').addEventListener("click", function(){promeni('A3');});
		
		document.getElementById('A4').addEventListener("click", function(){promeni('A4');});
		
		document.getElementById('B1').addEventListener("click", function(){promeni('B1');});
		
		document.getElementById('B2').addEventListener("click", function(){promeni('B2');});
		
		document.getElementById('B3').addEventListener("click", function(){promeni('B3');});
		
		document.getElementById('B4').addEventListener("click", function(){promeni('B4');});
		
		document.getElementById('C1').addEventListener("click", function(){promeni('C1');});
		
		document.getElementById('C2').addEventListener("click", function(){promeni('C2');});
		
		document.getElementById('C3').addEventListener("click", function(){promeni('C3');});
		
		document.getElementById('C4').addEventListener("click", function(){promeni('C4');});
		
		document.getElementById('D1').addEventListener("click", function(){promeni('D1');});
		
		document.getElementById('D2').addEventListener("click", function(){promeni('D2');});
		
		document.getElementById('D3').addEventListener("click", function(){promeni('D3');});
		
		document.getElementById('D4').addEventListener("click", function(){var par = 'D4'; promeni(par);});
		

		

		var akon = "<?php echo $_SESSION['a_konacno']; ?>";

		var bkon = "<?php echo $_SESSION['b_konacno']; ?>";

		var ckon = "<?php echo $_SESSION['c_konacno']; ?>";

		var dkon = "<?php echo $_SESSION['d_konacno']; ?>";

	


	function promeni(id){

		switch(id){
			case 'A1':
			
			flagA++;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a1 = "<?php echo $a1;?>"
			aaa1 = 1;
			document.getElementById(id).innerHTML = a1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'A2':
			
			flagA++;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a2 = "<?php echo $a2;?>"
			aaa2 = 1;
			document.getElementById(id).innerHTML = a2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;
			
			case 'A3':
			
			flagA++;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a3 = "<?php echo $a3;?>"
			aaa3 = 1;
			document.getElementById(id).innerHTML = a3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'A4':
			
			flagA++;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a4 = "<?php echo $a4;?>"
			aaa4 = 1;
			document.getElementById(id).innerHTML = a4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B1':
			
			flagB++;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b1 = "<?php echo $b1;?>"
			bbb1 = 1;
			document.getElementById(id).innerHTML = b1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B2':
			
			flagB++;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b2 = "<?php echo $b2;?>"
			bbb2 = 1;
			document.getElementById(id).innerHTML = b2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B3':
			
			flagB++;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b3 = "<?php echo $b3;?>"
			bbb3 = 1;
			document.getElementById(id).innerHTML = b3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B4':
			
			flagB++;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b4 = "<?php echo $b4;?>"
			bbb4 = 1;
			document.getElementById(id).innerHTML = b4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C1':
			
			flagC++;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c1 = "<?php echo $c1;?>"
			ccc1 = 1;
			document.getElementById(id).innerHTML = c1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C2':
			
			flagC++;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c2 = "<?php echo $c2;?>"
			ccc2 = 1;
			document.getElementById(id).innerHTML = c2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C3':
			
			flagC++;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c3 = "<?php echo $c3;?>"
			ccc3 = 1;
			document.getElementById(id).innerHTML = c3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C4':
			
			flagC++;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c4 = "<?php echo $c4;?>"
			ccc4 = 1;
			document.getElementById(id).innerHTML = c4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D1':
			
			flagD++;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d1 = "<?php echo $d1;?>"
			ddd1 = 1;
			document.getElementById(id).innerHTML = d1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D2':
			
			flagD++;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d2 = "<?php echo $d2;?>"
			ddd2 = 1;
			document.getElementById(id).innerHTML = d2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D3':
			
			flagD++;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d3 = "<?php echo $d3;?>"
			ddd3 = 1;
			document.getElementById(id).innerHTML = d3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D4':
			
			flagD++;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d4 = "<?php echo $d4;?>"
			ddd4 = 1;
			document.getElementById(id).innerHTML = d4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;
		}

		
		
	}
	
	function proveriA()
		{
			
				var dugme111 = document.getElementById("dugmeA");
				dugme111.disabled = false;
			var inputBox = document.getElementById('A');
			var str = "<?php echo $_SESSION['a_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['a_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				poeni += 3 + 4 - flagA;
				flag += 3;
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				aaakon = 1;

				for (i=1;i<5;i++)
				{
					document.getElementById('A'+i).disabled = true;
					document.getElementById('A'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var a1 = "<?php echo $a1;?>"
			        document.getElementById('A'+i).innerHTML = a1;}
					else if(i==2){
					var a2 = "<?php echo $a2;?>"
			        document.getElementById('A'+i).innerHTML = a2;}
					else if(i==3){
					var a3 = "<?php echo $a3;?>"
			        document.getElementById('A'+i).innerHTML = a3;}
					else {
					var a4 = "<?php echo $a4;?>"
			        document.getElementById('A'+i).innerHTML = a4;}
				}
				var dugme = document.getElementById("dugmeA");
				dugme.disabled = true;
				
				var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=asocijacije&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

                    nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
					flagA = 4;
			}
			else 
			{
				inputBox.value="";
			}
			

		}
		function proveriB()
		{
			
				var dugme111 = document.getElementById("dugmeB");
				dugme111.disabled = false;
			var inputBox = document.getElementById('B');
			var str = "<?php echo $_SESSION['b_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['b_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				poeni += 3 + 4 - flagB;
				flag += 3;
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				bbbkon = 1;

				for (i=1;i<5;i++)
				{
					document.getElementById('B'+i).disabled = true;
					document.getElementById('B'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var b1 = "<?php echo $b1;?>"
			        document.getElementById('B'+i).innerHTML = b1;}
					else if(i==2){
					var b2 = "<?php echo $b2;?>"
			        document.getElementById('B'+i).innerHTML = b2;}
					else if(i==3){
					var b3 = "<?php echo $b3;?>"
			        document.getElementById('B'+i).innerHTML = b3;}
					else {
					var b4 = "<?php echo $b4;?>"
			        document.getElementById('B'+i).innerHTML = b4;}
				}
				var dugme = document.getElementById("dugmeB");
				dugme.disabled = true;
				
				var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=asocijacije&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

                    nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
					flagB = 4;
			}
			else
			{
				inputBox.value="";
			}
			

		}


		function proveriC()
		{
			
				var dugme111 = document.getElementById("dugmeC");
				dugme111.disabled = false;
			var inputBox = document.getElementById('C');
			var str = "<?php echo $_SESSION['c_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['c_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				poeni += 3 + 4 - flagC;
				flag += 3;
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				ccckon = 1;

				for (i=1;i<5;i++)
				{
					document.getElementById('C'+i).disabled = true;
					document.getElementById('C'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var c1 = "<?php echo $c1;?>"
			        document.getElementById('C'+i).innerHTML = c1;}
					else if(i==2){
					var c2 = "<?php echo $c2;?>"
			        document.getElementById('C'+i).innerHTML = c2;}
					else if(i==3){
					var c3 = "<?php echo $c3;?>"
			        document.getElementById('C'+i).innerHTML = c3;}
					else {
					var c4 = "<?php echo $c4;?>"
			        document.getElementById('C'+i).innerHTML = c4;}
				}
				var dugme = document.getElementById("dugmeC");
				dugme.disabled = true;
				
				var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=asocijacije&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

                    nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
					flagC = 4;
			}
			else 
			{
				inputBox.value="";
			}
			

		}


		function proveriD()
		{
			
				
			var dugme111 = document.getElementById("dugmeD");
				dugme111.disabled = false;
			var inputBox = document.getElementById('D');
			var str = "<?php echo $_SESSION['d_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['d_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				poeni += 3 + 4 - flagD;
				flag += 3;
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				dddkon = 1;

				for (i=1;i<5;i++)
				{
					document.getElementById('D'+i).disabled = true;
					document.getElementById('D'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var d1 = "<?php echo $d1;?>"
			        document.getElementById('D'+i).innerHTML = d1;}
					else if(i==2){
					var d2 = "<?php echo $d2;?>"
			        document.getElementById('D'+i).innerHTML = d2;}
					else if(i==3){
					var d3 = "<?php echo $d3;?>"
			        document.getElementById('D'+i).innerHTML = d3;}
					else {
					var d4 = "<?php echo $d4;?>"
			        document.getElementById('D'+i).innerHTML = d4;}
				}
				var dugme = document.getElementById("dugmeD");
				dugme.disabled = true;
				
				var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=asocijacije&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

                    nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
					flagD = 4;
			}
			else
			{
				inputBox.value="";
			}
			

		}

		function proveriKonacno()
		{
			
				var dugme111 = document.getElementById("dugmeKon");
				dugme111.disabled = false;
			var inputBox = document.getElementById('Konacno');
			var str = "<?php echo $_SESSION['asoc_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['asoc_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				tajmer.stop();
				document.getElementById('sledeca').disabled = false;
				poeni += 8 + 16 - flagA - flagB - flagC - flagD + 12 - flag;
				inputBox.value = str;
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				for (i=1;i<5;i++)
				{
					document.getElementById('D'+i).disabled = true;
					document.getElementById('D'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var d1 = "<?php echo $d1;?>"
			        document.getElementById('D'+i).innerHTML = d1;}
					else if(i==2){
					var d2 = "<?php echo $d2;?>"
			        document.getElementById('D'+i).innerHTML = d2;}
					else if(i==3){
					var d3 = "<?php echo $d3;?>"
			        document.getElementById('D'+i).innerHTML = d3;}
					else {
					var d4 = "<?php echo $d4;?>"
			        document.getElementById('D'+i).innerHTML = d4;
					}



					document.getElementById('C'+i).disabled = true;
					document.getElementById('C'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var c1 = "<?php echo $c1;?>"
			        document.getElementById('C'+i).innerHTML = c1;}
					else if(i==2){
					var c2 = "<?php echo $c2;?>"
			        document.getElementById('C'+i).innerHTML = c2;}
					else if(i==3){
					var c3 = "<?php echo $c3;?>"
			        document.getElementById('C'+i).innerHTML = c3;}
					else {
					var c4 = "<?php echo $c4;?>"
			        document.getElementById('C'+i).innerHTML = c4;}




					document.getElementById('A'+i).disabled = true;
					document.getElementById('A'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var a1 = "<?php echo $a1;?>"
			        document.getElementById('A'+i).innerHTML = a1;}
					else if(i==2){
					var a2 = "<?php echo $a2;?>"
			        document.getElementById('A'+i).innerHTML = a2;}
					else if(i==3){
					var a3 = "<?php echo $a3;?>"
			        document.getElementById('A'+i).innerHTML = a3;}
					else {
					var a4 = "<?php echo $a4;?>"
			        document.getElementById('A'+i).innerHTML = a4;}




					document.getElementById('B'+i).disabled = true;
					document.getElementById('B'+i).style.backgroundColor = '#79F281';
					if(i==1){
					var b1 = "<?php echo $b1;?>"
			        document.getElementById('B'+i).innerHTML = b1;}
					else if(i==2){
					var b2 = "<?php echo $b2;?>"
			        document.getElementById('B'+i).innerHTML = b2;}
					else if(i==3){
					var b3 = "<?php echo $b3;?>"
			        document.getElementById('B'+i).innerHTML = b3;}
					else {
					var b4 = "<?php echo $b4;?>"
			        document.getElementById('B'+i).innerHTML = b4;}




				}	
				inputBox = 	document.getElementById('A');
				inputBox.value = "<?php echo $akonacno;?>"
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				inputBox = 	document.getElementById('B');
				inputBox.value = "<?php echo $bkonacno;?>"
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				inputBox = 	document.getElementById('C');
				inputBox.value = "<?php echo $ckonacno;?>"
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				inputBox = 	document.getElementById('D');
				inputBox.value = "<?php echo $dkonacno;?>"
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';
				
				var dugme = document.getElementById("dugmeA");
				dugme.disabled = true;
				dugme = document.getElementById("dugmeB");
				dugme.disabled = true;
				dugme = document.getElementById("dugmeC");
				dugme.disabled = true;
				dugme = document.getElementById("dugmeD");
				dugme.disabled = true;
				dugme = document.getElementById("dugmeKon");
				dugme.disabled = true;
				
				var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=asocijacije&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

                    nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
			}
			else{
				inputBox.value="";
			}
		

		}

</script>
