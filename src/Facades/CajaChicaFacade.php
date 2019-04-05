<?php
namespace augustogany\caja\Facades;
use Illuminate\Support\Facades\Facade;
/**
 * Class ShoppingCartFacade
 * @package LaraShout\ShoppingCart
 */
class CajaChicaFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'caja chica';
    }
}