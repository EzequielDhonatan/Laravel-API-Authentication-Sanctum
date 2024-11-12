<?php

namespace App\Http\Controllers\Api\V1\ResetPassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\ResetPassword\ResetPasswordRepository;
use App\Http\Resources\Api\V1\ResetPassword\ResetPasswordResource;

class ResetPasswordController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected ResetPasswordRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return $this->repository->resetPassword($request);
    }
}
