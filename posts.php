<?php

    $title  = 'QUẢN LÝ BÀI VIẾT';
    require 'header.php';
    require '../libraries/medoo.php';
    require '../libraries/Pagination/Pagination.php';

    if (isset($_POST['publish'])) {
        $name       = addslashes($_POST['cuisine_name']);
        $type       = addslashes($_POST['cuisine_type']);
        $address    = addslashes($_POST['cuisine_address']);
        $location   = addslashes($_POST['cuisine_location']);
        $nutris     = addslashes($_POST['cuisine_nutritional_value']);
        $side       = addslashes($_POST['cuisine_side_dish']);
        $image      = addslashes($_POST['cuisine_uploaded_image']);
        $note       = addslashes($_POST['cuisine_note']);
        $summary    = addslashes($_POST['cuisine_summary']);
        $description= addslashes($_POST['cuisine_description']);
        $making     = addslashes($_POST['cuisine_making']);
        $time       = date('Y-m-d H:i:s');

        $database->insert('cuisines', [
            'cuisine_name'          => $name,
            'cuisine_type'          => $type,
            'cuisine_address'       => $address,
            'cuisine_location'      => $location,
            'cuisine_nutritional_value' => $nutris,
            'cuisine_side_dish'     => $side,
            'cuisine_note'          => $note,
            'cuisine_image'         => $image,
            'cuisine_summary'       => $summary,
            'cuisine_description'   => $description,
            'cuisine_making'        => $making,
            'post_at_time'          => $time
        ]);

        echo '<script>location.reload();</script>';
    }
    
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header"><button class="btn btn-primary pull-left" id="btn_add_post"><i class="fa fa-plus-circle"></i> ĐẶC SẢN MỚI</button></h4>      
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div id="append-form"></div>
                <br/>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="panel-body"> -->
                            <!-- <div id="append_posts"></div> -->
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>ID</center></th>
                                        <th><center>USER</center></th>
                                        <th><center>HÌNH ẢNH</center></th>
                                        <th><center>ĐẶC SẢN</center></th>
                                        <th><center>VÙNG MIỀN</center></th>
                                        <th><center>KIỂU Đ.SẢN</center></th>
                                        <th><center>LƯỢT THÍCH</center></th>
                                        <th><center>LƯỢT XEM</center></th>
                                        <th><center>THỜI GIAN</center></th>
                                        <th><center>CẬP NHẬT</center></th>
                                        <th><center>HIỂN THỊ</center></th>
                                        <th><center>TÙY CHỌN</center></th>
                                    </tr>
                                </thead>

                                <?php

                                    if (isset($_GET['page'])) {
                                        $p  = intval($_GET['page']);
                                    } else {
                                        $p = 1;
                                    }

                                    $datas = $database->select('cuisines', '*', ['ORDER' => ['id' => 'DESC'], 'LIMIT' => [$p * 15 - 15, 15]]);

                                    foreach ($datas as $data) {

                                ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><center><?php echo $data['id']; ?></center></td>

                                            <td><center><?php echo $database->select('accounts', 'user_name', ['id' => $data['post_by_user']])[0]; ?></center></td>

                                            <td><center><img src="../upload/<?php echo $data['cuisine_image']; ?>" width="100" height="50" /></center></td>

                                            <td><center><?php echo $data['cuisine_name']; ?></center></td>

                                            <td><center><?php echo $data['cuisine_location']; ?></center></td>

                                            <td><center><?php echo $data['cuisine_type']; ?></center></td>

                                            <td><center><?php echo $data['cuisine_count_love']; ?></center></td>

                                            <td><center><?php echo $data['cuisine_count_view']; ?></center></td>

                                            <td><center><?php echo $data['post_at_time']; ?></center></td>

                                            <td><center><?php echo $data['post_modified_at']; ?></center></td>

                                            <?php
                                                if ($data['cuisine_display'] == 1) {

                                                    echo '<td><center><button type="button" id="cuisine_display" data-id="'.$data['id'].'" data-status="'.$data['cuisine_display'].'" class="btn btn-success">ON</button></center></td>';

                                                } else {

                                                    echo '<td><center><button type="button" id="cuisine_display" data-id="'.$data['id'].'" data-status="'.$data['cuisine_display'].'" class="btn btn-danger">OFF</button></center></td>';

                                                }
                                            ?>

                                            <td><center><a id="" href="edit_post.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-circle" role="button"><i class="fa fa-edit"></i></a> <button type="button" id="delete_post" data-id="<?php echo $data['id']; ?>" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></center></td>
                                        </tr>
                                    </tbody>
                                    
                                <?php 

                                    } 

                                ?>
                            </table>

                            <div class="text-center">
                                <?php

                                    $config = [
                                        'total' => $database->count('cuisines'),
                                        'limit' => 15,
                                        'full' => false,
                                        'querystring' => 'page'
                                    ];
                                                    
                                    $page = new Pagination($config);
                                                                
                                    echo $page->getPagination();

                                ?>
                            </div>
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

<script src="js/load-form-post.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script>

    $(document).on('click', '#cuisine_display', function(){
        var id      = $(this).data('id');
        var status  = $(this).data('status');
        if (status == 1) {
            var st = 0;
        } else {
            var st = 1;
        }

        $.ajax({
            url:    'process/update_post.php',
            type:   'POST',
            data:   'action=display' + '&status=' + st + '&id=' + id,
            success:    function(){
                location.reload();
            }
        })
    })

    $(document).on('click', '#delete_post', function(){
        var id      = $(this).data('id');
        
        var answer = confirm('Bạn có muốn xóa bài viết này?');
        if (answer) {
            $.ajax({
                url:    'process/update_post.php',
                type:   'POST',
                data:   'action=delete&id=' + id,
                success:    function(){
                    location.reload();
                }
            })
        } else {
            location.reload();    
        }
    })
</script>
<script>
</script>