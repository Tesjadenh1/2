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

class Google_Service_AdExchangeBuyerII_ImpressionMetrics extends Google_Model
{
  public $availableImpressions;
  public $bidRequests;
  public $endTime;
  public $inventoryMatches;
  public $responsesWithBids;
  public $startTime;
  public $successfulResponses;

  public function setAvailableImpressions($availableImpressions)
  {
    $this->availableImpressions = $availableImpressions;
  }
  public function getAvailableImpressions()
  {
    return $this->availableImpressions;
  }
  public function setBidRequests($bidRequests)
  {
    $this->bidRequests = $bidRequests;
  }
  public function getBidRequests()
  {
    return $this->bidRequests;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setInventoryMatches($inventoryMatches)
  {
    $this->inventoryMatches = $inventoryMatches;
  }
  public function getInventoryMatches()
  {
    return $this->inventoryMatches;
  }
  public function setResponsesWithBids($responsesWithBids)
  {
    $this->responsesWithBids = $responsesWithBids;
  }
  public function getResponsesWithBids()
  {
    return $this->responsesWithBids;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
  public function setSuccessfulResponses($successfulResponses)
  {
    $this->successfulResponses = $successfulResponses;
  }
  public function getSuccessfulResponses()
  {
    return $this->successfulResponses;
  }
}
