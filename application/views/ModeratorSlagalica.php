
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Moderator -> Slagalica</i></h3>					
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
					
						
				<form method="post" action="http://localhost/SlagalicaIgniter/ModeratorController/ubaciRec">
							<table class="table table-hover">
                                <tr>
                                    <td align="center"> 
										Reč:
                                    </td>

									<td align="center"> 
										<input class="<?php if (isset( $_SESSION['class'])) {echo  $_SESSION['class']; unset( $_SESSION['class']);}?>" type="text" name="rec">
                                    </td>
                                </tr>

								<tr>
									<td colspan="2" align="center">
										
											<input class="btn btn-secondary btn-outline-dark text-light btn-block" type="submit" value="Commit">
										
									</td>
								</tr>
							</table>
				</form>			
						
						
				</div>
			</div>
		</div>

