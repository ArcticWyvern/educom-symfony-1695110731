<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Psr\Log\LoggerInterface;

#[Route('/blog')]
class BlogController extends BaseController
{
    #[Route('/', name: 'app_blog')]
    #[Template()]
    public function index()
    {
        return ['controller_name' => 'BlogController'];
    }

    #[Route('/show/{id}', name: 'blog_show')]
    public function show($id = 1) {
        $this->log("info Message from extended BaseController", "info");
        dd($id);
    }

    /*
    #[Route('/show/{id}',name:"blog_show")]
    public function show(LoggerInterface $logger, $id = 1) {

        $logger->info("info Message");
        $logger->warning("Warning Message");
        $logger->error("De waarde van id is: $id");

        dd($id);
    }
    

    #[Route('/{page<\d+>}', name: 'blog_list' , requirements: ['page' => '/d+']  )]
    public function list($page){
        $message = "You are viewing page $page of the blog list.";
        return new Response($message);
    }

    #[Route('/{slug}', name: 'blog_show')]
    public function show($slug) {
        $confirmationMessage = "This is the blog page for non-digits: $slug";
        return new Response($confirmationMessage);
    }
    */
}
