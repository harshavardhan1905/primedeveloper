<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homecontroller extends CI_Controller {




  function __construct() {
       parent::__construct();


$this->load->model('category');
       $this->load->library('form_validation');
$this->load->model('user');
       $this->load->library('session');
       $this->load->library('upload');
$this->load->library('image_lib');
       $this->form_validation->set_message('is_unique', 'The %s is already taken');



 $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');

    }

public function dashboard(){


  $data = array();
  if($this->isUserLoggedIn){
      $con = array(
          'id' => $this->session->userdata('userId')
      );
      $data['user'] = $this->user->getRows($con);



      $this->load->view('dashboard', $data);

  }else{
      redirect('index');
  }

  }



  public function index(){
       $data = array();

       if($this->session->userdata('success_msg')){
           $data['success_msg'] = $this->session->userdata('success_msg');
           $this->session->unset_userdata('success_msg');
       }
       if($this->session->userdata('error_msg')){
           $data['error_msg'] = $this->session->userdata('error_msg');
           $this->session->unset_userdata('error_msg');
       }

       // If login request submitted
       if($this->input->post('loginSubmit')){
           $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
           $this->form_validation->set_rules('password', 'password', 'required');

           if($this->form_validation->run() == true){
               $con = array(
                   'returnType' => 'single',
                   'conditions' => array(
                       'email'=> $this->input->post('email'),
                       'password' => md5($this->input->post('password')),
                       'status' => 1
                   )
               );
               $checkLogin = $this->user->getRows($con);
               if($checkLogin){
                   $this->session->set_userdata('isUserLoggedIn', TRUE);
                   $this->session->set_userdata('userId', $checkLogin['id']);
                   redirect('dashboard');
               }else{
                   $data['error_msg'] = 'Wrong email or password, please try again.';
               }
           }else{
               $data['error_msg'] = 'Wrong email or password, please try again.';
           }
       }

       // Load view

       $this->load->view('login', $data);

    }





    public function logout(){
         $this->session->unset_userdata('isUserLoggedIn');
         $this->session->unset_userdata('userId');
         $this->session->sess_destroy();
         redirect('index');
      }



      public function categories(){


        $data = array();
        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listcategory();
            $this->load->view('categories', $data);

        }else{
            redirect('index');
        }

        }
        
        
         public function projects(){


        $data = array();
        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
            $data['list'] = $this->category->listprojects();
            $this->load->view('projects', $data);

        }else{
            redirect('index');
        }

        }
        
         public function registrations(){


        $data = array();
        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
$data['list'] = $this->category->listregistrations();
            $this->load->view('registrations', $data);

        }else{
            redirect('index');
        }

        }
        
        
        public function homeprojects(){


        $data = array();
        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
$data['list'] = $this->category->listhomeprojects();
            $this->load->view('homeprojects', $data);

        }else{
            redirect('index');
        }

        }
        
           public function blogs(){


        $data = array();
        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
$data['list'] = $this->category->listblogs();
            $this->load->view('blogs', $data);

        }else{
            redirect('index');
        }

        }
        
        
        public function addproject(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);



                    if(isset($_POST['addproduct']))
             {


    


               $this->load->library('upload');
               $image = array();
               $ImageCount = count($_FILES['pimage']['name']);
               for($i = 0; $i < $ImageCount; $i++){
               $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
               $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
               $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
               $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
               $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

               // File upload configuration
               $uploadPath = './uploads/products/';
               $config['upload_path'] = $uploadPath;
               $config['allowed_types'] = 'jpg|jpeg|png|gif';

               // Load and initialize upload library
               $this->load->library('upload', $config);
               $this->upload->initialize($config);

               // Upload file to server
               if($this->upload->do_upload('file')){
               // Uploaded file data
               $imageData = $this->upload->data();
                // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                $uploadImgData[] = $imageData['file_name'];


                $data = array('upload_data' => $this->upload->data());
                               $path=$data['upload_data']['full_path'];
                               $q['name']=$data['upload_data']['file_name'];

                                $config['image_library'] = 'gd2';
                                $config['source_image']   = $path;
                                $config['maintain_ratio'] = TRUE;
                                $config['width']  = 1000;
                                $config['height'] = 1000;

                                $this->load->library('image_lib');
$this->image_lib->initialize($config);
                               $this->image_lib->resize();

                               unset($config);
                               $this->load->library('image_lib');
                               $this->image_lib->clear();




               }
               }






             
                   $name = $this->input->post('name');
                  
                  

                  $pimage = $uploadImgData;



               $insertUserData = $this->category->addproject($name,$pimage);

               if($insertUserData){
                   $this->session->set_flashdata('success_msg', 'Project Addedd Successfuly');
               }else{
                   $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
               }

               redirect('homecontroller/projects');


          
        }



                    $this->load->view('addproject', $data);

                }else{
                    redirect('index');
                }

                }
                
                
                
                 public function addhomeproject(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);



                    if(isset($_POST['addproduct']))
             {


    


               $this->load->library('upload');
               $image = array();
               $ImageCount = count($_FILES['pimage']['name']);
               for($i = 0; $i < $ImageCount; $i++){
               $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
               $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
               $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
               $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
               $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

               // File upload configuration
               $uploadPath = './uploads/products/';
               $config['upload_path'] = $uploadPath;
               $config['allowed_types'] = 'jpg|jpeg|png|gif';

               // Load and initialize upload library
               $this->load->library('upload', $config);
               $this->upload->initialize($config);

               // Upload file to server
               if($this->upload->do_upload('file')){
               // Uploaded file data
               $imageData = $this->upload->data();
                // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                $uploadImgData[] = $imageData['file_name'];


                $data = array('upload_data' => $this->upload->data());
                               $path=$data['upload_data']['full_path'];
                               $q['name']=$data['upload_data']['file_name'];

                                $config['image_library'] = 'gd2';
                                $config['source_image']   = $path;
                                $config['maintain_ratio'] = TRUE;
                                $config['width']  = 1000;
                                $config['height'] = 1000;

                                $this->load->library('image_lib');
$this->image_lib->initialize($config);
                               $this->image_lib->resize();

                               unset($config);
                               $this->load->library('image_lib');
                               $this->image_lib->clear();




               }
               }






             
                   $name = $this->input->post('name');
                    $totalbuildings = $this->input->post('totalbuildings');
                     $available = $this->input->post('available');
                      $location = $this->input->post('location');
                       $unitsold = $this->input->post('unitsold');
                        $category = $this->input->post('category');
                        $urlt = $this->input->post('urlt');
                  
                  

                  $pimage = $uploadImgData;



               $insertUserData = $this->category->addhomeproject($name,$pimage,$totalbuildings,$available,$location,$unitsold,$category,$urlt);

               if($insertUserData){
                   $this->session->set_flashdata('success_msg', 'Project Addedd Successfuly');
               }else{
                   $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
               }

               redirect('homecontroller/homeprojects');


          
        }



                    $this->load->view('addhomeproject', $data);

                }else{
                    redirect('index');
                }

                }

        
        
          public function editproject(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                  
                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selectproject($id);
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/products/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 1000;
                                    $config['height'] = 1000;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }


if (!$this->upload->do_upload('floorplansretail')) {
  // Document upload failed, handle the error
  $document_error3 = $this->upload->display_errors();
  echo "Document Upload Error: " . $document_error3; // Add this line for error reporting
} else {
  // Document upload success, process the document
  $documentData3 = $this->upload->data();
  $uploadedDocumentPath3 = $documentData3['full_path']; // Path of the uploaded document
  $uploadedDocumentName3 = $documentData3['file_name']; // Name of the uploaded document

}

if (!$this->upload->do_upload('floorplansoffice')) {
  // Document upload failed, handle the error
  $document_error4 = $this->upload->display_errors();
  echo "Document Upload Error: " . $document_error4; // Add this line for error reporting
} else {
  // Document upload success, process the document
  $documentData4 = $this->upload->data();
  $uploadedDocumentPath4 = $documentData4['full_path']; // Path of the uploaded document
  $uploadedDocumentName4 = $documentData4['file_name']; // Name of the uploaded document

}
if (!$this->upload->do_upload('retail3dview')) {
  // Document upload failed, handle the error
  $document_error2 = $this->upload->display_errors();
  echo "Document Upload Error: " . $document_error2; // Add this line for error reporting
} else {
  // Document upload success, process the document
  $documentData2 = $this->upload->data();
  $uploadedDocumentPath2 = $documentData2['full_path']; // Path of the uploaded document
  $uploadedDocumentName2 = $documentData2['file_name']; // Name of the uploaded document

}





                 $name = $this->input->post('name');
                 
                 $highlights = $this->input->post('highlights');
                 $summary = $this->input->post('summary');
                 $amenities = $this->input->post('amenities');
                 $facts = $this->input->post('facts');
                 
                 $abouttag = $this->input->post('abouttag');
                 $aboutheading = $this->input->post('aboutheading');
                 
                 $projectsize = $this->input->post('projectsize');
                 $acres = $this->input->post('acres');
                 $totalunits = $this->input->post('totalunits');
                 $availableunits = $this->input->post('availableunits');
                 
                 $projecttag = $this->input->post('projecttag');
                 $projectheading = $this->input->post('projectheading');
                 
                 $galleryheading = $this->input->post('galleryheading');
                 $gallerysubheading = $this->input->post('gallerysubheading');
                 
                 $ptraffic = $this->input->post('ptraffic');
$putilities = $this->input->post('putilities');
$paccess = $this->input->post('paccess');
$plocation = $this->input->post('plocation');
$buildingsize = $this->input->post('buildingsize');
$floorsize = $this->input->post('floorsize');

$buildingsizeheading = $this->input->post('buildingsizeheading');
$floorsizeheading = $this->input->post('floorsizeheading');
$gallerybehind = $this->input->post('gallerybehind');
$location=$this->input->post('location');
         
         $ptrafficheading = $this->input->post('ptrafficheading');
$putilitiesheading = $this->input->post('putilitiesheading');
$paccessheading = $this->input->post('paccessheading');
$plocationheading = $this->input->post('plocationheading');

$y1 = $this->input->post('y1');
$y2 = $this->input->post('y2');
$y3 = $this->input->post('y3');
$y4 = $this->input->post('y4');
$y5 = $this->input->post('y5');
$y6 = $this->input->post('y6');
                

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                        else{
        
                          $pimage=$this->input->post('pimage1p');
                        }
                        if($uploadedDocumentName3){
  $d5=$uploadedDocumentName3;
}
else{
  $d5=$this->input->post('floorplansretail1');
}

if($uploadedDocumentName4){
  $d6=$uploadedDocumentName4;
}
else{
  $d6=$this->input->post('floorplansoffice1');
}


if($uploadedDocumentName2){
  $d4=$uploadedDocumentName2;
}
else{
  $d4=$this->input->post('retail3dview1');
}


                 //Pass user data to model
                 $insertUserDatas = $this->category->editproject($name,$pimage,$id,$highlights,$summary,$amenities,$facts,$abouttag,$aboutheading,$projectsize,$acres,$totalunits,$availableunits,$projecttag,$projectheading,$galleryheading,$gallerysubheading,$ptraffic,$putilities,$paccess,$plocation,$buildingsize,$floorsize,$buildingsizeheading,$floorsizeheading,$gallerybehind,$d4,$d5,$d6,$location,$ptrafficheading,$putilitiesheading,$paccessheading,$plocationheading,$y1,$y2,$y3,$y4,$y5,$y6);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Project Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/projects');

           }

                      $this->load->view('editproject', $data);

                  }else{
                      redirect('index');
                  }

                  }





   public function edithomeproject(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                  
                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selecthomeproject($id);
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/products/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 1000;
                                    $config['height'] = 1000;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }



                 $name = $this->input->post('name');
                  $totalbuildings = $this->input->post('totalbuildings');
                     $available = $this->input->post('available');
                      $location = $this->input->post('location');
                       $unitsold = $this->input->post('unitsold');
                        $category = $this->input->post('category');
                        $urlt = $this->input->post('urlt');
                 

                

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                        else{
        
                          $pimage=$this->input->post('pimage1p');
                        }
                       


                 //Pass user data to model
                 $insertUserDatas = $this->category->edithomeproject($name,$pimage,$id,$totalbuildings,$available,$location,$unitsold,$category,$urlt);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Project Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/homeprojects');

           }

                      $this->load->view('edithomeproject', $data);

                  }else{
                      redirect('index');
                  }

                  }



          public function editprojectsites(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                  
                      $id =$this->uri->segment(3);
                                          $data['list'] = $this->category->selectprojectsites($id);
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/products/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 1000;
                                    $config['height'] = 1000;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }





      

                

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                       

                 //Pass user data to model
                 $insertUserDatas = $this->category->editprojectsite($pimage,$id);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Project Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/projects');

           }

                      $this->load->view('editprojectsites', $data);

                  }else{
                      redirect('index');
                  }

                  }





          public function editprojectclients(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                  
                      $id =$this->uri->segment(3);
                                          $data['list'] = $this->category->selectprojectclients($id);
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/products/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 1000;
                                    $config['height'] = 1000;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }





             
                

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                        

                 //Pass user data to model
                 $insertUserDatas = $this->category->editprojectclient($pimage,$id);
                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Project Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/projects');

           }

                      $this->load->view('editprojectclients', $data);

                  }else{
                      redirect('index');
                  }

                  }


 


  public function editprojectplans() {
    $data = array();
    if ($this->isUserLoggedIn) {
        $con = array(
            'id' => $this->session->userdata('userId')
        );
        $data['user'] = $this->user->getRows($con);

        $id = $this->uri->segment(3);
        $data['vals'] = $this->category->selectproject($id);
        if (isset($_POST['editproduct'])) {
            // Check whether user uploaded pictures
         
$this->load->library('upload');
 $upload_config['upload_path'] = './uploads/products'; // Specify the upload directory
$upload_config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx'; // Specify allowed file types

$this->upload->initialize($upload_config);

if (!$this->upload->do_upload('pimage')) {
    // Image upload failed, handle the error
    $image_error = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData = $this->upload->data();
    $uploadedImagePath = $imageData['full_path']; // Path of the uploaded image
    $uploadImgData = $imageData['file_name']; // Name of the uploaded image

}


if (!$this->upload->do_upload('pimage2')) {
    // Image upload failed, handle the error
    $image_error2 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error2; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData2 = $this->upload->data();
    $uploadedImagePath2 = $imageData2['full_path']; // Path of the uploaded image
    $uploadImgData2 = $imageData2['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage3')) {
    // Image upload failed, handle the error
    $image_error3 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error3; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData3 = $this->upload->data();
    $uploadedImagePath3 = $imageData3['full_path']; // Path of the uploaded image
    $uploadImgData3 = $imageData3['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage4')) {
    // Image upload failed, handle the error
    $image_error4 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error4; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData4 = $this->upload->data();
    $uploadedImagePath4 = $imageData4['full_path']; // Path of the uploaded image
    $uploadImgData4 = $imageData4['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage5')) {
    // Image upload failed, handle the error
    $image_error5 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error5; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData5 = $this->upload->data();
    $uploadedImagePath5 = $imageData5['full_path']; // Path of the uploaded image
    $uploadImgData5 = $imageData5['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage6')) {
    // Image upload failed, handle the error
    $image_error6 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error6; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData6 = $this->upload->data();
    $uploadedImagePath6 = $imageData6['full_path']; // Path of the uploaded image
    $uploadImgData6 = $imageData6['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage7')) {
    // Image upload failed, handle the error
    $image_error7 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error7; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData7 = $this->upload->data();
    $uploadedImagePath7 = $imageData7['full_path']; // Path of the uploaded image
    $uploadImgData7 = $imageData7['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage8')) {
    // Image upload failed, handle the error
    $image_error8 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error8; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData8 = $this->upload->data();
    $uploadedImagePath8 = $imageData8['full_path']; // Path of the uploaded image
    $uploadImgData8 = $imageData8['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage9')) {
    // Image upload failed, handle the error
    $image_error9 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error9; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData9 = $this->upload->data();
    $uploadedImagePath9 = $imageData9['full_path']; // Path of the uploaded image
    $uploadImgData9 = $imageData9['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage10')) {
    // Image upload failed, handle the error
    $image_error10 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error10; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData10 = $this->upload->data();
    $uploadedImagePath10 = $imageData10['full_path']; // Path of the uploaded image
    $uploadImgData10 = $imageData10['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage11')) {
    // Image upload failed, handle the error
    $image_error11 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error11; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData11 = $this->upload->data();
    $uploadedImagePath11 = $imageData11['full_path']; // Path of the uploaded image
    $uploadImgData11 = $imageData11['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage12')) {
    // Image upload failed, handle the error
    $image_error12 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error12; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData12 = $this->upload->data();
    $uploadedImagePath12 = $imageData12['full_path']; // Path of the uploaded image
    $uploadImgData12 = $imageData12['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage13')) {
    // Image upload failed, handle the error
    $image_error13 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error13; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData13 = $this->upload->data();
    $uploadedImagePath13 = $imageData13['full_path']; // Path of the uploaded image
    $uploadImgData13 = $imageData13['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage14')) {
    // Image upload failed, handle the error
    $image_error14 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error14; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData14 = $this->upload->data();
    $uploadedImagePath14 = $imageData14['full_path']; // Path of the uploaded image
    $uploadImgData14 = $imageData14['file_name']; // Name of the uploaded image

}
if (!$this->upload->do_upload('pimage15')) {
    // Image upload failed, handle the error
    $image_error15 = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error15; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData15 = $this->upload->data();
    $uploadedImagePath15 = $imageData15['full_path']; // Path of the uploaded image
    $uploadImgData15 = $imageData15['file_name']; // Name of the uploaded image

}


   if($uploadImgData){
                        $pimage1 = $uploadImgData;
                        
                        }
                        else{
        
                          $pimage1=$this->input->post('pimage1p');
                        }
                       
                        
                        if($uploadImgData2){
                        $pimage2 = $uploadImgData2;
                        }
                        else{
        
                          $pimage2=$this->input->post('pimage2p');
                        }
                     
                        if($uploadImgData3){
                        $pimage3 = $uploadImgData3;
                        }
                        else{
        
                          $pimage3=$this->input->post('pimage3p');
                        }
                        
                        if($uploadImgData4){
                        $pimage4 = $uploadImgData4;
                        }
                        else{
        
                          $pimage4=$this->input->post('pimage4p');
                        }
                        
                        if($uploadImgData5){
                        $pimage5 = $uploadImgData5;
                        }
                        else{
        
                          $pimage5=$this->input->post('pimage5p');
                        }
                        
                        if($uploadImgData6){
                        $pimage6 = $uploadImgData6;
                        }
                        else{
        
                          $pimage6=$this->input->post('pimage6p');
                        }
                        
                       // For Field 7
if ($uploadImgData7) {
    $pimage7 = $uploadImgData7;
} else {
    $pimage7 = $this->input->post('pimage7p');
}

// For Field 8
if ($uploadImgData8) {
    $pimage8 = $uploadImgData8;
} else {
    $pimage8 = $this->input->post('pimage8p');
}

// For Field 9
if ($uploadImgData9) {
    $pimage9 = $uploadImgData9;
} else {
    $pimage9 = $this->input->post('pimage9p');
}

// For Field 10
if ($uploadImgData10) {
    $pimage10 = $uploadImgData10;
} else {
    $pimage10 = $this->input->post('pimage10p');
}

// For Field 11
if ($uploadImgData11) {
    $pimage11 = $uploadImgData11;
} else {
    $pimage11 = $this->input->post('pimage11p');
}

// For Field 12
if ($uploadImgData12) {
    $pimage12 = $uploadImgData12;
} else {
    $pimage12 = $this->input->post('pimage12p');
}

// For Field 13
if ($uploadImgData13) {
    $pimage13 = $uploadImgData13;
} else {
    $pimage13 = $this->input->post('pimage13p');
}

// For Field 14
if ($uploadImgData14) {
    $pimage14 = $uploadImgData14;
} else {
    $pimage14 = $this->input->post('pimage14p');
}

// For Field 15
if ($uploadImgData15) {
    $pimage15 = $uploadImgData15;
} else {
    $pimage15 = $this->input->post('pimage15p');
}




$totalarea1 = $this->input->post('totalarea1');
$totalarea2 = $this->input->post('totalarea2');
$totalarea3 = $this->input->post('totalarea3');
$totalarea4 = $this->input->post('totalarea4');
$totalarea5 = $this->input->post('totalarea5');
$totalarea6 = $this->input->post('totalarea6');
$totalarea7 = $this->input->post('totalarea7');
$totalarea8 = $this->input->post('totalarea8');
$totalarea9 = $this->input->post('totalarea9');
$totalarea10 = $this->input->post('totalarea10');
$totalarea11 = $this->input->post('totalarea11');
$totalarea12 = $this->input->post('totalarea12');
$totalarea13 = $this->input->post('totalarea13');
$totalarea14 = $this->input->post('totalarea14');
$totalarea15 = $this->input->post('totalarea15');


$building1 = $this->input->post('building1');
$building2 = $this->input->post('building2');
$building3 = $this->input->post('building3');
$building4 = $this->input->post('building4');
$building5 = $this->input->post('building5');
$building6 = $this->input->post('building6');
$building7 = $this->input->post('building7');
$building8 = $this->input->post('building8');
$building9 = $this->input->post('building9');
$building10 = $this->input->post('building10');
$building11 = $this->input->post('building11');
$building12 = $this->input->post('building12');
$building13 = $this->input->post('building13');
$building14 = $this->input->post('building14');
$building15 = $this->input->post('building15');


$totalunits1 = $this->input->post('totalunits1');
$totalunits2 = $this->input->post('totalunits2');
$totalunits3 = $this->input->post('totalunits3');
$totalunits4 = $this->input->post('totalunits4');
$totalunits5 = $this->input->post('totalunits5');
$totalunits6 = $this->input->post('totalunits6');
$totalunits7 = $this->input->post('totalunits7');
$totalunits8 = $this->input->post('totalunits8');
$totalunits9 = $this->input->post('totalunits9');
$totalunits10 = $this->input->post('totalunits10');
$totalunits11 = $this->input->post('totalunits11');
$totalunits12 = $this->input->post('totalunits12');
$totalunits13 = $this->input->post('totalunits13');
$totalunits14 = $this->input->post('totalunits14');
$totalunits15 = $this->input->post('totalunits15');


$availableunits1 = $this->input->post('availableunits1');
$availableunits2 = $this->input->post('availableunits2');
$availableunits3 = $this->input->post('availableunits3');
$availableunits4 = $this->input->post('availableunits4');
$availableunits5 = $this->input->post('availableunits5');
$availableunits6 = $this->input->post('availableunits6');
$availableunits7 = $this->input->post('availableunits7');
$availableunits8 = $this->input->post('availableunits8');
$availableunits9 = $this->input->post('availableunits9');
$availableunits10 = $this->input->post('availableunits10');
$availableunits11 = $this->input->post('availableunits11');
$availableunits12 = $this->input->post('availableunits12');
$availableunits13 = $this->input->post('availableunits13');
$availableunits14 = $this->input->post('availableunits14');
$availableunits15 = $this->input->post('availableunits15');


$parking1 = $this->input->post('parking1');
$parking2 = $this->input->post('parking2');
$parking3 = $this->input->post('parking3');
$parking4 = $this->input->post('parking4');
$parking5 = $this->input->post('parking5');
$parking6 = $this->input->post('parking6');
$parking7 = $this->input->post('parking7');
$parking8 = $this->input->post('parking8');
$parking9 = $this->input->post('parking9');
$parking10 = $this->input->post('parking10');
$parking11 = $this->input->post('parking11');
$parking12 = $this->input->post('parking12');
$parking13 = $this->input->post('parking13');
$parking14 = $this->input->post('parking14');
$parking15 = $this->input->post('parking15');


$price1 = $this->input->post('price1');
$price2 = $this->input->post('price2');
$price3 = $this->input->post('price3');
$price4 = $this->input->post('price4');
$price5 = $this->input->post('price5');
$price6 = $this->input->post('price6');
$price7 = $this->input->post('price7');
$price8 = $this->input->post('price8');
$price9 = $this->input->post('price9');
$price10 = $this->input->post('price10');
$price11 = $this->input->post('price11');
$price12 = $this->input->post('price12');
$price13 = $this->input->post('price13');
$price14 = $this->input->post('price14');
$price15 = $this->input->post('price15');


$buildingname1 = $this->input->post('buildingname1');
$buildingname2 = $this->input->post('buildingname2');
$buildingname3 = $this->input->post('buildingname3');
$buildingname4 = $this->input->post('buildingname4');
$buildingname5 = $this->input->post('buildingname5');
$buildingname6 = $this->input->post('buildingname6');
$buildingname7 = $this->input->post('buildingname7');
$buildingname8 = $this->input->post('buildingname8');
$buildingname9 = $this->input->post('buildingname9');
$buildingname10 = $this->input->post('buildingname10');
$buildingname11 = $this->input->post('buildingname11');
$buildingname12 = $this->input->post('buildingname12');
$buildingname13 = $this->input->post('buildingname13');
$buildingname14 = $this->input->post('buildingname14');
$buildingname15 = $this->input->post('buildingname15');



$floorplancontent = $this->input->post('floorplancontent');
$floorplanheading = $this->input->post('floorplanheading');


                

                  


                 //Pass user data to model
                 $insertUserDatas = $this->category->editprojectplans($id, $totalarea1, $totalarea2, $totalarea3, $totalarea4, $totalarea5, $totalarea6, $totalarea7, $totalarea8, $totalarea9, $totalarea10, $totalarea11, $totalarea12, $totalarea13, $totalarea14, $totalarea15,$building1, $building2, $building3, $building4, $building5, $building6, $building7, $building8, $building9, $building10, $building11, $building12, $building13, $building14, $building15,$totalunits1, $totalunits2, $totalunits3, $totalunits4, $totalunits5, $totalunits6, $totalunits7, $totalunits8, $totalunits9, $totalunits10, $totalunits11, $totalunits12, $totalunits13, $totalunits14, $totalunits15,$availableunits1, $availableunits2, $availableunits3, $availableunits4, $availableunits5, $availableunits6, $availableunits7, $availableunits8, $availableunits9, $availableunits10, $availableunits11, $availableunits12, $availableunits13, $availableunits14, $availableunits15,$parking1, $parking2, $parking3, $parking4, $parking5, $parking6, $parking7, $parking8, $parking9, $parking10, $parking11, $parking12, $parking13, $parking14, $parking15,$price1, $price2, $price3, $price4, $price5, $price6, $price7, $price8, $price9, $price10, $price11, $price12, $price13, $price14, $price15,$buildingname1, $buildingname2, $buildingname3, $buildingname4, $buildingname5, $buildingname6, $buildingname7, $buildingname8, $buildingname9, $buildingname10, $buildingname11, $buildingname12, $buildingname13, $buildingname14, $buildingname15, $pimage1, $pimage2, $pimage3, $pimage4, $pimage5, $pimage6, $pimage7, $pimage8, $pimage9, $pimage10, $pimage11, $pimage12, $pimage13, $pimage14, $pimage15,$floorplanheading,$floorplancontent);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Project Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/projects');

           }

                      $this->load->view('editprojectplans', $data);

                  }else{
                      redirect('index');
                  }

                  }

private function processImageUpload($field, $uploadPath, $width, $height) {
    $this->load->library('upload');
    $this->load->library('image_lib');
    $imageData = array();

    $ImageCount = count($_FILES[$field]['name']);

    for ($i = 0; $i < $ImageCount; $i++) {
        $_FILES['file']['name'] = $_FILES[$field]['name'][$i];
        $_FILES['file']['type'] = $_FILES[$field]['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES[$field]['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES[$field]['error'][$i];
        $_FILES['file']['size'] = $_FILES[$field]['size'][$i];

        // File upload configuration
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';

        $this->upload->initialize($config);

        // Upload file to server
        if ($this->upload->do_upload('file')) {
            // Uploaded file data
            $imageData[] = $this->upload->data();

            // Resize uploaded image
            $path = $imageData[$i]['full_path'];
            $config['image_library'] = 'gd2';
            $config['source_image'] = $path;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = $width;
            $config['height'] = $height;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();
        } else {
            // Handle upload error
            $error = array('error' => $this->upload->display_errors());
            // You can log or handle the error as per your application's requirement
        }
    }

    return $imageData;
}


 public function editprojectdetails(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                  
                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selectproject($id);
                      if(isset($_POST['editproduct']))
               {
                 
                 
 $upload_config['upload_path'] = './uploads/products'; // Specify the upload directory
$upload_config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx'; // Specify allowed file types

// Initialize the upload library with the shared configuration
$this->upload->initialize($upload_config);

if (!$this->upload->do_upload('flyer')) {
    // Image upload failed, handle the error
    $image_error = $this->upload->display_errors();
    echo "Image Upload Error: " . $image_error; // Add this line for error reporting
} else {
    // Image upload success, process the image
    $imageData = $this->upload->data();
    $uploadedImagePath = $imageData['full_path']; // Path of the uploaded image
    $uploadedImageName = $imageData['file_name']; // Name of the uploaded image

}

if (!$this->upload->do_upload('retailelevation')) {
    // Document upload failed, handle the error
    $document_error = $this->upload->display_errors();
    echo "Document Upload Error: " . $document_error; // Add this line for error reporting
} else {
    // Document upload success, process the document
    $documentData = $this->upload->data();
    $uploadedDocumentPath = $documentData['full_path']; // Path of the uploaded document
    $uploadedDocumentName = $documentData['file_name']; // Name of the uploaded document

}

if (!$this->upload->do_upload('retailfloorplan')) {
    // Document upload failed, handle the error
    $document_error1 = $this->upload->display_errors();
    echo "Document Upload Error: " . $document_error1; // Add this line for error reporting
} else {
    // Document upload success, process the document
    $documentData1 = $this->upload->data();
    $uploadedDocumentPath1 = $documentData1['full_path']; // Path of the uploaded document
    $uploadedDocumentName1 = $documentData1['file_name']; // Name of the uploaded document

}




if (!$this->upload->do_upload('nearby')) {
    // Document upload failed, handle the error
    $document_error5 = $this->upload->display_errors();
    echo "Document Upload Error: " . $document_error5; // Add this line for error reporting
} else {
    // Document upload success, process the document
    $documentData5 = $this->upload->data();
    $uploadedDocumentPath5 = $documentData5['full_path']; // Path of the uploaded document
    $uploadedDocumentName5 = $documentData5['file_name']; // Name of the uploaded document

}


if (!$this->upload->do_upload('parkingratio')) {
    // Document upload failed, handle the error
    $document_error6 = $this->upload->display_errors();
    echo "Document Upload Error: " . $document_error6; // Add this line for error reporting
} else {
    // Document upload success, process the document
    $documentData6 = $this->upload->data();
    $uploadedDocumentPath6 = $documentData6['full_path']; // Path of the uploaded document
    $uploadedDocumentName6 = $documentData6['file_name']; // Name of the uploaded document

}


if($uploadedImageName){
    $d1=$uploadedImageName;
}
else{
    $d1=$this->input->post('flyer1');
}

if($uploadedDocumentName){
    $d2=$uploadedDocumentName;
}
else{
   $d2=$this->input->post('retailelevation1');
}

if($uploadedDocumentName1){
    $d3=$uploadedDocumentName1;
}
else{
    $d3=$this->input->post('retailfloorplan1');
}



if($uploadedDocumentName5){
    $d7=$uploadedDocumentName5;
}
else{
    $d7=$this->input->post('nearby1');
}

if($uploadedDocumentName6){
    $d8=$uploadedDocumentName6;
}
else{
    $d8=$this->input->post('parkingratio1');
}


$website=$this->input->post('website');
$video1=$this->input->post('video1');
$video2=$this->input->post('video2');


                 //Pass user data to model
                 $insertUserDatas = $this->category->editprojectdetails($d1,$d2,$d3,$d7,$d8,$id,$website,$video1,$video2);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Project Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/projects');

           }

                      $this->load->view('editprojectdetails', $data);

                  }else{
                      redirect('index');
                  }

                  }

        
        
        
        public function reports(){


        $data = array();
        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
            $data['lven'] = $this->category->listvendor();
               if(isset($_POST['addcategory']))
       {

   $month=$this->input->post('month');
   $year=$this->input->post('year');
   $vid=$this->input->post('vendorid');
   $product=$this->input->post('product');
   $trendy=$this->input->post('trendy');
   $orderstatus=$this->input->post('orderstatus');
   $tagging=$this->input->post('tagging');
   if($tagging){
   $tagg=$this->category->listtag($tagging);
   }
   foreach($tagg as $tg){
       $taggs[]=$tg->id;
   }
   $list=$this->category->listvendorproducts($vid);
    foreach($list as $list1){
                   $pid[]=$list1->id;
               }
    
    
$data['listcategory'] = $this->category->searchreport($month,$year,$pid,$product,$trendy,$orderstatus,$tagging,$taggs);
}
            
            $this->load->view('reports', $data);

        }else{
            redirect('index');
        }

        }



  public function accounts(){


       $data = array();
         if($this->isUserLoggedIn){
             $con = array(
                 'id' => $this->session->userdata('userId')
             );
             $data['user'] = $this->user->getRows($con);
             
             if(isset($_POST['submit']))
         {
         $id=$this->input->post('vendorid');
           redirect('homecontroller/accounts/'.$id);  
         }
             $data['listorder'] = $this->category->listorder();
             $this->load->view('accounts', $data);

         }else{
             redirect('index');
         }

         }


public function sliderbanners(){


        $data = array();
        if($this->isUserLoggedIn){
            $con = array(
                'id' => $this->session->userdata('userId')
            );
            $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listsliderbanners();
            $this->load->view('sliderbanners', $data);

        }else{
            redirect('index');
        }

        }



        public function cities(){


            $data = array();
            if($this->isUserLoggedIn){
                $con = array(
                    'id' => $this->session->userdata('userId')
                );
                $data['user'] = $this->user->getRows($con);
    $data['listcategory'] = $this->category->listcities();
                $this->load->view('cities', $data);
    
            }else{
                redirect('index');
            }
    
            }
            
            public function enquiries(){


            $data = array();
            if($this->isUserLoggedIn){
                $con = array(
                    'id' => $this->session->userdata('userId')
                );
                $data['user'] = $this->user->getRows($con);
    $data['listcategory'] = $this->category->listenquiries();
                $this->load->view('enquiries', $data);
    
            }else{
                redirect('index');
            }
    
            }


 public function toptext(){


            $data = array();
            if($this->isUserLoggedIn){
                $con = array(
                    'id' => $this->session->userdata('userId')
                );
                $data['user'] = $this->user->getRows($con);
    $data['listcategory'] = $this->category->listtoptext();
                $this->load->view('toptext', $data);
    
            }else{
                redirect('index');
            }
    
            }




            public function istyles(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);
                    $cname='istyles';
        $data['listcategory'] = $this->category->listme($cname);
                    $this->load->view('istyles', $data);
        
                }else{
                    redirect('index');
                }
        
                }

                public function mstones(){


                    $data = array();
                    if($this->isUserLoggedIn){
                        $con = array(
                            'id' => $this->session->userdata('userId')
                        );
                        $data['user'] = $this->user->getRows($con);
                        $cname='mstones';
            $data['listcategory'] = $this->category->listme($cname);
                        $this->load->view('mstones', $data);
            
                    }else{
                        redirect('index');
                    }
            
                    }

                    public function sstones(){


                        $data = array();
                        if($this->isUserLoggedIn){
                            $con = array(
                                'id' => $this->session->userdata('userId')
                            );
                            $data['user'] = $this->user->getRows($con);
                            $cname='sstones';
                $data['listcategory'] = $this->category->listme($cname);
                            $this->load->view('sstones', $data);
                
                        }else{
                            redirect('index');
                        }
                
                        }

                        public function mcolors(){


                            $data = array();
                            if($this->isUserLoggedIn){
                                $con = array(
                                    'id' => $this->session->userdata('userId')
                                );
                                $data['user'] = $this->user->getRows($con);
                                $cname='mcolors';
                    $data['listcategory'] = $this->category->listme($cname);
                                $this->load->view('mcolors', $data);
                    
                            }else{
                                redirect('index');
                            }
                    
                            }


                            public function scolors(){


                                $data = array();
                                if($this->isUserLoggedIn){
                                    $con = array(
                                        'id' => $this->session->userdata('userId')
                                    );
                                    $data['user'] = $this->user->getRows($con);
                                    $cname='scolors';
                        $data['listcategory'] = $this->category->listme($cname);
                                    $this->load->view('scolors', $data);
                        
                                }else{
                                    redirect('index');
                                }
                        
                                }

                                public function pshapes(){


                                    $data = array();
                                    if($this->isUserLoggedIn){
                                        $con = array(
                                            'id' => $this->session->userdata('userId')
                                        );
                                        $data['user'] = $this->user->getRows($con);
                                        $cname='pshapes';
                            $data['listcategory'] = $this->category->listme($cname);
                                        $this->load->view('pshapes', $data);
                            
                                    }else{
                                        redirect('index');
                                    }
                            
                                    }

                                    public function metals(){


                                        $data = array();
                                        if($this->isUserLoggedIn){
                                            $con = array(
                                                'id' => $this->session->userdata('userId')
                                            );
                                            $data['user'] = $this->user->getRows($con);
                                            $cname='metals';
                                $data['listcategory'] = $this->category->listme($cname);
                                            $this->load->view('metals', $data);
                                
                                        }else{
                                            redirect('index');
                                        }
                                
                                        }

                                        public function mshapes(){


                                            $data = array();
                                            if($this->isUserLoggedIn){
                                                $con = array(
                                                    'id' => $this->session->userdata('userId')
                                                );
                                                $data['user'] = $this->user->getRows($con);
                                                $cname='mshapes';
                                    $data['listcategory'] = $this->category->listme($cname);
                                                $this->load->view('mshapes', $data);
                                    
                                            }else{
                                                redirect('index');
                                            }
                                    
                                            }

                                            public function nlengths(){


                                                $data = array();
                                                if($this->isUserLoggedIn){
                                                    $con = array(
                                                        'id' => $this->session->userdata('userId')
                                                    );
                                                    $data['user'] = $this->user->getRows($con);
                                                    $cname='nlengths';
                                        $data['listcategory'] = $this->category->listme($cname);
                                                    $this->load->view('nlengths', $data);
                                        
                                                }else{
                                                    redirect('index');
                                                }
                                        
                                                }

                                                public function bsizes(){


                                                    $data = array();
                                                    if($this->isUserLoggedIn){
                                                        $con = array(
                                                            'id' => $this->session->userdata('userId')
                                                        );
                                                        $data['user'] = $this->user->getRows($con);
                                                        $cname='bsizes';
                                            $data['listcategory'] = $this->category->listme($cname);
                                                        $this->load->view('bsizes', $data);
                                            
                                                    }else{
                                                        redirect('index');
                                                    }
                                            
                                                    }


                                                    public function rsizes(){


                                                        $data = array();
                                                        if($this->isUserLoggedIn){
                                                            $con = array(
                                                                'id' => $this->session->userdata('userId')
                                                            );
                                                            $data['user'] = $this->user->getRows($con);
                                                            $cname='rsizes';
                                                $data['listcategory'] = $this->category->listme($cname);
                                                            $this->load->view('rsizes', $data);
                                                
                                                        }else{
                                                            redirect('index');
                                                        }
                                                
                                                        }


                                                        public function armletssizes(){


                                                            $data = array();
                                                            if($this->isUserLoggedIn){
                                                                $con = array(
                                                                    'id' => $this->session->userdata('userId')
                                                                );
                                                                $data['user'] = $this->user->getRows($con);
                                                                $cname='armletssizes';
                                                    $data['listcategory'] = $this->category->listme($cname);
                                                                $this->load->view('armletssizes', $data);
                                                    
                                                            }else{
                                                                redirect('index');
                                                            }
                                                    
                                                            }


                                                           


                                                                public function waistsizes(){


                                                                    $data = array();
                                                                    if($this->isUserLoggedIn){
                                                                        $con = array(
                                                                            'id' => $this->session->userdata('userId')
                                                                        );
                                                                        $data['user'] = $this->user->getRows($con);
                                                                        $cname='waistsizes';
                                                            $data['listcategory'] = $this->category->listme($cname);
                                                                        $this->load->view('waistsizes', $data);
                                                            
                                                                    }else{
                                                                        redirect('index');
                                                                    }
                                                            
                                                                    }


                                                                    public function basemetals(){


                                                                        $data = array();
                                                                        if($this->isUserLoggedIn){
                                                                            $con = array(
                                                                                'id' => $this->session->userdata('userId')
                                                                            );
                                                                            $data['user'] = $this->user->getRows($con);
                                                                            $cname='basemetals';
                                                                $data['listcategory'] = $this->category->listme($cname);
                                                                            $this->load->view('basemetals', $data);
                                                                
                                                                        }else{
                                                                            redirect('index');
                                                                        }
                                                                
                                                                        }


                                                                        public function pendanttypes(){


                                                                            $data = array();
                                                                            if($this->isUserLoggedIn){
                                                                                $con = array(
                                                                                    'id' => $this->session->userdata('userId')
                                                                                );
                                                                                $data['user'] = $this->user->getRows($con);
                                                                                $cname='pendanttypes';
                                                                    $data['listcategory'] = $this->category->listme($cname);
                                                                                $this->load->view('pendanttypes', $data);
                                                                    
                                                                            }else{
                                                                                redirect('index');
                                                                            }
                                                                    
                                                                            }


                                                                            public function chaintypes(){


                                                                                $data = array();
                                                                                if($this->isUserLoggedIn){
                                                                                    $con = array(
                                                                                        'id' => $this->session->userdata('userId')
                                                                                    );
                                                                                    $data['user'] = $this->user->getRows($con);
                                                                                    $cname='chaintypes';
                                                                        $data['listcategory'] = $this->category->listme($cname);
                                                                                    $this->load->view('chaintypes', $data);
                                                                        
                                                                                }else{
                                                                                    redirect('index');
                                                                                }
                                                                        
                                                                                }


                                                                                public function ocs(){


                                                                                    $data = array();
                                                                                    if($this->isUserLoggedIn){
                                                                                        $con = array(
                                                                                            'id' => $this->session->userdata('userId')
                                                                                        );
                                                                                        $data['user'] = $this->user->getRows($con);
                                                                                        $cname='ocs';
                                                                            $data['listcategory'] = $this->category->listme($cname);
                                                                                        $this->load->view('ocs', $data);
                                                                            
                                                                                    }else{
                                                                                        redirect('index');
                                                                                    }
                                                                            
                                                                                    }



            public function types(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);
        $data['listcategory'] = $this->category->listtypes();
                    $this->load->view('types', $data);
        
                }else{
                    redirect('index');
                }
        
                }
    
        public function occassions(){


          $data = array();
          if($this->isUserLoggedIn){
              $con = array(
                  'id' => $this->session->userdata('userId')
              );
              $data['user'] = $this->user->getRows($con);
  $data['listcategory'] = $this->category->listoccassions();
              $this->load->view('occassions', $data);

          }else{
              redirect('index');
          }

          }

          public function sizes(){


            $data = array();
            if($this->isUserLoggedIn){
                $con = array(
                    'id' => $this->session->userdata('userId')
                );
                $data['user'] = $this->user->getRows($con);
    $data['listcategory'] = $this->category->listsizes();
                $this->load->view('sizes', $data);

            }else{
                redirect('index');
            }

            }

        public function addcategory(){


          $data = array();
          if($this->isUserLoggedIn){
              $con = array(
                  'id' => $this->session->userdata('userId')
              );
              $data['user'] = $this->user->getRows($con);

              if(isset($_POST['addcategory']))
       {


      


   $name=$this->input->post('name');
   $status=$this->input->post('status');
   $types=$this->input->post('types');



   $data['slt']= $this->category->addcategory($name,$status,$types);
$this->session->set_flashdata("Successs","Category Added Successfuly !");

  redirect('categories');


   }
   



              $this->load->view('addcategory', $data);

          }else{
              redirect('index');
          }

          }



 public function addofflineorder(){


          $data = array();
          if($this->isUserLoggedIn){
              $con = array(
                  'id' => $this->session->userdata('userId')
              );
              $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listcategory();
              if(isset($_POST['addcategory']))
       {


      


   $name=$this->input->post('name');
   $status=$this->input->post('status');
   $email=$this->input->post('email');
   $phone=$this->input->post('phone');
   $address=$this->input->post('address');
   $state=$this->input->post('state');
   $pin=$this->input->post('pin');
   $product=$this->input->post('product');
   $jrp=$this->input->post('jrp');
   $pid=$this->input->post('pid');
   $orderid=$this->input->post('orderid');
   $total=$this->input->post('total');
   $productcode=$this->input->post('productcode');
   $dater=date('Y-m-d');



   $data['slt']= $this->category->addofflineorder($name,$status,$email,$phone,$address,$state,$pin,$product,$jrp,$pid,$orderid,$total,$productcode,$dater);
$this->session->set_flashdata("Successs","Order Created Successfuly !");

  redirect('offlineorders');


   }
   



              $this->load->view('addofflineorder', $data);

          }else{
              redirect('index');
          }

          }



 public function editoorder(){


          $data = array();
          if($this->isUserLoggedIn){
              $con = array(
                  'id' => $this->session->userdata('userId')
              );
              $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listcategory();

$id =$this->uri->segment(3);
                                    $data['vals'] = $this->category->selectoorder($id);

              if(isset($_POST['addcategory']))
       {


      


   $name=$this->input->post('name');
   $status=$this->input->post('status');
   $email=$this->input->post('email');
   $phone=$this->input->post('phone');
   $address=$this->input->post('address');
   $state=$this->input->post('state');
   $pin=$this->input->post('pin');
   $product=$this->input->post('product');
   $jrp=$this->input->post('jrp');
   $pid=$this->input->post('pid');
   $orderid=$this->input->post('orderid');
   $total=$this->input->post('total');
   $productcode=$this->input->post('productcode');
   $discount=$this->input->post('camount');
   $dater=date('Y-m-d');



   $data['slt']= $this->category->editoorder($name,$status,$email,$phone,$address,$state,$pin,$product,$jrp,$pid,$orderid,$total,$productcode,$dater,$id,$discount);
   
   $this->category->editoorder1($orderid,$total,$discount);
   
$this->session->set_flashdata("Successs","Order Updated Successfuly !");

  redirect('orders');


   }
   



              $this->load->view('editoorder', $data);

          }else{
              redirect('index');
          }

          }


public function editaccounts(){


          $data = array();
          if($this->isUserLoggedIn){
              $con = array(
                  'id' => $this->session->userdata('userId')
              );
              $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listcategory();

$id =$this->uri->segment(3);
                                    $data['vals'] = $this->category->selectoorder($id);

              if(isset($_POST['addcategory']))
       {


      


   $vamountpaid="";
   $vamountstatus=$this->input->post('vamountstatus');



   $data['slt']= $this->category->editaccounts($vamountpaid,$vamountstatus,$id);
   
$this->session->set_flashdata("Successs","Updated Successfuly !");

  redirect('accounts');


   }
   



              $this->load->view('editaccounts', $data);

          }else{
              redirect('index');
          }

          }



public function voucher(){


          $data = array();
          if($this->isUserLoggedIn){
              $con = array(
                  'id' => $this->session->userdata('userId')
              );
              $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listcategory();

$id =$this->uri->segment(3);
                                    $data['vals'] = $this->category->selectoorder($id);

              if(isset($_POST['addcategory']))
       {


      


   $voucher=$this->input->post('voucher');



   $data['slt']= $this->category->editvoucher($voucher,$id);
   
$this->session->set_flashdata("Successs","Updated Successfuly !");

  redirect($_SERVER['HTTP_REFERER']);


   }
   
if(isset($_POST['add1']))
       {


      


   $amount=$this->input->post('vamount1');
   $date=$this->input->post('vdate1');



   $data['slt']= $this->category->addv1($amount,$date,$id);
$this->session->set_flashdata("Successs","Updated Successfuly !");

   redirect($_SERVER['HTTP_REFERER']);


   }
   
   if(isset($_POST['add2']))
       {


      


   $amount=$this->input->post('vamount2');
   $date=$this->input->post('vdate2');



   $data['slt']= $this->category->addv2($amount,$date,$id);
$this->session->set_flashdata("Successs","Updated Successfuly !");

   redirect($_SERVER['HTTP_REFERER']);


   }
   
   
   if(isset($_POST['add3']))
       {


      


   $amount=$this->input->post('vamount3');
   $date=$this->input->post('vdate3');



   $data['slt']= $this->category->addv3($amount,$date,$id);
$this->session->set_flashdata("Successs","Updated Successfuly !");

   redirect($_SERVER['HTTP_REFERER']);


   }
   
   
     if(isset($_POST['add4']))
       {


      


   $amount=$this->input->post('vamount4');
   $date=$this->input->post('vdate4');



   $data['slt']= $this->category->addv4($amount,$date,$id);
$this->session->set_flashdata("Successs","Updated Successfuly !");

   redirect($_SERVER['HTTP_REFERER']);


   }
   
   
     if(isset($_POST['add5']))
       {


      


   $amount=$this->input->post('vamount5');
   $date=$this->input->post('vdate5');



   $data['slt']= $this->category->addv5($amount,$date,$id);
$this->session->set_flashdata("Successs","Updated Successfuly !");

   redirect($_SERVER['HTTP_REFERER']);


   }
   
     if(isset($_POST['add6']))
       {


      


   $amount=$this->input->post('vamount6');
   $date=$this->input->post('vdate6');



   $data['slt']= $this->category->addv6($amount,$date,$id);
$this->session->set_flashdata("Successs","Updated Successfuly !");

   redirect($_SERVER['HTTP_REFERER']);


   }


              $this->load->view('voucher', $data);

          }else{
              redirect('index');
          }

          }


          public function addcity(){


            $data = array();
            if($this->isUserLoggedIn){
                $con = array(
                    'id' => $this->session->userdata('userId')
                );
                $data['user'] = $this->user->getRows($con);

                if(isset($_POST['addcategory']))
         {
     $name=$this->input->post('name');
     $perc=$this->input->post('perc');



     $data['slt']= $this->category->addoccassions($name,$perc);
  $this->session->set_flashdata("Successs","City Added Successfuly !");
  redirect('cities');


     }



                $this->load->view('addcity', $data);

            }else{
                redirect('index');
            }

            }

 public function addtoptext(){


            $data = array();
            if($this->isUserLoggedIn){
                $con = array(
                    'id' => $this->session->userdata('userId')
                );
                $data['user'] = $this->user->getRows($con);

                if(isset($_POST['addcategory']))
         {
     $name=$this->input->post('name');



     $data['slt']= $this->category->addtoptext($name);
  $this->session->set_flashdata("Successs","Text Added Successfuly !");
  redirect('toptext');


     }



                $this->load->view('addtoptext', $data);

            }else{
                redirect('index');
            }

            }

            public function addtype(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);
    
                    if(isset($_POST['addcategory']))
             {
         $name=$this->input->post('name');

         $this->load->library('upload');
         $image = array();
         $ImageCount = count($_FILES['pimage']['name']);
         for($i = 0; $i < $ImageCount; $i++){
         $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
         $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
         $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
         $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
         $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

         // File upload configuration
         $uploadPath = './uploads/types/';
         $config['upload_path'] = $uploadPath;
         $config['allowed_types'] = 'jpg|jpeg|png|gif';

         // Load and initialize upload library
         $this->load->library('upload', $config);
         $this->upload->initialize($config);

         // Upload file to server
         if($this->upload->do_upload('file')){
         // Uploaded file data
         $imageData = $this->upload->data();
          // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
          $uploadImgData[] = $imageData['file_name'];


          $data = array('upload_data' => $this->upload->data());
                         $path=$data['upload_data']['full_path'];
                         $q['name']=$data['upload_data']['file_name'];

                          $config['image_library'] = 'gd2';
                          $config['source_image']   = $path;
                          $config['maintain_ratio'] = FALSE;
                          $config['width']  = 480;
                          $config['height'] = 680;

                          $this->load->library('image_lib');
$this->image_lib->initialize($config);
                         $this->image_lib->resize();

                         unset($config);
                         $this->load->library('image_lib');
                         $this->image_lib->clear();




         }
         }
         $pimage = $uploadImgData;
    
    
         $data['slt']= $this->category->addtype($name,$pimage);
      $this->session->set_flashdata("Successs","Type Added Successfuly !");
      redirect('types');
    
    
         }
    
    
    
                    $this->load->view('addtype', $data);
    
                }else{
                    redirect('index');
                }
    
                }
    


                public function addistyles(){


                    $data = array();
                    if($this->isUserLoggedIn){
                        $con = array(
                            'id' => $this->session->userdata('userId')
                        );
                        $data['user'] = $this->user->getRows($con);
        $cname='istyles';
                        if(isset($_POST['addcategory']))
                 {
             $name=$this->input->post('name');
        
        
             $data['slt']= $this->category->addmine($name,$cname);
          $this->session->set_flashdata("Successs","Added Successfuly !");
          redirect('istyles');
        
        
             }
        
        
        
                        $this->load->view('addistyles', $data);
        
                    }else{
                        redirect('index');
                    }
        
                    }

                    public function addmstones(){


                        $data = array();
                        if($this->isUserLoggedIn){
                            $con = array(
                                'id' => $this->session->userdata('userId')
                            );
                            $data['user'] = $this->user->getRows($con);
            $cname='mstones';
                            if(isset($_POST['addcategory']))
                     {
                 $name=$this->input->post('name');
            
            
                 $data['slt']= $this->category->addmine($name,$cname);
              $this->session->set_flashdata("Successs","Added Successfuly !");
              redirect('mstones');
            
            
                 }
            
            
            
                            $this->load->view('addmstones', $data);
            
                        }else{
                            redirect('index');
                        }
            
                        }

                        public function addsstones(){


                            $data = array();
                            if($this->isUserLoggedIn){
                                $con = array(
                                    'id' => $this->session->userdata('userId')
                                );
                                $data['user'] = $this->user->getRows($con);
                $cname='sstones';
                                if(isset($_POST['addcategory']))
                         {
                     $name=$this->input->post('name');
                
                
                     $data['slt']= $this->category->addmine($name,$cname);
                  $this->session->set_flashdata("Successs","Added Successfuly !");
                  redirect('sstones');
                
                
                     }
                
                
                
                                $this->load->view('addsstones', $data);
                
                            }else{
                                redirect('index');
                            }
                
                            }


                            public function addmcolors(){


                                $data = array();
                                if($this->isUserLoggedIn){
                                    $con = array(
                                        'id' => $this->session->userdata('userId')
                                    );
                                    $data['user'] = $this->user->getRows($con);
                    $cname='mcolors';
                                    if(isset($_POST['addcategory']))
                             {
                         $name=$this->input->post('name');
                    
                    
                         $data['slt']= $this->category->addmine($name,$cname);
                      $this->session->set_flashdata("Successs","Added Successfuly !");
                      redirect('mcolors');
                    
                    
                         }
                    
                    
                    
                                    $this->load->view('addmcolors', $data);
                    
                                }else{
                                    redirect('index');
                                }
                    
                                }

                                public function addscolors(){


                                    $data = array();
                                    if($this->isUserLoggedIn){
                                        $con = array(
                                            'id' => $this->session->userdata('userId')
                                        );
                                        $data['user'] = $this->user->getRows($con);
                        $cname='scolors';
                                        if(isset($_POST['addcategory']))
                                 {
                             $name=$this->input->post('name');
                        
                        
                             $data['slt']= $this->category->addmine($name,$cname);
                          $this->session->set_flashdata("Successs","Added Successfuly !");
                          redirect('scolors');
                        
                        
                             }
                        
                        
                        
                                        $this->load->view('addscolors', $data);
                        
                                    }else{
                                        redirect('index');
                                    }
                        
                                    }


                                    public function addpshapes(){


                                        $data = array();
                                        if($this->isUserLoggedIn){
                                            $con = array(
                                                'id' => $this->session->userdata('userId')
                                            );
                                            $data['user'] = $this->user->getRows($con);
                            $cname='pshapes';
                                            if(isset($_POST['addcategory']))
                                     {
                                 $name=$this->input->post('name');
                            
                            
                                 $data['slt']= $this->category->addmine($name,$cname);
                              $this->session->set_flashdata("Successs","Added Successfuly !");
                              redirect('pshapes');
                            
                            
                                 }
                            
                            
                            
                                            $this->load->view('addpshapes', $data);
                            
                                        }else{
                                            redirect('index');
                                        }
                            
                                        }

                                        public function addmetals(){


                                            $data = array();
                                            if($this->isUserLoggedIn){
                                                $con = array(
                                                    'id' => $this->session->userdata('userId')
                                                );
                                                $data['user'] = $this->user->getRows($con);
                                $cname='metals';
                                                if(isset($_POST['addcategory']))
                                         {
                                     $name=$this->input->post('name');
                                
                                
                                     $data['slt']= $this->category->addmine($name,$cname);
                                  $this->session->set_flashdata("Successs","Added Successfuly !");
                                  redirect('metals');
                                
                                
                                     }
                                
                                
                                
                                                $this->load->view('addmetals', $data);
                                
                                            }else{
                                                redirect('index');
                                            }
                                
                                            }


                                            public function addmshapes(){


                                                $data = array();
                                                if($this->isUserLoggedIn){
                                                    $con = array(
                                                        'id' => $this->session->userdata('userId')
                                                    );
                                                    $data['user'] = $this->user->getRows($con);
                                    $cname='mshapes';
                                                    if(isset($_POST['addcategory']))
                                             {
                                         $name=$this->input->post('name');
                                    
                                    
                                         $data['slt']= $this->category->addmine($name,$cname);
                                      $this->session->set_flashdata("Successs","Added Successfuly !");
                                      redirect('mshapes');
                                    
                                    
                                         }
                                    
                                    
                                    
                                                    $this->load->view('addmshapes', $data);
                                    
                                                }else{
                                                    redirect('index');
                                                }
                                    
                                                }

                                                public function addnlengths(){


                                                    $data = array();
                                                    if($this->isUserLoggedIn){
                                                        $con = array(
                                                            'id' => $this->session->userdata('userId')
                                                        );
                                                        $data['user'] = $this->user->getRows($con);
                                        $cname='nlengths';
                                                        if(isset($_POST['addcategory']))
                                                 {
                                             $name=$this->input->post('name');
                                        
                                        
                                             $data['slt']= $this->category->addmine($name,$cname);
                                          $this->session->set_flashdata("Successs","Added Successfuly !");
                                          redirect('nlengths');
                                        
                                        
                                             }
                                        
                                        
                                        
                                                        $this->load->view('addnlengths', $data);
                                        
                                                    }else{
                                                        redirect('index');
                                                    }
                                        
                                                    }


                                                    public function addbsizes(){


                                                        $data = array();
                                                        if($this->isUserLoggedIn){
                                                            $con = array(
                                                                'id' => $this->session->userdata('userId')
                                                            );
                                                            $data['user'] = $this->user->getRows($con);
                                            $cname='bsizes';
                                                            if(isset($_POST['addcategory']))
                                                     {
                                                 $name=$this->input->post('name');
                                            
                                            
                                                 $data['slt']= $this->category->addmine($name,$cname);
                                              $this->session->set_flashdata("Successs","Added Successfuly !");
                                              redirect('bsizes');
                                            
                                            
                                                 }
                                            
                                            
                                            
                                                            $this->load->view('addbsizes', $data);
                                            
                                                        }else{
                                                            redirect('index');
                                                        }
                                            
                                                        }

                                                        public function addrsizes(){


                                                            $data = array();
                                                            if($this->isUserLoggedIn){
                                                                $con = array(
                                                                    'id' => $this->session->userdata('userId')
                                                                );
                                                                $data['user'] = $this->user->getRows($con);
                                                $cname='rsizes';
                                                                if(isset($_POST['addcategory']))
                                                         {
                                                     $name=$this->input->post('name');
                                                
                                                
                                                     $data['slt']= $this->category->addmine($name,$cname);
                                                  $this->session->set_flashdata("Successs","Added Successfuly !");
                                                  redirect('rsizes');
                                                
                                                
                                                     }
                                                
                                                
                                                
                                                                $this->load->view('addrsizes', $data);
                                                
                                                            }else{
                                                                redirect('index');
                                                            }
                                                
                                                            }


                                                            public function addarmletssizes(){


                                                                $data = array();
                                                                if($this->isUserLoggedIn){
                                                                    $con = array(
                                                                        'id' => $this->session->userdata('userId')
                                                                    );
                                                                    $data['user'] = $this->user->getRows($con);
                                                    $cname='armletssizes';
                                                                    if(isset($_POST['addcategory']))
                                                             {
                                                         $name=$this->input->post('name');
                                                    
                                                    
                                                         $data['slt']= $this->category->addmine($name,$cname);
                                                      $this->session->set_flashdata("Successs","Added Successfuly !");
                                                      redirect('armletssizes');
                                                    
                                                    
                                                         }
                                                    
                                                    
                                                    
                                                                    $this->load->view('addarmletssizes', $data);
                                                    
                                                                }else{
                                                                    redirect('index');
                                                                }
                                                    
                                                                }


                                                                public function addwaistsizes(){


                                                                    $data = array();
                                                                    if($this->isUserLoggedIn){
                                                                        $con = array(
                                                                            'id' => $this->session->userdata('userId')
                                                                        );
                                                                        $data['user'] = $this->user->getRows($con);
                                                        $cname='waistsizes';
                                                                        if(isset($_POST['addcategory']))
                                                                 {
                                                             $name=$this->input->post('name');
                                                        
                                                        
                                                             $data['slt']= $this->category->addmine($name,$cname);
                                                          $this->session->set_flashdata("Successs","Added Successfuly !");
                                                          redirect('waistsizes');
                                                        
                                                        
                                                             }
                                                        
                                                        
                                                        
                                                                        $this->load->view('addwaistsizes', $data);
                                                        
                                                                    }else{
                                                                        redirect('index');
                                                                    }
                                                        
                                                                    }


                                                                    public function addbasemetals(){


                                                                        $data = array();
                                                                        if($this->isUserLoggedIn){
                                                                            $con = array(
                                                                                'id' => $this->session->userdata('userId')
                                                                            );
                                                                            $data['user'] = $this->user->getRows($con);
                                                            $cname='basemetals';
                                                                            if(isset($_POST['addcategory']))
                                                                     {
                                                                 $name=$this->input->post('name');
                                                            
                                                            
                                                                 $data['slt']= $this->category->addmine($name,$cname);
                                                              $this->session->set_flashdata("Successs","Added Successfuly !");
                                                              redirect('basemetals');
                                                            
                                                            
                                                                 }
                                                            
                                                            
                                                            
                                                                            $this->load->view('addbasemetals', $data);
                                                            
                                                                        }else{
                                                                            redirect('index');
                                                                        }
                                                            
                                                                        }

                                                                        public function addpendanttypes(){


                                                                            $data = array();
                                                                            if($this->isUserLoggedIn){
                                                                                $con = array(
                                                                                    'id' => $this->session->userdata('userId')
                                                                                );
                                                                                $data['user'] = $this->user->getRows($con);
                                                                $cname='pendanttypes';
                                                                                if(isset($_POST['addcategory']))
                                                                         {
                                                                     $name=$this->input->post('name');
                                                                
                                                                
                                                                     $data['slt']= $this->category->addmine($name,$cname);
                                                                  $this->session->set_flashdata("Successs","Added Successfuly !");
                                                                  redirect('pendanttypes');
                                                                
                                                                
                                                                     }
                                                                
                                                                
                                                                
                                                                                $this->load->view('addpendanttypes', $data);
                                                                
                                                                            }else{
                                                                                redirect('index');
                                                                            }
                                                                
                                                                            }

                                                                            public function addchaintypes(){


                                                                                $data = array();
                                                                                if($this->isUserLoggedIn){
                                                                                    $con = array(
                                                                                        'id' => $this->session->userdata('userId')
                                                                                    );
                                                                                    $data['user'] = $this->user->getRows($con);
                                                                    $cname='chaintypes';
                                                                                    if(isset($_POST['addcategory']))
                                                                             {
                                                                         $name=$this->input->post('name');
                                                                    
                                                                    
                                                                         $data['slt']= $this->category->addmine($name,$cname);
                                                                      $this->session->set_flashdata("Successs","Added Successfuly !");
                                                                      redirect('chaintypes');
                                                                    
                                                                    
                                                                         }
                                                                    
                                                                    
                                                                    
                                                                                    $this->load->view('addchaintypes', $data);
                                                                    
                                                                                }else{
                                                                                    redirect('index');
                                                                                }
                                                                    
                                                                                }

                                                                                public function addocs(){


                                                                                    $data = array();
                                                                                    if($this->isUserLoggedIn){
                                                                                        $con = array(
                                                                                            'id' => $this->session->userdata('userId')
                                                                                        );
                                                                                        $data['user'] = $this->user->getRows($con);
                                                                        $cname='ocs';
                                                                                        if(isset($_POST['addcategory']))
                                                                                 {
                                                                             $name=$this->input->post('name');
                                                                        
                                                                        
                                                                             $data['slt']= $this->category->addmine($name,$cname);
                                                                          $this->session->set_flashdata("Successs","Added Successfuly !");
                                                                          redirect('ocs');
                                                                        
                                                                        
                                                                             }
                                                                        
                                                                        
                                                                        
                                                                                        $this->load->view('addocs', $data);
                                                                        
                                                                                    }else{
                                                                                        redirect('index');
                                                                                    }
                                                                        
                                                                                    }

            public function addsizes(){


              $data = array();
              if($this->isUserLoggedIn){
                  $con = array(
                      'id' => $this->session->userdata('userId')
                  );
                  $data['user'] = $this->user->getRows($con);

                  if(isset($_POST['addcategory']))
           {
       $name=$this->input->post('name');



       $data['slt']= $this->category->addsizes($name);
    $this->session->set_flashdata("Successs","Size Added Successfuly !");
  redirect('sizes');


       }



                  $this->load->view('addsizes', $data);

              }else{
                  redirect('index');
              }

              }


          public function editcategory(){


            $data = array();
            if($this->isUserLoggedIn){
                $con = array(
                    'id' => $this->session->userdata('userId')
                );
                $data['user'] = $this->user->getRows($con);
                $id =$this->uri->segment(3);
                                    $data['vals'] = $this->category->selectcategory($id);
                if(isset($_POST['editcategory']))
         {

          

 
     $name=$this->input->post('name');
     $status=$this->input->post('status');
     
   $types=$this->input->post('types');





     $data['slt']= $this->category->editcategory($name,$status,$id,$types);
  $this->session->set_flashdata("Successs","Category Edited Successfuly !");

            redirect('categories');


     }

                $this->load->view('editcategory', $data);

            }else{
                redirect('index');
            }

            }

            public function editcity(){


              $data = array();
              if($this->isUserLoggedIn){
                  $con = array(
                      'id' => $this->session->userdata('userId')
                  );
                  $data['user'] = $this->user->getRows($con);
                  $id =$this->uri->segment(3);
                                      $data['vals'] = $this->category->selectoccassions($id);
                  if(isset($_POST['editcategory']))
           {
       $name=$this->input->post('name');
       $perc=$this->input->post('perc');



       $data['slt']= $this->category->editoccassions($name,$id,$perc);
    $this->session->set_flashdata("Successs","City Edited Successfuly !");

              redirect('cities');


       }

                  $this->load->view('editcity', $data);

              }else{
                  redirect('index');
              }

              }



 public function edittoptext(){


              $data = array();
              if($this->isUserLoggedIn){
                  $con = array(
                      'id' => $this->session->userdata('userId')
                  );
                  $data['user'] = $this->user->getRows($con);
                  $id =$this->uri->segment(3);
                                      $data['vals'] = $this->category->selecttoptext($id);
                  if(isset($_POST['editcategory']))
           {
       $name=$this->input->post('name');



       $data['slt']= $this->category->edittoptext($name,$id);
    $this->session->set_flashdata("Successs"," Edited Successfuly !");

              redirect('toptext');


       }

                  $this->load->view('edittoptext', $data);

              }else{
                  redirect('index');
              }

              }



 public function editenquiry(){


              $data = array();
              if($this->isUserLoggedIn){
                  $con = array(
                      'id' => $this->session->userdata('userId')
                  );
                  $data['user'] = $this->user->getRows($con);
                  $id =$this->uri->segment(3);
                                      $data['vals'] = $this->category->selectenquiry($id);
                  if(isset($_POST['editcategory']))
           {
       $status=$this->input->post('status');
       $remarks=$this->input->post('remarks');
       $fdate=$this->input->post('fdate');



       $data['slt']= $this->category->editenquiry($status,$id,$remarks,$fdate);
    $this->session->set_flashdata("Successs","Status Updated Successfuly !");

              redirect('enquiries');


       }

                  $this->load->view('editenquiry', $data);

              }else{
                  redirect('index');
              }

              }




              public function activatevendor(){


                 $id =$this->uri->segment(3);
                                        $data['vals'] = $this->category->activatevendor($id);
      $this->session->set_flashdata("Successs","Vendor Activated Successfuly !");
  
                redirect('vendors');
  
  
  
                }
                
  
                
  


              public function edittype(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);
                    $id =$this->uri->segment(3);
                                        $data['vals'] = $this->category->selecttype($id);
                    if(isset($_POST['editcategory']))
             {
         $name=$this->input->post('name');

         if(!empty($_FILES['pimage']['name'])){


            $this->load->library('upload');
            $image = array();
            $ImageCount = count($_FILES['pimage']['name']);
            for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
            $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
            $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

            // File upload configuration
            $uploadPath = './uploads/types/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
            // Uploaded file data
            $imageData = $this->upload->data();
             // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
             $uploadImgData[] = $imageData['file_name'];


             $data = array('upload_data' => $this->upload->data());
                            $path=$data['upload_data']['full_path'];
                            $q['name']=$data['upload_data']['file_name'];

                             $config['image_library'] = 'gd2';
                             $config['source_image']   = $path;
                             $config['maintain_ratio'] = FALSE;
                             $config['width']  = 480;
                             $config['height'] = 680;

                             $this->load->library('image_lib');
$this->image_lib->initialize($config);
                            $this->image_lib->resize();

                            unset($config);
                            $this->load->library('image_lib');
                            $this->image_lib->clear();




            }
            }
          }

          if($uploadImgData){
            $pimage = implode(",",$uploadImgData);
            }
            else{

              $pimage=$this->input->post('pimage1p');
            }
  
  
         $data['slt']= $this->category->edittype($name,$id,$pimage);
      $this->session->set_flashdata("Successs","Type Edited Successfuly !");
  
                redirect('types');
  
  
         }
  
                    $this->load->view('edittype', $data);
  
                }else{
                    redirect('index');
                }
  
                }



                public function editistyles(){


                    $data = array();
                    if($this->isUserLoggedIn){
                        $con = array(
                            'id' => $this->session->userdata('userId')
                        );
                        $data['user'] = $this->user->getRows($con);
                        $id =$this->uri->segment(3);
                                          
                                            $cname='istyles';
                                            $data['vals'] = $this->category->selectmine($id,$cname);
                        if(isset($_POST['editcategory']))
                 {
             $name=$this->input->post('name');
      
      
      
             $data['slt']= $this->category->editmine($name,$id,$cname);
          $this->session->set_flashdata("Successs","Edited Successfuly !");
      
                    redirect('istyles');
      
      
             }
      
                        $this->load->view('editistyles', $data);
      
                    }else{
                        redirect('index');
                    }
      
                    }


                    public function editmstones(){


                        $data = array();
                        if($this->isUserLoggedIn){
                            $con = array(
                                'id' => $this->session->userdata('userId')
                            );
                            $data['user'] = $this->user->getRows($con);
                            $id =$this->uri->segment(3);
                                                
                                                $cname='mstones';
                                                $data['vals'] = $this->category->selectmine($id,$cname);
                            if(isset($_POST['editcategory']))
                     {
                 $name=$this->input->post('name');
          
          
          
                 $data['slt']= $this->category->editmine($name,$id,$cname);
              $this->session->set_flashdata("Successs","Edited Successfuly !");
          
                        redirect('mstones');
          
          
                 }
          
                            $this->load->view('editmstones', $data);
          
                        }else{
                            redirect('index');
                        }
          
                        }



public function arrange(){


                        $data = array();
                        if($this->isUserLoggedIn){
                            $con = array(
                                'id' => $this->session->userdata('userId')
                            );
                            $data['user'] = $this->user->getRows($con);
                            $id =$this->uri->segment(3);
                                                
                                                $data['vals'] = $this->category->selectproduct($id);
                            if(isset($_POST['editcategory']))
                     {
                         
                         if($name=$this->input->post('nname')){
                 $name=$this->input->post('nname');
                         }
                         else{
                 $name=$this->input->post('nname1');            
                         }
          
          
                 $data['slt']= $this->category->editarrange($name,$id);
              $this->session->set_flashdata("Success","Updated Successfuly !");
          
                redirect($_SERVER['HTTP_REFERER']);
          
          
                 }
          
                            $this->load->view('arrange', $data);
          
                        }else{
                            redirect('index');
                        }
          
                        }


                        public function editsstones(){


                            $data = array();
                            if($this->isUserLoggedIn){
                                $con = array(
                                    'id' => $this->session->userdata('userId')
                                );
                                $data['user'] = $this->user->getRows($con);
                                $id =$this->uri->segment(3);
                                                 
                                                    $cname='sstones';
                                                    $data['vals'] = $this->category->selectmine($id,$cname);
                                if(isset($_POST['editcategory']))
                         {
                     $name=$this->input->post('name');
              
              
              
                     $data['slt']= $this->category->editmine($name,$id,$cname);
                  $this->session->set_flashdata("Successs","Edited Successfuly !");
              
                            redirect('sstones');
              
              
                     }
              
                                $this->load->view('editsstones', $data);
              
                            }else{
                                redirect('index');
                            }
              
                            }


                            public function editmcolors(){


                                $data = array();
                                if($this->isUserLoggedIn){
                                    $con = array(
                                        'id' => $this->session->userdata('userId')
                                    );
                                    $data['user'] = $this->user->getRows($con);
                                    $id =$this->uri->segment(3);
                                                      
                                                        $cname='mcolors';
                                                        $data['vals'] = $this->category->selectmine($id,$cname);
                                    if(isset($_POST['editcategory']))
                             {
                         $name=$this->input->post('name');
                  
                  
                  
                         $data['slt']= $this->category->editmine($name,$id,$cname);
                      $this->session->set_flashdata("Successs","Edited Successfuly !");
                  
                                redirect('mcolors');
                  
                  
                         }
                  
                                    $this->load->view('editmcolors', $data);
                  
                                }else{
                                    redirect('index');
                                }
                  
                                }


                                public function editscolors(){


                                    $data = array();
                                    if($this->isUserLoggedIn){
                                        $con = array(
                                            'id' => $this->session->userdata('userId')
                                        );
                                        $data['user'] = $this->user->getRows($con);
                                        $id =$this->uri->segment(3);
                                                       
                                                            $cname='scolors';
                                                            $data['vals'] = $this->category->selectmine($id,$cname);
                                        if(isset($_POST['editcategory']))
                                 {
                             $name=$this->input->post('name');
                      
                      
                      
                             $data['slt']= $this->category->editmine($name,$id,$cname);
                          $this->session->set_flashdata("Successs","Edited Successfuly !");
                      
                                    redirect('scolors');
                      
                      
                             }
                      
                                        $this->load->view('editscolors', $data);
                      
                                    }else{
                                        redirect('index');
                                    }
                      
                                    }

                                    public function editpshapes(){


                                        $data = array();
                                        if($this->isUserLoggedIn){
                                            $con = array(
                                                'id' => $this->session->userdata('userId')
                                            );
                                            $data['user'] = $this->user->getRows($con);
                                            $id =$this->uri->segment(3);
                                                                
                                                                $cname='pshapes';
                                                                $data['vals'] = $this->category->selectmine($id,$cname);
                                            if(isset($_POST['editcategory']))
                                     {
                                 $name=$this->input->post('name');
                          
                          
                          
                                 $data['slt']= $this->category->editmine($name,$id,$cname);
                              $this->session->set_flashdata("Successs","Edited Successfuly !");
                          
                                        redirect('pshapes');
                          
                          
                                 }
                          
                                            $this->load->view('editpshapes', $data);
                          
                                        }else{
                                            redirect('index');
                                        }
                          
                                        }


                                        public function editmetals(){


                                            $data = array();
                                            if($this->isUserLoggedIn){
                                                $con = array(
                                                    'id' => $this->session->userdata('userId')
                                                );
                                                $data['user'] = $this->user->getRows($con);
                                                $id =$this->uri->segment(3);
                                                                    
                                                                    $cname='metals';
                                                                    $data['vals'] = $this->category->selectmine($id,$cname);
                                                if(isset($_POST['editcategory']))
                                         {
                                     $name=$this->input->post('name');
                              
                              
                              
                                     $data['slt']= $this->category->editmine($name,$id,$cname);
                                  $this->session->set_flashdata("Successs","Edited Successfuly !");
                              
                                            redirect('metals');
                              
                              
                                     }
                              
                                                $this->load->view('editmetals', $data);
                              
                                            }else{
                                                redirect('index');
                                            }
                              
                                            }


                                            public function editmshapes(){


                                                $data = array();
                                                if($this->isUserLoggedIn){
                                                    $con = array(
                                                        'id' => $this->session->userdata('userId')
                                                    );
                                                    $data['user'] = $this->user->getRows($con);
                                                    $id =$this->uri->segment(3);
                                                                 
                                                                        $cname='mshapes';
                                                                        $data['vals'] = $this->category->selectmine($id,$cname);
                                                    if(isset($_POST['editcategory']))
                                             {
                                         $name=$this->input->post('name');
                                  
                                  
                                  
                                         $data['slt']= $this->category->editmine($name,$id,$cname);
                                      $this->session->set_flashdata("Successs","Edited Successfuly !");
                                  
                                                redirect('mshapes');
                                  
                                  
                                         }
                                  
                                                    $this->load->view('editmshapes', $data);
                                  
                                                }else{
                                                    redirect('index');
                                                }
                                  
                                                }


                                                public function editnlengths(){


                                                    $data = array();
                                                    if($this->isUserLoggedIn){
                                                        $con = array(
                                                            'id' => $this->session->userdata('userId')
                                                        );
                                                        $data['user'] = $this->user->getRows($con);
                                                        $id =$this->uri->segment(3);
                                                                           
                                                                            $cname='nlengths';
                                                                            $data['vals'] = $this->category->selectmine($id,$cname);
                                                        if(isset($_POST['editcategory']))
                                                 {
                                             $name=$this->input->post('name');
                                      
                                      
                                      
                                             $data['slt']= $this->category->editmine($name,$id,$cname);
                                          $this->session->set_flashdata("Successs","Edited Successfuly !");
                                      
                                                    redirect('nlengths');
                                      
                                      
                                             }
                                      
                                                        $this->load->view('editnlengths', $data);
                                      
                                                    }else{
                                                        redirect('index');
                                                    }
                                      
                                                    }


                                                    public function editbsizes(){


                                                        $data = array();
                                                        if($this->isUserLoggedIn){
                                                            $con = array(
                                                                'id' => $this->session->userdata('userId')
                                                            );
                                                            $data['user'] = $this->user->getRows($con);
                                                            $id =$this->uri->segment(3);
                                                                            
                                                                                $cname='bsizes';
                                                                                $data['vals'] = $this->category->selectmine($id,$cname);
                                                            if(isset($_POST['editcategory']))
                                                     {
                                                 $name=$this->input->post('name');
                                          
                                          
                                          
                                                 $data['slt']= $this->category->editmine($name,$id,$cname);
                                              $this->session->set_flashdata("Successs","Edited Successfuly !");
                                          
                                                        redirect('bsizes');
                                          
                                          
                                                 }
                                          
                                                            $this->load->view('editbsizes', $data);
                                          
                                                        }else{
                                                            redirect('index');
                                                        }
                                          
                                                        }


                                                        public function editrsizes(){


                                                            $data = array();
                                                            if($this->isUserLoggedIn){
                                                                $con = array(
                                                                    'id' => $this->session->userdata('userId')
                                                                );
                                                                $data['user'] = $this->user->getRows($con);
                                                                $id =$this->uri->segment(3);
                                                                                   
                                                                                    $cname='rsizes';
                                                                                    $data['vals'] = $this->category->selectmine($id,$cname);
                                                                if(isset($_POST['editcategory']))
                                                         {
                                                     $name=$this->input->post('name');
                                              
                                              
                                              
                                                     $data['slt']= $this->category->editmine($name,$id,$cname);
                                                  $this->session->set_flashdata("Successs","Edited Successfuly !");
                                              
                                                            redirect('rsizes');
                                              
                                              
                                                     }
                                              
                                                                $this->load->view('editrsizes', $data);
                                              
                                                            }else{
                                                                redirect('index');
                                                            }
                                              
                                                            }


                                                            public function editarmletssizes(){


                                                                $data = array();
                                                                if($this->isUserLoggedIn){
                                                                    $con = array(
                                                                        'id' => $this->session->userdata('userId')
                                                                    );
                                                                    $data['user'] = $this->user->getRows($con);
                                                                    $id =$this->uri->segment(3);
                                                                                  
                                                                                        $cname='armletssizes';
                                                                                        $data['vals'] = $this->category->selectmine($id,$cname);
                                                                    if(isset($_POST['editcategory']))
                                                             {
                                                         $name=$this->input->post('name');
                                                  
                                                  
                                                  
                                                         $data['slt']= $this->category->editmine($name,$id,$cname);
                                                      $this->session->set_flashdata("Successs","Edited Successfuly !");
                                                  
                                                                redirect('armletssizes');
                                                  
                                                  
                                                         }
                                                  
                                                                    $this->load->view('editarmletssizes', $data);
                                                  
                                                                }else{
                                                                    redirect('index');
                                                                }
                                                  
                                                                }


                                                                public function editwaistsizes(){


                                                                    $data = array();
                                                                    if($this->isUserLoggedIn){
                                                                        $con = array(
                                                                            'id' => $this->session->userdata('userId')
                                                                        );
                                                                        $data['user'] = $this->user->getRows($con);
                                                                        $id =$this->uri->segment(3);
                                                                                          
                                                                                            $cname='waistsizes';
                                                                                            $data['vals'] = $this->category->selectmine($id,$cname);
                                                                        if(isset($_POST['editcategory']))
                                                                 {
                                                             $name=$this->input->post('name');
                                                      
                                                      
                                                      
                                                             $data['slt']= $this->category->editmine($name,$id,$cname);
                                                          $this->session->set_flashdata("Successs","Edited Successfuly !");
                                                      
                                                                    redirect('waistsizes');
                                                      
                                                      
                                                             }
                                                      
                                                                        $this->load->view('editwaistsizes', $data);
                                                      
                                                                    }else{
                                                                        redirect('index');
                                                                    }
                                                      
                                                                    }


                                                                    public function editbasemetals(){


                                                                        $data = array();
                                                                        if($this->isUserLoggedIn){
                                                                            $con = array(
                                                                                'id' => $this->session->userdata('userId')
                                                                            );
                                                                            $data['user'] = $this->user->getRows($con);
                                                                            $id =$this->uri->segment(3);
                                                                                                $cname='basemetals';
                                                                                                $data['vals'] = $this->category->selectmine($id,$cname);
                                                                            if(isset($_POST['editcategory']))
                                                                     {
                                                                 $name=$this->input->post('name');
                                                          
                                                          
                                                          
                                                                 $data['slt']= $this->category->editmine($name,$id,$cname);
                                                              $this->session->set_flashdata("Successs","Edited Successfuly !");
                                                          
                                                                        redirect('basemetals');
                                                          
                                                          
                                                                 }
                                                          
                                                                            $this->load->view('editbasemetals', $data);
                                                          
                                                                        }else{
                                                                            redirect('index');
                                                                        }
                                                          
                                                                        }


                                                                        public function editpendanttypes(){


                                                                            $data = array();
                                                                            if($this->isUserLoggedIn){
                                                                                $con = array(
                                                                                    'id' => $this->session->userdata('userId')
                                                                                );
                                                                                $data['user'] = $this->user->getRows($con);
                                                                                $id =$this->uri->segment(3);
                                                                                              
                                                                                                    $cname='pendanttypes';
                                                                                                    $data['vals'] = $this->category->selectmine($id,$cname);
                                                                                if(isset($_POST['editcategory']))
                                                                         {
                                                                     $name=$this->input->post('name');
                                                              
                                                              
                                                              
                                                                     $data['slt']= $this->category->editmine($name,$id,$cname);
                                                                  $this->session->set_flashdata("Successs","Edited Successfuly !");
                                                              
                                                                            redirect('pendanttypes');
                                                              
                                                              
                                                                     }
                                                              
                                                                                $this->load->view('editpendanttypes', $data);
                                                              
                                                                            }else{
                                                                                redirect('index');
                                                                            }
                                                              
                                                                            }


                                                                            public function editchaintypes(){


                                                                                $data = array();
                                                                                if($this->isUserLoggedIn){
                                                                                    $con = array(
                                                                                        'id' => $this->session->userdata('userId')
                                                                                    );
                                                                                    $data['user'] = $this->user->getRows($con);
                                                                                    $id =$this->uri->segment(3);
                                                                                                      
                                                                                                        $cname='chaintypes';
                                                                                                        $data['vals'] = $this->category->selectmine($id,$cname);
                                                                                    if(isset($_POST['editcategory']))
                                                                             {
                                                                         $name=$this->input->post('name');
                                                                  
                                                                  
                                                                  
                                                                         $data['slt']= $this->category->editmine($name,$id,$cname);
                                                                      $this->session->set_flashdata("Successs","Edited Successfuly !");
                                                                  
                                                                                redirect('chaintypes');
                                                                  
                                                                  
                                                                         }
                                                                  
                                                                                    $this->load->view('editchaintypes', $data);
                                                                  
                                                                                }else{
                                                                                    redirect('index');
                                                                                }
                                                                  
                                                                                }


                                                                                public function editocs(){


                                                                                    $data = array();
                                                                                    if($this->isUserLoggedIn){
                                                                                        $con = array(
                                                                                            'id' => $this->session->userdata('userId')
                                                                                        );
                                                                                        $data['user'] = $this->user->getRows($con);
                                                                                        $id =$this->uri->segment(3);
                                                                                                            $cname='ocs';
                                                                                                            $data['vals'] = $this->category->selectmine($id,$cname);
                                                                                        if(isset($_POST['editcategory']))
                                                                                 {
                                                                             $name=$this->input->post('name');
                                                                      
                                                                      
                                                                      
                                                                             $data['slt']= $this->category->editmine($name,$id,$cname);
                                                                          $this->session->set_flashdata("Successs","Edited Successfuly !");
                                                                      
                                                                                    redirect('ocs');
                                                                      
                                                                      
                                                                             }
                                                                      
                                                                                        $this->load->view('editocs', $data);
                                                                      
                                                                                    }else{
                                                                                        redirect('index');
                                                                                    }
                                                                      
                                                                                    }
    


              public function editsizes(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);
                    $id =$this->uri->segment(3);
                                        $data['vals'] = $this->category->selectsizes($id);
                    if(isset($_POST['editcategory']))
             {
         $name=$this->input->post('name');



         $data['slt']= $this->category->editsizes($name,$id);
      $this->session->set_flashdata("Successs","Size Edited Successfuly !");

                redirect('sizes');


         }

                    $this->load->view('editsizes', $data);

                }else{
                    redirect('index');
                }

                }

            public function outofstock(){


              $data = array();
              if($this->isUserLoggedIn){
                  $con = array(
                      'id' => $this->session->userdata('userId')
                  );
                  $data['user'] = $this->user->getRows($con);
          $data['outofstock'] = $this->category->checkcount();
                  $this->load->view('outofstock', $data);

              }else{
                  redirect('index');
              }

              }


            public function photos(){


              $data = array();
              if($this->isUserLoggedIn){
                  $con = array(
                      'id' => $this->session->userdata('userId')
                  );
                  $data['user'] = $this->user->getRows($con);
          $data['listcategory'] = $this->category->listphotos();
          
          
                  $this->load->view('photos', $data);

              }else{
                  redirect('index');
              }

              }


   public function threshold(){


              $data = array();
              if($this->isUserLoggedIn){
                  $con = array(
                      'id' => $this->session->userdata('userId')
                  );
                  $data['user'] = $this->user->getRows($con);
                  $data['lven'] = $this->category->listvendor();
          $data['listproduct'] = $this->category->listthreshold();
          $data['listcategory'] = $this->category->listcategory();
          
         
          
          
    
          
          
                  $this->load->view('threshold', $data);

              }else{
                  redirect('index');
              }

              }


              public function productsc(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);
                    $sid =$this->uri->segment(3);
            $data['listproduct'] = $this->category->listproductc($sid);
            $data['listcategory'] = $this->category->listcategory();
                    $this->load->view('productsc', $data);

                }else{
                    redirect('index');
                }

                }

              public function addphoto(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listcategory();



                    if(isset($_POST['addproduct']))
             {


    


               $this->load->library('upload');
               $image = array();
               $ImageCount = count($_FILES['pimage']['name']);
               for($i = 0; $i < $ImageCount; $i++){
               $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
               $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
               $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
               $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
               $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

               // File upload configuration
               $uploadPath = './uploads/products/';
               $config['upload_path'] = $uploadPath;
               $config['allowed_types'] = 'jpg|jpeg|png|gif';

               // Load and initialize upload library
               $this->load->library('upload', $config);
               $this->upload->initialize($config);

               // Upload file to server
               if($this->upload->do_upload('file')){
               // Uploaded file data
               $imageData = $this->upload->data();
                // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                $uploadImgData[] = $imageData['file_name'];


                $data = array('upload_data' => $this->upload->data());
                               $path=$data['upload_data']['full_path'];
                               $q['name']=$data['upload_data']['file_name'];

                                $config['image_library'] = 'gd2';
                                $config['source_image']   = $path;
                                $config['maintain_ratio'] = TRUE;
                                $config['width']  = 1000;
                                $config['height'] = 1000;

                                $this->load->library('image_lib');
$this->image_lib->initialize($config);
                               $this->image_lib->resize();

                               unset($config);
                               $this->load->library('image_lib');
                               $this->image_lib->clear();




               }
               }






             
                   $category = $this->input->post('category');
                   $subcategory = $this->input->post('subcategory');
                  
                  

                  $pimage = $uploadImgData;



               $insertUserData = $this->category->addproduct($category,$subcategory,$pimage);

               if($insertUserData){
                   $this->session->set_flashdata('success_msg', 'Photo Addedd Successfuly');
               }else{
                   $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
               }

               redirect('photos');


          
        }



                    $this->load->view('addphoto', $data);

                }else{
                    redirect('index');
                }

                }








                public function editphoto(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                      $data['listcategory'] = $this->category->listcategory();
                  
                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selectproduct($id);
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/products/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 1000;
                                    $config['height'] = 1000;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }





                 $category = $this->input->post('category');
                 $subcategory = $this->input->post('subcategory');
                

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                        else{
        
                          $pimage=$this->input->post('pimage1p');
                        }

                 //Pass user data to model
                 $insertUserDatas = $this->category->editproduct($category,$subcategory,$pimage,$id);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Photo Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('photos');

           }

                      $this->load->view('editphoto', $data);

                  }else{
                      redirect('index');
                  }

                  }




   public function editabout(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                      $data['listcategory'] = $this->category->listcategory();
                      $data['types'] = $this->category->listtypes();
$data['istyles'] = $this->category->lististyles();
$data['mstones'] = $this->category->listmstones();
$data['sstones'] = $this->category->listsstones();
$data['mcolors'] = $this->category->listmcolors();
$data['scolors'] = $this->category->listscolors();
$data['pshapes'] = $this->category->listpshapes();
$data['metals'] = $this->category->listmetals();
$data['mshapes'] = $this->category->listmshapes();
$data['nlengths'] = $this->category->listnlengths();
$data['bsizes'] = $this->category->listbsizes();
$data['rsizes'] = $this->category->listrsizes();
$data['armletssizes'] = $this->category->listarmletssizes();
$data['waistsizes'] = $this->category->listwaistsizes();
$data['basemetals'] = $this->category->listbasemetals();
$data['pendanttypes'] = $this->category->listpendanttypes();
$data['chaintypes'] = $this->category->listchaintypes();
$data['ocs'] = $this->category->listocs();

                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selectabout($id);
                                          $data['listsizes'] = $this->category->listsizes();
                                          $data['listcity'] = $this->category->listoccassions();
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/about/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 690;
                                    $config['height'] = 547;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }





                 $productname = $this->input->post('productname');
                 $description = $this->input->post('description');

                     //if(empty($_FILES['pimage']['name'])){$pimage = $this->input->post('pimage1p');} else{$pimage = implode(",",$uploadImgData);}

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                        else{
        
                          $pimage=$this->input->post('pimage1p');
                        }

                 //Pass user data to model
                 $insertUserDatas = $this->category->editabout($productname,$description,$pimage,$id);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'About Us Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/editabout/1');

           }

                      $this->load->view('editabout', $data);

                  }else{
                      redirect('index');
                  }

                  }
                  
                  
                   public function addsliderbanner(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                     
                    
                     if(isset($_POST['editproduct']))
               {
                     $this->load->library('image_lib');
    $this->load->library('upload');
    $this->load->database();

    // Configuration for image upload
    $config['upload_path'] = './uploads/about/'; // Specify the upload directory
    $config['allowed_types'] = 'jpg|jpeg|png'; // Specify allowed file types
  

    // Initialize the upload library with the configuration
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('photo1')) {
        // Upload failed, handle the error
        $error = $this->upload->display_errors();
        
    } else {
        // Upload success, process the image
        $imageData = $this->upload->data();
        $uploadedImagePath = $imageData['full_path']; // Path of the uploaded image
        $uploadedImageName = $imageData['file_name']; // Name of the uploaded image

        // Configuration for image resizing
        $resizeConfig['image_library'] = 'gd2';
        $resizeConfig['source_image'] = $uploadedImagePath;
        $resizeConfig['maintain_ratio'] = TRUE;
        $resizeConfig['width'] = 1920; // Resized width
        $resizeConfig['height'] = 768; // Resized height

        // Initialize the image library with the resize configuration
        $this->image_lib->initialize($resizeConfig);

        if (!$this->image_lib->resize()) {
            // Resize failed, handle the error
            echo $this->image_lib->display_errors();
        } else {
            // Resize success, add watermark
            $watermarkConfig['source_image'] = $uploadedImagePath;
            $watermarkConfig['wm_type'] = 'overlay';
            $watermarkConfig['wm_overlay_path'] = ''; // Path of the watermark image
            $watermarkConfig['wm_opacity'] = 0; // Watermark opacity (0-100)

            // Initialize the image library with the watermark configuration
            $this->image_lib->initialize($watermarkConfig);

            if (!$this->image_lib->watermark()) {
                // Watermarking failed, handle the error
                echo $this->image_lib->display_errors();
            } else {
                $uploadedImageName1 =$uploadedImageName;

            }
        }
    }
            
            
        



               $uploadedImageName1=$uploadedImageName;
          
          
           
           

                  

                 //Pass user data to model
                 $insertUserDatas = $this->category->addsliderbanner($uploadedImageName1);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Edited Successfully');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('sliderbanners');

                  }

                      $this->load->view('addsliderbanner', $data);

                  }else{
                      redirect('index');
                  }

                  }

                  
                   public function editsliderbanner(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                      $data['listcategory'] = $this->category->listcategory();
                    

                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selectsliderbanner($id);
                                          $data['listsizes'] = $this->category->listsizes();
                                          $data['listcity'] = $this->category->listoccassions();
                    
                     if(isset($_POST['editproduct']))
               {
                     $this->load->library('image_lib');
    $this->load->library('upload');
    $this->load->database();

    // Configuration for image upload
    $config['upload_path'] = './uploads/about/'; // Specify the upload directory
    $config['allowed_types'] = 'jpg|jpeg|png'; // Specify allowed file types
  

    // Initialize the upload library with the configuration
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('photo1')) {
        // Upload failed, handle the error
        $error = $this->upload->display_errors();
        
    } else {
        // Upload success, process the image
        $imageData = $this->upload->data();
        $uploadedImagePath = $imageData['full_path']; // Path of the uploaded image
        $uploadedImageName = $imageData['file_name']; // Name of the uploaded image

        // Configuration for image resizing
        $resizeConfig['image_library'] = 'gd2';
        $resizeConfig['source_image'] = $uploadedImagePath;
        $resizeConfig['maintain_ratio'] = TRUE;
        $resizeConfig['width'] = 1920; // Resized width
        $resizeConfig['height'] = 768; // Resized height

        // Initialize the image library with the resize configuration
        $this->image_lib->initialize($resizeConfig);

        if (!$this->image_lib->resize()) {
            // Resize failed, handle the error
            echo $this->image_lib->display_errors();
        } else {
            // Resize success, add watermark
            $watermarkConfig['source_image'] = $uploadedImagePath;
            $watermarkConfig['wm_type'] = 'overlay';
            $watermarkConfig['wm_overlay_path'] = ''; // Path of the watermark image
            $watermarkConfig['wm_opacity'] = 0; // Watermark opacity (0-100)

            // Initialize the image library with the watermark configuration
            $this->image_lib->initialize($watermarkConfig);

            if (!$this->image_lib->watermark()) {
                // Watermarking failed, handle the error
                echo $this->image_lib->display_errors();
            } else {
                $uploadedImageName1 =$uploadedImageName;

            }
        }
    }
            
            
       


 if($uploadedImageName1){
               $uploadedImageName1=$uploadedImageName;
           }
           else{
               $uploadedImageName1=$this->input->post('hphoto1');
           }
           
           

       

                  

                 //Pass user data to model
                 $insertUserDatas = $this->category->editsliderbanner($id,$uploadedImageName1);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Edited Successfully');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('sliderbanners');

                  }

                      $this->load->view('editsliderbanner', $data);

                  }else{
                      redirect('index');
                  }

                  }




public function editocbanner(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                      $data['listcategory'] = $this->category->listcategory();
                      $data['types'] = $this->category->listtypes();
$data['istyles'] = $this->category->lististyles();
$data['mstones'] = $this->category->listmstones();
$data['sstones'] = $this->category->listsstones();
$data['mcolors'] = $this->category->listmcolors();
$data['scolors'] = $this->category->listscolors();
$data['pshapes'] = $this->category->listpshapes();
$data['metals'] = $this->category->listmetals();
$data['mshapes'] = $this->category->listmshapes();
$data['nlengths'] = $this->category->listnlengths();
$data['bsizes'] = $this->category->listbsizes();
$data['rsizes'] = $this->category->listrsizes();
$data['armletssizes'] = $this->category->listarmletssizes();
$data['waistsizes'] = $this->category->listwaistsizes();
$data['basemetals'] = $this->category->listbasemetals();
$data['pendanttypes'] = $this->category->listpendanttypes();
$data['chaintypes'] = $this->category->listchaintypes();
$data['ocs'] = $this->category->listocs();

                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selectocbanner($id);
                                          $data['listsizes'] = $this->category->listsizes();
                                          $data['listcity'] = $this->category->listoccassions();
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/about/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 729;
                                    $config['height'] = 400;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }





                 $title = $this->input->post('productname');
                 $description = $this->input->post('description');
                 $price = $this->input->post('price');

                     //if(empty($_FILES['pimage']['name'])){$pimage = $this->input->post('pimage1p');} else{$pimage = implode(",",$uploadImgData);}

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                        else{
        
                          $pimage=$this->input->post('pimage1p');
                        }

                 //Pass user data to model
                 $insertUserDatas = $this->category->editocbanner($title,$description,$price,$pimage,$id);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Banner Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/editocbanner/1');

           }

                      $this->load->view('editocbanner', $data);

                  }else{
                      redirect('index');
                  }

                  }






                  public function coupons(){


                    $data = array();
                    if($this->isUserLoggedIn){
                        $con = array(
                            'id' => $this->session->userdata('userId')
                        );
                        $data['user'] = $this->user->getRows($con);
                  $data['listcoupon'] = $this->category->listcoupon();
                        $this->load->view('coupons', $data);

                    }else{
                        redirect('index');
                    }

                    }

                    public function addcoupon(){


                      $data = array();
                      if($this->isUserLoggedIn){
                          $con = array(
                              'id' => $this->session->userdata('userId')
                          );
                          $data['user'] = $this->user->getRows($con);
$data['listcategory'] = $this->category->listcategory();
                          if(isset($_POST['addcoupon']))
                   {
                  $name=$this->input->post('name');
                  $amount=$this->input->post('amount');
                  $noof=$this->input->post('noof');
                  $category=implode(",",$this->input->post('category'));
                  $product=implode(",",$this->input->post('product'));



                  $data['slt']= $this->category->addcoupon($name,$status,$amount,$noof,$category,$product);
                  $this->session->set_flashdata("Success","Coupon Added Successfuly !");

                      $this->load->view("addcoupon",$data);


                  }
                  
                  
                  
                  if(isset($_POST['addcoupon1']))
                   {
                  $name=$this->input->post('name');
                  $amount=$this->input->post('amount');
                  $carttotal=$this->input->post('carttotal');



                  $data['slt']= $this->category->addcoupon1($name,$amount,$carttotal);
                  $this->session->set_flashdata("Success","Coupon Added Successfuly !");

                      $this->load->view("addcoupon",$data);


                  }



                          $this->load->view('addcoupon', $data);

                      }else{
                          redirect('index');
                      }

                      }


                      public function editcoupon(){


                        $data = array();
                        if($this->isUserLoggedIn){
                            $con = array(
                                'id' => $this->session->userdata('userId')
                            );
                            $data['user'] = $this->user->getRows($con);
                            $id =$this->uri->segment(3);
                                                $data['vals'] = $this->category->selectcoupon($id);
                                                $data['listcategory'] = $this->category->listcategory();
                            if(isset($_POST['editcoupon']))
                     {
                  $name=$this->input->post('name');
                  $status=$this->input->post('status');
                  $amount=$this->input->post('amount');
                   $noof=$this->input->post('noof');
                  $category=$this->input->post('category');
                  $product=$this->input->post('product');
                  $carttotal=$this->input->post('carttotal');



                  $data['slt']= $this->category->editcoupon($name,$status,$id,$amount,$noof,$category,$product,$carttotal);
                  $this->session->set_flashdata("Success","Coupon Edited Successfuly !");

                        redirect('coupons');


                  }

                            $this->load->view('editcoupon', $data);

                        }else{
                            redirect('index');
                        }

                        }





                              public function subcategories(){


                                $data = array();
                                if($this->isUserLoggedIn){
                                    $con = array(
                                        'id' => $this->session->userdata('userId')
                                    );
                                    $data['user'] = $this->user->getRows($con);
                        $data['listcategory'] = $this->category->listsubcategory();
                                    $this->load->view('subcategories', $data);

                                }else{
                                    redirect('index');
                                }

                                }

                                public function addsubcategory(){


                                  $data = array();
                                  if($this->isUserLoggedIn){
                                      $con = array(
                                          'id' => $this->session->userdata('userId')
                                      );
                                      $data['user'] = $this->user->getRows($con);
  $data['listcategory'] = $this->category->listcategory();
                                      if(isset($_POST['addsubcategory']))
                               {

                                if(!empty($_FILES['pimage']['name'])){
                                    $config['upload_path'] = './uploads/subcat/';
                                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                    $config['file_name'] = $_FILES['pimage']['name'];
                       
                                    //Load upload library and initialize configuration
                                    $this->load->library('upload',$config);
                                    $this->upload->initialize($config);
                       
                                    if($this->upload->do_upload('pimage')){
                                        $uploadData = $this->upload->data();
                                        $picture = $uploadData['file_name'];
                                    }else{
                                        $picture = '';
                                    }
                                }
                       
                       
                                    $pimage = $picture;
                           $name=$this->input->post('name');
                           $parentcategory=$this->input->post('parentcategory');
                           $status=$this->input->post('status');
                           $types=$this->input->post('types');



                           $data['slt']= $this->category->addsubcategory($name,$parentcategory,$status,$pimage,$types);
                           $this->category->markit($parentcategory);
                        $this->session->set_flashdata("Successs","Sub Category Added Successfuly !");

redirect('subcategories');


                           }



                                      $this->load->view('addsubcategory', $data);

                                  }else{
                                      redirect('index');
                                  }

                                  }


                                  public function editsubcategory(){


                                    $data = array();
                                    if($this->isUserLoggedIn){
                                        $con = array(
                                            'id' => $this->session->userdata('userId')
                                        );
                                        $data['user'] = $this->user->getRows($con);
                                          $data['listcategory'] = $this->category->listcategory();
                                        $id =$this->uri->segment(3);
                                                            $data['vals'] = $this->category->selectsubcategory($id);
                                        if(isset($_POST['editsubcategory']))
                                 {

                                    if(!empty($_FILES['pimage']['name'])){
                                        $config['upload_path'] = './uploads/subcat/';
                                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                        $config['file_name'] = $_FILES['pimage']['name'];
                         
                                        //Load upload library and initialize configuration
                                        $this->load->library('upload',$config);
                                        $this->upload->initialize($config);
                         
                                        if($this->upload->do_upload('pimage')){
                                            $uploadData = $this->upload->data();
                                            $picture = $uploadData['file_name'];
                                        }else{
                                            $picture = '';
                                        }
                                    }
                         
                           if($picture){
                                        $pimage = $picture;
                                      }
                                      else{
                                        $pimage=$this->input->post('pimage1p');
                                      }
                             $name=$this->input->post('name');
                             $status=$this->input->post('status');
                             $parentcategory=$this->input->post('parentcategory');
                             $types=$this->input->post('types');



                             $data['slt']= $this->category->editsubcategory($name,$status,$parentcategory,$id,$pimage,$types);
                          $this->session->set_flashdata("Successs","Sub Category Edited Successfuly !");

                                    redirect('subcategories');


                             }

                                        $this->load->view('editsubcategory', $data);

                                    }else{
                                        redirect('index');
                                    }

                                    }




                                    public function users(){


                                      $data = array();
                                     
                                          $con = array(
                                              'id' => $this->session->userdata('userId')
                                          );
                                          $data['user'] = $this->user->getRows($con);
                                $data['listuser'] = $this->category->listuser();
                                          $this->load->view('users', $data);

                                      

                                      }
                                      
                                      public function mcustomers(){


                                      $data = array();
                                     
                                          $con = array(
                                              'id' => $this->session->userdata('userId')
                                          );
                                          $data['user'] = $this->user->getRows($con);
                                $data['listuser'] = $this->category->listuser();
                                
                                if(isset($_POST['submit'])){
                                    
                                    if($this->input->post('email')){
   $emailid=$this->input->post('email');
    foreach($emailid as $emi){
                    $this->load->library('phpmailer_lib');
                   $mail = $this->phpmailer_lib->load();
                  $mail->isSMTP();
  $mail->Host     = 'thebrandchimp.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'test@thebrandchimp.com';
            $mail->Password = 'Olivya7788@';
            $mail->SMTPSecure = 'ssl';
            $mail->Port     = 465;

            $mail->setFrom('admin@jewelit.in', 'JEWELIT');
            $mail->addReplyTo('admin@jewelit.in', 'JEWELIT');

                                    // Add a recipient
                                    //  $mail->addAddress(implode(', ', $this->input->post('email')));
                                    $mail->addAddress('admin@jewelit.in');
                                    $mail->addCC('admin@jewelit.in');
                                    // this->email->to(implode(', ', $recipients));

                                    // Email subject
                                    $mail->Subject = $this->input->post('subject');

                                    // Set email format to HTML
                                    $mail->isHTML(true);

                                    // Email body content
                                    $mailContent = $this->input->post('content');
                                    $mail->Body = $mailContent;
                    $mail->send();
                   }
                       $this->session->set_flashdata("Successad1","Mail Sent Successfully !");
                               redirect($_SERVER['HTTP_REFERER']);
                               
                               
                                }
                                else{
                                   $this->session->set_flashdata("Successad1","Please Select Atleast One Email !");
                               redirect($_SERVER['HTTP_REFERER']); 
                                    
                                }
                             }

                                
                                
                                          $this->load->view('mcustomers', $data);

                                      

                                      }
                                      
                                      public function mvendors(){


                                      $data = array();
                                     
                                          $con = array(
                                              'id' => $this->session->userdata('userId')
                                          );
                                          $data['user'] = $this->user->getRows($con);
                                $data['listuser'] = $this->category->listvendor();
                                
                                  if(isset($_POST['submit'])){
                                      
                                      if($this->input->post('email')){
   $emailid=$this->input->post('email');
    foreach($emailid as $emi){
                    $this->load->library('phpmailer_lib');
                   $mail = $this->phpmailer_lib->load();
                  $mail->isSMTP();
  $mail->Host     = 'thebrandchimp.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'test@thebrandchimp.com';
            $mail->Password = 'Olivya7788@';
            $mail->SMTPSecure = 'ssl';
            $mail->Port     = 465;

            $mail->setFrom('admin@jewelit.in', 'JEWELIT');
            $mail->addReplyTo('admin@jewelit.in', 'JEWELIT');

                                    // Add a recipient
                                    //  $mail->addAddress(implode(', ', $this->input->post('email')));
                                    $mail->addAddress('admin@jewelit.in');
                                    $mail->addCC('admin@jewelit.in');
                                    // this->email->to(implode(', ', $recipients));

                                    // Email subject
                                    $mail->Subject = $this->input->post('subject');

                                    // Set email format to HTML
                                    $mail->isHTML(true);

                                    // Email body content
                                    $mailContent = $this->input->post('content');
                                    $mail->Body = $mailContent;
                    $mail->send();
                   }
                       $this->session->set_flashdata("Successad","Mail Sent Successfully !");
                               redirect($_SERVER['HTTP_REFERER']);
                             }
                                           else{
                                   $this->session->set_flashdata("Successad1","Please Select Atleast One Email !");
                               redirect($_SERVER['HTTP_REFERER']); 
                                    
                                
                                      }
                                  }

                               
                                
                                  $this->load->view('mvendors', $data);


                                      }


public function adduser(){


                                      $data = array();
                                      if($this->isUserLoggedIn){
                                          $con = array(
                                              'id' => $this->session->userdata('userId')
                                          );
                                          $data['user'] = $this->user->getRows($con);
                                            $data['listuser'] = $this->category->listuser();
                                          $id =$this->uri->segment(3);
                                                              $data['vals'] = $this->category->selectuser($id);
                                          if(isset($_POST['edituser']))
                                    {
                                    $email=$this->input->post('email');
                                    $phone=$this->input->post('phone');
                                    $name=$this->input->post('name');
                                    $address=$this->input->post('address');
                                    $password=md5($this->input->post('password'));


$checkemail=$this->category->checkemail($email);
if($checkemail){
    
$this->session->set_flashdata("Successs","Email Already Exist !");

                                      redirect('users');
}
else{
                                    $data['slt']= $this->category->addcustomer($email,$phone,$name,$address,$password);
                                    $this->session->set_flashdata("Successs","User Added Successfuly !");

                                      redirect('users');


                                    }
                                    }

                                          $this->load->view('adduser', $data);

                                      }else{
                                          redirect('index');
                                      }

                                      }




                                    public function edituser(){


                                      $data = array();
                                      if($this->isUserLoggedIn){
                                          $con = array(
                                              'id' => $this->session->userdata('userId')
                                          );
                                          $data['user'] = $this->user->getRows($con);
                                            $data['listuser'] = $this->category->listuser();
                                          $id =$this->uri->segment(3);
                                                              $data['vals'] = $this->category->selectuser($id);
                                          if(isset($_POST['edituser']))
                                    {
                                    $status=$this->input->post('status');



                                    $data['slt']= $this->category->editcustomer($status,$id);
                                    $this->session->set_flashdata("Successs","User Status Edited Successfuly !");

                                      redirect('users');


                                    }

                                          $this->load->view('edituser', $data);

                                      }else{
                                          redirect('index');
                                      }

                                      }


                                      public function vendors(){


                                        $data = array();
                                        if($this->isUserLoggedIn){
                                            $con = array(
                                                'id' => $this->session->userdata('userId')
                                            );
                                            $data['user'] = $this->user->getRows($con);
                                  $data['listuser'] = $this->category->listvendor();
                                            $this->load->view('vendors', $data);
  
                                        }else{
                                            redirect('index');
                                        }
  
                                        }
  
  
  
                                      public function editvendor(){
  
  
                                        $data = array();
                                        if($this->isUserLoggedIn){
                                            $con = array(
                                                'id' => $this->session->userdata('userId')
                                            );
                                            $data['user'] = $this->user->getRows($con);
                                            $data['listcategory'] = $this->category->listcategory();

                                            $data['listcity'] = $this->category->listoccassions();
                                            $id =$this->uri->segment(3);
                                                                $data['vals'] = $this->category->selectvendor($id);
                                            if(isset($_POST['editvendor']))
                                      {
                                      $status=$this->input->post('status');
                                      $name  = $this->input->post('user_name');
        $email  = $this->input->post('user_email');
          $phone  = $this->input->post('user_phone');
            $address  = $this->input->post('user_address');
            $altnumber  = $this->input->post('user_alternate');
            $companyname  = $this->input->post('user_company');
            $priority  = $this->input->post('priority');
            $gst  = $this->input->post('user_gst');
            $city  = $this->input->post('user_city');
            $msme  = $this->input->post('msme');
            $scity  = implode(",",$this->input->post('user_scity'));
            $scategory  = implode(",",$this->input->post('user_category'));
            $ssubcategory  = implode(",",$this->input->post('user_subcategory'));
  
  
  
                                      $data['slt']= $this->category->edituser($status,$id,$email,$phone,$address,$altnumber,$companyname,$gst,$city,$scity,$scategory,$ssubcategory,$priority,$msme);
                                      
                                         $this->category->updateproductpriority($priority,$id);
                                      
                                      $this->session->set_flashdata("Successs","Vendor Edited Successfuly !");
  
                                        redirect('vendors');
  
  
                                      }
  
                                            $this->load->view('editvendor', $data);
  
                                        }else{
                                            redirect('index');
                                        }
  
                                        }
                                        
                                          public function bankdetails(){
  
  
                                        $data = array();
                                        if($this->isUserLoggedIn){
                                            $con = array(
                                                'id' => $this->session->userdata('userId')
                                            );
                                            $data['user'] = $this->user->getRows($con);
                                            $data['listcategory'] = $this->category->listcategory();

                                            $data['listcity'] = $this->category->listoccassions();
                                            $id =$this->uri->segment(3);
                                                                $data['vals'] = $this->category->selectvendor($id);
                                     
                                            $this->load->view('bankdetails', $data);
  
                                        }else{
                                            redirect('index');
                                        }
  
                                        }

                                        function fetchstate()
                                        {
                                        if($this->input->post('country_id'))
                                        {
                                        echo $this->category->fetch_state($this->input->post('country_id'));
                                        
                                        }
                                        }
                                        
                                        function fetchstate2()
                                        {
                                        if($this->input->post('country_id'))
                                        {
                                        echo $this->category->fetch_state2($this->input->post('country_id'));
                                        
                                        }
                                        }
                                        
                                        function fetchstate5()
                                        {
                                        if($this->input->post('country_id'))
                                        {
                                        echo $this->category->fetch_state5($this->input->post('country_id'));
                                        
                                        }
                                        }


                                        public function getSubcategories(){
                                            $cat_id = $this->input->post('cat_id');
                                            $sub_categoriess = array();
                                            $sub_categories = $this->category->getCategories('',$cat_id);
                                            if(count($sub_categories) > 0){
                                                $sub_cat = array_column($sub_categories,'name');
                                                $sub_cat = array_map('strtolower', $sub_cat);
                                        
                                                $sub_categoriess= array_values(array_unique($sub_cat));
                                            }
                                            echo json_encode($sub_categoriess);
                                            exit;
                                        }
                                        
                                        
                                         public function getSubcategories1(){
                                            $cat_id = $this->input->post('cat_id');
                                            $sub_categoriess = array();
                                            $sub_categories = $this->category->getCategories1('',$cat_id);
                                            if(count($sub_categories) > 0){
                                                $sub_cat = array_column($sub_categories,'productname');
                                                $sub_cat = array_map('strtolower', $sub_cat);
                                        
                                                $sub_categoriess= array_values(array_unique($sub_cat));
                                            }
                                            echo json_encode($sub_categoriess);
                                            exit;
                                        }
                                        

   public function addvendor(){


     $data = array();
     if($this->isUserLoggedIn){
         $con = array(
             'id' => $this->session->userdata('userId')
         );
         $data['user'] = $this->user->getRows($con);
         $data['listcategory'] = $this->category->listcategory();

         $data['listcity'] = $this->category->listoccassions();
         $this->load->view('addvendor', $data);

     }else{
         redirect('index');
     }

     }


     function registervalidation()
     {
      
      $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[vendors.email]');
     
      if($this->form_validation->run())
      {
       $verification_key = md5(rand());
       $data = array(
        'name'  => $this->input->post('user_name'),
        'email'  => $this->input->post('user_email'),
        'password' => md5($this->input->post('user_password')),
          'phone'  => $this->input->post('user_phone'),
            'address'  => $this->input->post('user_address'),
            'altnumber'  => $this->input->post('user_alternate'),
            'companyname'  => $this->input->post('user_company'),
            'gst'  => $this->input->post('user_gst'),
            'city'  => $this->input->post('user_city'),
            'scity'  => implode(",",$this->input->post('user_scity')),
            'scategory'  => implode(",",$this->input->post('user_category')),
            'ssubcategory'  => implode(",",$this->input->post('user_subcategory')),
        'is_email_verified' => 'yes',
        'dater' => date('Y-m-d'),
       );
       $id = $this->category->insert($data);
    $this->load->library('phpmailer_lib');
    $mail = $this->phpmailer_lib->load();
       if($id > 0)
       {
    
    
         $this->session->set_flashdata('message', 'Registration Successful. Account Verified');
         redirect('addvendor');
         
       }
      }
      else
      {
       $this->addvendor();
      }
     }



     public function editcolor(){


       $data = array();
       if($this->isUserLoggedIn){
           $con = array(
               'id' => $this->session->userdata('userId')
           );
           $data['user'] = $this->user->getRows($con);
           $id =$this->uri->segment(3);
                               $data['vals'] = $this->category->selectproduct($id);
           if(isset($_POST['editcolor']))
    {
   $red=$this->input->post('red');
   $blue=$this->input->post('blue');
   $lightblue=$this->input->post('lightblue');
   $navyblue=$this->input->post('navyblue');
   $cherryred=$this->input->post('cherryred');
   $frenchnavy=$this->input->post('frenchnavy');
   $prussianblue=$this->input->post('prussianblue');
   $maroon=$this->input->post('maroon');
   $halfwhite=$this->input->post('halfwhite');
   $indigo=$this->input->post('indigo');
   $bluebell=$this->input->post('bluebell');
   $green=$this->input->post('green');
   $mintgreen=$this->input->post('mintgreen');
   $lawngreen=$this->input->post('lawngreen');
   $pistachio=$this->input->post('pistachio');
   $lemongreen=$this->input->post('lemongreen');
   $bottlegreen=$this->input->post('bottlegreen');
   $oceangreen=$this->input->post('oceangreen');
   $peacockblue=$this->input->post('peacockblue');
   $wheat=$this->input->post('wheat');
   $sanddollar=$this->input->post('sanddollar');
   $nutmeg=$this->input->post('nutmeg');
   $plum=$this->input->post('plum');
   $lavender=$this->input->post('lavender');
   $cardinalred=$this->input->post('cardinalred');
   $hibiscusredyellow=$this->input->post('hibiscusredyellow');
   $darkyellow=$this->input->post('darkyellow');
   $goldyellow=$this->input->post('goldyellow');
   $mustardyellow=$this->input->post('mustardyellow');
   $lemonyellow=$this->input->post('lemonyellow');
   $olivegreen=$this->input->post('olivegreen');
   $black=$this->input->post('black');
   $white=$this->input->post('white');
   $orange=$this->input->post('orange');
   $grey=$this->input->post('grey');
   $marine=$this->input->post('marine');
   $nude=$this->input->post('nude');
   $beige=$this->input->post('beige');
   $lightgrey=$this->input->post('lightgrey');
   $purple=$this->input->post('purple');
   $pink=$this->input->post('pink');
   $babypink=$this->input->post('babypink');
   $raspberry=$this->input->post('raspberry');
   $rose=$this->input->post('rose');
   $peach=$this->input->post('peach');
   $coral=$this->input->post('coral');
   $apricot=$this->input->post('apricot');
   $pea=$this->input->post('pea');



   $data['slt']= $this->category->editcolors($red,$blue,$lightblue,$navyblue,$cherryred,$frenchnavy,$prussianblue,$maroon,$halfwhite,$indigo,$bluebell,$green,$mintgreen,$lawngreen,$pistachio,$lemongreen,$bottlegreen,$oceangreen,$peacockblue,$wheat,$sanddollar,$nutmeg,$plum,$lavender,$cardinalred,$hibiscusredyellow,$darkyellow,$goldyellow,$mustardyellow,$lemonyellow,$olivegreen,$black,$white,$orange,$grey,$marine,$nude,$beige,$lightgrey,$purple,$pink,$babypink,$raspberry,$rose,$peach,$coral,$apricot,$pea
,$id);
   $this->session->set_flashdata("Successs","Colors Updated Successfuly !");

       redirect('colors');


   }

           $this->load->view('editcolor', $data);

       }else{
           redirect('index');
       }

       }



       public function orders(){


         $data = array();
         if($this->isUserLoggedIn){
             $con = array(
                 'id' => $this->session->userdata('userId')
             );
             $data['user'] = $this->user->getRows($con);
             
             if(isset($_POST['submit']))
         {
         $id=$this->input->post('vendorid');
           redirect('homecontroller/orders/'.$id);  
         }
             $data['listorder'] = $this->category->listorder();
             $this->load->view('orders', $data);

         }else{
             redirect('index');
         }

         }
         
         
          public function offlineorders(){


         $data = array();
         if($this->isUserLoggedIn){
             $con = array(
                 'id' => $this->session->userdata('userId')
             );
             $data['user'] = $this->user->getRows($con);
     $data['listorder'] = $this->category->listorder2();
             $this->load->view('offlineorders', $data);

         }else{
             redirect('index');
         }

         }




         public function editorder(){


           $data = array();
           if($this->isUserLoggedIn){
               $con = array(
                   'id' => $this->session->userdata('userId')
               );
               $data['user'] = $this->user->getRows($con);
                 $data['listuser'] = $this->category->listuser();
               $id =$this->uri->segment(3);
                                   $data['vals'] = $this->category->selectorder($id);
               if(isset($_POST['editorder']))
         {
         $status=$this->input->post('status');



         $data['slt']= $this->category->editorder($status,$id);
$this->load->library('phpmailer_lib');
          $mail = $this->phpmailer_lib->load();
         $mail->isSMTP();
                $mail->Host     = '';
                $mail->SMTPAuth = true;
                $mail->Username = '';
                $mail->Password = 'Olivya7788@';
                $mail->SMTPSecure = 'ssl';
                $mail->Port     = 465;

                $mail->setFrom('kashvi@vblp.co.in', 'Kashvi');
                $mail->addReplyTo('kashvi@vblp.co.in', 'Kashvi');

                // Add a recipient
                $mail->addAddress($this->input->post('useremail'));

                // Email subject
                $mail->Subject = 'JYO Rentaal Order Update for Order ID '.$this->input->post('orderid');

                // Set email format to HTML
                $mail->isHTML(true);

                // Email body content
                $mailContent = "
        <p>Hi ".$this->input->post('username')."</p>.
        <p>Your Order with Order ID ".$this->input->post('orderid')." has been ".$this->input->post('status')." by the seller. Click this link to track your order <a href='".base_url()."track'>link</a>.</p>

        <p>Thanks,</p>
        ";
                $mail->Body = $mailContent;
$mail->send();
   $this->session->set_flashdata("Successs","Order Status Updated Successfuly !");
           redirect('orders');


         }

               $this->load->view('editorder', $data);

           }else{
               redirect('index');
           }

           }



           public function featured(){


             $data = array();
             if($this->isUserLoggedIn){
                 $con = array(
                     'id' => $this->session->userdata('userId')
                 );
                 $data['user'] = $this->user->getRows($con);
           $data['listfeatured'] = $this->category->listfeatured();
                 $this->load->view('featured', $data);

             }else{
                 redirect('index');
             }

             }

             public function deletefeatured()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletefeatured($id);

                 $this->session->set_flashdata("dumbs","Deleted Successfully !");
                 redirect('featured' , 'refresh');

             }
             
               public function deactivateproject()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deactivateproject($id);

                 $this->session->set_flashdata("dumbs","Deactivated Successfully !");
                 redirect('featured' , 'refresh');

             }
             
             
              public function activateproject()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->activateproject($id);

                 $this->session->set_flashdata("dumbs","Activated Successfully !");
                 redirect('featured' , 'refresh');

             }
             
             public function deleteenquiry()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deleteenquiry($id);

                 $this->session->set_flashdata("dumbs","Deleted Successfully !");
                 redirect('enquiries' , 'refresh');

             }


             public function updateorder()
             {

               
                $status=$this->input->post('orderstatus');
                $productname=$this->input->post('productname');
                $username=$this->input->post('username');
                $useremail=$this->input->post('useremail');
                $orderid=$this->input->post('orderid');
                $pid=$this->input->post('pid');
                $data['slt']= $this->category->editorder($status,$pid);
       
       
                // $data['slt']= $this->category->editorder($status,$id);
       $this->load->library('phpmailer_lib');
                   $mail = $this->phpmailer_lib->load();
                  $mail->isSMTP();
  $mail->Host     = 'thebrandchimp.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'test@thebrandchimp.com';
            $mail->Password = 'Olivya7788@';
            $mail->SMTPSecure = 'ssl';
            $mail->Port     = 465;

            $mail->setFrom('admin@jewelit.in', 'JEWELIT');
            $mail->addReplyTo('admin@jewelit.in', 'JEWELIT');

                         // Add a recipient
                         $mail->addAddress($useremail);

                         // Email subject
                         $mail->Subject = 'Jewelit Order '.$orderid;

                         // Set email format to HTML
                         $mail->isHTML(true);

                         // Email body content
                         $mailContent = "
                 <p>Hi ".$name1."</p>
                 <p>This Is To Inform You That Your Order With Order ID <b>".$orderid."</b> Containing <b>".$productname."</b> is ".$status.".</p>

                 <p>Thanks and Regards,</p>
                 ";
                         $mail->Body = $mailContent;
                 $mail->send();
  
       
            

                 $this->session->set_flashdata("dumbs","Updated Successfully !");
                 redirect('orders' , 'refresh');

             }


   public function buyback()
             {

               
              
                
                $pid=$this->uri->segment('3');
                $data['slt']= $this->category->updatebuyback($pid);
       
       
      
            

                 $this->session->set_flashdata("Successs","Updated Successfully !");
                 redirect('orders' , 'refresh');

             }


             public function deleteproduct()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deleteproduct($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('products' , 'refresh');

             }
             
             public function deleteproject()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deleteproject($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('projects' , 'refresh');

             }
             
              public function deletehomeproject()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletehomeproject($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('homeprojects' , 'refresh');

             }
             
                public function deleteblog()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deleteblog($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('blogs' , 'refresh');

             }
             
             public function deleteprojectsite()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deleteprojectsite($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('projects' , 'refresh');

             }
             
             public function deleteprojectclient()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deleteprojectclient($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('projects' , 'refresh');

             }


             public function deletemine()
             {
               $id= $this->uri->segment('3');
               $cname=$this->uri->segment('4');
               $response=$this->category->deletemine($id,$cname);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect($_SERVER['HTTP_REFERER']);

             }

             public function deletesizes()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletesizes($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('sizes' , 'refresh');

             }


             public function deleteoccassions()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deleteoccassions($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('occassions' , 'refresh');

             }

             public function deletetype()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletetype($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('types' , 'refresh');

             }

             public function deletecategory()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletecategory($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('categories' , 'refresh');

             }
             
             
             public function deletephoto()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletephoto($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('photos' , 'refresh');

             }
             
             public function deletecoupon()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletecoupon($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('coupons' , 'refresh');

             }
             
              public function deletesliderbanner()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletesliderbanner($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('sliderbanners' , 'refresh');

             }

             public function deletecity()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletecity($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('cities' , 'refresh');

             }
             
              public function deletetoptext()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletetoptext($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('toptext' , 'refresh');

             }

             
             public function deletesubcategory()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletesubcategory($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('subcategories' , 'refresh');

             }

             public function deletesubcity()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletecity($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('cities' , 'refresh');

             }

             public function deletevendor()
             {
               $id= $this->uri->segment('3');
               $response=$this->category->deletevendor($id);

                 $this->session->set_flashdata("Successs","Deleted Successfully !");
                 redirect('vendors' , 'refresh');

             }


             public function addfeatured(){


               $data = array();
               if($this->isUserLoggedIn){
                   $con = array(
                       'id' => $this->session->userdata('userId')
                   );
                   $data['user'] = $this->user->getRows($con);
$data['listproduct'] = $this->category->listproduct();





                   $this->load->view('addfeatured', $data);

               }else{
                   redirect('index');
               }

               }

               public function setfeatured()
               {
                 $id= $this->uri->segment('3');
                 $query = $this->category->selectfeatured($id);

foreach($query as $row){
$name=$row->pname;
$sku=$row->sku;
$pid=$row->id;
$data['slt']= $this->category->setfeatured($name,$sku,$pid);

}
$this->session->set_flashdata("Successs","Successfuly SET !");
                   redirect('addfeatured' , 'refresh');

               }


               public function blog(){


                 $data = array();
                 if($this->isUserLoggedIn){
                     $con = array(
                         'id' => $this->session->userdata('userId')
                     );
                     $data['user'] = $this->user->getRows($con);
               $data['listblog'] = $this->category->listblog();
                     $this->load->view('blog', $data);

                 }else{
                     redirect('index');
                 }

                 }

               //   public function addblog(){
               //
               //
               //     $data = array();
               //     if($this->isUserLoggedIn){
               //         $con = array(
               //             'id' => $this->session->userdata('userId')
               //         );
               //         $data['user'] = $this->user->getRows($con);
               //
               //         if(isset($_POST['addblog']))
               //  {
               //
               //    if(!empty($_FILES['blogimage']['name'])){
               //        $config['upload_path'] = './uploads/blog/';
               //        $config['allowed_types'] = 'jpg|jpeg|png|gif';
               //        $config['file_name'] = $_FILES['blogimage']['name'];
               //
               //        //Load upload library and initialize configuration
               //        $this->load->library('upload',$config);
               //        $this->upload->initialize($config);
               //
               //        if($this->upload->do_upload('blogimage')){
               //            $uploadData = $this->upload->data();
               //            $picture1 = $uploadData['file_name'];
               //        }else{
               //            $picture1 = '';
               //        }
               //    }
               //    $blogimage=$picture1;
               // $blogcontent=$this->input->post('blogcontent');
               // $blogdate=$this->input->post('blogdate');
               //
               //
               //
               // $data['slt']= $this->category->addblog($blogimage,$blogcontent,$blogdate);
               // $this->session->set_flashdata("Successs","Blog Added Successfuly !");
               //
               //
               //
               //
               // }
               //
               //
               //
               //         $this->load->view('addblog', $data);
               //
               //     }else{
               //         redirect('index');
               //     }
               //
               //     }



               public function addblog(){


                $data = array();
                if($this->isUserLoggedIn){
                    $con = array(
                        'id' => $this->session->userdata('userId')
                    );
                    $data['user'] = $this->user->getRows($con);



                    if(isset($_POST['addproduct']))
             {


    


               $this->load->library('upload');
               $image = array();
               $ImageCount = count($_FILES['pimage']['name']);
               for($i = 0; $i < $ImageCount; $i++){
               $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
               $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
               $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
               $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
               $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

               // File upload configuration
               $uploadPath = './uploads/products/';
               $config['upload_path'] = $uploadPath;
               $config['allowed_types'] = 'jpg|jpeg|png|gif';

               // Load and initialize upload library
               $this->load->library('upload', $config);
               $this->upload->initialize($config);

               // Upload file to server
               if($this->upload->do_upload('file')){
               // Uploaded file data
               $imageData = $this->upload->data();
                // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                $uploadImgData[] = $imageData['file_name'];


                $data = array('upload_data' => $this->upload->data());
                               $path=$data['upload_data']['full_path'];
                               $q['name']=$data['upload_data']['file_name'];

                                $config['image_library'] = 'gd2';
                                $config['source_image']   = $path;
                                $config['maintain_ratio'] = TRUE;
                                $config['width']  = 1000;
                                $config['height'] = 1000;

                                $this->load->library('image_lib');
$this->image_lib->initialize($config);
                               $this->image_lib->resize();

                               unset($config);
                               $this->load->library('image_lib');
                               $this->image_lib->clear();




               }
               }






             
                   $blogtitle = $this->input->post('blogtitle');
                    $blogdate = $this->input->post('blogdate');
                     $blogshort = $this->input->post('blogshort');
                      $blogcontent = $this->input->post('blogcontent');
                  
                  

                  $pimage = $uploadImgData;



               $insertUserData = $this->category->addblog($pimage,$blogtitle,$blogdate,$blogshort,$blogcontent);

               if($insertUserData){
                   $this->session->set_flashdata('success_msg', 'Blog Addedd Successfuly');
               }else{
                   $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
               }

               redirect('homecontroller/blogs');


          
        }



                    $this->load->view('addblog', $data);

                }else{
                    redirect('index');
                }

                }



                  public function editblog(){


                  $data = array();
                  if($this->isUserLoggedIn){
                      $con = array(
                          'id' => $this->session->userdata('userId')
                      );
                      $data['user'] = $this->user->getRows($con);
                  
                      $id =$this->uri->segment(3);
                                          $data['vals'] = $this->category->selectblog($id);
                      if(isset($_POST['editproduct']))
               {
                 //Check whether user upload picture
                 if(!empty($_FILES['pimage']['name'])){


                   $this->load->library('upload');
                   $image = array();
                   $ImageCount = count($_FILES['pimage']['name']);
                   for($i = 0; $i < $ImageCount; $i++){
                   $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
                   $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
                   $_FILES['file']['tmp_name']   = $_FILES['pimage']['tmp_name'][$i];
                   $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
                   $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

                   // File upload configuration
                   $uploadPath = './uploads/products/';
                   $config['upload_path'] = $uploadPath;
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';

                   // Load and initialize upload library
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   // Upload file to server
                   if($this->upload->do_upload('file')){
                   // Uploaded file data
                   $imageData = $this->upload->data();
                    // $uploadImgData[$i]['image_name'] = $imageData['file_name'];
                    $uploadImgData[] = $imageData['file_name'];


                    $data = array('upload_data' => $this->upload->data());
                                   $path=$data['upload_data']['full_path'];
                                   $q['name']=$data['upload_data']['file_name'];

                                    $config['image_library'] = 'gd2';
                                    $config['source_image']   = $path;
                                    $config['maintain_ratio'] = TRUE;
                                    $config['width']  = 1000;
                                    $config['height'] = 1000;

                                    $this->load->library('image_lib');
    $this->image_lib->initialize($config);
                                   $this->image_lib->resize();

                                   unset($config);
                                   $this->load->library('image_lib');
                                   $this->image_lib->clear();




                   }
                   }
                 }



                  $blogtitle = $this->input->post('blogtitle');
                    $blogdate = $this->input->post('blogdate');
                     $blogshort = $this->input->post('blogshort');
                      $blogcontent = $this->input->post('blogcontent');

                

                     if($uploadImgData){
                        $pimage = implode(",",$uploadImgData);
                        }
                        else{
        
                          $pimage=$this->input->post('pimage1p');
                        }
                       


                 //Pass user data to model
                 $insertUserDatas = $this->category->editblog($id,$pimage,$blogtitle,$blogdate,$blogshort,$blogcontent);

                 //Storing insertion status message.
                 if($insertUserDatas){
                     $this->session->set_flashdata('success_msg', 'Blog Edited Successfuly');
                 }else{
                     $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                 }


redirect('homecontroller/blogs');

           }

                      $this->load->view('editblog', $data);

                  }else{
                      redirect('index');
                  }

                  }




                     public function admins(){


                       $data = array();
                       if($this->isUserLoggedIn){
                           $con = array(
                               'id' => $this->session->userdata('userId')
                           );
                           $data['user'] = $this->user->getRows($con);
                     $data['listadmin'] = $this->category->listadmin();
                           $this->load->view('admins', $data);

                       }else{
                           redirect('index');
                       }

                       }

                       public function addadmin(){


                         $data = array();
                         if($this->isUserLoggedIn){
                             $con = array(
                                 'id' => $this->session->userdata('userId')
                             );
                             $data['user'] = $this->user->getRows($con);

                             if(isset($_POST['addadmin']))
                      {
                     $name=$this->input->post('name');
                     $email=$this->input->post('email');
                     $password=md5($this->input->post('password'));
                     $usertype=$this->input->post('usertype');



                     $data['slt']= $this->category->addadmin($name,$email,$password,$usertype);
                     $this->session->set_flashdata("Successs","User Added Successfuly !");
  redirect('admins');
                     }



                             $this->load->view('addadmin', $data);

                         }else{
                             redirect('index');
                         }

                         }


                         public function editadmin(){


                           $data = array();
                           if($this->isUserLoggedIn){
                               $con = array(
                                   'id' => $this->session->userdata('userId')
                               );
                               $data['user'] = $this->user->getRows($con);
                               $id =$this->uri->segment(3);
                                                   $data['vals'] = $this->category->selectadmin($id);
                               if(isset($_POST['editadmin']))
                        {
                          $name=$this->input->post('name');
                          $email=$this->input->post('email');
                          $status=$this->input->post('status');
                          if($this->input->post('password')){
                          $password=md5($this->input->post('password'));
                          }
                          else{
                            $password=md5($this->input->post('password1'));
                          }
                          $usertype=$this->input->post('usertype');



                     $data['slt']= $this->category->editadmin($name,$email,$password,$usertype,$id,$status);
                     $this->session->set_flashdata("Successs","Admin Edited Successfuly !");

                           redirect('admins');


                     }

                               $this->load->view('editadmin', $data);

                           }else{
                               redirect('index');
                           }

                           }






                           public function vieworder(){


                             $data = array();
                             if($this->isUserLoggedIn){
                                 $con = array(
                                     'id' => $this->session->userdata('userId')
                                 );
                                 $data['user'] = $this->user->getRows($con);
                                 $orderid=$this->uri->segment(3);
                           $data['vieworder'] = $this->category->vieworder($orderid);
                                 $this->load->view('vieworder', $data);

                             }else{
                                 redirect('index');
                             }

                             }



                             public function offers(){


                               $data = array();
                               if($this->isUserLoggedIn){
                                   $con = array(
                                       'id' => $this->session->userdata('userId')
                                   );
                                   $data['user'] = $this->user->getRows($con);
                       $data['listoffers'] = $this->category->listoffers();
                                   $this->load->view('offers', $data);

                               }else{
                                   redirect('index');
                               }

                               }


                               public function statusapi(){


                                 $data = array();

                                 if($this->isUserLoggedIn){
                                     $con = array(
                                         'id' => $this->session->userdata('userId')
                                     );
                                     $data['user'] = $this->user->getRows($con);
                                     $data['orderid1'] =$this->uri->segment(3);
                         $data['listoffers'] = $this->category->listoffers();
                                     $this->load->view('statusapi', $data);

                                 }else{
                                     redirect('index');
                                 }

                                 }
                               public function addoffer(){


                                 $data = array();
                                 if($this->isUserLoggedIn){
                                     $con = array(
                                         'id' => $this->session->userdata('userId')
                                     );
                                     $data['user'] = $this->user->getRows($con);
                                     if(isset($_POST['addoffer']))
                              {
                                //Check whether user upload picture
                                if(!empty($_FILES['pimage']['name'])){
                                    $config['upload_path'] = './uploads/offers/';
                                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                    $config['file_name'] = $_FILES['pimage']['name'];

                                    //Load upload library and initialize configuration
                                    $this->load->library('upload',$config);
                                    $this->upload->initialize($config);

                                    if($this->upload->do_upload('pimage')){
                                        $uploadData = $this->upload->data();
                                        $picture = $uploadData['file_name'];
                                    }else{
                                        $picture = '';
                                    }
                                }





                                    $name = $this->input->post('name');
                                    $url = $this->input->post('url');

                                    $pimage = $picture;



                                //Pass user data to model
                                $insertUserData = $this->category->editoffer($name,$url,$pimage);

                                //Storing insertion status message.
                                if($insertUserData){
                                    $this->session->set_flashdata('success_msg', 'Banner Addedd Successfuly');
                                }else{
                                    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                                }


                           }



                                     $this->load->view('addoffer', $data);

                                 }else{
                                     redirect('index');
                                 }

                                 }



                                 public function editoffer(){


                                   $data = array();
                                   if($this->isUserLoggedIn){
                                       $con = array(
                                           'id' => $this->session->userdata('userId')
                                       );
                                       $data['user'] = $this->user->getRows($con);
                                       $data['vals'] = $this->category->listoffers();
                                       if(isset($_POST['editoffer']))
                                 {
                                  //Check whether user upload picture
                                  if(!empty($_FILES['pimage']['name'])){
                                      $config['upload_path'] = './uploads/offers/';
                                      $config['allowed_types'] = 'jpg|jpeg|png|gif';
                                      $config['file_name'] = $_FILES['pimage']['name'];

                                      //Load upload library and initialize configuration
                                      $this->load->library('upload',$config);
                                      $this->upload->initialize($config);

                                      if($this->upload->do_upload('pimage')){
                                          $uploadData = $this->upload->data();
                                          $picture = $uploadData['file_name'];
                                      }else{
                                          $picture = '';
                                      }
                                  }





                                      $name = $this->input->post('name');
                                      $url = $this->input->post('url');

                                      if(empty($_FILES['pimage']['name'])){$pimage = $this->input->post('pimage1p');} else{$pimage = $picture;}



                                  //Pass user data to model
                                  $insertUserData = $this->category->editoffer($name,$url,$pimage);

                                  //Storing insertion status message.
                                  if($insertUserData){
                                      $this->session->set_flashdata('success_msg', 'Banner Edited Successfuly');
                                      redirect('offers');
                                  }else{
                                      $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                                  }


                                 }



                                       $this->load->view('editoffer', $data);

                                   }else{
                                       redirect('index');
                                   }

                                   }


                                   public function addbulkproducts(){


                                     $data = array();
                                     if($this->isUserLoggedIn){
                                         $con = array(
                                             'id' => $this->session->userdata('userId')
                                         );
                                         $data['user'] = $this->user->getRows($con);
                               $data['listcategory'] = $this->category->listcategory();
                                         if(isset($_POST['addproduct']))
                                  {
                                    //Check whether user upload picture

                                    $cname = $this->input->post('cname');
                                    $sname = $this->input->post('sname');



foreach($this->input->post('pname') as $row =>$value)  {




  $this->load->library('upload');
  $image = array();
  // $ImageCount = count($_FILES['pimage']['name']);
  // for($i = 0; $i < $ImageCount; $i++){
  // $_FILES['file']['name']       = $_FILES['pimage']['name'][$i];
  // $_FILES['file']['type']       = $_FILES['pimage']['type'][$i];
  // $_FILES['file']['tmp_name']   = $_FIL5rES['pimage']['tmp_name'][$i];
  // $_FILES['file']['error']      = $_FILES['pimage']['error'][$i];
  // $_FILES['file']['size']       = $_FILES['pimage']['size'][$i];

  $file_input_name = 'pimage' . $row;


$uploadImgData = [];
if (isset($_FILES[$file_input_name])) {

$ImageCount = count($_FILES[$file_input_name]['name']);
for ($i = 0; $i < $ImageCount; $i++) {
$_FILES['file']['name'] = $_FILES[$file_input_name]['name'][$i];
$_FILES['file']['type'] = $_FILES[$file_input_name]['type'][$i];
$_FILES['file']['tmp_name'] = $_FILES[$file_input_name]['tmp_name'][$i];
$_FILES['file']['error'] = $_FILES[$file_input_name]['error'][$i];
$_FILES['file']['size'] = $_FILES[$file_input_name]['size'][$i];

$uploadPath = './uploads/products/';
$config['upload_path'] = $uploadPath;
$config['allowed_types'] = 'jpg|jpeg|png|gif';
$this->load->library('upload', $config);
$this->upload->initialize($config);

if ($this->upload->do_upload('file')) {
$imageData = $this->upload->data();
$uploadImgData[] = $imageData['file_name'];
}
}
}                           $pname = $this->input->post('pname')[$row];
                                        $pprice = $this->input->post('pprice')[$row];
                                        $status = $this->input->post('status')[$row];

                                        $xssize = $this->input->post('xssize')[$row];
                                        $ssize = $this->input->post('ssize')[$row];
                                        $msize = $this->input->post('msize')[$row];
                                        $lsize = $this->input->post('lsize')[$row];
                                        $xlsize = $this->input->post('xlsize')[$row];
                                        $xxlsize = $this->input->post('xxlsize')[$row];
                                        $xl3size = $this->input->post('3xlsize')[$row];
                                        $description = $this->input->post('description')[$row];
                                        $material = $this->input->post('material')[$row];
                                        $sku = $this->input->post('sku')[$row];
                                        $pincode = $this->input->post('pincode')[$row];
                                        $brandname = $this->input->post('brandname')[$row];
                                        $offerprice = $this->input->post('offerprice')[$row];
                                        $pimage = $uploadImgData;


                                    $insertUserData = $this->category->addbulkproducts($pname,$pprice,$pimage,$status,$cname,$sname,$xssize,$ssize,$msize,$lsize,$xlsize,$xxlsize,$xl3size,$description,$material,$sku,$pincode,$brandname,$offerprice);

}

                                    if($insertUserData){
                                        $this->session->set_flashdata('success_msg', 'Products Addedd Successfuly');
                                    }else{
                                        $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
                                    }


                               }



                                         $this->load->view('addbulkproducts', $data);

                                     }else{
                                         redirect('index');
                                     }

                                     }





                                     public function invoice(){


                                       $data = array();
                                       if($this->isUserLoggedIn){
                                           $con = array(
                                               'id' => $this->session->userdata('userId')
                                           );
                                           $data['user'] = $this->user->getRows($con);
                                           $orderid =$this->uri->segment(3);
                                                               $data['vals'] = $this->category->selectorderid($orderid);
                                           if(isset($_POST['editcategory']))
                                    {
                                   $name=$this->input->post('name');
                                   $status=$this->input->post('status');



                                   $data['slt']= $this->category->editcategory($name,$status,$id);
                                   $this->session->set_flashdata("Successs","Category Edited Successfuly !");

                                       redirect('categories');


                                   }

                                           $this->load->view('invoice', $data);

                                       }else{
                                           redirect('index');
                                       }

                                       }




}
