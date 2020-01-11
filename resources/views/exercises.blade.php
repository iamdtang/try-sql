@extends('layout')

@section('title', 'Exercises')

@section('content')
  <h1>Exercises</h1>
  <div style="font-size: 20px;">
    <h2>Querying</h2>
    <dl>
      <dt>Give me the names of all playlists</dt>
      <dd>SELECT Name FROM playlists</dd>

      <dt>Give me the name and unit price for all tracks</dt>
      <dd>SELECT Name, UnitPrice FROM tracks</dd>

      <dt>Give me all columns for every track</dt>
      <dd>SELECT * FROM tracks</dd>

      <dt class="exercise">EXERCISE: Give me all columns for every genre</dt>
      <dd>SELECT * FROM genres</dd>

      <dt>Find all tracks with genre "Metal"</dt>
      <dd>SELECT * FROM tracks WHERE GenreId = 3</dd>

      <dt class="exercise">EXERCISE: Give me a list of all companies who were customers</dt>
      <dd>SELECT Company FROM customers WHERE Company IS NOT NULL</dd>

      <dt>Find all tracks with genre "Metal" sorted by their length (shortest to longest)</dt>
      <dd>SELECT * FROM tracks WHERE GenreId = 3 ORDER BY Milliseconds</dd>

      <dt class="exercise">EXERCISE: Give me all invoices sorted by the invoice date</dt>
      <dd>SELECT * FROM invoices ORDER BY InvoiceDate DESC|ASC</dd>

      <dt>Give me the 5 largest tracks</dt>
      <dd>SELECT * FROM tracks ORDER BY Bytes DESC LIMIT 5</dd>

      <dt class="exercise">EXERCISE: Give me the 10 most recent invoices</dt>
      <dd>SELECT * FROM invoices ORDER BY InvoiceDate DESC LIMIT 10</dd>
    </dl>

    <h2>Aggregates</h2>
    <dl>
      <dt>Give me the average size of a track</dt>
      <dd>SELECT AVG(Bytes) as bytes FROM tracks</dd>

      <dt>Give me the average size of a track in MB (1000000 bytes = 1 MB)</dt>
      <dd>SELECT AVG(Bytes) / 1000000 AS bytes FROM tracks</dd>

      <dt class="exercise">EXERCISE: Give me the average track length in minutes (1 second = 1000 milliseconds)</dt>
      <dd>SELECT AVG(Milliseconds) / 1000 / 60 AS avgLengthInMinutes FROM tracks</dd>

      <dt class="exercise">Add up the total of all invoices (Hint: use the SUM() function)</dt>
      <dd>SELECT SUM(Total) AS total FROM Invoices</dd>
    </dl>

    <h2>Joining Tables</h2>
    <dl>
      <dt>Give me the track and genre name for all tracks</dt>
      <dd>SELECT genres.Name AS genreName, tracks.Name AS trackName FROM tracks INNER JOIN genres ON genres.GenreId = tracks.GenreId</dd>

      <dt class="exercise">Give me the album name and track name for all tracks</dt>
      <dd>SELECT Title, Name FROM tracks INNER JOIN albums ON albums.AlbumId = tracks.AlbumId</dd>

      <dt>Find all tracks with genre "Metal"</dt>
      <dd>SELECT tracks.Name as trackName, genres.Name as genreName FROM tracks INNER JOIN genres ON genres.GenreId = tracks.GenreId WHERE genres.Name = "Metal"</dd>

      <dt>Give me the album name, track name, and artist for all tracks</dt>
      <dd>
        SELECT tracks.Name as trackName, albums.Title as albumTitle, artists.Name as artistName
        FROM tracks
        INNER JOIN albums ON albums.AlbumId = tracks.AlbumId
        INNER JOIN artists ON albums.ArtistId = artists.ArtistId
      </dd>

      <dt>Give me all tracks for the playlist "Grunge"</dt>
      <dd>
        SELECT playlists.Name as playlistName, tracks.Name as trackName, artists.Name as artistName
        FROM playlist_track
        INNER JOIN playlists ON playlists.PlaylistId = playlist_track.PlaylistId
        INNER JOIN tracks ON tracks.TrackId = playlist_track.TrackId
        INNER JOIN albums ON albums.AlbumId = tracks.AlbumId
        INNER JOIN artists ON albums.ArtistId = artists.ArtistId
        WHERE playlists.Name = "Grunge"
      </dd>
    </dl>
  </div>
@endsection
