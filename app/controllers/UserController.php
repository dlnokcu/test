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

		

		return View::make('edit');


		// aldigin veriyi view a gonder
		// edit view'i yarat
		// formdaki ilgili alanlara bu modelin verilerini basalim
		// guncelleme butonu ve form
		// form un action i update olacak

	}

	public function update(){

		$input =  Input::all();

		if ($id == 'id') {
			
		$this->user->update([

			'username' => $input['username'],
			'password ' => $input['password'],
			'user_type' => $input['user_type'],
			]);

		return Redirect::to('/');
		}

		else {
			echo "böyle bir kullanıcı yok";

			return Redirect::to('/edit');
		}

 
		
		


	}


}
