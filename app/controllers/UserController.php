<?php

class UserController extends BaseController
{

	protected $user;

	public function __construct(User $user){

		$this->user = $user;
	}

	public function index(){

		return $this->user->get();
	}

	public function test(){

		return $this->user->where('id', '>', 4)->where('user_type', 1)->get();
	}

	public function create()
	{
		return View::make('index');
	}

	public function save()
	{
		//yarat

		$input =  Input::all();

		// sonrasinda create ile ekliyorsun veritabanina

		$this->user->create([
			'username' => $input['username'],
			'password' => $input['password'],
			'user_type'=> $input['user_type'],
			]);

		
// );
		//yonlendir

		return Redirect::to('/');

	}

	public function edit($id){

		$user=user::find($id);

		return View::make('edit', ['user' => $user]);


		// aldigin veriyi view a gonder
		// edit view'i yarat
		// formdaki ilgili alanlara bu modelin verilerini basalim
		// guncelleme butonu ve form
		// form un action i update olacak

	}

	public function update(){

		$id = Input::get('id');

		$rules = array(
				'username' => 'required|min:5',
				'password' => 'required'
			);

		$validation = Validator::make(Input::all(), $rules);

		if($validation->fails()){

			return Redirect::back()
				->withErrors($validation->errors())
            	->withInput();
		
		}else{ 

				/* Alternatif */


				$this->user->where('id', $id)->update(

					array(

						'username'=>input::get('username'),
						'password'=>input::get('password'),
						'user_type'=>input::get('user_type')

					)
				);


				$user = $this->user->find($id);

				$user->username = Input::get('username');
				$user->password = Input::get('password');
				$user->user_type = Input::get('user_type');
				$user->save();

			return Redirect::to('/')->with('mesaj','güncelleme başarılı.');

		}

	}


}
