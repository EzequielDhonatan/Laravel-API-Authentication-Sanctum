<?php

namespace App\Http\Controllers\Api\V1\Me;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\Me\MeRepository;
use App\Http\Resources\Api\V1\Me\MeResource;

class MeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected MeRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return new MeResource($this->repository->me());
    }
}
