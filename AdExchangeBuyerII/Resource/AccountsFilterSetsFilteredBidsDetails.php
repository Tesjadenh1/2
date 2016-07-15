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
 * The "details" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $details = $adexchangebuyer2Service->details;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredBidsDetails extends Google_Service_Resource
{
  /**
   * List all details associated with a specific reason for which bids were
   * filtered, with the number of bids filtered for each detail.
   * (details.listAccountsFilterSetsFilteredBidsDetails)
   *
   * @param string $accountId Account ID of the buyer.
   * @param int $filterSetId The ID of the filter set to apply.
   * @param int $creativeStatusId The ID of the creative status for which to
   * retrieve a breakdown by detail. See creative-status-codes.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_ListCreativeStatusBreakdownByDetailResponse
   */
  public function listAccountsFilterSetsFilteredBidsDetails($accountId, $filterSetId, $creativeStatusId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'filterSetId' => $filterSetId, 'creativeStatusId' => $creativeStatusId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListCreativeStatusBreakdownByDetailResponse");
  }
}
