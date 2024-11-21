<?php
class Answer {
    private $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function save($data) {
        $entries = $this->read();
        $entries[] = $data;
        file_put_contents($this->file, json_encode($entries, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    public function read() {
        if (!file_exists($this->file)) {
            return [];
        }
        return json_decode(file_get_contents($this->file), true) ?: [];
    }
}
