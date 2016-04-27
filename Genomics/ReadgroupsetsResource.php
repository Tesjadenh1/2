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
 * The "readgroupsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $genomicsService = new Google_Service_Genomics(...);
 *   $readgroupsets = $genomicsService->readgroupsets;
 *  </code>
 */
class Google_Service_Genomics_ReadgroupsetsResource extends Google_Service_Resource
{
  /**
   * Deletes a read group set. (readgroupsets.delete)
   *
   * @param string $readGroupSetId The ID of the read group set to be deleted. The
   * caller must have WRITE permissions to the dataset associated with this read
   * group set.
   * @param array $optParams Optional parameters.
   */
  public function delete($readGroupSetId, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Exports read group sets to a BAM file in Google Cloud Storage.
   *
   * Note that currently there may be some differences between exported BAM files
   * and the original BAM file at the time of import. See ImportReadGroupSets for
   * details. (readgroupsets.export)
   *
   * @param Google_ExportReadGroupSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ExportReadGroupSetsResponse
   */
  public function export(Google_Service_Genomics_ExportReadGroupSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), "Google_Service_Genomics_ExportReadGroupSetsResponse");
  }
  /**
   * Gets a read group set by ID. (readgroupsets.get)
   *
   * @param string $readGroupSetId The ID of the read group set.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ReadGroupSet
   */
  public function get($readGroupSetId, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Genomics_ReadGroupSet");
  }
  /**
   * Creates read group sets by asynchronously importing the provided information.
   * The caller must have WRITE permissions to the dataset.
   *
   * Notes on BAM import:   - Tags will be converted to strings - tag types are
   * not preserved - Comments (@CO) in the input file header are not imported -
   * Original order of reference headers is not preserved - Any reverse stranded
   * unmapped reads will be reverse complemented, and their qualities (also the
   * "BQ" and "OQ" tags, if any) will be reversed - Unmapped reads will be
   * stripped of positional information (referenceName and position)
   * (readgroupsets.import)
   *
   * @param Google_ImportReadGroupSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ImportReadGroupSetsResponse
   */
  public function import(Google_Service_Genomics_ImportReadGroupSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), "Google_Service_Genomics_ImportReadGroupSetsResponse");
  }
  /**
   * Updates a read group set. This method supports patch semantics.
   * (readgroupsets.patch)
   *
   * @param string $readGroupSetId The ID of the read group set to be updated. The
   * caller must have WRITE permissions to the dataset associated with this read
   * group set.
   * @param Google_ReadGroupSet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ReadGroupSet
   */
  public function patch($readGroupSetId, Google_Service_Genomics_ReadGroupSet $postBody, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Genomics_ReadGroupSet");
  }
  /**
   * Searches for read group sets matching the criteria.
   *
   * Implements GlobalAllianceApi.searchReadGroupSets. (readgroupsets.search)
   *
   * @param Google_SearchReadGroupSetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SearchReadGroupSetsResponse
   */
  public function search(Google_Service_Genomics_SearchReadGroupSetsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_Genomics_SearchReadGroupSetsResponse");
  }
  /**
   * Updates a read group set. (readgroupsets.update)
   *
   * @param string $readGroupSetId The ID of the read group set to be updated. The
   * caller must have WRITE permissions to the dataset associated with this read
   * group set.
   * @param Google_ReadGroupSet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ReadGroupSet
   */
  public function update($readGroupSetId, Google_Service_Genomics_ReadGroupSet $postBody, $optParams = array())
  {
    $params = array('readGroupSetId' => $readGroupSetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Genomics_ReadGroupSet");
  }
}
