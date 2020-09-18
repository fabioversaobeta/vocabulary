<?php

namespace App\Services\Vocabulary;

use App\Repositories\Vocabulary\VocabularyRepositoryInterface;
use Exception;

class ShowVocabulariesService
{
    protected $vocabularyRepository;

    public function __construct(VocabularyRepositoryInterface $vocabularyRepository)
    {
        $this->vocabularyRepository = $vocabularyRepository;
    }

    public function showVocabularies() {
        $vocabularies = $this->vocabularyRepository->all();

        return $vocabularies;
    }
}
