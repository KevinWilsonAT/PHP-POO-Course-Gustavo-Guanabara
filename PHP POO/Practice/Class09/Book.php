<?php
    require_once './Person.php';
    require_once './Publication.php';

class Book implements Publication{
    private $title;
    private $author;
    private $totalPages;
    private $currentPage;
    private $open;
    private $reader;
    
    public function details() {
        echo "<hr>Book:<br>" . " title: " . $this->title . ",<br> author: " . $this->author .
            ",<br> totalPages: " . $this->totalPages . ",<br> currentPage: " .
            $this->currentPage . ",<br> open: " . $this->open . ",<br> reader: " .
            $this->reader->getName() . ",<br> age: " . $this->reader->getAge().
            ",<br> gender: " . $this->reader->getGender();
    }
    
    // Special Methods
    
    public function __construct($title, $author, $totalPages, $reader) {
        $this->title = $title;
        $this->author = $author;
        $this->totalPages = $totalPages;
        $this->open = false;
        $this->currentPage = 0;
        $this->reader = $reader;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getTotalPages(){
        return $this->totalPages;
    }

    public function getCurrentPage(){
        return $this->currentPage;
    }

    public function getOpen(){
        return $this->open;
    }

    public function getReader(){
        return $this->reader;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function setTotalPages($totalPages){
        $this->totalPages = $totalPages;
    }

    public function setCurrentPage($currentPage){
        $this->currentPage = $currentPage;
    }

    public function setOpen($open){
        $this->open = $open;
    }

    public function setReader($reader){
        $this->reader = $reader;
    }

    public function browse($page) {
        if($page > $this->getTotalPages()){
            echo "<p>Error. Page " . $page . " does not exist on this book.</p>";
            echo "<p>Book total pages: " . $this->getTotalPages() . "</p>";
            echo "<br>";
            $this->currentPage = 0;
        }
        else{
            $this->currentPage = $page;
        }
    }

    public function close() {
        $this->open = false;
    }

    public function nextPage() {
        $this->currentPage++;
    }

    public function open() {
        $this->open = true;
    }

    public function prevPage() {
        $this->currentPage--;
    }
}
