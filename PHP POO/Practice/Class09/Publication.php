<?php

interface Publication {
    public function open();
    public function close();
    public function browse($page);
    public function nextPage();
    public function prevPage();
}
