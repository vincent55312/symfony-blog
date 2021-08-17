<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="liste_articles", methods={"GET"})
     */
    public function listeArticles(): Response
    {
        $url1 = $this->generateUrl('vue_article', ['id' => 1]);
        $url2 = $this->generateUrl('vue_article', ['id' => 2]);
        $url3 = $this->generateUrl('vue_article', ['id' => 3]);

        return new Response("<ul>
        <li><a href='" . $url1 . "'>Article 1 </li>
        <li><a href='" . $url2 . "'>Article 2 </li>
        <li><a href='" . $url3 . "'>Article 3 </li>
        </ul>");
    }

    /**
     * @Route("/{id}", name="vue_article", requirements={"id"="\d+"}, methods={"GET", "POST"})
     */
    public function vueArticle($id)
    {
        return new Response("<h1> Article " . $id . " <br> Ceci est le contenu de l'article");
    }
}
