   <?php

  class Pages extends Controller{

  public function __construct(){

   $this->postModel=$this->model('Post');
  

  }


  public function home(){
    $post=$this->postModel->getPosts();
    
    $data=[
      'post'=>$post

    ];


    $this->view('pages/home',$data);

    
  }

  public function addtecno(){
  
    $addtecno=[

    ];

   $this->view('pages/addtecno',$addtecno);

  }


  public function item_add(){
     $additem=[];
     $this->view('pages/item_add',$additem);

  }
 

 }

 ?>