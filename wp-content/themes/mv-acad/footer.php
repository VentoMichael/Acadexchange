</main>
<footer class="end">
    <ul role="menu" class="nav__legal white">
        <?php foreach(mv_getMenu('legalNav') as $item): ?>
            <li role="menuitem" itemprop="name" class="nav__item">
                <a itemprop="url" class="white block" href="<?= $item->url; ?>">
                    <?= $item->label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul role="menu" class="nav__fin little__device">
        <?php foreach(mv_getMenu('mainNav') as $item): ?>
            <li role="menuitem" itemprop="name" class="nav__item">
                <a itemprop="url" class="white block" href="<?= $item->url; ?>">
                    <?= $item->label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul class="sponsors">
        <?php foreach(mv_getMenu('sponsorsNav') as $item): ?>
            <li role="menuitem" itemprop="name">
                <a itemprop="url" href="<?= $item->url; ?>">
                    <?= $item->label; ?>
                    <img src="http://acad.localhost/wp-content/themes/mv-acad/ressources/img/sponsor_Intel.png" width="50" height="50" alt="Sponsor de Shell">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</footer>
</body>
</html>