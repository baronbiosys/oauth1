<?php

namespace Risan\OAuth1;

use Risan\OAuth1\Credentials\TemporaryCredentials;

interface OAuth1Interface
{
    /**
     * Get the HttpClientInterface instance.
     *
     * @return \Risan\OAuth1\HttpClientInterface
     */
    public function getHttpClient();

    /**
     * Get the RequestFactoryInterface instance.
     *
     * @return \Risan\OAuth1\Request\RequestFactoryInterface
     */
    public function getRequestFactory();

    /**
     * Get the CredentialsFactoryInterface instance.
     *
     * @return \Risan\OAuth1\Credentials\CredentialsFactoryInterface
     */
    public function getCredentialsFactory();

    /**
     * Send request for obtaining temporary credentials.
     *
     * @return \Risan\OAuth1\Credentials\TemporaryCredentials
     */
    public function requestTemporaryCredentials();

    /**
     * Build the authorization URI.
     *
     * @param  \Risan\OAuth1\Credentials\TemporaryCredentials $temporaryCredentials
     * @return string
     */
    public function buildAuthorizationUri(TemporaryCredentials $temporaryCredentials);

    /**
     * Send request for obtaining token credentials.
     *
     * @param  \Risan\OAuth1\Credentials\TemporaryCredentials $temporaryCredentials
     * @param  string $temporaryIdentifier
     * @param  string $verificationCode
     * @return \Risan\OAuth1\Credentials\TokenCredentials
     * @throws \InvalidArgumentException
     */
    public function requestTokenCredentials(TemporaryCredentials $temporaryCredentials, $temporaryIdentifier, $verificationCode);
}
