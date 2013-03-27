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
   * The "freebusy" collection of methods.
   * Typical usage is:
   *  <code>
   *   $calendarService = new CalendarService(...);
   *   $freebusy = $calendarService->freebusy;
   *  </code>
   */
  class FreebusyServiceResource extends ServiceResource {


    /**
     * Returns free/busy information for a set of calendars. (freebusy.query)
     *
     * @param FreeBusyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return FreeBusyResponse
     */
    public function query(FreeBusyRequest $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('query', array($params));
      if ($this->useObjects()) {
        return new FreeBusyResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "settings" collection of methods.
   * Typical usage is:
   *  <code>
   *   $calendarService = new CalendarService(...);
   *   $settings = $calendarService->settings;
   *  </code>
   */
  class SettingsServiceResource extends ServiceResource {


    /**
     * Returns all user settings for the authenticated user. (settings.list)
     *
     * @param array $optParams Optional parameters.
     * @return Settings
     */
    public function listSettings($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Settings($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a single user setting. (settings.get)
     *
     * @param string $setting Name of the user setting.
     * @param array $optParams Optional parameters.
     * @return Setting
     */
    public function get($setting, $optParams = array()) {
      $params = array('setting' => $setting);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Setting($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "calendarList" collection of methods.
   * Typical usage is:
   *  <code>
   *   $calendarService = new CalendarService(...);
   *   $calendarList = $calendarService->calendarList;
   *  </code>
   */
  class CalendarListServiceResource extends ServiceResource {


    /**
     * Adds an entry to the user's calendar list. (calendarList.insert)
     *
     * @param CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool colorRgbFormat Whether to use the 'frontendColor' and 'backgroundColor' fields to write the calendar colors (RGB). If this feature is used, the index-based 'color' field will be set to the best matching option automatically. Optional. The default is False.
     * @return CalendarListEntry
     */
    public function insert(CalendarListEntry $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new CalendarListEntry($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns an entry on the user's calendar list. (calendarList.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return CalendarListEntry
     */
    public function get($calendarId, $optParams = array()) {
      $params = array('calendarId' => $calendarId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new CalendarListEntry($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns entries on the user's calendar list. (calendarList.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token specifying which result page to return. Optional.
     * @opt_param bool showHidden Whether to show hidden entries. Optional. The default is False.
     * @opt_param int maxResults Maximum number of entries returned on one result page. Optional.
     * @opt_param string minAccessRole The minimum access role for the user in the returned entires. Optional. The default is no restriction.
     * @return CalendarList
     */
    public function listCalendarList($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new CalendarList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an entry on the user's calendar list. (calendarList.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool colorRgbFormat Whether to use the 'frontendColor' and 'backgroundColor' fields to write the calendar colors (RGB). If this feature is used, the index-based 'color' field will be set to the best matching option automatically. Optional. The default is False.
     * @return CalendarListEntry
     */
    public function update($calendarId, CalendarListEntry $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new CalendarListEntry($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an entry on the user's calendar list. This method supports patch semantics.
     * (calendarList.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool colorRgbFormat Whether to use the 'frontendColor' and 'backgroundColor' fields to write the calendar colors (RGB). If this feature is used, the index-based 'color' field will be set to the best matching option automatically. Optional. The default is False.
     * @return CalendarListEntry
     */
    public function patch($calendarId, CalendarListEntry $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new CalendarListEntry($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an entry on the user's calendar list. (calendarList.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     */
    public function delete($calendarId, $optParams = array()) {
      $params = array('calendarId' => $calendarId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "calendars" collection of methods.
   * Typical usage is:
   *  <code>
   *   $calendarService = new CalendarService(...);
   *   $calendars = $calendarService->calendars;
   *  </code>
   */
  class CalendarsServiceResource extends ServiceResource {


    /**
     * Creates a secondary calendar. (calendars.insert)
     *
     * @param Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Calendar
     */
    public function insert(Calendar $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Calendar($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns metadata for a calendar. (calendars.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Calendar
     */
    public function get($calendarId, $optParams = array()) {
      $params = array('calendarId' => $calendarId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Calendar($data);
      } else {
        return $data;
      }
    }
    /**
     * Clears a primary calendar. This operation deletes all data associated with the primary calendar
     * of an account and cannot be undone. (calendars.clear)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     */
    public function clear($calendarId, $optParams = array()) {
      $params = array('calendarId' => $calendarId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('clear', array($params));
      return $data;
    }
    /**
     * Updates metadata for a calendar. (calendars.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Calendar
     */
    public function update($calendarId, Calendar $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Calendar($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates metadata for a calendar. This method supports patch semantics. (calendars.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Calendar
     */
    public function patch($calendarId, Calendar $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Calendar($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a secondary calendar. (calendars.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     */
    public function delete($calendarId, $optParams = array()) {
      $params = array('calendarId' => $calendarId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "acl" collection of methods.
   * Typical usage is:
   *  <code>
   *   $calendarService = new CalendarService(...);
   *   $acl = $calendarService->acl;
   *  </code>
   */
  class AclServiceResource extends ServiceResource {


    /**
     * Creates an access control rule. (acl.insert)
     *
     * @param string $calendarId Calendar identifier.
     * @param AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return AclRule
     */
    public function insert($calendarId, AclRule $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new AclRule($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns an access control rule. (acl.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param array $optParams Optional parameters.
     * @return AclRule
     */
    public function get($calendarId, $ruleId, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new AclRule($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the rules in the access control list for the calendar. (acl.list)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Acl
     */
    public function listAcl($calendarId, $optParams = array()) {
      $params = array('calendarId' => $calendarId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Acl($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an access control rule. (acl.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return AclRule
     */
    public function update($calendarId, $ruleId, AclRule $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new AclRule($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an access control rule. This method supports patch semantics. (acl.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return AclRule
     */
    public function patch($calendarId, $ruleId, AclRule $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new AclRule($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an access control rule. (acl.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param array $optParams Optional parameters.
     */
    public function delete($calendarId, $ruleId, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "colors" collection of methods.
   * Typical usage is:
   *  <code>
   *   $calendarService = new CalendarService(...);
   *   $colors = $calendarService->colors;
   *  </code>
   */
  class ColorsServiceResource extends ServiceResource {


    /**
     * Returns the color definitions for calendars and events. (colors.get)
     *
     * @param array $optParams Optional parameters.
     * @return Colors
     */
    public function get($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Colors($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "events" collection of methods.
   * Typical usage is:
   *  <code>
   *   $calendarService = new CalendarService(...);
   *   $events = $calendarService->events;
   *  </code>
   */
  class EventsServiceResource extends ServiceResource {


    /**
     * Creates an event. (events.insert)
     *
     * @param string $calendarId Calendar identifier.
     * @param Event $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the creation of the new event. Optional. The default is False.
     * @return Event
     */
    public function insert($calendarId, Event $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Event($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns an event. (events.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string timeZone Time zone used in the response. Optional. The default is the time zone of the calendar.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @return Event
     */
    public function get($calendarId, $eventId, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Event($data);
      } else {
        return $data;
      }
    }
    /**
     * Moves an event to another calendar, i.e. changes an event's organizer. (events.move)
     *
     * @param string $calendarId Calendar identifier of the source calendar where the event currently is on.
     * @param string $eventId Event identifier.
     * @param string $destination Calendar identifier of the target calendar where the event is to be moved to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the change of the event's organizer. Optional. The default is False.
     * @return Event
     */
    public function move($calendarId, $eventId, $destination, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'destination' => $destination);
      $params = array_merge($params, $optParams);
      $data = $this->__call('move', array($params));
      if ($this->useObjects()) {
        return new Event($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns events on the specified calendar. (events.list)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy The order of the events returned in the result. Optional. The default is an unspecified, stable order.
     * @opt_param bool showHiddenInvitations Whether to include hidden invitations in the result. Optional. The default is False.
     * @opt_param bool showDeleted Whether to include deleted events (with 'eventStatus' equals 'cancelled') in the result. Optional. The default is False.
     * @opt_param string iCalUID Specifies iCalendar UID (iCalUID) of events to be included in the response. Optional.
     * @opt_param string updatedMin Lower bound for an event's last modification time (as a RFC 3339 timestamp) to filter by. Optional. The default is not to filter by last modification time.
     * @opt_param bool singleEvents Whether to expand recurring events into instances and only return single one-off events and instances of recurring events, but not the underlying recurring events themselves. Optional. The default is False.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param int maxResults Maximum number of events returned on one result page. Optional.
     * @opt_param string q Free text search terms to find events that match these terms in any field, except for extended properties. Optional.
     * @opt_param string pageToken Token specifying which result page to return. Optional.
     * @opt_param string timeMin Lower bound (inclusive) for an event's end time to filter by. Optional. The default is not to filter by end time.
     * @opt_param string timeZone Time zone used in the response. Optional. The default is the time zone of the calendar.
     * @opt_param string timeMax Upper bound (exclusive) for an event's start time to filter by. Optional. The default is not to filter by start time.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @return Events
     */
    public function listEvents($calendarId, $optParams = array()) {
      $params = array('calendarId' => $calendarId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Events($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an event. (events.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param Event $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param bool sendNotifications Whether to send notifications about the event update (e.g. attendee's responses, title changes, etc.). Optional. The default is False.
     * @return Event
     */
    public function update($calendarId, $eventId, Event $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Event($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an event. This method supports patch semantics. (events.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param Event $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param bool sendNotifications Whether to send notifications about the event update (e.g. attendee's responses, title changes, etc.). Optional. The default is False.
     * @return Event
     */
    public function patch($calendarId, $eventId, Event $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Event($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns instances of the specified recurring event. (events.instances)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Recurring event identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool showDeleted Whether to include deleted events (with 'eventStatus' equals 'cancelled') in the result. Optional. The default is False.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the "email" field for the organizer, creator and attendees, even if no real email is available (i.e. a generated, non-working value will be provided). The use of this option is discouraged and should only be used by clients which cannot handle the absence of an email address value in the mentioned places. Optional. The default is False.
     * @opt_param int maxResults Maximum number of events returned on one result page. Optional.
     * @opt_param string pageToken Token specifying which result page to return. Optional.
     * @opt_param string timeZone Time zone used in the response. Optional. The default is the time zone of the calendar.
     * @opt_param string originalStart The original start time of the instance in the result. Optional.
     * @opt_param int maxAttendees The maximum number of attendees to include in the response. If there are more than the specified number of attendees, only the participant is returned. Optional.
     * @return Events
     */
    public function instances($calendarId, $eventId, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('instances', array($params));
      if ($this->useObjects()) {
        return new Events($data);
      } else {
        return $data;
      }
    }
    /**
     * Imports an event. (events.import)
     *
     * @param string $calendarId Calendar identifier.
     * @param Event $postBody
     * @param array $optParams Optional parameters.
     * @return Event
     */
    public function import($calendarId, Event $postBody, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('import', array($params));
      if ($this->useObjects()) {
        return new Event($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates an event based on a simple text string. (events.quickAdd)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $text The text describing the event to be created.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the creation of the event. Optional. The default is False.
     * @return Event
     */
    public function quickAdd($calendarId, $text, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'text' => $text);
      $params = array_merge($params, $optParams);
      $data = $this->__call('quickAdd', array($params));
      if ($this->useObjects()) {
        return new Event($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an event. (events.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the deletion of the event. Optional. The default is False.
     */
    public function delete($calendarId, $eventId, $optParams = array()) {
      $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

/**
 * Service definition for Calendar (v3).
 *
 * <p>
 * Lets you manipulate events and other calendar data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/calendar/v3/using.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class CalendarService extends Service {
  public $freebusy;
  public $settings;
  public $calendarList;
  public $calendars;
  public $acl;
  public $colors;
  public $events;
  /**
   * Constructs the internal representation of the Calendar service.
   *
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->servicePath = 'calendar/v3/';
    $this->version = 'v3';
    $this->serviceName = 'calendar';

    $client->addService($this->serviceName, $this->version);
    $this->freebusy = new FreebusyServiceResource($this, $this->serviceName, 'freebusy', json_decode('{"methods": {"query": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "request": {"$ref": "FreeBusyRequest"}, "response": {"$ref": "FreeBusyResponse"}, "httpMethod": "POST", "path": "freeBusy", "id": "calendar.freebusy.query"}}}', true));
    $this->settings = new SettingsServiceResource($this, $this->serviceName, 'settings', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "path": "users/me/settings", "response": {"$ref": "Settings"}, "id": "calendar.settings.list", "httpMethod": "GET"}, "get": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"setting": {"required": true, "type": "string", "location": "path"}}, "id": "calendar.settings.get", "httpMethod": "GET", "path": "users/me/settings/{setting}", "response": {"$ref": "Setting"}}}}', true));
    $this->calendarList = new CalendarListServiceResource($this, $this->serviceName, 'calendarList', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"colorRgbFormat": {"type": "boolean", "location": "query"}}, "request": {"$ref": "CalendarListEntry"}, "response": {"$ref": "CalendarListEntry"}, "httpMethod": "POST", "path": "users/me/calendarList", "id": "calendar.calendarList.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "id": "calendar.calendarList.get", "httpMethod": "GET", "path": "users/me/calendarList/{calendarId}", "response": {"$ref": "CalendarListEntry"}}, "list": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "showHidden": {"type": "boolean", "location": "query"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "int32"}, "minAccessRole": {"enum": ["freeBusyReader", "owner", "reader", "writer"], "type": "string", "location": "query"}}, "response": {"$ref": "CalendarList"}, "httpMethod": "GET", "path": "users/me/calendarList", "id": "calendar.calendarList.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"colorRgbFormat": {"type": "boolean", "location": "query"}, "calendarId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "CalendarListEntry"}, "response": {"$ref": "CalendarListEntry"}, "httpMethod": "PUT", "path": "users/me/calendarList/{calendarId}", "id": "calendar.calendarList.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"colorRgbFormat": {"type": "boolean", "location": "query"}, "calendarId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "CalendarListEntry"}, "response": {"$ref": "CalendarListEntry"}, "httpMethod": "PATCH", "path": "users/me/calendarList/{calendarId}", "id": "calendar.calendarList.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/calendar"], "path": "users/me/calendarList/{calendarId}", "id": "calendar.calendarList.delete", "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->calendars = new CalendarsServiceResource($this, $this->serviceName, 'calendars', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/calendar"], "request": {"$ref": "Calendar"}, "response": {"$ref": "Calendar"}, "httpMethod": "POST", "path": "calendars", "id": "calendar.calendars.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "id": "calendar.calendars.get", "httpMethod": "GET", "path": "calendars/{calendarId}", "response": {"$ref": "Calendar"}}, "clear": {"scopes": ["https://www.googleapis.com/auth/calendar"], "path": "calendars/{calendarId}/clear", "id": "calendar.calendars.clear", "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "POST"}, "update": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Calendar"}, "response": {"$ref": "Calendar"}, "httpMethod": "PUT", "path": "calendars/{calendarId}", "id": "calendar.calendars.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Calendar"}, "response": {"$ref": "Calendar"}, "httpMethod": "PATCH", "path": "calendars/{calendarId}", "id": "calendar.calendars.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/calendar"], "path": "calendars/{calendarId}", "id": "calendar.calendars.delete", "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->acl = new AclServiceResource($this, $this->serviceName, 'acl', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "AclRule"}, "response": {"$ref": "AclRule"}, "httpMethod": "POST", "path": "calendars/{calendarId}/acl", "id": "calendar.acl.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}, "ruleId": {"required": true, "type": "string", "location": "path"}}, "id": "calendar.acl.get", "httpMethod": "GET", "path": "calendars/{calendarId}/acl/{ruleId}", "response": {"$ref": "AclRule"}}, "list": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "id": "calendar.acl.list", "httpMethod": "GET", "path": "calendars/{calendarId}/acl", "response": {"$ref": "Acl"}}, "update": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}, "ruleId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "AclRule"}, "response": {"$ref": "AclRule"}, "httpMethod": "PUT", "path": "calendars/{calendarId}/acl/{ruleId}", "id": "calendar.acl.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}, "ruleId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "AclRule"}, "response": {"$ref": "AclRule"}, "httpMethod": "PATCH", "path": "calendars/{calendarId}/acl/{ruleId}", "id": "calendar.acl.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/calendar"], "path": "calendars/{calendarId}/acl/{ruleId}", "id": "calendar.acl.delete", "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}, "ruleId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->colors = new ColorsServiceResource($this, $this->serviceName, 'colors', json_decode('{"methods": {"get": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "path": "colors", "response": {"$ref": "Colors"}, "id": "calendar.colors.get", "httpMethod": "GET"}}}', true));
    $this->events = new EventsServiceResource($this, $this->serviceName, 'events', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "httpMethod": "POST", "path": "calendars/{calendarId}/events", "id": "calendar.events.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"eventId": {"required": true, "type": "string", "location": "path"}, "timeZone": {"type": "string", "location": "query"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "maxAttendees": {"minimum": "1", "type": "integer", "location": "query", "format": "int32"}}, "id": "calendar.events.get", "httpMethod": "GET", "path": "calendars/{calendarId}/events/{eventId}", "response": {"$ref": "Event"}}, "move": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"eventId": {"required": true, "type": "string", "location": "path"}, "destination": {"required": true, "type": "string", "location": "query"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "id": "calendar.events.move", "httpMethod": "POST", "path": "calendars/{calendarId}/events/{eventId}/move", "response": {"$ref": "Event"}}, "list": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"orderBy": {"enum": ["startTime", "updated"], "type": "string", "location": "query"}, "showHiddenInvitations": {"type": "boolean", "location": "query"}, "showDeleted": {"type": "boolean", "location": "query"}, "iCalUID": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query", "format": "date-time"}, "singleEvents": {"type": "boolean", "location": "query"}, "alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "int32"}, "q": {"type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "timeMin": {"type": "string", "location": "query", "format": "date-time"}, "timeZone": {"type": "string", "location": "query"}, "timeMax": {"type": "string", "location": "query", "format": "date-time"}, "maxAttendees": {"minimum": "1", "type": "integer", "location": "query", "format": "int32"}}, "id": "calendar.events.list", "httpMethod": "GET", "path": "calendars/{calendarId}/events", "response": {"$ref": "Events"}}, "update": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"eventId": {"required": true, "type": "string", "location": "path"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "httpMethod": "PUT", "path": "calendars/{calendarId}/events/{eventId}", "id": "calendar.events.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"eventId": {"required": true, "type": "string", "location": "path"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "httpMethod": "PATCH", "path": "calendars/{calendarId}/events/{eventId}", "id": "calendar.events.patch"}, "instances": {"scopes": ["https://www.googleapis.com/auth/calendar", "https://www.googleapis.com/auth/calendar.readonly"], "parameters": {"eventId": {"required": true, "type": "string", "location": "path"}, "showDeleted": {"type": "boolean", "location": "query"}, "alwaysIncludeEmail": {"type": "boolean", "location": "query"}, "maxResults": {"minimum": "1", "type": "integer", "location": "query", "format": "int32"}, "pageToken": {"type": "string", "location": "query"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "timeZone": {"type": "string", "location": "query"}, "originalStart": {"type": "string", "location": "query"}, "maxAttendees": {"minimum": "1", "type": "integer", "location": "query", "format": "int32"}}, "id": "calendar.events.instances", "httpMethod": "GET", "path": "calendars/{calendarId}/events/{eventId}/instances", "response": {"$ref": "Events"}}, "import": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"calendarId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Event"}, "response": {"$ref": "Event"}, "httpMethod": "POST", "path": "calendars/{calendarId}/events/import", "id": "calendar.events.import"}, "quickAdd": {"scopes": ["https://www.googleapis.com/auth/calendar"], "parameters": {"text": {"required": true, "type": "string", "location": "query"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "id": "calendar.events.quickAdd", "httpMethod": "POST", "path": "calendars/{calendarId}/events/quickAdd", "response": {"$ref": "Event"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/calendar"], "path": "calendars/{calendarId}/events/{eventId}", "id": "calendar.events.delete", "parameters": {"eventId": {"required": true, "type": "string", "location": "path"}, "calendarId": {"required": true, "type": "string", "location": "path"}, "sendNotifications": {"type": "boolean", "location": "query"}}, "httpMethod": "DELETE"}}}', true));

  }
}

class Acl extends Model {
  public $nextPageToken;
  protected $__itemsType = 'AclRule';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(AclRule) */ $items) {
    $this->assertIsArray($items, 'AclRule', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
}

class AclRule extends Model {
  protected $__scopeType = 'AclRuleScope';
  protected $__scopeDataType = '';
  public $scope;
  public $kind;
  public $etag;
  public $role;
  public $id;
  public function setScope(AclRuleScope $scope) {
    $this->scope = $scope;
  }
  public function getScope() {
    return $this->scope;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class AclRuleScope extends Model {
  public $type;
  public $value;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Calendar extends Model {
  public $kind;
  public $description;
  public $summary;
  public $etag;
  public $location;
  public $timeZone;
  public $id;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setSummary($summary) {
    $this->summary = $summary;
  }
  public function getSummary() {
    return $this->summary;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setTimeZone($timeZone) {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone() {
    return $this->timeZone;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class CalendarList extends Model {
  public $nextPageToken;
  protected $__itemsType = 'CalendarListEntry';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(CalendarListEntry) */ $items) {
    $this->assertIsArray($items, 'CalendarListEntry', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
}

class CalendarListEntry extends Model {
  public $kind;
  public $foregroundColor;
  protected $__defaultRemindersType = 'EventReminder';
  protected $__defaultRemindersDataType = 'array';
  public $defaultReminders;
  public $description;
  public $colorId;
  public $selected;
  public $summary;
  public $etag;
  public $location;
  public $backgroundColor;
  public $summaryOverride;
  public $timeZone;
  public $hidden;
  public $accessRole;
  public $id;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setForegroundColor($foregroundColor) {
    $this->foregroundColor = $foregroundColor;
  }
  public function getForegroundColor() {
    return $this->foregroundColor;
  }
  public function setDefaultReminders(/* array(EventReminder) */ $defaultReminders) {
    $this->assertIsArray($defaultReminders, 'EventReminder', __METHOD__);
    $this->defaultReminders = $defaultReminders;
  }
  public function getDefaultReminders() {
    return $this->defaultReminders;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setColorId($colorId) {
    $this->colorId = $colorId;
  }
  public function getColorId() {
    return $this->colorId;
  }
  public function setSelected($selected) {
    $this->selected = $selected;
  }
  public function getSelected() {
    return $this->selected;
  }
  public function setSummary($summary) {
    $this->summary = $summary;
  }
  public function getSummary() {
    return $this->summary;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setBackgroundColor($backgroundColor) {
    $this->backgroundColor = $backgroundColor;
  }
  public function getBackgroundColor() {
    return $this->backgroundColor;
  }
  public function setSummaryOverride($summaryOverride) {
    $this->summaryOverride = $summaryOverride;
  }
  public function getSummaryOverride() {
    return $this->summaryOverride;
  }
  public function setTimeZone($timeZone) {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone() {
    return $this->timeZone;
  }
  public function setHidden($hidden) {
    $this->hidden = $hidden;
  }
  public function getHidden() {
    return $this->hidden;
  }
  public function setAccessRole($accessRole) {
    $this->accessRole = $accessRole;
  }
  public function getAccessRole() {
    return $this->accessRole;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class ColorDefinition extends Model {
  public $foreground;
  public $background;
  public function setForeground($foreground) {
    $this->foreground = $foreground;
  }
  public function getForeground() {
    return $this->foreground;
  }
  public function setBackground($background) {
    $this->background = $background;
  }
  public function getBackground() {
    return $this->background;
  }
}

class Colors extends Model {
  protected $__calendarType = 'ColorDefinition';
  protected $__calendarDataType = 'map';
  public $calendar;
  public $updated;
  protected $__eventType = 'ColorDefinition';
  protected $__eventDataType = 'map';
  public $event;
  public $kind;
  public function setCalendar(ColorDefinition $calendar) {
    $this->calendar = $calendar;
  }
  public function getCalendar() {
    return $this->calendar;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setEvent(ColorDefinition $event) {
    $this->event = $event;
  }
  public function getEvent() {
    return $this->event;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Error extends Model {
  public $domain;
  public $reason;
  public function setDomain($domain) {
    $this->domain = $domain;
  }
  public function getDomain() {
    return $this->domain;
  }
  public function setReason($reason) {
    $this->reason = $reason;
  }
  public function getReason() {
    return $this->reason;
  }
}

class Event extends Model {
  protected $__creatorType = 'EventCreator';
  protected $__creatorDataType = '';
  public $creator;
  protected $__organizerType = 'EventOrganizer';
  protected $__organizerDataType = '';
  public $organizer;
  public $summary;
  public $id;
  protected $__attendeesType = 'EventAttendee';
  protected $__attendeesDataType = 'array';
  public $attendees;
  public $htmlLink;
  public $recurrence;
  protected $__startType = 'EventDateTime';
  protected $__startDataType = '';
  public $start;
  public $etag;
  public $location;
  public $recurringEventId;
  protected $__gadgetType = 'EventGadget';
  protected $__gadgetDataType = '';
  public $gadget;
  public $status;
  public $updated;
  public $description;
  public $iCalUID;
  protected $__extendedPropertiesType = 'EventExtendedProperties';
  protected $__extendedPropertiesDataType = '';
  public $extendedProperties;
  public $endTimeUnspecified;
  public $sequence;
  public $visibility;
  public $guestsCanModify;
  protected $__endType = 'EventDateTime';
  protected $__endDataType = '';
  public $end;
  public $attendeesOmitted;
  public $kind;
  public $locked;
  public $created;
  public $colorId;
  public $anyoneCanAddSelf;
  protected $__remindersType = 'EventReminders';
  protected $__remindersDataType = '';
  public $reminders;
  public $guestsCanSeeOtherGuests;
  protected $__originalStartTimeType = 'EventDateTime';
  protected $__originalStartTimeDataType = '';
  public $originalStartTime;
  public $guestsCanInviteOthers;
  public $transparency;
  public $privateCopy;
  public function setCreator(EventCreator $creator) {
    $this->creator = $creator;
  }
  public function getCreator() {
    return $this->creator;
  }
  public function setOrganizer(EventOrganizer $organizer) {
    $this->organizer = $organizer;
  }
  public function getOrganizer() {
    return $this->organizer;
  }
  public function setSummary($summary) {
    $this->summary = $summary;
  }
  public function getSummary() {
    return $this->summary;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setAttendees(/* array(EventAttendee) */ $attendees) {
    $this->assertIsArray($attendees, 'EventAttendee', __METHOD__);
    $this->attendees = $attendees;
  }
  public function getAttendees() {
    return $this->attendees;
  }
  public function setHtmlLink($htmlLink) {
    $this->htmlLink = $htmlLink;
  }
  public function getHtmlLink() {
    return $this->htmlLink;
  }
  public function setRecurrence(/* array(string) */ $recurrence) {
    $this->assertIsArray($recurrence, 'string', __METHOD__);
    $this->recurrence = $recurrence;
  }
  public function getRecurrence() {
    return $this->recurrence;
  }
  public function setStart(EventDateTime $start) {
    $this->start = $start;
  }
  public function getStart() {
    return $this->start;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setRecurringEventId($recurringEventId) {
    $this->recurringEventId = $recurringEventId;
  }
  public function getRecurringEventId() {
    return $this->recurringEventId;
  }
  public function setGadget(EventGadget $gadget) {
    $this->gadget = $gadget;
  }
  public function getGadget() {
    return $this->gadget;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setICalUID($iCalUID) {
    $this->iCalUID = $iCalUID;
  }
  public function getICalUID() {
    return $this->iCalUID;
  }
  public function setExtendedProperties(EventExtendedProperties $extendedProperties) {
    $this->extendedProperties = $extendedProperties;
  }
  public function getExtendedProperties() {
    return $this->extendedProperties;
  }
  public function setEndTimeUnspecified($endTimeUnspecified) {
    $this->endTimeUnspecified = $endTimeUnspecified;
  }
  public function getEndTimeUnspecified() {
    return $this->endTimeUnspecified;
  }
  public function setSequence($sequence) {
    $this->sequence = $sequence;
  }
  public function getSequence() {
    return $this->sequence;
  }
  public function setVisibility($visibility) {
    $this->visibility = $visibility;
  }
  public function getVisibility() {
    return $this->visibility;
  }
  public function setGuestsCanModify($guestsCanModify) {
    $this->guestsCanModify = $guestsCanModify;
  }
  public function getGuestsCanModify() {
    return $this->guestsCanModify;
  }
  public function setEnd(EventDateTime $end) {
    $this->end = $end;
  }
  public function getEnd() {
    return $this->end;
  }
  public function setAttendeesOmitted($attendeesOmitted) {
    $this->attendeesOmitted = $attendeesOmitted;
  }
  public function getAttendeesOmitted() {
    return $this->attendeesOmitted;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocked($locked) {
    $this->locked = $locked;
  }
  public function getLocked() {
    return $this->locked;
  }
  public function setCreated($created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setColorId($colorId) {
    $this->colorId = $colorId;
  }
  public function getColorId() {
    return $this->colorId;
  }
  public function setAnyoneCanAddSelf($anyoneCanAddSelf) {
    $this->anyoneCanAddSelf = $anyoneCanAddSelf;
  }
  public function getAnyoneCanAddSelf() {
    return $this->anyoneCanAddSelf;
  }
  public function setReminders(EventReminders $reminders) {
    $this->reminders = $reminders;
  }
  public function getReminders() {
    return $this->reminders;
  }
  public function setGuestsCanSeeOtherGuests($guestsCanSeeOtherGuests) {
    $this->guestsCanSeeOtherGuests = $guestsCanSeeOtherGuests;
  }
  public function getGuestsCanSeeOtherGuests() {
    return $this->guestsCanSeeOtherGuests;
  }
  public function setOriginalStartTime(EventDateTime $originalStartTime) {
    $this->originalStartTime = $originalStartTime;
  }
  public function getOriginalStartTime() {
    return $this->originalStartTime;
  }
  public function setGuestsCanInviteOthers($guestsCanInviteOthers) {
    $this->guestsCanInviteOthers = $guestsCanInviteOthers;
  }
  public function getGuestsCanInviteOthers() {
    return $this->guestsCanInviteOthers;
  }
  public function setTransparency($transparency) {
    $this->transparency = $transparency;
  }
  public function getTransparency() {
    return $this->transparency;
  }
  public function setPrivateCopy($privateCopy) {
    $this->privateCopy = $privateCopy;
  }
  public function getPrivateCopy() {
    return $this->privateCopy;
  }
}

class EventAttendee extends Model {
  public $comment;
  public $displayName;
  public $responseStatus;
  public $self;
  public $id;
  public $additionalGuests;
  public $resource;
  public $organizer;
  public $optional;
  public $email;
  public function setComment($comment) {
    $this->comment = $comment;
  }
  public function getComment() {
    return $this->comment;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setResponseStatus($responseStatus) {
    $this->responseStatus = $responseStatus;
  }
  public function getResponseStatus() {
    return $this->responseStatus;
  }
  public function setSelf($self) {
    $this->self = $self;
  }
  public function getSelf() {
    return $this->self;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setAdditionalGuests($additionalGuests) {
    $this->additionalGuests = $additionalGuests;
  }
  public function getAdditionalGuests() {
    return $this->additionalGuests;
  }
  public function setResource($resource) {
    $this->resource = $resource;
  }
  public function getResource() {
    return $this->resource;
  }
  public function setOrganizer($organizer) {
    $this->organizer = $organizer;
  }
  public function getOrganizer() {
    return $this->organizer;
  }
  public function setOptional($optional) {
    $this->optional = $optional;
  }
  public function getOptional() {
    return $this->optional;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
}

class EventCreator extends Model {
  public $self;
  public $displayName;
  public $email;
  public $id;
  public function setSelf($self) {
    $this->self = $self;
  }
  public function getSelf() {
    return $this->self;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class EventDateTime extends Model {
  public $date;
  public $timeZone;
  public $dateTime;
  public function setDate($date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
  public function setTimeZone($timeZone) {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone() {
    return $this->timeZone;
  }
  public function setDateTime($dateTime) {
    $this->dateTime = $dateTime;
  }
  public function getDateTime() {
    return $this->dateTime;
  }
}

class EventExtendedProperties extends Model {
  public $shared;
  public $private;
  public function setShared($shared) {
    $this->shared = $shared;
  }
  public function getShared() {
    return $this->shared;
  }
  public function setPrivate($private) {
    $this->private = $private;
  }
  public function getPrivate() {
    return $this->private;
  }
}

class EventGadget extends Model {
  public $preferences;
  public $title;
  public $height;
  public $width;
  public $link;
  public $type;
  public $display;
  public $iconLink;
  public function setPreferences($preferences) {
    $this->preferences = $preferences;
  }
  public function getPreferences() {
    return $this->preferences;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setHeight($height) {
    $this->height = $height;
  }
  public function getHeight() {
    return $this->height;
  }
  public function setWidth($width) {
    $this->width = $width;
  }
  public function getWidth() {
    return $this->width;
  }
  public function setLink($link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setDisplay($display) {
    $this->display = $display;
  }
  public function getDisplay() {
    return $this->display;
  }
  public function setIconLink($iconLink) {
    $this->iconLink = $iconLink;
  }
  public function getIconLink() {
    return $this->iconLink;
  }
}

class EventOrganizer extends Model {
  public $self;
  public $displayName;
  public $email;
  public $id;
  public function setSelf($self) {
    $this->self = $self;
  }
  public function getSelf() {
    return $this->self;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class EventReminder extends Model {
  public $minutes;
  public $method;
  public function setMinutes($minutes) {
    $this->minutes = $minutes;
  }
  public function getMinutes() {
    return $this->minutes;
  }
  public function setMethod($method) {
    $this->method = $method;
  }
  public function getMethod() {
    return $this->method;
  }
}

class EventReminders extends Model {
  protected $__overridesType = 'EventReminder';
  protected $__overridesDataType = 'array';
  public $overrides;
  public $useDefault;
  public function setOverrides(/* array(EventReminder) */ $overrides) {
    $this->assertIsArray($overrides, 'EventReminder', __METHOD__);
    $this->overrides = $overrides;
  }
  public function getOverrides() {
    return $this->overrides;
  }
  public function setUseDefault($useDefault) {
    $this->useDefault = $useDefault;
  }
  public function getUseDefault() {
    return $this->useDefault;
  }
}

class Events extends Model {
  public $nextPageToken;
  public $kind;
  protected $__defaultRemindersType = 'EventReminder';
  protected $__defaultRemindersDataType = 'array';
  public $defaultReminders;
  public $description;
  protected $__itemsType = 'Event';
  protected $__itemsDataType = 'array';
  public $items;
  public $updated;
  public $summary;
  public $etag;
  public $timeZone;
  public $accessRole;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDefaultReminders(/* array(EventReminder) */ $defaultReminders) {
    $this->assertIsArray($defaultReminders, 'EventReminder', __METHOD__);
    $this->defaultReminders = $defaultReminders;
  }
  public function getDefaultReminders() {
    return $this->defaultReminders;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setItems(/* array(Event) */ $items) {
    $this->assertIsArray($items, 'Event', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setSummary($summary) {
    $this->summary = $summary;
  }
  public function getSummary() {
    return $this->summary;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setTimeZone($timeZone) {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone() {
    return $this->timeZone;
  }
  public function setAccessRole($accessRole) {
    $this->accessRole = $accessRole;
  }
  public function getAccessRole() {
    return $this->accessRole;
  }
}

class FreeBusyCalendar extends Model {
  protected $__busyType = 'TimePeriod';
  protected $__busyDataType = 'array';
  public $busy;
  protected $__errorsType = 'Error';
  protected $__errorsDataType = 'array';
  public $errors;
  public function setBusy(/* array(TimePeriod) */ $busy) {
    $this->assertIsArray($busy, 'TimePeriod', __METHOD__);
    $this->busy = $busy;
  }
  public function getBusy() {
    return $this->busy;
  }
  public function setErrors(/* array(Error) */ $errors) {
    $this->assertIsArray($errors, 'Error', __METHOD__);
    $this->errors = $errors;
  }
  public function getErrors() {
    return $this->errors;
  }
}

class FreeBusyGroup extends Model {
  protected $__errorsType = 'Error';
  protected $__errorsDataType = 'array';
  public $errors;
  public $calendars;
  public function setErrors(/* array(Error) */ $errors) {
    $this->assertIsArray($errors, 'Error', __METHOD__);
    $this->errors = $errors;
  }
  public function getErrors() {
    return $this->errors;
  }
  public function setCalendars(/* array(string) */ $calendars) {
    $this->assertIsArray($calendars, 'string', __METHOD__);
    $this->calendars = $calendars;
  }
  public function getCalendars() {
    return $this->calendars;
  }
}

class FreeBusyRequest extends Model {
  public $calendarExpansionMax;
  public $groupExpansionMax;
  public $timeMax;
  protected $__itemsType = 'FreeBusyRequestItem';
  protected $__itemsDataType = 'array';
  public $items;
  public $timeMin;
  public $timeZone;
  public function setCalendarExpansionMax($calendarExpansionMax) {
    $this->calendarExpansionMax = $calendarExpansionMax;
  }
  public function getCalendarExpansionMax() {
    return $this->calendarExpansionMax;
  }
  public function setGroupExpansionMax($groupExpansionMax) {
    $this->groupExpansionMax = $groupExpansionMax;
  }
  public function getGroupExpansionMax() {
    return $this->groupExpansionMax;
  }
  public function setTimeMax($timeMax) {
    $this->timeMax = $timeMax;
  }
  public function getTimeMax() {
    return $this->timeMax;
  }
  public function setItems(/* array(FreeBusyRequestItem) */ $items) {
    $this->assertIsArray($items, 'FreeBusyRequestItem', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setTimeMin($timeMin) {
    $this->timeMin = $timeMin;
  }
  public function getTimeMin() {
    return $this->timeMin;
  }
  public function setTimeZone($timeZone) {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone() {
    return $this->timeZone;
  }
}

class FreeBusyRequestItem extends Model {
  public $id;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class FreeBusyResponse extends Model {
  public $timeMax;
  public $kind;
  protected $__calendarsType = 'FreeBusyCalendar';
  protected $__calendarsDataType = 'map';
  public $calendars;
  public $timeMin;
  protected $__groupsType = 'FreeBusyGroup';
  protected $__groupsDataType = 'map';
  public $groups;
  public function setTimeMax($timeMax) {
    $this->timeMax = $timeMax;
  }
  public function getTimeMax() {
    return $this->timeMax;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setCalendars(FreeBusyCalendar $calendars) {
    $this->calendars = $calendars;
  }
  public function getCalendars() {
    return $this->calendars;
  }
  public function setTimeMin($timeMin) {
    $this->timeMin = $timeMin;
  }
  public function getTimeMin() {
    return $this->timeMin;
  }
  public function setGroups(FreeBusyGroup $groups) {
    $this->groups = $groups;
  }
  public function getGroups() {
    return $this->groups;
  }
}

class Setting extends Model {
  public $kind;
  public $etag;
  public $id;
  public $value;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
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
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class Settings extends Model {
  protected $__itemsType = 'Setting';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $etag;
  public function setItems(/* array(Setting) */ $items) {
    $this->assertIsArray($items, 'Setting', __METHOD__);
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
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
}

class TimePeriod extends Model {
  public $start;
  public $end;
  public function setStart($start) {
    $this->start = $start;
  }
  public function getStart() {
    return $this->start;
  }
  public function setEnd($end) {
    $this->end = $end;
  }
  public function getEnd() {
    return $this->end;
  }
}
