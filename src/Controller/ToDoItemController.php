<?php


namespace App\Controller;


use App\Repository\ToDoItemRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ToDoItemController {

    /**
     * @var ToDoItemRepository $todoitemRepository
     */
    private ToDoItemRepository $todoitemRepository;

    public function __construct(ToDoItemRepository $toDoItemRepository) {
        $this->todoitemRepository = $toDoItemRepository;
    }

    /**
     * @Route("/todos", methods={"GET"})
     * @return JsonResponse
     */
    public function getAllToDoItems(): JsonResponse {
        return new JsonResponse($this->todoitemRepository->findAll());
    }
}