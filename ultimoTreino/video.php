<section class="general default_template chnl1">

	<div class="block_cntt pin">
		<img src="../img/top02.png">
	</div>

	<header>
		<h1 class="logo">
			<img src="../img/logo_fcpeo.png" />
		</h1>
		<div class="col_02">
			<p class="line_01">ASSISTA <span>AO VIVO</span></p>
			<!-- <h2 class="line_03">TRANSMISSÃO DA GRAVAÇÃO DE AULA</h2> -->
			<h2 class="line_03">ÚLTIMO TREINO</h2>
			<p class="line_04">XII EXAME DE ORDEM UNIFICADO - 2&ordf; FASE</p>
		</div>
	</header>

	<section class="content">
		<div id='video' class="video">
			<!-- Video aqui -->
			<span class="thumb"><img src="../img/z_lixo_imgvideo.jpg" /></span>
			<a href="#" class="btn_play"><img src="../img/btn_play.png" /></a>
		</div>
	</section>

	<section class="schedule">
		<img src="../img/programacao.png" />
	</section>

	<section class="newsletter_form">
		<div class="col_01">
			<p class="line_01">QUER RECEBER INFORMAÇÕES SOBRE <br/>O EXAME DE ORDEM?</p>
			<p class="line_02">CADASTRE-SE AQUI PARA RECEBER AS ÚLTIMAS DICAS</pbr/> E INFORMAÇÕES PARA A PROVA DA OAB.</p>
		</div>
		<div class="col_02">
			<form action="http://cers.mailee.me/go/add_contact_form" id="mailee-form" method="post">
				<input name="key" type="hidden" value="994119">
				<input name="url_ok" type="hidden" value="https://www.facebook.com/portalexamedeordem/app_372248136241124">
				<input name="url_error" type="hidden" value="https://www.facebook.com/portalexamedeordem/app_372248136241124">
				<input name="list[]" type="hidden" value="523864">

				<label for="txt_nome">Nome</label>
				<input name="name" type="text" class="txt" id="txt_nome" />
				<label for="txt_email">E-mail</label>
				<input name="email" type="text" class="txt" id="txt_email" />
				<input class="btn_submit" type="submit" value="Cadastrar" />
			</form>
		</div>
	</section>

	<footer>
		<a href="http://www.portalexamedeordem.com.br/" target="_blank">www.portalexamedeordem.com.br</a>
	</footer>

	<div class="fb-comments" data-href="http://www.portalexamedeordem.com.br#ultimotreino_sfase" data-numposts="10" data-width="800"></div>
</section>


<script src="../script/jw6/jwplayer.js" type="text/javascript"></script>
<script>jwplayer.key="Rf+04i9NkiWHUtD93d4ECBX/KFPYRc1pScFRjYaLymQ=";</script>

<script src="../script/videoJW.js" type="text/javascript"></script>

<script>

	var html5 = "http://rsaraiva_ios-i.akamaihd.net/hls/live/203931/cers4/playlist.m3u8";
	var flash = "http://renatosaraiva-f.akamaihd.net/rsaraiva_1_4@37037";
	var id = "video";

	jwplayerPlay(id, html5, flash);
	
</script>