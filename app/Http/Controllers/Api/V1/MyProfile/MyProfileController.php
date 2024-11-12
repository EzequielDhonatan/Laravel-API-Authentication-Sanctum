<?php

namespace App\Http\Controllers\Api\V1\MyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\MyProfile\MyProfileRepository;
use App\Http\Resources\Api\V1\MyProfile\MyProfileResource;

class MyProfileController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected MyProfileRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return new MyProfileResource($this->repository->update($request->all()));
    }
}
