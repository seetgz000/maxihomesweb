</div>
<footer class="main-footer">
    <strong>Copyright &copy; Polygon Property.</strong> All rights
    reserved.
</footer>

</div>

<!-- jQuery UI -->
<script src="<?= base_url() ?>js/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<!-- AdminLTE App -->
<script src="<?= base_url() ?>js/app.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/jquery.loadingModal.js"></script>
<script src="<?= base_url() ?>js/jquery.loadingModal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="<?= base_url() ?>js/functions.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery.jOrgChart.js"></script>
<script src="<?= base_url() ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
    $(document).ready(function () {
        $("#org").jOrgChart({
            chartElement: '#family-tree-container',
        });

        $('.datepicker').datepicker({
            autoclose: true
        });

        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
</body>
</html>
