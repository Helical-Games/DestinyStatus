<?php namespace Destiny\AdvisorsTwo\Activity;

use Destiny\Advisors;
use Destiny\AdvisorsTwo\Activity;

/**
 * @property string $progressionHash
 */
class IronBanner extends Activity implements ActivityInterface, EventInterface
{
	public function __construct(Advisors $advisors, array $properties)
	{
		parent::__construct($properties);
	}

	/**
	 * @return string
	 */
	public static function getIdentifier()
	{
		return 'ironbanner';
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return 'Iron Banner';
	}
}