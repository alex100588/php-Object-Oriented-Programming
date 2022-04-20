<?php

class Song{
    public $songID;
    public $title;
}

$octopusSong = new Song;
$octopusSong->songID = 1;
$octopusSong->title = "Octopus's Garden";

//var_dump($octopusSong);


class Playlist{
    public $name;
    public $songs = [];

    public function addSong($song){
        $this->songs[] = $song;
    }
}

$playlist = new Playlist();
$playlist->name = 'Rock';
$playlist->addSong($octopusSong);

//new song
$metallica = new Song();
$metallica->songID = 2;
$metallica->title = 'Nothing else matters';
$playlist->addSong($metallica);
print_r($playlist);

//new song
$yellowSubmarine = new Song();
$yellowSubmarine->songID = 3;
$yellowSubmarine->title = 'Yellow submarine';
$playlist->addSong($yellowSubmarine);
print_r($playlist);