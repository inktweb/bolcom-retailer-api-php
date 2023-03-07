<?php

/**
 * This file is auto-generated by
 * Inktweb\Bolcom\RetailerApi\Development\Generator\Models
 */

namespace Inktweb\Bolcom\RetailerApi\Models\V7\Advertiser;

use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Advertiser\NegativeKeyword\MatchType;
use Inktweb\Bolcom\RetailerApi\Enums\Models\V7\Advertiser\NegativeKeyword\State;

/**
 * @method static NegativeKeyword fromArray(array $data)
 */
final class NegativeKeyword extends Model
{
    /** The identifier of the negative keyword. */
    protected string $keywordId = '';

    /** The identifier of the parent campaign. */
    protected string $campaignId = '';

    /** The identifier of the parent ad group. */
    protected string $adGroupId = '';

    /** The state of the negative keyword. */
    protected ?State $state = null;

    /**
     * The text or phrase used in the negative keyword that caused the ad not
     * to be displayed to the user.
     */
    protected ?string $keywordText = '';

    /** The match type that relates the negative keyword and the search term. */
    protected ?MatchType $matchType = null;

    public function setKeywordId(string $keywordId): self
    {
        $this->keywordId = $keywordId;
        return $this;
    }

    public function getKeywordId(): string
    {
        return $this->keywordId;
    }

    public function setCampaignId(string $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    public function getCampaignId(): string
    {
        return $this->campaignId;
    }

    public function setAdGroupId(string $adGroupId): self
    {
        $this->adGroupId = $adGroupId;
        return $this;
    }

    public function getAdGroupId(): string
    {
        return $this->adGroupId;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setKeywordText(?string $keywordText): self
    {
        $this->keywordText = $keywordText;
        return $this;
    }

    public function getKeywordText(): ?string
    {
        return $this->keywordText;
    }

    public function setMatchType(?MatchType $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    public function getMatchType(): ?MatchType
    {
        return $this->matchType;
    }
}
