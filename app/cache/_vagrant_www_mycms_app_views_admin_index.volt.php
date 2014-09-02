<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title> - My Webpage</title>
</head>

<body>

<div class="content">
    <h1>Welcome, <?php echo $this->session->get('username'); ?></h1>

    <form role="form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Content"></textarea>
        </div>
        <button type="submit" class="btn btn-default btn-primary pull-right">Post</button>
    </form>

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

