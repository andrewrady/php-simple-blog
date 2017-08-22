<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$widget = getWidget(request()->get('widgetId'));


deleteWidget($widget['id']);

$response = \Symfony\Component\HttpFoundation\Response::create(null, \Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' => BASE_URL]);
$response->send();
exit;
