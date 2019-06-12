<?php

class Artist extends Eloquent {

	protected $table = 'Artist';
    protected $primaryKey = 'ArtistId';
    public $timestamps = false;


	public function albums(){

	return $this->hasMany('Album', 'ArtistId', 'AlbumId');
	}

	public function tracks(){

	return $this->hasManyThrough('Track', 'Album', 'ArtistId', 'AlbumId');
	}	
}
