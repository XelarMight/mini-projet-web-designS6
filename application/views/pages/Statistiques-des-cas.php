<!DOCTYPE html>
<!--
	Awesome Responsive Template
	templatestock.co
-->
<html>
<head>
	<title>Statistiques des cas sur le covid-19 | Template Stock</title>
</head>
<body>

<!-- Call to Action -->
<div class="call-action-bg" id="Call-to-Action">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main_heading">
					<h1>Statistiques des cas</h1>
					<div  class="text-center"><span class="underline"></span></div>
				</div>
			</div><!-- End col-md-12 -->
		</div><!-- End row -->

		<div class="col-md-12">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
		</div><!-- End col-md-12-->

	</div><!-- End container -->
</div>

<!-- End Call to Action -->

<!--Graphique-->

<div class="div">
		<canvas id="bar-chart" width="700" height="300"></canvas>
</div>

<!--end of graphique-->

<!-- About -->
<div class="container" id="About">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>About us</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->


	<div class="row">
		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="images/1.jpg" alt="">
		    	<div class="about-us-role">Marketing</div>
		    </div>
		    <h3>John Doe</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>

		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="images/2.jpg" alt="">
		    	<div class="about-us-role">Marketing</div>
		    </div>
		    <h3>John Doe</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>

		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="images/3.jpg" alt="">
		    	<div class="about-us-role">Marketing</div>
		    </div>
		    <h3>John Doe</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>
	</div><!-- End row -->

</div><!-- End container -->
<!-- End About -->


<!-- Testimonial -->
<div class="call-action-color" id="Testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main_heading">
					<h1>Testimonial</h1>
					<div  class="text-center"><span class="underline"></span></div>
				</div>
			</div><!-- End col-md-12 -->
		</div><!-- End row -->

		<div class="col-md-12">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
		</div><!-- End col-md-12-->

	</div><!-- End container -->
</div>
<!-- End Testimonial -->
<?php var_dump($label);?>
</br>
<?php var_dump($nbCas);?>
<script src="<?php echo(site_url("assets/js/Chart.js")); ?>"></script>
<script type="text/javascript">
		createChart(<?php echo $label;?>, <?php echo $nbCas;?>);
		function createChart(label, nombreCas){
			new Chart(document.getElementById("bar-chart"), {
				type: 'bar',
				data: {
				  //labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
				  labels: label,
				  datasets: [
					{
					  label: "Total de cas",
					  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
						//backgroundColor: 'rgb(29, 214, 185)',
						borderColor: 'rgb(200, 199, 132)',
					  data: nombreCas
					  //data: dataValues
					}
				  ]
				},
				options: {
				  legend: { display: false },
				  title: {
					display: true,
					text: 'Statistiques des cas du covid-19'
				  }
				}
			});
		}
    </script>
</body>
</html>
