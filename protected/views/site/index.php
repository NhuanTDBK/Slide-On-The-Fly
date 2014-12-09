<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
/*
  * ftp_put gom remote file, ten file se upload len ftp server, local_file la dia chi thuc te tren may 
  */
// $test = ftp_put($connect,'abc.exe','E:\Tai Lieu\SQL\SQLEXPR_x64_ENU.exe', FTP_BINARY);
//
// if($test) print_r("Da upload thanh cong");else print_r("Failed");
   /*$test_up = ftp_put($connect,'ftp://192.168.1.102/','E:\Tai Lieu\ki 5\Pttk_httt\notes1.pdf',FTP_ASCII);
   if($test_up)
       {
            echo "successfully uploaded $file\n";
           } 
    else 
            {
            echo "There was a problem while uploading $file\n";
           }
  */
?>

<h1>Welcome to <i><?php
        $baseUrl = Yii::app()->baseUrl.'/extensions/ckeditor';
        $cs = Yii::app()->getClientScript();
        $result=$cs->registerScriptFile('ckeditor.js');
        if($result)
        echo 'Successfully';
        echo Yii::app()->request->baseUrl;
        ?>
    </i>
</h1>
<script src="<?php echo Yii::app()->request->baseUrl?>/js/ckeditor/ckeditor.js">
</script>
<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
