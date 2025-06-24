<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTerrainRequest;
use App\Http\Requests\UpdateTerrainRequest;

class TerrainController extends Controller
{
    public function __construct()
    {
        // Automatically apply TerrainPolicy to all resource methods
        $this->authorizeResource(Terrain::class, 'terrain');
    }

    public function index()
    {
        return Terrain::all();
    }

  public function store(StoreTerrainRequest $request)
{
    $data = $request->validated();
    $data['owner_id'] = $request->user()->id; 

    $terrain = Terrain::create($data);

    return response()->json([
        'message' => 'Created successfully',
        'data' => $terrain
    ], 201);
}


    public function show(Terrain $terrain)
    {
        return $terrain;
    }

    public function update(UpdateTerrainRequest $request, Terrain $terrain)
    {
        $terrain->update($request->validated());
        return response()->json([
            'message' => 'Updated successfully',
            'data' => $terrain
        ]);
    }

    public function destroy(Terrain $terrain)
    {
        $terrain->delete();
        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}
