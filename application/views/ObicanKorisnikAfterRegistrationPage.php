
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Običan Korisnik</i></h3>					
				</div>
				
				<div class="col my-auto text-center">
					<form name="login" action="http://localhost/SlagalicaIgniter/" method="post">
						
							<input class="btn btn-secondary btn-outline-dark btn-lg " type="submit" value="Izađi">
						
					</form>
				</div>
				
			</div>
			
			<div class="row h-57" style="background-color:#F0F0F0">
				<div class="col-7">
					<img class="img img-fluid mx-auto d-block" style="width:60%;height:auto;" src="http://localhost/SlagalicaIgniter/images/ODIN.png">
					
					<blockquote class="blockquote text-center">
						<p class="mb-0"><i>"Znanje je otrov koji u velikim količinama leči, a u malim ubija."</i></p>
					</blockquote>
				</div>
			
				<div class="col-5 text-center border border-dark">
					
						<form name="formaobkor" action="http://localhost/SlagalicaIgniter/UserController/authenticateGameplayName" method="post">
						
							<table class="table table-hover">
								<tr>
									<th class="text-success text-center">
										Uspešna registracija!
									</th>
	
								</tr>
								
								<tr>
									<td align="center">
										Unesite ime koje ćete koristiti tokom igranja:
									</td>
								<td>
								<tr>
									
									<td align="center">
										<input type="text" class="<?php if (isset($_POST['textboxclass'])) {echo $_POST['textboxclass']; unset($_POST['textboxclass']); } ?>" name="gameplayname">
									</td>
								</tr>
								
								<tr>
									
									<td align="center">
										<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Nastavi">
									</td>
								</tr>
							</table>
						
						</form>
				</div>
			</div>
		</div>
