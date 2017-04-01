<?php 
	$company = 'TechNet';
	$topic = 'Product Line';
	$product = 'iPhone';
	$title = ''.$company.' | '.$topic.': '.$product.'';

	$models = array(
		'1st Gen',
		'3G',
		'3GS',
		'4',
		'4S',
		'5',
		'5C, 5S',
		'6, 6 Plus',
		'6S, 6S Plus',
		'SE',
		'7, 7 Plus'
	);

	$modelYears = array(
		'1st Gen' => 'June 29, 2007',
		'3G' => 'July 11, 2008',
		'3GS' => 'June 19, 2009',
		'4' => 'June 24, 2010',
		'4S' => 'October 14, 2011',
		'5' => 'September 21, 2012',
		'5C, 5S' => 'September 20, 2013',
		'6, 6 Plus' => 'September 19, 2014',
		'6S, 6S Plus' => 'September 25, 2015',
		'SE' => 'March 31, 2016',
		'7, 7 Plus' => 'September 16, 2016'
	);

	$modelsTotal = count($models);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?php echo $title ?></title>
 	<link rel="stylesheet" href="css/bootstrap.css">
 </head>
 <body>
 	<main class="container py-4">
      <h1><?php echo $topic; ?>: <?php echo $product; ?></h1>
      <p>There are <?php echo $modelsTotal; ?> models in the <?php echo $product; ?> product line</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($models as $model) {
              echo '<li class="list-group-item">'.$product.' '.$model.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($model);
        ?>
      </ul>
      <p>The best <?php echo $product; ?> movie is <?php echo $models[4]; ?>.</p>
      <hr>
      <h2 class="h5 mb-4">The <?php echo $product; ?> models were released on the following Dates:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($modelYears as $model => $year) {
              echo '<li class="list-group-item justify-content-between"><strong>'.$product.' '.$model.'</strong> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($model);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
 </body>
 </html>