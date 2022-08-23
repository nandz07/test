<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Click <a href="http://codeseven.github.io/toastr/demo.html" target="_blank">here</a> for more examples.</p>

<br/>
<p>You'll notice that the JS is more or less empty and is just what I need to make the example work.</p>
<p>I linked my CodePen to use the following two files:</p>
<ul>
  <li><a href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" target="_blank">toastr.min.css</a></li>
  <li><a href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" target="_blank">toastr.min.js</a></li>
</ul>

<script>
    // Set the options that I want
toastr.options = {
  "closeButton": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

$(document).ready(function onDocumentReady() {  
  setInterval(function doThisEveryTwoSeconds() {
    toastr.success("Hello World!");
  }, 2000);   // 2000 is 2 seconds  
});
</script>
</body>
</html>

