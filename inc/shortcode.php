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