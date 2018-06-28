<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/lichv/oauth2-server
 */

namespace Lichv\OAuth2\Server\Entities\Traits;

trait ClientTrait
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|string[]
     */
    protected $redirectUri;

    protected $expire;

    /**
     * Get the client's name.
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the registered redirect URI (as a string).
     *
     * Alternatively return an indexed array of redirect URIs.
     *
     * @return string|string[]
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }


    public function getExpire()
    {
        return $this->expire;
    }
}
