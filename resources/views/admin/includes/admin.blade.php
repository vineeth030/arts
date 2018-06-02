<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('dashboard.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        
        <header class="main-header">
            @include('dashboard.includes.header')
        </header>

        <aside class="main-sidebar">
            @include('dashboard.includes.left')
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            @include('dashboard.includes.footer')
        </footer>

        <div class="control-sidebar-bg"></div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>       
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js">
    </script>
    <script src="{{ asset('js/summernote.min.js') }}"></script>
    <script src="{{ asset('js/summernote.js') }}"></script>

   
    <!--
    <script type="text/javascript">
      thisDropzone = Dropzone.options.imageUpload = {
            maxFilesize:5,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
      $.getJSON('/get-files/', function(data) {
       var mockFile = { name: data.original, size: data.size };
          thisDropzone.options.addedfile.call(thisDropzone, mockFile);
          thisDropzone.files.push(mockFile); 
          thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "" + data.file);
        });
    </script>
    -->



</body>
</html>

<script type="text/javascript">

$('#sandbox-container input').datepicker({
    format: "yyyy-mm-dd",
    todayBtn: "linked",
    autoclose: true,
    todayHighlight: true
});

</script>