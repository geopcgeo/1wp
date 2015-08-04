<?php
/**
Template Name: Curate People & Places Template
 *
 * @package WordPress
 * @subpackage One_voice
 * @since Onevoice 1.0
 */
get_header(); ?>
          <div class="col-sm-10">
        <div class="content">
          <div class="cont-head"> <img src="images/rareCurate-header.png" border="0"/> </div>
          <div class="rareCurate_nav">
            <div class="clinical_searchbox">
              <div class="input-group">
                <input  type="text" name="searchbox" placeholder="search" id="exampleInputAmount" class="form-control">
                <div class="input-group-addon"><i class="fa  fa-search"></i></div>
              </div>
            </div>
            <div class="dropdown nav_trigger">
              <ul role="tablist" class="nav nav-pills">
                <li class="dropdown" role="presentation"> <a  style="color:#1daaee;" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#" id="drop4"> <span class="icon-experts" style="color:#1daaee;"></span> people & places </a>
                  <ul aria-labelledby="drop4" class="dropdown-menu" id="menu1">
                    <li><a href="evidence-education.html"><span style="color:#6e8fda;" class="icon-evidence-and-education"></span> evidence & education </a></li>
                    <li><a href="people-places.html"><span class="icon-experts" style="color:#1daaee;"></span> people & places </a></li>
                    <li><a href="social-media.html"><span class="icon-social-media" style="color:#1bb19a;"></span> social & media </a></li>
                    <li><a href="news-meetings.html"><span class="icon-news-and-meetings" style="color:#fa9340;"></span> news & meetings </a></li>
                    <li><a href="videos-visuals.html"><span class="icon-videos-and-visuals" style="color:#237d76;"></span> videos & visuals </a></li>
                    <li><a href="research-grants.html"><span class="icon-research-grants" style="color:#84c659;"></span> research grants </a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="people-places-cont">
                <ul role="tablist" class="nav nav-tabs" id="myTabs1">
                  <li class="active" role="presentation"><a aria-expanded="false" aria-controls="people" data-toggle="tab" role="tab" id="home-tab" href="#people">People</a></li>
                  <li role="presentation" class=""><a aria-controls="places" data-toggle="tab" id="profile-tab" role="tab" href="#places" aria-expanded="true">Places</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div aria-labelledby="home-tab" id="people" class="tab-pane fade  active in" role="tabpanel">
                    <div class="panel-group" id="curate-accordion" role="tablist" aria-multiselectable="true">
                     
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			   <?php 
					//the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) );
					global $post;
					$categoriesarray = get_terms('persona-type');
					//print_r($categoriesarray );
					foreach ($categoriesarray as $category) {?> 




					 <div class="panel panel-default">
                        <div class="" role="tab" id="headingOne">
                          <h4 class="panel-title people-places-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  class="collapsed ee_lt_blue_bg"> 	<?php echo $category->name;?>
                            <div class="cl_indicator">- hide</div>
                            </a> </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						
						 <?php $args = array( 'post_type' => 'people', 'persona-type' => $category->name, 'posts_per_page' => -1 );
				 $loop = new WP_Query( $args );
				 while ( $loop->have_posts() ) : $loop->the_post();?>
						
						
						
                          <div class="panel-body">
                   
               
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="<?php echo get_permalink($post->ID); ?><br>">
													<img src="<?php echo $Journal= get_post_meta( $post->ID, "wpcf-image", true );echo " "; ?>">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="<?php echo get_permalink($post->ID); ?>"><?php echo $Journal= get_post_meta( $post->ID, "wpcf-name-prefix", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-first-name", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-middle-name", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-last-name", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-name-suffix", true );echo " "; ?></a><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-specialities", true );echo " "; ?><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-qualification", true );echo " "; ?><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-address", true );echo " "; ?><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-location", true );echo " "; ?>

											</div>
										</div>
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
				  
				    <div aria-labelledby="profile-tab" id="places" class="tab-pane fade" role="tabpanel">
                    <div class="panel-group" id="curate-accordion" role="tablist" aria-multiselectable="true">
                     
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			   <?php 
					//the_content( __( '<p class="serif">Read the rest of this page &rarr;</p>', 'buddypress' ) );
					global $post;
					$categoriesarray = get_terms('places-type');
					//print_r($categoriesarray );
					foreach ($categoriesarray as $category) {?> 




					 <div class="panel panel-default">
                        <div class="" role="tab" id="headingOne">
                          <h4 class="panel-title people-places-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"  class="collapsed ee_lt_blue_bg"> 	<?php echo $category->name;?>
                            <div class="cl_indicator">- hide</div>
                            </a> </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						
						 <?php $args = array( 'post_type' => 'place', 'places-type' => $category->name, 'posts_per_page' => -1 );
				 $loop = new WP_Query( $args );
				 while ( $loop->have_posts() ) : $loop->the_post();?>
						
						
						
                          <div class="panel-body">
                   
               
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="<?php echo get_permalink($post->ID); ?><br>">
													<img src="<?php echo $Journal= get_post_meta( $post->ID, "wpcf-organization-image", true );echo " "; ?>">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a><br>
												
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-organization-address", true );echo " "; ?><br>
											


											</div>
										</div>
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
          </div>
        </div>
      </div>
            </section>
    </section>
</div>

<?php get_footer(); ?>