<?php


// src/Controller/AboutController.php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;




class AboutController
{
   #[Route('/about')]
   public function about(): Response
   {
       return new Response(
           'Créé par moi-même'
       );
   }
   #[Route('/date')]
   public function date(): Response
   {
       return new Response(
           date('Y-m-d H:i:s')
       );
   }
   #[Route('/user', name: 'app_user')]
   public function unControleur(Request $requete) {
       $nom = $requete->get('name');
       return new Response(
           $nom
       );


   }
}
?>
