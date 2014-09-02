<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>MyCMS - Dashboard</title>
</head>

<body>

<div class="content">
    <h1>Welcome, <?php echo $this->session->get('username'); ?></h1>

    <div role="form">
        <?php echo $this->tag->form(array('admin/newpost', 'method' => 'post')); ?>

        <label>Title</label>
        <?php echo $this->tag->textField(array('title', 'size' => 30)); ?>

        <label>Content</label>
        <?php echo $this->tag->textArea(array('content', 'size' => 30)); ?>


        <?php echo $this->tag->submitButton(array('Post')); ?>
    </div>

</div>

</body>

</html>

