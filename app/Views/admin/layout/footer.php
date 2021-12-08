<script>
    function hapus() {
        confirm(" Do you want to delete ? ");
    }

    function activated() {
        confirm("Do you want to Activated this account ?");
    }

    function deactivated() {
        confirm("Do you want to Dectivated this account ?");
    }
</script>
<script src="<?= base_url('sweetAlert/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('sweetAlert/alert.js') ?>"></script>
<script src="<?= base_url('vendors/js/vendor.bundle.base.js') ?>"></script>
<script src="<?= base_url('js/template.js') ?>"></script>
<script src="<?= base_url('js/dashboard.js') ?>"></script>
</body>

</html>