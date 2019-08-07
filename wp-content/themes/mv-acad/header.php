<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Academy,help,twinning,donate,donation,twin,receive equipment,Cisco">
    <meta name="author" content="Michael Vento">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="fb:page_id" content="3158" />
    <meta name="og:email" content="vento.michael0705@hotmail.com"/>
    <meta name="og:locality" content="JUPRELLE"/>
    <meta name="og:region" content="WALLONE"/>
    <meta name="og:postal-code" content="4450"/>
    <meta name="og:country-name" content="BELGIUM"/>
    <meta name="description" content="Acadexchange is a second CISCO company, the site allows to exchange, receive electronic devices or to twin with other academies or users.">
    <title>
        Acadexhange - profil informations
    </title>
</head>
<body>

<header>
     <h1 class="hidden">Acadexhange</h1>
    <div>
        <nav>
            <a href="#" class="fixed top__logo">
                <h2 aria-level="2" class="remove__text">Menu</h2>
            </a>
            <div class="menuToggle">
                <div class="fixed">
                    <input class="checkbox" title="Ouvrir le menu" type="checkbox" />
                    <span class="menu_left"></span>
                    <span></span>
                    <span class="menu_right"></span>
                    <ul itemscope itemtype="https://schema.org/SiteNavigationElement" role="menu" class="menu">
                        <li class="list__menu">
                            <ul>
                                <li role="menuitem" itemprop="name" class="logo">
                                    <a href="#" class="background remove__text first__plan" style="position: absolute; left: -9999px;" title="Back to the top of the page">Logo</a>
                                </li>     
                                <?php foreach(mv_getMenu('mainNav') as $item): ?>
                                    <li role="menuitem" itemprop="name">
                                        <a itemprop="url" href="<?= $item->url; ?>">
                                            <?= $item->label; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li itemscope itemtype="https://schema.org/SiteNavigationElement" class="relatif">
                            <ul>
                                <li role="menuitem" itemprop="name" class="last">
                                    <a class="block" href="login">
                                        Sign in
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>