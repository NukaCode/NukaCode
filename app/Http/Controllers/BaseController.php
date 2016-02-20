<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use NukaCode\Core\Controllers\BaseController as CoreBaseController;
use NukaCode\Menu\DropDown;
use NukaCode\Menu\Link;

abstract class BaseController extends CoreBaseController
{
    use DispatchesJobs, ValidatesRequests, AuthorizesRequests;

    public function __construct()
    {
        parent::__construct();

        $this->setLeftMenu();
        $this->setRightMenu();
    }

    protected function setPageTitle($pageTitle)
    {
        $this->setViewData(compact('pageTitle'));
    }

    private function setLeftMenu()
    {
        $leftMenu = \Menu::getMenu('leftMenu');

        $leftMenu->link('home', function (Link $link) {
            $link->name = 'Home';
            $link->url  = route('home');
        });
    }

    private function setRightMenu()
    {
        $rightMenu = \Menu::getMenu('rightMenu');
    }
}
