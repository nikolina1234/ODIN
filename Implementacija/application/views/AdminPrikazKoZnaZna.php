
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Admin -> Prikaz baze -> Ko Zna Zna</i></h3>					
				</div>
				
				<div class="col-2 my-auto text-center">
					<form name="login" action="http://localhost/SlagalicaIgniter/" method="post">	
							<input class="btn btn-secondary btn-outline-dark btn-lg " type="submit" value="Izađi">
					</form>

					
				</div>
				<div class="col-2 my-auto text-cente">		
					<form name="getback" action="http://localhost/SlagalicaIgniter/AdminController/backToPrikazBaze" method="post">
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
					
						
						
							<table class="table table-hover">
                                <tr>
                                    <td align="center"> 
                                        <textarea class="textarea" rows="15" cols="50" readonly>
											<?php 
												echo "Pitanje;tacan;netacan;netacan;netacan &#10;";
                                                if (isset($_SESSION['spojnice']))
                                                {
													foreach ($_SESSION['pitanja'] as $pitanje)
													{
														echo $pitanje->pitanje." ; ".$pitanje->tacan." ; ".$pitanje->netacan1." ; "
														.$pitanje->netacan2." ; ".$pitanje->netacan3."&#10;";
													}
                                                }
                                            ?>
                                        </textarea>
                                    </td>
                                </tr>
							</table>
						
						
				</div>
			</div>
		</div>

