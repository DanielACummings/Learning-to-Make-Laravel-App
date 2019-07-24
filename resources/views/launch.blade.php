<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hello Bulma!</title>
		<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <link rel="stylesheet" href="bulmacsshelpers.css">
        <style>

.hero {
	background: black url(images/DigitalCoin.jpg) center / cover;
}

.center, .center-column, .top, .right, .bottom, .left {
    display: flex;
	justify-content: center;
	align-items: center;
}

.center, .center-column, .top, .right, .bottom, .left {
    display: flex;
	justify-content: center;
	align-items: center;
}

.center-column {
    flex-direction: column;
}

.top    { align-items:     flex-start; }
.right  { justify-content: flex-end;   }
.bottom { align-items:     flex-end;   }
.left   { justify-content: flex-start; }

.single-spaced, .single-spaced * {
    line-height: 1;
}


@media (max-width: 1024px) {
	.desktop {
		display: none;
	}
}

@media (max-width: 1024px) { .hero { background: black url(images/Bitcoin.jpg) center / cover; } }
@media (max-width: 768px) { .hero { background: black url(images/BitcoinGoldCoins.jpg) center / cover; } }

#a { grid-area: a; }
#b { grid-area: b; }
#c { grid-area: c; }
#d { grid-area: d; }
#e { grid-area: e; }

#grid {
    display: grid;
    grid-template-areas:
    "a a a a"
    "b c d e";

    grid-row-gap: 1rem;
}

@media (max-width: 512px) {
    #grid {
        grid-template-areas:
        "a a a"
        "b c d"
        "e e e";
    }
}

		</style>
	</head>
	<body>

<!-- .hero -->
<section class="hero is-fullheight">

<nav class="hero-head">
    <div class="columns is-mobile is-marginless heading has-text-weight-bold">
        <div class="column left">
            <figure class="navbar-item image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Cryptocurrency_Logo.svg"
                style="height: 2rem;">
            </figure>
        </div>
        <div class="column center desktop">
            <p class="navbar-item has-text-white">ZCASH</p>
            <p class="navbar-item has-text-white">VERGE</p>
            <p class="navbar-item has-text-white">RAVENCOIN</p>
            <p class="navbar-item has-text-white">LITECOIN</p>
            <p class="navbar-item has-text-white">BITCOIN</p>
        </div>
        <div class="column right">
            <p class="navbar-item has-text-white desktop">BUY</p>
            <p class="navbar-item has-text-white desktop">SIGN IN</p>
            <figure class="navbar-item image has-text-white center">
                <i class="fas fa-bars" style="width: 1rem; height: 1rem;"></i>
            </figure>
        </div>
    </div>
</nav>

<header class="hero-body">
    <div class="is-overlay has-text-centered single-spaced" style="top: 82px;">
        <h1 class="subtitle is-6 has-text-white has-text-weight-light">Privacy-Protecting</h1>
        <h2 class="title is-1 has-text-white">Zcash</h2>
    </div>
</header>

<main class="hero-foot center" style="padding: 2rem">
    <div id="grid" style="width: 768px;">
        <div id="a" class="center-column">
            <p class="has-text-centered has-text-white">
                About Zcash
            </p>
        </div>
        <div id="b" class="center-column">
            <p class="title has-text-white">
                <i class="fas fa-tachometer-alt has-text-white-light"
                   style="width: 0.75em; height: 0.75em;"></i>
                ~2.5<span class="is-size-5">min</span>
            </p>
            <p class="subtitle has-text-white is-7">Transactions</p>
        </div>
        <div id="c" class="center-column" style="border-left: 1px solid gray;">
            <p class="title has-text-white"><span
               class="is-size-5">0.0001 Zcash</span>
            </p>
            <p class="subtitle is-7 has-text-white">Transaction cost</p>
        </div>
        <div id="d" class="center-column" style="border-left: 1px solid gray;">
            <p class="title has-text-white"><span class="is-size-5">Transaction Memos</span></p>
            <p class="subtitle is-7 has-text-white">Entirely encrypted</p>
        </div>
        <div id="e" class="center-column">
            <a class="button is-danger is-inverted is-rounded is-outlined has-text-weight-bold"
               style="width: 100%; border: 0.15em solid white;">
               Buy Now
            </a>
        </div>
    </div>
</main>

</section>
<!-- /.hero -->

	</body>
</html>
