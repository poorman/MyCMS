<?php echo $this->tag->form(array('login/login', 'method' => 'post')); ?>

<label>Username</label>
<?php echo $this->tag->textField(array('username', 'size' => 30)); ?>

<label>Password</label>
<?php echo $this->tag->passwordField(array('password', 'size' => 30)); ?>


<?php echo $this->tag->submitButton(array('Login')); ?>

</form>