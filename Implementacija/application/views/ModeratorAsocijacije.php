
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Moderator -> Asocijacije</i></h3>					
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
					
						
				<form method="post" action="http://localhost/SlagalicaIgniter/ModeratorController/ubaciAsocijacije">
							<table class="table table-hover">
							    <tr>
								    <td align="left">
									A1<input class="<?php if (isset($_SESSION['a1']))
										{
											echo $_SESSION['a1'];
											unset($_SESSION['a1']);
										}
										?>" 
										value="<?php if (isset($_SESSION['a1val']))
										{
											echo $_SESSION['a1val'];
											unset($_SESSION['a1val']);
										}
										?>"
										type="text" name="a1">
									
									</td>
									<td align="right">
									B1<input class="<?php if (isset($_SESSION['b1']))
										{
											echo $_SESSION['b1'];
											unset($_SESSION['b1']);
										}
										?>" 
										value="<?php if (isset($_SESSION['b1val']))
										{
											echo $_SESSION['b1val'];
											unset($_SESSION['b1val']);
										}
										?>"
										type="text" name="b1">
									</td>
								</tr>
								
								
								<tr>
								    <td align="left">
									A2<input class="<?php if (isset($_SESSION['a2']))
										{
											echo $_SESSION['a2'];
											unset($_SESSION['a2']);
										}
										?>" 
										value="<?php if (isset($_SESSION['a2val']))
										{
											echo $_SESSION['a2val'];
											unset($_SESSION['a2val']);
										}
										?>"
										type="text" name="a2">
									
									</td>
									<td align="right">
									B2<input class="<?php if (isset($_SESSION['b2']))
										{
											echo $_SESSION['b2'];
											unset($_SESSION['b2']);
										}
										?>" 
										value="<?php if (isset($_SESSION['b2val']))
										{
											echo $_SESSION['b2val'];
											unset($_SESSION['b2val']);
										}
										?>"
										type="text" name="b2">
									</td>
								</tr>
								
								
								
								
								<tr>
								    <td align="left">
									A3<input class="<?php if (isset($_SESSION['a3']))
										{
											echo $_SESSION['a3'];
											unset($_SESSION['a3']);
										}
										?>" 
										value="<?php if (isset($_SESSION['a3val']))
										{
											echo $_SESSION['a3val'];
											unset($_SESSION['a3val']);
										}
										?>"
										type="text" name="a3">
									
									</td>
									<td align="right">
									B3<input class="<?php if (isset($_SESSION['b3']))
										{
											echo $_SESSION['b3'];
											unset($_SESSION['b3']);
										}
										?>" 
										value="<?php if (isset($_SESSION['b3val']))
										{
											echo $_SESSION['b3val'];
											unset($_SESSION['b3val']);
										}
										?>"
										type="text" name="b3">
									</td>
								</tr>
								
								
								<tr>
								    <td align="left">
									A4<input class="<?php if (isset($_SESSION['a4']))
										{
											echo $_SESSION['a4'];
											unset($_SESSION['a4']);
										}
										?>" 
										value="<?php if (isset($_SESSION['a4val']))
										{
											echo $_SESSION['a4val'];
											unset($_SESSION['a4val']);
										}
										?>"
										type="text" name="a4">
									
									</td>
									<td align="right">
									B4<input class="<?php if (isset($_SESSION['b4']))
										{
											echo $_SESSION['b4'];
											unset($_SESSION['b4']);
										}
										?>" 
										value="<?php if (isset($_SESSION['b4val']))
										{
											echo $_SESSION['b4val'];
											unset($_SESSION['b4val']);
										}
										?>"
										type="text" name="b4">
									</td>
								</tr>
								
								
								<tr>
								    <td align="left">
									A<input class="<?php if (isset($_SESSION['a_konacno']))
										{
											echo $_SESSION['a_konacno'];
											unset($_SESSION['a_konacno']);
										}
										?>" 
										value="<?php if (isset($_SESSION['a_konacnoval']))
										{
											echo $_SESSION['a_konacnoval'];
											unset($_SESSION['a_konacnoval']);
										}
										?>"
										type="text" name="a_konacno">
									
									</td>
									<td align="right">
									B<input class="<?php if (isset($_SESSION['b_konacno']))
										{
											echo $_SESSION['b_konacno'];
											unset($_SESSION['b_konacno']);
										}
										?>" 
										value="<?php if (isset($_SESSION['b_konacnoval']))
										{
											echo $_SESSION['b_konacnoval'];
											unset($_SESSION['b_konacnoval']);
										}
										?>"
										type="text" name="b_konacno">
									</td>
								</tr>
								
								
								
                                <tr>
                                   <td colspan="2" align="center" >
									Konačno:	<input class = "<?php if (isset($_SESSION['asoc_konacnoklasa']))
										{
											echo $_SESSION['asoc_konacnoklasa'];
											unset($_SESSION['asoc_konacnoklasa']);
										}
										?>"
										
										value="<?php if (isset($_SESSION['asoc_konacnoval']))
										{
											echo $_SESSION['asoc_konacnoval'];
											unset($_SESSION['asoc_konacnoval']);
										}
										?>"
										type="text" name="asoc_konacno">
								   </td>
								</tr>
								
								
								<tr>
								    <td align="left">
									C<input class="<?php if (isset($_SESSION['c_konacno']))
										{
											echo $_SESSION['c_konacno'];
											unset($_SESSION['c_konacno']);
										}
										?>" 
										value="<?php if (isset($_SESSION['c_konacnoval']))
										{
											echo $_SESSION['c_konacnoval'];
											unset($_SESSION['c_konacnoval']);
										}
										?>"
										type="text" name="c_konacno">
									
									</td>
									<td align="right">
									D<input class="<?php if (isset($_SESSION['d_konacno']))
										{
											echo $_SESSION['d_konacno'];
											unset($_SESSION['d_konacno']);
										}
										?>" 
										value="<?php if (isset($_SESSION['d_konacnoval']))
										{
											echo $_SESSION['d_konacnoval'];
											unset($_SESSION['d_konacnoval']);
										}
										?>"
										type="text" name="d_konacno">
									</td>
								</tr>
								
								
								<tr>
								    <td align="left">
									C4<input class="<?php if (isset($_SESSION['c4']))
										{
											echo $_SESSION['c4'];
											unset($_SESSION['c4']);
										}
										?>" 
										value="<?php if (isset($_SESSION['c4val']))
										{
											echo $_SESSION['c4val'];
											unset($_SESSION['c4val']);
										}
										?>"
										type="text" name="c4">
									
									</td>
									<td align="right">
									D4<input class="<?php if (isset($_SESSION['d4']))
										{
											echo $_SESSION['d4'];
											unset($_SESSION['d4']);
										}
										?>" 
										value="<?php if (isset($_SESSION['d4val']))
										{
											echo $_SESSION['d4val'];
											unset($_SESSION['d4val']);
										}
										?>"
										type="text" name="d4">
									</td>
								</tr>
								
								<tr>
								    <td align="left">
									C3<input class="<?php if (isset($_SESSION['c3']))
										{
											echo $_SESSION['c3'];
											unset($_SESSION['c3']);
										}
										?>" 
										value="<?php if (isset($_SESSION['c3val']))
										{
											echo $_SESSION['c3val'];
											unset($_SESSION['c3val']);
										}
										?>"
										type="text" name="c3">
									
									</td>
									<td align="right">
									D3<input class="<?php if (isset($_SESSION['d3']))
										{
											echo $_SESSION['d3'];
											unset($_SESSION['d3']);
										}
										?>" 
										value="<?php if (isset($_SESSION['d3val']))
										{
											echo $_SESSION['d3val'];
											unset($_SESSION['d3val']);
										}
										?>"
										type="text" name="d3">
									</td>
								</tr>
								
								<tr>
								    <td align="left">
									C2<input class="<?php if (isset($_SESSION['c2']))
										{
											echo $_SESSION['c2'];
											unset($_SESSION['c2']);
										}
										?>" 
										value="<?php if (isset($_SESSION['c2val']))
										{
											echo $_SESSION['c2val'];
											unset($_SESSION['c2val']);
										}
										?>"
										type="text" name="c2">
									
									</td>
									<td align="right">
									D2<input class="<?php if (isset($_SESSION['d2']))
										{
											echo $_SESSION['d2'];
											unset($_SESSION['d2']);
										}
										?>" 
										value="<?php if (isset($_SESSION['d2val']))
										{
											echo $_SESSION['d2val'];
											unset($_SESSION['d2val']);
										}
										?>"
										type="text" name="d2">
									</td>
								</tr>
								
								<tr>
								   <td align="left">
								   C1<input class="<?php if (isset($_SESSION['c1']))
										{
											echo $_SESSION['c1'];
											unset($_SESSION['c1']);
										}
										?>" 
										value="<?php if (isset($_SESSION['c1val']))
										{
											echo $_SESSION['c1val'];
											unset($_SESSION['c1val']);
										}
										?>"
										type="text" name="c1">
									
									</td>
									<td align="right">
									D1<input class="<?php if (isset($_SESSION['d1']))
										{
											echo $_SESSION['d1'];
											unset($_SESSION['d1']);
										}
										?>" 
										value="<?php if (isset($_SESSION['d1val']))
										{
											echo $_SESSION['d1val'];
											unset($_SESSION['d1val']);
										}
										?>"
										type="text" name="d1">
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

