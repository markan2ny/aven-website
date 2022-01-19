<?php

function mission_vission($atts){

ob_start();
?>
	<div class="about__mission-vission">

	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<div class="card about-card">
				<div class="card-body">
					<h1>Mi<span>ss</span>ion</h1>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque dolores ullam sunt reprehenderit magnam quod, at facere blanditiis beatae. Nemo!</p>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="card about-card">
				<div class="card-body">
					<h1>Vi<span>ss</span>ion</h1>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque dolores ullam sunt reprehenderit magnam quod, at facere blanditiis beatae. Nemo!</p>
				</div>
			</div>
		</div>
	</div>
	</div>

<?php
	return ob_get_clean();

}
add_shortcode( 'mission_vission', 'mission_vission' );