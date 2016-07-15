<?php
/*
 * Copyright 2016 Google Inc.
 *
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
 * The "filteredRequests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $filteredRequests = $adexchangebuyer2Service->filteredRequests;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredRequests extends Google_Service_Resource
{
  /**
   * List all reasons that caused a bid request not to be sent for an impression,
   * with the number of bid requests not sent for each reason.
   * (filteredRequests.listAccountsFilterSetsFilteredRequests)
   *
   * @param string $accountId Account ID of the buyer.
   * @param int $filterSetId The ID of the filter set to apply.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_ListFilteredRequestsResponse
   */
  public function listAccountsFilterSetsFilteredRequests($accountId, $filterSetId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'filterSetId' => $filterSetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListFilteredRequestsResponse");
  }
}
