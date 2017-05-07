# php-aplayer

[![Latest Stable Version](https://poser.pugx.org/daryl/php-aplayer/v/stable)](https://packagist.org/packages/daryl/php-aplayer)
[![Total Downloads](https://poser.pugx.org/daryl/php-aplayer/downloads)](https://packagist.org/packages/daryl/php-aplayer)
[![Latest Unstable Version](https://poser.pugx.org/daryl/php-aplayer/v/unstable)](https://packagist.org/packages/daryl/php-aplayer)
[![License](https://poser.pugx.org/daryl/php-aplayer/license)](https://packagist.org/packages/daryl/php-aplayer)

A php package of Aplayer.[](http://aplayer.js.org)

And thank @metowolf with his [Meting](https://github.com/metowolf/Meting)

**Only netease music provided now, others is comming soon**

**Playlist is comming soon**

## How to use

```bash
composer require daryl/php-aplayer
```

```php
$aplayer = new Aplayer\Aplayer();
$aplayer->out();
```

## Methods

```php
Aplayer::setSong($songId); //Id of the netease music, default 22817183, one of my favirote music.
Aplayer::setPlaylist($playlistId); //Id of the netease music, default 476998713, one of my favirote playlist.
Aplayer::setSongType('song' or 'playlist') //To choose song or playlist.
```

Others are the setters of the option which in Aplayer.

## TODO
* [x] netease music
* [x] playlist for netease music
* [ ] multi elements in one page

Just enjoy it!


