<?php
class Dashboard extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $data = 
        [
            'title'=>'Dashboard index',
            'name' =>'Dashboard index'
        ];
        $this->view('dashboard/index',$data);
    }
}