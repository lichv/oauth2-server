<?php
/**
 * OAuth 2.0 Abstract Response Type.
 *
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/lichv/oauth2-server
 */

namespace Lichv\OAuth2\Server\ResponseTypes;

use Lichv\OAuth2\Server\CryptKey;
use Lichv\OAuth2\Server\CryptTrait;
use Lichv\OAuth2\Server\Entities\AccessTokenEntityInterface;
use Lichv\OAuth2\Server\Entities\RefreshTokenEntityInterface;

abstract class AbstractResponseType implements ResponseTypeInterface
{
    use CryptTrait;

    /**
     * @var AccessTokenEntityInterface
     */
    protected $accessToken;

    /**
     * @var RefreshTokenEntityInterface
     */
    protected $refreshToken;

    /**
     * @var CryptKey
     */
    protected $privateKey;

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
    public function setRefreshToken(RefreshTokenEntityInterface $refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * Set the private key
     *
     * @param \Lichv\OAuth2\Server\CryptKey $key
     */
    public function setPrivateKey(CryptKey $key)
    {
        $this->privateKey = $key;
    }
}