<?php

    $title  = 'QUẢN LÝ NHẬN XÉT';
    require 'header.php';
    require '../libraries/medoo.php';
    require '../libraries/Pagination/Pagination.php';
    
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">QUẢN LÝ NHẬN XÉT</h4>      
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
                                        <th><center>NAME</center></th>
                                        <th><center>EMAIL</center></th>
                                        <th><center>NỘI DUNG</center></th>
                                        <th><center>BÀI VIẾT</center></th>
                                        <th><center>THỜI GIAN</center></th>
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

                                    $datas = $database->select('comments', '*', ['ORDER' => ['id' => 'DESC'], 'LIMIT' => [$p * 15 - 15, 15]]);

                                    foreach ($datas as $data) {

                                ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><center><?php echo $data['id']; ?></center></td>

                                            <td><center><?php echo $data['comment_name']; ?></center></td>

                                            <td><center><?php echo $data['comment_user_email']; ?></center></td>

                                            <td><center><?php echo $data['comment_content']; ?></center></td>

                                            <td><center><?php echo '<a href="../detail.php?id='.$data['comment_cuisine_id'].'" target="_blank">XEM BÀI VIẾT</a>'; ?></center></td>

                                            <td><center><?php echo $data['comment_time']; ?></center></td>

                                            <?php
                                                if ($data['comment_display'] == 1) {

                                                    echo '<td><center><button type="button" id="comment_display" data-id="'.$data['id'].'" data-status="'.$data['comment_display'].'" class="btn btn-success">ON</button></center></td>';

                                                } else {

                                                    echo '<td><center><button type="button" id="comment_display" data-id="'.$data['id'].'" data-status="'.$data['comment_display'].'" class="btn btn-danger">OFF</button></center></td>';

                                                }
                                            ?>

                                            <td><center><button type="button" id="delete_post" data-id="<?php echo $data['id']; ?>" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></center></td>
                                        </tr>
                                    </tbody>
                                    
                                <?php 

                                    } 

                                ?>
                            </table>

                            <div class="text-center">
                                <?php

                                    $config = [
                                        'total' => $database->count('comments'),
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
</script>