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
//Création de table dans une boucle php
    $markup = '<table class="table table-hover">';
    $markup .= '<thead> <tr> <th>Id</th> <th>Nom</th> <th>Email</th> <th>Rôle</th> </tr> </thead>';
    $markup .='<tbody>';
    foreach ($users as  $user) {
        $markup .= '<tr>' ;
        $markup .= generate_user_row($user);
        $markup .='</tr>' ;
        }
    $markup .='</tbody>';  
    $markup .= '</table>';
    print $markup;
  //function
      function generate_user_row($user) {

          $row = '<th scope="row">' .$user['id'] .'</th>';
          $row .= '<td> '. $user['name'] . '</td>';
          $row .= '<td>' . $user['email'] . '</td>';
          $row .= '<td>';
          $row .= generate_rol_cell ($user['role']);
          $row .= '</td>';
          return $row;
          }
         
      function generate_rol_cell ($roles) {
          $cell = '<td>';
          foreach ($roles as  $role) {
               $cell .= $role . ", " ;
              }
          $cell .= '</td>';
          return $cell;

      }
  ?>
