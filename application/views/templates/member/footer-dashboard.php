</html>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url() ?>vendor/home-user-page/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>vendor/home-user-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
        	$('.custom-file-input').on('change', function() {
        		let fileName = $(this).val().split('\\').pop();
        		$(this).next('.custom-file-label').addClass("selected").html(fileName);
        	});
   </script>
</body>

</html>