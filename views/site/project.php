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
								<div class="course_title"><?php echo $project['JUDUL']; ?></div>
								<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<!-- Course Info Item -->
									<div class="course_info_item">
										<div class="course_info_title">Pengembang:</div>
										<div class="course_info_text"><a href="/profile?id=<?php echo $project['USER_ID']; ?>"><?php echo $project['NAMA']; ?></a></div>
									</div>
									<!-- Course Info Item -->
									<div class="course_info_item">
										<div class="course_info_title">Batas Pengerjaan:</div>
										<div class="course_info_text"><?php echo $project['DEADLINE']; ?></div>
									</div>
									<!-- Course Info Item -->
									<div class="course_info_item">
										<div class="course_info_title">Kota:</div>
										<div class="course_info_text"><?php echo $project['KOTA']; ?></div>
									</div>
									<!-- Course Info Item -->
									<div class="course_info_item">
										<div class="course_info_title">Harga:</div>
										<div class="course_info_text"><?php echo $project['PRICE']; ?></div>
									</div>
								</div>
								<!-- Course Image -->
								<div class="course_image"><img src="<?php $linkto = '@web/data/' . $project['FILE']; echo Url::to($linkto); ?>" alt="" width="100%" height="100%"></div>
								<!-- Course Tabs -->
								<div class="course_tabs_container">
									<div class="tabs d-flex flex-row align-items-center justify-content-start">
										<div class="tab active">description</div>
									</div>
									<div class="tab_panels">
										<!-- Description -->
										<div class="tab_panel active">
											<div class="tab_panel_content">
												<div class="tab_panel_text">
													<p><?php echo $project['DETAIL']; ?></p>
												</div>
												<div class="tab_panel_section">
													<div class="tab_panel_subtitle">Apakah anda tertarik?</div>
													<button type="submit" class="comment_button trans_200" style="background-color:#f89d13">pilih proyek ini</button>
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