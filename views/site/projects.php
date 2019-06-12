<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Projects';
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
                                        <option>Semua Kategori</option>
                                        <option>Termurah</option>
                                        <option>Terbaru</option>
                                    </select>
                                    <button action="submit" class="courses_search_button ml-auto" style="background: #f89d13">search now</button>
                                </form>
                            </div>
                            <div class="courses_container">
                                <div class="row courses_row">
                                    <?php 
                                    //var_dump($projects);
                                    foreach($projects as $project) {?>
                                    <!-- Course -->
                                    <div class="col-lg-6 course_col">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php $linkto = '@web/data/'. $project['FILE']; echo Url::to($linkto); ?>" alt=""></div>
                                            <div class="course_body">
                                                <h3 class="course_title"><a href="/project?id=<?php echo (int)$project['ID']; ?>"><?php echo $project['JUDUL']; ?></a></h3>
                                                <div class="course_teacher"><?php echo $project['NAMA']; ?></div>
                                            </div>
                                            <div class="course_footer">
                                                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                    <div class="course_info">

                                                    </div>
                                                    <div class="course_info">

                                                    </div>
                                                    <div class="course_price ml-auto">Rp.<?php echo $project['HARGA']; ?>,-</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                                <!-- <div class="row">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>