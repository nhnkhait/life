<?php

    $title  = 'QUẢN LÝ NGƯỜI DÙNG';
    require 'header.php';
    require '../libraries/medoo.php';
    
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">QUẢN LÝ NGƯỜI DÙNG</h4>      
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div id="append-form"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="panel-body"> -->
                            <div id="append_users"></div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php

    require 'footer.php';

?>

<script src="js/load-users.js"></script>
<script src="js/update-user.js"></script>
<script src="ckeditor/ckeditor.js"></script>