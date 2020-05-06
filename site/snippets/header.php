<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="<?= $page->index_site() == 'true' ? '' : 'noindex' ?>">
    <?php echo $page->metaTags() ?>
    <title><?= $page->title() ?></title>
    <?= css(['assets/css/style.css', '@auto']) ?>
    <?= $site->facebook_pixel() ?>
    <?= $site->google_analytics() ?>

</head>

<body>
    <div class="top_section">
        <header>
            <?php if($image = $site->image('bemologo2.png')): ?>
                <div class="logo_continer">
                    <img src="<?= $image->url() ?>" alt="cdainterview logo" class="logo">
                </div>
            <?php endif ?>

            <nav>
                <a href="#" class="hide-desktop ">
                <?php if($image = $site->image('ham.svg')): ?>
                    <img src="<?= $image->url() ?>" alt="toggle-menu" class="menu" id="menu">
                <?php endif ?>
                </a>
                    
                <ul class="show-desktop hide-mobile" id="nav">
                    <li id="exit" class="exit-btn hide-desktop">
                    <?php if($image = $site->image('exit.svg')): ?>
                            <img src="<?= $image->url() ?>" alt="close">
                    <?php endif ?>
                    </li>
                    
                    <?php foreach ($site->children()->listed() as $item): ?>
                        <li><?= $item->title()->link() ?></li> 
                    <?php endforeach ?>
                </ul>
            </nav>
        </header>

