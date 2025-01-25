<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RandomNumberController extends AbstractController
{
    #[Route('/random', name: 'api_random_number', methods: ['GET'])]
    public function random(): JsonResponse
    {
        $randomNumber = random_int(1, 100);
        return $this->json([
            'success' => true,
            'data' => [
                'randomNumber' => $randomNumber
            ]
        ]);
    }
}
