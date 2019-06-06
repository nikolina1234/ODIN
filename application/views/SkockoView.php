<?php
session_start();
$_SESSION['uk_poeni'] = $_SESSION['moj_broj'] + $_SESSION['slagalica'];
?>

<meta http-equiv="X-UA-Compatible" content="ie=edge">


<!-- resursi potrebni za dropdown i input-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- potrebno za timer -->
<script src="resources/jquery.progressBarTimer.js"></script>
<style>
.circle{
	 height: 35px;
  width: 35px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
</style>

<div class="container">
   <!-- Kao zaglavlje za ime igre i pravila igre-->
        <div class="row " style="height:10%;background-color:#459BF0;">
            <div class="col my-auto">
                        <h3 class="text-center text-dark"><i>Skocko</i></h3>
            </div>
            <!-- Dodatak za opis pravila igre-->
            <div class = "col-sm-2 mt-sm-3">
                <div class = "text-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pravila igre
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item-text">10 poena dobijate za pogodjenu kombinaciju.
							Bonus poeni 5 do 1 u zavisnosti u kom pokusaju pogodite.
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
		
		
		<div class="row h-60" style="background-color:#F0F0F0">
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

                <input class = "text-center rounded"  value = <?php echo $_SESSION['uk_poeni']?>   type="text" class="form-control" id="broj_poena" readonly style = "background-color: #0080FF; width: 70px; height:70px; margin-left: 30%;color: white; font-size: 25px;">
            </div>
        </div>
		
		
		
		<div class="col-8 text-center border border-dark mt-sm-4">
         
					<br>
					<div class="row">
					  <div class="col-4" style="display:inline;">
					  <div class="row">
					     <div class="col-3" ><img id="1" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="2" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3"  ><img id="3" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img  id="4"src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 </div>
					  </div>
					    <div class="col-1"><input id="bb1" class="btn btn-secondary" type="button" value="Vrati" onclick="vrati()"></div>
					  	<div class="col-1"> <input id="b1" class="btn btn-secondary" type="button" value="Potvrdi" disabled=true onclick="enableAgain('b1')"></div>
					  <div class="col-4">
					      <div id="c1" class="circle" ></div>
						  <div id="c2" class="circle" ></div>
						  <div id="c3" class="circle" ></div>
						  <div id="c4" class="circle" ></div>
					  </div>
					</div>
					<br>
					<div class="row">
					  <div class="col-4" style="display:inline;">
					  <div class="row">
					     <div class="col-3" ><img id="5" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="6" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3"  ><img id="7" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="8" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 </div>
					  </div>
					  <div class="col-1"><input id="bb2" class="btn btn-secondary" type="button" value="Vrati" onclick="vrati()" disabled=true></div>
					  <div class="col-1"> <input id="b2" class="btn btn-secondary" type="button" value="Potvrdi" disabled=true onclick="enableAgain('b2')"></div>
					  <div class="col-4"><div id="c5" class="circle" ></div>
						  <div id="c6" class="circle" ></div>
						  <div id="c7" class="circle" ></div>
						  <div id="c8" class="circle" ></div></div>
					</div>
					
					<br>
					<div class="row">
					  <div class="col-4" style="display:inline;">
					  <div class="row">
					     <div class="col-3" ><img id="9" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="10" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3"  ><img id="11" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="12" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 </div>
					  </div>
					  <div class="col-1"><input id="bb3" class="btn btn-secondary" type="button" value="Vrati" onclick="vrati()" disabled=true></div>
					  <div class="col-1"> <input id="b3" class="btn btn-secondary" type="button" value="Potvrdi" disabled=true onclick="enableAgain('b3')"></div>
					  <div class="col-4"><div id="c9" class="circle" ></div>
						  <div id="c10" class="circle" ></div>
						  <div id="c11" class="circle" ></div>
						  <div id="c12" class="circle" ></div></div>
					</div>
					
					<br>
					
				    <div class="row">
					  <div class="col-4" style="display:inline;">
					  <div class="row">
					     <div class="col-3" ><img id="13" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="14" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3"  ><img id="15" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="16" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 </div>
					  </div>
					  <div class="col-1"><input id="bb4" class="btn btn-secondary" type="button" value="Vrati" onclick="vrati()" disabled=true></div>
					  <div class="col-1"> <input id="b4" class="btn btn-secondary" type="button" value="Potvrdi" disabled=true onclick="enableAgain('b4')"></div>
					  <div class="col-4"><div id="c13" class="circle" ></div>
						  <div id="c14" class="circle" ></div>
						  <div id="c15" class="circle" ></div>
						  <div id="c16" class="circle" ></div></div>
					</div>
					
					<br>
					<div class="row">
					  <div class="col-4" style="display:inline;">
					  <div class="row">
					     <div class="col-3" ><img id="17" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="18" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3"  ><img id="19" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="20" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 </div>
					  </div>
					  <div class="col-1"><input id="bb5" class="btn btn-secondary" type="button" value="Vrati" onclick="vrati()" disabled=true></div>
					  <div class="col-1"> <input id="b5" class="btn btn-secondary" type="button" value="Potvrdi" disabled=true onclick="enableAgain('b5')"></div>
					  <div class="col-4"><div id="c17" class="circle" ></div>
						  <div id="c18" class="circle" ></div>
						  <div id="c19" class="circle" ></div>
						  <div id="c20" class="circle" ></div></div>
					</div>
					<br>
					
					<div class="row">
					  <div class="col-4" style="display:inline;">
					  <div class="row">
					     <div class="col-3" ><img id="21" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="22" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3"  ><img id="23" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="24" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 </div>
					  </div>
					  <div class="col-1"><input id="bb6" class="btn btn-secondary" type="button" value="Vrati" onclick="vrati()" disabled=true></div>
					  <div class="col-1"> <input id="b6" class="btn btn-secondary" type="button" value="Potvrdi" disabled=true onclick="enableAgain('b6')"></div>
					  <div class="col-4"><div id="c21" class="circle" ></div>
						  <div id="c22" class="circle" ></div>
						  <div id="c23" class="circle" ></div>
						  <div id="c24" class="circle" ></div></div>
					</div>
					
					<p align="left"><b>Konacno:</b></p>
					
					<div class="row">
					
					  <div class="col-4" style="display:inline;">
					  <div class="row">
					     <div class="col-3" ><img id="25" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="26" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3"  ><img id="27" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 <div class="col-3" ><img id="28" src="http://localhost/SlagalicaIgniter/application/views/images/white.jpg" alt="skocko" width="100%" style="align:center;"></div>
						 </div>
					  </div>
					  <div class="col-1"></div>
					  <div class="col-4">
					   <b>Simboli:</b>
					      <div class="row">
						 
					     <div class="col-2" ><img id='id1' name="0" src="http://localhost/SlagalicaIgniter/application/views/images/Herc.png" alt="skocko" width="40px" style="align:center;" onclick="ubaci('Herc.png')"></div>
						 <div class="col-2" ><img id='id2' name="1" src="http://localhost/SlagalicaIgniter/application/views/images/Karo.png" alt="skocko" width="40px" style="align:center;" onclick="ubaci('Karo.png')"></div>
						 <div class="col-2"  ><img id='id3' name="2" src="http://localhost/SlagalicaIgniter/application/views/images/ODIN.png" alt="skocko" width="40px" style="align:center;" onclick="ubaci('Odin.png')"></div>
						 <div class="col-2" ><img id='id4' name="3" src="http://localhost/SlagalicaIgniter/application/views/images/Pik.png" alt="skocko" width="40px" style="align:center;" onclick="ubaci('Pik.png')"></div>
						  <div class="col-2" ><img id='id5' name="4" src="http://localhost/SlagalicaIgniter/application/views/images/Zvezda.jpg" alt="skocko" width="40px" style="align:center;" onclick="ubaci('Zvezda.jpg')"></div>
						   <div class="col-2" ><img id='id6' name="5" src="http://localhost/SlagalicaIgniter/application/views/images/Tref.png" alt="skocko" width="40px" style="align:center;" onclick="ubaci('Tref.png')"></div>
						 </div>
					  </div>
					</div>

        </div>

			<div class="col-2 text-center mt-sm-4">
				<form method="post" action="http://localhost/SlagalicaIgniter/KoZnaZnaController/KoZnaZna">
				    <input type="submit" id="sledecaIgra" class="btn btn-dark text-light" value="Sledeca igra" disabled=true>
				</form>
			</div>
		</div>

		<script>

		var poeni = 0;
			/**
			 * Herc - 0
			 * Karo - 1
			 * Odin - 2
			 * Pik - 3
			 * Zvezda - 4
			 * Tref - 5
			 */
			var br = 1;					
			var komb = 	new Array();
			
			var uneto = new Array();
			var mapaKomb = new Array();
				var mapaUnos = new Array();

				for (m=0;m<24;m++)
				{
					mapaKomb.push(0);
					mapaUnos.push(0);
				}

			for (j=0;j<4;j++)
			{
				komb.push(Math.floor(Math.random() * 6) );	
			}
			/*komb.push(0);
			komb.push(0);
			komb.push(0);
			komb.push(0);*/
			//alert(komb[0]+":"+komb[1]+":"+komb[2]+":"+komb[3]);
			function vrati()
			{
				
				if(br!=1 && br!=5 && br!=9 && br!=13 && br!=17 && br!=21 && br!=25)
				{
				var br1 = br-1;
				var slika = document.getElementById(br1).src;
				//alert(slika);
				if(slika != 'http://localhost/SlagalicaIgniter/application/views/images/white.jpg')
				{
					document.getElementById(br1).src = 'http://localhost/SlagalicaIgniter/application/views/images/white.jpg';
					br--;
					uneto.pop();
				}
				}
			}
			
			function ubaci(slikaName)
			{
				//alert(komb[0]+":"+komb[1]+":"+komb[2]+":"+komb[3]);
				var slika = document.getElementById(br);

				slika.src = 'http://localhost/SlagalicaIgniter/application/views/images/'+slikaName;

				switch (slikaName)
				{
							case 'Herc.png':
							uneto.push(0);
							break;

							case 'Karo.png':
							uneto.push(1);
							break;

							case 'Odin.png':
							uneto.push(2);
							break;
							
							case 'Pik.png':
							uneto.push(3);
							break;

							case 'Zvezda.jpg':
							uneto.push(4);
							break;

							case 'Tref.png':
							uneto.push(5);
							break;
				}

				br++;

				switch(br)
				{
					case 5:
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'none';
							}
							var dugme = document.getElementById('b1');
							dugme.disabled = false;
							dugme = document.getElementById('bb1');
							dugme.disabled = true;
							

							break;

							case 9:
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'none';
							}
							var dugme = document.getElementById('b2');
							dugme.disabled = false;
							dugme = document.getElementById('bb2');
							dugme.disabled = true;
							

							break;

							case 13:
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'none';
							}
							var dugme = document.getElementById('b3');
							dugme.disabled = false;
							dugme = document.getElementById('bb3');
							dugme.disabled = true;
							

							break;

							case 17:
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'none';
							}
							var dugme = document.getElementById('b4');
							dugme.disabled = false;
							dugme = document.getElementById('bb4');
							dugme.disabled = true;
							

							break;

							case 21:
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'none';
							}
							var dugme = document.getElementById('b5');
							dugme.disabled = false;
							dugme = document.getElementById('bb5');
							dugme.disabled = true;
							

							break;

							case 25:
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'none';
							}
							var dugme = document.getElementById('b6');
							dugme.disabled = false;
							dugme = document.getElementById('bb6');
							dugme.disabled = true;

							break;
				}
				
			}

			function enableAgain(id)
			{

				var dugme = document.getElementById(id);
				dugme.disabled = true;
				

				

				if(id=='b1')
				{
					dugme = document.getElementById('bb2');
							dugme.disabled = false;
					for (i=0;i<4;i++)
					{
						if (uneto[i]==komb[i])
						{
							document.getElementById('c'+(i+1)).style.backgroundColor = 'red';
							mapaKomb[i] = 1;
							mapaUnos[i] = 1;
						}

					}

					for (i=0;i<4;i++)
					{
						for (k=0;k<4;k++)
						{
							if (mapaKomb[i]!=1 && (komb[i]==uneto[k] && mapaUnos[k]!=1))
							{
								document.getElementById('c'+(i+1)).style.backgroundColor = 'yellow';
								mapaKomb[i] = 1;
								mapaUnos[k] = 1;
							}
						}
					}

					while(uneto.length > 0) {
   				 		uneto.pop();
					}

					var boje = new Array('empty','empty','empty','empty');

					var iter = 0;

					for (i=0;i<4;i++)
					{
						if (document.getElementById('c'+(i+1)).style.backgroundColor == 'red')
						{
							boje[iter++] = 'red';
						}
						else
						if (document.getElementById('c'+(i+1)).style.backgroundColor == 'yellow')
						{
							boje[iter++] = 'yellow';
						}
					}
					for (i=0;i<4;i++)
					{
						if (boje[i]=='red')
						{
							document.getElementById('c'+(i+1)).style.backgroundColor = 'red';
						}
						else
						if (boje[i]=='yellow')
						{
							document.getElementById('c'+(i+1)).style.backgroundColor = 'yellow';
						}
						else
							{
								document.getElementById('c'+(i+1)).style.backgroundColor = '#bbb';
							}
					}

					var flag = true;

					for (i=0;i<4;i++)
					{
						if (boje[i]!='red')
						{
							flag = false;
							break;
						}
					}

					
					if (flag == true)
					{				
                            dugme = document.getElementById('bb2');
							dugme.disabled = true;
							
							poeni = 15;	

							var xhttp = new XMLHttpRequest();

							xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send("igra=skocko&ukupno="+poeni);
							xhttp.onload = (e) =>	
							{

							}
							//parseint();

							nm= <?php echo $_SESSION['uk_poeni']?>;
                            elem = document.getElementById("broj_poena");

                            elem.value =  nm + poeni;
							
							for (p=1;p<7;p++)
							{
								 var picture = document.getElementById('id'+p);
							
								 picture.style.pointerEvents =  "none";
							}

							 document.getElementById('sledecaIgra').disabled = false;

							for (i=25;i<29;i++)
							{
								switch(komb[i-25])
								{
											case 0:
											document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Herc.png";
											break;

											case 1:
											document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Karo.png";
											break;

											case 2:
											document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/ODIN.png";
											break;

											case 3:
											document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Pik.png";
											break;

											case 4:
											document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Zvezda.jpg";
											break;

											case 5:
											document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Tref.png";
											break;

										
									
								}
							}

							

					}
					else
						{
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'auto';
							}
						}
				}
				else
					if(id=='b2')
					{
						dugme = document.getElementById('bb3');
							dugme.disabled = false;
						for (i=4;i<8;i++)
						{
							if (uneto[i-4]==komb[i-4])
							{
								document.getElementById('c'+(i+1)).style.backgroundColor = 'red';
								mapaKomb[i] = 1;
								mapaUnos[i] = 1;
							}

						}

						for (i=4;i<8;i++)
						{
							for (k=4;k<8;k++)
							{
								if (mapaKomb[i]!=1 && (komb[i-4]==uneto[k-4] && mapaUnos[k]!=1))
								{
									document.getElementById('c'+(i+1)).style.backgroundColor = 'yellow';
									mapaKomb[i] = 1;
									mapaUnos[k] = 1;
								}
							}
						}

						while(uneto.length > 0) {
   				 		uneto.pop();
						}
						var boje = new Array('empty','empty','empty','empty');

					var iter = 0;

					for (i=0;i<4;i++)
					{
						if (document.getElementById('c'+(i+1 +4)).style.backgroundColor == 'red')
						{
							boje[iter++] = 'red';
						}
						else
						if (document.getElementById('c'+(i+1 +4)).style.backgroundColor == 'yellow')
						{
							boje[iter++] = 'yellow';
						}
					}
					for (i=0;i<4;i++)
					{
						if (boje[i]=='red')
						{
							document.getElementById('c'+(i+1 +4)).style.backgroundColor = 'red';
						}
						else
						if (boje[i]=='yellow')
						{
							document.getElementById('c'+(i+1 +4)).style.backgroundColor = 'yellow';
						}
						else
							{
								document.getElementById('c'+(i+1 +4)).style.backgroundColor = '#bbb';
							}
					}

					var flag = true;

						for (i=0;i<4;i++)
						{
							if (boje[i]!='red')
							{
								flag = false;
								break;
							}
						}

						if (flag == true)
						{
							dugme = document.getElementById('bb3');
							dugme.disabled = true;

							poeni = 14;
							
							var xhttp = new XMLHttpRequest();

							xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send("igra=skocko&ukupno="+poeni);
							xhttp.onload = (e) =>	
							{

							}

							nm= <?php echo $_SESSION['uk_poeni']?>;
                            elem = document.getElementById("broj_poena");

                            elem.value =  nm + poeni;
								for (i=1;i<7;i++)
								{
									document.getElementById('id'+i).style.pointerEvents = 'none';
								}

								document.getElementById('sledecaIgra').disabled = false;

								for (i=25;i<29;i++)
								{
									switch(komb[i-25])
									{
												case 0:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Herc.png";
												//alert("Herc");
												break;

												case 1:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Karo.png";
												break;

												case 2:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/ODIN.png";
												break;

												case 3:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Pik.png";
												break;

												case 4:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Zvezda.jpg";
												break;

												case 5:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Tref.png";
												break;
	
												
										
									}
								}

						}
						else
						{
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'auto';
							}
						}
					}
					else
						if(id=='b3')
						{
							dugme = document.getElementById('bb4');
							dugme.disabled = false;
						for (i=8;i<12;i++)
						{
							if (uneto[i-8]==komb[i-8])
							{
								document.getElementById('c'+(i+1)).style.backgroundColor = 'red';
								mapaKomb[i] = 1;
								mapaUnos[i] = 1;
							}

						}

						for (i=8;i<12;i++)
						{
							for (k=8;k<12;k++)
							{
								if (mapaKomb[i]!=1 && (komb[i-8]==uneto[k-8] && mapaUnos[k]!=1))
								{
									document.getElementById('c'+(i+1)).style.backgroundColor = 'yellow';
									mapaKomb[i] = 1;
									mapaUnos[k] = 1;
								}
							}
						}

						while(uneto.length > 0) {
   				 		uneto.pop();
					}
					var boje = new Array('empty','empty','empty','empty');

					var iter = 0;

					for (i=0;i<4;i++)
					{
						if (document.getElementById('c'+(i+1 +8)).style.backgroundColor == 'red')
						{
							boje[iter++] = 'red';
						}
						else
						if (document.getElementById('c'+(i+1 +8)).style.backgroundColor == 'yellow')
						{
							boje[iter++] = 'yellow';
						}
					}
					for (i=0;i<4;i++)
					{
						if (boje[i]=='red')
						{
							document.getElementById('c'+(i+1 +8)).style.backgroundColor = 'red';
						}
						else
						if (boje[i]=='yellow')
						{
							document.getElementById('c'+(i+1 +8)).style.backgroundColor = 'yellow';
						}
						else
							{
								document.getElementById('c'+(i+1 +8)).style.backgroundColor = '#bbb';
							}
					}

					var flag = true;

						for (i=0;i<4;i++)
						{
							if (boje[i]!='red')
							{
								flag = false;
								break;
							}
						}

						if (flag == true)
						{
							dugme = document.getElementById('bb4');
							dugme.disabled = true;

							poeni = 13;

							var xhttp = new XMLHttpRequest();

							xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send("igra=skocko&ukupno="+poeni);
							xhttp.onload = (e) =>	
							{

							}

							nm= <?php echo $_SESSION['uk_poeni']?>;
                            elem = document.getElementById("broj_poena");

                            elem.value =  nm + poeni;
								for (i=1;i<7;i++)
								{
									var picture = document.getElementById('id'+i);

									picture.style.pointerEvents = 'none';
								}

								document.getElementById('sledecaIgra').disabled = false;

								for (i=25;i<29;i++)
								{
									switch(komb[i-25])
									{
												case 0:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Herc.png";
												break;

												case 1:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Karo.png";
												break;

												case 2:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/ODIN.png";
												break;

												case 3:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Pik.png";
												break;

												case 4:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Zvezda.jpg";
												break;

												case 5:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Tref.png";
												break;

											
										
									}
								}

								

						}
						else
						{
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'auto';
							}
						}
					}
					else
					if(id=='b4')
						{
							dugme = document.getElementById('bb5');
							dugme.disabled = false;
						for (i=12;i<16;i++)
						{
							if (uneto[i-12]==komb[i-12])
							{
								document.getElementById('c'+(i+1)).style.backgroundColor = 'red';
								mapaKomb[i] = 1;
								mapaUnos[i] = 1;
							}

						}
						for (i=12;i<16;i++)
						{
							for (k=12;k<16;k++)
							{
								if (mapaKomb[i]!=1 && (komb[i-12]==uneto[k-12] && mapaUnos[k]!=1))
								{
									document.getElementById('c'+(i+1)).style.backgroundColor = 'yellow';
									mapaKomb[i] = 1;
									mapaUnos[k] = 1;
								}
							}
						}

						while(uneto.length > 0) {
   				 		uneto.pop();
					}
					var boje = new Array('empty','empty','empty','empty');

					var iter = 0;

					for (i=0;i<4;i++)
					{
						if (document.getElementById('c'+(i+1 +12)).style.backgroundColor == 'red')
						{
							boje[iter++] = 'red';
						}
						else
						if (document.getElementById('c'+(i+1 +12)).style.backgroundColor == 'yellow')
						{
							boje[iter++] = 'yellow';
						}
					}
					for (i=0;i<4;i++)
					{
						if (boje[i]=='red')
						{
							document.getElementById('c'+(i+1 +12)).style.backgroundColor = 'red';
						}
						else
						if (boje[i]=='yellow')
						{
							document.getElementById('c'+(i+1 +12)).style.backgroundColor = 'yellow';
						}
						else
							{
								document.getElementById('c'+(i+1 +12)).style.backgroundColor = '#bbb';
							}
					}

					var flag = true;

for (i=0;i<4;i++)
{
	if (boje[i]!='red')
	{
		flag = false;
		break;
	}
}

if (flag == true)
{
	dugme = document.getElementById('bb5');
							dugme.disabled = true;

	poeni = 12;
	var xhttp = new XMLHttpRequest();

							xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send("igra=skocko&ukupno="+poeni);
							xhttp.onload = (e) =>	
							{

							}

							nm= <?php echo $_SESSION['uk_poeni']?>;
                            elem = document.getElementById("broj_poena");

                            elem.value =  nm + poeni;
		for (i=1;i<7;i++)
		{
			var picture = document.getElementById('id'+i);

			picture.style.pointerEvents = 'none';
		}

		document.getElementById('sledecaIgra').disabled = false;

		for (i=25;i<29;i++)
		{
			switch(komb[i-25])
			{
						case 0:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Herc.png";
						break;

						case 1:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Karo.png";
						break;

						case 2:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/ODIN.png";
						break;

						case 3:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Pik.png";
						break;

						case 4:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Zvezda.jpg";
						break;

						case 5:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Tref.png";
						break;

					
				
			}
		}

							

}
else
{
	for (i=1;i<7;i++)
	{
		var picture = document.getElementById('id'+i);

		picture.style.pointerEvents = 'auto';
	}
}
					}
				else
					if(id=='b5')
						{
							dugme = document.getElementById('bb6');
							dugme.disabled = false;
						for (i=16;i<20;i++)
						{
							if (uneto[i-16]==komb[i-16])
							{
								document.getElementById('c'+(i+1)).style.backgroundColor = 'red';
								mapaKomb[i] = 1;
								mapaUnos[i] = 1;
							}

						}

						for (i=16;i<20;i++)
						{
							for (k=16;k<20;k++)
							{
								if (mapaKomb[i]!=1 && (komb[i-16]==uneto[k-16] && mapaUnos[k]!=1))
								{
									document.getElementById('c'+(i+1)).style.backgroundColor = 'yellow';
									mapaKomb[i] = 1;
									mapaUnos[k] = 1;
								}
							}
						}

						while(uneto.length > 0) {
   				 		uneto.pop();
					}
					var boje = new Array('empty','empty','empty','empty');

					var iter = 0;

					for (i=0;i<4;i++)
					{
						if (document.getElementById('c'+(i+1+16)).style.backgroundColor == 'red')
						{
							boje[iter++] = 'red';
						}
						else
						if (document.getElementById('c'+(i+1+16)).style.backgroundColor == 'yellow')
						{
							boje[iter++] = 'yellow';
						}
					}
					for (i=0;i<4;i++)
					{
						if (boje[i]=='red')
						{
							document.getElementById('c'+(i+1+16)).style.backgroundColor = 'red';
						}
						else
						if (boje[i]=='yellow')
						{
							document.getElementById('c'+(i+1+16)).style.backgroundColor = 'yellow';
						}
						else
							{
								document.getElementById('c'+(i+1+16)).style.backgroundColor = '#bbb';
							}
					}

					var flag = true;

						for (i=0;i<4;i++)
						{
							if (boje[i]!='red')
							{
								flag = false;
								break;
							}
						}

						if (flag == true)
						{
							dugme = document.getElementById('bb6');
							dugme.disabled = true;

							poeni = 11;
							var xhttp = new XMLHttpRequest();

							xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send("igra=skocko&ukupno="+poeni);
							xhttp.onload = (e) =>	
							{

							}

							nm= <?php echo $_SESSION['uk_poeni']?>;
                            elem = document.getElementById("broj_poena");

                            elem.value =  nm + poeni;

								for (i=1;i<7;i++)
								{
									var picture = document.getElementById('id'+i);

									picture.style.pointerEvents = 'none';
								}

								document.getElementById('sledecaIgra').disabled = false;

								for (i=25;i<29;i++)
								{
									switch(komb[i-25])
									{
												case 0:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Herc.png";
												break;

												case 1:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Karo.png";
												break;

												case 2:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/ODIN.png";
												break;

												case 3:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Pik.png";
												break;

												case 4:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Zvezda.jpg";
												break;

												case 5:
												document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Tref.png";
												break;

											
										
									}
								}

								

						}
						else
						{
							for (i=1;i<7;i++)
							{
								var picture = document.getElementById('id'+i);

								picture.style.pointerEvents = 'auto';
							}
						}
					}
					else if(id=='b6')
						{
							
							for (i=20;i<24;i++)
							{
								if (uneto[i-20]==komb[i-20])
								{
									document.getElementById('c'+(i+1)).style.backgroundColor = 'red';
									mapaKomb[i] = 1;
									mapaUnos[i] = 1;
								}

							}

							for (i=20;i<24;i++)
							{
								for (k=20;k<24;k++)
								{
									if (mapaKomb[i]!=1 && (komb[i-20]==uneto[k-20] && mapaUnos[k]!=1))
									{
										document.getElementById('c'+(i+1)).style.backgroundColor = 'yellow';
										mapaKomb[i] = 1;
										mapaUnos[k] = 1;
									}
								}
						}

						while(uneto.length > 0) {
   				 		uneto.pop();
					}
					var boje = new Array('empty','empty','empty','empty');

					var iter = 0;

					for (i=0;i<4;i++)
					{
						if (document.getElementById('c'+(i+1+20)).style.backgroundColor == 'red')
						{
							boje[iter++] = 'red';
						}
						else
						if (document.getElementById('c'+(i+1+20)).style.backgroundColor == 'yellow')
						{
							boje[iter++] = 'yellow';
						}
					}
					for (i=0;i<4;i++)
					{
						if (boje[i]=='red')
						{
							document.getElementById('c'+(i+1+20)).style.backgroundColor = 'red';
						}
						else
						if (boje[i]=='yellow')
						{
							document.getElementById('c'+(i+1+20)).style.backgroundColor = 'yellow';
						}
						else
							{
								document.getElementById('c'+(i+1+20)).style.backgroundColor = '#bbb';
							}
					}
					var flag = true;

for (i=0;i<4;i++)
{
	if (boje[i]!='red')
	{
		flag = false;
		break;
	}
}


		for (i=1;i<7;i++)
		{
			var picture = document.getElementById('id'+i);

			picture.style.pointerEvents = 'none';
		}

		document.getElementById('sledecaIgra').disabled = false;

		for (i=25;i<29;i++)
		{
			switch(komb[i-25])
			{
						case 0:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Herc.png";
						break;

						case 1:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Karo.png";
						break;

						case 2:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/ODIN.png";
						break;

						case 3:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Pik.png";
						break;

						case 4:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Zvezda.jpg";
						break;

						case 5:
						document.getElementById(i).src = "http://localhost/SlagalicaIgniter/application/views/images/Tref.png";
						break;

					}					
				
			}
			if (flag) 
			{
				poeni = 10; 
							var xhttp = new XMLHttpRequest();

							xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send("igra=skocko&ukupno="+poeni);
							xhttp.onload = (e) =>	
							{

							}

							nm= <?php echo $_SESSION['uk_poeni']?>;
                            elem = document.getElementById("broj_poena");

                            elem.value =  nm + poeni;
				}
			else
			{
				//poeni = 0;
				            var brojac1 = 0;
							for (i=0;i<4;i++)
                            {
	                          if (boje[i]=='red')
	                           {
	                          	    brojac1++;
	                           }
                            }
							if(brojac1==3) poeni = 3;
							else if(brojac1==2) poeni = 2;
							else if(brojac1==1) poeni = 1;
							else if(brojac1==0) poeni = 0;
							var xhttp = new XMLHttpRequest();

							xhttp.open("POST", "http://localhost/SlagalicaIgniter/PoeniController/update");
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send("igra=skocko&ukupno="+poeni);
							xhttp.onload = (e) =>	
							{

							}

							nm= <?php echo $_SESSION['uk_poeni']?>;
                            elem = document.getElementById("broj_poena");

                            elem.value =  nm + poeni;
			}	
					}

			}

			/**
			 * Herc - 0
			 * Karo - 1
			 * Odin - 2
			 * Pik - 3
			 * Zvezda - 4
			 * Tref - 5
			 */
		</script>
</div>