<form action="module/user/form/user_create_form_submit.php" method="post">
     <div class="form-group">
        <label for="name">Nom et prenom</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom et prenom" value="<?php print $user['name']?>">
    </div>
    <div class="form-group">
        <label for="email1">Email address</label>
        <input type="email" class="form-control" value="<?php print $user['email']?>" id="email1" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password1">Password</label>
        <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password2">Password</label>
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Password">
    </div>
                                <!-- Rôle   -->
    <div class="checkbox">
        <label>Rôles</label> <br>
        <?php foreach($result_role as $role):?>
         
          <?php $checked = NULL; ?>
          <?php foreach($user['roles'] as $rid): ?>

          <?php endforeach ?>
            <?php if($rid == $role['id']) :?>
                <?php $checked = 'checked';?>
            <?php endif;?>
            <label for="role-<?php print $role['name']; ?>">
                <input type="checkbox"  id="role-admin" name="roles[<?php print$role['id'];?>]" value="<?php print 
                $role['label'];?>">
                <?php print $role['label'];?>
            </label> <br>
           
        
      <?php endforeach ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>