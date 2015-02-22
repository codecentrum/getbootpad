<?php  

class GettingStartedController extends Controller {

	public function index(){

		$data_for_view = array();
		$data_for_model = array();

		# call view and send data for using in view
		$this->view('getting_started/index', $data_for_view);

	}

}