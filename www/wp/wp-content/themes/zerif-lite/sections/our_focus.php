<section class="focus" id="focus">



<div class="container">





	<!-- SECTION HEADER -->



	<div class="section-header">







		<!-- SECTION TITLE -->


		<?php
		$zerif_ourfocus_title = get_theme_mod('zerif_ourfocus_title',__('FEATURES','zerif-lite'));
		
		if( !empty($zerif_ourfocus_title) ):
			echo '<h2 class="dark-text">'.__($zerif_ourfocus_title,'zerif-lite').'</h2>';
		endif;	
		?>




		<?php

		$zerif_ourfocus_subtitle = get_theme_mod('zerif_ourfocus_subtitle',__('What makes this single-page WordPress theme unique.','zerif-lite'));



		if( !empty($zerif_ourfocus_subtitle) ):



			echo '<h6>'.__($zerif_ourfocus_subtitle,'zerif-lite').'</h6>';



		endif;

		?>



	</div>





	<div class="row">
	


			<?php
			echo '<div class="big-intro" data-scrollreveal="enter right after 0s over 1s">';
			include('our_focus_lang.php');
			echo '</div>';
			if ( is_active_sidebar( 'sidebar-ourfocus' ) ) :

				dynamic_sidebar( 'sidebar-ourfocus' );

			else:

				

				the_widget( 'zerif_ourfocus','title=ANDROID&text=Applications for Controlling drone and Arduino devices by bluetooth.&link=http://cydp0127.cafe24.com/?page_id=14&image_uri='.get_stylesheet_directory_uri()."/images/android_icon.png", array('before_widget' => '', 'after_widget' => '') );

				the_widget( 'zerif_ourfocus','title=WEB&text=Developed restaurant website for personal project.&link=http://cydp0127.cafe24.com/?page_id=14&image_uri='.get_stylesheet_directory_uri()."/images/web_icon.png", array('before_widget' => '', 'after_widget' => '') );

				the_widget( 'zerif_ourfocus','title=DRONE&text=Made programs for controlling Arduino by codevision.&link=http://cydp0127.cafe24.com/?page_id=14&image_uri='.get_stylesheet_directory_uri()."/images/drone_icon.png", array('before_widget' => '', 'after_widget' => '') );

the_widget( 'zerif_ourfocus','title=Raspberry Pi&text=Used Raspberry Pi for development Auto Component Defect Defection System.&link=http://cydp0127.cafe24.com/?page_id=14&image_uri='.get_stylesheet_directory_uri()."/images/raspberry_pi_icon.png", array('before_widget' => '', 'after_widget' => '') );

			endif;

			?>



	</div>



</div> <!-- / END CONTAINER -->



</section>  <!-- / END FOCUS SECTION -->