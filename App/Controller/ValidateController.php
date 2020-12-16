<?php


require_once 'App/Controller/UserController.php';

Class ValidateController{

    public function signup(){
        if(isset($_POST['action'])){
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = MD5($_POST['password']);
                $nivel = $_POST['nivel'];
        
                $name = strtolower($name);
                $email = strtolower($email);
        
                //echo 'signup';


                $signup = new Users;
                $signup->signupUser($name, $email, $password, $nivel);
        
            } else {
                //header('location:./View/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
                header('location:?page=home&parameter=Não foi possivel se cadastrar. Por favor, tente novamente.');
            }
        } else {
            //header('location:./View/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
            header('location:?page=home&parameter=Não foi possivel se cadastrar. Por favor, tente novamente.');
        }
    }

    
    public function login(){
        if(isset($_POST['action'])){
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = MD5($_POST['password']);
                $nivel = $_POST['nivel'];
        
                $name = strtolower($name);
                $email = strtolower($email);
        
                $signup = new Users;
                $signup->LoginUser($name, $email, $password, $nivel);
                
        
            } else {
                header('location:./View/page-login.php?message=Não foi possivel realizar login. Por favor, tente novamente.');
            }
        } else {
            header('location:./View/page-login.php?message=Não foi possivel realizar login. Por favor, tente novamente.');
        }
    }
    
    public function logout(){
        $logout = new Users;
        $logout->LogoutUser();
    }

    public function AddProduct(){
        if(isset($_POST['action'])){
            if(!empty($_POST['name'])){
                $productName = $_POST['name'];
                $address = $_POST['address'];
                $value = $_POST['value'];
                $phone = $_POST['phone'];
                $fileFormat = array('png', 'jpeg', 'jpg');
                $extention = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                
                
                if(in_array($extention, $fileFormat)){
                    $folder = "assets/";
                    $fileName = $_FILES['file']['tmp_name'];
                    $newFileName = uniqid().".$extention";

                    if(move_uploaded_file($fileName, $folder.$newFileName)){
                    
                    strtolower($productName);
                    strtolower($address);
                    
                    

                    $add = new Users;
                    $add->AddProduct($productName, $newFileName, $address, $phone, $value);
                        
                    }
                    
                } else {
                    header('location:./View/add.php?message=Imagem inválida. Por favor, tente novamente.');
                }

                //$name = strtolower($name);

                //$add = new Users;
                //$add->AddProduct($name);
            }else {
                header('location:./View/add.php?message=Não foi possivel adicionar produto. Por favor, tente novamente.');
            }
        }else {
            header('location:./View/add.php?message=Não foi possivel adicionar produto. Por favor, tente novamente.');
        }
    }

    public function Rent(){
        if(isset($_POST['action'])){
            $id = $_POST['id'];
            
            //echo $id;
            
            $status = 2;
            $rent = new Users;
            $rent->RentProduct($id, $status); 
        }
    }

    public function Disponibilize(){
        $status = 1;
        $disponibilize = new Users;
        $disponibilize->DisponibilizeProduct($status); 
    }
}
