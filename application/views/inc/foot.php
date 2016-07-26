
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

			$(document).ready(function(){
				$('.dropdown').mouseover(function(){
					$('.dropdown-menu').css({display:'block'});
				})
				$('.dropdown').mouseout(function(){
					$('.dropdown-menu').css({display:'none'});
				})

			});

		</script>
    </body>
</html>