<?

	$pagetitle = "ボイスサンプル - 株式会社フクダ＆Ｃｏ．";
	$ogp = "ogp.gif";
	$url = "";

	$bodyid = "voice";

	include('_header.php');

?>
<script src="/assets/js/audiojs/audio.min.js"></script>
<script>
	audiojs.events.ready(function() {
		audiojs.createAll();
	});
</script>

	<section id="cover-photo">
		<img src="/images/voice.png">
	</section>

	<section id="one" class="wrapper">
		<section id="sugo">
			<div class="image"><a href="/sugo"><img src="images/voice/sugo.jpg"></a></div>
			<div class="content">
				<h2><a href="/sugo">菅生 隆之</a></h2>
				<p>Takayuki SUGO</p>
				<ul>
					<li>生年月日：1952年8月1日</li>
					<li>出身地：千葉県</li>
				</ul>
				<div class="voice-area cf">
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/sugo/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/sugo/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/sugo/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/sugo/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/sugo/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/sugo/06.mp3"></audio>
					</div>
				</div>
			</div>
		</section>
		<section id="yamagata">
			<div class="image"><a href="/yamagata"><img src="images/voice/yamagata.jpg"></a></div>
			<div class="content">
				<h2><a href="/yamagata">山像 かおり</a></h2>
				<p>Kaori YAMAGATA</p>
				<ul>
					<li>生年月日：1963年2月27日</li>
					<li>出身地：大阪府</li>
				</ul>
				<div class="voice-area cf">
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/yamagata/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/yamagata/05b.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/yamagata/06b.mp3"></audio>
					</div>
					<div class="voice">
						<p>セリフ</p>
						<audio src="/mp3/yamagata/01b.mp3"></audio>
					</div>
					<div class="voice">
						<p>関西弁</p>
						<audio src="/mp3/yamagata/02b.mp3"></audio>
					</div>
					<div class="voice">
						<p>ラジオドラマ</p>
						<audio src="/mp3/yamagata/03b.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/yamagata/07.mp3"></audio>
					</div>
				</div>
			</div>
		</section>
		<section id="saco">
			<div class="image"><a href="/saco"><img src="images/voice/saco.jpg"></a></div>
			<div class="content">
				<h2><a href="/saco">佐古 真弓</a></h2>
				<p>Mayumi SACO</p>
				<ul>
					<li>生年月日：1978年1月13日</li>
					<li>出身地：東京都</li>
				</ul>
				<div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/saco/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/saco/09.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/saco/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/saco/08.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/saco/10.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/saco/11.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/saco/12.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/saco/13.mp3"></audio>
					</div>
				</div>
			</div>
		</section>
		<section id="sasaki">
			<div class="image"><a href="/sasaki"><img src="images/voice/sasaki.jpg"></a></div>
			<div class="content">
				<h2><a href="/sasaki" style="font-family: serif;">佐々木 勝彦</a></h2>
				<p>Katsuhiko SASAKI</p>
				<ul>
					<li>生年月日：1944年12月24日</li>
					<li>出身地：東京都</li>
				</ul>
				<div class="voice-area cf">
					<div class="voice">
						<p>ボイスサンプル</p>
						<audio src="/mp3/sasaki/01.mp3"></audio>
					</div>
				</div>
			</div>
		</section>
	</section>

<?
	include('_footer.php');
?>
