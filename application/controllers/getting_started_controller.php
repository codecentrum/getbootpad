<?php  

/**
* This controller is for example
* This is controller that call by default
* You can set deafault controller at index.php ( location in root of this application directory )
*/

class GettingStartedController extends Controller {

	public function index(){

		$data_for_view = array();
		$data_for_model = array();

		// call view and send data for using in view
		$this->view('getting_started', $data_for_view);

	}

}

?>