<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Progress';
$this->params['breadcrumbs'][] = $this->title;
?>
            <!-- Blog -->
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <!-- Blog Content -->
                        <div class="col-lg-12">
                            <div class="blog_content">
                                <p><br><br></p>
                                <div class="blog_title"><?php echo $project['JUDUL']; ?></div>
                                <div class="blog_meta">
                                    <ul>
                                        <li>Dimulai <a href="#"> <?php echo $project['START_DATE']; ?></a></li>
                                        <li>Berakhir <a href="#"><?php echo $project['FINISH_DATE']; ?></a></li>
										<li>Dikembangkan oleh <a href="#"><?php echo $project['NAMA']; ?></a></li>
										<li>Harga <a href="#"><?php echo $project['PRICE']; ?></a></li>
                                    </ul>
                                </div>
                                <div class="blog_image"><img src="<?php $linkto = '@web/data/' . $project['FILE'] ; echo Url::to($linkto); ?>" alt="" width="100%" height="100%"></div>
                                <p><?php echo $project['DETAIL']; ?></p>
                            </div>
					<div class="blog_content">
						<div style="width: 100%; margin: 50px auto">
							<div class="blog_title" style="font-size: 25px">Perkembangan Pembangunan</div><br>
							<div class="progress" style="height:50px;">
								<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $persen['SUM']; ?>" aria-valuemin="0" aria-valuemax="100" style="max-width: <?php echo $persen['SUM']; ?>%; background-color: #f89d13" >
								<span class="title" style="font-size: 18px;"><?php echo $persen['SUM']; ?>%</span>
								</div>
							</div>
						</div>
					</div>
					<div class="blog_content">
						<div style="width: 100%; margin: 50px auto">
							<div class="blog_title" style="font-size: 25px">Perkembangan Pembayaran</div><br>
							<div class="progress" style="height:50px;">
								<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $result; ?>" aria-valuemin="0" aria-valuemax="100" style="max-width: <?php echo $result; ?>%; background-color: #f89d13" >
								<span class="title" style="font-size: 18px;">Rp<?php echo $total['UANG'].',- | '.$result; ?>%</span>
								</div>
							</div>
						</div>
					</div>
					<div class="course_container">
						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Pembangunan</div>
								<div class="tab">Pembayaran</div>
							</div>
							<div class="tab_panels">
								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_content">
										<div class="tab_panel_faq">
											<!-- Accordions -->
											<div class="accordions">
												<div class="elements_accordions">
													<?php
														$i = 1;
                                                        foreach ($progress as $prog) {
                                                            ?>
													<div class="accordion_container">
														<div class="accordion d-flex flex-row align-items-center"><div><b>Perkembangan ke-<?php echo $i; $i++; ?>:</b> <?php echo $prog['PRESENTASE']; ?> %</div></div>
														<div class="accordion_panel">
                                                            <p><?php echo $prog['DETAIL'];?></p>
                                                            <div class="blog_images">
                                                                <div class="row">
                                                                    <div class="col-lg-6 blog_images_col"><div class="blog_image_small"><img src="<?php $linkto = '@web/data/' . $prog['FILE']; echo Url::to($linkto); ?>" alt=""></div></div>
                                                                </div>
                                                            </div>
														</div>
													</div>
													<?php
                                                        }
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_panel tab_panel_2">
									<div class="tab_panel_content">
										<div class="tab_panel_content">
											<!-- Dropdowns -->

											<ul class="dropdowns">
												<?php 
												//var_dump($paid);
												$j = 1;
												foreach ($paid as $pay) {
												?>
												<li>
													<div class="dropdown_item">
														<div class="dropdown_item_title"><span>Pembayaran <?php echo $j; $j++; ?>:</span> Rp<?php echo $pay['MONEY']; ?>,-</div>
													</div>
												</li>
												<?php } ?>
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