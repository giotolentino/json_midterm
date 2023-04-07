<?php header("Access-Control-Allow-Origin: *");

    $music = array (
        array (
            "title" => "Buloy",
            "artist" => "Parokya ni Edgar",
            "release" => "1996",
            "song" => "Buloy.mp3",
            "genres" => array("genre_1" => "Pop", "genre_2" => "Holloween", "genre_3" => "Rock", "genre_4" => "Pinoy Rock", "genre_5" => "Alternative Rock"),
            "image" => "https://www.nme.com/wp-content/uploads/2022/01/parokya-ni-edgar-borbolen-album-review@2000x1270-696x442.jpg"

        ),
        array (
            "title" => "Pangako",
            "artist" => "Cueshe",
            "release" => "2010",
            "song" => "pangako.mp3",
            "genres" => array("genre_1" => "Pinoy Rock", "genre_2" => "Pop", "genre_3" => "Rock", "genre_4" => "Drama", "genre_5" => "Romance"),
            "image" => "https://manilastandard.net/panel/_files/image/New_Images/featured_image/2019/September/16/Cueshe.jpg"

        ),
        array (
            "title" => "Narda",
            "artist" => "Kamikazee",
            "release" => "2006",
            "song" => "narda.mp3",
            "genres" => array("genre_1" => "Post-Punk Revival", "genre_2" => "Alternative Rock", "genre_3" => "New Rave", "genre_4" => "Acoustic Rock", "genre_5" => "Indie Rock"),
            "image" => "https://i.pinimg.com/564x/cd/f8/86/cdf88699539eafbeb195b940b9e374b3.jpg"

        ),
        array (
            "title" => "Salamat",
            "artist" => "The Dawn",
            "release" => "1989",
            "song" => "salamat.mp3",
            "genres" => array("genre_1" => "Rock", "genre_2" => "Pop", "genre_3" => "Indonesian Rock", "genre_4" => "Indonesian Pop", "genre_5" => "Holiday"),
            "image" => "https://entertainment.inquirer.net/files/2015/03/The-Dawn.jpg"

        ),
        array (
            "title" => "Magbalik",
            "artist" => "Callalily",
            "release" => "2006",
            "song" => "magbalik.mp3",
            "genres" => array("genre_1" => "Pop Rock", "genre_2" => "Rock", "genre_3" => "Pop", "genre_4" => "Pinoy Rock", "genre_5" => "Indonesian Rock"),
            "image" => "https://media.philstar.com/images/articles/callalily-final_2017-03-28_08-54-28.jpg"

        ),
        array (
            "title" => "Tambay",
            "artist" => "SpongeCola",
            "release" => "2004",
            "song" => "tambay.mp3",
            "genres" => array("genre_1" => "Pop Rock", "genre_2" => "Rock", "genre_3" => "Pop", "genre_4" => "Pinoy Rock", "genre_5" => "Indonesian Rock"),
            "image" => "https://images.sk-static.com/images/media/img/col6/20190319-081730-017349.jpg"

        )
    );
    echo json_encode(array("music" => $music));
?>