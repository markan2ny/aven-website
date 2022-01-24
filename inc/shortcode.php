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


function product_carousel() {
ob_start();
?>
<main>

<div id="carousel">

   <div class="hideLeft">
	<img src="https://i1.sndcdn.com/artworks-000165384395-rhrjdn-t500x500.jpg">
  </div>

  <div class="prevLeftSecond">
	<img src="https://i1.sndcdn.com/artworks-000185743981-tuesoj-t500x500.jpg">
  </div>

  <div class="prev">
	<img src="https://i1.sndcdn.com/artworks-000158708482-k160g1-t500x500.jpg">
  </div>

  <div class="selected">
	<img src="https://i1.sndcdn.com/artworks-000062423439-lf7ll2-t500x500.jpg">
  </div>

  <div class="next">
	<img src="https://i1.sndcdn.com/artworks-000028787381-1vad7y-t500x500.jpg">
  </div>

  <div class="nextRightSecond">
	<img src="https://i1.sndcdn.com/artworks-000108468163-dp0b6y-t500x500.jpg">
  </div>

  <div class="hideRight">
	<img src="https://i1.sndcdn.com/artworks-000064920701-xrez5z-t500x500.jpg">
  </div>

</div>

<div class="buttons">
  <button id="prev">Prev</button>
  <button id="next">Next</button>
</div>

</main>



<?php
return ob_get_clean();
}
add_shortcode( 'product_carousel', 'product_carousel' );