<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hello Bulma!</title>
		<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <!-- <link rel="stylesheet" href="styles/debug.css"> -->
		<style>

.center {
    display: flex;
    justify-content: center;
    align-items: center;
}
.is-paddingless-horizontal { padding-left: 0; padding-right: 0; }

.grid {
    display: grid;
    grid-template-columns:
        [xl-start] 1fr 1.5rem [md-start] minmax(0, 624px) [md-end] 1.5rem 1fr [xl-end];
}

.grid * { grid-column: md; }
.grid-xl { grid-column: xl; }

@media (max-width: 672px) {
    :root {
        font-size: 75%;
    }
}

		</style>
	</head>
	<body>

		<!-- .section -->
		<section class="section is-paddingless-horizontal">
			<div class="container grid">
				<nav class="breadcrumb grid-xl" aria-label="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li class="is-active"><a href="#" aria-current="page">How to build a beautiful blog</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<!-- /.section -->

        <section class="section is-paddingless-horizontal" style="padding-top: 0;">
            <div class="container grid">
                <article class="media center">
                    <figure class="media-left">
                        <figure class="image is-64x64">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Cryptocurrency_Logo.svg">
                        </figure>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>Daniel Cummings</strong><br>
                                <a>GitHub: @DanielACummings</a><br>
                                <span class="has-text-grey">Software developer in training.<br>
                                <time datetime="2019-07-23">July 23</time> · 20 min read</span>
                            </p>
                        </div>
                    </div>
                </article>

                <!-- /.media -->
                <div class="section is-paddingless-horizontal">
                    <h1 class="title is-2">Why you should use cryptocurrency</h1>
                    <h2 class="subtitle is-3">A beginner's guide to crypto</h2>
                </div>

                <figure class="columns is-mobile is-variable is-0 is-marginless grid-xl">
                    <div class="column">
                        <div class="image card">
                            <a><img src="https://www.ccn.com/wp-content/uploads/2014/09/crypto.jpg"></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="image card">
                            <a><img src="https://atozmarkets.com/media/uploads/2018/01/Top-10-Cryptocurrencies-2018-1.jpg"></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="image card">
                            <a><img src="https://pbs.twimg.com/profile_images/893435758568144897/2djhib4g_400x400.jpg"></a>
                        </div>
                    <div>
                </figure>
                <figcaption class="level">
                    <small class="level-item has-text-grey">
                        What you'll learn...
                    </small>
                </figcaption>

                <div class="content is-medium">

                    <h1>"Bitcoin: A Peer-to-Peer Electronic Cash System"</h1><br>
                    <p>
                        Satoshi Nakamoto<br>
                        satoshin@gmx.com<br>
                        www.bitcoin.org<br>
                        <br>
                        <strong>"Abstract.</strong> A  purely   peer-to-peer   version   of   electronic   cash   would   allow   onlinepayments   to   be   sent   directly   from   one   party   to   another   without   going   through   afinancial institution.   Digital signatures provide part of the solution, but the mainbenefits are lost if a trusted third party is still required to prevent double-spending.We propose a solution to the double-spending problem using a peer-to-peer network.The   network   timestamps   transactions   by   hashing   them   into   an   ongoing   chain   ofhash-based proof-of-work, forming a record that cannot be changed without redoingthe proof-of-work.   The longest chain not only serves as proof of the sequence ofevents witnessed, but proof that it came from the largest pool of CPU power.   Aslong as a majority of CPU power is controlled by nodes that are not cooperating toattack the network,  they'll  generate the  longest  chain  and  outpace attackers.   Thenetwork itself requires minimal structure.   Messages are broadcast on a best effortbasis,   and   nodes   can   leave   and   rejoin   the   network   at   will,   accepting   the   longestproof-of-work chain as proof of what happened while they were gone"
                    </p>
                </div>

            </div>
        </section>
	</body>
</html>
