<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'assets/js';
</script>

<!-- toastr -->
<script src="{{ asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ asset('assets/js/validation.js') }}"></script>

<!-- custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- bootstrap-datatables -->
<script src="{{ asset('assets/js/bootstrap-datatables/ar/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datatables/ar/dataTables.bootstrap4.min.js') }}"></script>
<!-- select2 bootstrap -->
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.select').select2({
            theme: 'classic',
            dir: 'rtl',
            placeholder: 'اختر الصلاحيات',
            allowClear: true,
            width: 'style'
        });

    });

</script>
@yield('js')


