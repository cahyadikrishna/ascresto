<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/template/back/vendor') ?>/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/template/back/vendor') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/template/back/vendor') ?>/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/template/back/js') ?>/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/template/back/vendor') ?>/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/template/back/vendor') ?>/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/template/back/js') ?>/demo/datatables-demo.js"></script>


  <script type="text/javascript">
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_preview')
                        .attr('src', e.target.result)
                        .width(210)
                        .height(120);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        </script>




        <script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>
