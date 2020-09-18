<?php

namespace App\Repositories\Vocabulary;

interface VocabularyRepositoryInterface
{
    public function all();

    public function random();

    public function save($english, $portuguese);
}
