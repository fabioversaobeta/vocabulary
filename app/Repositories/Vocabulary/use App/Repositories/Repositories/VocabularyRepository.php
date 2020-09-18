<?php

namespace App\Repositories\Vocabulary;

use App\Repositories\Vocabulary\VocabularyRepositoryInterface;
use App\Models\Vocabulary;

class VocabularyRepository implements VocabularyRepositoryInterface
{
    protected $vocabulary;

    public function __construct(Vocabulary $vocabulary)
    {
        $this->vocabulary = $vocabulary;
    }

    public function all()
    {
        $model = Vocabulary::all();

        return $model;
    }

    public function save($english, $portuguese)
    {
        $model = new Vocabulary();

        $model->english = $english;
        $model->portuguese = $portuguese;

        if ($model->save()) {
            return $model;
        }

        return false;
    }

    public function random()
    {
        $count = Vocabulary::all()->count();

        if ($count > 0) {
            return Vocabulary::inRandomOrder()->first();
        }

        return false;
    }
}
