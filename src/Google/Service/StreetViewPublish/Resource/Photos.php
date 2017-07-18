<?php
/*
 * Copyright 2014 Google Inc.
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
 * The "photos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $streetviewpublishService = new Google_Service_StreetViewPublish(...);
 *   $photos = $streetviewpublishService->photos;
 *  </code>
 */
class Google_Service_StreetViewPublish_Resource_Photos extends Google_Service_Resource
{
  /**
   * Deletes a list of photos and their metadata.
   *
   * Note that if `photos.batchDelete` fails, either critical fields are missing
   * or there was an authentication error. Even if `photos.batchDelete` succeeds,
   * there may have been failures for single photos in the batch. These failures
   * will be specified in `BatchDeletePhotosResponse.status`. See `photo.update`
   * for specific failures that can occur per photo. (photos.batchDelete)
   *
   * @param Google_Service_StreetViewPublish_BatchDeletePhotosRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreetViewPublish_BatchDeletePhotosResponse
   */
  public function batchDelete(Google_Service_StreetViewPublish_BatchDeletePhotosRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), "Google_Service_StreetViewPublish_BatchDeletePhotosResponse");
  }
  /**
   * Gets the metadata of the specified `Photo` batch.
   *
   * Note that if `photos.batchGet` fails, either critical fields are missing or
   * there was an authentication error. Even if `photos.batchGet` succeeds, there
   * may have been failures for single photos in the batch. These failures will be
   * specified in `BatchGetPhotosResponse.results.status`. See `photo.get` for
   * specific failures that can occur per photo. (photos.batchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string photoIds Required. IDs of the photos. For HTTP GET
   * requests, the URL query parameter should be `photoIds==&...`.
   * @opt_param string view Specifies if a download URL for the photo bytes should
   * be returned in the Photo response.
   * @return Google_Service_StreetViewPublish_BatchGetPhotosResponse
   */
  public function batchGet($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_StreetViewPublish_BatchGetPhotosResponse");
  }
  /**
   * Updates the metadata of photos, such as pose, place association, etc.
   * Changing the pixels of a photo is not supported.
   *
   * Note that if `photos.batchUpdate` fails, either critical fields are missing
   * or there was an authentication error. Even if `photos.batchUpdate` succeeds,
   * there may have been failures for single photos in the batch. These failures
   * will be specified in `BatchUpdatePhotosResponse.results.status`. See
   * `UpdatePhoto` for specific failures that can occur per photo.
   * (photos.batchUpdate)
   *
   * @param Google_Service_StreetViewPublish_BatchUpdatePhotosRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_StreetViewPublish_BatchUpdatePhotosResponse
   */
  public function batchUpdate(Google_Service_StreetViewPublish_BatchUpdatePhotosRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', array($params), "Google_Service_StreetViewPublish_BatchUpdatePhotosResponse");
  }
  /**
   * Lists all the photos that belong to the user. (photos.listPhotos)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter The filter expression. Example:
   * `placeId=ChIJj61dQgK6j4AR4GeTYWZsKWw`
   * @opt_param string pageToken The `next_page_token` value returned from a
   * previous List request, if any.
   * @opt_param int pageSize The maximum number of photos to return. `page_size`
   * must be non-negative. If `page_size` is zero or is not provided, the default
   * page size of 100 will be used. The number of photos returned in the response
   * may be less than `page_size` if the number of photos that belong to the user
   * is less than `page_size`.
   * @opt_param string view Specifies if a download URL for the photos bytes
   * should be returned in the Photos response.
   * @return Google_Service_StreetViewPublish_ListPhotosResponse
   */
  public function listPhotos($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_StreetViewPublish_ListPhotosResponse");
  }
}
