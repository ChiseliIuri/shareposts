<?php
    class Pages extends Controller{
        public function __construct(){

        }

        public function index(){
            $data = [
                'title'=>'Welcome',
                'description'=>'Simple social network built on the TravercyMVC PHP framework'
            ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title'=>'About US',
                'description'=>'App to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }
    