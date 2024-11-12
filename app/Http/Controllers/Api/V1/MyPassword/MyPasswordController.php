<?php

namespace App\Http\Controllers\Api\V1\MyPassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\MyPassword\MyPasswordRepository;

class MyPasswordController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected MyPasswordRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $this->repository->update($request);
    }
}
