<?php
class DemoController extends BaseController
{
    public function index()
    {
    }

    public function hello()
    {
        $this->set('name', Param::get('name'));
    }
}
