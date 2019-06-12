<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-content">
<div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="container">
        <div class="content-center">
            <br><br><br><br><br>
		  <div class="cc-profile-image"><a href="#"><img src="<?php echo Url::to('@web/cv/images/anthony.jpg'); ?>" alt="Image"/></a></div>
          <div class="h2 title">Anthony Barnett</div>
			<p class="category text-white">Web Developer, Graphic Designer,  Photographer</p>
			<a href="notification.php" class="btn btn-primary smooth-scroll mr-2" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Notifikasi</a>
			<a class="btn btn-primary smooth-scroll mr-2" href="editprofile.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Edit Profile</a>
			<a class="btn btn-primary smooth-scroll mr-2" href="editprofile.php" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Manage Project</a>
			<a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p>Hello! I am Anthony Barnett. Web Developer, Graphic Designer and Photographer.</p>
            <p>Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8">24</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">anthony@company.com</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">+1718-111-0011</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8">140, City Center, New York, U.S.A</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8">English, German, French</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="super_container">
	<div class="site-section site-section-sm bg-light">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<div class="site-section-title">
						<h2>Daftar Proyek</h2>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure><img src="<?php echo Url::to('@web/images/img_1.jpg'); ?>" alt="Image" class="img-fluid"></figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$1,930,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure><img src="<?php echo Url::to('@web/images/img_1.jpg'); ?>" alt="Image" class="img-fluid"></figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$2,438,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure><img src="<?php echo Url::to('@web/images/img_1.jpg'); ?>" alt="Image" class="img-fluid"></figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$5,320,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure><img src="<?php echo Url::to('@web/images/img_1.jpg'); ?>" alt="Image" class="img-fluid"></figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$2,350,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure><img src="<?php echo Url::to('@web/images/img_1.jpg'); ?>" alt="Image" class="img-fluid"></figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$1,550,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 mb-4">
					<a href="property-details.html" class="prop-entry d-block">
						<figure><img src="<?php echo Url::to('@web/images/img_1.jpg'); ?>" alt="Image" class="img-fluid"></figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$4,291,000</span>
								<h3 class="title">853 S Lucerne Blvd</h3>
								<p class="location">Los Angeles, CA 90005</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>