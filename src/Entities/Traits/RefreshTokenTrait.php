<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/lichv/oauth2-server
 */

namespace Lichv\OAuth2\Server\Entities\Traits;

use DateTime;
use Lichv\OAuth2\Server\Entities\AccessTokenEntityInterface;

trait RefreshTokenTrait
{
    /**
     * @var AccessTokenEntityInterface
     */
    protected $accessToken;

    /**
     * @var null|string
     */
    protected $uuid;

    /**
     * @var DateTime
     */
    protected $expiryDateTime;

    /**
     * {@inheritdoc}
     */
    public function setAccessToken(AccessTokenEntityInterface $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string|null
     */
    public function getUUID()
    {
        return $this->uuid;
    }

    /**
     * @param string $uri
     */
    public function setUUID($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * Get the token's expiry date time.
     *
     * @return DateTime
     */
    public function getExpiryDateTime()
    {
        return $this->expiryDateTime;
    }

    /**
     * Set the date time when the token expires.
     *
     * @param DateTime $dateTime
     */
    public function setExpiryDateTime(DateTime $dateTime)
    {
        $this->expiryDateTime = $dateTime;
    }
}
