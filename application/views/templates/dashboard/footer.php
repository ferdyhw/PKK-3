        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <!-- Core theme JS-->
        <script src="<?= base_url() ?>vendor/home-page/js/scripts.js"></script>
        <script src="<?= base_url() ?>assets/js/prettify.js"></script>
        <script>
          window.onload = (function(){ prettyPrint(); });
        </script>
        <script>
        	$('.custom-file-input').on('change', function() {
        		let fileName = $(this).val().split('\\').pop();
        		$(this).next('.custom-file-label').addClass("selected").html(fileName);
        	});
   		</script>
    </body>
</html>