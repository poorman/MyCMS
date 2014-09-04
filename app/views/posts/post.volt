<html>

<head>
    <title>{{title}}</title>

    {{stylesheet_link("css/bootstrap.min.css")}}
    {{stylesheet_link("css/style.css")}}
</head>


<body>

<header>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav header-menu">
            <li>{{ link_to('/','Home') }}</li>
            <li><a href="#/about">About</a></li>
        </ul>
    </div>
</header>

<div class="content">
    <h2>{{title}}</h2>
    {{content}}

    <hr>

    <div class="comment-list">
        {% for comment in comments %}
        <div class="comment-item">
            <p><strong>{{ comment['commenter'] }}</strong></p>
            <p>{{ comment['content'] }}</p>
        </div>
        {% endfor %}
    </div>
    <hr>
    <div class="comment-form">
        {{form('comment', 'method': 'post', 'role': 'form')}}
        {{text_field('name',
            'class'         : 'form-control',
            'placeholder'   : 'Your Name' )}}

        {{email_field('email',
            'class'         : 'form-control',
            'placeholder'   : 'Your email' )}}

        {{text_area('comment',
            'class'         : 'form-control',
            'placeholder'   : 'Comment',
            'rows'          : 4)}}

        <input type="hidden" name="id" value="{{id}}">
        {{ submit_button('Post',
            'class'         : 'btn btn-primary pull-right') }}

        </form>

    </div>
</div>
</body>
</html>