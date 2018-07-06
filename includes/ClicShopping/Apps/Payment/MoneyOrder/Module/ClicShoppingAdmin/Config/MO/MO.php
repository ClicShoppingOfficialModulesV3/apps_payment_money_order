<?php
/*
 * Config.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse
 
*/

  namespace ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\MO;

  class MO extends \ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\ConfigAbstract {

    protected $pm_code = 'MoneyOrder';

    public $is_uninstallable = true;
    public $sort_order = 400;

    protected function init() {
        $this->title = $this->app->getDef('module_moneyorder_title');
        $this->short_title = $this->app->getDef('module_moneyorder_short_title');
        $this->introduction = $this->app->getDef('module_moneyorder_introduction');
        $this->is_installed = defined('CLICSHOPPING_APP_MONEYORDER_MO_STATUS') && (trim(CLICSHOPPING_APP_MONEYORDER_MO_STATUS) != '');
    }

    public function install() {
      parent::install();

      if (defined('MODULE_PAYMENT_INSTALLED')) {
        $installed = explode(';', MODULE_PAYMENT_INSTALLED);
      }

      $installed[] = $this->app->vendor . '\\' . $this->app->code . '\\' . $this->code;

      $this->app->saveCfgParam('MODULE_PAYMENT_INSTALLED', implode(';', $installed));
    }

    public function uninstall() {
      parent::uninstall();

      $installed = explode(';', MODULE_PAYMENT_INSTALLED);
      $installed_pos = array_search($this->app->vendor . '\\' . $this->app->code . '\\' . $this->code, $installed);

      if ($installed_pos !== false) {
        unset($installed[$installed_pos]);

        $this->app->saveCfgParam('MODULE_PAYMENT_INSTALLED', implode(';', $installed));
      }
    }
  }