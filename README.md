
![Logo](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/th5xamgrr6se0x5ro4g6.png)


# What is BeatWave?

BeatWave is an online music streaming service that allows you to listen to your favorite songs and discover new music from a vast library of tracks. With BeatWave, you can access millions of songs from various genres, including pop, rock, hip-hop, electronic, and more.

Using BeatWave is simple and easy. You can create a free account and start browsing the library of tracks right away. The search feature allows you to find specific songs or artists, and you can create custom playlists of your favorite tracks. BeatWave also offers curated playlists and radio stations, which you can browse based on your mood or preferred genre.

With BeatWave's user-friendly interface, you can enjoy uninterrupted streaming of high-quality music without any ads or interruptions. You can also connect with your friends and share your playlists or tracks on social media.

In summary, BeatWave is a comprehensive music streaming service that offers a seamless listening experience, with access to millions of songs from various genres, curated playlists, and radio stations.


## Deployment

I was using XAMPP for this project. So pretty basic setup.

* Install [XAMPP](https://www.apachefriends.org/)
* After installation navigate to XAMPP's htdocs folder (C:/xampp/htdocs/)
* Place BeatWave folder there
* Go to XAMPP controll panel and make sure Apache and MySQL is running
* Go to [phpMyAdmin](http://localhost/phpmyadmin/)
* Create a database named **laravel**
* Open your IDE's terminal while in **htdocs/BeatWave** or just navigate to **BeatWave** directory using terminal
* Then run this command in terminal
```bash
#this command pushes database tables to laravel database to MySQL
php artisan migrate
```

## Authors

- [@Benorno](https://github.com/Benorno)
