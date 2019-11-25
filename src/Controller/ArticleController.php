<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {


    /**
     * @Route("/twig_article", name="twig_article")
     */


    public function twigArticle()
    {
        $title='Alliance Devis Travaux';
        $content='Le Lorem Ipsum est simplement du faux texte employé dans la composition 
        et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de
         l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble 
         des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
         Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique 
         informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans 
         les années 1960 grâce à la vente de feuilles Letraset contenant des passages du 
         Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise 
         en page de texte, comme Aldus PageMaker.';

        $sidebar= true;
        $tags=['Accueil','Contact'];

        return $this->render('article.html.twig', [
            'title' => $title,
            'content' => $content,
            'sidebar' => $sidebar,
            'tags' => $tags

        ]);


    }

}