
<!-- Vendor -->
<script src="{{asset ('assets-admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{asset ('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset ('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{asset ('assets-admin/libs/node-waves/waves.min.js') }}"></script>
<script src="{{asset ('assets-admin/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{asset ('assets-admin/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
<script src="{{asset ('assets-admin/libs/feather-icons/feather.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{asset ('assets-admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{asset ('assets-admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->


<!-- knob plugin -->
<script src="{{asset ('assets-admin/libs/jquery-knob/jquery.knob.min.js') }}"></script>

<!--Morris Chart-->
<script src="{{asset ('assets-admin/libs/morris.js06/morris.min.js') }}"></script>
<script src="{{asset ('assets-admin/libs/raphael/raphael.min.js') }}"></script>

<!-- Dashboar init js-->
<script src="{{asset ('assets-admin/js/pages/dashboard.init.js') }}"></script>

<!-- App js-->
<script src="{{asset ('assets-admin/js/app.js') }}"></script>

<!-- Datatables init -->
<script src="{{asset ('assets-admin/js/pages/datatables.init.js') }}"></script>

<!-- iziToast JS -->
<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                message: '{{ $error }}',
                position: 'topRight'
            });
        </script>
    @endforeach
@endif

@if(Session::has('error'))
    <script>
        iziToast.error({
            message: '{{ Session::get("error") }}',
            position: 'topRight'
        });
    </script>
@endif

@if(Session::has('success'))
    <script>
        iziToast.success({
            message: '{{ Session::get("success") }}',
            position: 'topRight'
        });
    </script>
@endif
