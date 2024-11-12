<?php

namespace App\Http\Controllers\Api\V1\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\Register\RegisterRepository;
use App\Http\Resources\Api\V1\Register\RegisterResource;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected RegisterRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return new RegisterResource($this->repository->register($request->all()));
    }
}
