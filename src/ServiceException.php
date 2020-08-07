<?php
/**
 * Created by PhpStorm.
 * User: johan
 * Date: 2017-05-29
 * Time: 19:27
 */

namespace Vinnia\Shipping;

use Exception;

class ServiceException extends Exception
{

    /**
     * @var array
     */
    public $errors;

    /**
     * @var string
     */
    public $source;

      /**
     * @var string
     */
    public $vendor;
    /**
     * ErrorBag constructor.
     * @param string[] $errors
     * @param string $source
     * @param string $vendor
     */
    function __construct(string $vendor, array $errors, string $source)
    {
        parent::__construct(implode("\n", $errors));

        $this->vendor = $vendor;
        $this->errors = $errors;
        $this->source = $source;
    }

}
