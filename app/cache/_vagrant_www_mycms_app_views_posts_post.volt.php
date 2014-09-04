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
            <li><?php echo $this->tag->linkTo(array('/', 'Home')); ?></li>
            <li><a href="#/about">About</a></li>
        </ul>
    </div>
</header>

<div class="content">
    <h2><?php echo $title; ?></h2>
    <?php echo $content; ?>

    <hr>

    <div class="comment-list">
        <?php foreach ($comments as $comment) { ?>
        <div class="comment-item">
            <p><strong><?php echo $comment['commenter']; ?></strong></p>
            <p><?php echo $comment['content']; ?></p>
        </div>
        <?php } ?>
    </div>
    <hr>
    <div class="comment-form">
        <?php echo $this->tag->form(array('comment', 'method' => 'post', 'role' => 'form')); ?>
        <?php echo $this->tag->textField(array('name', 'class' => 'form-control', 'placeholder' => 'Your Name')); ?>

        <?php echo $this->tag->emailField(array('email', 'class' => 'form-control', 'placeholder' => 'Your email')); ?>

        <?php echo $this->tag->textArea(array('comment', 'class' => 'form-control', 'placeholder' => 'Comment', 'rows' => 4)); ?>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <?php echo $this->tag->submitButton(array('Post', 'class' => 'btn btn-primary pull-right')); ?>

        </form>

    </div>
</div>
</body>
</html>