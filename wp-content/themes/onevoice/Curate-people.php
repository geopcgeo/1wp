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
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">
													<img src="images/pp_doctor.png" border="0">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">Lauren Korty, MS</a><br>
												HEALTHCARE PROVIDER<br>
												Huntington's Disease Clinical Research Center, University of California , San Diego (UCSD) School of Medicine<br>
												San Diego, CA, USA

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/nancy-wexler-phd/">
													<img width="94" src="images/f182577fe9fe15078e297c5b8bf9cee6.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/nancy-wexler-phd/">Nancy Wexler, PhD</a><br>
												HEALTHCARE PROVIDER<br>
												Departments of Neurology and Psychiatry of the College of Physicians and Surgeons at Columbia University<br>
												New York, NY, USA

											</div>
										</div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/raphael-m-bonelli/">
													<img width="94" src="images/2abb4bdff964a47f3376da184385cf1c.jpg.png">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/raphael-m-bonelli/">Raphael M. Bonelli</a><br>
												HEALTHCARE PROVIDER<br>
												Sigmund Freud University<br>
												Vienna, Austria

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/ferdinando-squitieri-md-phd/">
													<img width="94" src="images/3ec19b8cbfa750a22e360cd0ecc33a43.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/ferdinando-squitieri-md-phd/">Ferdinando Squitieri, MD, PhD</a><br>
												HEALTHCARE PROVIDER<br>
												Neuromed<br>
												Pozzilli (IS), Italy

											</div>
										</div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/herminia-diana-rosas-md/">
													<img src="images/pp_doctor.png">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/herminia-diana-rosas-md/">Herminia Diana Rosas, MD</a><br>
												HEALTHCARE PROVIDER<br>
												Harvard Medical School/Massachusetts General Hospital<br>
												Boston, MA, USA

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/michael-geschwind-phd-md/">
													<img width="94" src="images/daf9ca15680071475dd27bcf72f79d29.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/michael-geschwind-phd-md/">Michael Geschwind, PhD, MD</a><br>
												HEALTHCARE PROVIDER<br>
												University of California, San Francisco (UCSF) School of Medicine<br>
												San Francisco, CA, USA

											</div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/victor-w-sung-md/">
													<img width="94" src="images/97e60451735a55158b3464c6806e023c.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/victor-w-sung-md/">Victor W. Sung, MD</a><br>
												HEALTHCARE PROVIDER<br>
												University of Alabama at Birmingham School of Medicine<br>
												Birmingham, AL, USA

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/roger-l-albin-md/">
													<img width="94" src="images/aa301b765bbc00580f2d815c456d0b70.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/roger-l-albin-md/">Roger L. Albin, MD</a><br>
												HEALTHCARE PROVIDER<br>
												University of Michigan Health System<br>
												Ann Arbor, MI, USA

											</div>
										</div>
                                </div>
                            </div>
                          </div>
                        </div>
						
						  	<?php  	endwhile; ?>		
						
                      </div>

                    
					  
			
			          <?php }	?>   <?php endwhile; endif; ?>		  
					  
					  
                    </div>
                



				</div>
				  
				  
				  
				  
				  
				  
                  <div aria-labelledby="profile-tab" id="places" class="tab-pane fade" role="tabpanel">
                  	<div class="panel-group" id="curate-accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="" role="tab" id="headingOne">
                          <h4 class="panel-title people-places-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapseOne"  class="collapsed ee_lt_blue_bg"> academic & healthcare centers (8)
                            <div class="cl_indicator">- hide</div>
                            </a> </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                          	<div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">
													<img src="images/ehdn-94x11.jpg" border="0">
												</a>
											</div>
											<div class="pp_bucket_info">
											
                                               <a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/european-huntingtond-disease-network/">European Huntington's Disease Network</a><br>Europe<br>(multi-institutional collaboration)<br><a href="http://www.euro-hd.net/">website</a>

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/nancy-wexler-phd/">
													<img width="94" src="images/uclh100-94x44.png">
												</a>
											</div>
											<div class="pp_bucket_info">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/ucl-huntingtons-disease-multidisciplinary-clinic/">UCL Huntington's Disease Multidisciplinary Clinic</a><br>London, United Kingdom<br>University College London<br><a href="mailto:rachel.taylor@uclh.nhs.uk">email</a> <a href="tel:020 7837 3611 (ext 4176)">phone</a> <a href="http://hdresearch.ucl.ac.uk/hd-clinic/">website</a>

											</div>
										</div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/raphael-m-bonelli/">
													<img width="94" src="images/Screen-Shot-2015-04-13-at-2.07.56-PM-94x15.png">
												</a>
											</div>
											<div class="pp_bucket_info">
											
<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/huntingtons-disease-clinic-2/">Huntington's Disease Clinic</a><br>Cleveland, OH, USA<br>Cleveland Clinic<br><a href="tel:216-444-3596">phone</a> <a href="http://my.clevelandclinic.org/services/neurological_institute/center-for-neurological-restoration/treatment-services/huntington-disease-clinic">website</a>
											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/ferdinando-squitieri-md-phd/">
													<img width="94" src="images/mass-gen-94x20.png">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/huntingtons-disease-unit-at-the-massachusetts-general-hospital-movement-disorders-unit/">Huntington’s Disease Unit at the Massachusetts General Hospital, Movement Disorders Unit</a><br>Boston, MA, USA<br>Massachusetts General Hospital<br><a href="tel:617-726-5532">phone</a> <a href="http://www.massgeneral.org/neurology/services/treatmentprograms.aspx?id=1044">website</a> 

											</div>
										</div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/herminia-diana-rosas-md/">
													<img src="images/cu-logo-94x18.gif">
												</a>
											</div>
											<div class="pp_bucket_info">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/columbia-university-hdsa-center-of-excellence/">Columbia University HDSA Center of Excellence</a><br>New York, NY, USA<br>Columbia University Medical Center<br><a href="mailto:dzt1@cumc.columbia.edu">email</a> <a href="tel:212-305-9172">phone</a> <a href="http://www.hdny.org/index.html">website</a>

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/michael-geschwind-phd-md/">
													<img width="94" src="images/hcmc_header_logo_subpages-94x25.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/huntingtons-disease-clinic/">Huntington's Disease Clinic</a><br>Minneapolis, MN, USA<br>Hennepin County Medical Center<br><a href="tel:612-873-6963">phone</a> <a href="http://hcmc.org/clinics/huntingtons/index.htm">website</a>

											</div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/victor-w-sung-md/">
													<img width="94" src="images/USC-logo-94x34.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/iu-health-neuroscience-center/">IU Health Neuroscience Center</a><br>Indianapolis, IN, USA<br>Indiana University<br><a href="tel:317-916-3525">phone</a> <a href="http://iuhealth.org/neuroscience-center/specialties/huntingtons-disease/">website</a>

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/roger-l-albin-md/">
													<img width="94" src="images/university-hospitals-94x25.gif">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/huntington-disease-clinic/">Huntington Disease Clinic</a><br>Iowa City, IA, USA<br>University of Iowa<br><a href="mailto:hdcenter@uiowa.edu">email</a> <a href="tel:800-777-8442 (ext. 34307) or 319-353-4307">phone</a> <a href="https://www.uihealthcare.org/huntingtondisease/">website</a> 

											</div>
										</div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="" role="tab" id="headingTwo">
                          <h4 class="panel-title people-places-title"> <a class="collapsed  grey_bg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapseTwo">community organizations (4)
                            <div class="cl_indicator ">+ show</div>
                            </a> </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">
													<img src="images/AICH_milano.gif" border="0">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/italian-association-for-huntingtons-chorea/">Italian Association for Huntington's Chorea</a><br>Milan, Italy<br><a href="mailto:secretariat @ aichmilano .it">email</a> <a href="tel:345.49.87.911">phone</a> <a href="http://www.aichmilano.it/">website</a>

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/nancy-wexler-phd/">
													<img width="" src="images/ee_places.png">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/huntingtons-association-in-israel/">Huntington's Association in Israel</a><br>Israel<br><a href="mailto:Huntington.il.org@gmail.com">email</a> <a href="tel:08-8598573">phone</a> <a href="http://huntington.org.il/">website</a>

											</div>
										</div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/raphael-m-bonelli/">
													<img width="" src="images/iha_logo_75.jpg">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/japan-huntingtons-disease-network/">Japan Huntington's Disease Network</a><br><a href="http://www.jhdn.org/">website</a>

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/ferdinando-squitieri-md-phd/">
													<img width="" src="images/AHDA_australia.gif">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/australian-huntingtons-disease-association/">Australian Huntington's Disease Association</a><br>North Adelaide, SA, Australia<br><a href="mailto:mail@huntingtonssa.org">email</a> <a href="tel:(08) 8352 2202">phone</a> <a href="http://www.huntingtonssa.org/">website</a>

											</div>
										</div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="" role="tab" id="headingThree">
                          <h4 class="panel-title people-places-title"> <a class="collapsed grey_bg" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapseThree"> communication organizations (1)
                            <div class="cl_indicator ">+ show</div>
                            </a> </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <div class="row">
                            	<div class="col-sm-6">
                                	<div class="pp_bucket">
											<div class="pp_bucket_img">
												<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/lauren-korty-ms/">
													<img src="images/HDBuzz1.png" border="0">
												</a>
											</div>
											<div class="pp_bucket_info">
											<a class="" href="http://hd.demo.onevoice.world/rcurate/rarecurate-2/people-and-places/hd-buzz/">HD Buzz</a><br><a href="http://en.hdbuzz.net/">website</a>

											</div>
										</div>
                                </div>
                                <div class="col-sm-6">
                                	<div class="pp_bucket">
											
										</div>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
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