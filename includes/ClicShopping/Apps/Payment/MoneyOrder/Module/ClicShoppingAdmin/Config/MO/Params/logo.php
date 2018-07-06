<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse

   */

  namespace ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\MO\Params;

  class logo extends \ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\ConfigParamAbstract {
    public $default = 'cheque.gif';
    public $sort_order = 30;

    protected function init() {
      $this->title = $this->app->getDef('cfg_moneyorder_title');
      $this->description = $this->app->getDef('cfg_moneyorder_desc');
    }
  }
