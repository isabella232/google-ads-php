<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V5\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The text ad recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.resources.Recommendation.TextAdRecommendation</code>
 */
class TextAdRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad = null;
    /**
     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creation_date = null;
    /**
     * Output only. Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $auto_apply_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V5\Resources\Ad $ad
     *           Output only. Recommended ad.
     *     @type \Google\Protobuf\StringValue $creation_date
     *           Output only. Creation date of the recommended ad.
     *           YYYY-MM-DD format, e.g., 2018-04-17.
     *     @type \Google\Protobuf\StringValue $auto_apply_date
     *           Output only. Date, if present, is the earliest when the recommendation will be auto
     *           applied.
     *           YYYY-MM-DD format, e.g., 2018-04-17.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V5\Resources\Ad
     */
    public function getAd()
    {
        return isset($this->ad) ? $this->ad : null;
    }

    public function hasAd()
    {
        return isset($this->ad);
    }

    public function clearAd()
    {
        unset($this->ad);
    }

    /**
     * Output only. Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V5\Resources\Ad $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Resources\Ad::class);
        $this->ad = $var;

        return $this;
    }

    /**
     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCreationDate()
    {
        return isset($this->creation_date) ? $this->creation_date : null;
    }

    public function hasCreationDate()
    {
        return isset($this->creation_date);
    }

    public function clearCreationDate()
    {
        unset($this->creation_date);
    }

    /**
     * Returns the unboxed value from <code>getCreationDate()</code>

     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCreationDateUnwrapped()
    {
        return $this->readWrapperValue("creation_date");
    }

    /**
     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->creation_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCreationDateUnwrapped($var)
    {
        $this->writeWrapperValue("creation_date", $var);
        return $this;}

    /**
     * Output only. Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAutoApplyDate()
    {
        return isset($this->auto_apply_date) ? $this->auto_apply_date : null;
    }

    public function hasAutoApplyDate()
    {
        return isset($this->auto_apply_date);
    }

    public function clearAutoApplyDate()
    {
        unset($this->auto_apply_date);
    }

    /**
     * Returns the unboxed value from <code>getAutoApplyDate()</code>

     * Output only. Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getAutoApplyDateUnwrapped()
    {
        return $this->readWrapperValue("auto_apply_date");
    }

    /**
     * Output only. Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAutoApplyDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->auto_apply_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Date, if present, is the earliest when the recommendation will be auto
     * applied.
     * YYYY-MM-DD format, e.g., 2018-04-17.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue auto_apply_date = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setAutoApplyDateUnwrapped($var)
    {
        $this->writeWrapperValue("auto_apply_date", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextAdRecommendation::class, \Google\Ads\GoogleAds\V5\Resources\Recommendation_TextAdRecommendation::class);

