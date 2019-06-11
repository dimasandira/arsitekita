<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Developers';
$this->params['breadcrumbs'][] = $this->title;
?>
            <!-- Courses -->
            <div class="courses">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p><br><br><br><br></p>
                        </div>
                        <!-- Courses Main Content -->
                        <div class="col-lg-12">
                            <div class="courses_search_container">
                                <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                                    <input type="search" class="courses_search_input" placeholder="Search Courses" required="required">
                                    <select id="courses_search_select" class="courses_search_select courses_search_input">
                                        <option>All Categories</option>
                                        <option>Category</option>
                                        <option>Category</option>
                                        <option>Category</option>
                                    </select>
                                    <button action="submit" class="courses_search_button ml-auto" style="background: #f89d13">search now</button>
                                </form>
                            </div>
                            <div class="courses_container">
                                <div class="row courses_row">

                                    <!-- Course -->
                                    <div class="col-lg-4 course_col">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php echo Url::to('@web/images/person_1.jpg'); ?>" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="course.html">Software Training</a></h3>
                                                <div class="course_teacher">Mr. John Taylor</div>
                                                <div class="course_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                        <span>20 Student</span>
                                                    </div>
                                                    <div class="course_info">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span>5 Ratings</span>
                                                    </div>
                                                    <div class="course_price ml-auto">$130</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course -->
                                    <div class="col-lg-4 course_col">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php echo Url::to('@web/images/person_1.jpg'); ?>" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
                                                <div class="course_teacher">Ms. Lucius</div>
                                                <div class="course_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                        <span>20 Student</span>
                                                    </div>
                                                    <div class="course_info">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span>5 Ratings</span>
                                                    </div>
                                                    <div class="course_price ml-auto">Free</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course -->
                                    <div class="col-lg-4 course_col">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php echo Url::to('@web/images/person_1.jpg'); ?>" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="course.html">Starting a Startup</a></h3>
                                                <div class="course_teacher">Mr. Charles</div>
                                                <div class="course_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                        <span>20 Student</span>
                                                    </div>
                                                    <div class="course_info">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span>5 Ratings</span>
                                                    </div>
                                                    <div class="course_price ml-auto"><span>$320</span>$220</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course -->
                                    <div class="col-lg-4 course_col">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php echo Url::to('@web/images/person_1.jpg'); ?>" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="course.html">Learn Basic German Fast</a></h3>
                                                <div class="course_teacher">Mr. John Taylor</div>
                                                <div class="course_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                        <span>20 Student</span>
                                                    </div>
                                                    <div class="course_info">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span>5 Ratings</span>
                                                    </div>
                                                    <div class="course_price ml-auto">$130</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course -->
                                    <div class="col-lg-4 course_col">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php echo Url::to('@web/images/person_1.jpg'); ?>" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="course.html">Business Groud Up</a></h3>
                                                <div class="course_teacher">Ms. Lucius</div>
                                                <div class="course_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                        <span>20 Student</span>
                                                    </div>
                                                    <div class="course_info">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span>5 Ratings</span>
                                                    </div>
                                                    <div class="course_price ml-auto">Free</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Course -->
                                    <div class="col-lg-4 course_col">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php echo Url::to('@web/images/person_1.jpg'); ?>" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="course.html">Java Technology</a></h3>
                                                <div class="course_teacher">Mr. Charles</div>
                                                <div class="course_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">
                                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                        <span>20 Student</span>
                                                    </div>
                                                    <div class="course_info">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <span>5 Ratings</span>
                                                    </div>
                                                    <div class="course_price ml-auto"><span>$320</span>$220</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                    <div class="site-pagination">
                                        <a href="#" class="active">1</a>
                                        <a href="#">2</a>
                                        <a href="#">3</a>
                                        <a href="#">4</a>
                                        <a href="#">5</a>
                                        <span>...</span>
                                        <a href="#">10</a>
                                    </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>