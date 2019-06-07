<!--
    @author Igor Durić 0646/16
-->
		<div class="container">
			<div class="row" style="height:14%;background-color:#459BF0;" >
				<div class="col my-auto" >
							<h3 class="text-center text-dark"><i>Slagalica</i></h3>
				</div>		
						<div class="col">
							<div class="row">
								<div class="col-md-8 col-sm-6">
									<form name="login" action="http://localhost/SlagalicaIgniter/UserController/authenticateLogin" method="post">
										
											<table class="table table-hover border">
												<tr>
													<td>
														Korisničko ime
													</td>
													
													<td>
														<input type="text" class="<?php if (isset($_POST['u'])) {echo $_POST['u']; unset($_POST['u']);}?>" name="user" size="8" 
														value="<?php if (isset($_POST['userCorrect'])) {echo $_POST['userCorrect']; unset($_POST['userCorrect']);}?>">
														
													</td>
												</tr>
												<tr>
													<td>
														Lozinka
													</td>
													
													<td>
														<input  type="password" class="<?php if (isset($_POST['p'])) {echo $_POST['p']; unset($_POST['p']);}?>" name="pass" size="8">
													</td>
												</tr>
											</table>
										
									</div>
									
									<div class="col-md-4 col-sm-6 text-center my-auto">
											<input class="btn btn-secondary btn-outline-dark" type="submit" value="Prijavi se">
									</div>

								</form>
								
							</div>
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
					<h3>Registracija</h3>
					
					<form name="reg" action="http://localhost/SlagalicaIgniter/UserController/authenticateRegistration" method="post">
						<table class="table table-hover text-center">
							<tr>
								<td>
									<input  type="radio" name="tip" value="mod" > Moderator
								</td>
								<td>
									<input type="radio" name="tip" value="obkor" checked> Običan korisnik
								</td>
							</tr>
							
							<tr>
								<td>
									Korisničko ime:
								</td>
								
								<td>
									<input 
									 class ="<?php if (isset($_POST['usererr'])) {echo $_POST['usererr']; unset($_POST['usererr']);}?>"
									 value="<?php if (isset($_POST['usercorrect'])) {echo $_POST['usercorrect']; unset($_POST['usercorrect']);}?>"
									  type="text" name="username" >
								</td>
							</tr>
							<tr>
								<td>
									Lozinka:
								</td>
								
								<td>
									<input  class ="<?php if (isset($_POST['passerr'])) {echo $_POST['passerr']; unset($_POST['passerr']);}?>"
									 type="password" name="passw" >
								</td>
							</tr>
							<tr>
								<td>
									Potvrda lozinke:
								</td>
								
								<td>
									<input class ="<?php if (isset($_POST['passconferr'])) {echo $_POST['passconferr']; unset($_POST['passconferr']);}?>" 
									type="password" name="passwConf" >
								</td>
							</tr>
							<tr>
								<td>
									Pol:
								</td>
								
								<td>
									<input type="radio" name="pol" value="m"> Muško <input type="radio" name="pol" value="z"> Žensko 
								</td>
							</tr>
							<tr>
								<td>
									E-mail
								</td>
								
								<td>
									<input class ="<?php if (isset($_POST['emailerr'])) {echo $_POST['emailerr']; unset($_POST['emailerr']);}?>"
									 type="text" name="email" >
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
									<input class="btn btn-outline-primary" type="submit" value="Registruj se">
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
									<i>Ili..</i>
								</td>
							</tr>
							</form>

								<form name="gost" action="http://localhost/SlagalicaIgniter/UserController/guestPage" method="post">
									<tr>
										<td colspan="2">
											<input class="btn btn-outline-primary" type="submit" value="Nastavi kao gost">
										</td>
									
									</tr>
								</form>	
						</table>
					
				</div>
			</div>
		</div>
</div>
