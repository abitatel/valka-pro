<?php
define('WEBHOOK_SECRET', 'df3423c20f2230e4d9303c8d7aa5118697d1f46a1f02b773056b71498514b667');
define('REPO_DIR', __DIR__);
define('BRANCH', 'main');

$payload = file_get_contents('php://input');
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if (!$signature) {
    http_response_code(403);
    exit('No signature');
}

$expected = 'sha256=' . hash_hmac('sha256', $payload, WEBHOOK_SECRET);
if (!hash_equals($expected, $signature)) {
    http_response_code(403);
    exit('Invalid signature');
}

$data = json_decode($payload, true);
if (($data['ref'] ?? '') !== 'refs/heads/' . BRANCH) {
    http_response_code(200);
    exit('Not target branch');
}

$output = shell_exec('cd ' . escapeshellarg(REPO_DIR) . ' && git pull origin ' . BRANCH . ' 2>&1');

file_put_contents(REPO_DIR . '/deploy.log', date('[Y-m-d H:i:s] ') . $output . PHP_EOL, FILE_APPEND);

http_response_code(200);
echo $output;
