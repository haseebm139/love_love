<?php
/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/oslogin/v1/oslogin.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\OsLogin\V1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\OsLogin\Common\SshPublicKey;
use Google\Cloud\OsLogin\V1\CreateSshPublicKeyRequest;
use Google\Cloud\OsLogin\V1\DeletePosixAccountRequest;
use Google\Cloud\OsLogin\V1\DeleteSshPublicKeyRequest;
use Google\Cloud\OsLogin\V1\GetLoginProfileRequest;
use Google\Cloud\OsLogin\V1\GetSshPublicKeyRequest;
use Google\Cloud\OsLogin\V1\ImportSshPublicKeyRequest;
use Google\Cloud\OsLogin\V1\ImportSshPublicKeyResponse;
use Google\Cloud\OsLogin\V1\LoginProfile;
use Google\Cloud\OsLogin\V1\UpdateSshPublicKeyRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Cloud OS Login API
 *
 * The Cloud OS Login API allows you to manage users and their associated SSH
 * public keys for logging into virtual machines on Google Cloud Platform.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\OsLogin\V1\OsLoginServiceClient} for the stable implementation
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createSshPublicKeyAsync(CreateSshPublicKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deletePosixAccountAsync(DeletePosixAccountRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteSshPublicKeyAsync(DeleteSshPublicKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLoginProfileAsync(GetLoginProfileRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getSshPublicKeyAsync(GetSshPublicKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface importSshPublicKeyAsync(ImportSshPublicKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateSshPublicKeyAsync(UpdateSshPublicKeyRequest $request, array $optionalArgs = [])
 */
abstract class OsLoginServiceBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.oslogin.v1.OsLoginService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'oslogin.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloud-platform.read-only',
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/compute.readonly',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/os_login_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/os_login_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/os_login_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/os_login_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * posix_account resource.
     *
     * @param string $user
     * @param string $project
     *
     * @return string The formatted posix_account resource.
     */
    public static function posixAccountName(string $user, string $project): string
    {
        return self::getPathTemplate('posixAccount')->render([
            'user' => $user,
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * ssh_public_key resource.
     *
     * @param string $user
     * @param string $fingerprint
     *
     * @return string The formatted ssh_public_key resource.
     */
    public static function sshPublicKeyName(string $user, string $fingerprint): string
    {
        return self::getPathTemplate('sshPublicKey')->render([
            'user' => $user,
            'fingerprint' => $fingerprint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a user
     * resource.
     *
     * @param string $user
     *
     * @return string The formatted user resource.
     */
    public static function userName(string $user): string
    {
        return self::getPathTemplate('user')->render([
            'user' => $user,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - posixAccount: users/{user}/projects/{project}
     * - sshPublicKey: users/{user}/sshPublicKeys/{fingerprint}
     * - user: users/{user}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'oslogin.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Create an SSH public key
     *
     * The async variant is {@see self::createSshPublicKeyAsync()} .
     *
     * @param CreateSshPublicKeyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SshPublicKey
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createSshPublicKey(CreateSshPublicKeyRequest $request, array $callOptions = []): SshPublicKey
    {
        return $this->startApiCall('CreateSshPublicKey', $request, $callOptions)->wait();
    }

    /**
     * Deletes a POSIX account.
     *
     * The async variant is {@see self::deletePosixAccountAsync()} .
     *
     * @param DeletePosixAccountRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deletePosixAccount(DeletePosixAccountRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeletePosixAccount', $request, $callOptions)->wait();
    }

    /**
     * Deletes an SSH public key.
     *
     * The async variant is {@see self::deleteSshPublicKeyAsync()} .
     *
     * @param DeleteSshPublicKeyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteSshPublicKey(DeleteSshPublicKeyRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteSshPublicKey', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the profile information used for logging in to a virtual machine
     * on Google Compute Engine.
     *
     * The async variant is {@see self::getLoginProfileAsync()} .
     *
     * @param GetLoginProfileRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return LoginProfile
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLoginProfile(GetLoginProfileRequest $request, array $callOptions = []): LoginProfile
    {
        return $this->startApiCall('GetLoginProfile', $request, $callOptions)->wait();
    }

    /**
     * Retrieves an SSH public key.
     *
     * The async variant is {@see self::getSshPublicKeyAsync()} .
     *
     * @param GetSshPublicKeyRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SshPublicKey
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSshPublicKey(GetSshPublicKeyRequest $request, array $callOptions = []): SshPublicKey
    {
        return $this->startApiCall('GetSshPublicKey', $request, $callOptions)->wait();
    }

    /**
     * Adds an SSH public key and returns the profile information. Default POSIX
     * account information is set when no username and UID exist as part of the
     * login profile.
     *
     * The async variant is {@see self::importSshPublicKeyAsync()} .
     *
     * @param ImportSshPublicKeyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ImportSshPublicKeyResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function importSshPublicKey(ImportSshPublicKeyRequest $request, array $callOptions = []): ImportSshPublicKeyResponse
    {
        return $this->startApiCall('ImportSshPublicKey', $request, $callOptions)->wait();
    }

    /**
     * Updates an SSH public key and returns the profile information. This method
     * supports patch semantics.
     *
     * The async variant is {@see self::updateSshPublicKeyAsync()} .
     *
     * @param UpdateSshPublicKeyRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SshPublicKey
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateSshPublicKey(UpdateSshPublicKeyRequest $request, array $callOptions = []): SshPublicKey
    {
        return $this->startApiCall('UpdateSshPublicKey', $request, $callOptions)->wait();
    }
}
