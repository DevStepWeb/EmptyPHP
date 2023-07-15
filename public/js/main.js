
// Abre a busca
$('.btnSearch').on('click', function() {
	let textoContexto = '';
	textoContexto = `
	<section class="search_real_time">
		<div class="search_real_time_form">
			<form id="search_real_time" action="#">
				<input type="text" name="s" placeholder="Digite o nome do repositório" autocomplete="off">
				<i class="ri-close-line"></i>
			</form>
		</div>
		<div class="search_real_time_results"></div>
	</section>
	`;

	$('body').append(textoContexto);
});
// Fecha a busca
$(document).on('click', '#search_real_time i', function() {
	$('.search_real_time').remove();
});
