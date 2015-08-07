<?php
include "system/include/header.php";
?>
		<div class="canvas_view">
			<form action="/" method="POST">
				<input type="text" name="postalcode" placeholder="&#xf041; Dit postnummer" autocomplete="off">
				<button type="submit">Søg</button>
				<input type="text" name="fromdate" placeholder="&#xf073; Fra">
				<input type="text" name="todate" placeholder="&#xf073; Til">
			</form>
			<img src="/media/images/canvas_1.jpg" alt="Man med sin hund, klar til afgang" class="canvas_1">
		</div>
		
		<div class="content">
			<h1>Bliv hundepasser</h1>
			<img src="/media/images/golden.jpg" alt="Golden Retriever" class="right">
			<p>Elsker du også hunde? En hund skal ikke passes på hundeinternat hvis den har mulighed for at, blive passet i et hjem hvor den vil blive elsket. Selvom du måske allerede har hund eller ingen, så har du mulighed for at melde dig til at kunne passe andres hunde. Dette er en mulighed for at tjene nogen håndøre uden at gøre andet end at tage sig af en hund og give den kærlighed. Du vil få en ven med en logrende hale på besøg, hvor i kan gå ture, lege, hygge og bare give hindanen selvskab.  Som hundepasser vælger du selv beløbet for pasningen indenfor rimelige grænser. Der er mulighed for chat med hundeejeren, så i får alle detaljer i orden.</p>
			<p class="button-p"><a href="/becomeahost" class="button">Læs mere</a></p>
			<div class="clear"></div>
		</div>
		
		<div class="content green">
			<h1>Hvad siger hundeejere?</h1>
			<div class="feedbacks">
				<?php
				for ($i = 0; $i <= 3; $i++) {
					echo '
				<div class="feedback">
					<div class="detail">
						<div class="head">
							<img src="/media/images/userprofile.png" alt="Emil Aagaard\'s profil billede">
							<p class="name">Emil Aagaard</p>
							<div class="stars">
								<i class="fa fa-star marked"></i>
								<i class="fa fa-star marked"></i>
								<i class="fa fa-star marked"></i>
								<i class="fa fa-star marked"></i>
								<i class="fa fa-star marked"></i>
								<i class="fa fa-star unmarked"></i>
							</div>
						</div>
						<div class="clear"></div>
						<p class="description">This is a web\'s version of Lorem ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
					</div>
				</div>';
				}
				?>
			</div>
			<div class="clear h60"></div>
		</div>
<?php
include "system/include/footer.php";
?>
