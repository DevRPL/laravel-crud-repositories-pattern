<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Services\Contracts\DepertementServiceContract;

class DepertementComposer
{
    /**
     * @var depertementServiceContract
     */
    protected $depertement;

    /**
     * Constructor.
     *
     * @param
     */
    public function __construct(DepertementServiceContract $depertement)
    {
        $this->depertement = $depertement;
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $depertements = $this->depertement->all();
        $view->with('depertements', $depertements);
    }
}
