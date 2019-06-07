<!--
    @author Igor Durić 0646/16
-->
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Admin</i></h3>					
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
										Dobro došli, Admin!
									</th>
	
								</tr>
								
								<tr>
									
									<td align="center">
											<form name="f1" action="http://localhost/SlagalicaIgniter/AdminController/prikazBaze" method="post">
												<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Prikaz baze">
											</form>
									</td>
								</tr>
								
								<tr>
									
									<td align="center">
										<form name="f2" action="http://localhost/SlagalicaIgniter/AdminController/prikazModeratora" method="post">
											<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Prikaz moderatora">
										</form>
									</td>
								</tr>
								
								<tr>
									
									<td align="center">
										<form name="f3" action="http://localhost/SlagalicaIgniter/AdminController/prikazRegistrovanih" method="post">
											<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Prikaz registrovanih">
										</form>
									</td>
								</tr>
								
								<tr>
									
									<td align="center">
										<form name="f4" action="http://localhost/SlagalicaIgniter/AdminController/korZahtevi" method="post">
											<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Korisnički zahtevi">
										</form>
									</td>
								</tr>
							</table>
						
						
				</div>
			</div>
		</div>

