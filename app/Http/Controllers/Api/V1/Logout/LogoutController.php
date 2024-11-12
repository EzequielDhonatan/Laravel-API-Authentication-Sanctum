<?php

namespace App\Http\Controllers\Api\V1\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\Logout\LogoutRepository;

class LogoutController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected LogoutRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $this->repository->logout();
    }
}
