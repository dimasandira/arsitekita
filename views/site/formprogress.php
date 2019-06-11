<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Tambah Perkembangan';
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
								<div class="contact_info_title">Perkembangan</div>
								<form action="#" class="comment_form">
									<div>
										<div class="form_title">Judul</div>
										<input type="text" class="comment_input" required="required" name="title" id="title">
									</div>
									<div>
										<div class="form_title">Detail</div>
										<input type="text" class="comment_input comment_textarea" required="required" name="detail" id="detail">
									</div>
									<div>
										<div class="form_title">Presentase</div>
										<input type="number" class="comment_input" required="required" name="presentase" id="presentase">
									</div>
									<div>
										<div class="form_title">Pembayaran</div>
										<input type="number" class="comment_input" required="required" name="pembayaran" id="pembayaran">
									</div>
									<div>
										<input type="submit" class="comment_button trans_200" value="simpan">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>