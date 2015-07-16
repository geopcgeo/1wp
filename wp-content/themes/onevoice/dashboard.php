<?php
/**
Template Name: Dasboard Template
 *
 * @package WordPress
 * @subpackage One_voice
 * @since Onevoice 1.0
 */
get_header(); ?>
      	<div class="col-sm-10">
                    	<div class="content">
                            <div class="dash_head">
                                good evening,  <strong>Tony</strong>            	
                                <div class="dash_head_button "><a href="#"><img class="dropbinder ui-droppable" src="http://hd.demo.onevoice.world/wp-content/themes/twentyeleven/images/note-to-self.png"></a></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dash-well">
                                        <div id="dash_courage" class="dash-well-head">
                                            top conversation
                                        </div>
                                        <div class="dash-well-cont">
                                        More tests today to assess my disease progression. The doctor remains optimistic, but think I am becoming more forgetful - can't remember where I'm supposed to be sometimes and it sucks.
                                        </div>
                                        <div class="dash-footer">
                                            <a href="#">Angela_R1970</a>
                                            <span class="courage_post_posted_date">Jul 7, 2015 at 1:13 am </span>
                                        </div>
                                    </div>
                                    <div class="dash-well">
                                        <div id="dash_curate" class="dash-well-head">
                                            featured content 
                                        </div>
                                        <div class="dash-well-cont">
                                        recommendations-for-the-predictive-genetic-test-in-huntingtons-disease
                                        </div>
                                        <div class="dash-footer">
                                            <a href="#">Source: Clin Genet</a><br>
                                            <span class="courage_post_posted_date" style="font-size:10px;">Jul 6, 2015 at 6:45 am  </span>
                                        </div>
                                        <div class="dash-rel">
                                        	<ul class="rare-list">
                                            	<li>
                                                	 	<?php if ( dynamic_sidebar('dashboard-sidebar-1') ) : else : endif; ?>
												</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="dash-well">
									 <div class="center-col-title">rare <strong>Poll</strong></div>
									<?php if ( dynamic_sidebar('dashboard-sidebar-2') ) : else : endif; ?>
                                        <!--
                                        <div class="poll_content">The need for technology solutions combining emotional support and knowledge resources is:
                                            <div class="poll_content_in">
                                                <input type="radio" id="p_crit" name="poll"><label for="p_crit">critical</label><br>
                                                <input type="radio" id="p_mid" name="poll"><label for="p_mid">somewhere in the middle</label><br>
                                                <input type="radio" id="p_low" name="poll"><label for="p_low">low</label><br>
                                            </div>
                                            <a class="poll_button" href="#">+ submit answer</a>
                                        </div>-->
                                    </div>
                                    <div class="dash-well">
                                        <div id="dash_clinical" class="dash-well-head">
                                            recruiting trials 
                                        </div>
                                        <div class="dash-well-cont">
                                        	<ul class="dash_trialst">
                                            	<li>
                                                	  <a href="#">Randomized, Placebo Controlled Study Of The Efficacy …</a>
                                                      <br>
                                                      <span style="font-size:13px;">Category: investigational/potential treatment or device</span>
                                                </li>
                                                <li>
                                                	  <a href="#">Randomized, Placebo Controlled Study Of The Efficacy …</a>
                                                      <br>
                                                      <span style="font-size:13px;">Category: investigational/potential treatment or device</span>
                                                </li>
                                                <li>
                                                	  <a href="#">Randomized, Placebo Controlled Study Of The Efficacy …</a>
                                                      <br>
                                                      <span style="font-size:13px;">Category: investigational/potential treatment or device</span>
                                                </li>
                                            </ul>
                                        </div>
                                       <div class="dash_trial_view_all">
                                       		<a href="/rareclinical/">view all 24</a>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="dash-well">
                                       <div class="enc_power">
                                       		<div class="right-col-title">encouragement power</div>
                                            <div class="enc_power-img"> <img src="<?php echo get_template_directory_uri()?>/images/stripes-number.png" border="0"/> </div>
                                       </div>
                                    </div>
                                    <div class="dash-well">
                                        <div class="community_leaderboard">
                                            become a part of our<br> community leaderboard
                                        </div>
                                    </div>
                                    <div class="dash-well">
                                       	<div class="dash_new_member">
                                        	<div class="right-col-title">new members</div>
                                            <ul class="new_member-list">
                                                <li>  
                                                	<?php if ( dynamic_sidebar('dashboard-sidebar-3') ) : else : endif; ?>
                                                </li>
                                                
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="dash-well">
                                        <div class="right-col-title">suggestions</div>
                                        <div class="suggestions-box">
                                        	<h4>got a suggestion?</h4>
											<h3>we’re listening!</h3>
                                            <textarea rows="5"></textarea>
                                            <input type="button" value="Send">
                                            <div class="clear"></div>
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