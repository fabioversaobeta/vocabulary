<?php

namespace App\Services\Vocabulary;

use App\Repositories\Vocabulary\VocabularyRepositoryInterface;

class CreateVocabularyService
{
    protected $vocabulary;

    public function __construct(VocabularyRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createVocabulary($vocabulary)
    {
        $english = $vocabulary['english'];
        $portuguese = $vocabulary['portuguese'];

        $createdVocabulary = $this->repository->save($english, $portuguese);

        if (!$createdVocabulary) {
            throw new Exception("Falha ao criar vocabulario", 1);
        }

        return $createdVocabulary;
    }
}
