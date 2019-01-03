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
    protected $key;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $expire;

    /**
     * @var integer
     */
    protected $refresh_expire;

    /**
     * @var integer
     */
    protected $silence;

    /**
     * @var string|string[]
     */
    protected $redirectUri;

    /**
     * Get the client's key.
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getKey()
    {
        return $this->key;
    }

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
     * Get the client's expire.
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Get the client's refresh_expire.
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getRefreshExpire()
    {
        return $this->refresh_expire;
    }

    /**
     * Get the client's silence.
     *
     * @return string
     * @codeCoverageIgnore
     */
    public function getSilence()
    {
        return $this->silence;
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
}
