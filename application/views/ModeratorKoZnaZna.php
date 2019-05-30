
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Moderator -> Ko Zna Zna</i></h3>					
				</div>
				
				<div class="col-2 my-auto text-center">
					<form name="login" action="http://localhost/SlagalicaIgniter/" method="post">	
							<input class="btn btn-secondary btn-outline-dark btn-lg " type="submit" value="Izađi">
					</form>

					
				</div>
				<div class="col-2 my-auto text-cente">		
					<form name="getback" action="http://localhost/SlagalicaIgniter/ModeratorController/backToHome" method="post">
						<input class="btn btn-secondary btn-outline-dark btn-lg " type="submit" value="Nazad">
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
					
						
				<form method="post" action="http://localhost/SlagalicaIgniter/ModeratorController/ubaciKoZnaZna">
							<table class="table table-hover">
								<tr>
									<td align="center" colspan="2">
										<b>Pitanje:</b> <br>	<input 
										
										class="<?php if (isset($_SESSION['pitanjeklasa']))
										{
											echo $_SESSION['pitanjeklasa'];
											unset($_SESSION['pitanjeklasa']);
										}
										?>"

										value="<?php if (isset($_SESSION['pitanjeval']))
										{
											echo $_SESSION['pitanjeval'];
											unset($_SESSION['pitanjeval']);
										}
										?>"
										type="text" name="pitanje">
									</td>
							   </tr>

							   <tr>
									<td align="center">
									Tačan:	<input 
									class="<?php if (isset($_SESSION['tacanklasa']))
										{
											echo $_SESSION['tacanklasa'];
											unset($_SESSION['tacanklasa']);
										}
										?>"
										value="<?php if (isset($_SESSION['tacanval']))
										{
											echo $_SESSION['tacanval'];
											unset($_SESSION['tacanval']);
										}
										?>"
									type="text" name="tacan">
									</td>

									<td>
									Netačan:	<input 
									class="<?php if (isset($_SESSION['netacan1klasa']))
										{
											echo $_SESSION['netacan1klasa'];
											unset($_SESSION['netacan1klasa']);
										}
										?>"
										value="<?php if (isset($_SESSION['netacan1val']))
										{
											echo $_SESSION['netacan1val'];
											unset($_SESSION['netacan1val']);
										}
										?>"
									type="text" name="netacan1">
									</td>
							   </tr>

							   <tr>
							   <td align="center">
							   		Netačan:	<input 
									   class="<?php if (isset($_SESSION['netacan2klasa']))
										{
											echo $_SESSION['netacan2klasa'];
											unset($_SESSION['netacan2klasa']);
										}
										?>"
										value="<?php if (isset($_SESSION['netacan2val']))
										{
											echo $_SESSION['netacan2val'];
											unset($_SESSION['netacan2val']);
										}
										?>"
									   type="text" name="netacan2">
									</td>

									<td>
									Netačan:	<input 
									class="<?php if (isset($_SESSION['netacan3klasa']))
										{
											echo $_SESSION['netacan3klasa'];
											unset($_SESSION['netacan3klasa']);
										}
										?>"
										value="<?php if (isset($_SESSION['netacan3val']))
										{
											echo $_SESSION['netacan3val'];
											unset($_SESSION['netacan3val']);
										}
										?>"
									type="text" name="netacan3">
									</td>
							   </tr>

							   <tr>
									<td align="center" colspan="2">
										<input class="btn btn-secondary btn-outline-dark btn-block text-light " type="submit" value="Commit">
									</td>
							   </tr>
							</table>
				</form>			
						
						
				</div>
			</div>
		</div>

