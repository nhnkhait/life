<?php

    $title  = 'QUẢN LÝ BÀI ĐÓNG GÓP';
    require 'header.php';
    require '../libraries/medoo.php';
    require '../libraries/Pagination/Pagination.php';
    
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">QUẢN LÝ BÀI ĐÓNG GÓP</h4>      
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

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
                                        <th><center>THỜI GIAN</center></th>
                                        <th><center>CẬP NHẬT</center></th>
                                        <th><center>CHI TIẾT</center></th>
                                        <th><center>XÉT DUYỆT</center></th>
                                    </tr>
                                </thead>

                                <?php

                                    if (isset($_GET['page'])) {
                                        $p  = intval($_GET['page']);
                                    } else {
                                        $p = 1;
                                    }

                                    $datas = $database->select('cuisines', '*', ['ORDER' => ['id' => 'DESC'], 'cuisine_display' => 0, 'LIMIT' => [$p * 15 - 15, 15]]);

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

                                            <td><center><?php echo $data['post_at_time']; ?></center></td>

                                            <td><center><?php echo $data['post_modified_at']; ?></center></td>

                                            <td><center><a class="btn btn-primary" href="../detail.php?id=<?php echo $data['id']; ?>" role="button" target="_blank">XEM BÀI VIẾT</a></center></td>

                                            <td><center><button type="button" id="cuisine_accept" data-id="<?php echo $data['id']; ?>" class="btn btn-success">CHO PHÉP</button></center></td>

                                        </tr>
                                    </tbody>
                                    
                                <?php 

                                    } 

                                ?>
                            </table>

                            <div class="text-center">
                                <?php

                                    $config = [
                                        'total' => $database->count('cuisines', ['cuisine_display' => 0]),
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
<<script> 
    $(document).on('click', '#comment_display', function(){
        var id      = $(this).data('id');
        var status  = $(this).data('status');
        if (status == 1) {
            var st = 0;
        } else {
            var st = 1;
        }

        $.ajax({
            url:    'process/update_comment.php',
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

    $(document).on('click', '#cuisine_accept', function(){
        var id      = $(this).data('id');
        
        var answer = confirm('Bạn có muốn xét duyệt bài viết này?');
        if (answer) {
            $.ajax({
                url:    'process/update_post.php',
                type:   'POST',
                data:   'action=accept&id=' + id,
                success:    function(){
                    location.reload();
                }
            })
        } else {
            location.reload();    
        }
    })
</script>