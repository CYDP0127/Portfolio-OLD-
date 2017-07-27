<section class="about-us" id="aboutus">
	<div class="container">


		<!-- SECTION HEADER -->

		<div class="section-header">


			<!-- SECTION TITLE -->

			<?php 
			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About','zerif-lite'));
			
			if( !empty($zerif_aboutus_title) ):
				echo '<h2 class="white-text">'.__($zerif_aboutus_title,'zerif-lite').'</h2>';
			endif;
			?>

			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->

			<?php


				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Use this section to showcase important details about your business.','zerif-lite'));


				if( !empty($zerif_aboutus_subtitle) ):


					echo '<h6 class="white-text">';


						echo __($zerif_aboutus_subtitle,'zerif-lite');


					echo '</h6>';


				endif;


			?>
		</div><!-- / END SECTION HEADER -->


		<!-- 3 COLUMNS OF ABOUT US-->


		<div class="row" style="width:100%">


			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->


			<?php


			$zerif_aboutus_biglefttitle = get_theme_mod('zerif_aboutus_biglefttitle',__('Everything you see here is responsive and mobile-friendly.','zerif-lite'));
			$zerif_aboutus_text = get_theme_mod('zerif_aboutus_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.');
			$zerif_aboutus_feature1_title = get_theme_mod('zerif_aboutus_feature1_title',__('YOUR SKILL #1','zerif-lite'));
			$zerif_aboutus_feature1_text = get_theme_mod('zerif_aboutus_feature1_text');

			switch (
				(empty($zerif_aboutus_biglefttitle) ? 0 : 1)
				+ (empty($zerif_aboutus_text) ? 0 : 1)
				+ (empty($zerif_aboutus_feature1_title) && empty($zerif_aboutus_feature1_text) ? 0 : 1)
			) {
				case 3:
					$colCount = 4;
					$colCount_text = 8;
					break;
				case 2:
					$colCount = 6;
					break;
				default:
					$colCount = 12;
			}


				if( !empty($zerif_aboutus_biglefttitle) ):


					echo '<div class="col-lg-' . $colCount . ' col-md-' . $colCount . ' column">';


						echo '<div class="big-intro" data-scrollreveal="enter left after 0s over 1s">';


							echo __($zerif_aboutus_biglefttitle,'zerif-lite');


						echo '</div>';


					echo '</div>';


				endif;


			if( !empty($zerif_aboutus_text) ):

				echo '<div style="width:300px" class="col-lg-' . $colCount_text . ' col-md-' . $colCount_text . ' column" data-scrollreveal="enter bottom after 0s over 1s" >';


						echo '<p>';


							echo __($zerif_aboutus_text,'zerif-lite');


						echo '</p>';


					echo '</div>';


				endif;

			

			?>

	</div> <!-- / END 3 COLUMNS OF ABOUT US-->





	<!-- CLIENTS -->
	<?php
		if(is_active_sidebar( 'sidebar-aboutus' )):
			echo '<div class="our-clients">';
				echo '<h5><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h5>';
			echo '</div>';

			echo '<div class="client-list">';
				echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
				dynamic_sidebar( 'sidebar-aboutus' );
				echo '</div>';
			echo '</div> ';
		endif;
	?>


</div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->