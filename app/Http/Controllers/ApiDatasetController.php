<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ApiDatasetController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'dataset' => ['required', 'max:255'],
            'label' => ['nullable', 'max:10'],
            'value' => ['required', 'numeric']
        ]);

        $dataset = Dataset::where('name', $request->get('dataset'))->first();

        if($dataset === null){
            $dataset = Dataset::create(['name' => $request->get('dataset')]);
        }

        $value = $dataset->values()->create($request->all());

        return $value;
    }
}
