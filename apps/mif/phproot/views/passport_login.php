<?php $this->render('common/header'); ?>
    <div class="container">
      <form class="form-signin" role="form" method='post' >
        <h2 class="form-signin-heading">登录</h2>
        <input type="text" id='user' class="form-control" placeholder="用户名" required autofocus>
        <input type="password" id='passwd' class="form-control" placeholder="密码" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住密码
        </label>
        <button class="btn btn-lg btn-primary btn-block" id='login_btn' type="submit">登录</button>
      </form>
    </div>

<script type='text/javascript'>
function login(){
var u=$('#user').val();
var p=$('#passwd').val()
$.ajax({
  type: "POST",
  url: "/passport/logging",
  dataType: "json",
  data: { username:u,password:p}
}).done(function( data ) {
    if(data.result != 'ok') {
      alert(data.msg);
    }else {
      window.location = data.referer;
    }
  });
return false;
}

$(document).ready(function(){
  $('#login_btn').bind('click',  login);
});
</script>
<?php $this->render('common/footer'); ?>
