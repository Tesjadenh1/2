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
 * Service definition for AdExchangeBuyerII (v2beta1).
 *
 * <p>
 * Accesses the latest features for managing Ad Exchange accounts and Real-Time
 * Bidding configurations and auction metrics.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/ad-exchange/buyer-rest/guides/client-access/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_AdExchangeBuyerII extends Google_Service
{
  /** Manage your Ad Exchange buyer account configuration. */
  const ADEXCHANGE_BUYER =
      "https://www.googleapis.com/auth/adexchange.buyer";

  public $accounts_clients;
  public $accounts_clients_invitations;
  public $accounts_clients_users;
  public $accounts_filterSets;
  public $accounts_filterSets_filteredBids;
  public $accounts_filterSets_filteredBids_creatives;
  public $accounts_filterSets_filteredBids_creatives_details;
  public $accounts_filterSets_filteredBids_details;
  public $accounts_filterSets_filteredImpressions;
  public $accounts_filterSets_filteredRequests;
  public $accounts_filterSets_losingBids;
  public $accounts_filterSets_responseErrors;
  public $accounts_filterSets_responsesWithoutBids;
  
  /**
   * Constructs the internal representation of the AdExchangeBuyerII service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://adexchangebuyer.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v2beta1';
    $this->serviceName = 'adexchangebuyer2';

    $this->accounts_clients = new Google_Service_AdExchangeBuyerII_Resource_AccountsClients(
        $this,
        $this->serviceName,
        'clients',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_clients_invitations = new Google_Service_AdExchangeBuyerII_Resource_AccountsClientsInvitations(
        $this,
        $this->serviceName,
        'invitations',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}/invitations',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}/invitations/{invitationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'invitationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}/invitations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_clients_users = new Google_Service_AdExchangeBuyerII_Resource_AccountsClientsUsers(
        $this,
        $this->serviceName,
        'users',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}/users/{userId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}/users',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'v2beta1/accounts/{accountId}/clients/{clientAccountId}/users/{userId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'clientAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSets(
        $this,
        $this->serviceName,
        'filterSets',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'isTransient' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'getBidMetrics' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/bidMetrics',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'getImpressionMetrics' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/impressionMetrics',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_filteredBids = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredBids(
        $this,
        $this->serviceName,
        'filteredBids',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/filteredBids',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_filteredBids_creatives = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredBidsCreatives(
        $this,
        $this->serviceName,
        'creatives',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/filteredBids/{creativeStatusId}/creatives',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'creativeStatusId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_filteredBids_creatives_details = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredBidsCreativesDetails(
        $this,
        $this->serviceName,
        'details',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/filteredBids/{creativeStatusId}/creatives/{creativeId}/details',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'creativeStatusId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'creativeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_filteredBids_details = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredBidsDetails(
        $this,
        $this->serviceName,
        'details',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/filteredBids/{creativeStatusId}/details',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'creativeStatusId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_filteredImpressions = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredImpressions(
        $this,
        $this->serviceName,
        'filteredImpressions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/filteredImpressions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_filteredRequests = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsFilteredRequests(
        $this,
        $this->serviceName,
        'filteredRequests',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/filteredRequests',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_losingBids = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsLosingBids(
        $this,
        $this->serviceName,
        'losingBids',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/losingBids',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_responseErrors = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsResponseErrors(
        $this,
        $this->serviceName,
        'responseErrors',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/responseErrors',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_filterSets_responsesWithoutBids = new Google_Service_AdExchangeBuyerII_Resource_AccountsFilterSetsResponsesWithoutBids(
        $this,
        $this->serviceName,
        'responsesWithoutBids',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2beta1/accounts/{accountId}/filterSets/{filterSetId}/responsesWithoutBids',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filterSetId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
