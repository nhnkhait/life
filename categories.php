<?php

    $title  = 'QUẢN LÝ DANH MỤC';
    require 'header.php';
    require '../libraries/medoo.php';

?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">DANH MỤC</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit fa-fw"></i>
                            </div>
                            <div class="panel-body">
                                <div id="categories_list"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit fa-fw"></i> <b>TẠO DANH MỤC</b>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>TÊN DANH MỤC</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name">
                                </div>
                                <div class="form-group" id="box_category">
                                    
                                </div>
                                <center><button type="button" id="category_create" class="btn btn-primary">LƯU LẠI</button> <button type="reset" class="btn btn-danger">HỦY</button></center>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php

    require 'footer.php';

?>

<script src="js/load-categories.js"></script>
<script src="js/load-box-categories.js"></script>
<script src="js/create-category.js"></script>
<script src="js/delete-category.js"></script>