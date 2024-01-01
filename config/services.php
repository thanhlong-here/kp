<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'database_url' => env('FIREBASE_DATABASE_URL','gs://kingpang-b6f25.appspot.com'),
        'project_id' => env('FIREBASE_PROJECT_ID', 'kingpang-b6f25'),
        'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', '2e318583245b9bd5f564a9d476f07df86dfd3f64'),
        'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCGRSs5+oo/
          	VKYk\nC54KDKM0x2L3j04cYr4byIqpfQ6z1q/58drO89E7NxUZ6VKU0yTyUnSUmAi8bGon\nOuhUVxQiPX60pUyz
          	FqloX9a0pk+bUOTICcnAkjv+4i07c5kWkTlGRDYUCNzD64lu\ntglZmeW6jFfuCMIZqLKnp1iFHwFeAHpf3VKeDl
          	0uYdbTTX6ezC04nhvnOT2+cw4M\nawYiF37AlFm02L5/8a6ZS8L1LHFL5pEi2NFohnbJIaoHq7yf5nTEuhEBm0Kxp
          	4sN\nq32BAQGOE+Yyhr2QhgnC3/Fojt61GMcF9BASHNQIHDik8n4lFcdwu55pyStBlW0L\n1JGrtzVvAgMBAAECgg
          	EAOKwKNjMK1fc3FsC2iFxUKIs9uOrKF84Pmq9241nO8lYb\nuZ388lvTxLAXnnOuMPW7wvHNlghjq5AA8CT7edm1
          	PEyDZeDdMjvO7iiBeYc204H9\nxnbnKnoui4LQf6bnhzBtobxZrPQepi0MuWdpI+ICpk3lMSmOL4FWQtAt2yY+j
          	/t8\nIPjDoy2+tiZBW36aY2FPQURFzDUUyQyYroRz/E/iePW7DUv1h6h31CgTapSNEFy2\nN8JyfUmOoGIG1uUOJQOF
          	SGlaW9pGOPzTeBFUa7wiphYYyz9gOTQS1xWm5Lq+aArI\nNWgPWneaXV0ze7V7EojQdGqgtLCqgQ5/mx9bilvX8QKBgQC
          	9QQodVaQZ7GYhmDBf\nTY/qC9rDuFQ0cj7k2iG0X50xG/4vlsnmi+pZr96EhBRSHc3IHDP/fPwyDoBvUUHn\nbQBOn9cGk5
          	C9wqrQwAJfqJ6iwmnzCUsBCT4G2uw1czqy2ehNwaHY5G57CygdyPh7\nwyU/jxhfe4EtsVmlsBRf14QXnwKBgQC1n91n5cd2
          	rsS0+o2VF+L2UEOVCbSjg0jQ\nu+OmweQqZv1h7YkH59S2h5iDhudANNdJ6ZBcLwjVHN9Ap6JyxPcN/pW6kG0ES3u3\nkc9ME
          	BVZSqQpgHBu5iFghVtWK9CXPa5h0qgVT3rRmv3S5S92Sx5Rl0jJ8qtNIjQx\nZxjv1NNQMQKBgQCPYGC7TJBgG1pchSHQccBfvc9k
          	i5cvjIXdduwl7HH4LI7rmr8m\n7EUE4Vog5rdGZtHpkoRKQHQHsDjZHKRjIY8kAbAziUQUnxAtyemCcwqLn+IIf7fU\n9x2Ir/5
          	XmA6WRMPbdKCa4qRYj2E6/3BQwszLVCtQ2w5IgZ27CqTE309xXQKBgGnc\np1lithM4JNFz5MhNJu34tJuPD6nq4KtBiJxvEQWi
          	B/hnUmK4PuSxPjUTkYB8DCw5\npfoFNDm7XWk7DFWm9nVCuZUHj3NcZ90EcPZdvYPRHMRP57jMDBJNSIJ+gVNWEWlV\nNsFNFUJ
          	M+7tL+JETkbVu329OMYiA8jkFZaSMwSpRAoGBALq0UMErGAecavY3hlcq\nk1nIz/ZV22Vn6UVziAkj94fhcLbDo6dr6A3CbZkF
          	JHHqQJobF6TfZLC7U3BECOUz\nI3jFYmNLoLqkn1TvgeVxWtR1ruNiWfexaIuazJ7xBv2U4FljvRRYLkPbRHi6LH/7\nhl8pLwfjJfw6SFZwRh5loR39\n
          	-----END PRIVATE KEY-----\n')),
        'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-bmxqr@kingpang-b6f25.iam.gserviceaccount.com'),
        'client_id' => env('FIREBASE_CLIENT_ID', '113609372120315778868'),
        'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-bmxqr%40kingpang-b6f25.iam.gserviceaccount.com'),
    ],
];
