<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    } 
    #[Route('/showStudent/{name}',name:'show_studednt')]
    public function showStudentWithName($name){
    return new Response ('Bonjour'.$name);
}
    #[Route('/showStudentTwig',name:'show_studednt_Twig')]
    public function showTWIG(){
        $title='List of students';
        $students= array(
       array('id'=>1,'name'=>'student 1','nb_class'=>4),
        array('id'=>2,'name'=>'student 2','nb_class'=>7),
       array('id'=>3,'name'=>'student 3','nb_class'=>6),
        );
        return $this->render ('student/show.html.twig',['t'=>$title,'tt'=>$students]);
    }


}
