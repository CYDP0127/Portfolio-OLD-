<?php


	echo '<div class="header-content-wrap">';

		echo '<div class="container">';



		$zerif_bigtitle_title = get_theme_mod('zerif_bigtitle_title',__('ONE OF THE TOP 10 MOST POPULAR THEMES ON WORDPRESS.ORG','zerif-lite'));

		if( !empty($zerif_bigtitle_title) ):


			echo '<h1 class="intro-text">'.__($zerif_bigtitle_title,'zerif-lite').'</h1>';

			echo '<div class = "intro-text-button"><img src="/wp/wp-content/uploads/2015/07/slider-icon-arrow-down.png" width = 100 hieght = 100></div>';
		endif;






		$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label',__('Features','zerif-lite'));


		$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url', esc_url( home_url( '/' ) ).'#focus');





		$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label',__("What's inside",'zerif-lite'));


		$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url',esc_url( home_url( '/' ) ).'#focus');





		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) ||


		(!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):


			echo '<div class="buttons">';


				if ( !empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url) ):


					echo '<a href="'.$zerif_bigtitle_redbutton_url.'" class="btn btn-primary custom-button red-btn">'.__($zerif_bigtitle_redbutton_label,'zerif-lite').'</a>';


				endif;


				if ( !empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url) ):


					echo '<a href="'.$zerif_bigtitle_greenbutton_url.'" class="btn btn-primary custom-button green-btn">'.__($zerif_bigtitle_greenbutton_label,'zerif-lite').'</a>';


				endif;


			echo '</div>';


		endif;





		echo '</div>';

	echo '</div><!-- .header-content-wrap -->';
	
		echo '<div class="clear"></div>';


?>