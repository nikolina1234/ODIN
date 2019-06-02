
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
										
							<table class="table table-hover">
								<tr>
									<th class="text-success text-center">
										<?php echo "Dobro došli !";?>
									</th>
	
								</tr>
								
								<tr>
									
									<td align="center">
										<form method="post" action="http://localhost/SlagalicaIgniter/SlagalicaController">
											<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Igraj">
										</form>
									</td>
								</tr>
								
								<tr>
									
									<td align="center">
										<form method="post" action="http://localhost/SlagalicaIgniter/UserController/rangLista">									
											<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Rang lista">
										</form>
									</td>
								</tr>
							</table>
						
						
				</div>
			</div>
		</div>
