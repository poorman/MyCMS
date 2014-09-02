<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/admin-style.css" />
    <title>MyCMS - Dashboard</title>
</head>

<body>

<header>
    <div class="collapse navbar-collapse">
        Welcome, <?php echo $this->session->get('username'); ?>
        <ul class="nav navbar-nav header-menu pull-right">
            <li><?php echo $this->tag->linkTo(array('admin/logout', 'Logout')); ?></li>
        </ul>
    </div>
</header>

<div class="content">
    <h1>Welcome, <?php echo $this->session->get('username'); ?></h1>

    <div role="form" class="new-post-form pull-right">
        <?php echo $this->tag->form(array('admin/newpost', 'method' => 'post')); ?>


        <?php echo $this->tag->textField(array('title', 'placeholder' => 'Title', 'class' => 'form-control')); ?>
        <br>
        <?php echo $this->tag->textArea(array('content', 'placeholder' => 'Content', 'class' => 'form-control', 'rows' => 6)); ?>

        
        <br>
        <?php echo $this->tag->submitButton(array('Post', 'class' => 'btn btn-primary pull-right')); ?>

        </form>

    </div>

</div>

</body>

</html>

