<?php
require_once __DIR__ . '/../inc/bootstrap.php';


$post = getPost(request()->get('postId'));


deletePost($post['id']);


$response = \Symfony\Component\HttpFoundation\Response::create(null, \Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' => BASE_URL]);
$response->send();
exit;