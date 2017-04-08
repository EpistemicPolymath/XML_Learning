<?php
echo "<br/><br/><br/><br/><br/>";

$xml = simplexml_load_file("http://rss.nytimes.com/services/xml/rss/nyt/World.xml") or die ("Can't load XML!");
$root = $xml->channel;
$items = $root->item;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>My News Site</title>
</head>
<!--[if IE 6 ]>
<body class="ie6 old_ie"><![endif]-->
<!--[if IE 7 ]>
<body class="ie7 old_ie"><![endif]-->
<!--[if IE 8 ]>
<body class="ie8"><![endif]-->
<!--[if IE 9 ]>
<body class="ie9"><![endif]-->
<!--[if !IE]><!-->
<body><!--<![endif]-->
<header>
    <h1><a href="index.php">Box Press</a><span id="version">v1</span></h1>
    <nav>
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="#">My Favourite</a></li>
        </ul>
    </nav>
</header>
<div id="secwrapper">
    <section>
        <?php foreach ($items as $item) : ?>
            <article>
                <a href="#"><img src="<?= $item->children("media", true)->content["url"] ?>" alt=""/></a>
                <!-- Title --> <h1><?= $item->title ?></h1>
                <!-- Description --> <p> <?= $item->description ?></p>
                <!-- Link --><a href="<?= $item->link ?>" class="readmore">Read more</a>
                <!-- PubDate --><p style="color:blue;"><?= $item->pubDate ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</div>
<footer>
    <p>Copyright &copy 2012 BoxPress by Youssef Nassim. All Rights Reserved.</p>
</footer>
</body>
</html>
		
		
			
    
    