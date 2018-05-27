<?php 
    Class Pages extends Controller {
        public function __construct(){

        }

        public function index(){

            $data = [
                'title' => 'welcome'
            ];

            $this->view('pages/index', $data);
        }


    }

    