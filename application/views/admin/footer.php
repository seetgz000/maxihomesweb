</div>
<footer class="main-footer">
    <strong>Copyright &copy; EWallet.</strong> All rights
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
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $('.data-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });

    $('.datepicker').datepicker({dateFormat: 'yy-mm-dd'});

<?php if (isset($follow_up['follow_up_time'])) {
    ?>
        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            defaultTime: '<?= $follow_up['follow_up_time'] ?>'
        });
<?php } else {
    ?>
        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            defaultTime: '9'
        });
    <?php
}
?>

</script>
</body>
</html>
