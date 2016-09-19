<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\FooRepository;

class FooController extends Controller
{
	private $_repository;

	public function __construct(FooRepository $fooRepository) {
		$this->_repository = $fooRepository;
	}

	public function index() {
		$abbv = $this->_repository->abbreviation();
    	return view('static.foo', compact('abbv'));
	}
}
