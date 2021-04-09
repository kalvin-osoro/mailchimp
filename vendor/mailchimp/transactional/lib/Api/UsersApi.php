<?php

/**
 * UsersApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.23
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\Configuration;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * UsersApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersApi
{
    protected $Configuration;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Get user info
     * Return the information about the API-connected user.
     */
    public function info($body = [])
    {
        return $this->config->post('/users/info', $body);
    }
    /**
     * Ping
     * Validate an API key and respond to a ping.
     */
    public function ping($body = [])
    {
        return $this->config->post('/users/ping', $body);
    }
    /**
     * Ping 2
     * Validate an API key and respond to a ping (JSON parser version).
     */
    public function ping2($body = [])
    {
        return $this->config->post('/users/ping2', $body);
    }
    /**
     * List account senders
     * Return the senders that have tried to use this account, both verified and unverified.
     */
    public function senders($body = [])
    {
        return $this->config->post('/users/senders', $body);
    }
}
