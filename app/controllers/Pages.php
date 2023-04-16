   <?php

  class Pages extends Controller{

  public function __construct(){

   $this->postModel=$this->model('Post');
  

  }


  public function home(){
   $post=$this->postModel->getPosts();
    
    $data=[
      'post'=>' '

    ];


    $this->view('pages/home',$data);

    
  }

  public function addtecno(){
  
    $addtecno=[

    ];

   $this->view('pages/addtecno',$addtecno);

  }

  //new tecnholagy add 
  public function item_add(){
      
   

     

     if($_SERVER['REQUEST_METHOD']=='POST'){
      //sanities data
      $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
      $additem=[
        'title'=> trim($_POST['title']),
        'catagory'=>trim($_POST['catagory']),       
         'title_error' =>'',
         'catagory_error' =>''

      ]; 
      //vali date title 
      if(empty($additem['title'])){
        $additem['title_error']='please enter title';
          
      }
    

      if(empty($additem['title_error'])){
        $this->view('pages/addtecno',$additem);
          exit();

      }else{
        die('pakaaaa');
        $this->view('pages/item_add',$additem);
      }
      
     
      


    }else{
          
      $additem=[
          'title_error'=>' '
      ];
      $this->view('pages/item_add',$additem);

     }

  }
 

 }

 ?>