<?php
/**
 * StringApi
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RadioManager
 *
 * RadioManager
 *
 * OpenAPI spec version: 2.0
 * Contact: support@pluxbox.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RadioManager\RadioManagerClient;

use \RadioManager\ApiClient;
use \RadioManager\ApiException;
use \RadioManager\Configuration;
use \RadioManager\ObjectSerializer;

/**
 * StringApi Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StringApi
{
    /**
     * API Client
     *
     * @var \RadioManager\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \RadioManager\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\RadioManager\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \RadioManager\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \RadioManager\ApiClient $apiClient set the API client
     *
     * @return StringApi
     */
    public function setApiClient(\RadioManager\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getStringsByName
     *
     * Get Strings (formatted)
     *
     * @param string $name Name of Strings **(Required)** (required)
     * @param bool $full_model Full model or content only **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\RadioManagerModels\TextString
     */
    public function getStringsByName($name, $full_model)
    {
        list($response) = $this->getStringsByNameWithHttpInfo($name, $full_model);
        return $response;
    }

    /**
     * Operation getStringsByNameWithHttpInfo
     *
     * Get Strings (formatted)
     *
     * @param string $name Name of Strings **(Required)** (required)
     * @param bool $full_model Full model or content only **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\RadioManagerModels\TextString, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStringsByNameWithHttpInfo($name, $full_model)
    {
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling getStringsByName');
        }
        // verify the required parameter 'full_model' is set
        if ($full_model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $full_model when calling getStringsByName');
        }
        // parse inputs
        $resourcePath = "/strings/{name}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($full_model !== null) {
            $queryParams['full_model'] = $this->apiClient->getSerializer()->toQueryValue($full_model);
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                "{" . "name" . "}",
                $this->apiClient->getSerializer()->toPathValue($name),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\RadioManagerModels\TextString',
                '/strings/{name}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\RadioManagerModels\TextString', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\RadioManagerModels\TextString', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\RadioManagerModels\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\RadioManagerModels\TooManyRequests', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
