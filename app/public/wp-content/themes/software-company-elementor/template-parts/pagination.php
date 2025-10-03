<?php if(get_theme_mod('software_company_elementor_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'software-company-elementor' ),
			'next_text' => esc_html__( 'Next page', 'software-company-elementor' ),
		) );
	?>		
<?php endif; ?>