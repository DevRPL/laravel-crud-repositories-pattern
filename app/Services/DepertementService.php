<?php

namespace App\Services;

use App\Services\Contracts\DepertementServiceContract;
use App\Repositories\DepertementRepository;

class DepertementService implements DepertementServiceContract
{
    protected $depertement;

    public function __construct(DepertementRepository $depertement)
    {
        $this->depertement = $depertement;
    }

    public function all($columns = ['*'])
    {
        return $this->depertement->all();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->depertement->find($id);
    }

    public function create(array $attributes)
    {
        return $this->depertement->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->depertement->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->depertement->find($id)->update($attributes);
    }
}
