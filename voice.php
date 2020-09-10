<?
	// hoge
	$pagetitle = "ボイスサンプル - 株式会社フクダ＆Ｃｏ．";
	$ogp = "ogp/voice.gif";
	$url = "voice";
	$bodyid = "voice";

	include('_header.php');

?>
<script src="/assets/js/audiojs/audio.min.js"></script>
<script>
	audiojs.events.ready(function() {
		audiojs.createAll();
	});
</script>

<section class="wrapper">
	<div class="inner">
		<h2>ボイスサンプル</h2>
		<p>ボイスサンプルは、俳優のプロフィールページからも視聴可能です。</p>
		<section id="sugo">
			<div class="image"><a href="/sugo"><img src="images/icon/sugo.jpg"></a></div>
			<div class="content">
				<h3><a href="/sugo">菅生 隆之</a></h3>
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
			<div class="image"><a href="/yamagata"><img src="images/icon/yamagata.jpg"></a></div>
			<div class="content">
				<h3><a href="/yamagata">山像 かおり</a></h3>
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
			<div class="image"><a href="/saco"><img src="images/icon/saco.jpg"></a></div>
			<div class="content">
				<h3><a href="/saco">佐古 真弓</a></h3>
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
			<div class="image"><a href="/sasaki"><img src="images/icon/sasaki.jpg"></a></div>
			<div class="content">
				<h3><a href="/sasaki">佐々木 勝彦</a></h3>
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
		<section id="kubota">
			<div class="image"><a href="/kubota"><img src="images/icon/kubota.jpg"></a></div>
			<div class="content">
				<h3><a href="/sugo">久保田 ⺠絵</a></h3>
				<p>Tamie KUBOTA</p>
				<ul>
					<li>生年月日：1945年10月1日</li>
					<li>出身地：群馬県</li>
				</ul>
				<div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/kubota/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/kubota/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/kubota/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/kubota/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>5</p>
						<audio src="/mp3/kubota/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション</p>
						<audio src="/mp3/kubota/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読1</p>
						<audio src="/mp3/kubota/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/kubota/08.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/kubota/09.mp3"></audio>
					</div>
				</div>
			</div>
		</section>
		<section id="mi-ke">
			<div class="image"><a href="/mi-ke"><img src="images/icon/mi-ke.jpg"></a></div>
			<div class="content">
				<h3><a href="/mi-ke">みけ</a></h3>
				<p>Mi-Ke</p>
				<ul>
					<li>誕生日：1月29日</li>
					<li>出身地：東京都</li>
				</ul>
				<div class="voice-area cf">
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/mi-ke/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/mi-ke/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/mi-ke/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/mi-ke/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/mi-ke/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/mi-ke/06.mp3"></audio>
					</div>
				</div>
			</div>
		</section>
		<section id="kubo">
		  <div class="image"><a href="/kubo"><img src="images/icon/kubo.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/kubo">久保 貫太郎</a></h3>
		    <p>Kantaro KUBO</p>
		    <ul>
		      <li>生年月日：1976年11月27日</li>
		      <li>出身地：長野県</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/kubo/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/kubo/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/kubo/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/kubo/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>スポーツ実況</p>
						<audio src="/mp3/kubo/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>時代劇</p>
						<audio src="/mp3/kubo/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/kubo/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/kubo/08.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/kubo/09.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/kubo/10.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/kubo/11.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="shiozaki">
		  <div class="image"><a href="/shiozaki"><img src="images/icon/shiozaki.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/shiozaki">塩崎 智弘</a></h3>
		    <p>Tomohiro SHIOZAKI</p>
		    <ul>
		      <li>生年月日：1988年10月15日</li>
		      <li>出身地：神奈川県</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/shiozaki/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/shiozaki/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/shiozaki/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/shiozaki/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/shiozaki/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/shiozaki/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/shiozaki/07.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="aoyagi">
		  <div class="image"><a href="/aoyagi"><img src="images/icon/aoyagi.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/aoyagi">⻘耶木 まゆ</a></h3>
		    <p>Mayu AOYAGI</p>
		    <ul>
		      <li>生年月日：1997年8月22日</li>
		      <li>出身地：東京都</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/aoyagi/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/aoyagi/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/aoyagi/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/aoyagi/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション</p>
						<audio src="/mp3/aoyagi/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/aoyagi/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/aoyagi/07.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="katafuchi">
		  <div class="image"><a href="/katafuchi"><img src="images/icon/katafuchi.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/katafuchi">片渕 真子</a></h3>
		    <p>Mako KATAFUCHI</p>
		    <ul>
		      <li>生年月日：1993年4月21日</li>
		      <li>出身地：東京都</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/katafuchi/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/katafuchi/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/katafuchi/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/katafuchi/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/katafuchi/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/katafuchi/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/katafuchi/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/katafuchi/08.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/katafuchi/09.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="kobayashi">
		  <div class="image"><a href="/kobayashi"><img src="images/icon/kobayashi.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/kobayashi">兒林 美沙紀</a></h3>
		    <p>Misaki KOBAYASHI</p>
		    <ul>
		      <li>生年月日：1990年4月13日</li>
		      <li>出身地：山口県</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/kobayashi/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/kobayashi/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/kobayashi/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/kobayashi/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/kobayashi/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/kobayashi/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/kobayashi/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/kobayashi/08.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/kobayashi/09.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="sakai">
		  <div class="image"><a href="/sakai"><img src="images/icon/sakai.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/sakai">酒井 ほのか</a></h3>
		    <p>Honoka SAKAI</p>
		    <ul>
		      <li>生年月日：1999年4月8日</li>
		      <li>出身地：新潟県</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/sakai/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/sakai/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/sakai/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/sakai/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>5</p>
						<audio src="/mp3/sakai/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>実況</p>
						<audio src="/mp3/sakai/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/sakai/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/sakai/08.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="tamura">
		  <div class="image"><a href="/tamura"><img src="images/icon/tamura.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/tamura">田村 真央</a></h3>
		    <p>Mao TAMURA</p>
		    <ul>
		      <li>生年月日：1998年11月19日</li>
		      <li>出身地：長野県</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/tamura/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/tamura/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/tamura/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/tamura/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>詩集</p>
						<audio src="/mp3/tamura/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/tamura/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/tamura/07.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="toishi">
		  <div class="image"><a href="/toishi"><img src="images/icon/toishi.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/toishi">外石 咲</a></h3>
		    <p>Saki TOISHI</p>
		    <ul>
		      <li>生年月日：1990年4月12日</li>
		      <li>出身地：新潟県</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/toishi/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/toishi/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/toishi/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/toishi/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/toishi/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/toishi/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/toishi/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/toishi/08.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/toishi/09.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
		<section id="nasu">
		  <div class="image"><a href="/nasu"><img src="images/icon/nasu.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/nasu">那須 有</a></h3>
		    <p>Yu NASU</p>
		    <ul>
		      <li>生年月日：1996年11月14日</li>
		      <li>出身地：北海道</li>
		    </ul>
		    <div class="voice-area cf">
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
		  </div>
		</section>
		<section id="yanai">
		  <div class="image"><a href="/yanai"><img src="images/icon/yanai.jpg"></a></div>
		  <div class="content">
		    <h3><a href="/yanai">柳井 景伊</a></h3>
		    <p>Kei YANAI</p>
		    <ul>
		      <li>生年月日：1986年12月20日</li>
		      <li>出身地：大阪府</li>
		    </ul>
		    <div class="voice-area cf">
					<div class="voice">
						<p>セリフ1</p>
						<audio src="/mp3/yanai/01.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/yanai/02.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/yanai/03.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/yanai/04.mp3"></audio>
					</div>
					<div class="voice">
						<p>関西弁</p>
						<audio src="/mp3/yanai/05.mp3"></audio>
					</div>
					<div class="voice">
						<p>ナレーション1</p>
						<audio src="/mp3/yanai/06.mp3"></audio>
					</div>
					<div class="voice">
						<p>2</p>
						<audio src="/mp3/yanai/07.mp3"></audio>
					</div>
					<div class="voice">
						<p>3</p>
						<audio src="/mp3/yanai/08.mp3"></audio>
					</div>
					<div class="voice">
						<p>4</p>
						<audio src="/mp3/yanai/09.mp3"></audio>
					</div>
					<div class="voice">
						<p>朗読</p>
						<audio src="/mp3/yanai/10.mp3"></audio>
					</div>
					<div class="voice">
						<p>フリートーク</p>
						<audio src="/mp3/yanai/11.mp3"></audio>
					</div>
		    </div>
		  </div>
		</section>
	</div>
</section>

<?
	include('_footer.php');
?>
