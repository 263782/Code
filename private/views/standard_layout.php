<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php echo $this->section('css')?>
    <?php echo $this->section('title')?>
</head>
<body>
<nav>
<div class="nav-links">
       <a class="stal" href="<?php echo url('/')?>">STAL RIJOPLEIDING</a>
       <a href="<?php echo url('/')?>"><img clas="stal_logo" src="<?php echo url('/assets/images/LOGO_STAL.png')?>" alt="logo"></a>
</div>
<div class="nav-rechts">
        <form class="nav__form" style="margin: 0;" action="search" method="get">
                <input class="nav__input" type="text" name="q" placeholder="ZOEKEN OP DE PAGINA" title="q" autocomplete="off" autocorrect="off" spellcheck="false" autocapitalize="none"/>
                <button type="submit" class="nav__search-btn">
                    <svg viewBox="0 0 18 18"><path d="m 9.3962688,9.5396955 3.1875032,3.1165125 4.685825,4.581467 Z M 10.126225,9.276927 C 10.957192,8.2289874 11.351645,6.8454225 11.198222,5.5168348 11.044799,4.188247 10.345391,2.930999 9.2974515,2.1000317 8.249512,1.2690645 6.8659471,0.87461216 5.5373593,1.0280348 4.2087716,1.1814574 2.9515235,1.8808656 2.1205563,2.9288052 1.2895891,3.9767448 0.89513671,5.3603097 1.0485594,6.6888974 1.201982,8.0174852 1.9013902,9.2747332 2.9493298,10.1057 c 1.0479395,0.830968 2.4315044,1.22542 3.7600922,1.071997 1.3285877,-0.153422 2.5858358,-0.85283 3.416803,-1.90077 z" /></svg>
                </button>
        </form>

    <div class="test">
        <input type="checkbox" id="nav-toggle" style="display:none;"/>
        <label class="nav-toggle-label" for="nav-toggle">
            <span class="nav-toggle-label-span-1"></span>
            <span class="nav-toggle-label-span-2"></span>
            <span class="nav-toggle-label-span-3"></span>
        </label>
        <div class="nav-links-container">
            <a class="nav-link" href="<?php echo url('/')?>">HOME</a>
            <a class="nav-link" href="<?php echo url('/opleiding')?>">DE OPLEIDING</a>
            <a class="nav-link" href="<?php echo url('/pakketten')?>">TARIEVEN</a>
            <a class="nav-link" href="<?php echo url('/drive')?>">2TODRIVE</a>
            <a class="nav-link" href="<?php echo url('/links')?>">LINKS</a>
            <a class="nav-link" href="<?php echo url('/contact')?>">CONTACT</a>
        </div>
    </div>
</div>
</nav>

<?php echo $this->section( 'content' ) ?>

<footer>
<div class="footer">
    <div class="footer_links">
        <h2>SOCIAL MEDIA</h2>
        <a target="_blank" href="https://www.facebook.com/stalrijopleiding/">FACEBOOK</a>
        <a target="_blank" href="https://www.instagram.com/stalrijopleiding/">INSTAGRAM</a>
        <a target="_blank" href="https://twitter.com/marcel_stal">TWITTER</a>
    </div>  
    <div class="footer_midden">
        <h2>CONTACT</h2>
        <a href="mailto:info@stalrijopleiding.nl">EMAIL</a>
        <a href="tel:+06-26881416">TELEFOON</a>
        <a target="_blank" href="https://www.kvk.nl/zoeken/?source=all&q=stal%20rijopleiding&start=0&site=kvk2014">KVK</a>
    </div>
    <div class="footer_rechts">
        <h2>EXTERNE INFORMATIE</h2>
        <p>Aanvragen van een proefles ? <br> (gratis en vrijblijvend) Bel of <br> WhatsApp naar <a href="tel:+06-26881416">0626881416</a> of <br> <a href="mailto:info@stalrijopleiding.nl"> info@stalrijopleiding.nl</a></p>
    </div>
</div>
    <div class="footer_credits">
        <a target="_blank" href="https://www.linkedin.com/in/matthijs-berghuis-9447b617a/">MADE BY MATTHIJS BERGHUIS</a>
    </div>
</footer>
<?php echo $this->section( 'footer-scripts' ) ?>
</body>
</html>
      