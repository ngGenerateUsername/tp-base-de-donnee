<?php
include 'connect.class.php';
 class Etudiant{
     private $cnx;
     public function __construct(){
         $bd=new BdConnect;
         $this->cnx = $bd->connectdb();
         
     }
   public function getAall(){
       try {
           $req ='SELECT * FROM students';
           $result = $this->cnx->prepare($req);
           $result->execute();
           return $result;
       } catch (Exception $e) {
           echo $e->getMessage();
        
       }
   }
   public function delete($id){
       try {
           $req='DELETE FROM students where id=:id';
           $result=$this->cnx->prepare($req);
           $result->bindParam(':id',$id);
           $result->execute();
           return $result;
       } catch (Exception $e) {
           echo $e->getMessage();
       }
   }
   public function insert($nom,$prenom,$email,$phone){
       $req="INSERT into students(firstname, lastname, email, phone) values (:nom, :prenom, :email, :phone)";
       $result=$this->cnx->prepare($req);
       $result->bindParam(':nom',$nom);        
       $result->bindParam(':prenom',$prenom);        
       $result->bindParam(':email',$email);        
       $result->bindParam(':phone',$phone);
       $result->execute();
       return $result;        
  

   }
   public function getById($id){
       $req = "SELECT * FROM students where id=:id";
       $result=$this->cnx->prepare($req);
       $result->bindParam(':id',$id);
       $result->execute();
       return $result;

   }
   public function update($id,$firstname,$lastname,$email,$phone){
       $req = "UPDATE students SET firstname ='$firstname', lastname = '$lastname', email = '$email', phone = '$phone ' WHERE id = '$id'";
       $result=$this->cnx->prepare($req);
       $result->execute();
       return $result;
   }
 }

?>