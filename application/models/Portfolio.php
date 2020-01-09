<?php

namespace application\models;

use application\core\Model;

class Portfolio extends Model {

	public $error;

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM records');
	}

	public function postsList($route,$max) {
		//$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1)-1) * $max),
		];
		return $this->db->row('SELECT * FROM records ORDER BY id DESC LIMIT :max OFFSET :start', $params);
	}
	public function getAll() {
		return $this->db->row('SELECT * FROM records');
	}



    public function postAdd($post) {
        $params = [
            'subject' => $post['subject'],
            'topic' => $post['topic'],
            'semester' => $post['semester'],
            'rating' => $post['rating'],
        ];
        $this->db->query('INSERT INTO records(subject,topic, semester, rating) VALUES (:subject,:topic, :semester, :rating)', $params);
        return $this->db->lastInsertId();
    }

}