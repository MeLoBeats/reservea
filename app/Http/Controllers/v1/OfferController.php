<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Query\QueryBuilder;
use App\Http\Resources\v1\OfferCollection;
use App\Http\Resources\v1\OfferResource;
use App\Models\Offer;
use App\Repository\V1\OfferRepository;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    public function __construct(
        private OfferRepository $repo,
        private QueryBuilder $queryBuilder
    ) {
        $this->repo = new OfferRepository();
        $this->queryBuilder = new QueryBuilder();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queries = $this->queryBuilder->resolve(request()->query());
        $offers = $this->repo->getAll($queries);
        return new OfferCollection($offers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        $queries = request()->query();
        $offer->load($queries['with'] ?? []);
        return new OfferResource($offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
