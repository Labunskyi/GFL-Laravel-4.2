<?php

class HomeController extends BaseController {


	public function showArtists()
	{
		$artists = DB::table('artist')->get();
		//$artists = Artist::all();
				
		return View::make('index', compact('artists'));
	}

	public function showArtist($id)
	{
		$artist = Artist::find($id);
		
		$albums = $artist->albums;
				
		return View::make('artist', compact('albums', 'artist'));
	}

	public function showAlbum($id) {


		$album = Album::find($id);
		$artist = $album->artist;

		$tracks = $album->tracks;

		return View::make('album', compact('tracks', 'album', 'artist'));

	}

	public function showTrack($id) {

		$track = Track::find($id);
		$album = $track->album;
		$genre = $track->genre;

		return View::make('track', compact('track', 'album', 'genre'));
	}

}
