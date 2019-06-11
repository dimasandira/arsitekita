<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>
		<div class="container-contact100">
			<div class="wrap-contact100">
				<!--============================/START/FORM============================-->
				<form class="contact100-form validate-form">
					<!--============================TITLE============================-->
					<span class="contact100-form-title">
						DAFTARKAN DATA DIRI ANDA
					</span>
					<!--============================FULLNAME============================-->
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<label class="label-input100" for="name">Nama Lengkap</label>
						<input id="name" class="input100" type="text" name="name" placeholder="Masukkan nama anda...">
						<span class="focus-input100"></span>
					</div>
					<!--============================IDENTITYNUMBER============================-->
					<div class="wrap-input100 validate-input" data-validate = "Valid identity is required: 35278191628781">
						<label class="label-input100" for="identity">NIK</label>
						<input id="identity" class="input100" type="number" name="identity" placeholder="Masukkan NIK anda..">
						<span class="focus-input100"></span>
					</div>
					<!--============================PHONENUMBER============================-->
					<div class="wrap-input100 validate-input" data-validate = "Valid phonenumber is required: 081581929372">
						<label class="label-input100" for="phonenumber">No. Telepon</label>
						<input id="phonenumber" class="input100" type="number" name="phonenumber" placeholder="Masukkan nomor telepon anda..">
						<span class="focus-input100"></span>
					</div>
					<!--============================EMAIL============================-->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<label class="label-input100" for="email">Email</label>
						<input id="email" class="input100" type="text" name="email" placeholder="Masukkan email anda..">
						<span class="focus-input100"></span>
					</div>
					<!--============================PASSWORD============================-->
					<div class="wrap-input100 validate-input" data-validate = "Valid password is required: abcdefgh">
						<label class="label-input100" for="password">Password</label>
						<input id="password" class="input100" type="password" name="password" placeholder="Masukkan password anda...">
						<span class="focus-input100"></span>
					</div>
					<!--============================POSITION============================-->
					<div class="wrap-input100">
						<div class="label-input100">Posisi</div>
						<div>
							<select class="js-select2" name="position">
								<option>Pilih salah satu</option>
								<option value="1">Project Owner</option>
								<option value="2">Project Developer</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
						<span class="focus-input100"></span>
					</div>
					<!--============================CITY============================-->
					<div class="wrap-input100">
						<div class="label-input100">Kota</div>
						<div>
							<select class="js-select2" name="city">
									<option>Pilih salah satu</option>
								<option value="">Surabaya</option>
							</select>
							<div class="dropDownSelect2"></div>
						</div>
						<span class="focus-input100"></span>
					</div>
					<span class="contact100-form-title">
						
					</span>
					<!--============================SUBMITBUTTON============================-->
					<div class="container-contact100-form-btn">
						<input type="submit" class="contact100-form-btn" value="DAFTAR">
					</div>
				</form>
				<!--============================/END/FORM============================-->
				<div class="contact100-more flex-col-c-m" style="background-image: url(<?php echo Url::to('@web/images/architectural-design-architecture-blue-417273.jpg'); ?>);">
				</div>
			</div>
		</div>