   <?php
   include('header.php');
   include('menu.php');
   ?>

    <!-- CORPS DU SITE -->
		<div class="row">
			<div class="col-lg-offset-2 col-lg-4" id="titreMedia">
				<h2><?php echo ($dvd->getTitre()); ?></h2>
			</div>
			<br/>
		</div>
		<div class="row" >
			<div class="col-lg-offset-3 col-lg-5 col-lg-offset-4" id="cadreMedia">

				<div class="col-lg-offset-1 col-lg-5">

						<div class="row">
							<div class="col-lg-11">
								<?php echo ("<b>Réalisateur</b> : ".$realisateur."<br/>");   ?>
								<?php echo ("<b>Genre</b> : ".$dvd->getGenre()."<br/>");   ?>
								<?php echo ("<b>Durée</b> : ".$dvd->getDuree()."<br/>");   ?>
								<?php echo ("<b>Date de parution</b> : ".$dvd->getDate_parution()."<br/>");   ?>
								<?php if ($dvd->getEtat()=="disponible"){
									 echo ('<b>Statut actuel : <p id="dispo">'.$dvd->getEtat()."</p></b><br/>");
								}else {
									echo ('<b>Statut actuel : <p id="indispo">'.$dvd->getEtat()."</p></b><br/>");
									}  ?>

								<hr/ id="whitetrait">
							</div>
						</div>
				</div>
				<div class="col-lg-5 col-lg-offset-1 ">

							<div class="col-lg-offset-1 col-lg-10 col-lg-offset-1"><br/>
								<?php echo '<img src="'.$dvd->getCover().'" id="imageMedia"/>';   ?>
								<br/><br/><br/>
							</div>

				</div>
				<div class="row" >
					<div class="col-lg-offset-8 col-lg-2  ">
						<?php 
              echo('<a href="site.php?section=catalogue&action=reserver&idMedia='.$dvd->getId().'&typeMedia='.get_class($dvd).'"><button class="btn btn-primary">Réserver</button></a><br/><br/>');
							
						?>
					</div>
				</div>
			</div>
		</div>
		</br></br></br>
		<div class="row" >
			<div class="col-lg-offset-8 col-lg-2  ">
				<a href="\site.php?section=catalogue"><i class="glyphicon glyphicon-share-alt"><b>  Retour au catalogue</b></i></a>
			</div>
		</div>
		</br></br></br>






<?php include('footer.php');?>
