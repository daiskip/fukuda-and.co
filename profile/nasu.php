<?

	$pagetitle = "那須 有 - 株式会社フクダ＆Ｃｏ．";
	$ogp = "profile/nasu/01.jpg";
	$url = "nasu";

	include('../_header.php');

?>
<script src="/assets/js/audiojs/audio.min.js"></script>
<script>
	audiojs.events.ready(function() {
		audiojs.createAll();
	});
</script>

	<section id="cover-photo" class="cover">
		<img src="/images/profile/nasu/01.jpg" class="img1">
		<img src="/images/profile/nasu/02.jpg" class="img2">
	</section>

	<!-- Main -->
		<article id="main">

			<section class="wrapper">
				<div class="inner">

					<h3>那須 有（なす ゆう）</h3>
					<p>Yu NASU</p>

					<ul>
						<li>生年月日：1996年11月14日</li>
						<li>出身地：北海道</li>
						<li>身長：161cm</li>
						<li>趣味：アロマディフューザー</li>
						<li>特技：手遊び、韓国語ラップ、水中バク中、高速果物カット</li>
						<li>資格免許：保育士免許、幼稚園教諭二種免許、普通自動車免許</li>
					</ul>

					<div class="voice-area cf">
						<h5>ボイスサンプル</h5>
						<div class="voice">
							<p>セリフ1</p>
							<audio src="/mp3/nasu/01.mp3"></audio>
						</div>
						<div class="voice">
							<p>2</p>
							<audio src="/mp3/nasu/02.mp3"></audio>
						</div>
						<div class="voice">
							<p>3</p>
							<audio src="/mp3/nasu/03.mp3"></audio>
						</div>
						<div class="voice">
							<p>4</p>
							<audio src="/mp3/nasu/04.mp3"></audio>
						</div>
						<div class="voice">
							<p>ナレーション1</p>
							<audio src="/mp3/nasu/05.mp3"></audio>
						</div>
						<div class="voice">
							<p>2</p>
							<audio src="/mp3/nasu/06.mp3"></audio>
						</div>
						<div class="voice">
							<p>3</p>
							<audio src="/mp3/nasu/07.mp3"></audio>
						</div>
						<div class="voice">
							<p>朗読</p>
							<audio src="/mp3/nasu/08.mp3"></audio>
						</div>
						<div class="voice">
							<p>フリートーク</p>
							<audio src="/mp3/nasu/09.mp3"></audio>
						</div>
					</div>

					<h5>略歴</h5>
					<ul>
						<li>2017年 光塩学園女子短期大学 保育科卒業</li>
						<li>2019年 フォースアベニュー（5.5期生）</li>
					</ul>

					<hr>

				</div>
			</section>
		</article>

<?
	include('../_footer.php');
?>
