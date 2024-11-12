<?php

namespace App\Http\Controllers\Api\V1\MyData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Api\V1\MyData\MyDataRepository;
use App\Http\Resources\Api\V1\MyData\MyDataResource;

class MyDataController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected MyDataRepository $repository,
    ) {
        $this->repository = $repository;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return new MyDataResource($this->repository->myData());
    }
}
