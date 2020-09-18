<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Vocabulary\ShowVocabulariesService;
use App\Services\Vocabulary\CreateVocabularyService;
use App\Services\Vocabulary\RandomVocabularyService;

class VocabularyController extends Controller
{
    public function __construct(
        ShowVocabulariesService $showService,
        CreateVocabularyService $createService,
        RandomVocabularyService $randomService
    )
    {
        $this->showService = $showService;
        $this->createService = $createService;
        $this->randomService = $randomService;
    }

    public function show()
    {
        $data = $this->showService->showVocabularies();

        return response(json_encode($data), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'english' => 'required',
            'portuguese' => 'required'
        ]);

        $vocabulary = $request->all();

        $data = $this->createService->createVocabulary($vocabulary);

        return response(json_encode($data), 201);
    }

    public function random()
    {
        $data = $this->randomService->randomVocabulary();

        return response(json_encode($data), 200);
    }
}
