<?php

namespace Statamic\Addons\BugsnagLogging;

use Statamic\Extend\Extensible;
use Exception;

class BugsnagLogger extends \Statamic\Exceptions\Handler
{
	use Extensible;

	/**
	 * Extend the built-in statamic error reporting.
	 * @param Exception  $e
	 */
	public function report(Exception $e)
	{
		// New up the bugsnag client if needed.
		if( empty($this->bugsnag) AND $apikey = $this->getConfig('bugsnag_apikey') )
			$this->bugsnag = \Bugsnag\Client::make( $apikey );

		if( ! empty($this->bugsnag) )
			$this->bugsnag->notifyException($e);

		parent::report($e);
	}

}