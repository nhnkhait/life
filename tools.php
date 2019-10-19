<?php

    $title  = 'TỰ ĐỘNG LẤY DỮ LIỆU';
    require 'header.php';
    require '../libraries/medoo.php';

    if (isset($_POST['btnAddSource'])) {

        $url_source        = addslashes($_POST['url_source']);
        $ele_pagination    = addslashes($_POST['ele_pagination']);
        $total_pagination  = addslashes($_POST['total_pagination']);
        $rule_pagination   = addslashes($_POST['rule_pagination']);
        $ele_title         = addslashes($_POST['ele_title']);
        $ele_content       = addslashes($_POST['ele_content']);
        $ele_image         = addslashes($_POST['ele_image']);
        $arr_ele           = array(
            'ele_pagination'    => $ele_pagination,
            'total_pagination'  => $total_pagination,
            'rule_pagination'   => $rule_pagination,
            'ele_title'         => $ele_title,
            'ele_content'       => $ele_content,
            'ele_image'         => $ele_image
        );
        $time              = date('Y-m-d H:i:s');

        if (!empty($url_source) || !empty($ele_pagination) || !empty($total_pagination) || !empty($rule_pagination) || !empty($ele_title) || !empty($ele_content) || !empty($ele_image)) {

            $database->insert('crawler', [
                'craw_url'  => $url_source,
                'craw_rule' => json_encode($arr_ele),
                'craw_created_at'   => $time
            ]);

            $tmp = explode("/", $url_source);
            $domain = $tmp[2];
            $fp = fopen($domain.'.txt', "a+");

            echo '<script>alert("Thêm thành công!");</script>';

        }
    }

?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">TỰ ĐỘNG LẤY DỮ LIỆU</h4>
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
                                <div class="form-group">
                                    <label>CHỌN NGUỒN ĐÍCH</label>
                                    <select class="form-control" id="category_parent">
                                        <option value="">---</option>
                                        <?php
                                            $datas = $database->select('crawler', 'craw_url');
                                            
                                        ?>
                                        <option value="">http://wikivietnam.net</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SỐ LƯỢNG BÀI CẦN LẤY</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name">
                                </div>

                                <center><button type="button" id="category_create" class="btn btn-primary">KHỞI TẠO</button> <button type="reset" class="btn btn-danger">HỦY</button></center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit fa-fw"></i> <b>THÊM NGUỒN DỮ LIỆU</b>
                            </div>
                            <div class="panel-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>ĐỊA CHỈ NGUỒN</label>
                                    <input type="text" class="form-control" name="url_source" placeholder="https://">
                                </div>
                                <div class="form-group">
                                    <label>PHẦN TỬ PHÂN TRANG</label>
                                    <input type="text" class="form-control" name="ele_pagination" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>SỐ LƯỢNG PHÂN TRANG</label>
                                    <input type="text" class="form-control" name="total_pagination" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>QUY LUẬT PHÂN TRANG (URL)</label>
                                    <input type="text" class="form-control" name="rule_pagination" placeholder="https://">
                                </div>
                                <div class="form-group">
                                    <label>PHẦN TỬ TIÊU ĐỀ</label>
                                    <input type="text" class="form-control" name="ele_title" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>PHẦN TỬ NỘI DUNG</label>
                                    <input type="text" class="form-control" name="ele_content" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>PHẦN TỬ ẢNH ĐẠI DIỆN</label>
                                    <input type="text" class="form-control" name="ele_image" placeholder="">
                                </div>
                                <center><button type="submit" name="btnAddSource" class="btn btn-primary">LƯU LẠI</button> <button type="reset" class="btn btn-danger">HỦY</button></center>
                            </form>
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