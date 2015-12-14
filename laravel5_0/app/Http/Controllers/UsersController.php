<?php namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller {


	public function getOrm()
	{
		//$result = User::first();
		//$user = User::first();
		//$users = User::get();
		$users = User::select('id', 'first_name')
		->with('profile') //Como joint
		->where('first_name', '<>', 'Luis')
		->orderBy('first_name', 'ASC')
		->get();

		//dd($result->full_name); //Es lo msimo que getFullNameAttribute
		//dd($user->profile->age);
		dd($users->toArray());
	}

	
	public function getIndex()
	{
		$result = \DB::table('users')
		->select(
			//'users.id',
			//'first_name',
			//'last_name',
			'users.*',
			'user_profiles.id as profile_id',
			'user_profiles.twitter',
			'user_profiles.birthdate'
			)
		//->where('first_name','<>', 'Luis')
		->orderBy('id', 'ASC')
		//->orderBy(\DB::raw('RAND()'))
		//->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
		->leftjoin('user_profiles', 'users.id', '=', 'user_profiles.user_id')
		->get(); //Obtener todos los registros
		//->first(); //Obtener el primer registro soloamente

		foreach ($result as $row) 
		{
			$row->full_name = $row->first_name . ' ' . $row->last_name;
			$row->age = \Carbon\Carbon::parse($row->birthdate)->age; //Mostrar edades
		}

		//$result->full_name = $result->first_name . ' ' . $result->last_name;

		dd($result);
		//dd($result->first_name . ' ' . $result->last_name);
		//dd($result->full_name);

		return $result;
	}

	
}
