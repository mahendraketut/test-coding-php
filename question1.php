<?php
$tokenStorage = [];

function generateToken($user)
{
    global $tokenStorage;

    if (!isset($tokenStorage[$user])) {
        $tokenStorage[$user] = [];
    }

    $token = bin2hex(random_bytes(24));

    if (count($tokenStorage[$user]) >= 10) {
        array_shift($tokenStorage[$user]);
    }

    array_push($tokenStorage[$user], $token);
    return $token;
}

function verify_token($user, $token)
{
    global $tokenStorage;

    if (isset($tokenStorage[$user])) {
        $index = array_search($token, $tokenStorage[$user]);
        unset($tokenStorage[$user][$index]);
        return true;
    }
    return false;
}

$user = "Giri";
$token1 = generateToken($user);
$token2 = generateToken($user);

if (verify_token($user, $token1)) {
    echo "Token 1 verified, removed\n";
} else {
    echo "Token 1 not verified\n";
}

if (verify_token($user, $token2)) {
    echo "Token 1 verified, removed\n";
} else {
    echo "Token 1 not verified\n";
}
