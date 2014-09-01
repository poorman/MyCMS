{{ form('admin/login', 'method': 'post') }}

<label>Username</label>
{{ text_field("username", "size": 30) }}

<label>Password</label>
{{ password_field("password", "size": 30) }}


{{ submit_button('Login') }}

</form>