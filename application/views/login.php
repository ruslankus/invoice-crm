<form class="form-signin" method="post" action="<?=URL::base().'auth/login'?>">
    <h2 class="form-signin-heading">Введите пароль</h2>
    <input type="text" placeholder="Login" name="login" class="input-block-level">
    <input type="password" placeholder="Password" name="password" class="input-block-level">
    <button type="submit" name="submit" class="btn btn-large btn-primary">Sign in</button>
</form>
