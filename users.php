
<?php
    
    $users_db  = array(
         array(
            'ids'   => 1,
            'name' => 'JF',
            'email' => 'jf@v.com',
            'roles' => ['admin']
            
            ),
         array(
            'id'   => 2,
            'name' => 'JB',
            'email' => 'jB@v.com',
            'role'  => ['journalist']
            ),
         array(
            'id'   => 3,
            'name' => 'JC',
            'email' => 'jc@v.com',
            'role'  => ['webmaster', 'chef_editor']
            )
        );
   $users = array();

   foreach ($users_db as $user_db) {
      $users[] = array(
          'uid' => $user_db['id'],
          'user_name' => $user_db['name'],
          'user_email' => $user_db['email'],
          'user_roles' => generate_user_roles($user_db['roles']),
        );
   }

   include_once 'users.html.php';
  //functions
      
      function generate_user_roles ($roles) {
        
          $output = NULL;
          $nb = count($roles);
          for ($i = 0; $i < $nb; $i++) {
        
              if($i) {
                 $output .= ', ';  
              }
             
              $output.= $roles[$i];
          }
         
          return $output;

      }
  ?>
