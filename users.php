<?php
    
      $users  = array(
      0 => array(
      'id'   => 1,
      'name' => 'JF',
      'email' => 'jf@v.com',
      'role' => ['admin']
      
      ),
      1 => array(
      'id'   => 2,
      'name' => 'JB',
      'email' => 'jB@v.com',
      'role'  => ['journalist']
      ),
        2 => array(
      'id'   => 3,
      'name' => 'JC',
      'email' => 'jc@v.com',
      'role'  => ['webmaster', 'chef_editor']
      )
      );

    
    foreach ($users as  $user) {
      print 'Nom: '. $user['name'] .'<br>';
      print 'Email: '. $user['email'] .'<br>';
    }

  ?>