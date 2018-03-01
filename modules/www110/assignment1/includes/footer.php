</div>

<footer style="text-align:center; color: white; background: black; height: 50px; position: fixed; bottom: 0; width: 100%; display: flex; justify-content: center; align-items: center"><small>&copy; Copyright 2017</small></footer>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
jQuery("select, input:checkbox, input:radio, input:file, input:text, input:submit, textarea").uniform();
</script>
<script>
	$(document).ready(function() {
		$('input[type="radio"]').click(function() {
			if ($(this).attr('id') == 'alien') {
				$('#creaturepic').attr({
					'src': 'images/alien.png',
					'alt': 'alien picture'
				});
			} else if ($(this).attr('id') == 'robot') {
				$('#creaturepic').attr({
					'src': 'images/robot.png',
					'alt': 'robot picture'
				});
			};

		});
        $('#myform').submit(function(event) {
            if ($('#name').val() == '' || $('input[type="radio"]').val() == ''){
                event.preventDefault();
                $('#error').html('All fields are required');
            }
        });
	});
</script>
</body>
</html>
