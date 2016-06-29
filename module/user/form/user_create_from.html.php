<form action="module/user/form/user_create_form_submit.php" method="post">
     <div class="form-group">
        <label for="name">Nom et prenom</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom et prenom">
    </div>
    <div class="form-group">
        <label for="email1">Email address</label>
        <input type="email" class="form-control" id="email1" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password1">Password</label>
        <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password2">Password</label>
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Password">
    </div>
    <div class="checkbox">
        <label>Rôles</label> <br>
        <label for="role-admin">
            <input type="checkbox" id="role-admin" name="roles[0]" value="admin">Admin
        </label> <br>
        <label for="role-webmaster">
            <input type="checkbox" name="roles[1]" id="role-webmaster" value="webmaster">Webmaster
        </label> <br>
        <label for="role-journalist">
            <input type="checkbox" name="roles[2]" id="role-journalist" value="journalist">journaliste
        </label> <br>
        <label for="role-chief">
            <input type="checkbox" name="roles[3]" id="role-chief" value="chief_redac">Rédac en chef
        </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>