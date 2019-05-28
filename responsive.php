<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="responsive.css">
	
    <title>Proefwerk P04</title>
  </head> 

  <body>
    <?php include "constants.php"; ?>
    <?php include "functions.php"; ?>
    <?php include "header.php";    ?>

    <div class="newrow">
	
      <section class="column_article col_08">
		<h1>Opdracht 3 responsive for loop.</h1>
		
		<?php showContent(); ?>
      </section>
	  
      <section class="column_company col_04">
        <h2>Bedrijfsgegevens</h2>
		<?php showCompanyInfo(); ?>
      </section>
    </div>

	<?php include "footer.php"; ?>
	
  </body>
</html>
  