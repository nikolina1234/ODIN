
		<div class="container">
			<div class="row " style="height:14%;background-color:#459BF0;">
				<div class="col my-auto">
							<h3 class="text-center text-dark"><i>Običan korisnik -> Igra</i></h3>					
				</div>
				
				<div class="col-2 my-auto text-center">
					<form name="login" action="http://localhost/SlagalicaIgniter/" method="post">	
							<input class="btn btn-secondary btn-outline-dark btn-lg " type="submit" value="Izađi">
					</form>

					
				</div>
				<div class="col-2 my-auto text-cente">		
					<form name="getback" action="http://localhost/SlagalicaIgniter/UserController/userHomePage" method="post">
						<input class="btn btn-secondary btn-outline-dark btn-lg " type="submit" value="Nazad">
					</form>
				 </div>
			</div>
			
			<div class="row h-50" style="background-color:#F0F0F0">
				<div class="col">
                        <table class="table table-striped table-hover mx-auto" >
                            <tr align="center">
                                <td width="50%">
                                    <input type="submit" class="btn btn-block btn-dark text-light" value="Slagalica" >
                                </td>

                                <td>
                                    <label name="slagalica"></label>
                                </td>
                            </tr>

                            <tr align="center">
                                <td>
                                    <input type="submit" class="btn btn-block btn-dark text-light" value="Moj Broj">
                                </td>

                                <td>
                                    <label name="Moj Broj"></label>
                                </td>
                            </tr>

                            <tr align="center">
                                <td>
                                    <input type="submit" class="btn btn-block btn-dark text-light" value="Skocko" >
                                </td>

                                <td>
                                    <label name="Skocko"></label>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <form method="post" action="http://localhost/SlagalicaIgniter/IgraController/spojnice">
                                        <input type="submit" class="btn btn-block btn-dark text-light" value="Spojnice">
                                    </form>
                                </td>

                                <td>
                                    <label name="spojnice"></label>
                                </td>
                            </tr>

                            <tr align="center">
                                <td>
                                    <input type="submit" class="btn btn-block btn-dark text-light" value="Ko Zna Zna">
                                </td>

                                <td>
                                    <label name="koznazna"></label>
                                </td>
                            </tr>

                            <tr align="center">
                                <td>
                                    <input type="submit" class="btn btn-block btn-dark text-light" value="Asocijacije" >
                                </td>

                                <td>
                                    <label name="Asocijacije"></label>
                                </td>
                            </tr>
                        </table>
				</div>
			</div>
		</div>

