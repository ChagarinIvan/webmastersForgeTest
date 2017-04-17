<?php
$lang = $_SESSION['lang'];
$lang_array=$_SESSION['language'][$lang];
if($_SESSION['result']){
    $hidden='';
    $_SESSION['result']=false;
}else {
    $hidden='hidden';
}
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="content sign-form">
            <form id="sign" action="/acount/" method="POST">
                <div class="form-group">
                    <label for="main-login"><?php echo $lang_array['login']?></label>
                    <input type="text" name="login" class="form-control" id="main-login" placeholder="<?php echo $lang_array['login-ph'];?>">
                    <div class="error-box hidden" id="error-login-box"><?php echo $lang_array['error-empty'];?></div>
                </div>
                <div class="form-group">
                    <label for="main-password"><?php echo $lang_array['password']?></label>
                    <input type="password" name="password" class="form-control" id="main-password" placeholder="<?php echo $lang_array['password-ph']?>">
                    <div class="error-box hidden" id="error-pass-box"><?php echo $lang_array['error-empty'];?></div>
                </div>
                <div class="form-group clearfix">
                    <button type="submit" class="btn btn-success sign-in-button"><?php echo $lang_array['sign-in']?></button>
                    <div class="error-box <?php echo $hidden?>" id="error-login-box"><?php echo $lang_array['error-not-autorization'];?></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="content create-block">
            <p class="create-text text-center"><?php echo $lang_array['new']?><a href="/create/"><?php echo $lang_array['create']?></a>.</p>
        </div>
    </div>
</div>