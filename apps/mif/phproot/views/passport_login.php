<?php $this->render('common/header'); ?>
    <div class="container">
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">登录</h2>
        <input type="text" name='user' class="form-control" placeholder="用户名" required autofocus>
        <input type="password" name='passwd' class="form-control" placeholder="密码" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住密码
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>
    </div>
<?php $this->render('common/footer'); ?>
