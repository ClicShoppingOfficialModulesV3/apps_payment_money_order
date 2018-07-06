<?php
/*
 * sort_order.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

*/

  namespace ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\MO\Params;

  class sort_order extends \ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\ConfigParamAbstract {

    public $sort_order = 1000;
    public $default = '300';
    public $app_configured = true;

    protected function init() {
        $this->title = $this->app->getDef('cfg_moneyorder_sort_order_title');
        $this->description = $this->app->getDef('cfg_moneyorder_sort_order_description');
    }
  }
