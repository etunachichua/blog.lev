
		<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="<?= base_url() ?>adm/js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
            window.jQuery || document.write('<script src="<?= base_url() ?>adm/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="<?= base_url() ?>adm/js/libs/jquery-migrate-1.2.1.min.js">\x3C/script>')
        </script>
		<script src="<?=base_url()?>adm/js/bootstrap/bootstrap.js"></script>
 	    <script src="<?= base_url() ?>blogg/js/main.js"></script>      
		<script type="text/javascript">
			// $(document).ready(function() {
			// //   $('ul.nav li.dropdown').hover(function() {
			// //   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
			// // }, function() {
			// //   $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
			// // });
			//  };

			 $(document).ready(function(){
			    $('ul.nav li.dropdown').hover(function() {
				  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
				}, function() {
				  $(this).find('.dropdown-menu').stop(true, true).delay(300).fadeOut(200);
				});




			    $("ul.nav li.dropdown").mouseout(function(){
			        $(this).find('.dropdown-menu').css("display", "none");
			    });




			});



		</script>
    </body>
</html>