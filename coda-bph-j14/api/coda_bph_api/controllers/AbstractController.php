<?php

abstract class AbstractController
{
    protected function render(array $data)
    {
        echo json_encode($data);
    }
}