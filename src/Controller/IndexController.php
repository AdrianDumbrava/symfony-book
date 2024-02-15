<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route(path: '/foo', name: 'foo')]
    public function test(): Response
    {
        $bar = 'bar';

        return $this->render('test.html.twig', [
            'bar' => $bar,
        ]);
    }
}