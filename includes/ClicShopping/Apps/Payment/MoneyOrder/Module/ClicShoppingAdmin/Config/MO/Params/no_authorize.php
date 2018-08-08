<?php
  /**
   *
   * @copyright Copyright 2008 - http://www.innov-concept.com
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @license GPL 2 License & MIT Licencse
   
   */

namespace ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\MO\Params;

use ClicShopping\OM\HTML;

class no_authorize extends \ClicShopping\Apps\Payment\MoneyOrder\Module\ClicShoppingAdmin\Config\ConfigParamAbstract
{
    public $default = 'True';
    public $sort_order = 20;

    protected function init()
    {
        $this->title = $this->app->getDef('cfg_moneyorder_no_authorize_title');
        $this->description = $this->app->getDef('cfg_moneyorder_no_authorize_desc');
    }

    public function getInputField()  {
      $value = $this->getInputValue();

      $input =  HTML::radioField($this->key, 'True', $value, 'id="' . $this->key . '1" autocomplete="off"') . $this->app->getDef('cfg_moneyorder_no_authorize_true') . '<br /> ';
      $input .=  HTML::radioField($this->key, 'False', $value, 'id="' . $this->key . '0" autocomplete="off"') . $this->app->getDef('cfg_moneyorder_no_authorize_false') . '<br />';

      return $input;
    }
}