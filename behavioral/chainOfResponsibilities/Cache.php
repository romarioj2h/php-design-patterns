<?php


class Cache {
    const FILE_PATH = '/tmp/cache.design.patterns.test.json';

    private $content;

    public function __construct() {
        $this->content = $this->getContent();
    }

    function save($key, $value) {
        $this->content[$key] = $value;
        $this->saveContent();
    }

    function get($key) {
        return $this->content[$key] ?? null;
    }

    private function getContent() {
        if (!file_exists(self::FILE_PATH)) {
            return [];
        }
        return json_decode(file_get_contents(self::FILE_PATH), true) ?? [];
    }

    private function saveContent() {
        file_put_contents(self::FILE_PATH, json_encode($this->content));
    }
}
