<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Video
 *
 * @author DELL
 */

require_once './VideoActions.php';

class Video implements VideoActions{
    private $title;
    private $review;
    private $views;
    private $likes;
    private $playing;

    public function __construct($title) {
        $this->title = $title;
        $this->review = 1;
        $this->views = 0;
        $this->likes = 0;
        $this->playing = false;
    }
    
   public function getTitle() {
       return $this->title;
   }

   public function getReview() {
       return $this->review;
   }

   public function getViews() {
       return $this->views;
   }

   public function getLikes() {
       return $this->likes;
   }

   public function getPlaying() {
       return $this->playing;
   }

   public function setTitle($title) {
       $this->title = $title;
   }

   public function setReview($review) {
       $this->review = $review;
   }

   public function setViews($views) {
       $this->views = $views;
   }

   public function setLikes($likes) {
       $this->likes = $likes;
   }

   public function setPlaying($playing) {
       $this->playing = $playing;
   }
    
    public function play() {
        $this->playing = true;
    }

    public function pause() {
        $this->playing = false;
    }

    public function like() {
        $this->likes++;
    }

    /*
    @Override
    public String toString() {
        return "Video{" + "title=" + title + ", review=" + review + ", views=" + views + ", likes=" + likes + ", playing=" + playing + '}';
    }

     */
}
