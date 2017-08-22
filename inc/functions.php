<?php

/**
 * @return \Symfony\Component\HttpFoundation\Request
 */
function request() {
    return \Symfony\Component\HttpFoundation\Request::createFromGlobals();
}

function addPost($title, $description, $featured, $image){
	global $db;
	$ownerId = 0;

	try {
		$query = 'INSERT INTO post (title, description, featured, image) VALUES (:title, :description, :featured, :image)';
		$stmt = $db->prepare($query);
		$stmt->bindParam(':title', $title);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':featured', $featured);
		$stmt->bindParam(':image', $image);
		return $stmt->execute();
	} catch (Exception $e) {
		throw $e;
	}
}

function updatePost($postId, $title, $description, $featured, $image){
	global $db;

	if(!empty($image)){
		try {
			$query = "UPDATE post SET title=:title, description=:description, featured=:featured, image=:image WHERE id=:postId";
			$stmt = $db->prepare($query);
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':featured', $featured);
			$stmt->bindParam(':image', $image);
			$stmt->bindParam(':postId', $postId);
			return $stmt->execute();
		} catch (Exception $e) {
			throw $e;
		}
	} else {
		try {
			$query = "UPDATE post SET title=:title, description=:description, featured=:featured WHERE id=:postId";
			$stmt = $db->prepare($query);
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':featured', $featured);
			$stmt->bindParam(':postId', $postId);
			return $stmt->execute();
		} catch (Exception $e) {
			throw $e;
		}
	}
}

function deletePost($id) {
	global $db;

	try {
		$stmt = $db->prepare("DELETE from post WHERE id = ? ");
		$stmt->bindParam(1, $id);
		$stmt->execute();
		return true;
	} catch (Exception $e) {
		return false;
	}
}

function getAllPosts() {
	global $db;

	try {
		$query = "SELECT * FROM post ORDER BY created_at DESC";
		$stmt = $db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
	} catch (Exception $e) {
		throw $e;
	}
}

function getPost($id) {
	global $db;

	try {
		$query = 'SELECT * FROM post WHERE id = ?';
		$stmt = $db->prepare($query);
		$stmt->bindParam(1, $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	} catch (Exception $e) {
		throw $e;
	}
}

function getFeaturedPost() {
	global $db;

	try {
		$query = "SELECT title, description, created_at, image, id FROM post WHERE featured = 1";
		$stmt = $db->prepare($query);
		$stmt->execute();
		return $stmt;
	} catch (Exception $e) {
		throw $e;
	}
}

function getRandomPosts() {
	global $db;

	try {
		$query = 'SELECT title, description, created_at, image, id FROM post ORDER BY RAND() LIMIT 3';
		$stmt = $db->prepare($query);
		$stmt->execute();
		return $stmt;
	} catch (Exception $e) {
		throw $e;
	}
}

#redirect
function redirect($path, $extra = []) {
	$response = \Symfony\Component\HttpFoundation\Response::create(null, \Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' => $path]);
	if (key_exists('cookies', $extra)) {
		foreach ($extra['cookies'] as $cookie) {
			$response->headers->setCookie($cookie);
		}
	}
	$response->send();
	exit;
}

function findUserByEmail($email) {
  global $db;
  try {
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    throw $e;
  }
}

function createUser($email, $password) {
	global $db;

	try {
		$query = "INSERT INTO users (email, password) VALUES (:email, :password)";
		$stmt = $db->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		return findUserByEmail($email);
	} catch (Exception $e) {
		throw $e;
	}
}

function isAuthenticated() {
	if (!request()->cookies->has('access_token')) {
		return false;
	}

	try {
		\Firebase\JWT\JWT::$leeway = 1;
		\Firebase\JWT\JWT::decode(
			request()->cookies->get('access_token'),
			getenv('SECRET_KEY'),
			['HS256']
		);
		return true;
	} catch (Exception $e) {
		return flase;
	}
}

function requireAuth(){
	if(!isAuthenticated()) {
		$accessToken = new \Symfony\Component\HttpFoundation\Cookie('access_token', 'Expired', time()-3600, '/', getenv('COOKIE_DOMAIN'));
		redirect('/login', ['cookies' => [$accessToken]]);
	}
}

//Widget functions

function addWidget($title, $content) {
  global $db;

  try {
    $query = 'INSERT INTO widgets (title, content) VALUES (:title, :content)';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    return $stmt->execute();
  } catch (Exception $e) {
    throw $e;
  }

}

function deleteWidget($id) {
  global $db;

  try {
    $stmt = $db->prepare("DELETE FROM widgets WHERE id = ?");
    $stmt->bindParam(1, $id);
    $stmt->execute();
    return true;
  } catch (Exception $e) {
    return false;
  }

}

function getWidget($id) {
	global $db;

	try {
		$query = 'SELECT * FROM widgets WHERE id = ?';
		$stmt = $db->prepare($query);
		$stmt->bindParam(1, $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	} catch (Exception $e) {
		throw $e;
	}
}

function getAllWidgets() {
  global $db;

  try {
    $query = "SELECT title, content, id FROM widgets ORDER BY RAND() LIMIT 5";
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
  } catch (Exception $e) {
    throw $e;
  }

}
