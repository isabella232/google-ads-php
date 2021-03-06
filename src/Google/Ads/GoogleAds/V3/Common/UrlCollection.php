<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/url_collection.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Collection of urls that is tagged with a unique identifier.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.UrlCollection</code>
 */
class UrlCollection extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 1;</code>
     */
    protected $url_collection_id = null;
    /**
     * A list of possible final URLs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 2;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 3;</code>
     */
    private $final_mobile_urls;
    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 4;</code>
     */
    protected $tracking_url_template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $url_collection_id
     *           Unique identifier for this UrlCollection instance.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs.
     *     @type \Google\Protobuf\StringValue $tracking_url_template
     *           URL template for constructing a tracking URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\UrlCollection::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUrlCollectionId()
    {
        return $this->url_collection_id;
    }

    /**
     * Returns the unboxed value from <code>getUrlCollectionId()</code>

     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 1;</code>
     * @return string|null
     */
    public function getUrlCollectionIdUnwrapped()
    {
        return $this->readWrapperValue("url_collection_id");
    }

    /**
     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUrlCollectionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->url_collection_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Unique identifier for this UrlCollection instance.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url_collection_id = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUrlCollectionIdUnwrapped($var)
    {
        $this->writeWrapperValue("url_collection_id", $var);
        return $this;}

    /**
     * A list of possible final URLs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 2;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 3;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return $this->tracking_url_template;
    }

    /**
     * Returns the unboxed value from <code>getTrackingUrlTemplate()</code>

     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 4;</code>
     * @return string|null
     */
    public function getTrackingUrlTemplateUnwrapped()
    {
        return $this->readWrapperValue("tracking_url_template");
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTrackingUrlTemplateUnwrapped($var)
    {
        $this->writeWrapperValue("tracking_url_template", $var);
        return $this;}

}

