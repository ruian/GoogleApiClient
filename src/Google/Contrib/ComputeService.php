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
   * The "disks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $disks = $computeService->disks;
   *  </code>
   */
  class DisksServiceResource extends ServiceResource {


    /**
     * Deletes the specified persistent disk resource. (disks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to delete.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function delete($project, $zone, $disk, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified persistent disk resource. (disks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to return.
     * @param array $optParams Optional parameters.
     * @return Disk
     */
    public function get($project, $zone, $disk, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Disk($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a persistent disk resource in the specified project using the data included in the
     * request. (disks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Disk $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string sourceImage Optional. Source image to restore onto a disk.
     * @return Operation
     */
    public function insert($project, $zone, Disk $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of persistent disk resources contained within the specified zone. (disks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return DiskList
     */
    public function listDisks($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new DiskList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "firewalls" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $firewalls = $computeService->firewalls;
   *  </code>
   */
  class FirewallsServiceResource extends ServiceResource {


    /**
     * Deletes the specified firewall resource. (firewalls.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to delete.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function delete($project, $firewall, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified firewall resource. (firewalls.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to return.
     * @param array $optParams Optional parameters.
     * @return Firewall
     */
    public function get($project, $firewall, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Firewall($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a firewall resource in the specified project using the data included in the request.
     * (firewalls.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function insert($project, Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of firewall resources available to the specified project. (firewalls.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return FirewallList
     */
    public function listFirewalls($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new FirewallList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified firewall resource with the data included in the request. This method
     * supports patch semantics. (firewalls.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function patch($project, $firewall, Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified firewall resource with the data included in the request. (firewalls.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function update($project, $firewall, Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "globalOperations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $globalOperations = $computeService->globalOperations;
   *  </code>
   */
  class GlobalOperationsServiceResource extends ServiceResource {


    /**
     * Deletes the specified operation resource. (globalOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $operation, $optParams = array()) {
      $params = array('project' => $project, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves the specified operation resource. (globalOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function get($project, $operation, $optParams = array()) {
      $params = array('project' => $project, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of operation resources contained within the specified project.
     * (globalOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return OperationList
     */
    public function listGlobalOperations($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new OperationList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "images" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $images = $computeService->images;
   *  </code>
   */
  class ImagesServiceResource extends ServiceResource {


    /**
     * Deletes the specified image resource. (images.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to delete.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function delete($project, $image, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets the deprecation status of an image. If no message body is given, clears the deprecation
     * status instead. (images.deprecate)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Image name.
     * @param DeprecationStatus $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function deprecate($project, $image, DeprecationStatus $postBody, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('deprecate', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified image resource. (images.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to return.
     * @param array $optParams Optional parameters.
     * @return Image
     */
    public function get($project, $image, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Image($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates an image resource in the specified project using the data included in the request.
     * (images.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Image $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function insert($project, Image $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of image resources available to the specified project. (images.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return ImageList
     */
    public function listImages($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ImageList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "instances" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $instances = $computeService->instances;
   *  </code>
   */
  class InstancesServiceResource extends ServiceResource {


    /**
     * Adds an access config to an instance's network interface. (instances.addAccessConfig)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $network_interface Network interface name.
     * @param AccessConfig $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function addAccessConfig($project, $zone, $instance, $network_interface, AccessConfig $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'network_interface' => $network_interface, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addAccessConfig', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified instance resource. (instances.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance resource to delete.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function delete($project, $zone, $instance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an access config from an instance's network interface. (instances.deleteAccessConfig)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $access_config Access config name.
     * @param string $network_interface Network interface name.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function deleteAccessConfig($project, $zone, $instance, $access_config, $network_interface, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'access_config' => $access_config, 'network_interface' => $network_interface);
      $params = array_merge($params, $optParams);
      $data = $this->__call('deleteAccessConfig', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified instance resource. (instances.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance resource to return.
     * @param array $optParams Optional parameters.
     * @return Instance
     */
    public function get($project, $zone, $instance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Instance($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified instance's serial port output. (instances.getSerialPortOutput)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     * @return SerialPortOutput
     */
    public function getSerialPortOutput($project, $zone, $instance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('getSerialPortOutput', array($params));
      if ($this->useObjects()) {
        return new SerialPortOutput($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates an instance resource in the specified project using the data included in the request.
     * (instances.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param Instance $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function insert($project, $zone, Instance $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of instance resources contained within the specified zone. (instances.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return InstanceList
     */
    public function listInstances($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new InstanceList($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets metadata for the specified instance to the data included in the request.
     * (instances.setMetadata)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function setMetadata($project, $zone, $instance, Metadata $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setMetadata', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets tags for the specified instance to the data included in the request. (instances.setTags)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param Tags $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function setTags($project, $zone, $instance, Tags $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setTags', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "kernels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $kernels = $computeService->kernels;
   *  </code>
   */
  class KernelsServiceResource extends ServiceResource {


    /**
     * Returns the specified kernel resource. (kernels.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $kernel Name of the kernel resource to return.
     * @param array $optParams Optional parameters.
     * @return Kernel
     */
    public function get($project, $kernel, $optParams = array()) {
      $params = array('project' => $project, 'kernel' => $kernel);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Kernel($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of kernel resources available to the specified project. (kernels.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return KernelList
     */
    public function listKernels($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new KernelList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "machineTypes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $machineTypes = $computeService->machineTypes;
   *  </code>
   */
  class MachineTypesServiceResource extends ServiceResource {


    /**
     * Returns the specified machine type resource. (machineTypes.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $machineType Name of the machine type resource to return.
     * @param array $optParams Optional parameters.
     * @return MachineType
     */
    public function get($project, $machineType, $optParams = array()) {
      $params = array('project' => $project, 'machineType' => $machineType);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new MachineType($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of machine type resources available to the specified project.
     * (machineTypes.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return MachineTypeList
     */
    public function listMachineTypes($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new MachineTypeList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "networks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $networks = $computeService->networks;
   *  </code>
   */
  class NetworksServiceResource extends ServiceResource {


    /**
     * Deletes the specified network resource. (networks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to delete.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function delete($project, $network, $optParams = array()) {
      $params = array('project' => $project, 'network' => $network);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified network resource. (networks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to return.
     * @param array $optParams Optional parameters.
     * @return Network
     */
    public function get($project, $network, $optParams = array()) {
      $params = array('project' => $project, 'network' => $network);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Network($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a network resource in the specified project using the data included in the request.
     * (networks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Network $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function insert($project, Network $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of network resources available to the specified project. (networks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return NetworkList
     */
    public function listNetworks($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new NetworkList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "projects" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $projects = $computeService->projects;
   *  </code>
   */
  class ProjectsServiceResource extends ServiceResource {


    /**
     * Returns the specified project resource. (projects.get)
     *
     * @param string $project Name of the project resource to retrieve.
     * @param array $optParams Optional parameters.
     * @return Project
     */
    public function get($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Project($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets metadata common to all instances within the specified project using the data included in the
     * request. (projects.setCommonInstanceMetadata)
     *
     * @param string $project Name of the project scoping this request.
     * @param Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function setCommonInstanceMetadata($project, Metadata $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setCommonInstanceMetadata', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "snapshots" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $snapshots = $computeService->snapshots;
   *  </code>
   */
  class SnapshotsServiceResource extends ServiceResource {


    /**
     * Deletes the specified persistent disk snapshot resource. (snapshots.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to delete.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function delete($project, $snapshot, $optParams = array()) {
      $params = array('project' => $project, 'snapshot' => $snapshot);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified persistent disk snapshot resource. (snapshots.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to return.
     * @param array $optParams Optional parameters.
     * @return Snapshot
     */
    public function get($project, $snapshot, $optParams = array()) {
      $params = array('project' => $project, 'snapshot' => $snapshot);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Snapshot($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a persistent disk snapshot resource in the specified project using the data included in
     * the request. (snapshots.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param Snapshot $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function insert($project, Snapshot $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of persistent disk snapshot resources contained within the specified project.
     * (snapshots.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return SnapshotList
     */
    public function listSnapshots($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new SnapshotList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "zoneOperations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $zoneOperations = $computeService->zoneOperations;
   *  </code>
   */
  class ZoneOperationsServiceResource extends ServiceResource {


    /**
     * Deletes the specified zone-specific operation resource. (zoneOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $zone, $operation, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves the specified zone-specific operation resource. (zoneOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function get($project, $zone, $operation, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of operation resources contained within the specified zone.
     * (zoneOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return OperationList
     */
    public function listZoneOperations($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new OperationList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "zones" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new ComputeService(...);
   *   $zones = $computeService->zones;
   *  </code>
   */
  class ZonesServiceResource extends ServiceResource {


    /**
     * Returns the specified zone resource. (zones.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone resource to return.
     * @param array $optParams Optional parameters.
     * @return Zone
     */
    public function get($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Zone($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of zone resources available to the specified project. (zones.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return ZoneList
     */
    public function listZones($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new ZoneList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Compute (v1beta14).
 *
 * <p>
 * API for the Google Compute Engine service.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/compute/docs/reference/v1beta14" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class ComputeService extends Service {
  public $disks;
  public $firewalls;
  public $globalOperations;
  public $images;
  public $instances;
  public $kernels;
  public $machineTypes;
  public $networks;
  public $projects;
  public $snapshots;
  public $zoneOperations;
  public $zones;
  /**
   * Constructs the internal representation of the Compute service.
   *
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'compute/v1beta14/projects/';
    $this->version = 'v1beta14';
    $this->serviceName = 'compute';

    $client->addService($this->serviceName, $this->version);
    $this->disks = new DisksServiceResource($this, $this->serviceName, 'disks', json_decode('{"methods": {"delete": {"id": "compute.disks.delete", "path": "{project}/zones/{zone}/disks/{disk}", "httpMethod": "DELETE", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.disks.get", "path": "{project}/zones/{zone}/disks/{disk}", "httpMethod": "GET", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Disk"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.disks.insert", "path": "{project}/zones/{zone}/disks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "sourceImage": {"type": "string", "location": "query"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Disk"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.disks.list", "path": "{project}/zones/{zone}/disks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DiskList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->firewalls = new FirewallsServiceResource($this, $this->serviceName, 'firewalls', json_decode('{"methods": {"delete": {"id": "compute.firewalls.delete", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "DELETE", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.firewalls.get", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "GET", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Firewall"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.firewalls.insert", "path": "{project}/global/firewalls", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.firewalls.list", "path": "{project}/global/firewalls", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "FirewallList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "patch": {"id": "compute.firewalls.patch", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "PATCH", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "update": {"id": "compute.firewalls.update", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "PUT", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->globalOperations = new GlobalOperationsServiceResource($this, $this->serviceName, 'globalOperations', json_decode('{"methods": {"delete": {"id": "compute.globalOperations.delete", "path": "{project}/global/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.globalOperations.get", "path": "{project}/global/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.globalOperations.list", "path": "{project}/global/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->images = new ImagesServiceResource($this, $this->serviceName, 'images', json_decode('{"methods": {"delete": {"id": "compute.images.delete", "path": "{project}/global/images/{image}", "httpMethod": "DELETE", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "deprecate": {"id": "compute.images.deprecate", "path": "{project}/global/images/{image}/deprecate", "httpMethod": "POST", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "DeprecationStatus"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.images.get", "path": "{project}/global/images/{image}", "httpMethod": "GET", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Image"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.images.insert", "path": "{project}/global/images", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Image"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/devstorage.read_only"]}, "list": {"id": "compute.images.list", "path": "{project}/global/images", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ImageList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->instances = new InstancesServiceResource($this, $this->serviceName, 'instances', json_decode('{"methods": {"addAccessConfig": {"id": "compute.instances.addAccessConfig", "path": "{project}/zones/{zone}/instances/{instance}/addAccessConfig", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "network_interface": {"type": "string", "required": true, "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AccessConfig"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "delete": {"id": "compute.instances.delete", "path": "{project}/zones/{zone}/instances/{instance}", "httpMethod": "DELETE", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "deleteAccessConfig": {"id": "compute.instances.deleteAccessConfig", "path": "{project}/zones/{zone}/instances/{instance}/deleteAccessConfig", "httpMethod": "POST", "parameters": {"access_config": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "network_interface": {"type": "string", "required": true, "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.instances.get", "path": "{project}/zones/{zone}/instances/{instance}", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Instance"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "getSerialPortOutput": {"id": "compute.instances.getSerialPortOutput", "path": "{project}/zones/{zone}/instances/{instance}/serialPort", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SerialPortOutput"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.instances.insert", "path": "{project}/zones/{zone}/instances", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Instance"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.instances.list", "path": "{project}/zones/{zone}/instances", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstanceList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "setMetadata": {"id": "compute.instances.setMetadata", "path": "{project}/zones/{zone}/instances/{instance}/setMetadata", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Metadata"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "setTags": {"id": "compute.instances.setTags", "path": "{project}/zones/{zone}/instances/{instance}/setTags", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Tags"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->kernels = new KernelsServiceResource($this, $this->serviceName, 'kernels', json_decode('{"methods": {"get": {"id": "compute.kernels.get", "path": "{project}/global/kernels/{kernel}", "httpMethod": "GET", "parameters": {"kernel": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Kernel"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.kernels.list", "path": "{project}/global/kernels", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "KernelList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->machineTypes = new MachineTypesServiceResource($this, $this->serviceName, 'machineTypes', json_decode('{"methods": {"get": {"id": "compute.machineTypes.get", "path": "{project}/global/machineTypes/{machineType}", "httpMethod": "GET", "parameters": {"machineType": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineType"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.machineTypes.list", "path": "{project}/global/machineTypes", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineTypeList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->networks = new NetworksServiceResource($this, $this->serviceName, 'networks', json_decode('{"methods": {"delete": {"id": "compute.networks.delete", "path": "{project}/global/networks/{network}", "httpMethod": "DELETE", "parameters": {"network": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.networks.get", "path": "{project}/global/networks/{network}", "httpMethod": "GET", "parameters": {"network": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Network"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.networks.insert", "path": "{project}/global/networks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Network"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.networks.list", "path": "{project}/global/networks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "NetworkList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->projects = new ProjectsServiceResource($this, $this->serviceName, 'projects', json_decode('{"methods": {"get": {"id": "compute.projects.get", "path": "{project}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Project"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "setCommonInstanceMetadata": {"id": "compute.projects.setCommonInstanceMetadata", "path": "{project}/setCommonInstanceMetadata", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Metadata"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->snapshots = new SnapshotsServiceResource($this, $this->serviceName, 'snapshots', json_decode('{"methods": {"delete": {"id": "compute.snapshots.delete", "path": "{project}/global/snapshots/{snapshot}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "snapshot": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.snapshots.get", "path": "{project}/global/snapshots/{snapshot}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "snapshot": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Snapshot"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.snapshots.insert", "path": "{project}/global/snapshots", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Snapshot"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.snapshots.list", "path": "{project}/global/snapshots", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SnapshotList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->zoneOperations = new ZoneOperationsServiceResource($this, $this->serviceName, 'zoneOperations', json_decode('{"methods": {"delete": {"id": "compute.zoneOperations.delete", "path": "{project}/zones/{zone}/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.zoneOperations.get", "path": "{project}/zones/{zone}/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.zoneOperations.list", "path": "{project}/zones/{zone}/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->zones = new ZonesServiceResource($this, $this->serviceName, 'zones', json_decode('{"methods": {"get": {"id": "compute.zones.get", "path": "{project}/zones/{zone}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Zone"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.zones.list", "path": "{project}/zones", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ZoneList"}, "scopes": ["https://www.googleapis.com/auth/compute.readonly"]}}}', true));

  }
}

class AccessConfig extends Model {
  public $kind;
  public $name;
  public $natIP;
  public $type;
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
  public function setNatIP($natIP) {
    $this->natIP = $natIP;
  }
  public function getNatIP() {
    return $this->natIP;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class AttachedDisk extends Model {
  public $boot;
  public $deviceName;
  public $index;
  public $kind;
  public $mode;
  public $source;
  public $type;
  public function setBoot($boot) {
    $this->boot = $boot;
  }
  public function getBoot() {
    return $this->boot;
  }
  public function setDeviceName($deviceName) {
    $this->deviceName = $deviceName;
  }
  public function getDeviceName() {
    return $this->deviceName;
  }
  public function setIndex($index) {
    $this->index = $index;
  }
  public function getIndex() {
    return $this->index;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMode($mode) {
    $this->mode = $mode;
  }
  public function getMode() {
    return $this->mode;
  }
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class DeprecationStatus extends Model {
  public $deleted;
  public $deprecated;
  public $obsolete;
  public $replacement;
  public $state;
  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }
  public function getDeleted() {
    return $this->deleted;
  }
  public function setDeprecated($deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setObsolete($obsolete) {
    $this->obsolete = $obsolete;
  }
  public function getObsolete() {
    return $this->obsolete;
  }
  public function setReplacement($replacement) {
    $this->replacement = $replacement;
  }
  public function getReplacement() {
    return $this->replacement;
  }
  public function setState($state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
}

class Disk extends Model {
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $options;
  public $selfLink;
  public $sizeGb;
  public $sourceSnapshot;
  public $sourceSnapshotId;
  public $status;
  public $zone;
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setOptions($options) {
    $this->options = $options;
  }
  public function getOptions() {
    return $this->options;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSizeGb($sizeGb) {
    $this->sizeGb = $sizeGb;
  }
  public function getSizeGb() {
    return $this->sizeGb;
  }
  public function setSourceSnapshot($sourceSnapshot) {
    $this->sourceSnapshot = $sourceSnapshot;
  }
  public function getSourceSnapshot() {
    return $this->sourceSnapshot;
  }
  public function setSourceSnapshotId($sourceSnapshotId) {
    $this->sourceSnapshotId = $sourceSnapshotId;
  }
  public function getSourceSnapshotId() {
    return $this->sourceSnapshotId;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setZone($zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class DiskList extends Model {
  public $id;
  protected $__itemsType = 'Disk';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Disk) */ $items) {
    $this->assertIsArray($items, 'Disk', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Firewall extends Model {
  protected $__allowedType = 'FirewallAllowed';
  protected $__allowedDataType = 'array';
  public $allowed;
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $network;
  public $selfLink;
  public $sourceRanges;
  public $sourceTags;
  public $targetTags;
  public function setAllowed(/* array(FirewallAllowed) */ $allowed) {
    $this->assertIsArray($allowed, 'FirewallAllowed', __METHOD__);
    $this->allowed = $allowed;
  }
  public function getAllowed() {
    return $this->allowed;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNetwork($network) {
    $this->network = $network;
  }
  public function getNetwork() {
    return $this->network;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceRanges(/* array(string) */ $sourceRanges) {
    $this->assertIsArray($sourceRanges, 'string', __METHOD__);
    $this->sourceRanges = $sourceRanges;
  }
  public function getSourceRanges() {
    return $this->sourceRanges;
  }
  public function setSourceTags(/* array(string) */ $sourceTags) {
    $this->assertIsArray($sourceTags, 'string', __METHOD__);
    $this->sourceTags = $sourceTags;
  }
  public function getSourceTags() {
    return $this->sourceTags;
  }
  public function setTargetTags(/* array(string) */ $targetTags) {
    $this->assertIsArray($targetTags, 'string', __METHOD__);
    $this->targetTags = $targetTags;
  }
  public function getTargetTags() {
    return $this->targetTags;
  }
}

class FirewallAllowed extends Model {
  public $IPProtocol;
  public $ports;
  public function setIPProtocol($IPProtocol) {
    $this->IPProtocol = $IPProtocol;
  }
  public function getIPProtocol() {
    return $this->IPProtocol;
  }
  public function setPorts(/* array(string) */ $ports) {
    $this->assertIsArray($ports, 'string', __METHOD__);
    $this->ports = $ports;
  }
  public function getPorts() {
    return $this->ports;
  }
}

class FirewallList extends Model {
  public $id;
  protected $__itemsType = 'Firewall';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Firewall) */ $items) {
    $this->assertIsArray($items, 'Firewall', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Image extends Model {
  public $creationTimestamp;
  protected $__deprecatedType = 'DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $preferredKernel;
  protected $__rawDiskType = 'ImageRawDisk';
  protected $__rawDiskDataType = '';
  public $rawDisk;
  public $selfLink;
  public $sourceType;
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPreferredKernel($preferredKernel) {
    $this->preferredKernel = $preferredKernel;
  }
  public function getPreferredKernel() {
    return $this->preferredKernel;
  }
  public function setRawDisk(ImageRawDisk $rawDisk) {
    $this->rawDisk = $rawDisk;
  }
  public function getRawDisk() {
    return $this->rawDisk;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceType($sourceType) {
    $this->sourceType = $sourceType;
  }
  public function getSourceType() {
    return $this->sourceType;
  }
}

class ImageList extends Model {
  public $id;
  protected $__itemsType = 'Image';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Image) */ $items) {
    $this->assertIsArray($items, 'Image', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ImageRawDisk extends Model {
  public $containerType;
  public $sha1Checksum;
  public $source;
  public function setContainerType($containerType) {
    $this->containerType = $containerType;
  }
  public function getContainerType() {
    return $this->containerType;
  }
  public function setSha1Checksum($sha1Checksum) {
    $this->sha1Checksum = $sha1Checksum;
  }
  public function getSha1Checksum() {
    return $this->sha1Checksum;
  }
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
}

class Instance extends Model {
  public $canIpForward;
  public $creationTimestamp;
  public $description;
  protected $__disksType = 'AttachedDisk';
  protected $__disksDataType = 'array';
  public $disks;
  public $id;
  public $image;
  public $kernel;
  public $kind;
  public $machineType;
  protected $__metadataType = 'Metadata';
  protected $__metadataDataType = '';
  public $metadata;
  public $name;
  protected $__networkInterfacesType = 'NetworkInterface';
  protected $__networkInterfacesDataType = 'array';
  public $networkInterfaces;
  public $selfLink;
  protected $__serviceAccountsType = 'ServiceAccount';
  protected $__serviceAccountsDataType = 'array';
  public $serviceAccounts;
  public $status;
  public $statusMessage;
  protected $__tagsType = 'Tags';
  protected $__tagsDataType = '';
  public $tags;
  public $zone;
  public function setCanIpForward($canIpForward) {
    $this->canIpForward = $canIpForward;
  }
  public function getCanIpForward() {
    return $this->canIpForward;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setDisks(/* array(AttachedDisk) */ $disks) {
    $this->assertIsArray($disks, 'AttachedDisk', __METHOD__);
    $this->disks = $disks;
  }
  public function getDisks() {
    return $this->disks;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setImage($image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setKernel($kernel) {
    $this->kernel = $kernel;
  }
  public function getKernel() {
    return $this->kernel;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMachineType($machineType) {
    $this->machineType = $machineType;
  }
  public function getMachineType() {
    return $this->machineType;
  }
  public function setMetadata(Metadata $metadata) {
    $this->metadata = $metadata;
  }
  public function getMetadata() {
    return $this->metadata;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNetworkInterfaces(/* array(NetworkInterface) */ $networkInterfaces) {
    $this->assertIsArray($networkInterfaces, 'NetworkInterface', __METHOD__);
    $this->networkInterfaces = $networkInterfaces;
  }
  public function getNetworkInterfaces() {
    return $this->networkInterfaces;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setServiceAccounts(/* array(ServiceAccount) */ $serviceAccounts) {
    $this->assertIsArray($serviceAccounts, 'ServiceAccount', __METHOD__);
    $this->serviceAccounts = $serviceAccounts;
  }
  public function getServiceAccounts() {
    return $this->serviceAccounts;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setStatusMessage($statusMessage) {
    $this->statusMessage = $statusMessage;
  }
  public function getStatusMessage() {
    return $this->statusMessage;
  }
  public function setTags(Tags $tags) {
    $this->tags = $tags;
  }
  public function getTags() {
    return $this->tags;
  }
  public function setZone($zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class InstanceList extends Model {
  public $id;
  protected $__itemsType = 'Instance';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Instance) */ $items) {
    $this->assertIsArray($items, 'Instance', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Kernel extends Model {
  public $creationTimestamp;
  protected $__deprecatedType = 'DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $selfLink;
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class KernelList extends Model {
  public $id;
  protected $__itemsType = 'Kernel';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Kernel) */ $items) {
    $this->assertIsArray($items, 'Kernel', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class MachineType extends Model {
  public $availableZone;
  public $creationTimestamp;
  protected $__deprecatedType = 'DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  protected $__ephemeralDisksType = 'MachineTypeEphemeralDisks';
  protected $__ephemeralDisksDataType = 'array';
  public $ephemeralDisks;
  public $guestCpus;
  public $id;
  public $imageSpaceGb;
  public $kind;
  public $maximumPersistentDisks;
  public $maximumPersistentDisksSizeGb;
  public $memoryMb;
  public $name;
  public $selfLink;
  public function setAvailableZone(/* array(string) */ $availableZone) {
    $this->assertIsArray($availableZone, 'string', __METHOD__);
    $this->availableZone = $availableZone;
  }
  public function getAvailableZone() {
    return $this->availableZone;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEphemeralDisks(/* array(MachineTypeEphemeralDisks) */ $ephemeralDisks) {
    $this->assertIsArray($ephemeralDisks, 'MachineTypeEphemeralDisks', __METHOD__);
    $this->ephemeralDisks = $ephemeralDisks;
  }
  public function getEphemeralDisks() {
    return $this->ephemeralDisks;
  }
  public function setGuestCpus($guestCpus) {
    $this->guestCpus = $guestCpus;
  }
  public function getGuestCpus() {
    return $this->guestCpus;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setImageSpaceGb($imageSpaceGb) {
    $this->imageSpaceGb = $imageSpaceGb;
  }
  public function getImageSpaceGb() {
    return $this->imageSpaceGb;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMaximumPersistentDisks($maximumPersistentDisks) {
    $this->maximumPersistentDisks = $maximumPersistentDisks;
  }
  public function getMaximumPersistentDisks() {
    return $this->maximumPersistentDisks;
  }
  public function setMaximumPersistentDisksSizeGb($maximumPersistentDisksSizeGb) {
    $this->maximumPersistentDisksSizeGb = $maximumPersistentDisksSizeGb;
  }
  public function getMaximumPersistentDisksSizeGb() {
    return $this->maximumPersistentDisksSizeGb;
  }
  public function setMemoryMb($memoryMb) {
    $this->memoryMb = $memoryMb;
  }
  public function getMemoryMb() {
    return $this->memoryMb;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class MachineTypeEphemeralDisks extends Model {
  public $diskGb;
  public function setDiskGb($diskGb) {
    $this->diskGb = $diskGb;
  }
  public function getDiskGb() {
    return $this->diskGb;
  }
}

class MachineTypeList extends Model {
  public $id;
  protected $__itemsType = 'MachineType';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(MachineType) */ $items) {
    $this->assertIsArray($items, 'MachineType', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Metadata extends Model {
  public $fingerprint;
  protected $__itemsType = 'MetadataItems';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setFingerprint($fingerprint) {
    $this->fingerprint = $fingerprint;
  }
  public function getFingerprint() {
    return $this->fingerprint;
  }
  public function setItems(/* array(MetadataItems) */ $items) {
    $this->assertIsArray($items, 'MetadataItems', __METHOD__);
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

class MetadataItems extends Model {
  public $key;
  public $value;
  public function setKey($key) {
    $this->key = $key;
  }
  public function getKey() {
    return $this->key;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Network extends Model {
  public $IPv4Range;
  public $creationTimestamp;
  public $description;
  public $gatewayIPv4;
  public $id;
  public $kind;
  public $name;
  public $selfLink;
  public function setIPv4Range($IPv4Range) {
    $this->IPv4Range = $IPv4Range;
  }
  public function getIPv4Range() {
    return $this->IPv4Range;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setGatewayIPv4($gatewayIPv4) {
    $this->gatewayIPv4 = $gatewayIPv4;
  }
  public function getGatewayIPv4() {
    return $this->gatewayIPv4;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class NetworkInterface extends Model {
  protected $__accessConfigsType = 'AccessConfig';
  protected $__accessConfigsDataType = 'array';
  public $accessConfigs;
  public $name;
  public $network;
  public $networkIP;
  public function setAccessConfigs(/* array(AccessConfig) */ $accessConfigs) {
    $this->assertIsArray($accessConfigs, 'AccessConfig', __METHOD__);
    $this->accessConfigs = $accessConfigs;
  }
  public function getAccessConfigs() {
    return $this->accessConfigs;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNetwork($network) {
    $this->network = $network;
  }
  public function getNetwork() {
    return $this->network;
  }
  public function setNetworkIP($networkIP) {
    $this->networkIP = $networkIP;
  }
  public function getNetworkIP() {
    return $this->networkIP;
  }
}

class NetworkList extends Model {
  public $id;
  protected $__itemsType = 'Network';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Network) */ $items) {
    $this->assertIsArray($items, 'Network', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Operation extends Model {
  public $clientOperationId;
  public $creationTimestamp;
  public $endTime;
  protected $__errorType = 'OperationError';
  protected $__errorDataType = '';
  public $error;
  public $httpErrorMessage;
  public $httpErrorStatusCode;
  public $id;
  public $insertTime;
  public $kind;
  public $name;
  public $operationType;
  public $progress;
  public $selfLink;
  public $startTime;
  public $status;
  public $statusMessage;
  public $targetId;
  public $targetLink;
  public $user;
  protected $__warningsType = 'OperationWarnings';
  protected $__warningsDataType = 'array';
  public $warnings;
  public $zone;
  public function setClientOperationId($clientOperationId) {
    $this->clientOperationId = $clientOperationId;
  }
  public function getClientOperationId() {
    return $this->clientOperationId;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setEndTime($endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setError(OperationError $error) {
    $this->error = $error;
  }
  public function getError() {
    return $this->error;
  }
  public function setHttpErrorMessage($httpErrorMessage) {
    $this->httpErrorMessage = $httpErrorMessage;
  }
  public function getHttpErrorMessage() {
    return $this->httpErrorMessage;
  }
  public function setHttpErrorStatusCode($httpErrorStatusCode) {
    $this->httpErrorStatusCode = $httpErrorStatusCode;
  }
  public function getHttpErrorStatusCode() {
    return $this->httpErrorStatusCode;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInsertTime($insertTime) {
    $this->insertTime = $insertTime;
  }
  public function getInsertTime() {
    return $this->insertTime;
  }
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
  public function setOperationType($operationType) {
    $this->operationType = $operationType;
  }
  public function getOperationType() {
    return $this->operationType;
  }
  public function setProgress($progress) {
    $this->progress = $progress;
  }
  public function getProgress() {
    return $this->progress;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStartTime($startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setStatusMessage($statusMessage) {
    $this->statusMessage = $statusMessage;
  }
  public function getStatusMessage() {
    return $this->statusMessage;
  }
  public function setTargetId($targetId) {
    $this->targetId = $targetId;
  }
  public function getTargetId() {
    return $this->targetId;
  }
  public function setTargetLink($targetLink) {
    $this->targetLink = $targetLink;
  }
  public function getTargetLink() {
    return $this->targetLink;
  }
  public function setUser($user) {
    $this->user = $user;
  }
  public function getUser() {
    return $this->user;
  }
  public function setWarnings(/* array(OperationWarnings) */ $warnings) {
    $this->assertIsArray($warnings, 'OperationWarnings', __METHOD__);
    $this->warnings = $warnings;
  }
  public function getWarnings() {
    return $this->warnings;
  }
  public function setZone($zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class OperationError extends Model {
  protected $__errorsType = 'OperationErrorErrors';
  protected $__errorsDataType = 'array';
  public $errors;
  public function setErrors(/* array(OperationErrorErrors) */ $errors) {
    $this->assertIsArray($errors, 'OperationErrorErrors', __METHOD__);
    $this->errors = $errors;
  }
  public function getErrors() {
    return $this->errors;
  }
}

class OperationErrorErrors extends Model {
  public $code;
  public $location;
  public $message;
  public function setCode($code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setMessage($message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class OperationList extends Model {
  public $id;
  protected $__itemsType = 'Operation';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Operation) */ $items) {
    $this->assertIsArray($items, 'Operation', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class OperationWarnings extends Model {
  public $code;
  protected $__dataType = 'OperationWarningsData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode($code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(OperationWarningsData) */ $data) {
    $this->assertIsArray($data, 'OperationWarningsData', __METHOD__);
    $this->data = $data;
  }
  public function getData() {
    return $this->data;
  }
  public function setMessage($message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class OperationWarningsData extends Model {
  public $key;
  public $value;
  public function setKey($key) {
    $this->key = $key;
  }
  public function getKey() {
    return $this->key;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Project extends Model {
  protected $__commonInstanceMetadataType = 'Metadata';
  protected $__commonInstanceMetadataDataType = '';
  public $commonInstanceMetadata;
  public $creationTimestamp;
  public $description;
  public $externalIpAddresses;
  public $id;
  public $kind;
  public $name;
  protected $__quotasType = 'Quota';
  protected $__quotasDataType = 'array';
  public $quotas;
  public $selfLink;
  public function setCommonInstanceMetadata(Metadata $commonInstanceMetadata) {
    $this->commonInstanceMetadata = $commonInstanceMetadata;
  }
  public function getCommonInstanceMetadata() {
    return $this->commonInstanceMetadata;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setExternalIpAddresses(/* array(string) */ $externalIpAddresses) {
    $this->assertIsArray($externalIpAddresses, 'string', __METHOD__);
    $this->externalIpAddresses = $externalIpAddresses;
  }
  public function getExternalIpAddresses() {
    return $this->externalIpAddresses;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setQuotas(/* array(Quota) */ $quotas) {
    $this->assertIsArray($quotas, 'Quota', __METHOD__);
    $this->quotas = $quotas;
  }
  public function getQuotas() {
    return $this->quotas;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Quota extends Model {
  public $limit;
  public $metric;
  public $usage;
  public function setLimit($limit) {
    $this->limit = $limit;
  }
  public function getLimit() {
    return $this->limit;
  }
  public function setMetric($metric) {
    $this->metric = $metric;
  }
  public function getMetric() {
    return $this->metric;
  }
  public function setUsage($usage) {
    $this->usage = $usage;
  }
  public function getUsage() {
    return $this->usage;
  }
}

class SerialPortOutput extends Model {
  public $contents;
  public $kind;
  public $selfLink;
  public function setContents($contents) {
    $this->contents = $contents;
  }
  public function getContents() {
    return $this->contents;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ServiceAccount extends Model {
  public $email;
  public $scopes;
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setScopes(/* array(string) */ $scopes) {
    $this->assertIsArray($scopes, 'string', __METHOD__);
    $this->scopes = $scopes;
  }
  public function getScopes() {
    return $this->scopes;
  }
}

class Snapshot extends Model {
  public $creationTimestamp;
  public $description;
  public $diskSizeGb;
  public $id;
  public $kind;
  public $name;
  public $selfLink;
  public $sourceDisk;
  public $sourceDiskId;
  public $status;
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setDiskSizeGb($diskSizeGb) {
    $this->diskSizeGb = $diskSizeGb;
  }
  public function getDiskSizeGb() {
    return $this->diskSizeGb;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceDisk($sourceDisk) {
    $this->sourceDisk = $sourceDisk;
  }
  public function getSourceDisk() {
    return $this->sourceDisk;
  }
  public function setSourceDiskId($sourceDiskId) {
    $this->sourceDiskId = $sourceDiskId;
  }
  public function getSourceDiskId() {
    return $this->sourceDiskId;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class SnapshotList extends Model {
  public $id;
  protected $__itemsType = 'Snapshot';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Snapshot) */ $items) {
    $this->assertIsArray($items, 'Snapshot', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class Tags extends Model {
  public $fingerprint;
  public $items;
  public function setFingerprint($fingerprint) {
    $this->fingerprint = $fingerprint;
  }
  public function getFingerprint() {
    return $this->fingerprint;
  }
  public function setItems(/* array(string) */ $items) {
    $this->assertIsArray($items, 'string', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
}

class Zone extends Model {
  public $availableMachineType;
  public $creationTimestamp;
  protected $__deprecatedType = 'DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  public $id;
  public $kind;
  protected $__maintenanceWindowsType = 'ZoneMaintenanceWindows';
  protected $__maintenanceWindowsDataType = 'array';
  public $maintenanceWindows;
  public $name;
  protected $__quotasType = 'Quota';
  protected $__quotasDataType = 'array';
  public $quotas;
  public $selfLink;
  public $status;
  public function setAvailableMachineType(/* array(string) */ $availableMachineType) {
    $this->assertIsArray($availableMachineType, 'string', __METHOD__);
    $this->availableMachineType = $availableMachineType;
  }
  public function getAvailableMachineType() {
    return $this->availableMachineType;
  }
  public function setCreationTimestamp($creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setMaintenanceWindows(/* array(ZoneMaintenanceWindows) */ $maintenanceWindows) {
    $this->assertIsArray($maintenanceWindows, 'ZoneMaintenanceWindows', __METHOD__);
    $this->maintenanceWindows = $maintenanceWindows;
  }
  public function getMaintenanceWindows() {
    return $this->maintenanceWindows;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setQuotas(/* array(Quota) */ $quotas) {
    $this->assertIsArray($quotas, 'Quota', __METHOD__);
    $this->quotas = $quotas;
  }
  public function getQuotas() {
    return $this->quotas;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class ZoneList extends Model {
  public $id;
  protected $__itemsType = 'Zone';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(Zone) */ $items) {
    $this->assertIsArray($items, 'Zone', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class ZoneMaintenanceWindows extends Model {
  public $beginTime;
  public $description;
  public $endTime;
  public $name;
  public function setBeginTime($beginTime) {
    $this->beginTime = $beginTime;
  }
  public function getBeginTime() {
    return $this->beginTime;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEndTime($endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}
