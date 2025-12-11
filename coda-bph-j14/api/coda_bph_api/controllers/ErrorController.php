<?php

class ErrorController extends AbstractController
{
    public function routingError() : void
    {
        $this->render([
            "code" => 404,
            "message" => "Routing error. Please check your URL parameters."
        ]);
    }

    public function missingActionError() : void
    {
        $this->render([
            "code" => 400,
            "message" => "Missing action for the route. Please check your URL parameters."
        ]);
    }

    public function invalidActionError() : void
    {
        $this->render([
            "code" => 400,
            "message" => "Invalid action for the route. Please check your URL parameters."
        ]);
    }

    public function missingIdError() : void
    {
        $this->render([
            "code" => 400,
            "message" => "Missing ID for the action. Please check your URL parameters."
        ]);
    }
}