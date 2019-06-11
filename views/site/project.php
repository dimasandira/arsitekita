<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Project';
$this->params['breadcrumbs'][] = $this->title;
?>
			<!-- Course -->
			<div class="course">
				<div class="container">
					<div class="row">
						<!-- Course -->
						<div class="col-lg-12">
							<div class="course_container">
								<p><br><br><br><br><br></p>
								<div class="course_title">Software Training</div>
								<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<!-- Course Info Item -->
									<div class="course_info_item">
										<div class="course_info_title">Teacher:</div>
										<div class="course_info_text"><a href="#">Jacke Masito</a></div>
									</div>
									<!-- Course Info Item -->
									<div class="course_info_item">
										<div class="course_info_title">Reviews:</div>
										<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
									</div>
									<!-- Course Info Item -->
									<div class="course_info_item">
										<div class="course_info_title">Categories:</div>
										<div class="course_info_text"><a href="#">Languages</a></div>
									</div>
								</div>
								<!-- Course Image -->
								<div class="course_image"><img src="<?php echo Url::to('@web/images/course_image.jpg'); ?>" alt="" width="100%" height="100%"></div>
								<!-- Course Tabs -->
								<div class="course_tabs_container">
									<div class="tabs d-flex flex-row align-items-center justify-content-start">
										<div class="tab active">description</div>
										<div class="tab">reviews</div>
									</div>
									<div class="tab_panels">
										<!-- Description -->
										<div class="tab_panel active">
											<div class="tab_panel_title">Software Training</div>
											<div class="tab_panel_content">
												<div class="tab_panel_text">
													<p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos.</p>
												</div>
												<div class="tab_panel_section">
													<div class="tab_panel_subtitle">Requirements</div>
													<ul class="tab_panel_bullets">
														<li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>
														<li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>
														<li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>
														<li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
													</ul>
												</div>
												<div class="tab_panel_section">
													<div class="tab_panel_subtitle">What is the target audience?</div>
													<div class="tab_panel_text">
														<p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
													</div>
												</div>
												<div class="tab_panel_section">
													<div class="tab_panel_subtitle">What is the target audience?</div>
													<button type="submit" class="comment_button trans_200">submit now</button>
												</div>
											</div>
										</div>
										<!-- Reviews -->
										<div class="tab_panel tab_panel_3">
											<div class="tab_panel_title">Course Review</div>

											<!-- Rating -->
											<div class="review_rating_container">
												<div class="review_rating">
													<div class="review_rating_num">4.5</div>
													<div class="review_rating_stars">
														<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
													</div>
													<div class="review_rating_text">(28 Ratings)</div>
												</div>
												<div class="review_rating_bars">
													<ul>
														<li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
														<li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
														<li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
														<li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
														<li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
													</ul>
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