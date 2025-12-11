<?php

class Router
{
    private ProductController $pc;
    private ProductCategoryController $pcc;
    private ReviewController $rc;
    private ErrorController $ec;
    public function __construct()
    {
        $this->pc = new ProductController();
        $this->pcc = new ProductCategoryController();
        $this->rc = new ReviewController();
        $this->ec = new ErrorController();
    }

    public function handleRequest() : void
    {
        if(!empty($_GET["route"]))
        {
            if($_GET["route"] === "products")
            {
                if(!empty($_GET["action"]))
                {
                    if($_GET["action"] === "list")
                    {
                        $this->pc->list();
                    }
                    else if($_GET["action"] === "details")
                    {
                        if(!empty($_GET["id"]))
                        {
                            $this->pc->details((int) $_GET["id"]);
                        }
                        else
                        {
                            $this->ec->missingIdError();
                        }
                    }
                    else
                    {
                        $this->ec->invalidActionError();
                    }
                }
                else
                {
                    $this->ec->missingActionError();
                }
            }
            else if($_GET["route"] === "product-categories")
            {
                if(!empty($_GET["action"]))
                {
                    if($_GET["action"] === "list")
                    {
                        $this->pcc->list();
                    }
                    else if($_GET["action"] === "details")
                    {
                        if(!empty($_GET["id"]))
                        {
                            $this->pcc->details((int) $_GET["id"]);
                        }
                        else
                        {
                            $this->ec->missingIdError();
                        }
                    }
                    else
                    {
                        $this->ec->invalidActionError();
                    }
                }
                else
                {
                    $this->ec->missingActionError();
                }
            }
            else if($_GET["route"] === "reviews")
            {
                if(!empty($_GET["action"]))
                {
                    if($_GET["action"] === "list")
                    {
                        $this->rc->list();
                    }
                    else if($_GET["action"] === "details")
                    {
                        if(!empty($_GET["id"]))
                        {
                            $this->rc->details((int) $_GET["id"]);
                        }
                        else
                        {
                            $this->ec->missingIdError();
                        }
                    }
                    else
                    {
                        $this->ec->invalidActionError();
                    }
                }
                else
                {
                    $this->ec->missingActionError();
                }
            }
            else
            {
                $this->ec->routingError();
            }
        }
        else
        {
            $this->ec->routingError();
        }
    }
}