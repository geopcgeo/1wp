<?php
/**
Template Name: Curate Evidance & Education Template
 *
 * @package WordPress
 * @subpackage One_voice
 * @since Onevoice 1.0
 */
get_header(); ?>
     <div class="col-sm-10">
                    	<div class="content">
                            <div class="cont-head">
							<?php echo the_title(); ?>
							
							
					
								
							
				
							
							
							
							
							
							
							
							
							 <img src="<?php echo get_template_directory_uri(); ?>/images/rareCurate-header.png" border="0"/>
                            </div>
                            <div class="rareCurate_nav">
                            	<div class="clinical_searchbox">
                                	<div class="input-group">
                                      <input  type="text" name="searchbox" placeholder="search" id="exampleInputAmount" class="form-control">
                                      <div class="input-group-addon"><i class="fa  fa-search"></i></div>
                                    </div>
                                </div>
                                <div class="dropdown nav_trigger">
                                  <ul role="tablist" class="nav nav-pills">
      
                                  <li class="dropdown" role="presentation">
                                    <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#" id="drop4">
                                      <span class="icon-evidence-and-education"></span>
                                       evidence &amp; education
                                    </a>
                                    <ul aria-labelledby="drop4" class="dropdown-menu" id="menu1">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider" role="separator"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                  </li>
                                  
                                </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                	<div class="panel-group" id="curate-accordion" role="tablist" aria-multiselectable="true">
                                      		
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			   <?php 
					//the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) );
					global $post;
					$categoriesarray = get_terms('evidance-categories');
					//print_r($categoriesarray );
					foreach ($categoriesarray as $category) {?> 
					<div class="panel panel-default">
									  
									  
                                        <div class="" role="tab" id="headingOne">
                                          <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  class="collapsed ee_blue_bg">
                                            					<?php echo $category->name;?>
                                              <div class="cl_indicator">- hide</div>
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
										  <?php $args = array( 'post_type' => 'evidance-education', 'evidance-categories' => $category->name, 'posts_per_page' => -1 );
				 $loop = new WP_Query( $args );
				 while ( $loop->have_posts() ) : $loop->the_post();?>
                                          <div class="curate_info_content">
                                           		<div class="info_title collapsed">
                                                	<?php echo the_title(); ?><br>
                                                    <span style="font-size:13px;font-style:italic;color:#677783;">	<?php echo $Journal= get_post_meta( $post->ID, "wpcf-journal", true );echo " "; ?></span>
                                                </div>
                                                <div class="info_cont_hide">
<p>	<?php the_content();?></p>

                                                    <div class="trial_readmore"><a class="button_grey" href="<?php echo get_permalink($post->ID); ?>">read more</a></div>


											   </div>
                                         
										  </div>
										<?php  	endwhile; ?>
  

	
					
		
			
										      
                                             
								
                                          </div>
                                        </div>
                                   
									 </div>
                                   <?php }	?>   <?php endwhile; endif; ?>
                                    
									  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </section>
</div>

<?php get_footer(); ?>