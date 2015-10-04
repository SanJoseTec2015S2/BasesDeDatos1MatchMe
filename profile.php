<!--
Author: W3layouts, Isaac Campos, Roger Villalobos,  Jeffry Alvarado
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
	require_once("header.php");
	
	$active_user_id = $_SESSION["active_user_id"];

	$edit = $_GET["edit"]? 1 : 0;
	$user_id = $edit? $active_user_id : $_GET["user_id"];

	$prueba = 1;
	// /include("funcionesOracle.php");
if ($edit){ ?>
	<form id="form_data">
		<input type="hidden" name="edit" value="1"/>
	<?php 
} ?>

<div id="debug"></div>

<div class ="container-fluid" id = "contenedor" >
	<!--div class="row">
		<div class="col-md-12" > 
			<div class = "tituloPerfil">
				<h2>Ver perfil</h2>
			</div>
		</div>
	</div-->
		<div class="row" > 
			<div class= "col-md-4 columnaUno">
				<div class="content-right">
						<div class="cntnt-img">
						</div>
						<div class="bnr-img">
							<img src="images/img2.jpg" <img src=<?php $Foto_perfil ?> alt=""/> alt=""/>
						</div>
						<div class="bnr-text">
							<h1>
								<?php if ($edit){ ?>
									Nombre:
									<input type = "text" 
										name = "nombre" 
										value = <?php $Nombre ?>
										default = "Sirius"/>
									Primer Apellido:
									<input type = "text" 
										name = "Primer_apellido" 
										value = <?php $Primer_apellido ?>
										default = "Black"/>
									Segundo Apellido:
									<input type = "text" 
										name = "Segundo_apellido" 
										value = <?php $Segundo_apellido ?>
										default = "Canuto"/>
								<?php } else { ?> 
									Sirius Black Canuto <?php echo $Nombre." ".$Primer_apellido." ".$Segundo_apellido ?>
								<?php }	?>
							</h1>
							
							<h5>
								<?php if ($edit){ ?>
									<input type="email"
										value = <?php $Email ?>
										default = "sirius@designhas.com"
										name="Email" />
								<?php } else { ?> 
									sirius@designhas.com <?php echo $Email ?>
								<?php }	?>
							</h5>
							
							<p><?php echo $Slogan ?></p>
							
							<hr/>
							<div class="resumen">
								<p>Genero: <?php echo $Sexo ?></p>
								<!--10/07/1990-->
								
								
								<p><?php if ($edit){ ?>
										<input type = "date" 
										name = "Fecha_Nac" 
										value = <?php $Fecha_nac ?>
										default = "10/07/1990"/>
								<?php } else { ?> 
									Edad: 20<?php $Edad ?>
								<?php }	?>
								</p>
								
								<p><?php if ($edit){ ?>
										<select type = "date" 
										name = "Fecha_Nac"></select>
								<?php } else { ?> 
									Ubicacion: San Jose <?php $Ciudad.", ".$Provincia.", ".$Pais ?>
								<?php }	?>
								</p>
								<p>Altura y peso: 1.60m, 65Kg <?php $Altura.", ".$Peso ?> </p>
								<p>Busco: <?php $Interes ?></p>
								<p>email: blacky@gmail.com <?php echo $Email ?> </p>
							</div>
						</div>
						<div class="btm-num">
							<ul>
								<li>
									<h4>420</h4>
									<h5>Seguidores</h5>
								</li>
								<li>
									<h4>100</h4>
									<h5>Winks</h5>
								</li>
								<li>
									<h4>60</h4>
									<h5>Matches nuevos</h5>
								</li>
							</ul>
						</div>				
					</div>
			</div>

			<div class= "col-md-8">
				<div id="tap">
					<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
					<label for="tab-1" class="tab-label-1">Background</label>
				   
					<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
					<label for="tab-2" class="tab-label-2">Estilo de Vida</label>
				   
					<input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
					<label for="tab-3" class="tab-label-3">Descripcion personal</label>
				   
					<input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
					<label for="tab-4" class="tab-label-4">Intereses y gustos</label>
					
					<input id="tab-5" type="radio" name="radio-set" class="tab-selector-5" />
					<label for="tab-5" class="tab-label-5">Que busco</label>
					
					<input id="tab-6" type="radio" name="radio-set" class="tab-selector-6" />
					<label for="tab-6" class="tab-label-6">Winks</label>
					
					<input id="tab-7" type="radio" name="radio-set" class="tab-selector-7" />
					<label for="tab-7" class="tab-label-7">Visitas</label>

					<div class="content">
						<div class="content-1">
							<!--div class = "Background"-->
								<label class ="texto">Nivel de educacion: Bachillerato <?php echo $Educacion ?></label>
								<label class ="texto">Idiomas: Checoslovaco <?php echo $Idiomas ?></label>
								<label class ="texto">Estado civil: Soltero <?php echo $Estado_Civil ?> </label>
								<label class ="texto">Religion: Agnostico <?php echo $Religion ?> </label>
							<!--/div-->
						</div>
						<div class="content-2">
							<!--div class= "EstiloVida"-->
								<label class ="texto">Bebes?: No <?php echo $Bebedor ?> </label>
								<label class ="texto">Fumas?: No<?php echo $Fumador ?> </label>
								<label class ="texto">Frecuencia de ejercicios: Diario <?php echo $Frecuencia_Ejercicios ?> </label>
								<label class ="texto">Cantidad de hijos: no tengo <?php echo $Hijos ?> </label>
								<label class ="texto">Quiere hijos?:No quiero <?php echo $Hijos ?> </label>
								<label class ="texto">Ocupacion: Educador <?php echo $Ocupacion ?> </label>
								<label class ="texto">Rango de salario:prefiero no ponerlo <?php echo $Salario ?> </label>
								<label class ="texto">Signo zodiacal: cancer <?php echo $Signo_Zodiacal ?></label>
								<label class ="texto">Le gustan las mascotas?: <?php echo $Gustan_mascotas ?></label>
								<label class ="texto">Tiene mascotas?: <?php echo $Tiene_mascotas ?></label>
								<label class ="texto">Tendria mascotas?: No <?php echo $Tendria_mascotas ?> </label>
							<!--/div-->	
						</div>
						<div class="content-3">
							<!--div class = "presentacion personal"-->
								<label class ="texto">Descripcion propia: Me gusta bailar, hacer actividades al aire libre, pasar tiempo con seres queridos. <?php echo $Slogan ?></label>
							<!--/div-->
						</div>
						<div class="content-4">
							<!--div class = "intereses y gustos"-->
								<label class ="texto">Ejercicios,aire libre entre otros: caminar, nadar <?php echo $ActividadAL ?></label>
								<label class ="texto">Hobbies: <?php echo $Hobby ?></label>
							<!--/div-->
						</div>
						<div class="content-5">
							<!--div class = "sobre la persona que busca"-->
								<label class ="texto">Sexo: Mujer <?php echo $Sexo ?></label>
								<label class ="texto">Edad: 23 a 28<?php echo $Rango_edadi." - ".$Rango_edadf ?></label>
								<label class ="texto">El cuerpo de mi pareja debe ser: En forma<?php echo $Contextura ?> </label>
								<label class ="texto">Color de piel de mi pareja: Me da igual <?php echo $Color_piel ?></label>
								<label class ="texto">Ojos de mi pareja: Me da igual <?php echo $Color_ojos ?></label>
								<label class ="texto">Bebe?: No Beba <?php echo $Bebedor ?></label>
								<label class ="texto">Fuma?: No fume <?php echo $Fumador ?></label>
								<label class ="texto">Referente a hijos, mi pareja: No tenga <?php echo $Hijos ?> </label>
								<label class ="texto">Hijos en el futuro, quiero alguien que: Me da igual <?php echo $tendria_Hijos ?> </label>
								<label class ="texto">Religion de mi pareja : Me da igual <?php echo $Religion ?></label>
								<label class ="texto">Estado civil de mi pareja: Soltero(a) <?php echo $Estado_Civil ?></label>
								<label class ="texto">Nivel minimo de estudios de mi Pareja: secundaria<?php echo $Escolaridad ?></label>
								<label class ="texto">Pelo de mi pareja: Me da igual <?php echo $Color_pelo ?></label>
							<!--/div-->
						</div>
						
						<div class="content-7">
							<div class = "acordion">
								<h1 class ="texto">2/4/15</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
								
								<h1 class ="texto">3/8/15</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>
								
								<h1 class ="texto">3/6/15</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
								
								<h1 class ="texto">9/1/14</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
								
								<h1 class ="texto">2/1/14</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
							</div>
							
							
							
						</div>
						
							<div class="content-6">
							<div class = "acordion">
								<h1 class ="texto">2/4/15</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
								
								<h1 class ="texto">3/8/15</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>
								
								<h1 class ="texto">3/6/15</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
								
								<h1 class ="texto">9/1/14</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
								
								<h1 class ="texto">2/1/14</h1>
								<div>
									<div class="bnr-img">
										<img src="images/img1.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img2.jpg" alt="">
									</div>
									<div class="bnr-img">
										<img src="images/img3.jpg" alt="">
									</div>
								</div>	
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>


<?php
if ($edit){ ?>
	</form>
	<?php 
} ?>

<?php require_once("footer.php") ?>

<script>


	jQuery("input").keypress(function(){
		if($(this).val() == ""){
			$(this).val( $(this).attr("default") );
		}
	});
	
	jQuery("input").change(function(){
		if($(this).val() == ""){
			$(this).val( $(this).attr("default") );
		}
		
		
		if($(this).val() != ""){
			var data = $("#form_data").serialize();
			$.post("funcionesOracle.php", data, function(data){
				$("#debug").html(data);
			}); 
		}
		
	});
</script>