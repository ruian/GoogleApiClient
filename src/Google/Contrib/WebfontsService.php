<?php

namespace Google\Contrib;


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
   * The "webfonts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $webfontsService = new WebfontsService(...);
   *   $webfonts = $webfontsService->webfonts;
   *  </code>
   */
  class WebfontsServiceResource extends ServiceResource {


    /**
     * Retrieves the list of fonts currently served by the Google Web Fonts Developer API
     * (webfonts.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string sort Enables sorting of the list
     * @return WebfontList
     */
    public function listWebfonts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new WebfontList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Webfonts (v1).
 *
 * <p>
 * The Google Web Fonts Developer API.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/webfonts/docs/developer_api.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class WebfontsService extends Service {
  public $webfonts;
  /**
   * Constructs the internal representation of the Webfonts service.
   *
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'webfonts/v1/';
    $this->version = 'v1';
    $this->serviceName = 'webfonts';

    $client->addService($this->serviceName, $this->version);
    $this->webfonts = new WebfontsServiceResource($this, $this->serviceName, 'webfonts', json_decode('{"methods": {"list": {"httpMethod": "GET", "response": {"$ref": "WebfontList"}, "id": "webfonts.webfonts.list", "parameters": {"sort": {"enum": ["alpha", "date", "popularity", "style", "trending"], "type": "string", "location": "query"}}, "path": "webfonts"}}}', true));

  }
}

class Webfont extends Model {
  public $kind;
  public $variants;
  public $subsets;
  public $family;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setVariants($variants) {
    $this->variants = $variants;
  }
  public function getVariants() {
    return $this->variants;
  }
  public function setSubsets($subsets) {
    $this->subsets = $subsets;
  }
  public function getSubsets() {
    return $this->subsets;
  }
  public function setFamily($family) {
    $this->family = $family;
  }
  public function getFamily() {
    return $this->family;
  }
}

class WebfontList extends Model {
  protected $__itemsType = 'Webfont';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(Webfont) */ $items) {
    $this->assertIsArray($items, 'Webfont', __METHOD__);
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
