<?php



?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>:: CKEditor :: </title>
<meta charset="utf-8">
<!-- Include CKEditor library -->
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form>
    <textarea name="editor" id="editor" rows="10" cols="80">
        Write Something...............
    </textarea>
</form>

<script>
    // Replace the <textarea> with a CKEditor
    CKEDITOR.replace('editor');
</script>
