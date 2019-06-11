<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Sign In';
$this->params['breadcrumbs'][] = $this->title;
?>
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title p-b-43">SIGN IN</span>
                            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                <input class="input100" type="text" name="email" id="email">
                                <span class="focus-input100"></span>
                                <span class="label-input100">Email</span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <input class="input100" type="password" name="password" id="password">
                                <span class="focus-input100"></span>
                                <span class="label-input100">Password</span>
                            </div>
                            <div class="flex-sb-m w-full p-t-3 p-b-32">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">Remember me</label>
                                </div>
                                <div>
                                    <a href="#" class="txt1">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="container-login100-form-btn">
                                <input class="login100-form-btn" type="submit" value="MASUK">
                            </div>
                        </form>
                        <div class="login100-more" style="background-image: url(<?php echo Url::to('@web/images/architectural-design-architecture-blue-417273.jpg'); ?>);">
                        </div>
                    </div>
                </div>
            </div>