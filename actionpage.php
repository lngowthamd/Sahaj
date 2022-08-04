<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sahaj</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'>
<link rel='stylesheet' href='https://unpkg.com/filepond/dist/filepond.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!--
The classic file input element we'll enhance to a file pond
-->
<input type="file"
       class="filepond"
       name="filepond"
       multiple
       data-max-file-size="3MB"
       data-max-files="3" />

<!-- file upload itself is disabled in this pen -->
<!-- partial -->
  <script src='https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js'></script>
<script src='https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js'></script>
<script src='https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js'></script>
<script src='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js'></script>
<script src='https://unpkg.com/filepond/dist/filepond.min.js'></script><script  src="./script.js"></script>
<audio preload="auto" autobuffer>
  <source src="Menual.mp3" />
</audio>

</body>
</html>
