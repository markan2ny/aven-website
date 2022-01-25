<?php

function careers_left($atts){

ob_start();
?>
<div class="careers_left_req">
	<ul>
		<li>
			<span><i class="fa fa-check" aria-hidden="true"></i></span>
			<span>In final year and have recommendation letter from university or college</span>
		</li>
		<li>
			<span><i class="fa fa-check" aria-hidden="true"></i></span>
			<span>Excellent communication, interpersonal skills</span>
		</li>
		<li>
			<span><i class="fa fa-check" aria-hidden="true"></i></span>
			<span>High interest in Garments industry</span>
		</li>
		<li>
			<span><i class="fa fa-check" aria-hidden="true"></i></span>
			<span>Can work full-time from Monday to Saturday (07:00AM – 16:00PM) for at least 2 months</span>
		</li>
	</ul>
</div>

<?php
	return ob_get_clean();

}
add_shortcode( 'careers_left', 'careers_left' );

function careers_right($atts){

	ob_start();
	?>
	<div class="careers_right_benefits">
		<ul>
			<li>
				<span><i class="fa fa-check" aria-hidden="true"></i></span>
				<span>Free zumba class</span>
			</li>
			<li>
				<span><i class="fa fa-check" aria-hidden="true"></i></span>
				<span>Join other events at AVEN</span>
			</li>
			<li>
				<span><i class="fa fa-check" aria-hidden="true"></i></span>
				<span>Practical on-the-job training</span>
			</li>
			<li>
				<span><i class="fa fa-check" aria-hidden="true"></i></span>
				<span>Opportunity to become permanent employee</span>
			</li>
		</ul>
	</div>
	
	<?php
		return ob_get_clean();
	}

	add_shortcode( 'careers_right', 'careers_right' );


function contact_card() {
ob_start();
?>
<div class="contacts contact-card">
	<div class="row">
		<!-- col start -->
		<div class="col-lg-6 col-md-12 col-12">
			<div class="card">
				<h1>Head Office</h1>
				<ul class="card-info">
					<li>
						<span><i class="fas fa-map-marker-alt"></i></span>
						<span>1072 JP. Rizal St. Sta. Barbara Baliuag, Bulacan</span>
					</li>
					<li>
						<span><i class="fas fa-envelope"></i></span>
						<span><a href="mailto:hrdepartment@avenfashion.com.ph">hrdepartment@avenfashion.com.ph</a></span>
					</li>
					<li>
						<span><i class="fas fa-phone-square"></i></span>
						<span><a href="tel:(044) 766 5536">(044) 766 5536</a></span>
					</li>
				</ul>
			</div>
		</div>
		<!-- col end -->
		<!-- col start -->
		<div class="col-lg-6 col-md-12 col-12">
			<div class="card">
				<h1>Opening Hours</h1>
				<p>Aven Fashion is open on the following days:</p>
				<div class="opening-schedule">
					<span>Monday - Saturday</span>
					<br>
					<span>7:00 - 16:00</span>
				</div>
			</div>
		</div>
		<!-- col end -->
	</div>
</div>



<?php
return ob_get_clean();
}
add_shortcode( 'contact_card', 'contact_card' );