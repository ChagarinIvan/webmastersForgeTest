<div class="conteiner">
    <div class="row">
        <div class="content col-md-3 user-block" >
            <div class="block-logo">
                <img class="block-logo-img" src="/<?php echo $data['image']?>"/>
            </div>
            <div class="form-group">
                <h3><?php echo $data['name']?></h3>
            </div>
            <div class="form-group">
                <h3><?php echo $data['surname']?></h3>
            </div>
        </div>
        <div class="content col-md-8 col-md-offset-1 user-block">
            <div class="form-group">
                <h3><?php echo $data['email']?></h3>
            </div>
            <div class="form-group">
                <h3><?php echo $data['male']?></h3>
            </div>
            <div class="form-group">
                <h3><?php echo $data['birthday']?></h3>
            </div>
        </div>
    </div>