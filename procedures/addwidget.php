<?php

require_once __DIR__ . '/../inc/bootstrap.php';

$widgetTitle = request()->get('title');
$widgetContent = request()->get('content');



try {
  $addWidget = addWidget($widgetTitle, $widgetContent);

  $response = \Symfony\Component\HttpFoundation\Response::create(null,
    \Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' => BASE_URL]);
  $response->send();
} catch (Exception $e) {
  $response = \Symfony\Component\HttpFoundation\Response::create(null,
		\Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' =>  BASE_URL . '/admin/widget/add.php']);
	$response->send();
	exit;
}
