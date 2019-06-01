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
            <div class="form-group">
                <label for="name" class="control-label">Ime korisnika</label>
                <input type="number" value='' class="form-control" id="broj_poena" readonly style = "background-color: blue;">
				<br>
				<button class="btn btn-secondary">Start</button>
            </div>
                  </div>
		
		
		
		    <div class="col-8 text-center border border-dark mt-sm-4">
			     <br>
			      <table class="table" >
				      <tr class="table-info" height="100px">
					     <td colspan="4" align="center" ><b>Pitanje:</b>
						      <br>
						 	<p>
						   			<?php
										if (isset($_SESSION['koznazna']))
										{
											echo $_SESSION['koznazna']->pitanje;
										}
									?>
						   </p>
						 </td>
					  </tr>
					  <tr>
					
						 <td align="center" colspan="2">A &nbsp; <input type="button" style="width:50%;"
						 value=
						 "<?php
							 echo $_SESSION['odgovori'][0];
						 ?>"
						 
						  class="btn btn-secondary"></td>
						 <td align="center" colspan="2">B &nbsp; <input type="button" style="width:50%;"
						 value=
						 "<?php
							echo $_SESSION['odgovori'][1];
						 ?>"
						 
						  class="btn btn-secondary"></td>
						
					  </tr>
					  <tr>
					     
						  <td align="center" colspan="2">C &nbsp;<input type="button"  style="width:50%;"
						  value=
						 "<?php
							echo $_SESSION['odgovori'][2];
						 ?>"
						  
						  class="btn btn-secondary"></td>
						  <td align="center" colspan="2">D &nbsp; <input type="button"  style="width:50%;"
						  value=
						 "<?php
							echo $_SESSION['odgovori'][3];
						 ?>"
						  
						  class="btn btn-secondary"></td>
						  
					  </tr>
				  </table>
			</div>
			<div class="col-2" align="center">
			    <br>
			    <button class="btn btn-primary">Ne znam</button>
			</div>
		</div>
</div>