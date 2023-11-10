
<div class="section">
    <center><img src="img/whipped2.gif" align="right"></center>
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Iniciar sesión</span><span>Registrar</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Iniciar sesión</h4>
                      <form method="post" action="index.php">
											<div class="form-group">
												<input type="email" class="form-style" id="correo" placeholder="Email" name="correo" required>
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" id="pwd" placeholder="Contraseña" name="pwd" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
					<button type="submit" value="Ingreso" class=" btn btn-outline-success"><em>Iniciar</em></button>
                      <p class="mb-0 mt-4 text-center"><a href="#" class="link">¿Olvidaste tu contraseña?</a></p>
                      </form>	
                      <?
        if(isset($_SESSION['correo_valido'])){
          include 'carusel.php';
        }
        ?>
                       </div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Registrar</h4>
                       <form method="post" action="genera_clave.php">
											<div class="form-group">
                       
												<input type="text" class="form-style" id="nombre" placeholder="Nombre" name="nombre" required>
												<i class="input-icon uil uil-user"></i>
											</div>	
                      <div class="form-group mt-2">
												<input type="email" class="form-style" id="correo" placeholder="Email" name="correo" required>
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" id="pwd" placeholder="Contraseña" name="pwd" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                      <div class="form-group mt-2">
												<input type="password" class="form-style" id="rpwd" placeholder="Confirmar contraseña" name="rpwd" required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<em><button type="submit" class="btn btn-primary">Registrar   </em></button>
				      					</div>
			      					</div>
			      				</div>
                      </form>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>