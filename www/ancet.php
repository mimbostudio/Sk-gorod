<?php
$_newname = $_FILES['file1']['name'];
$_filesname = iconv("UTF-8", "windows-1251", $_newname);
move_uploaded_file($_FILES["file1"]["tmp_name"], "../profiles/1/{$_filesname}");
echo'Изменения сохраненыasas!';
?>