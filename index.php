<?php 
defined('_JEXEC') or die;
use Joomla\CMS\Factory;

if( $this->params->get('siteTitleMain')){
    $siteTitleMain = htmlspecialchars($this->params->get('siteTitleMain'), ENT_COMPAT);
}
if( $this->params->get('siteTitleDesk')){
    $siteTitleDesk = htmlspecialchars($this->params->get('siteTitleDesk'), ENT_COMPAT);
}
if( $this->params->get('mainBtnText')){
    $mainBtnText = htmlspecialchars($this->params->get('mainBtnText'), ENT_COMPAT);
} 

if( $this->params->get('logoFile'))
{
	$logo = '<img src="' .  htmlspecialchars(JUri::root() . $this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitetitle . '" />';
}

if( $this->params->get('mymenu')){
    $app = Factory::getApplication();
    $sitemenu = $app->getMenu();

    $mainmenuItems = $sitemenu->getItems('menutype',  $this->params->get('mymenu'));
}

if( $this->params->get('specialTopOnMarket')){
	$specialTopOnMarket = htmlspecialchars($this->params->get('specialTopOnMarket'), ENT_COMPAT);
}
if( $this->params->get('specialSecurity')){
	$specialSecurity = htmlspecialchars($this->params->get('specialSecurity'), ENT_COMPAT);
}
if( $this->params->get('specialPresent')){
	$specialPresent = htmlspecialchars($this->params->get('specialPresent'), ENT_COMPAT);
}
if( $this->params->get('specialTrevels')){
	$specialTrevels = htmlspecialchars($this->params->get('specialTrevels'), ENT_COMPAT);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
  <title>spaceX</title>
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css"  />
  <script defer src="/templates/<?php echo $this->template ?>/js/menu.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<header>
        <div class="container header">
            <a class="logo" href="/">
                <?php echo $logo; ?>
                <span class="deg1"></span>
                <span class="deg2"></span>
                <span class="deg3"></span>
                <span class="deg4"></span>
            </a>
            <nav id="nav">
                <button id="close__nav" class="close__nav-btn">
                    <svg width="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <g id="cross">
                            <line stroke="white" stroke-width="4px" x1="7" x2="25" y1="7" y2="25"/>
                            <line stroke="white" stroke-width="4px" x1="7" x2="25" y1="25" y2="7"/>
                        </g>
                    </svg>
                </button>
                <ul class="nav__list">
                  <?foreach($mainmenuItems as $menuitem):?>
                       <li class="nav__list-item">
                        	<a class="nav__list-link" href="<?php echo $menuitem->link; ?>">
                          		<?php echo $menuitem->title; ?>
                        	</a>
                    	</li>
                  <?endforeach;?>
                </ul>
            </nav>
            <button id="open__nav" class="open__nav-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12H21M3 6H21M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </header>
    <section class="container hero">
        <div class="hero__title-wrapper">
            <p class="hero__title">
                <span class="hero__title-main"><?php echo $siteTitleMain; ?></span></br>
                <span class="hero__title-desk">
                    <?php echo $siteTitleDesk; ?>
                </span>
            </p>
            <button class="hero__btn">
                <?php echo $mainBtnText; ?>
                <svg class="hero__btn-deg1" version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34">
                    <defs>
                        <image width="5" height="5" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAG0lEQVQYV2P8////f0ZGRkYGJMBIBUFk80BsALtWFAInfY+1AAAAAElFTkSuQmCC"/>
                        <image  width="7" height="7" id="img2" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHBAMAAAA2fErgAAAAAXNSR0IB2cksfwAAACFQTFRF////////AAAA////////////////////////////////k8jvcgAAAAt0Uk5TCR4AKH8xnaZYJ6ed6XpWAAAAI0lEQVR4nGNgZFJSYDAxAhJhQTAivDWSgcFsWYoAA2doJAMAW/EF/hZn1OcAAAAASUVORK5CYII="/>
                        <image  width="16" height="16" id="img3" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAAAGlQTFRFAAAA/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ButdgAAACN0Uk5TAAECAwQGBQgLDA0RFBMPChIZHRwXBw4gJRAaJCwtKC4wIirY94uiAAAAn0lEQVR4nE2P2xKDIAxEDeHqDVRQRFtr//8jS5Rxum85s9nZraosIFWPABgisgcBIBdC8IwKQKm00UoUAoyrumm73gp+EUBh3DBOvtECKQcwzH6JcRkamwkBtaZtf70X3yvOCojH5xWnTsuccr2c32OPY2voB5i0Lp1xoxBykMU4n5J39ZVBRYKd+3XWSmKphjIoFXL7sude97/v3n+fP9UGB89RAMSgAAAAAElFTkSuQmCC"/>
                        <image  width="23" height="23" id="img4" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXBAMAAAASBMmTAAAAAXNSR0IB2cksfwAAADBQTFRFAAAA////////////////////////////////////////////////////////////O00EMAAAABB0Uk5TAAECAwQFBgcICQoLDA0ODzxclgYAAADVSURBVHicTZB9EYJAEMXvGrg0cK8Bhwk4KCBgAZEEAhYQpYCoCRwSiCRQsYCjDdQG6h0fju+v/c17s7NvCSEElEgjChpiSxSQcR2hpwA0ZgjBsbaAGe7EFXpfWlTjVhBFvqksikawWGeho4NKWfHmUGS+KXPA7GVZnXZhA15aPW9F4tQw2lavx2nl6A1cPu9rB2n1enaOnZb32zFpwJrl5/N+PpQLKA6CTV5kU7WaaoYXL7NkXB8nc14U+qY6hwBy4bqCK0OV41K/dijVb78A/x8h3fwF6BdFc3T9U9IAAAAASUVORK5CYII="/>
                        <image  width="34" height="34" id="img5" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiBAMAAADIaRbxAAAAAXNSR0IB2cksfwAAAA9QTFRFAAAA////////////////j0LeaAAAAAV0Uk5TAAECAwRVEyJgAAAApElEQVR4nI2S2xUDIQhEtQPZDsQOwnYQ+q8p4eEC8Sd8ee6ZQWFszQpgtFwdpA6QZBuECuAHqQQRw/c9XIiOXGJAkUsc4DSbSYheW2QmIkXTCeISQk60jQIRSSMxmUREidz8NttDmFls0sja3H+Q6orOhRCX27G8px9vPuey2Vea3fezyJY4mq+j7LA/a507Hg9HwYi8LsyhRqTjiPn4G/kDJfABB4I1uobU62oAAAAASUVORK5CYII="/>
                        <image  width="28" height="28" id="img6" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcAQMAAABIw03XAAAAAXNSR0IB2cksfwAAAAZQTFRFAAAA////pdmf3QAAAAJ0Uk5TAAEBlP2uAAAAU0lEQVR4nE3NsQ2AMAxE0R+BRJkRGCWjOaN5lIxASYE4TJIiLp6uuTPsxJUaqEHSDYceyHrhlDqVMnFs0tDKNZKt+Gj0bp/Kg1je/h8pWmAeZPgActREXuCTrwIAAAAASUVORK5CYII="/>
                    </defs>
                    <use href="#img1" transform="matrix(1,0,0,1,15,14)"/>
                    <use href="#img2" x="14" y="13" />
                    <use href="#img3" x="9" y="9" />
                    <use href="#img4" x="5" y="6" />
                    <use href="#img5" x="0" y="0" />
                    <use href="#img6" x="3" y="3" />
                </svg>
                <svg class="hero__btn-deg2" version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34">
                    <use href="#img1" transform="matrix(1,0,0,1,15,14)"/>
                    <use href="#img2" x="14" y="13" />
                    <use href="#img3" x="9" y="9" />
                    <use href="#img4" x="5" y="6" />
                    <use href="#img5" x="0" y="0" />
                    <use href="#img6" x="3" y="3" />
                </svg>
            </button>
        </div>
        <ul class="hero__list">
            <li class="hero__list-item item1">
                <button class="hero__list-item-btn">
                    ????
                    <span class="hero__list-item-main"><?php echo $specialTopOnMarket; ?></span>
                    ???? ??????????
                </button>
            </li>
            <li class="hero__list-item item2">
                <button class="hero__list-item-btn">
                    ??????????????????????
                    <span class="hero__list-item-main"><?php echo $specialSecurity; ?></span>
                    ????????????????????????
                </button>
            </li>
            <li class="hero__list-item item3">
                <button class="hero__list-item-btn">
                    ???????????????????? ????
                    <span class="hero__list-item-main"><?php echo $specialPresent; ?><span class="year">??.</span></span></span>
                    ?? ??????????????
                </button>
            </li>
            <li class="hero__list-item item4">
                <button class="hero__list-item-btn">
                    ??????????????????????
                    <span class="hero__list-item-main"><?php echo $specialTrevels; ?></span>
                    ????????
                </button>
            </li>
        </ul>
    </section>
</body>
</html>