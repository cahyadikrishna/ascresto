  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/popper.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/aos.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/google-map.js"></script>
  <script src="<?php echo base_url('assets/template/front/js') ?>/main.js"></script>

  <script>
    $(document).ready(function(){

    var quantitiy=0;
       $('.quantity-right-plus').click(function(e){
            
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
                $('#quantity').val(quantity + 1);

              
                // Increment
            
        });

         $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
          
                // Increment
                if(quantity>0){
                $('#quantity').val(quantity - 1);
                }
        });
        
    });
  </script>