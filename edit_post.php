<?php

    $title  = 'SỬA BÀI VIẾT';
    require 'header.php';
    require '../libraries/medoo.php';
    $id = intval($_GET['id']);

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

        $imageOld   = $database->select('cuisines', 'cuisine_image', ['id' => $id]);
        if ($image == "") {
            $image = $imageOld;
        }

        $database->update('cuisines', [
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
        ], [
            'id'    => $id
        ]);

        echo '<script>alert("SỬA BÀI VIẾT THÀNH CÔNG!"); location.href = "posts.php";</script>';
    }
    
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">SỬA BÀI VIẾT</h4>      
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit fa-fw"></i>
                            </div>
                            <form action="" method="POST">
                            <div class="panel-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>TÊN ĐẶC SẢN</label>
                                        <input type="text" class="form-control" name="cuisine_name" id="cuisine_name" value="<?php echo $database->select('cuisines', 'cuisine_name', ['id' => $id])[0]; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="usr">KIỂU ĐẶC SẢN</label>
                                        <input type="text" class="form-control" name="cuisine_type" id="cuisine_type" value="<?php echo $database->select('cuisines', 'cuisine_type', ['id' => $id])[0]; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="usr">ĐỊA ĐIỂM CHI TIẾT</label>
                                        <input type="text" class="form-control" name="cuisine_address" id="cuisine_address" value="<?php echo $database->select('cuisines', 'cuisine_address', ['id' => $id])[0]; ?>">
                                    </div> 
                                    <div class="form-group col-md-6">
                                        <label for="usr">VÙNG MIỀN</label>
                                        <input type="text" class="form-control" name="cuisine_location" id="cuisine_location" value="<?php echo $database->select('cuisines', 'cuisine_location', ['id' => $id])[0]; ?>">
                                    </div> 
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="pwd">GIÁ TRỊ DINH DƯỠNG</label>
                                        <textarea class="form-control" rows="4" name="cuisine_nutritional_value" id="cuisine_nutritional_value" value="<?php echo $database->select('cuisines', 'cuisine_nutritional_value', ['id' => $id])[0]; ?>"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="usr">KÈM THEO (ĐỒ ĂN HOẶC THỨC UỐNG)</label>
                                        <textarea class="form-control" rows="4" name="cuisine_side_dish" id="cuisine_side_dish" value="<?php echo $database->select('cuisines', 'cuisine_side_dish', ['id' => $id])[0]; ?>"></textarea>
                                    </div> 
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="pwd">ẢNH MINH HỌA</label>
                                        <input type="file" name="cuisine_image" id="cuisine_upload_image" class="form-control-file">
                                        <br/>
                                        <input type="hidden" name="cuisine_uploaded_image" id="cuisine_uploaded_image" value="">
                                        <div id="image_path"></div>
                                    </div> 
                                    <div class="form-group col-md-6">
                                        <label for="pwd">ĐIỀU LƯU Ý</label>
                                        <textarea class="form-control" rows="4" name="cuisine_note" id="cuisine_note" value="<?php echo $database->select('cuisines', 'cuisine_note', ['id' => $id])[0]; ?>"></textarea>
                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                        <label for="usr">KÈM THEO (ĐỒ ĂN HOẶC THỨC UỐNG)</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>  -->
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <label for="pwd">TÓM TẮT MÓN ĂN</label>
                                    <textarea class="form-control" name="cuisine_summary" id="cuisine_summary"><?php echo $database->select('cuisines', 'cuisine_summary', ['id' => $id])[0]; ?></textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="pwd">NỘI DUNG MÔ TẢ</label>
                                    <textarea class="form-control" name="cuisine_description" id="cuisine_description"><?php echo $database->select('cuisines', 'cuisine_description', ['id' => $id])[0]; ?></textarea>
                                </div>   
                                <div class="form-group">
                                    <label for="pwd">CÁCH LÀM</label>
                                    <textarea class="form-control" name="cuisine_making" id="cuisine_making"><?php echo $database->select('cuisines', 'cuisine_making', ['id' => $id])[0]; ?></textarea>
                                </div>      
                                <center><button class="btn btn-primary" type="submit" name="publish" id="publish_cuisine">LƯU LẠI</button></center>   
                            </div>
                            </form>
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
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('cuisine_description');
    CKEDITOR.replace('cuisine_summary');
    CKEDITOR.replace('cuisine_making');
</script>

<script>
    $(document).on('change', '#cuisine_upload_image', function () {
        var file_data = $('#cuisine_upload_image').prop('files')[0];
        var form_data = new FormData();
        form_data.append('cuisine_image', file_data);
        $.ajax({
            url: 'process/upload_images.php',
            type: 'POST',
            cache: false,
            data: form_data,
            contentType: false,
            processData: false,
            success: function (res) {
                $('#image_path').html('<p><font color="green"><b>Đã Upload hình ảnh minh họa!</b></font></p>');
                $('#cuisine_uploaded_image').val(res);
                $('#cuisine_upload_image').val('');
            }
        })
    })
</script>