<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Main;

class MainController extends AbstractController
{
    #[Route('/main/{template_name}', name: 'main')]

    public function index($template_name): Response
    {
        if($template_name !== Main::END_GAME_TEMPLATE && $template_name !== Main::NOBLE_CHAIRS){
            die($template_name .' route Not Found');
        }
        $twig_file_name = $template_name === Main::END_GAME_TEMPLATE ? 'main/endgame.html.twig' : 'main/index.html.twig';
        return $this->render($twig_file_name, [
            'controller_name' => 'MainController',
            'template' => $template_name,
            'end_game_template' => Main::END_GAME_TEMPLATE,
            'noble_chair_template' => Main::NOBLE_CHAIRS,
        ]);
    }
}
