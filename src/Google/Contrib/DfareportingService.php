<?php

namespace Google\Contrib;

use Google\Service\ServiceResource;
use Google\Service\Service;
use Google\Service\Model;

/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


  /**
   * The "dimensionValues" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new DfareportingService(...);
   *   $dimensionValues = $dfareportingService->dimensionValues;
   *  </code>
   */
  class DimensionValuesServiceResource extends ServiceResource {


    /**
     * Retrieves list of report dimension values for a list of filters. (dimensionValues.query)
     *
     * @param string $profileId The DFA user profile ID.
     * @param DimensionValueRequest $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @return DimensionValueList
     */
    public function query($profileId, DimensionValueRequest $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('query', array($params));
      if ($this->useObjects()) {
        return new DimensionValueList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "files" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new DfareportingService(...);
   *   $files = $dfareportingService->files;
   *  </code>
   */
  class FilesServiceResource extends ServiceResource {


    /**
     * Lists files for a user profile. (files.list)
     *
     * @param string $profileId The DFA profile ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     * @return FileList
     */
    public function listFiles($profileId, $optParams = array()) {
      $params = array('profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new FileList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "reports" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new DfareportingService(...);
   *   $reports = $dfareportingService->reports;
   *  </code>
   */
  class ReportsServiceResource extends ServiceResource {


    /**
     * Deletes a report by its ID. (reports.delete)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     */
    public function delete($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves a report by its ID. (reports.get)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     * @return Report
     */
    public function get($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Report($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a report. (reports.insert)
     *
     * @param string $profileId The DFA user profile ID.
     * @param Report $postBody
     * @param array $optParams Optional parameters.
     * @return Report
     */
    public function insert($profileId, Report $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Report($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves list of reports. (reports.list)
     *
     * @param string $profileId The DFA user profile ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     * @return ReportList
     */
    public function listReports($profileId, $optParams = array()) {
      $params = array('profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ReportList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a report. This method supports patch semantics. (reports.patch)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param Report $postBody
     * @param array $optParams Optional parameters.
     * @return Report
     */
    public function patch($profileId, $reportId, Report $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Report($data);
      } else {
        return $data;
      }
    }
    /**
     * Runs a report. (reports.run)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool synchronous If set and true, tries to run the report synchronously.
     * @return DfareportingFile
     */
    public function run($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('run', array($params));
      if ($this->useObjects()) {
        return new DfareportingFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a report. (reports.update)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param Report $postBody
     * @param array $optParams Optional parameters.
     * @return Report
     */
    public function update($profileId, $reportId, Report $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Report($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "files" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new DfareportingService(...);
   *   $files = $dfareportingService->files;
   *  </code>
   */
  class ReportsFilesServiceResource extends ServiceResource {


    /**
     * Retrieves a report file. (files.get)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the report.
     * @param string $fileId The ID of the report file.
     * @param array $optParams Optional parameters.
     * @return DfareportingFile
     */
    public function get($profileId, $reportId, $fileId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId, 'fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new DfareportingFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists files for a report. (files.list)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the parent report.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     * @return FileList
     */
    public function listReportsFiles($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new FileList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "userProfiles" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new DfareportingService(...);
   *   $userProfiles = $dfareportingService->userProfiles;
   *  </code>
   */
  class UserProfilesServiceResource extends ServiceResource {


    /**
     * Gets one user profile by ID. (userProfiles.get)
     *
     * @param string $profileId The user profile ID.
     * @param array $optParams Optional parameters.
     * @return UserProfile
     */
    public function get($profileId, $optParams = array()) {
      $params = array('profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new UserProfile($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves list of user profiles for a user. (userProfiles.list)
     *
     * @param array $optParams Optional parameters.
     * @return UserProfileList
     */
    public function listUserProfiles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new UserProfileList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Dfareporting (v1.1).
 *
 * <p>
 * Lets you create, run and download reports.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/doubleclick-advertisers/reporting/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class DfareportingService extends Service {
  public $dimensionValues;
  public $files;
  public $reports;
  public $reports_files;
  public $userProfiles;
  /**
   * Constructs the internal representation of the Dfareporting service.
   *
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'dfareporting/v1.1/';
    $this->version = 'v1.1';
    $this->serviceName = 'dfareporting';

    $client->addService($this->serviceName, $this->version);
    $this->dimensionValues = new DimensionValuesServiceResource($this, $this->serviceName, 'dimensionValues', json_decode('{"methods": {"query": {"id": "dfareporting.dimensionValues.query", "path": "userprofiles/{profileId}/dimensionvalues/query", "httpMethod": "POST", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "DimensionValueRequest"}, "response": {"$ref": "DimensionValueList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->files = new FilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"list": {"id": "dfareporting.files.list", "path": "userprofiles/{profileId}/files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->reports = new ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"delete": {"id": "dfareporting.reports.delete", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "DELETE", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "get": {"id": "dfareporting.reports.get", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "GET", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "insert": {"id": "dfareporting.reports.insert", "path": "userprofiles/{profileId}/reports", "httpMethod": "POST", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.reports.list", "path": "userprofiles/{profileId}/reports", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME", "NAME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "ReportList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "patch": {"id": "dfareporting.reports.patch", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "PATCH", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "run": {"id": "dfareporting.reports.run", "path": "userprofiles/{profileId}/reports/{reportId}/run", "httpMethod": "POST", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "synchronous": {"type": "boolean", "location": "query"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "update": {"id": "dfareporting.reports.update", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "PUT", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->reports_files = new ReportsFilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"get": {"id": "dfareporting.reports.files.get", "path": "userprofiles/{profileId}/reports/{reportId}/files/{fileId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.reports.files.list", "path": "userprofiles/{profileId}/reports/{reportId}/files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->userProfiles = new UserProfilesServiceResource($this, $this->serviceName, 'userProfiles', json_decode('{"methods": {"get": {"id": "dfareporting.userProfiles.get", "path": "userprofiles/{profileId}", "httpMethod": "GET", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "UserProfile"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.userProfiles.list", "path": "userprofiles", "httpMethod": "GET", "response": {"$ref": "UserProfileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));

  }
}

class Activities extends Model {
  protected $__filtersType = 'DimensionValue';
  protected $__filtersDataType = 'array';
  public $filters;
  public $kind;
  public $metricNames;
  public function setFilters(/* array(DimensionValue) */ $filters) {
    $this->assertIsArray($filters, 'DimensionValue', __METHOD__);
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
}

class CustomRichMediaEvents extends Model {
  protected $__filteredEventIdsType = 'DimensionValue';
  protected $__filteredEventIdsDataType = 'array';
  public $filteredEventIds;
  public $kind;
  public function setFilteredEventIds(/* array(DimensionValue) */ $filteredEventIds) {
    $this->assertIsArray($filteredEventIds, 'DimensionValue', __METHOD__);
    $this->filteredEventIds = $filteredEventIds;
  }
  public function getFilteredEventIds() {
    return $this->filteredEventIds;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class DateRange extends Model {
  public $endDate;
  public $kind;
  public $relativeDateRange;
  public $startDate;
  public function setEndDate($endDate) {
    $this->endDate = $endDate;
  }
  public function getEndDate() {
    return $this->endDate;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRelativeDateRange($relativeDateRange) {
    $this->relativeDateRange = $relativeDateRange;
  }
  public function getRelativeDateRange() {
    return $this->relativeDateRange;
  }
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }
  public function getStartDate() {
    return $this->startDate;
  }
}

class DfareportingFile extends Model {
  protected $__dateRangeType = 'DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  public $etag;
  public $fileName;
  public $format;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $reportId;
  public $status;
  protected $__urlsType = 'DfareportingFileUrls';
  protected $__urlsDataType = '';
  public $urls;
  public function setDateRange(DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setFileName($fileName) {
    $this->fileName = $fileName;
  }
  public function getFileName() {
    return $this->fileName;
  }
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLastModifiedTime($lastModifiedTime) {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime() {
    return $this->lastModifiedTime;
  }
  public function setReportId($reportId) {
    $this->reportId = $reportId;
  }
  public function getReportId() {
    return $this->reportId;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setUrls(DfareportingFileUrls $urls) {
    $this->urls = $urls;
  }
  public function getUrls() {
    return $this->urls;
  }
}

class DfareportingFileUrls extends Model {
  public $apiUrl;
  public $browserUrl;
  public function setApiUrl($apiUrl) {
    $this->apiUrl = $apiUrl;
  }
  public function getApiUrl() {
    return $this->apiUrl;
  }
  public function setBrowserUrl($browserUrl) {
    $this->browserUrl = $browserUrl;
  }
  public function getBrowserUrl() {
    return $this->browserUrl;
  }
}

class DimensionFilter extends Model {
  public $dimensionName;
  public $kind;
  public $value;
  public function setDimensionName($dimensionName) {
    $this->dimensionName = $dimensionName;
  }
  public function getDimensionName() {
    return $this->dimensionName;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class DimensionValue extends Model {
  public $dimensionName;
  public $etag;
  public $id;
  public $kind;
  public $value;
  public function setDimensionName($dimensionName) {
    $this->dimensionName = $dimensionName;
  }
  public function getDimensionName() {
    return $this->dimensionName;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class DimensionValueList extends Model {
  public $etag;
  protected $__itemsType = 'DimensionValue';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(DimensionValue) */ $items) {
    $this->assertIsArray($items, 'DimensionValue', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class DimensionValueRequest extends Model {
  public $dimensionName;
  public $endDate;
  protected $__filtersType = 'DimensionFilter';
  protected $__filtersDataType = 'array';
  public $filters;
  public $kind;
  public $startDate;
  public function setDimensionName($dimensionName) {
    $this->dimensionName = $dimensionName;
  }
  public function getDimensionName() {
    return $this->dimensionName;
  }
  public function setEndDate($endDate) {
    $this->endDate = $endDate;
  }
  public function getEndDate() {
    return $this->endDate;
  }
  public function setFilters(/* array(DimensionFilter) */ $filters) {
    $this->assertIsArray($filters, 'DimensionFilter', __METHOD__);
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }
  public function getStartDate() {
    return $this->startDate;
  }
}

class FileList extends Model {
  public $etag;
  protected $__itemsType = 'DfareportingFile';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(DfareportingFile) */ $items) {
    $this->assertIsArray($items, 'DfareportingFile', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class Recipient extends Model {
  public $deliveryType;
  public $email;
  public $kind;
  public function setDeliveryType($deliveryType) {
    $this->deliveryType = $deliveryType;
  }
  public function getDeliveryType() {
    return $this->deliveryType;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Report extends Model {
  public $accountId;
  protected $__activeGrpCriteriaType = 'ReportActiveGrpCriteria';
  protected $__activeGrpCriteriaDataType = '';
  public $activeGrpCriteria;
  protected $__criteriaType = 'ReportCriteria';
  protected $__criteriaDataType = '';
  public $criteria;
  protected $__crossDimensionReachCriteriaType = 'ReportCrossDimensionReachCriteria';
  protected $__crossDimensionReachCriteriaDataType = '';
  public $crossDimensionReachCriteria;
  protected $__deliveryType = 'ReportDelivery';
  protected $__deliveryDataType = '';
  public $delivery;
  public $etag;
  public $fileName;
  protected $__floodlightCriteriaType = 'ReportFloodlightCriteria';
  protected $__floodlightCriteriaDataType = '';
  public $floodlightCriteria;
  public $format;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $name;
  public $ownerProfileId;
  protected $__pathToConversionCriteriaType = 'ReportPathToConversionCriteria';
  protected $__pathToConversionCriteriaDataType = '';
  public $pathToConversionCriteria;
  protected $__reachCriteriaType = 'ReportReachCriteria';
  protected $__reachCriteriaDataType = '';
  public $reachCriteria;
  protected $__scheduleType = 'ReportSchedule';
  protected $__scheduleDataType = '';
  public $schedule;
  public $subAccountId;
  public $type;
  public function setAccountId($accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setActiveGrpCriteria(ReportActiveGrpCriteria $activeGrpCriteria) {
    $this->activeGrpCriteria = $activeGrpCriteria;
  }
  public function getActiveGrpCriteria() {
    return $this->activeGrpCriteria;
  }
  public function setCriteria(ReportCriteria $criteria) {
    $this->criteria = $criteria;
  }
  public function getCriteria() {
    return $this->criteria;
  }
  public function setCrossDimensionReachCriteria(ReportCrossDimensionReachCriteria $crossDimensionReachCriteria) {
    $this->crossDimensionReachCriteria = $crossDimensionReachCriteria;
  }
  public function getCrossDimensionReachCriteria() {
    return $this->crossDimensionReachCriteria;
  }
  public function setDelivery(ReportDelivery $delivery) {
    $this->delivery = $delivery;
  }
  public function getDelivery() {
    return $this->delivery;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setFileName($fileName) {
    $this->fileName = $fileName;
  }
  public function getFileName() {
    return $this->fileName;
  }
  public function setFloodlightCriteria(ReportFloodlightCriteria $floodlightCriteria) {
    $this->floodlightCriteria = $floodlightCriteria;
  }
  public function getFloodlightCriteria() {
    return $this->floodlightCriteria;
  }
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLastModifiedTime($lastModifiedTime) {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime() {
    return $this->lastModifiedTime;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setOwnerProfileId($ownerProfileId) {
    $this->ownerProfileId = $ownerProfileId;
  }
  public function getOwnerProfileId() {
    return $this->ownerProfileId;
  }
  public function setPathToConversionCriteria(ReportPathToConversionCriteria $pathToConversionCriteria) {
    $this->pathToConversionCriteria = $pathToConversionCriteria;
  }
  public function getPathToConversionCriteria() {
    return $this->pathToConversionCriteria;
  }
  public function setReachCriteria(ReportReachCriteria $reachCriteria) {
    $this->reachCriteria = $reachCriteria;
  }
  public function getReachCriteria() {
    return $this->reachCriteria;
  }
  public function setSchedule(ReportSchedule $schedule) {
    $this->schedule = $schedule;
  }
  public function getSchedule() {
    return $this->schedule;
  }
  public function setSubAccountId($subAccountId) {
    $this->subAccountId = $subAccountId;
  }
  public function getSubAccountId() {
    return $this->subAccountId;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class ReportActiveGrpCriteria extends Model {
  protected $__dateRangeType = 'DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  public $metricNames;
  public function setDateRange(DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
}

class ReportCriteria extends Model {
  protected $__activitiesType = 'Activities';
  protected $__activitiesDataType = '';
  public $activities;
  protected $__customRichMediaEventsType = 'CustomRichMediaEvents';
  protected $__customRichMediaEventsDataType = '';
  public $customRichMediaEvents;
  protected $__dateRangeType = 'DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  public $metricNames;
  public function setActivities(Activities $activities) {
    $this->activities = $activities;
  }
  public function getActivities() {
    return $this->activities;
  }
  public function setCustomRichMediaEvents(CustomRichMediaEvents $customRichMediaEvents) {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  public function getCustomRichMediaEvents() {
    return $this->customRichMediaEvents;
  }
  public function setDateRange(DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
}

class ReportCrossDimensionReachCriteria extends Model {
  protected $__breakdownType = 'SortedDimension';
  protected $__breakdownDataType = 'array';
  public $breakdown;
  protected $__dateRangeType = 'DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  public $dimension;
  protected $__dimensionFiltersType = 'DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  public $metricNames;
  public $overlapMetricNames;
  public $pivoted;
  public function setBreakdown(/* array(SortedDimension) */ $breakdown) {
    $this->assertIsArray($breakdown, 'SortedDimension', __METHOD__);
    $this->breakdown = $breakdown;
  }
  public function getBreakdown() {
    return $this->breakdown;
  }
  public function setDateRange(DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimension($dimension) {
    $this->dimension = $dimension;
  }
  public function getDimension() {
    return $this->dimension;
  }
  public function setDimensionFilters(/* array(DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setOverlapMetricNames($overlapMetricNames) {
    $this->overlapMetricNames = $overlapMetricNames;
  }
  public function getOverlapMetricNames() {
    return $this->overlapMetricNames;
  }
  public function setPivoted($pivoted) {
    $this->pivoted = $pivoted;
  }
  public function getPivoted() {
    return $this->pivoted;
  }
}

class ReportDelivery extends Model {
  public $emailOwner;
  public $emailOwnerDeliveryType;
  public $message;
  protected $__recipientsType = 'Recipient';
  protected $__recipientsDataType = 'array';
  public $recipients;
  public function setEmailOwner($emailOwner) {
    $this->emailOwner = $emailOwner;
  }
  public function getEmailOwner() {
    return $this->emailOwner;
  }
  public function setEmailOwnerDeliveryType($emailOwnerDeliveryType) {
    $this->emailOwnerDeliveryType = $emailOwnerDeliveryType;
  }
  public function getEmailOwnerDeliveryType() {
    return $this->emailOwnerDeliveryType;
  }
  public function setMessage($message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setRecipients(/* array(Recipient) */ $recipients) {
    $this->assertIsArray($recipients, 'Recipient', __METHOD__);
    $this->recipients = $recipients;
  }
  public function getRecipients() {
    return $this->recipients;
  }
}

class ReportFloodlightCriteria extends Model {
  protected $__dateRangeType = 'DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  protected $__floodlightConfigIdType = 'DimensionValue';
  protected $__floodlightConfigIdDataType = '';
  public $floodlightConfigId;
  public $metricNames;
  protected $__reportPropertiesType = 'ReportFloodlightCriteriaReportProperties';
  protected $__reportPropertiesDataType = '';
  public $reportProperties;
  public function setDateRange(DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setFloodlightConfigId(DimensionValue $floodlightConfigId) {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  public function getFloodlightConfigId() {
    return $this->floodlightConfigId;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setReportProperties(ReportFloodlightCriteriaReportProperties $reportProperties) {
    $this->reportProperties = $reportProperties;
  }
  public function getReportProperties() {
    return $this->reportProperties;
  }
}

class ReportFloodlightCriteriaReportProperties extends Model {
  public $includeAttributedIPConversions;
  public $includeUnattributedCookieConversions;
  public $includeUnattributedIPConversions;
  public function setIncludeAttributedIPConversions($includeAttributedIPConversions) {
    $this->includeAttributedIPConversions = $includeAttributedIPConversions;
  }
  public function getIncludeAttributedIPConversions() {
    return $this->includeAttributedIPConversions;
  }
  public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions) {
    $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
  }
  public function getIncludeUnattributedCookieConversions() {
    return $this->includeUnattributedCookieConversions;
  }
  public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions) {
    $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
  }
  public function getIncludeUnattributedIPConversions() {
    return $this->includeUnattributedIPConversions;
  }
}

class ReportList extends Model {
  public $etag;
  protected $__itemsType = 'Report';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(Report) */ $items) {
    $this->assertIsArray($items, 'Report', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class ReportPathToConversionCriteria extends Model {
  protected $__activityFiltersType = 'DimensionValue';
  protected $__activityFiltersDataType = 'array';
  public $activityFilters;
  protected $__conversionDimensionsType = 'SortedDimension';
  protected $__conversionDimensionsDataType = 'array';
  public $conversionDimensions;
  protected $__customFloodlightVariablesType = 'SortedDimension';
  protected $__customFloodlightVariablesDataType = 'array';
  public $customFloodlightVariables;
  protected $__dateRangeType = 'DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__floodlightConfigIdType = 'DimensionValue';
  protected $__floodlightConfigIdDataType = '';
  public $floodlightConfigId;
  public $metricNames;
  protected $__perInteractionDimensionsType = 'SortedDimension';
  protected $__perInteractionDimensionsDataType = 'array';
  public $perInteractionDimensions;
  protected $__reportPropertiesType = 'ReportPathToConversionCriteriaReportProperties';
  protected $__reportPropertiesDataType = '';
  public $reportProperties;
  public function setActivityFilters(/* array(DimensionValue) */ $activityFilters) {
    $this->assertIsArray($activityFilters, 'DimensionValue', __METHOD__);
    $this->activityFilters = $activityFilters;
  }
  public function getActivityFilters() {
    return $this->activityFilters;
  }
  public function setConversionDimensions(/* array(SortedDimension) */ $conversionDimensions) {
    $this->assertIsArray($conversionDimensions, 'SortedDimension', __METHOD__);
    $this->conversionDimensions = $conversionDimensions;
  }
  public function getConversionDimensions() {
    return $this->conversionDimensions;
  }
  public function setCustomFloodlightVariables(/* array(SortedDimension) */ $customFloodlightVariables) {
    $this->assertIsArray($customFloodlightVariables, 'SortedDimension', __METHOD__);
    $this->customFloodlightVariables = $customFloodlightVariables;
  }
  public function getCustomFloodlightVariables() {
    return $this->customFloodlightVariables;
  }
  public function setDateRange(DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setFloodlightConfigId(DimensionValue $floodlightConfigId) {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  public function getFloodlightConfigId() {
    return $this->floodlightConfigId;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setPerInteractionDimensions(/* array(SortedDimension) */ $perInteractionDimensions) {
    $this->assertIsArray($perInteractionDimensions, 'SortedDimension', __METHOD__);
    $this->perInteractionDimensions = $perInteractionDimensions;
  }
  public function getPerInteractionDimensions() {
    return $this->perInteractionDimensions;
  }
  public function setReportProperties(ReportPathToConversionCriteriaReportProperties $reportProperties) {
    $this->reportProperties = $reportProperties;
  }
  public function getReportProperties() {
    return $this->reportProperties;
  }
}

class ReportPathToConversionCriteriaReportProperties extends Model {
  public $clicksLookbackWindow;
  public $impressionsLookbackWindow;
  public $includeAttributedIPConversions;
  public $includeUnattributedCookieConversions;
  public $includeUnattributedIPConversions;
  public $maximumClickInteractions;
  public $maximumImpressionInteractions;
  public $maximumInteractionGap;
  public $pivotOnInteractionPath;
  public function setClicksLookbackWindow($clicksLookbackWindow) {
    $this->clicksLookbackWindow = $clicksLookbackWindow;
  }
  public function getClicksLookbackWindow() {
    return $this->clicksLookbackWindow;
  }
  public function setImpressionsLookbackWindow($impressionsLookbackWindow) {
    $this->impressionsLookbackWindow = $impressionsLookbackWindow;
  }
  public function getImpressionsLookbackWindow() {
    return $this->impressionsLookbackWindow;
  }
  public function setIncludeAttributedIPConversions($includeAttributedIPConversions) {
    $this->includeAttributedIPConversions = $includeAttributedIPConversions;
  }
  public function getIncludeAttributedIPConversions() {
    return $this->includeAttributedIPConversions;
  }
  public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions) {
    $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
  }
  public function getIncludeUnattributedCookieConversions() {
    return $this->includeUnattributedCookieConversions;
  }
  public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions) {
    $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
  }
  public function getIncludeUnattributedIPConversions() {
    return $this->includeUnattributedIPConversions;
  }
  public function setMaximumClickInteractions($maximumClickInteractions) {
    $this->maximumClickInteractions = $maximumClickInteractions;
  }
  public function getMaximumClickInteractions() {
    return $this->maximumClickInteractions;
  }
  public function setMaximumImpressionInteractions($maximumImpressionInteractions) {
    $this->maximumImpressionInteractions = $maximumImpressionInteractions;
  }
  public function getMaximumImpressionInteractions() {
    return $this->maximumImpressionInteractions;
  }
  public function setMaximumInteractionGap($maximumInteractionGap) {
    $this->maximumInteractionGap = $maximumInteractionGap;
  }
  public function getMaximumInteractionGap() {
    return $this->maximumInteractionGap;
  }
  public function setPivotOnInteractionPath($pivotOnInteractionPath) {
    $this->pivotOnInteractionPath = $pivotOnInteractionPath;
  }
  public function getPivotOnInteractionPath() {
    return $this->pivotOnInteractionPath;
  }
}

class ReportReachCriteria extends Model {
  protected $__activitiesType = 'Activities';
  protected $__activitiesDataType = '';
  public $activities;
  protected $__customRichMediaEventsType = 'CustomRichMediaEvents';
  protected $__customRichMediaEventsDataType = '';
  public $customRichMediaEvents;
  protected $__dateRangeType = 'DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  public $metricNames;
  public $reachByFrequencyMetricNames;
  public function setActivities(Activities $activities) {
    $this->activities = $activities;
  }
  public function getActivities() {
    return $this->activities;
  }
  public function setCustomRichMediaEvents(CustomRichMediaEvents $customRichMediaEvents) {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  public function getCustomRichMediaEvents() {
    return $this->customRichMediaEvents;
  }
  public function setDateRange(DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setReachByFrequencyMetricNames($reachByFrequencyMetricNames) {
    $this->reachByFrequencyMetricNames = $reachByFrequencyMetricNames;
  }
  public function getReachByFrequencyMetricNames() {
    return $this->reachByFrequencyMetricNames;
  }
}

class ReportSchedule extends Model {
  public $active;
  public $every;
  public $expirationDate;
  public $repeats;
  public $repeatsOnWeekDays;
  public $runsOnDayOfMonth;
  public $startDate;
  public function setActive($active) {
    $this->active = $active;
  }
  public function getActive() {
    return $this->active;
  }
  public function setEvery($every) {
    $this->every = $every;
  }
  public function getEvery() {
    return $this->every;
  }
  public function setExpirationDate($expirationDate) {
    $this->expirationDate = $expirationDate;
  }
  public function getExpirationDate() {
    return $this->expirationDate;
  }
  public function setRepeats($repeats) {
    $this->repeats = $repeats;
  }
  public function getRepeats() {
    return $this->repeats;
  }
  public function setRepeatsOnWeekDays($repeatsOnWeekDays) {
    $this->repeatsOnWeekDays = $repeatsOnWeekDays;
  }
  public function getRepeatsOnWeekDays() {
    return $this->repeatsOnWeekDays;
  }
  public function setRunsOnDayOfMonth($runsOnDayOfMonth) {
    $this->runsOnDayOfMonth = $runsOnDayOfMonth;
  }
  public function getRunsOnDayOfMonth() {
    return $this->runsOnDayOfMonth;
  }
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }
  public function getStartDate() {
    return $this->startDate;
  }
}

class SortedDimension extends Model {
  public $kind;
  public $name;
  public $sortOrder;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSortOrder($sortOrder) {
    $this->sortOrder = $sortOrder;
  }
  public function getSortOrder() {
    return $this->sortOrder;
  }
}

class UserProfile extends Model {
  public $accountId;
  public $accountName;
  public $etag;
  public $kind;
  public $profileId;
  public $subAccountId;
  public $subAccountName;
  public $userName;
  public function setAccountId($accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAccountName($accountName) {
    $this->accountName = $accountName;
  }
  public function getAccountName() {
    return $this->accountName;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setProfileId($profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setSubAccountId($subAccountId) {
    $this->subAccountId = $subAccountId;
  }
  public function getSubAccountId() {
    return $this->subAccountId;
  }
  public function setSubAccountName($subAccountName) {
    $this->subAccountName = $subAccountName;
  }
  public function getSubAccountName() {
    return $this->subAccountName;
  }
  public function setUserName($userName) {
    $this->userName = $userName;
  }
  public function getUserName() {
    return $this->userName;
  }
}

class UserProfileList extends Model {
  public $etag;
  protected $__itemsType = 'UserProfile';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(UserProfile) */ $items) {
    $this->assertIsArray($items, 'UserProfile', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}
