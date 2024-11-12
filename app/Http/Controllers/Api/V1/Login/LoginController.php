<?php

namespace App\Http\Controllers\Api\V1\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\Login\LoginRepository;
use App\Http\Resources\Api\V1\Login\LoginResource;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected LoginRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return new LoginResource($this->repository->login($request->all()));
    }
}
