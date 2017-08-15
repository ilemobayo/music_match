<?php
/**
 * Created by PhpStorm.
 * User: LAHCE
 * Date: 15/08/2017
 * Time: 10:59
 */

namespace Controller;


class MusicController extends ControllerAbstract
{
    public function showAlbumAction($id_album){

        $album = $this->app['spotify.api']->getAlbum($id_album);

        return $this->render('album/album.html.twig',
            [
                'album' => $album,
            ]
        );
    }

    public function showArtistAction($id_artist){

        $artist = $this->app['spotify.api']->getArtist($id_artist);
        $topArtistTrack = $this->app['spotify.api']->getArtistTopTracks($id_artist, ['country' => 'FR']);
        $albumArtist = $this->app['spotify.api']->getArtistAlbums($id_artist);
        $relatedArtists = $this->app['spotify.api']->getArtistRelatedArtists($id_artist);

        return $this->render('album/artist.html.twig',
            [
                'artist' => $artist,
                'topArtistTrack' => $topArtistTrack,
                'albumArtist' => $albumArtist,
                'relatedArtists' => $relatedArtists
            ]
        );
    }
}
