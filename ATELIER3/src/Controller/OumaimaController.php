<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OumaimaController extends AbstractController
{
    #[Route('/oumaima', name: 'app_oumaima')]
    public function index(): Response
    {
    return new Response ("Bonjour");
        
    }
     public function showoumaimaWithName($name){
        return new Response ('Bonjour',);
     }
     public function showstudent(){
        return new Response ("show student");
     }
     #[Route('/showstudent/{name}',name:'show_student')]
     public function showstudentWithName($name){
        return new Response ('Bonjour'.$name);
     }

}
