<?php

return [
    'local' => [
        'type' => 'Local',
        'root' => '/',
    ],
    's3' => [
        'type'    => 'AwsS3',
        'key'     => '',
        'secret'  => '',
        'region'  => 'us-east-1',
        'version' => 'latest',
        'bucket'  => '',
        'root'    => '',
    ],
    'gcs' => [
        'type'   => 'Gcs',
        'key'    => '',
        'secret' => '',
        'bucket' => '',
        'root'   => '',
    ],
    'dropbox-v1' => [
        'type'   => 'DropboxV1',
        'token'  => '',
        'key'    => '',
        'secret' => '',
        'app'    => '',
        'root'   => '',
    ],
    'dropbox-v2' => [
        'type'   => 'DropboxV2',
        'token'  => '',
        'key'    => '',
        'secret' => '',
        'app'    => '',
        'root'   => '',
     ],
    'ftp' => [
        'type'     => 'Ftp',
        'host'     => '',
        'username' => '',
        'password' => '',
        'port'     => 21,
        'passive'  => true,
        'ssl'      => true,
        'timeout'  => 30,
        'root'     => '',
    ],
    'sftp' => [
        'type'       => 'Sftp',
        'host'       => '',
        'username'   => '',
        'password'   => '',
        'port'       => 21,
        'timeout'    => 10,
        'privateKey' => '',
        'root'       => '',
    ],
];
