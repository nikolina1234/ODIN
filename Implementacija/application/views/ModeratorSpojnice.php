
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Moderator -> Spojnice</i></h3>					
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
					
						
				<form method="post" action="http://localhost/SlagalicaIgniter/ModeratorController/ubaciSpojnice">
							<table class="table table-hover">
                                <tr>
                                   <td colspan="2" align="center" >
										<input class = "<?php if (isset($_SESSION['opisklasa']))
										{
											echo $_SESSION['opisklasa'];
											unset($_SESSION['opisklasa']);
										}
										?>"
										
										value="<?php if (isset($_SESSION['opisval']))
										{
											echo $_SESSION['opisval'];
											unset($_SESSION['opisval']);
										}
										?>"
										type="text" name="opis">
								   </td>
								</tr>

								<tr>
                                   <td align="left">
										<input class="<?php if (isset($_SESSION['levo1']))
										{
											echo $_SESSION['levo1'];
											unset($_SESSION['levo1']);
										}
										?>" 
										value="<?php if (isset($_SESSION['levo1val']))
										{
											echo $_SESSION['levo1val'];
											unset($_SESSION['levo1val']);
										}
										?>"
										type="text" name="levo1">
								   </td>

								   <td align="right">
										<input class="<?php if (isset($_SESSION['desno1']))
										{
											echo $_SESSION['desno1'];
											unset($_SESSION['desno1']);
										}
										?>" 
										value="<?php if (isset($_SESSION['desno1val']))
										{
											echo $_SESSION['desno1val'];
											unset($_SESSION['desno1val']);
										}
										?>"
										type="text" name="desno1">
								   </td>
								</tr>

								<tr>
                                   <td align="left">
										<input class="<?php if (isset($_SESSION['levo2']))
										{
											echo $_SESSION['levo2'];
											unset($_SESSION['levo2']);
										}
										?>"
										value="<?php if (isset($_SESSION['levo2val']))
										{
											echo $_SESSION['levo2val'];
											unset($_SESSION['levo2val']);
										}
										?>"
										 type="text" name="levo2">
								   </td>

								   <td align="right">
										<input class="<?php if (isset($_SESSION['desno2']))
										{
											echo $_SESSION['desno2'];
											unset($_SESSION['desno2']);
										}
										?>"
										value="<?php if (isset($_SESSION['desno2val']))
										{
											echo $_SESSION['desno2val'];
											unset($_SESSION['desno2val']);
										}
										?>"
										 type="text" name="desno2">
								   </td>
								</tr>

								<tr>
                                   <td align="left">
										<input class="<?php if (isset($_SESSION['levo3']))
										{
											echo $_SESSION['levo3'];
											unset($_SESSION['levo3']);
										}
										?>" 
										value="<?php if (isset($_SESSION['levo3val']))
										{
											echo $_SESSION['levo3val'];
											unset($_SESSION['levo3val']);
										}
										?>"
										type="text" name="levo3">
								   </td>

								   <td align="right">
										<input class="<?php if (isset($_SESSION['desno3']))
										{
											echo $_SESSION['desno3'];
											unset($_SESSION['desno3']);
										}
										?>"
										value="<?php if (isset($_SESSION['desno3val']))
										{
											echo $_SESSION['desno3val'];
											unset($_SESSION['desno3val']);
										}
										?>"
										 type="text" name="desno3">
								   </td>
								</tr>

								<tr>
                                   <td align="left">
										<input class="<?php if (isset($_SESSION['levo4']))
										{
											echo $_SESSION['levo4'];
											unset($_SESSION['levo4']);
										}
										?>"
										value="<?php if (isset($_SESSION['levo4val']))
										{
											echo $_SESSION['levo4val'];
											unset($_SESSION['levo4val']);
										}
										?>"
										type="text" name="levo4">
								   </td>

								   <td align="right">
										<input class="<?php if (isset($_SESSION['desno4']))
										{
											echo $_SESSION['desno4'];
											unset($_SESSION['desno4']);
										}
										?>" 
										value="<?php if (isset($_SESSION['desno4val']))
										{
											echo $_SESSION['desno4val'];
											unset($_SESSION['desno4val']);
										}
										?>"
										type="text" name="desno4">
								   </td>
								</tr>

								<tr>
                                   <td align="left">
										<input class="<?php if (isset($_SESSION['levo5']))
										{
											echo $_SESSION['levo5'];
											unset($_SESSION['levo5']);
										}
										?>" 
										value="<?php if (isset($_SESSION['levo5val']))
										{
											echo $_SESSION['levo5val'];
											unset($_SESSION['levo5val']);
										}
										?>"
										type="text" name="levo5">
								   </td>

								   <td align="right">
										<input class="<?php if (isset($_SESSION['desno5']))
										{
											echo $_SESSION['desno5'];
											unset($_SESSION['desno5']);
										}
										?>" 
										value="<?php if (isset($_SESSION['desno5val']))
										{
											echo $_SESSION['desno5val'];
											unset($_SESSION['desno5val']);
										}
										?>"
										type="text" name="desno5">
								   </td>
								</tr>

								<tr>
                                   <td colspan="2" align="center">
										<input class="btn btn-secondary btn-outline-dark btn-block text-light" type="submit" value="Commit">
								   </td>
								</tr>
							</table>
				</form>			
						
						
				</div>
			</div>
		</div>

