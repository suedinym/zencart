<?php
/**
 * @copyright Copyright 2003-2017 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:  New in v1.6.0 $
 */
namespace App\Controllers;

/**
 * Class AbstractInfoController
 * @package App\Controllers
 */
abstract class AbstractInfoController extends AbstractAdminController
{
    /**
     * @var string
     */
    public $mainTemplate = 'tplAdminInfo.php';
}
