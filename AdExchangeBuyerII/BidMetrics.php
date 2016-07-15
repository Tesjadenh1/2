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

class Google_Service_AdExchangeBuyerII_BidMetrics extends Google_Model
{
  public $bids;
  public $bidsInAuction;
  public $endTime;
  public $impressionsWon;
  public $startTime;

  public function setBids($bids)
  {
    $this->bids = $bids;
  }
  public function getBids()
  {
    return $this->bids;
  }
  public function setBidsInAuction($bidsInAuction)
  {
    $this->bidsInAuction = $bidsInAuction;
  }
  public function getBidsInAuction()
  {
    return $this->bidsInAuction;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setImpressionsWon($impressionsWon)
  {
    $this->impressionsWon = $impressionsWon;
  }
  public function getImpressionsWon()
  {
    return $this->impressionsWon;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}
