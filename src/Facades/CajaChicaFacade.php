<?php
namespace augustogany\caja\Facades;
use Illuminate\Support\Facades\Facade;
/**
 * Class CajaChicaFacade
 * @package augustogany\caja
 */
class CajaChicaFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cajachica';
    }
}