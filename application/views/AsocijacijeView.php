
<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- resursi potrebni za dropdown i input-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- potrebno za timer -->
<script src="resources/jquery.progressBarTimer.js"></script>
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
                            <a class="dropdown-item-text">Pravila asocijacija</a>

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
            <div class="form-group">
                <label for="name" class="control-label">Ime korisnika</label>
                <input type="number" value='' class="form-control" id="broj_poena" readonly style = "background-color: blue;">
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
		var flag = 0;
		var flagA = 0;
		var flagB = 0;
		var flagC = 0;
		var flagD = 0;
		
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
			flag = 1;
			flagA = 1;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a1 = "<?php echo $a1;?>"
			document.getElementById(id).innerHTML = a1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'A2':
			flag = 1;
			flagA = 1;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a2 = "<?php echo $a2;?>"
			document.getElementById(id).innerHTML = a2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;
			
			case 'A3':
			flag = 1;
			flagA = 1;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a3 = "<?php echo $a3;?>"
			document.getElementById(id).innerHTML = a3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'A4':
			flag = 1;
			flagA = 1;
			var dugme = document.getElementById("dugmeA");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var a4 = "<?php echo $a4;?>"
			document.getElementById(id).innerHTML = a4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B1':
			flag = 1;
			flagB = 1;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b1 = "<?php echo $b1;?>"
			document.getElementById(id).innerHTML = b1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B2':
			flag = 1;
			flagB = 1;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b2 = "<?php echo $b2;?>"
			document.getElementById(id).innerHTML = b2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B3':
			flag = 1;
			flagB = 1;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b3 = "<?php echo $b3;?>"
			document.getElementById(id).innerHTML = b3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'B4':
			flag = 1;
			flagB = 1;
			var dugme = document.getElementById("dugmeB");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var b4 = "<?php echo $b4;?>"
			document.getElementById(id).innerHTML = b4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C1':
			flag = 1;
			flagC = 1;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c1 = "<?php echo $c1;?>"
			document.getElementById(id).innerHTML = c1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C2':
			flag = 1;
			flagC = 1;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c2 = "<?php echo $c2;?>"
			document.getElementById(id).innerHTML = c2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C3':
			flag = 1;
			flagC = 1;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c3 = "<?php echo $c3;?>"
			document.getElementById(id).innerHTML = c3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'C4':
			flag = 1;
			flagC = 1;
			var dugme = document.getElementById("dugmeC");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var c4 = "<?php echo $c4;?>"
			document.getElementById(id).innerHTML = c4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D1':
			flag = 1;
			flagD = 1;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d1 = "<?php echo $d1;?>"
			document.getElementById(id).innerHTML = d1;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D2':
			flag = 1;
			flagD = 1;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d2 = "<?php echo $d2;?>"
			document.getElementById(id).innerHTML = d2;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D3':
			flag = 1;
			flagD = 1;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d3 = "<?php echo $d3;?>"
			document.getElementById(id).innerHTML = d3;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;

			case 'D4':
			flag = 1;
			flagD = 1;
			var dugme = document.getElementById("dugmeD");
				dugme.disabled = false;
				 dugme = document.getElementById("dugmeKon");
				dugme.disabled = false;
			var d4 = "<?php echo $d4;?>"
			document.getElementById(id).innerHTML = d4;
			document.getElementById(id).className = "btn btn-primary btn-block";
			break;
		}

		
		
	}
	
	function proveriA()
		{
			if(flagA == 1){
				var dugme111 = document.getElementById("dugmeA");
				dugme111.disabled = false;
			var inputBox = document.getElementById('A');
			var str = "<?php echo $_SESSION['a_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['a_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';

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
			}
			else 
			{
				inputBox.value="";
			}
			}
			else
			{
				var dugme = document.getElementById("dugmeA");
				dugme.disabled = true;
			}

		}
		function proveriB()
		{
			if(flagB==1){
				var dugme111 = document.getElementById("dugmeB");
				dugme111.disabled = false;
			var inputBox = document.getElementById('B');
			var str = "<?php echo $_SESSION['b_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['b_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';

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
			}
			else
			{
				inputBox.value="";
			}
			}
			else
			{
				var dugme = document.getElementById("dugmeB");
				dugme.disabled = true;
			}

		}


		function proveriC()
		{
			if(flagC==1){
				var dugme111 = document.getElementById("dugmeC");
				dugme111.disabled = false;
			var inputBox = document.getElementById('C');
			var str = "<?php echo $_SESSION['c_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['c_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
				inputBox.readOnly=true;
				inputBox.style.backgroundColor = '#79F281';

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
			}
			else 
			{
				inputBox.value="";
			}
			}
			else
			{
				var dugme = document.getElementById("dugmeC");
				dugme.disabled = true;
			}

		}


		function proveriD()
		{
			if(flagD==1){
				
			var dugme111 = document.getElementById("dugmeD");
				dugme111.disabled = false;
			var inputBox = document.getElementById('D');
			var str = "<?php echo $_SESSION['d_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['d_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
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
			        document.getElementById('D'+i).innerHTML = d4;}
				}
				var dugme = document.getElementById("dugmeD");
				dugme.disabled = true;
			}
			else
			{
				inputBox.value="";
			}
			}
			else
			{
				var dugme = document.getElementById("dugmeD");
				dugme.disabled = true;
			}

		}

		function proveriKonacno()
		{
			if(flag==1){
				var dugme111 = document.getElementById("dugmeKon");
				dugme111.disabled = false;
			var inputBox = document.getElementById('Konacno');
			var str = "<?php echo $_SESSION['asoc_konacno']; ?>"
			var res = str.toLowerCase();
			var res1 = str.toUpperCase();

			if (inputBox.value == "<?php  echo $_SESSION['asoc_konacno']  ?>" || inputBox.value==res || inputBox.value==res1)
			{
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
			}
			else{
				inputBox.value="";
			}
		}
		else
		{
			var dugme = document.getElementById("dugmeKon");
				dugme.disabled = true;
		}

		}
//window.addEventListener('load', );
</script>