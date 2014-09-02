<html>

<head>
    <title>{{title}}</title>

    <script src="js/angular.min.js"></script>

    {{stylesheet_link("css/bootstrap.min.css")}}
    {{stylesheet_link("css/style.css")}}
</head>


<body>

<header>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav header-menu">
            <li>{{ link_to('','Home') }}</li>
            <li><a href="#/about">About</a></li>
        </ul>
    </div>
</header>

<div class="content">
    <h2>{{title}}</h2>
    {{content}}
    <button class="btn btn-primary">Lll</button>

</div>
</body>
</html>