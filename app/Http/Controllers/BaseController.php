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
        $this->addDefaultJavascript();

        parent::__construct();
    }

    protected function setPageTitle($pageTitle)
    {
        $this->setViewData(compact('pageTitle'));
    }

    protected function addDefaultJavascript()
    {
        $this->setJavascriptData('csrfToken', csrf_token());
        $this->setJavascriptData('activeUser', auth()->user());
    }
}
