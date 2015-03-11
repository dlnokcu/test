<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Üyelik Sistemi</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

<div>
    @if($users->count())
      <table width="25%" >
        <thead>
          <tr>
              <th>Username</th>
              <th>Password</th>
              <th>User Type</th>
              <th>Update</th>
              <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
              <td>{{$user->username}}</td>
              <td>{{$user->password}}</td>
              <td>{{$user->user_type}}</td>

              <td><a class="link_button" href={{ '/edit/' . $user->id}} > Duzenle </a></td>

              {{Form::open(array('method'=>'POST','action' => array('UserController@delete',$user->id)))}}
              <td><button class="link_button" type="submit">Delete </button></td>
              {{Form::close()}}

          </tr>
         @endforeach
        </tbody>
        <td><a class="link_button" href={{ '/create/'}} > Kullanıcı Ekle </a></td>
      </table>
    @endif
</div>
</body>

</html>