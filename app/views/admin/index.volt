<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>MyCMS - Dashboard</title>
</head>

<body>

<div class="content">
    <h1>Welcome, {{ session.get('username') }}</h1>

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

