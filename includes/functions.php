<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once $projectRoot.'/includes/awsSDK/aws-autoloader.php';

use Aws\DynamoDb\DynamoDbClient;
use Aws\S3\S3Client;
use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;

function getDBConnection()
{
	date_default_timezone_set('UTC');
	global $projectRoot;

	$sdk = new Aws\Sdk([
    'endpoint'   => 'https://dynamodb.us-west-2.amazonaws.com',
    'region'   => 'us-west-2',
    'version'  => 'latest',
    'credentials' => [
    'key'    => 'AKIAICEANPUXOOHUW7GQ',
    'secret' => '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'
    ],
    'http'    => [
        'verify' => $projectRoot .'includes/awsSDK/ca-bundle.crt'
        #'verify' => 'C:\wamp\www\ca-bundle.crt'
    ]
    ]);

	return $sdk;

}

function getS3Connection()
{
	date_default_timezone_set('UTC');
	global $projectRoot;

	$sdk = new Aws\Sdk([
	'endpoint'   => 'https://s3-us-west-2.amazonaws.com',
    'region'   => 'us-west-2',
    'version'  => 'latest',
    'credentials' => [
    'key'    => 'AKIAICEANPUXOOHUW7GQ',
    'secret' => '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'
    ],
    'http'    => [
        'verify' => $projectRoot .'includes/awsSDK/ca-bundle.crt'
        #'verify' => 'C:\wamp\www\ca-bundle.crt'
    ]
]);

	return $sdk;

}

function addToListingDB($item)
{
	$sdkConn = getDBConnection();
	$dynamodb = $sdkConn->createDynamoDb();
	$marshaler = new Marshaler();

	$params = [
    	'TableName' => 'Listing',
    	'Item' => $item
	];

	try {
    	$result = $dynamodb->putItem($params);
    	// echo "Added item: $Address\n";

	} catch (DynamoDbException $e) {
    	echo "Unable to add item:\n";
    	echo $e->getMessage() . "\n";
	}
}

function addToRequestDB($item)
{
	$sdkConn = getDBConnection();
	$dynamodb = $sdkConn->createDynamoDb();
	$marshaler = new Marshaler();

	$params = [
    	'TableName' => 'Request',
    	'Item' => $item
	];

	try {
    	$result = $dynamodb->putItem($params);
    	// print_r($params);

	} catch (DynamoDbException $e) {
    	echo "Unable to add item:\n";
    	echo $e->getMessage() . "\n";
	}
}

function addToUserDB($item)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();
    $marshaler = new Marshaler();

    $params = [
        'TableName' => 'User',
        'Item' => $item
    ];

    try {
        $result = $dynamodb->putItem($params);
        // print_r($params);

    } catch (DynamoDbException $e) {
        echo "Unable to add item:\n";
        echo $e->getMessage() . "\n";
    }
}

function getAllListings()
{
	$sdkConn = getDBConnection();
	$dynamodb = $sdkConn->createDynamoDb();

    $iterator = $dynamodb->getIterator('Scan', array( 
		'TableName'     => 'Listing',
    	));

    $returnArr = iterator_to_array($iterator);

    return $returnArr;
}

function getListing($id)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();

    $item = $dynamodb->getItem(array( 
        'TableName'     => 'Listing',
        'ConsistentRead' => true,
        'Key' => [
            'ListingID' => array('S' => $id),
        ],
    ));

    return $item;
}

function getUsersListings($email)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();

    $iterator = $dynamodb->query(array( 
        'TableName'     => 'Listing',
        'IndexName'     => 'UserEmail-index',
        'KeyConditionExpression' => 'UserEmail = :v_id',
        'ExpressionAttributeValues' =>  [
        ':v_id' => [
            'S' => $email]
        ],
    ));

    $returnArr = iterator_to_array($iterator);

    return $returnArr;
}

function getUser($email)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();

    $iterator = $dynamodb->query(array( 
        'TableName'     => 'User',
        'IndexName'     => 'Email-index',
        'KeyConditionExpression' => 'Email = :v_id',
        'ExpressionAttributeValues' =>  [
        ':v_id' => [
            'S' => $email]
        ],
    ));

    $returnArr = iterator_to_array($iterator);

    return $returnArr;
}

function getListingRooms($id)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();

    $iterator = $dynamodb->query(array( 
        'TableName'     => 'Room',
        'IndexName'     => 'ListingID-index',
        'KeyConditionExpression' => 'ListingID = :v_id',
        'ExpressionAttributeValues' =>  [
        ':v_id' => [
            'S' => $id]
        ],
    ));

    $returnArr = iterator_to_array($iterator);

    return $returnArr;
}

function getRoomLinks($id)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();

    $iterator = $dynamodb->query(array( 
        'TableName'     => 'Link',
        'IndexName'     => 'RoomID1-index',
        'KeyConditionExpression' => 'RoomID1 = :v_id',
        'ExpressionAttributeValues' =>  [
        ':v_id' => [
            'S' => $id]
        ],
    ));

    $returnArr = iterator_to_array($iterator);

    return $returnArr;
}

function getRoomBubbles($id)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();

    $iterator = $dynamodb->query(array( 
        'TableName'     => 'FeatureBubble',
        'IndexName'     => 'RoomID-index',
        'KeyConditionExpression' => 'RoomID = :v_id',
        'ExpressionAttributeValues' =>  [
        ':v_id' => [
            'S' => $id]
        ],
    ));

    $returnArr = iterator_to_array($iterator);

    return $returnArr;
}

function getListingAll($id)
{
    $sdkConn = getDBConnection();
    $dynamodb = $sdkConn->createDynamoDb();

    $returnArr = [getListing($id)["Item"]["StartingRoomID"]["S"]];

    $iterator = $dynamodb->query(array( 
        'TableName'     => 'Room',
        'IndexName'     => 'ListingID-index',
        'KeyConditionExpression' => 'ListingID = :v_id',
        'ExpressionAttributeValues' =>  [
        ':v_id' => [
            'S' => $id]
        ],
    ));

    $roomArr = iterator_to_array($iterator);
    $roomsArray = [];

    foreach($roomArr["Items"] as $room)
    {
        $iterator = $dynamodb->query(array( 
            'TableName'     => 'Link',
            'IndexName'     => 'RoomID1-index',
            'KeyConditionExpression' => 'RoomID1 = :v_id',
            'ExpressionAttributeValues' =>  [
            ':v_id' => [
                'S' => $room["RoomID"]["S"]]
            ],
        ));

        $linkArr = iterator_to_array($iterator);

        $iterator = $dynamodb->query(array( 
            'TableName'     => 'FeatureBubble',
            'IndexName'     => 'RoomID-index',
            'KeyConditionExpression' => 'RoomID = :v_id',
            'ExpressionAttributeValues' =>  [
            ':v_id' => [
                'S' => $room["RoomID"]["S"]]
            ],
        ));

        $bubbleArr = iterator_to_array($iterator);

        $roomBlock = [];
        array_push($roomBlock, $room);
        array_push($roomBlock, $linkArr["Items"]);
        array_push($roomBlock, $bubbleArr["Items"]);

        array_push($roomsArray, $roomBlock);
    }

    array_push($returnArr, $roomsArray);

    return $returnArr;
}

function uploadImage($imageAddrs, $imgID)
{
	$sdkConn = getS3Connection();
	$s3 = $sdkConn->createS3();

	$result = $s3->putObject(array(
    'Bucket'     => 'izerlabshousestorage',
    'Key'        => $imgID,
    'ContentType'  => 'image/jpg',
    'SourceFile' => $imageAddrs,
    'ACL'          => 'public-read',
));
	// print_r($result);
	
	// We can poll the object until it is accessible
	$s3->waitUntil('ObjectExists', array(
    	'Bucket' => 'izerlabshousestorage',
   		 'Key'    => $imgID
	));

	//delete temp file
	unlink($imageAddrs);

}

function searchListings($query)
{
	$sdkConn = getDBConnection();
	$dynamodb = $sdkConn->createDynamoDb();

    $iterator = $dynamodb->getIterator('Scan', array( 
		'TableName'     => 'Listing',
    	));

    $returnArr = iterator_to_array($iterator);
    
    return $returnArr;
}

function createUUID()
{
	$hostname = gethostname();
	$time = microtime();
	$UUID = uniqid($hostname);

	return md5($UUID);
}

?>