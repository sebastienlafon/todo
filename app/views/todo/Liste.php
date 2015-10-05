<html>
<head>
	<title>Bloc note</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo http ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo http ?>/css/bootstrap-theme.min.css">
	
</head>
<body>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<h1 class="page-header">Super Bloc Note</h1>
			<form id="formTache" action="" method="post" class="">
				<div class="form-group col-lg-10">
              		<input type="text" placeholder="Nouvelle tache" class="form-control">
            	</div>
				<input type="submit" value="ok" class="btn btn-success col-lg-2"/>
			</form>

			<table class="table">
            <thead>
              <tr>
                <th>Fait</th>
                <th>Tache</th>
                <th>Modifier</th>
              </tr>
            </thead>
            <tbody>
            <?php
            	foreach ($listeTaches as $tache) {
                if ($tache['done']) {
                  $coche='checked="checked"';
                }
                else{
                  $coche='';
                }
            ?>
              <tr>
                <td><input type="checkbox" <?php echo $coche; ?> /></td>
                <td><?php echo $tache['nom'] ?></td>
                <td><input type="submit" value="Modifier" class="btn btn-sm btn-info "/></td>                
              </tr>
            <?php
            	}
            ?>
            </tbody>
          </table>



		</div>
		<div class="col-lg-1"></div>
	</div>
	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo http ?>/js/bootstrap.min.js"></script>
</body>
</html>
