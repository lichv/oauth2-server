<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/lichv/oauth2-server
 */

namespace Lichv\OAuth2\Server\Entities\Traits;

trait AuthCodeTrait
{
    /**
     * @var null|string
     */
    protected $redirectUri;

    /**
     * @var null|string
     */
    protected $uuid;

    /**
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @param string $uri
     */
    public function setRedirectUri($uri)
    {
        $this->redirectUri = $uri;
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
}
