<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
	<title>Güncelleme</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
	<div>
		{{Form::open(array('autocomplete'=>'off','action' => 'UserController@update','methot' => 'post'))}}
	<table>
		<tr>
			 <td>{{Form::label('username','Kullanıcı Adı:')}}</td>
			<td>{{Form::text('username', $user->username)}}</td>
			<td>{{$errors->first('username')}}</td>
		</tr>
		<tr>
			<td>{{Form::label('paassword','Şifre:')}}</td>
			<td>{{Form::password('password')}}</td>
			<td>{{$errors->first('password')}}</td>
		</tr>
		<tr>
			<td>{{Form::label('user_type','Kullanıcı Tipi;')}}</td>
			<td>{{Form::text('user_type', $user->user_type)}}</td>
		</tr>

			{{Form::hidden('id', $user->id)}}

		<tr>
			<td>{{Form::submit('güncelle')}}</td>
		</tr>
</table>
{{Form::close()}}
	</div>	
</body>
	
</html>