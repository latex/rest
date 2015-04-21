<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Models\User;

use Request;
use Hash;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	private $user;

	public function __construct(User $user) {
		$this->user = $user;
	}

	public function index() {
		//$user = \App\Models\User::get();

		/*
		return response()->json([
		'msg' => "Succes",
		'Users' => $user->toArray(),
		], 200
		);
		 */
		return $this->user->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		$user = User::create(Request::all(),[
            'password' => Hash::make(Request::get('password'))
        ]);
		return $user;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

}
