<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="super_container">
			<!-- Header -->
			<header class="header">
				<!-- Top Bar -->
				<div class="top_bar">
					<div class="top_bar_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
										<ul class="top_bar_contact_list">
											<li><div class="question">Ingin bertanya sesuatu?</div></li>
											<li><i class="fa fa-phone" aria-hidden="true"></i><div>001-1234-88888</div></li>
											<li><i class="fa fa-envelope-o" aria-hidden="true"></i><div>info.arsitekita@gmail.com</div></li>
										</ul>
										<div class="top_bar_login ml-auto">
											<div class="login_button"><a href="/register">Daftar</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
				<!-- Header Content -->
				<div class="header_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo_container">
										<a href="#"><div class="logo_text">Arsite<span>Kita</span></div></a>
									</div>
									<nav class="main_nav_contaner ml-auto">
										<ul class="main_nav">
											<li class="active"><a href="/">Beranda</a></li>
											<li><a href="/about">Tentang</a></li>
											<li><a href="/projects">Proyek</a></li>
											<li><a href="/developers">Pengembang</a></li>
											<li><a href="/login">Masuk</a></li>
										</ul>
										<div class="hamburger menu_mm">
											<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- Menu -->
			<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
				<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
				<nav class="menu_nav">
					<ul class="menu_mm">
						<li class="menu_mm"><a href="/">Beranda</a></li>
						<li class="menu_mm"><a href="/about">Tentang</a></li>
						<li class="menu_mm"><a href="/projects">Proyek</a></li>
						<li class="menu_mm"><a href="/developers">Pengembang</a></li>
						<li class="menu_mm"><a href="/login">Masuk</a></li>
					</ul>
				</nav>
			</div>
			</div>
      <!-- About -->
      <div class="about bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p><br><br><br><br></p>
            </div>
            <div class="col">
              <div class="section_title_container text-center">
                  <h2 class="section_title">Selamat Datang di ArsiteKita</h2>
                  <div class="section_subtitle"><p>Sarana informatif dan komunikatif bagi pengembang dan pemilik bangunan</p></div>
              </div>
            </div>
          </div>
          <div class="row about_row">
            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_left">
              <div class="about_item">
                <div class="about_item_image"><img src="<?php echo Url::to('@web/images/business-people-calendar-cellphone-1187439.jpg'); ?>" alt=""></div>
                <div class="about_item_title"><a href="#">Pertemuan Rutin</a></div>
                <div class="about_item_text">
                    <p>Selalu ada kewajiban pertemuan rutin untuk perkembangan dari proyek yang telah disepakati sehingga antara kedua belah pihak saling mendapat kepercayaan.</p>
                </div>
              </div>
            </div>
            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_middle">
              <div class="about_item">
                <div class="about_item_image"><img src="<?php echo Url::to('@web/images/arrangement-color-colors-159045.jpg'); ?>" alt=""></div>
                <div class="about_item_title"><a href="#">Impian Project Owner</a></div>
                <div class="about_item_text">
                  <p>Konsep dari website ini adalah customer oriented yang menomor satukan bangunan impian yang diinginkan oleh project owner sehingga dapat memperoleh kepuasan.</p>
                </div>
              </div>
            </div>
            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_right">
              <div class="about_item">
                <div class="about_item_image"><img src="<?php echo Url::to('@web/images/construction-helmet-industry-1216589.jpg'); ?>" alt=""></div>
                <div class="about_item_title"><a href="#">Visi Kita</a></div>
                <div class="about_item_text">
                  <p>Membantu pembangunan yang merata di Indonesia sehingga tidak ada berat sebelah antara kota satu dengan kota yang lain, karena website ini dapat diakses dan diterapkan di seluruh kota di Indonesia.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="site-loader"></div>
  <div class="site-wrap">
    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7">
            <div class="site-section-title text-center">
              <h2>Testimonies</h2>
            </div>
          </div>
        </div>
        <div class="row block-13">
          <div class="nonloop-block-13 owl-carousel">
            <?php foreach ($testimonies as $testimoni) {
            ?>
            <div class="slide-item">
              <div class="team-member text-center">
                <img src="<?php $linkto = '@web/data/' . $testimoni['FOTO'] ;echo Url::to($linkto); ?>" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                <div class="text p-3">
                  <h2 class="mb-2 font-weight-light text-black h4"><?php echo $testimoni['NAMA']; ?></h2>
                  <span class="d-block mb-3 text-white-opacity-05"><?php echo $testimoni['STATUS']; ?></span>
                  <p class="mb-5">&ldquo;<?php echo $testimoni['TESTIMONI']; ?> &rdquo;</p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
      <div class="super_container">
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
      <!-- Footer -->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Tentang ArsiteKita</h3>
							<p>Langkah awal untuk menyatukan antara pengembang dan peminat arsitektur bangunan agar dapat mewujudkan impiannnya</p>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12"><h3 class="footer-heading mb-4">Navigations</h3></div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Beranda</a></li>
									<li><a href="#">Gabung</a></li>
									<li><a href="#">Kontribusi</a></li>
									<li><a href="#">Properti</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Tentang Kita</a></li>
									<li><a href="#">Privasi</a></li>
									<li><a href="#">Kontak</a></li>
									<li><a href="#">Kebijakan</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Us</h3>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
              </div>
            </div>			
          </div>
        </div>
      </footer>
    </div>