<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\QuestionService;


class QuestionController extends Controller
{	
	private $service;

	public function __construct(QuestionService $service){
		$this->service = $service;
	}

	public function index(){
		$subjects = $this->service->fetchAll();
		return showResponse($subjects);
	}

	public function store(Request $request){
		// $input = $request->all()['data'];
  //       try {
  //           $v = \Validator::make($input, $this->validationRules);
  //           if ($v->fails()) {
  //               throw new \Exception("ValidationException");
  //           }
  //           return createdResponse($data);
  //       } catch (\Exception $ex) {
  //           $data = ['form_validations' => $v->errors(), 'exception' => $ex->getMessage()];
  //           return clientErrorResponse($data);
  //       }
	}


	public function update(){

	}
}   
