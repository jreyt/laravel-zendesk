<?php 

namespace Jreyt\Zendesk\Facades;

use Illuminate\Support\Facades\Facade;

class Zendesk extends Facade {

    /**
     * Return facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
    	return 'zendesk'; 
    }

}