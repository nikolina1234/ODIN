<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- resursi potrebni za dropdown i input-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- potrebno za timer -->
<script src="resources/jquery.progressBarTimer.js"></script>
<?php
$_SESSION['uk_poeni'] =  $_SESSION['slagalica'] + $_SESSION['moj_broj'] + $_SESSION['skocko'];
?>

<div class="container">
    <!-- Kao zaglavlje za ime igre i pravila igre-->
        <div class="row " style="height:10%;background-color:#459BF0;">
            <div class="col my-auto">
                        <h3 class="text-center text-dark"><i>Ko zna zna</i></h3>
            </div>
            <!-- Dodatak za opis pravila igre-->
            <div class = "col-sm-2 mt-sm-3">
                <div class = "text-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pravila igre
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item-text">Pravila ko zna zna</a>

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
		
		
		
		<div class="row h-50" style="background-color:#F0F0F0">
		
		
		          
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
		
		
		
		    <div class="col-8 text-center border border-dark mt-sm-4">
			     <br>
			      <table class="table" >
				      <tr class="table-info" height="100px">
					     <td colspan="4" align="center" ><b>Pitanje:</b>
						      <br>
						 	<p id="pitanje">
						   			
						   </p>
						 </td>
					  </tr>
					  <tr>
					
						 <td align="center" colspan="2">A &nbsp; 
						 
						 <input type="button" style="width:50%;"
						 
						 
						  class="btn btn-secondary" id="A">
						  
						  </td>

						 <td align="center" colspan="2">B &nbsp; <input id="B" type="button" style="width:50%;"
						 
						 
						  class="btn btn-secondary" ></td>
						
					  </tr>
					  <tr>
					     
						  <td align="center" colspan="2">C &nbsp;<input id="C" type="button"  style="width:50%;"
						 
						
						  
						  class="btn btn-secondary" ></td>
						  <td align="center" colspan="2">D &nbsp; <input id="D" type="button"  style="width:50%;"
						 
						 
						  
						  class="btn btn-secondary"></td>
						  
					  </tr>
				  </table>
			</div>
			<div class="col-2" align="center">
			    <br>
			    <button class="btn btn-primary" id="neznam" >Ne znam</button>
				<br>
				<br>
				<form method="post" action="http://localhost/SlagalicaIgniter/SpojniceController/Spojnice">
			       <input type="submit" id="sledeca" disabled='true' class="btn btn-secondary" value="Sledeca igra">
				</form>
			</div>
		</div>
</div>

<script>

	    var kliknutoDugme;
		var poeni = 0;
		var cnt = 1;

		var koznazna0 = "<?php echo $_SESSION['koznazna0']->pitanje; ?>";
		var tacan0 = "<?php echo $_SESSION['koznazna0']->tacan; ?>";

		var koznazna1 = "<?php echo $_SESSION['koznazna1']->pitanje; ?>";
		var tacan1 = "<?php echo $_SESSION['koznazna1']->tacan; ?>";			

		var odgovori00 = "<?php echo $_SESSION['odgovori0'][0]; ?>";
		var odgovori01 = "<?php echo $_SESSION['odgovori0'][1]; ?>";
		var odgovori02 = "<?php echo $_SESSION['odgovori0'][2]; ?>";
		var odgovori03 = "<?php echo $_SESSION['odgovori0'][3]; ?>";

		document.getElementById('A').value = odgovori00;
		document.getElementById('B').value = odgovori01;
		document.getElementById('C').value = odgovori02;
		document.getElementById('D').value = odgovori03;
		document.getElementById('neznam').onclick = function(){proveri(odgovori00,'neznam');};  

						document.getElementById('A').onclick = function(){proveri(odgovori00,'A');}; 
						document.getElementById('B').onclick = function(){proveri(odgovori01,'B');}; 
						document.getElementById('C').onclick = function(){proveri(odgovori02,'C');}; 
						document.getElementById('D').onclick = function(){proveri(odgovori03,'D');}; 
					
		document.getElementById('pitanje').innerHTML = koznazna0;

		function proveri(odgovor,id)
		{
			poeni+=0;
			 kliknutoDugme = document.getElementById(id);
			 if (id!='neznam')
			 {
				if (odgovor == tacan0)
				{
				kliknutoDugme.className = 'btn btn-success';
				poeni += 5;
				}
				else
				{
					kliknutoDugme.className = 'btn btn-danger';
					poeni -= 2;
				}
			 }
			 else
			 	{
					 poeni += 0;

					 if (document.getElementById('A').value == tacan0)
					 {
						document.getElementById('A').className = 'btn btn-warning';
					 }
					 else
						if (document.getElementById('B').value == tacan0)
						{
							document.getElementById('B').className = 'btn btn-warning';
						}
						else
							if (document.getElementById('C').value == tacan0)
							{
								document.getElementById('C').className = 'btn btn-warning';
							}
							else
								{
									document.getElementById('D').className = 'btn btn-warning';
								}
					
					
				 }
				document.getElementById('A').disabled = true;
				document.getElementById('B').disabled = true;
				document.getElementById('C').disabled = true;
				document.getElementById('D').disabled = true;
				
				

				// xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
				// xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				// xhttp.send("igra=koznazna&ukupno="+poeni);
				// xhttp.onload = (e) =>	
				// {

				// }
				var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=ko_zna_zna&ukupno="+poeni);
                    xhttp.onload = (e) => {

                    }

				/*var ukupno = '<?php  if (isset($_SESSION['uk_poeni'])) echo $_SESSION['uk_poeni']; else echo 0; ?>';

				document.getElementById('broj_poena').value = parseInt(ukupno) + poeni;*/
				nm= <?php echo $_SESSION['uk_poeni']?>;
                    elem = document.getElementById("broj_poena");

                    elem.value =  nm + poeni;
			
				setTimeout(callAgain,1000);
				
		}

		function callAgain()
		{

					document.getElementById('A').className = 'btn btn-secondary';
					document.getElementById('B').className = 'btn btn-secondary';
					document.getElementById('C').className = 'btn btn-secondary';
					document.getElementById('D').className = 'btn btn-secondary';

				if (cnt == 1)
				{
					var koznazna = "<?php echo $_SESSION['koznazna1']->pitanje; ?>";
					tacan0 = "<?php echo $_SESSION['koznazna1']->tacan; ?>";

					var odgovori0 = "<?php echo $_SESSION['odgovori1'][0]; ?>";
					var odgovori1 = "<?php echo $_SESSION['odgovori1'][1]; ?>";
					var odgovori2 = "<?php echo $_SESSION['odgovori1'][2]; ?>";
					var odgovori3 = "<?php echo $_SESSION['odgovori1'][3]; ?>";

					document.getElementById('pitanje').innerHTML = koznazna;

					document.getElementById('A').value = odgovori0;
					document.getElementById('B').value = odgovori1;
					document.getElementById('C').value = odgovori2;
					document.getElementById('D').value = odgovori3;

					
					document.getElementById('A').onclick = function(){proveri(odgovori0,'A');}; 
					document.getElementById('B').onclick = function(){proveri(odgovori1,'B');}; 
					document.getElementById('C').onclick = function(){proveri(odgovori2,'C');}; 
					document.getElementById('D').onclick = function(){proveri(odgovori3,'D');}; 

					document.getElementById('A').disabled = false;
					document.getElementById('B').disabled = false;
					document.getElementById('C').disabled = false;
					document.getElementById('D').disabled = false;

					kliknutoDugme.className = 'btn btn-secondary';
					cnt++;
				}
				else
					if (cnt == 2)	
					{
						var koznazna = "<?php echo $_SESSION['koznazna2']->pitanje; ?>";
						tacan0 = "<?php echo $_SESSION['koznazna2']->tacan; ?>";

						var odgovori0 = "<?php echo $_SESSION['odgovori2'][0]; ?>";
						var odgovori1 = "<?php echo $_SESSION['odgovori2'][1]; ?>";
						var odgovori2 = "<?php echo $_SESSION['odgovori2'][2]; ?>";
						var odgovori3 = "<?php echo $_SESSION['odgovori2'][3]; ?>";

						document.getElementById('pitanje').innerHTML = koznazna;

						document.getElementById('A').value = odgovori0;
						document.getElementById('B').value = odgovori1;
						document.getElementById('C').value = odgovori2;
						document.getElementById('D').value = odgovori3;

						document.getElementById('A').onclick = function(){proveri(odgovori0,'A');}; 
						document.getElementById('B').onclick = function(){proveri(odgovori1,'B');}; 
						document.getElementById('C').onclick = function(){proveri(odgovori2,'C');}; 
						document.getElementById('D').onclick = function(){proveri(odgovori3,'D');}; 


						
						document.getElementById('A').disabled = false;
						document.getElementById('B').disabled = false;
						document.getElementById('C').disabled = false;
						document.getElementById('D').disabled = false;

						kliknutoDugme.className = 'btn btn-secondary';
						cnt++;
					}
					else
						if (cnt == 3)	
						{
							var koznazna = "<?php echo $_SESSION['koznazna3']->pitanje; ?>";
							tacan0 = "<?php echo $_SESSION['koznazna3']->tacan; ?>";

							var odgovori0 = "<?php echo $_SESSION['odgovori3'][0]; ?>";
							var odgovori1 = "<?php echo $_SESSION['odgovori3'][1]; ?>";
							var odgovori2 = "<?php echo $_SESSION['odgovori3'][2]; ?>";
							var odgovori3 = "<?php echo $_SESSION['odgovori3'][3]; ?>";

							document.getElementById('pitanje').innerHTML = koznazna;

							document.getElementById('A').value = odgovori0;
							document.getElementById('B').value = odgovori1;
							document.getElementById('C').value = odgovori2;
							document.getElementById('D').value = odgovori3;

							document.getElementById('A').onclick = function(){proveri(odgovori0,'A');}; 
							document.getElementById('B').onclick = function(){proveri(odgovori1,'B');}; 
							document.getElementById('C').onclick = function(){proveri(odgovori2,'C');}; 
							document.getElementById('D').onclick = function(){proveri(odgovori3,'D');}; 
							
							document.getElementById('A').disabled = false;
							document.getElementById('B').disabled = false;
							document.getElementById('C').disabled = false;
							document.getElementById('D').disabled = false;

							kliknutoDugme.className = 'btn btn-secondary';
							cnt++;
						}
						else
						if (cnt == 4)	
						{
							var koznazna = "<?php echo $_SESSION['koznazna4']->pitanje; ?>";
							tacan0 = "<?php echo $_SESSION['koznazna4']->tacan; ?>";

							var odgovori0 = "<?php echo $_SESSION['odgovori4'][0]; ?>";
							var odgovori1 = "<?php echo $_SESSION['odgovori4'][1]; ?>";
							var odgovori2 = "<?php echo $_SESSION['odgovori4'][2]; ?>";
							var odgovori3 = "<?php echo $_SESSION['odgovori4'][3]; ?>";

							document.getElementById('pitanje').innerHTML = koznazna;

							document.getElementById('A').value = odgovori0;
							document.getElementById('B').value = odgovori1;
							document.getElementById('C').value = odgovori2;
							document.getElementById('D').value = odgovori3;

							document.getElementById('A').onclick = function(){proveri(odgovori0,'A');}; 
							document.getElementById('B').onclick = function(){proveri(odgovori1,'B');}; 
							document.getElementById('C').onclick = function(){proveri(odgovori2,'C');}; 
							document.getElementById('D').onclick = function(){proveri(odgovori3,'D');}; 
							
							document.getElementById('A').disabled = false;
							document.getElementById('B').disabled = false;
							document.getElementById('C').disabled = false;
							document.getElementById('D').disabled = false;

							kliknutoDugme.className = 'btn btn-secondary';
							cnt++;
								
							}
							else
								{
									/*var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.send("igra=ko_zna_zna&ukupno="+document.getElementById("broj_poena").value);
                    xhttp.onload = (e) => {

                    }*/
									document.getElementById('A').disabled = true;
									document.getElementById('B').disabled = true;
									document.getElementById('C').disabled = true;
									document.getElementById('D').disabled = true;

									document.getElementById('neznam').disabled = true;
									document.getElementById('sledeca').disabled = false;


								}
					
		}
			
</script>