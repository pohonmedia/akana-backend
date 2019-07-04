<?php
// This file was auto-generated from sdk-root/src/data/glacier/2012-06-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2012-06-01', 'checksumFormat' => 'sha256', 'endpointPrefix' => 'glacier', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Glacier', 'signatureVersion' => 'v4', 'uid' => 'glacier-2012-06-01', ], 'operations' => [ 'AbortMultipartUpload' => [ 'name' => 'AbortMultipartUpload', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'AbortMultipartUploadInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'AbortVaultLock' => [ 'name' => 'AbortVaultLock', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/{accountId}/vaults/{vaultName}/lock-policy', 'responseCode' => 204, ], 'input' => [ 'shape' => 'AbortVaultLockInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'AddTagsToVault' => [ 'name' => 'AddTagsToVault', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/tags?operation=add', 'responseCode' => 204, ], 'input' => [ 'shape' => 'AddTagsToVaultInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'CompleteMultipartUpload' => [ 'name' => 'CompleteMultipartUpload', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CompleteMultipartUploadInput', ], 'output' => [ 'shape' => 'ArchiveCreationOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'CompleteVaultLock' => [ 'name' => 'CompleteVaultLock', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/lock-policy/{lockId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'CompleteVaultLockInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'CreateVault' => [ 'name' => 'CreateVault', 'http' => [ 'method' => 'PUT', 'requestUri' => '/{accountId}/vaults/{vaultName}', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateVaultInput', ], 'output' => [ 'shape' => 'CreateVaultOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'DeleteArchive' => [ 'name' => 'DeleteArchive', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/{accountId}/vaults/{vaultName}/archives/{archiveId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteArchiveInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DeleteVault' => [ 'name' => 'DeleteVault', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/{accountId}/vaults/{vaultName}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteVaultInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DeleteVaultAccessPolicy' => [ 'name' => 'DeleteVaultAccessPolicy', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/{accountId}/vaults/{vaultName}/access-policy', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteVaultAccessPolicyInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DeleteVaultNotifications' => [ 'name' => 'DeleteVaultNotifications', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/{accountId}/vaults/{vaultName}/notification-configuration', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteVaultNotificationsInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DescribeJob' => [ 'name' => 'DescribeJob', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}', ], 'input' => [ 'shape' => 'DescribeJobInput', ], 'output' => [ 'shape' => 'GlacierJobDescription', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DescribeVault' => [ 'name' => 'DescribeVault', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}', ], 'input' => [ 'shape' => 'DescribeVaultInput', ], 'output' => [ 'shape' => 'DescribeVaultOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'GetDataRetrievalPolicy' => [ 'name' => 'GetDataRetrievalPolicy', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/policies/data-retrieval', ], 'input' => [ 'shape' => 'GetDataRetrievalPolicyInput', ], 'output' => [ 'shape' => 'GetDataRetrievalPolicyOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'GetJobOutput' => [ 'name' => 'GetJobOutput', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}/output', ], 'input' => [ 'shape' => 'GetJobOutputInput', ], 'output' => [ 'shape' => 'GetJobOutputOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'GetVaultAccessPolicy' => [ 'name' => 'GetVaultAccessPolicy', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/access-policy', ], 'input' => [ 'shape' => 'GetVaultAccessPolicyInput', ], 'output' => [ 'shape' => 'GetVaultAccessPolicyOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'GetVaultLock' => [ 'name' => 'GetVaultLock', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/lock-policy', ], 'input' => [ 'shape' => 'GetVaultLockInput', ], 'output' => [ 'shape' => 'GetVaultLockOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'GetVaultNotifications' => [ 'name' => 'GetVaultNotifications', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/notification-configuration', ], 'input' => [ 'shape' => 'GetVaultNotificationsInput', ], 'output' => [ 'shape' => 'GetVaultNotificationsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'InitiateJob' => [ 'name' => 'InitiateJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/jobs', 'responseCode' => 202, ], 'input' => [ 'shape' => 'InitiateJobInput', ], 'output' => [ 'shape' => 'InitiateJobOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'PolicyEnforcedException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'InsufficientCapacityException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'InitiateMultipartUpload' => [ 'name' => 'InitiateMultipartUpload', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads', 'responseCode' => 201, ], 'input' => [ 'shape' => 'InitiateMultipartUploadInput', ], 'output' => [ 'shape' => 'InitiateMultipartUploadOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'InitiateVaultLock' => [ 'name' => 'InitiateVaultLock', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/lock-policy', 'responseCode' => 201, ], 'input' => [ 'shape' => 'InitiateVaultLockInput', ], 'output' => [ 'shape' => 'InitiateVaultLockOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListJobs' => [ 'name' => 'ListJobs', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/jobs', ], 'input' => [ 'shape' => 'ListJobsInput', ], 'output' => [ 'shape' => 'ListJobsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListMultipartUploads' => [ 'name' => 'ListMultipartUploads', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads', ], 'input' => [ 'shape' => 'ListMultipartUploadsInput', ], 'output' => [ 'shape' => 'ListMultipartUploadsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListParts' => [ 'name' => 'ListParts', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}', ], 'input' => [ 'shape' => 'ListPartsInput', ], 'output' => [ 'shape' => 'ListPartsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListProvisionedCapacity' => [ 'name' => 'ListProvisionedCapacity', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/provisioned-capacity', ], 'input' => [ 'shape' => 'ListProvisionedCapacityInput', ], 'output' => [ 'shape' => 'ListProvisionedCapacityOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListTagsForVault' => [ 'name' => 'ListTagsForVault', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults/{vaultName}/tags', ], 'input' => [ 'shape' => 'ListTagsForVaultInput', ], 'output' => [ 'shape' => 'ListTagsForVaultOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListVaults' => [ 'name' => 'ListVaults', 'http' => [ 'method' => 'GET', 'requestUri' => '/{accountId}/vaults', ], 'input' => [ 'shape' => 'ListVaultsInput', ], 'output' => [ 'shape' => 'ListVaultsOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'PurchaseProvisionedCapacity' => [ 'name' => 'PurchaseProvisionedCapacity', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/provisioned-capacity', 'responseCode' => 201, ], 'input' => [ 'shape' => 'PurchaseProvisionedCapacityInput', ], 'output' => [ 'shape' => 'PurchaseProvisionedCapacityOutput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'RemoveTagsFromVault' => [ 'name' => 'RemoveTagsFromVault', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/tags?operation=remove', 'responseCode' => 204, ], 'input' => [ 'shape' => 'RemoveTagsFromVaultInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'SetDataRetrievalPolicy' => [ 'name' => 'SetDataRetrievalPolicy', 'http' => [ 'method' => 'PUT', 'requestUri' => '/{accountId}/policies/data-retrieval', 'responseCode' => 204, ], 'input' => [ 'shape' => 'SetDataRetrievalPolicyInput', ], 'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'SetVaultAccessPolicy' => [ 'name' => 'SetVaultAccessPolicy', 'http' => [ 'method' => 'PUT', 'requestUri' => '/{accountId}/vaults/{vaultName}/access-policy', 'responseCode' => 204, ], 'input' => [ 'shape' => 'SetVaultAccessPolicyInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'SetVaultNotifications' => [ 'name' => 'SetVaultNotifications', 'http' => [ 'method' => 'PUT', 'requestUri' => '/{accountId}/vaults/{vaultName}/notification-configuration', 'responseCode' => 204, ], 'input' => [ 'shape' => 'SetVaultNotificationsInput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'UploadArchive' => [ 'name' => 'UploadArchive', 'http' => [ 'method' => 'POST', 'requestUri' => '/{accountId}/vaults/{vaultName}/archives', 'responseCode' => 201, ], 'input' => [ 'shape' => 'UploadArchiveInput', ], 'output' => [ 'shape' => 'ArchiveCreationOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'UploadMultipartPart' => [ 'name' => 'UploadMultipartPart', 'http' => [ 'method' => 'PUT', 'requestUri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'UploadMultipartPartInput', ], 'output' => [ 'shape' => 'UploadMultipartPartOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidParameterValueException', ], [ 'shape' => 'MissingParameterValueException', ], [ 'shape' => 'RequestTimeoutException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], ], 'shapes' => [ 'AbortMultipartUploadInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'uploadId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'uploadId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'uploadId', ], ], ], 'AbortVaultLockInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'ActionCode' => [ 'type' => 'string', 'enum' => [ 'ArchiveRetrieval', 'InventoryRetrieval', ], ], 'AddTagsToVaultInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'ArchiveCreationOutput' => [ 'type' => 'structure', 'members' => [ 'location' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Location', ], 'checksum' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-sha256-tree-hash', ], 'archiveId' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-archive-id', ], ], ], 'CompleteMultipartUploadInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'uploadId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'uploadId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'uploadId', ], 'archiveSize' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-archive-size', ], 'checksum' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-sha256-tree-hash', ], ], ], 'CompleteVaultLockInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'lockId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'lockId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'lockId', ], ], ], 'CreateVaultInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'CreateVaultOutput' => [ 'type' => 'structure', 'members' => [ 'location' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Location', ], ], ], 'DataRetrievalPolicy' => [ 'type' => 'structure', 'members' => [ 'Rules' => [ 'shape' => 'DataRetrievalRulesList', ], ], ], 'DataRetrievalRule' => [ 'type' => 'structure', 'members' => [ 'Strategy' => [ 'shape' => 'string', ], 'BytesPerHour' => [ 'shape' => 'NullableLong', ], ], ], 'DataRetrievalRulesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataRetrievalRule', ], ], 'DateTime' => [ 'type' => 'string', ], 'DeleteArchiveInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'archiveId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'archiveId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'archiveId', ], ], ], 'DeleteVaultAccessPolicyInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'DeleteVaultInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'DeleteVaultNotificationsInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'DescribeJobInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'jobId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'jobId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId', ], ], ], 'DescribeVaultInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'DescribeVaultOutput' => [ 'type' => 'structure', 'members' => [ 'VaultARN' => [ 'shape' => 'string', ], 'VaultName' => [ 'shape' => 'string', ], 'CreationDate' => [ 'shape' => 'string', ], 'LastInventoryDate' => [ 'shape' => 'string', ], 'NumberOfArchives' => [ 'shape' => 'long', ], 'SizeInBytes' => [ 'shape' => 'long', ], ], ], 'GetDataRetrievalPolicyInput' => [ 'type' => 'structure', 'required' => [ 'accountId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], ], ], 'GetDataRetrievalPolicyOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'DataRetrievalPolicy', ], ], ], 'GetJobOutputInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'jobId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'jobId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'jobId', ], 'range' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Range', ], ], ], 'GetJobOutputOutput' => [ 'type' => 'structure', 'members' => [ 'body' => [ 'shape' => 'Stream', ], 'checksum' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-sha256-tree-hash', ], 'status' => [ 'shape' => 'httpstatus', 'location' => 'statusCode', ], 'contentRange' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Content-Range', ], 'acceptRanges' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Accept-Ranges', ], 'contentType' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Content-Type', ], 'archiveDescription' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-archive-description', ], ], 'payload' => 'body', ], 'GetVaultAccessPolicyInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'GetVaultAccessPolicyOutput' => [ 'type' => 'structure', 'members' => [ 'policy' => [ 'shape' => 'VaultAccessPolicy', ], ], 'payload' => 'policy', ], 'GetVaultLockInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'GetVaultLockOutput' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'string', ], 'State' => [ 'shape' => 'string', ], 'ExpirationDate' => [ 'shape' => 'string', ], 'CreationDate' => [ 'shape' => 'string', ], ], ], 'GetVaultNotificationsInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'GetVaultNotificationsOutput' => [ 'type' => 'structure', 'members' => [ 'vaultNotificationConfig' => [ 'shape' => 'VaultNotificationConfig', ], ], 'payload' => 'vaultNotificationConfig', ], 'GlacierJobDescription' => [ 'type' => 'structure', 'members' => [ 'JobId' => [ 'shape' => 'string', ], 'JobDescription' => [ 'shape' => 'string', ], 'Action' => [ 'shape' => 'ActionCode', ], 'ArchiveId' => [ 'shape' => 'string', ], 'VaultARN' => [ 'shape' => 'string', ], 'CreationDate' => [ 'shape' => 'string', ], 'Completed' => [ 'shape' => 'boolean', ], 'StatusCode' => [ 'shape' => 'StatusCode', ], 'StatusMessage' => [ 'shape' => 'string', ], 'ArchiveSizeInBytes' => [ 'shape' => 'Size', ], 'InventorySizeInBytes' => [ 'shape' => 'Size', ], 'SNSTopic' => [ 'shape' => 'string', ], 'CompletionDate' => [ 'shape' => 'string', ], 'SHA256TreeHash' => [ 'shape' => 'string', ], 'ArchiveSHA256TreeHash' => [ 'shape' => 'string', ], 'RetrievalByteRange' => [ 'shape' => 'string', ], 'Tier' => [ 'shape' => 'string', ], 'InventoryRetrievalParameters' => [ 'shape' => 'InventoryRetrievalJobDescription', ], ], ], 'InitiateJobInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'jobParameters' => [ 'shape' => 'JobParameters', ], ], 'payload' => 'jobParameters', ], 'InitiateJobOutput' => [ 'type' => 'structure', 'members' => [ 'location' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Location', ], 'jobId' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-job-id', ], ], ], 'InitiateMultipartUploadInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'archiveDescription' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-archive-description', ], 'partSize' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-part-size', ], ], ], 'InitiateMultipartUploadOutput' => [ 'type' => 'structure', 'members' => [ 'location' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Location', ], 'uploadId' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-multipart-upload-id', ], ], ], 'InitiateVaultLockInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'policy' => [ 'shape' => 'VaultLockPolicy', ], ], 'payload' => 'policy', ], 'InitiateVaultLockOutput' => [ 'type' => 'structure', 'members' => [ 'lockId' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-lock-id', ], ], ], 'InsufficientCapacityException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidParameterValueException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InventoryRetrievalJobDescription' => [ 'type' => 'structure', 'members' => [ 'Format' => [ 'shape' => 'string', ], 'StartDate' => [ 'shape' => 'DateTime', ], 'EndDate' => [ 'shape' => 'DateTime', ], 'Limit' => [ 'shape' => 'string', ], 'Marker' => [ 'shape' => 'string', ], ], ], 'InventoryRetrievalJobInput' => [ 'type' => 'structure', 'members' => [ 'StartDate' => [ 'shape' => 'string', ], 'EndDate' => [ 'shape' => 'string', ], 'Limit' => [ 'shape' => 'string', ], 'Marker' => [ 'shape' => 'string', ], ], ], 'JobList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GlacierJobDescription', ], ], 'JobParameters' => [ 'type' => 'structure', 'members' => [ 'Format' => [ 'shape' => 'string', ], 'Type' => [ 'shape' => 'string', ], 'ArchiveId' => [ 'shape' => 'string', ], 'Description' => [ 'shape' => 'string', ], 'SNSTopic' => [ 'shape' => 'string', ], 'RetrievalByteRange' => [ 'shape' => 'string', ], 'Tier' => [ 'shape' => 'string', ], 'InventoryRetrievalParameters' => [ 'shape' => 'InventoryRetrievalJobInput', ], ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ListJobsInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'limit' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'limit', ], 'marker' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'marker', ], 'statuscode' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'statuscode', ], 'completed' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'completed', ], ], ], 'ListJobsOutput' => [ 'type' => 'structure', 'members' => [ 'JobList' => [ 'shape' => 'JobList', ], 'Marker' => [ 'shape' => 'string', ], ], ], 'ListMultipartUploadsInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'marker' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'marker', ], 'limit' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'limit', ], ], ], 'ListMultipartUploadsOutput' => [ 'type' => 'structure', 'members' => [ 'UploadsList' => [ 'shape' => 'UploadsList', ], 'Marker' => [ 'shape' => 'string', ], ], ], 'ListPartsInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'uploadId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'uploadId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'uploadId', ], 'marker' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'marker', ], 'limit' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'limit', ], ], ], 'ListPartsOutput' => [ 'type' => 'structure', 'members' => [ 'MultipartUploadId' => [ 'shape' => 'string', ], 'VaultARN' => [ 'shape' => 'string', ], 'ArchiveDescription' => [ 'shape' => 'string', ], 'PartSizeInBytes' => [ 'shape' => 'long', ], 'CreationDate' => [ 'shape' => 'string', ], 'Parts' => [ 'shape' => 'PartList', ], 'Marker' => [ 'shape' => 'string', ], ], ], 'ListProvisionedCapacityInput' => [ 'type' => 'structure', 'required' => [ 'accountId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], ], ], 'ListProvisionedCapacityOutput' => [ 'type' => 'structure', 'members' => [ 'ProvisionedCapacityList' => [ 'shape' => 'ProvisionedCapacityList', ], ], ], 'ListTagsForVaultInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], ], ], 'ListTagsForVaultOutput' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'ListVaultsInput' => [ 'type' => 'structure', 'required' => [ 'accountId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'marker' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'marker', ], 'limit' => [ 'shape' => 'string', 'location' => 'querystring', 'locationName' => 'limit', ], ], ], 'ListVaultsOutput' => [ 'type' => 'structure', 'members' => [ 'VaultList' => [ 'shape' => 'VaultList', ], 'Marker' => [ 'shape' => 'string', ], ], ], 'MissingParameterValueException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'NotificationEventList' => [ 'type' => 'list', 'member' => [ 'shape' => 'string', ], ], 'NullableLong' => [ 'type' => 'long', ], 'PartList' => [ 'type' => 'list', 'member' => [ 'shape' => 'PartListElement', ], ], 'PartListElement' => [ 'type' => 'structure', 'members' => [ 'RangeInBytes' => [ 'shape' => 'string', ], 'SHA256TreeHash' => [ 'shape' => 'string', ], ], ], 'PolicyEnforcedException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ProvisionedCapacityDescription' => [ 'type' => 'structure', 'members' => [ 'CapacityId' => [ 'shape' => 'string', ], 'StartDate' => [ 'shape' => 'string', ], 'ExpirationDate' => [ 'shape' => 'string', ], ], ], 'ProvisionedCapacityList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProvisionedCapacityDescription', ], ], 'PurchaseProvisionedCapacityInput' => [ 'type' => 'structure', 'required' => [ 'accountId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], ], ], 'PurchaseProvisionedCapacityOutput' => [ 'type' => 'structure', 'members' => [ 'capacityId' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-capacity-id', ], ], ], 'RemoveTagsFromVaultInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'RequestTimeoutException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 408, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'type' => [ 'shape' => 'string', ], 'code' => [ 'shape' => 'string', ], 'message' => [ 'shape' => 'string', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'SetDataRetrievalPolicyInput' => [ 'type' => 'structure', 'required' => [ 'accountId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'Policy' => [ 'shape' => 'DataRetrievalPolicy', ], ], ], 'SetVaultAccessPolicyInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'policy' => [ 'shape' => 'VaultAccessPolicy', ], ], 'payload' => 'policy', ], 'SetVaultNotificationsInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'vaultNotificationConfig' => [ 'shape' => 'VaultNotificationConfig', ], ], 'payload' => 'vaultNotificationConfig', ], 'Size' => [ 'type' => 'long', ], 'StatusCode' => [ 'type' => 'string', 'enum' => [ 'InProgress', 'Succeeded', 'Failed', ], ], 'Stream' => [ 'type' => 'blob', 'streaming' => true, ], 'TagKey' => [ 'type' => 'string', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'string', ], ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'TagValue' => [ 'type' => 'string', ], 'UploadArchiveInput' => [ 'type' => 'structure', 'required' => [ 'vaultName', 'accountId', ], 'members' => [ 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'archiveDescription' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-archive-description', ], 'checksum' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-sha256-tree-hash', ], 'body' => [ 'shape' => 'Stream', ], ], 'payload' => 'body', ], 'UploadListElement' => [ 'type' => 'structure', 'members' => [ 'MultipartUploadId' => [ 'shape' => 'string', ], 'VaultARN' => [ 'shape' => 'string', ], 'ArchiveDescription' => [ 'shape' => 'string', ], 'PartSizeInBytes' => [ 'shape' => 'long', ], 'CreationDate' => [ 'shape' => 'string', ], ], ], 'UploadMultipartPartInput' => [ 'type' => 'structure', 'required' => [ 'accountId', 'vaultName', 'uploadId', ], 'members' => [ 'accountId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'accountId', ], 'vaultName' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'vaultName', ], 'uploadId' => [ 'shape' => 'string', 'location' => 'uri', 'locationName' => 'uploadId', ], 'checksum' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-sha256-tree-hash', ], 'range' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'Content-Range', ], 'body' => [ 'shape' => 'Stream', ], ], 'payload' => 'body', ], 'UploadMultipartPartOutput' => [ 'type' => 'structure', 'members' => [ 'checksum' => [ 'shape' => 'string', 'location' => 'header', 'locationName' => 'x-amz-sha256-tree-hash', ], ], ], 'UploadsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UploadListElement', ], ], 'VaultAccessPolicy' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'string', ], ], ], 'VaultList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DescribeVaultOutput', ], ], 'VaultLockPolicy' => [ 'type' => 'structure', 'members' => [ 'Policy' => [ 'shape' => 'string', ], ], ], 'VaultNotificationConfig' => [ 'type' => 'structure', 'members' => [ 'SNSTopic' => [ 'shape' => 'string', ], 'Events' => [ 'shape' => 'NotificationEventList', ], ], ], 'boolean' => [ 'type' => 'boolean', ], 'httpstatus' => [ 'type' => 'integer', ], 'long' => [ 'type' => 'long', ], 'string' => [ 'type' => 'string', ], ],];
