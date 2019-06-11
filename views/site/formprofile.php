<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Ubah Profil';
$this->params['breadcrumbs'][] = $this->title;
?>
	<!-- Contact -->
	<div class="contact">
		<br><br><br><br>
		<!-- Contact Info -->
		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-12">
						<div class="contact_form">
							<div class="contact_info_title">Ubah Profil</div>
							<form action="#" class="comment_form">
								<div>
									<div class="form_title">Nama</div>
									<input type="text" class="comment_input" required="required" name="nama" id="nama">
                                </div>
                                <div>
									<div class="form_title">NIK</div>
									<input type="number" class="comment_input" required="required" name="nik" id="nik">
                                </div>
                                <div>
									<div class="form_title">No. Telepon</div>
									<input type="text" class="comment_input" required="required" name="telepon" id="telepon">
                                </div>
								<div>
									<div class="form_title">Email</div>
									<input type="text" class="comment_input" required="required" name="email" id="email">
                                </div>
                                <div>
									<div class="form_title">Password</div>
									<input type="password" class="comment_input" required="required" name="password" id="password">
                                </div>
                                <div>
									<div class="form_title">Detail</div>
									<input type="text" class="comment_input comment_textarea" required="required" name="detail" id="detail">
								</div>
								<div class="form_title">Gambar</div>
									<input type="file" required="required" name="foto" id="foto">
								</div>
								<br>
                                <div>
								<div class="form_title">CV</div>
									<input type="file" required="required" name="cv" id="cv">
                                </div>
                                <br><br>
								<div>
									<input type="submit" class="comment_button trans_200" value="ubah">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>