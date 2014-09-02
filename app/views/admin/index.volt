<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>{% block title %}{% endblock %} - My Webpage</title>
</head>

<body>

<div class="content">
    <h1>Welcome, {{ session.get('username') }}</h1>

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
        {{ form('admin/newpost', 'method': 'post') }}

        <label>Title</label>
        {{ text_field("title", "size": 30) }}

        <label>Content</label>
        {{ text_area("content", "size": 30) }}


        {{ submit_button('Post') }}
    </div>

</div>

</body>

</html>

