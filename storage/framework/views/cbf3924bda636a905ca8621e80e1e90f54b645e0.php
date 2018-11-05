<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
 
    <input type="text" name="search" id="search">

    <form action="<?php echo e(route('search.result')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" id="id" name="id" >
		<button type="submit" class="btn btn-primary">Submit</button>
	
    </form>
 
	<div id="get"></div>
	
    <script>
		$( function() {
		
			$( "#search" ).autocomplete({
				source: "<?php echo e(URL::to("/autocomplete-search")); ?>",
				select:function(key, value){
				}
			});
		});
      </script>
</body>
</html>