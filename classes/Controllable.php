<?php


namespace App\Classes;


interface Controllable
{
    public function index($args = []);

    public function display(): string;

    public function read($args = []): string;

    public function create($errors = []): string;

    public function formFields(): array;

    public function edit($args, $errors = []): string;

    public function save();

    public function update($args);

    public function delete($args);

    public function sanitizeValues();
}