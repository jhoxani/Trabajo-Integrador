<?php
  require_once('global.php');
  $pageTitle = 'FAQ';
  $css= '<link href="css/estilosFAQ.css" rel="stylesheet">';
  include_once('conexion.php');
  include_once('componentes/header.php');
?>
          
		<?php 
		
		$consulta = $db->prepare("SELECT * FROM faqs LIMIT 20 ");
	  $consulta->execute();
		$faqs = $consulta->fetchAll(PDO::FETCH_ASSOC);
		
		foreach($faqs as $faq) 
		{?>

     <section>

        <div class="preguntasyrespuestas">
              <div class="pregunta">
                <h3><?php echo $faq['pregunta']; ?></h3>
              </div>
              <div class="respuesta">
                <p><?php echo $faq['respuesta']; ?></p>
              </div>
        </div>
		
    <?php }
		?>
		
		


		</div>
    <?php
      include_once('componentes/footer.php');
    ?>

            <?php
                include_once('componentes/header.php');
            ?>
          </section>
      </div>
  </body>
</html>
