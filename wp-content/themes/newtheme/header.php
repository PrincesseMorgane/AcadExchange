<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AcadExchange</title>
</head>
<body>
<header>
    <h1 class="logo__top">AcadExchange</h1>
    <nav class="nav">
        <ul class="nav__list">
            <h2 class="nav__link">Principal navigation</h2>
            <?php foreach (dw_getMenu('main') as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                    <?php if (count($item->children)): ?>
                        <ul class="nav__sub">
                            <?php foreach ($item->children as $child): ?>
                                <li class="nav__item">
                                    <a href="<?= $child->url; ?>" class="nav__link"><?= $child->label; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<!--    --><?php //wp_nav_menu([
//        'theme_location' => 'main',
//    ]); ?>
    <!--  TODO: On a besoin de créer un tableau : href  -->
</header>
<main>