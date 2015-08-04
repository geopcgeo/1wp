<?php
/**

 *
 * @package WordPress
 * @subpackage One_voice
 * @since Onevoice 1.0
 */
get_header(); ?>
    <div class="col-sm-10">
                    	<div class="content">
                            <div class="cont-head">
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
                                	<div class="clinical_share">
                                        <a href="/?usrshare=758"><span class="icon-talk"></span> talk</a>
                                        <a class="various fancybox.ajax" href="/social-share/"><span class="icon-share-on-social"></span> share</a>
                                        <a href="#"><span class="icon-myBinder"></span> add to myBinder</a>
                                    </div>
                                    <div class="row">
																		
													
                                    	<div class="col-sm-9 inner-cont">
                                        	<h3>	<?php echo the_title(); ?><br></h3>
                                            <div class="cl_trial_info">
                                                <div class="curate_info_content">

												<a class="" href="<?php echo get_permalink($post->ID); ?><br>">
													<img src="<?php echo $Journal= get_post_meta( $post->ID, "wpcf-image", true );echo " "; ?>">
												</a>
										
									
										<?php echo $Journal= get_post_meta( $post->ID, "wpcf-name-prefix", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-first-name", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-middle-name", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-last-name", true );echo " "; ?><?php echo $Journal= get_post_meta( $post->ID, "wpcf-name-suffix", true );echo " "; ?><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-specialities", true );echo " "; ?><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-qualification", true );echo " "; ?><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-address", true );echo " "; ?><br>
												<?php echo $Journal= get_post_meta( $post->ID, "wpcf-location", true );echo " "; ?>

												
												
												
                                              <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		the_content();

		// End the loop.
		endwhile;
		?>
														

                                                 
                                              </div>
                                             </div>
                                         
                                    	</div>
                                        <div class="col-sm-3">
                                        	<div class="details-right-rel">
                                                <ul class="rare-list">
                                                    <li>
                                                        <div class="rel_icon"><span class="icon-experts" style="color:#1daaee;"></span></div>
                                                        <div class="rel_title">
                                                            <a href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">Lauren Korty, MS</a>
                                                        </div>
                                                        <div class="rel_source">Source: Huntington's Disease Clinical Research Center, University of California , San Diego (UCSD) School of Medicine</div>
                                                    </li>
                                                    <li>
                                                        <div class="rel_icon"><span class="icon-research-grants" style="color:#84c659;"></span></div>
                                                        <div class="rel_title">
                                                            <a href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/rarecurate-nih-research-grants/families-at-risk-long-term-impact-of-huntingtons-presymptomatic-genetic-testing/">Families At Risk: Long-Term Impact of Huntington's Presymptomatic Genetic Testing</a>
                                                        </div>
                                                        <div class="rel_source">Source: NIH RePORTER</div>
                                                    </li>
                                                    <li>
                                                        <div class="rel_icon"><span class="icon-news-and-meetings" style="color:#fa9340;"></span></div>
                                                        <div class="rel_title">
                                                            <a href="http://www.dailyrecord.co.uk/news/real-life/five-brave-siblings-face-life-changing-5757932" target="_blank">Five brave siblings face life-changing blood tests to reveal if they have deadly Huntington's disease</a>
                                                        </div>
                                                        <div class="rel_source">Source: dailyrecord.co.uk</div>
                                                    </li>
                                                    <li>
                                                        <div class="rel_icon"><span class="icon-clinical" style="color:#269fd9;"></span></div>
                                                        <div class="rel_title">
                                                            <a href="http://hd.demo.onevoice.world/rclinical/family-health-after-predictive-huntington-disease-hd-testing/">Family Health After Predictive Huntington Disease (HD) Testing</a>
                                                        </div>
                                                        <div class="rel_source">Source: </div>
                                                    </li>
                                                    <li>
                                                        <div class="rel_icon"><span class="icon-videos-and-visuals" style="color:#237d76;"></span></div>
                                                        <div class="rel_title">
                                                            <a href="https://www.youtube.com/embed/cptrFznN7cE" class="various fancybox.iframe">Genetic Testing for Huntington's Disease</a>
                                                        </div>
                                                        <div class="rel_source">Source: HOPES (via YouTube)</div>
                                                    </li>
                                                    <li>
                                                        <div class="rel_icon"><span class="icon-courage" style="color:#10ac96;"></span></div>
                                                        <div class="rel_title">
                                                            <a href="http://hd.demo.onevoice.world/">Does anyone know of an anonymous service for …</a>
                                                        <div class="rel_source">Source: rareCourage discussion</div>
                                                    </div></li>
                                                    <li>
                                                        <div class="rel_icon"><span class="icon-evidence-and-education" style="color:#6e8fda;"></span></div>
                                                        <div class="rel_title">
                                                            <a href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">Lauren Korty, MS</a>
                                                        </div>
                                                        <div class="rel_source">Source: Huntington's Disease Clinical Research Center, University of California , San Diego (UCSD) School of Medicine</div>
                                                    </li>
                                                </ul>
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