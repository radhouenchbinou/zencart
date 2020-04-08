<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * CashDrawersApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class CashDrawersApi
{

    /**
     * API Client
     * @var \SquareConnect\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \SquareConnect\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://connect.squareup.com');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \SquareConnect\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \SquareConnect\ApiClient $apiClient set the API client
     * @return CashDrawersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    /**
     * listCashDrawerShiftEvents
     *
     * ListCashDrawerShiftEvents
     *
     * @param string $location_id The ID of the location to list cash drawer shifts for. (required)
     * @param string $shift_id The shift ID. (required)
     * @param int $limit Number of resources to be returned in a page of results (200 by default, 1000 max). (optional)
     * @param string $cursor Opaque cursor for fetching the next page of results. (optional)
     * @return \SquareConnect\Model\ListCashDrawerShiftEventsResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listCashDrawerShiftEvents($location_id, $shift_id, $limit = null, $cursor = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listCashDrawerShiftEventsWithHttpInfo ($location_id, $shift_id, $limit, $cursor);
        return $response; 
    }


    /**
     * listCashDrawerShiftEventsWithHttpInfo
     *
     * ListCashDrawerShiftEvents
     *
     * @param string $location_id The ID of the location to list cash drawer shifts for. (required)
     * @param string $shift_id The shift ID. (required)
     * @param int $limit Number of resources to be returned in a page of results (200 by default, 1000 max). (optional)
     * @param string $cursor Opaque cursor for fetching the next page of results. (optional)
     * @return Array of \SquareConnect\Model\ListCashDrawerShiftEventsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listCashDrawerShiftEventsWithHttpInfo($location_id, $shift_id, $limit = null, $cursor = null)
    {
        
        // verify the required parameter 'location_id' is set
        if ($location_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $location_id when calling listCashDrawerShiftEvents');
        }
        // verify the required parameter 'shift_id' is set
        if ($shift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shift_id when calling listCashDrawerShiftEvents');
        }
  
        // parse inputs
        $resourcePath = "/v2/cash-drawers/shifts/{shift_id}/events";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2020-03-25";

        // query params
        if ($location_id !== null) {
            $queryParams['location_id'] = $this->apiClient->getSerializer()->toQueryValue($location_id);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($cursor !== null) {
            $queryParams['cursor'] = $this->apiClient->getSerializer()->toQueryValue($cursor);
        }
        
        // path params
        if ($shift_id !== null) {
            $resourcePath = str_replace(
                "{" . "shift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($shift_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\ListCashDrawerShiftEventsResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\ListCashDrawerShiftEventsResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\ListCashDrawerShiftEventsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * listCashDrawerShifts
     *
     * ListCashDrawerShifts
     *
     * @param string $location_id The ID of the location to query for a list of cash drawer shifts. (required)
     * @param string $sort_order The order in which cash drawer shifts are listed in the response, based on their opened_at field. Default value: ASC (optional)
     * @param string $begin_time The inclusive start time of the query on opened_at, in ISO 8601 format. (optional)
     * @param string $end_time The exclusive end date of the query on opened_at, in ISO 8601 format. (optional)
     * @param int $limit Number of cash drawer shift events in a page of results (200 by default, 1000 max). (optional)
     * @param string $cursor Opaque cursor for fetching the next page of results. (optional)
     * @return \SquareConnect\Model\ListCashDrawerShiftsResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listCashDrawerShifts($location_id, $sort_order = null, $begin_time = null, $end_time = null, $limit = null, $cursor = null)
    {
        list($response, $statusCode, $httpHeader) = $this->listCashDrawerShiftsWithHttpInfo ($location_id, $sort_order, $begin_time, $end_time, $limit, $cursor);
        return $response; 
    }


    /**
     * listCashDrawerShiftsWithHttpInfo
     *
     * ListCashDrawerShifts
     *
     * @param string $location_id The ID of the location to query for a list of cash drawer shifts. (required)
     * @param string $sort_order The order in which cash drawer shifts are listed in the response, based on their opened_at field. Default value: ASC (optional)
     * @param string $begin_time The inclusive start time of the query on opened_at, in ISO 8601 format. (optional)
     * @param string $end_time The exclusive end date of the query on opened_at, in ISO 8601 format. (optional)
     * @param int $limit Number of cash drawer shift events in a page of results (200 by default, 1000 max). (optional)
     * @param string $cursor Opaque cursor for fetching the next page of results. (optional)
     * @return Array of \SquareConnect\Model\ListCashDrawerShiftsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listCashDrawerShiftsWithHttpInfo($location_id, $sort_order = null, $begin_time = null, $end_time = null, $limit = null, $cursor = null)
    {
        
        // verify the required parameter 'location_id' is set
        if ($location_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $location_id when calling listCashDrawerShifts');
        }
  
        // parse inputs
        $resourcePath = "/v2/cash-drawers/shifts";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2020-03-25";

        // query params
        if ($location_id !== null) {
            $queryParams['location_id'] = $this->apiClient->getSerializer()->toQueryValue($location_id);
        }// query params
        if ($sort_order !== null) {
            $queryParams['sort_order'] = $this->apiClient->getSerializer()->toQueryValue($sort_order);
        }// query params
        if ($begin_time !== null) {
            $queryParams['begin_time'] = $this->apiClient->getSerializer()->toQueryValue($begin_time);
        }// query params
        if ($end_time !== null) {
            $queryParams['end_time'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($cursor !== null) {
            $queryParams['cursor'] = $this->apiClient->getSerializer()->toQueryValue($cursor);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\ListCashDrawerShiftsResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\ListCashDrawerShiftsResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\ListCashDrawerShiftsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    /**
     * retrieveCashDrawerShift
     *
     * RetrieveCashDrawerShift
     *
     * @param string $location_id The ID of the location to retrieve cash drawer shifts from. (required)
     * @param string $shift_id The shift ID. (required)
     * @return \SquareConnect\Model\RetrieveCashDrawerShiftResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveCashDrawerShift($location_id, $shift_id)
    {
        list($response, $statusCode, $httpHeader) = $this->retrieveCashDrawerShiftWithHttpInfo ($location_id, $shift_id);
        return $response; 
    }


    /**
     * retrieveCashDrawerShiftWithHttpInfo
     *
     * RetrieveCashDrawerShift
     *
     * @param string $location_id The ID of the location to retrieve cash drawer shifts from. (required)
     * @param string $shift_id The shift ID. (required)
     * @return Array of \SquareConnect\Model\RetrieveCashDrawerShiftResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveCashDrawerShiftWithHttpInfo($location_id, $shift_id)
    {
        
        // verify the required parameter 'location_id' is set
        if ($location_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $location_id when calling retrieveCashDrawerShift');
        }
        // verify the required parameter 'shift_id' is set
        if ($shift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $shift_id when calling retrieveCashDrawerShift');
        }
  
        // parse inputs
        $resourcePath = "/v2/cash-drawers/shifts/{shift_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2020-03-25";

        // query params
        if ($location_id !== null) {
            $queryParams['location_id'] = $this->apiClient->getSerializer()->toQueryValue($location_id);
        }
        
        // path params
        if ($shift_id !== null) {
            $resourcePath = str_replace(
                "{" . "shift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($shift_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\RetrieveCashDrawerShiftResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\RetrieveCashDrawerShiftResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\RetrieveCashDrawerShiftResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
}
