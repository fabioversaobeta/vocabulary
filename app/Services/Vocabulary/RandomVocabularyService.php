<?php

namespace App\Services\Vocabulary;

use App\Repositories\Vocabulary\VocabularyRepositoryInterface;

class RandomVocabularyService
{
    protected $repository;

    public function __construct(VocabularyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function randomVocabulary()
    {
        $vocabulary = $repository->random();

        if (!$vocabulary) {
            throw new Exception("Erro ao buscar um vocabulario aleatório", 1);
        }

        return $vocabulary;
    }
}
