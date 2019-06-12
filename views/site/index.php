<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Home — ArsiteKita';

?>
			<!-- Home -->
			<div class="home">
				<div class="home_slider_container">
					<!-- Home Slider -->
					<div class="owl-carousel owl-theme home_slider">
						<!-- Home Slider Item -->
						<div class="owl-item">
							<div class="home_slider_background" style="background-image:url(<?php echo Url::to('@web/images/architecture-black-and-white-black-and-white-911738.jpg'); ?>)"></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="home_slider_title">Bukan Sekadar Tempat Berteduh</div>
											<div class="home_slider_subtitle">Arsitektur bukan sekadar tempat berteduh, melainkan rumah kesederhanaan yang seharusnya menggairahkan dan membuat kita berpikir lebih jauh.</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Home Slider Item -->
						<div class="owl-item">
							<div class="home_slider_background" style="background-image:url(<?php echo Url::to('@web/images/architectural-design-architecture-building-1882979.jpg'); ?>)"></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="home_slider_title">Arsitektur adalah Kebahagiaan</div>
											<div class="home_slider_subtitle">Arsitektur ialah berbicara tentang kesejahteraan, tempat orang bisa nyaman berada di bawah satu ruang, tempat berlindung, dan berbagi kebahagiaan.</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Home Slider Item -->
						<div class="owl-item">
							<div class="home_slider_background" style="background-image:url(<?php echo Url::to('@web/images/bricks-brickwall-brickwork-1092364.jpg'); ?>)"></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="home_slider_title">Tentang Desain</div>
											<div class="home_slider_subtitle">Desain yang brilian akan selalu mendapatkan masukan dan memberikan manfaat bagi orang lain.</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Home Slider Nav -->
				<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
				<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
			</div>

			<!-- Features -->
			<div class="features">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title_container text-center">
								<h2 class="section_title">Selamat Datang di ArsiteKita</h2>
								<div class="section_subtitle"><p>Sarana informatif dan komunikatif bagi pengembang dan pemilik bangunan</p></div>
							</div>
						</div>
					</div>
					<div class="row features_row">
						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon"><img src="<?php echo Url::to('@web/images/housing.png'); ?>" alt=""></div>
								<h3 class="feature_title">Rumah Terbaik</h3>
								<div class="feature_text"><p>Wujudkan pembangunan hunian impian anda</p></div>
							</div>
						</div>
						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon"><img src="<?php echo Url::to('@web/images/blueprint.png'); ?>" alt=""></div>
								<h3 class="feature_title">Rancangan</h3>
								<div class="feature_text"><p>Kenali dan amati setiap perkembangannya</p></div>
							</div>
						</div>
						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon"><img src="<?php echo Url::to('@web/images/engineers.png'); ?>" alt=""></div>
								<h3 class="feature_title">100+ Developer</h3>
								<div class="feature_text"><p>Proyek banyak dikembangkan secara riil dan terpercaya</p></div>
							</div>
						</div>
						<!-- Features Item -->
						<div class="col-lg-3 feature_col">
							<div class="feature text-center trans_400">
								<div class="feature_icon"><img src="<?php echo Url::to('@web/images/owner.png'); ?>" alt=""></div>
								<h3 class="feature_title">Konstribusi</h3>
								<div class="feature_text"><p>Menghubungkan antara developer dan owner</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="site-section site-section-sm bg-light">
				<div class="container">
					<div class="row mb-5">
						<div class="col-12">
							<div class="site-section-title">
								<h2>Proyek Terbaru</h2>
							</div>
						</div>
					</div>
					<div class="row mb-5">
					<?php foreach ($projects as $project) {
                        ?>
						<div class="col-md-6 col-lg-4 mb-4">
							<a href="/project?id=<?php echo (int) $project['ID']; ?>" class="prop-entry d-block">
								<figure><img src="<?php $linkto = '@web/data/'. $project['FILE']; echo Url::to($linkto); ?>" alt="Image" class="img-fluid"></figure>
								<div class="prop-text">
									<div class="inner">
										<span class="price rounded">Rp.<?php echo $project['HARGA']; ?>,-</span>
										<h3 class="title"><?php echo $project['JUDUL']; ?></h3>
									</div>
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<!-- Latest News -->
			<div class="news">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section_title_container text-center">
								<h2 class="section_title">Berita Terbaru</h2>
								<div class="section_subtitle"><p>Sumber wawasan terhangat mengenai arsitektur dan bangunan-bangunan yang ada di dunia, dilengkapi dengan pengamatan dan tips-trik tentang bidang sipil serta pengembangan</p></div>
							</div>
						</div>
					</div>
					<div class="row news_row">
						<div class="col-lg-7 news_col">
							<!-- News Post Large -->
							<div class="news_post_large_container">
								<div class="news_post_large">
									<div class="news_post_image"><img src="<?php echo Url::to('@web/images/architecture-building-city-149638.jpg'); ?>" alt=""></div>
									<div class="news_post_large_title"><a href="kisah-menara-eiffel-yang-tak-banyak-diketahui.php">Kisah Menara Eiffel yang Tak Banyak Diketahui</a></div>
									<div class="news_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">May 05, 2018</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Kita mungkin tidak asing lagi dengan Gustave Eiffel, perancang handal yang sangat terkenal di dunia arsitektur. Eiffel sebelumnya telah merancang beberapa struktur logam lainnya seperti beberapa...</p>
									</div>
									<div class="news_post_link"><a href="blog_single.html">read more</a></div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 news_col">
							<div class="news_posts_small">
								<!-- News Posts Small -->
								<div class="news_post_small">
									<div class="news_post_small_title"><a href="6-fakta-menarik-burj-khalifa.php">6 Fakta Menarik Burj Khalifa, Bangunan Tertinggi di Dunia</a></div>
									<div class="news_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">May 05, 2018</a></li>
										</ul>
									</div>
								</div>
								<!-- News Posts Small -->
								<div class="news_post_small">
									<div class="news_post_small_title"><a href="arsitek-museum-louvre-meninggal-dunia.php">Arsitek Museum Louvre Meninggal Dunia</a></div>
									<div class="news_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">May 05, 2018</a></li>
										</ul>
									</div>
								</div>
								<!-- News Posts Small -->
								<div class="news_post_small">
									<div class="news_post_small_title"><a href="pesona-jama-masjid-delhi.php">Pesona Jama Masjid Delhi, Warisan Arsitektur India Abad ke-17</a></div>
									<div class="news_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">May 05, 2018</a></li>
										</ul>
									</div>
								</div>
								<!-- News Posts Small -->
								<div class="news_post_small">
									<div class="news_post_small_title"><a href="arsitektur-islam-di-yerusalem.php">Arsitektur Islam di Yerusalem</a></div>
									<div class="news_post_meta">
										<ul>
											<li><a href="#">admin</a></li>
											<li><a href="#">May 05, 2018</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-section site-section-sm" style="background-color:#f89d13;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-8">
							<h2 class="text-white">Dapatkan voucher makan gratis</h2>
							<p class="lead text-white-5">hanya dengan memberikan saran dan komentar untuk pengembangan website kami</p>
						</div>
						<div class="col-md-4 text-center">
							<a href="/form/testimoni" class="btn btn-outline-primary btn-block py-3 btn-lg">Lanjutkan Testimoni</a>
						</div>
					</div>
				</div>
			</div>