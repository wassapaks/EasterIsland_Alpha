<?php
class Index extends Controller{
    function index() {
        parent::__construct();
		$this->mainpage();
    }
	public function mainpage(){
         $this->view->calendar = $this->calendar->show();
         $pages = array('headers/index_header','index','footers/index_footer');
         $this->view->render($pages, false);	
	}
    public function blahblah(){
       echo "blah blah";
    }
	public function churva($arg1){
		echo "Blah blah".$arg1;
	}	
}