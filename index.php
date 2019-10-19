<?php

    $title  = 'QUẢN TRỊ HỆ THỐNG';

    require 'header.php';

    require '../libraries/medoo.php';

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">TỔNG QUAN</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $database->count('cuisines'); ?></div>
                                    <div>BÀI VIẾT</div>
                                </div>
                            </div>
                        </div>
                        <a href="posts.php">
                            <div class="panel-footer">
                                <span class="pull-left">CHI TIẾT</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $database->count('comments'); ?></div>
                                    <div>NHẬN XÉT MỚI</div>
                                </div>
                            </div>
                        </div>
                        <a href="comments.php">
                            <div class="panel-footer">
                                <span class="pull-left">CHI TIẾT</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $database->count('accounts') - 1; ?></div>
                                    <div>NGƯỜI DÙNG</div>
                                </div>
                            </div>
                        </div>
                        <a href="users.php">
                            <div class="panel-footer">
                                <span class="pull-left">CHI TIẾT</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $database->count('cuisines', ['cuisine_display' => 0]); ?></div>
                                    <div>BÀI VIẾT ĐÓNG GÓP</div>
                                </div>
                            </div>
                        </div>
                        <a href="contributes.php">
                            <div class="panel-footer">
                                <span class="pull-left">CHI TIẾT</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-9">
                        <!-- <div class="panel-body"> -->
                            <!-- <div id="append_posts"></div> -->
                        <!-- </div> -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-3">
                    <!-- <div class="panel panel-default"> -->
                        <!-- <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> ĐÓNG GÓP MỚI
                        </div> -->
                        <!-- /.panel-heading -->
                        <!-- <div class="panel-body"> -->
                            <!-- <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-file fa-fw"></i> Nam Nguyễn đóng góp một bài viết
                                    <span class="pull-right text-muted small"><em>36 phút trước</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-file fa-fw"></i> Kim Kim đóng góp một bài viết
                                    <span class="pull-right text-muted small"><em>1 giờ trước</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-file fa-fw"></i> Hoàng đóng góp một bài viết
                                    <span class="pull-right text-muted small"><em>2 giờ trước</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-file fa-fw"></i> Trần Long đóng góp một bài viết
                                    <span class="pull-right text-muted small"><em>4 giờ trước</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-file fa-fw"></i> Thu Hằng đóng góp một bài viết
                                    <span class="pull-right text-muted small"><em>4 giờ trước</em>
                                    </span>
                                </a>
                            </div> -->
                            <!-- /.list-group -->
                        <!-- </div> -->
                        <!-- /.panel-body -->
                    <!-- </div> -->
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<?php

    require 'footer.php';

?>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="js/load-posts.js"></script>