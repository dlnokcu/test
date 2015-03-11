<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Üyelik Sistemi</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>

<div>
{{Form::open(array('autocomplete'=>'off','action' => 'UserController@save', 'method'=>'post'))}}
<table width="30%">
<thead>
  <tr>
    <th>Kullanıcı Girişi</th>
 
</thead>

<tbody> 
  <tr>
         <td>{{Form::label('username','Kullanıcı Adı:')}}</td>

       <td>{{Form::text('username')}}</td>   
  </tr>


   <tr>
       <td>{{Form::label('password','Şifre:')}}</td>

       <td>{{Form::password('password')}}</td>  

  </tr>

   <tr>
       <td>{{Form::label('user_type','Kullanıcı Tipi:')}}</td>

       <td>{{Form::text('user_type')}}</td> 
   </tr>
  
  <tr>

      <td><button class="link_button" type="submit">Ekle</button></td>
   
  </tr>
  </tbody>
  </table>
{{ Form::close() }}
</div>
</body>
</html>