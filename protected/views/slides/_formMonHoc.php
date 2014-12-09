<?php
/* @var $this SlidesController */
/* @var $model Slides */
/* @var $form CActiveForm */
?>

<div class="form">
    <script>
        var count = 0;
        var total  = 0;
        function _(el) {
            return document.getElementById(el);
        }
        function addCount()
        {
            return count+1;
        }
        function activeView()
        {
            var btn_redirect = _("viewMonHoc");
            var id_txt = _("Slides_tags");
            var id = id_txt.value;
            var link = document.createAttribute("href");
            link.value = "index.php?r=monHoc/view&id="+id;
            btn_redirect.removeAttribute("hidden");
            btn_redirect.setAttributeNode(link);

        }

        function createPanel(list, fileName, id) {
            //<progress id='1'></progress>
            var progressBar = document.createElement('progress');
            var id_progress = document.createAttribute("id");
            id_progress.value = id;
            progressBar.setAttributeNode(id_progress);
            //<label id='name1'>Setup.pdf</label>
            var labelName = document.createElement('label');
            var id_Label = document.createAttribute('id');
            id_Label.value = fileName + id;
            labelName.setAttributeNode(id_Label);
            //<label id='done1'>DONE</label>
            /*
             var labelDone = document.createElement('label');
             var id_Done = document.createAttribute('id');
             id_Done.value = 'done'+id;
             labelDone.setAttributeNode = id_Done;
             */
            list.appendChild(labelName);
            list.appendChild(progressBar);
        }
        function uploadFile() {
            var list = _("fileList");
            var input = _("document");
            var id_txt = _("Slides_tags");
            var id = id_txt.value;
            total = input.files.length;
            //Xét từng file
            for (var x = 0; x < input.files.length; x++) {
                var file = input.files[x];
                var fileName = file.name;
                var li = document.createElement('li');
                li.innerHTML = 'File ' + (x + 1) + ": " + fileName;
                //Tạo progress bar cho từng file up lên
                createPanel(li, fileName, x);
                list.appendChild(li);
                //Khởi tạo dữ liệu gửi đi
                var formData = new FormData();
                //Thêm dữ liệu
                formData.append("file1[]", file);
                //Khởi tạo 1 request async
                var ajax = new XMLHttpRequest();
                //Thêm các hàm xử lí sự kiện
                ajax.upload.addEventListener("progress", progressHandler, false);
                ajax.addEventListener("load", completeHandler, false);
                ajax.addEventListener("error", errorHandler, false);
                ajax.addEventListener("abort", abortHandler, false);
                console.log(id.value);
                //Địa chỉ gửi dữ liệu kèm theo tham số môn học
                var url = "http://localhost/slide-on-the-fly/index.php?r=slides/create&id="+id;
                ajax.open("POST", url, true);
                //Thực hiện gửi
                ajax.send(formData);
            }

        }
        function progressHandler(event) {
            //Bản chất ở đây là php session_upload sẽ gửi trả lại các bản tin chứa thông tin số byte đã up.
            //Thời gian phản hồi xem trong php.ini -> file_upload
            var percent = (event.loaded / event.total) * 100;
            console.log("progress " + count);
            console.log("File: " + count);
            _(count.toString()).value = Math.round(percent);
            count++;
        }
        function completeHandler(event) {
            console.log('done' + count);
            if(count==total)
            {
                activeView();
            }
        }
        function errorHandler(event) {
            console.log("Upload failed");
        }
        function abortHandler(event) {
            console.log("Upload cancel");
        }
    </script>
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'slides-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
// Please note: When you enable ajax validation, make sure the corresponding
// controller action is handling ajax validation correctly.
// There is a call to performAjaxValidation() commented in generated controller code.
// See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>

    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <b>Đường dẫn</b>
        <br>
        <?php //echo $form->labelEx($model,'noidung'); ?>
        <?php //echo $form->textArea($model,'noidung',array('rows'=>6, 'cols'=>50)); ?>
        <?php $this->widget('CMultiFileUpload', array(
            'model' => $model,
            'name' => 'document',
            'accept' => 'doc|docx|pdf', // useful for verifying files
            'duplicate' => 'Duplicate file!', // useful, i think
            'denied' => 'Invalid file type', // useful, i think
            'htmlOptions' => array('multiple' => 'multiple'),
        ));?>
        <?php echo $form->error($model, 'noidung'); ?>
    </div>

    <div class="row">
        <b>Mã môn học</b>
        <br>
        <?php //echo $form->labelEx($model,'tags'); ?>
        <?php echo $form->textField($model, 'tags', array('size' => 60, 'maxlength' => 60)); ?>
        <?php echo $form->error($model, 'tags'); ?>
    </div>

    <div class="row buttons">
        <input type="button" value="Upload" onclick="uploadFile()"><br\>
        <a id="viewMonHoc" hidden="false">
            <input type="button" value="View" onclick="redirectToView()"><br\>
        </a>
    </div>
    <ul id="fileList">

    </ul>
    <?php $this->endWidget(); ?>

</div><!-- form -->