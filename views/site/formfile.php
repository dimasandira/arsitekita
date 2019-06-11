<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Unggah File';
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
								<div class="contact_info_title">File Form</div>
								<form action="#" class="comment_form">
									<div class="form_title">Gambar</div>
										<input type="file" required="required" name="file" id="file">
									</div>
									<br><br>
									<div>
										<input type="submit" class="comment_button trans_200" value="unggah">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>