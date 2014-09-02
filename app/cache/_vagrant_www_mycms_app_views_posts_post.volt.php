<html>

<head>
    <title><?php echo $title; ?></title>

    <script src="js/angular.min.js"></script>

    <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/style.css'); ?>
</head>


<body>

<header>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav header-menu">
            <li><?php echo $this->tag->linkTo(array('', 'Home')); ?></li>
            <li><a href="#/about">About</a></li>
        </ul>
    </div>
</header>

<div class="content">
    <h2><?php echo $title; ?></h2>
    <?php echo $content; ?>
    <button class="btn btn-primary">Lll</button>

</div>
</body>
</html>