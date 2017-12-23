<?php 
	function shortcode_test($one, $two){ 

			$gggg = shortcode_atts( [

				'rong'			=> 'red'

			], $one);

			ob_start();
		?>
		
		out put

	<?php 
		return ob_get_clean();
}
	add_shortcode('shortcode','shortcode_test');

