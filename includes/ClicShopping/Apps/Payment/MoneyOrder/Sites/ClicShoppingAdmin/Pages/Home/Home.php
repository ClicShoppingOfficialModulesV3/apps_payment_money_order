<?php
/*
 * Home.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

*/

  namespace ClicShopping\Apps\Payment\MoneyOrder\Sites\ClicShoppingAdmin\Pages\Home;

  use ClicShopping\OM\Registry;

  use ClicShopping\Apps\Payment\MoneyOrder\MoneyOrder;

  class Home extends \ClicShopping\OM\PagesAbstract {
    public $app;

    protected function init() {
      $CLICSHOPPING_MoneyOrder = new MoneyOrder();
      Registry::set('MoneyOrder', $CLICSHOPPING_MoneyOrder);

      $this->app = $CLICSHOPPING_MoneyOrder;

      $this->app->loadDefinitions('Sites/ClicShoppingAdmin/main');
    }
  }
