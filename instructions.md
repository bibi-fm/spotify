* Instructions:
    We want to develop a dynamic web application of the type 'Spotify'.
    Here is all the information and all the needs necessary for the development of the
    application.

* Part 0 :

    Create and initialize a Github repository. DONE
    Everyone on the team should clone/use it. DONE

* Part 1: BRICIA
    - Prepare a menu, visible on all pages of your site. This menu contains the
    links to the pages: Home, Songs, Artists, Playlists and Register / Login. DONE
    - Home page ('/'): TO FIX
    The home page is an information page. It displays the title, a
    short description of the site and the menu. DONE

* Part 2 : RICARDO
    - Artist list page ('/ artists')
    This page will list all artists. You will therefore have to query the database.
    At the end, you should have a list of Artists.
    For each artist, we will display the name (DONE), the first 20 characters of the bio (DONE),
    the gender(DONE) and the number of music written(DONE).

* Part 3 : BRICIA DONE
    - Create a page to insert a new artist.
    You need to use a form.

* Part 4 : RICARDO
    - Song/Music list page ('/songs)
    This page will list all songs.
    Display at least the title, the poster and name of the artist.

    - Add the option to sort by song name DESC or ASC.

    - Add a search box (input). When user press the search button it will look for a movie's title looking like what's inside the input [BONUS]

* Part 5 : BRICIA
    - Registration page ('/ register'):
    Allows the user to register on the site. He must provide the email and
    password to be able to register. DONE

    - Connection page ('/ login'):
    Allows the user to connect. DONE
    Check if the user exists in the database.
    o If the user exists, you should display a success message.
    o Display an error message if this is not the case or if it has the
    wrong password.

* Part 6 : RICARDO
    - My account page ('/ account')
    This page will display information about the user.
    This page is allowed only for loggued-in user.

* Part 7 : BRICIA
    - Playlist page ('/playlists).
    You can access this page only if you are logged in.
    On this page you have two sections.
    The first one is a form to create a new playlist.
    The second section is displaying all the playlists for the user (title and date of
    the playlist).

* Part 8 : BOTH
    - You have to edit the Songs page (‘/songs’)
    Now, near to each song title, you should add a select/dropdown menu that
    lists all your playlist and a button.
    - You can choose one playlist in the dropdown and when the user clicks on the
    button it should save the song inside the chosen playlist
