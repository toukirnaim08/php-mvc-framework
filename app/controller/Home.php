<?php
class Home extends Controller
{
    private $customerModel;
    public function __construct()
    {
       // echo 'Home Loaded'."<br>";
       $this->customerModel = $this->model('Customer');
    }
    public function first()
    {
        $data = [
            'title'=>'Home About',
            'name'=>'Home About'
        ];
        $this->view('home/about',$data);
    }

    public function about()
    {
        $data = [
            'title'=>'Home About',
            'name'=>'Home About'
        ];
        $this->view('home/about',$data);
    }

    public function all()
    {
        $customers = $this->customerModel->getCustomers();
        //$customers = $this->customerModel->addCustomer($values);
        
        $data = [
            'title'=>'Home First',
            'customer'=> $customers
        ];
        $this->view('home/all',$data);
    }

    public function add()
    {
        $values = [
            'id'=>4,
            'name'=> 'customer4',
            'email'=>'customer4@gmail.com',
            'pass'=> '1234'
        ];
        $customers = $this->customerModel->addCustomer($values);
        $this->view('home/add');
    }
}