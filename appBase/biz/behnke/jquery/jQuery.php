<?php
namespace biz\behnke\jquery;
/**
 * Description of jQuery
 *
 * @author marcobehnke
 */
class jQuery {

	const VERSION = '1.7.0';

	static $CallStack = array();

	protected $stackBuffer = array();

	static function renderAll($returnResult = false)
	{
		$result = '';
		foreach(self::$CallStack as $object)
		{
			$result .= $object->render();
			$result .= ";\n";
		}
		if (!$returnResult)
		{
			print $result;
		}
		return $result;
	}

	protected function render()
	{
		return implode('.', $this->stackBuffer);
	}

	public function __construct($match, $scope = null)
	{
		self::$CallStack[] = $this;
		$this->stackBuffer[] = sprintf('jQuery(\'%s\')', $match);
	}

	public function datepicker()
	{
		$this->stackBuffer[] = 'datepicker()';
		return $this;
	}

}
