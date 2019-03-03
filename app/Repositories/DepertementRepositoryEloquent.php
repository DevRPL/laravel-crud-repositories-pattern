<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DepertementRepository;
use App\Entities\Depertement;
use App\Validators\DepertementValidator;

/**
 * Class DepertementRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DepertementRepositoryEloquent extends BaseRepository implements DepertementRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Depertement::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return DepertementValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
