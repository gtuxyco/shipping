<?php
/**
 * Created by PhpStorm.
 * User: johan
 * Date: 2017-12-21
 * Time: 22:46
 */

namespace Vinnia\Shipping;


class TrackingResult
{

    const STATUS_SUCCESS = 100;
    const STATUS_ERROR = 500;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $trackingNumber;

    /**
     * @var string
     */
    public $body;

    /**
     * @var Tracking|null
     */
    public $tracking;

    /**
     * @var Parcel|null
     */
    public $parcel;

    /**
     * TrackingResult constructor.
     * @param int $status
     * @param string $trackingNumber
     * @param string $body
     * @param null|Tracking $tracking
     * @param null|Parcel $parcel
     */
    function __construct(int $status, string $trackingNumber, string $body, ?Tracking $tracking = null, ?Parcel $parcel = null)
    {
        $this->status = $status;
        $this->trackingNumber = $trackingNumber;
        $this->body = $body;
        $this->tracking = $tracking;
        $this->parcel = $parcel;
    }

}
