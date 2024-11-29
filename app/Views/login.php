<?php
  if($alert = session('alert')) : ?>
<div class="alert alert-warning mt-3"><?=$alert?></div>
<?php endif?>

<h1>Login</h1>
<form action="<?=site_url('/loginOk')?>" mathod="POST">
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="userid" id="userid" required>
    <label for="userid">아이디</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" name="passwd" id="password" placeholder="Password" required>
    <label for="password">비밀번호</label>
  </div>
  <button class="btn btn-primary">로그인</button>
</form>