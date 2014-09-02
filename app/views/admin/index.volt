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
        <ul class="nav navbar-nav header-menu pull-right">
            <li>{{ link_to('admin/logout','Logout') }}</li>
        </ul>
    </div>
</header>

<div class="content">
    <h1>Welcome, {{ session.get('username') }}</h1>

    <div role="form" class="new-post-form pull-right">
        {{ form('admin/newpost', 'method': 'post') }}


        {{ text_field('title',
                'placeholder'   : 'Title',
                'class'         : 'form-control') }}
        <br>
        {{ text_area('content',
                'placeholder'   : 'Content',
                'class'         : 'form-control',
                'rows'          : 6 ) }}

        
        <br>
        {{ submit_button('Post',
                'class'         : 'btn btn-primary pull-right') }}

        </form>

    </div>

</div>

</body>

</html>

