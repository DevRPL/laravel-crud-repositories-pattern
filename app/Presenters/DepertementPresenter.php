<?php

namespace App\Presenters;

use App\Transformers\DepertementTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class DepertementPresenter.
 *
 * @package namespace App\Presenters;
 */
class DepertementPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new DepertementTransformer();
    }
}
