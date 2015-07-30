<?php
/**
Template Name: Curate Template
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
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="/onevoice/rarecurate-evidance-education" class="curate-btn-box evidence-education">
                                    	<span class="icon-evidence-and-education" style="color:#ffffff; font-size:75px;"></span>
                                        <h3>evidence & education</h3>
                                        <h5>scientific literature & patient education texts</h5>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="curate-btn-box people-places">
                                        <span class="icon-experts" style="color:#ffffff; font-size:75px;"></span>
                                        <h3>people & places</h3>
                                        <h5>medical & community leaders</h5>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="curate-btn-box social-media">
                                        <span class="icon-evidence-and-education" style="color:#ffffff; font-size:75px;"></span>
                                        <h3>social & media</h3>
                                        <h5>online groups, photo galleries & blogs</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="#" class="curate-btn-box news-meetings">
                                        <span class="icon-news-and-meetings" style="color:#ffffff; font-size:75px;"></span>
                                        <h3>news & meetings</h3>
                                        <h5>latest announcements & gatherings</h5>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="curate-btn-box videos-visuals">
                                        <span class="icon-videos-and-visuals" style="color:#ffffff; font-size:75px;"></span>
                                        <h3>videos & visuals</h3>
                                        <h5>online channels, infographics & slides</h5>
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="curate-btn-box research-grants">
                                        <span class="icon-research-grants" style="color:#ffffff; font-size:75px;"></span>
                                        <h3>research grants</h3>
                                        <h5>how much, to whom, for what</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </section>
</div>

<?php get_footer(); ?>