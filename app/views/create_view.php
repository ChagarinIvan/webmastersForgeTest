<?php $lang = $_SESSION['lang'];?>
<?php $lang_array=$_SESSION['language'][$lang];?>
<div class="row">
    <div class="content col-md-6 col-md-offset-3">
        <div class="create-form">
            <form id="form" action="/create/run" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="login"><?php echo $lang_array['login'];?></label>
                    <input type="text" name="login" class="form-control" id="login" placeholder="<?php echo $lang_array['login-ph'];?>">
                    <div class="error-box hidden"><?php echo $lang_array['error-login'];?></div>
                </div>
                <div class="form-group">
                    <label for="email"><?php echo $lang_array['email'];?></label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="<?php echo $lang_array['email-ph'];?>">
                    <div class="error-box hidden"><?php echo $lang_array['error-email'];?></div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="pass1"><?php echo $lang_array['password'];?></label>
                    <input type="password" name="pass1" class="form-control" id="pass1" placeholder="<?php echo $lang_array['password-ph'];?>">
                </div>
                <div class="form-group">
                    <label for="pass2"><?php echo $lang_array['password2'];?></label>
                    <input type="password" name="pass2" class="form-control" id="pass2" placeholder="<?php echo $lang_array['password2-ph'];?>">
                </div>
                <hr>
                <div class="form-group">
                    <label for="name"><?php echo $lang_array['name'];?></label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $lang_array['name-ph'];?>">
                    <div class="error-box hidden"><?php echo $lang_array['error-name'];?></div>
                </div>
                <div class="form-group">
                    <label for="surname"><?php echo $lang_array['surname'];?></label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="<?php echo $lang_array['surname-ph'];?>">
                    <div class="error-box hidden"><?php echo $lang_array['error-name'];?></div>
                </div>
                <div class="form-group">
                    <label for="male"><?php echo $lang_array['male'];?></label>
                    <select class="form-control" name="male" id="male">
                        <option><?php echo $lang_array['male-m'];?></option>
                        <option><?php echo $lang_array['male-f'];?></option>
                        <option><?php echo $lang_array['male-o'];?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birthday"><?php echo $lang_array['birthday'];?></label>
                    <input type="date" name="birthday" class="form-control" id="birthday" value="2000-01-01">
                </div>
                <div class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    <label for="image"><?php echo $lang_array['image'];?></label>
                    <input type="file" name="image" class="form-control" id="image"  accept="image/jpeg,image/gif,image/png">
                </div>
                <div class="form-group clearfix">
                    <button type="submit" id="send" name="submit" class="btn btn-success sign-in-button"><?php echo $lang_array['sign-up'];?></button>
                    <div class="error-box hidden" id="submit-pass-error-box"><?php echo $lang_array['error-password'];?></div>
                    <div class="error-box hidden" id="submit-all-error-box"><?php echo $lang_array['error-all'];?></div>
                </div>
            </form>
        </div>
    </div>
</div>