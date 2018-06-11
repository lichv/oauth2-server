<?php
/**
 * OAuth 2.0 Response Type Interface.
 *
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/lichv/oauth2-server
 */

namespace Lichv\OAuth2\Server\ResponseTypes;

use Defuse\Crypto\Key;
use Lichv\OAuth2\Server\Entities\AccessTokenEntityInterface;
use Lichv\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use Psr\Http\Message\ResponseInterface;

interface ResponseTypeInterface
{
    /**
     * @param AccessTokenEntityInterface $accessToken
     */
    public function setAccessToken(AccessTokenEntityInterface $accessToken);

    /**
     * @param RefreshTokenEntityInterface $refreshToken
     */
    public function setRefreshToken(RefreshTokenEntityInterface $refreshToken);

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     */
    public function generateHttpResponse(ResponseInterface $response);

    /**
     * Set the encryption key
     *
     * @param string|Key|null $key
     */
    public function setEncryptionKey($key = null);
}
