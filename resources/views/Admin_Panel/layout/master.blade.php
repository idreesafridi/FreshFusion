<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/dropzone/dropzone.css') }}">

        {{-- datatable --}}
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">



	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			@include('Admin_Panel.layout.header')
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">

                @include('Admin_Panel.layout.sidebar')

         	</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Main content -->

					@yield('content')

				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			{{-- footer start --}}
            @include('Admin_Panel.layout.footer')
            {{-- footer end  --}}

		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- DataTables JS -->
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    Dropzone.autoDiscover = false;
    $(function () {
        // Summernote
        $('.summernote').summernote({
            height: '300px'
        });

        const dropzone = $("#image").dropzone({
            url:  "create-product.html",
            maxFiles: 5,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }, success: function(file, response){
                $("#image_id").val(response.id);
            }
        });

    });


    $(document).ready(function () {
        let table;

    $(document).ready(function () {
        table = $('#myTable').DataTable({
            paging: false,      // Disable built-in pagination
            searching: false,   // Since you're using a custom search input
            info: false         // Optional: hide "Showing X to Y" info
        });

        // Default to page 1
        goToPage(1);
    });

    function goToPage(page) {
        const pageLength = 5; // How many rows per page
        const start = (page - 1) * pageLength;
        const end = start + pageLength;

        table.rows().every(function (rowIdx, tableLoop, rowLoop) {
            if (rowIdx >= start && rowIdx < end) {
                $(this.node()).show();
            } else {
                $(this.node()).hide();
            }
        });

        // Update active class in pagination
        $('.pagination .page-item').removeClass('active');
        $(`.pagination .page-item[data-page="${page}"]`).addClass('active');
    }

        // Custom search event
        $('#customSearch').on('keyup', function () {
            table.search(this.value).draw();
        });
    });

    @if (Session::has('msg'))
        Swal.fire({
            icon: "{{ Session::get('type') }}",
            title: "{{ Session::get('title') }}",
            text: "{{ Session::get('msg') }}",
            showConfirmButton: false,
            timer: 1500
        });
    @endif

    function confirmDelete($id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
            customClass: {
                popup: 'custom-popup',
                title: 'custom-title',
                content: 'custom-content',
                confirmButton: 'custom-confirm-button',
                cancelButton: 'custom-cancel-button'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + $id).submit();
            }
        });
    }

</script>

	</body>
</html>
