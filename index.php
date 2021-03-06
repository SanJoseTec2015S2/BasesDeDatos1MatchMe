<!--
Author: W3layouts, Isaac Campos, Roger Villalobos,  Jeffrey Alvarado
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	<?php require_once("header.php"); 
		$arrayQuery = array(); 
		$_POST["mode"] = "get_home"; 
		$user_id = $_SESSION["active_user_id"];
		include ("funcionesOracle.php");
	?>
	
	<script src="js/Chart.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<!-- content -->

			<div class="content-btm">
				<div class="col-md-4">
					
					<div class="top-nav2">
						<span class="menu2"><img src="images/menu.png" alt=""> <lable> MENU</lable></span>
						<ul class="effct1" style="display: none;">
							<li><a href="profile.php?edit=1.php">Editar Perfil</a></li>  
							<li><a href="login.php">Cerrar Sesion</a></li>  
							<?php if ($arrayQuery ["ID_ROL"][0] == 1 ){?>
								<li><a href="admin.php">Opciones de administrador</a></li>  
							<?php }	?>
						</ul>
					</div>
					<!-- FICHA PERFIL -->
					<div class="content-right">
				<div class="content-right">
						<div class="cntnt-img">
						</div>
						<div class="bnr-img">
							<img src= <?php echo "profile_pics/".$arrayQuery["FOTO"][0] ?> alt=""/>
						</div>
						<div class="bnr-text">
							<h1>
								<?php echo $arrayQuery["NOMBRE"][0]." ".$arrayQuery["PRIMER_APELLIDO"][0]." ".$arrayQuery["SEGUNDO_APELLIDO"][0] ?>	
							</h1>
							
							<h5>
									<?php echo $arrayQuery["EMAIL"][0] ?>

							</h5>
							
							<p>
								 
									<?php echo $arrayQuery["ID_ESTILOVIDA"]["SLOGAN"][0] ?>
							</p>
							
							<hr/>
							<div class="resumen">
								<p>
									Genero: <?php echo $arrayQuery["ID_GENERO"]["NOMBRE"][0]?>

								</p>

								
								<p>
									Edad: <?php echo $arrayQuery["EDAD"][0] ?>
								</p>
								
								<p>
									Ubicación: <?php echo $arrayQuery["ID_CIUDAD"]["NOMBRE"][0].", ".$arrayQuery["ID_CIUDAD"]["ID_ESTADO"]["NOMBRE"][0].", ".$arrayQuery["ID_CIUDAD"]["ID_ESTADO"]["ID_PAIS"]["NOMBRE"][0]?>
								</p>
								<p>Altura: <?php echo $arrayQuery["ID_ASPECTOF"]["ALTURA"][0] ?> </p>
								<p>Peso: <?php echo $arrayQuery["ID_ASPECTOF"]["PESO"][0] ?> </p>
								<p>Busco: <?php echo $arrayQuery["ID_INTERES_GUSTO"]["ID_GENERO"]["NOMBRE"][0]."s"?> </p>
								<p>Entre: <?php echo $arrayQuery["ID_INTERES_GUSTO"]["RANGO_EDADI"][0]." y ".$arrayQuery["ID_INTERES_GUSTO"]["RANGO_EDADF"][0] ?></p>
							</div>
						</div>
						<div class="btm-num">
							<ul>
								<li>
									<h4><?php echo array_key_exists('ID_ENVIADO', $arrayQuery["WINK"]) ? count($arrayQuery["WINK"]["ID_ENVIADO"]): 0;
										?></h4>
									<h5>Winks</h5>
								</li>
								<li>
									<h4><?php echo array_key_exists('ID_VISITANTE', $arrayQuery["VISITAS"]) ?count($arrayQuery["VISITAS"]["ID_VISITANTE"]): 0
										?></h4>
									<h5>Visitas</h5>
								</li>
								<li>
									<h4><?php echo array_key_exists('ID_RECOMENDACION', $arrayQuery["MATCH"]) ? count($arrayQuery["MATCH"]["ID_RECOMENDACION"]) :0
									?></h4>
									<h5>Matches</h5>
								</li>
							</ul>
						</div>
						<?php if($user_id != $_SESSION["active_user_id"]){?>
							<input type="button" name="wink" class="submit action-button" value="Dar un wink"/>
							<hr/>
						<?php }?>
				</div>				
					</div>				
				</div>
				<div class="col-md-4 content-grids">
					<div class="row">
						<div class="content-grids-info">
	
							<div class="col-md-12">
								<div class="content-left">
									<div class="drop-dwn">
										<!--div class="search2 ">
											<form>
												<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
												<input type="submit" value=" ">
											</form>
										</-->
										<div class="search-btm">
											<div  class="temp">
												<div class="temp-right">
													<p class="date">
														<?php echo date("D, m/y"); ?>
													</p>
													<h5>
														<?php
															$jsonurl = "http://api.openweathermap.org/data/2.5/weather?id=3621841&appid=bd82977b86bf27fb59a04b61b657fb6f"; // 3621841 = SJ, CR
															$json = file_get_contents($jsonurl);
															
															$weather = json_decode($json);
															$kelvin = $weather->main->temp;
															$celcius = $kelvin - 273.15;
															
															echo round($celcius)."C";
														?>
													</h5>
												</div>
												<div class="temp-left">
													<img src="images/cloud.png" alt="">
												</div>															
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>	
								</div>				
							</div>				
							<!--div class="col-md-6 menu">
								<ul>
									<li><a href="#">Menu 1</a></li>
									<li><a href="#">Menu 2</a></li>
									<li><a href="#" class="active">Menu 3</a></li>
									<li><a href="#">Menu 4</a></li>
								</ul>
							</div-->
							<!--div class="clearfix"> </div-->
						</div>
						<div class="col-md-12 ">
							<div class="circles">
								<h3>STATUS RECENT PROJECTS</h3>
								<div class="demo">
									<div class="demo-1" data-percent="65">
										<div class="title">
											<h4>Meier</h4>
											<p>Stairs</p>
										</div>
									</div>
									<div class="demo-2" data-percent="78">
										<div class="title2">
											<h4>Johnson</h4>
											<p>Exterior wall</p>
										</div>
									</div>
									<div class="demo-3" data-percent="95">
										<div class="title1">
											<h4>Junns</h4>
											<p>Teriorwall </p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>	
								<script type="text/javascript">
		
								  var _gaq = _gaq || [];
								  _gaq.push(['_setAccount', 'UA-36251023-1']);
								  _gaq.push(['_setDomainName', 'jqueryscript.net']);
								  _gaq.push(['_trackPageview']);
		
								  (function() {
									var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
									ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
									var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
								  })();
		
								</script>
							</div>			
						</div>			
						<div class="col-md-12">
							<div class="result">
								<h3>RESULTADOS</h3>
								<div class="skills-top">
									<h5>Usuarios con pareja</h5>
									<div class="skills">
										<div class="skill1" style="width:52%"></div>
										<div class="skills-right">
											<p>52%</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="skills-top">
									<h5>Usuarios casados</h5>
									<div class="skills">
										<div class="skill1" style="width:35%"></div>
										<div class="skills-right">
											<p>35%</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="skills-top">
									<h5>Usuarios solteros</h5>
									<div class="skills">
										<div class="skill1" style="width:11%"></div>
										<div class="skills-right">
											<p>11%</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>											
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				<div class="col-md-4 calnder">
					<div class="calender-right">
						<div class="clndr-top">							
							<h3>CALENDARIO</h3>
							<div class="bottom-border"> </div>
						</div>
						<div class="column_right_grid calender">
	                      <div class="cal1">
							<div class="clndr">
								<div class="clndr-controls">
									<div class="clndr-control-button">
										<p class="clndr-previous-button">previous</p>
									</div>
									<div class="month">May 2015</div>
									<div class="clndr-control-button rightalign">
										<p class="clndr-next-button">next</p>
									</div>
								</div>
								<table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
								  <thead>
								   <tr class="header-days">
								    <td class="header-day">D</td>
									<td class="header-day">L</td>
									<td class="header-day">M</td>
									<td class="header-day">X</td>
									<td class="header-day">J</td>
									<td class="header-day">V</td>
									<td class="header-day">S</td>
								  </tr>
								 </thead>
								 <tbody>
								 <tr>
								  <td class="day past adjacent-month last-month calendar-day-2015-04-26"><div class="day-contents">26</div></td><td class="day past adjacent-month last-month calendar-day-2015-04-27">
									<div class="day-contents">27</div>
								  </td>
								  <td class="day past adjacent-month last-month calendar-day-2015-04-28">
									<div class="day-contents">28</div></td><td class="day past adjacent-month last-month calendar-day-2015-04-29"><div class="day-contents">29</div>
								  </td>
								  <td class="day past adjacent-month last-month calendar-day-2015-04-30">
									<div class="day-contents">30</div>
								  </td><td class="day past calendar-day-2015-05-01"><div class="day-contents">1</div></td><td class="day past calendar-day-2015-05-02"><div class="day-contents">2</div></td></tr><tr><td class="day past calendar-day-2015-05-03"><div class="day-contents">3</div></td><td class="day past calendar-day-2015-05-04"><div class="day-contents">4</div></td><td class="day past calendar-day-2015-05-05"><div class="day-contents">5</div></td><td class="day past calendar-day-2015-05-06"><div class="day-contents">6</div></td><td class="day past calendar-day-2015-05-07"><div class="day-contents">7</div></td><td class="day past calendar-day-2015-05-08"><div class="day-contents">8</div></td><td class="day past calendar-day-2015-05-09"><div class="day-contents">9</div></td></tr><tr><td class="day past event calendar-day-2015-05-10"><div class="day-contents">10</div></td><td class="day past event calendar-day-2015-05-11"><div class="day-contents">11</div></td><td class="day past event calendar-day-2015-05-12"><div class="day-contents">12</div></td><td class="day past event calendar-day-2015-05-13"><div class="day-contents">13</div></td><td class="day today event calendar-day-2015-05-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-05-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-05-16"><div class="day-contents">16</div></td></tr><tr><td class="day calendar-day-2015-05-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-05-18"><div class="day-contents">18</div></td><td class="day calendar-day-2015-05-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-05-20"><div class="day-contents">20</div></td><td class="day event calendar-day-2015-05-21"><div class="day-contents">21</div></td><td class="day event calendar-day-2015-05-22"><div class="day-contents">22</div></td><td class="day event calendar-day-2015-05-23"><div class="day-contents">23</div></td></tr><tr><td class="day calendar-day-2015-05-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-05-25"><div class="day-contents">25</div></td><td class="day calendar-day-2015-05-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-05-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-05-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-05-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-05-30"><div class="day-contents">30</div></td></tr><tr><td class="day calendar-day-2015-05-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-06-01"><div class="day-contents">1</div></td><td class="day adjacent-month next-month calendar-day-2015-06-02"><div class="day-contents">2</div></td><td class="day adjacent-month next-month calendar-day-2015-06-03"><div class="day-contents">3</div></td><td class="day adjacent-month next-month calendar-day-2015-06-04"><div class="day-contents">4</div></td><td class="day adjacent-month next-month calendar-day-2015-06-05"><div class="day-contents">5</div></td><td class="day adjacent-month next-month calendar-day-2015-06-06"><div class="day-contents">6</div></td></tr></tbody></table></div></div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
				
			</div>
			<div class="center-grids">
							
				<!--div class="col-md-4 pie-charts">
					<div class="pie-chrt">
						<canvas id="doughnut" height="200" width="200"></canvas>
						<script>
							var doughnutData = [
									{
										value: 30,
										color:"#F7464A"
									},
									{
										value : 50,
										color : "#46BFBD"
									},
									{
										value : 100,
										color : "#FDB45C"
									},
									{
										value : 40,
										color : "#949FB1"
									},
									{
										value : 120,
										color : "#4D5360"
									}
								
								];

							new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);						
						</script>
					</div-->
					<!--div class="line-chrt">
						<canvas id="line" height="210" width="353"></canvas>
						<script>
							var lineChartData = {
								labels : ["January","February","March","April","May","June","July"],
								datasets : [
									{
										fillColor : "rgba(179, 187, 200, 0.44)",
										strokeColor : "rgba(148, 159, 177, 0.71)",
										pointColor : "rgba(148, 159, 177, 0.71)",
										pointStrokeColor : "#fff",
										data : [65,59,90,81,56,55,40]
									},
									{
										fillColor : "rgba(79, 197, 247, 0.40)",
										strokeColor : "rgba(79, 197, 247, 0.48)",
										pointColor : "rgba(79, 197, 247, 0.48)",
										pointStrokeColor : "#fff",
										data : [28,48,40,19,96,27,100]
									}
								]								
							}
							new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
						</script>		
					</div-->
					<!--div class="col-md-4 middle-grids">					
					<div class="line-grids">
						<div class="progress">
							<div class="progress-bar" style="width:75%"></div>	
							<p class="percentage">75%</p> 
						</div>
						<form id="opts">
							<input type="text" name="lines" min="5" max="16" step="2" value="12"><br>
						</form>
						<div class="scrolling">
							<div id="slider"></div>
						</div>																					
						<div class="progress prgs1">
							<div class="progress-bar bar1" style="width:45%"></div>	
							<p class="percentage prsntg1">45%</p> 
						</div>	
				</div>
				<div class="clearfix"></div>
			</div-->
			<div class="work-grids">
				<div class="col-md-5 menu-list">
					<!--div class="top-nav3 top-nav2">
						<span class="menu3"><img src="images/menu.png" alt=""></span>
						<ul class="effct2">
							<li><a href="#"></a></li>                                             
							<li><a href="#"></a></li>
							<li><a href="#"></a></li>  
							<li><a href="#"></a></li>  
							<li><a href="#"></a></li>
						</ul>
							
					</div-->	
					<!--div class="pages">
						<nav>
							<ul class="pagination">
								<li class="prvs"><a href="#"aria-label="Previous"><span aria-hidden="true"><</span></a></li>
								<li><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">3 <span class="sr-only">(current)</span></a></li>
								<li class="active"><a href="#">4 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">5 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">6 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">7 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">8 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">9 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">10 <span class="sr-only">(current)</span></a></li>
								<li class="prvs active1"><a href="#" aria-label="Previous"><span aria-hidden="true">></span></a></li>
							</ul>
						</nav>
					</div-->
				</div>
				
						<!--div class="designer">
							<h3>Ask Designer</h3>
							<h5>ZX/MY Designer</h5>
							<p>Follow</p>
							<div class="social-icons">
								<ul>
									<li><a href="#"><span>26k</span></a></li>                                             
									<li><a href="#" class="twt"><span>12k</span> </a></li>
									<li><a href="#" class="dbl"><span>8k</span> </a></li>  
									<li><a href="#" class="gp"><span>50k</span> </a></li>  
									<div class="clearfix"></div>
								</ul>
							</div>
						</div-->
					</div>
					<!--div class="clouds">
						<ul>
							<li><a href="#"> </a></li>
							<li><a class="cld1" href="#"> </a></li>
							<li><a class="cld2" href="#"> </a></li>
							<li><a class="cld3" href="#"> </a></li>
						</ul>
					</div-->
					<div class="clearfix"></div>
				</div>
				<!--div class="col-md-3 menu-list">
					<div class="buttons">				
							<a href="#">Button Face </a>
							<a class="hover" href="#"> Button Hover</a>						
						<div class="btn-grids">
							<a href="#">Button Face </a>
						</div>
						<div class="btn-grids btn-grid2">
							<a class="hover" href="#"> Button Hover</a>
						</div>	
						<div class="clearfix"></div>
						<div class="btns-left">	
							<div class="switech-grid">
							   <div class="demo5">
								  <div class="switch demo3">
									<input type="checkbox">
									<label><i></i></label>
								  </div>	
								</div>  
								<div class="demo6">									
								  <div class="switch demo3">
									<input type="checkbox" checked="">
									<label><i></i></label>
								  </div>			
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="social-icns">
								<ul>
									<li><a href="#"></a></li>                                             
									<li><a href="#" class="twtr"></a></li>
									<li><a href="#" class="gpp"></a></li>  
								</ul>
							</div>
							
						</div>
						<div class="btns-right">
							<div class="checkbox-grid-left">
								<ul>
									<li>
										<span class="col_checkbox">
												<input id="1" class="css-checkbox1" type="checkbox">
												<label for="1" name="demo_lbl_1" class="css-label1"> </label>
										</span>
								  
									</li>
									<li>
										<span class="col_checkbox">
												<input id="2" class="css-checkbox2" type="checkbox">
												<label for="2" name="demo_lbl_2" class="css-label2"> </label>
										</span>
									</li>
								</ul>
							</div>
							<div class="radio-btns">
								<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i></label> </div></div>
                              	<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i></label> </div></div>
							</div>							
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="dropdown open">
						<button class="btn btn-default dropdown-toggle " type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							DropDown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu3" aria-labelledby="dropdownMenu3">
							<li><a href="#">Drop pressed</a></li>
							<li><a class="active" href="#">Open Tabs</a></li>
							<li><a href="#">Dropdown link</a></li>
						</ul>
					</div>			
				</div-->
				<div class="clearfix"> </div>
			</div>
			<div class="bottom-grids">
				<!--div class="col-md-4 video-grid">
					<div id="jp_container_1" class="jp-video jp-video-360p" role="application" aria-label="media player">
						<div class="jp-type-single">
							<div id="jquery_jplayer_1" class="jp-jplayer"></div>
							<div class="jp-gui">
								<div class="jp-video-play">
									<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
								</div>
								<div class="jp-interface">
									<div class="jp-progress">
										<div class="jp-seek-bar">
											<div class="jp-play-bar"></div>
										</div>
									</div>
									<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
									<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
									<div class="jp-controls-holder">
										<div class="jp-controls">
											<button class="jp-play" role="button" tabindex="0">play</button>
											<button class="jp-stop" role="button" tabindex="0">stop</button>
										</div>
										<div class="jp-volume-controls">
											<button class="jp-mute" role="button" tabindex="0">mute</button>
											<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
										<div class="jp-toggles">
											<button class="jp-repeat" role="button" tabindex="0">repeat</button>
											<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
										</div>
									</div>
									
								</div>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 bar-charts">
					<canvas id="bar" height="320" width="376"></canvas>
					<script>

						var barChartData = {
							labels : ["January","February","March","April","May","June","July"],
							datasets : [
								{
									fillColor : "#e64608",
									strokeColor : "#e64608",
									data : [65,59,90,81,56,55,40]
								},
								{
									fillColor : "#acadb1",
									strokeColor : "#acadb1",
									data : [28,48,40,19,96,27,100]
								}
							]
							
						}

					var myLine = new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
					
					</script>
				</div>
				<div class="col-md-4 line-graph">
					<div class="statistics-info">
						
								
								<div id="graph-wrapper">
									<div class="graph-container">
										<div id="graph-lines"> </div>
										<div id="graph-bars"> </div>
									</div>
								</div>
								
						</div>
				</div-->
				<div class="clearfix"> </div>
			</div>
	
	<?php require_once("footer.php") ?>
