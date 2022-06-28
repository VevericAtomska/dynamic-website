<?php
//****GLOBAL****//
global $error;
//ukoliko ima neki error neka ispise
if ($GLOBALS['error']) {
    $GLOBALS['error'] = implode('<br>', $error);
}





function search(){

    $searchCount = 0;
    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("Unable to connect");
    // provera za kljucne reci
    if (isset($_GET['inputSearch']) && $_GET['inputSearch'] != '') {

        // obrisati prazna mesta (space) u keywordu
        $search = trim($_GET['inputSearch']);

        $query = "SELECT * FROM blog_posts WHERE ";

        // razdvajamo svaki keyword znakom space
        // ako ukucam batman alan, batman i alan ce
        // biti svoji sopstevni keywordovi i izaci ce
        // i Batman Arkham Origins i Alan Wake
        $keywords = explode(' ', $search);
        $display_words = "";
        foreach ($keywords as $word) {
            $query .= "postTitle LIKE '%" . $word . "%' OR ";
            $display_words .= $word . " ";
        }
        // skracujemo kveri da nema dodatno OR na kraju kveri stringa
        $query = substr($query, 0, strlen($query) - 3);

        $search_query = mysqli_query($connect, $query);
        $result_count = mysqli_num_rows($search_query);
        // Stampanje rezultata
        echo '<div class="game-text">Your search results for: ' . $display_words;
        if ($result_count > 0) {
            echo '<br />'.$result_count.' results found. <br>';
            echo '<table>';
            while ($row = mysqli_fetch_assoc($search_query)) {
                echo '<tr>
                   <td>'.$row['postTitle'].'</td>
                </tr>
                <tr>
                    <td>'.$row['postDesc'].'</td>
                </tr>
                <tr>
                    <td>'.$row['postCont'].'</td>
                </tr>
                <tr>
                    <td>'.$row['postAuthor'].'</td>
                </tr>
                <tr>
                    <td>'.$row['postPublisher'].'</td>
                </tr>
                <tr>
                    <td>'.$row['postDate'].'</td>
                </tr>
               ';
            }
            echo '</table></div>';


        } else   {
            echo 'No results found.';
        }
    } else {
        echo " ";
    }

}

function advSearch(){

    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("Unable to connect");
    if (isset($_GET['title']) && $_GET['title'] != '') {

        $search = trim($_GET['title']);
        $query = "SELECT * FROM blog_posts WHERE ";
        $keywords = explode(' ', $search);
        $display_words = "";

        foreach ($keywords as $word) {
            $query .= "postTitle LIKE '%" . $word . "%' OR ";
            $display_words .= $word . " ";
        }

        // skracujemo kveri da nema dodatno OR na kraju kveri stringa
        $query = substr($query, 0, strlen($query) - 3);

        $search_query = mysqli_query($connect, $query);
        $result_count = mysqli_num_rows($search_query);

        // Stampanje rezultata
        echo '<div class="game-text">Advanced search results for: ' . $display_words;
        if ($result_count > 0) {

            echo '<br />' . $result_count . ' results found. <br>';
            echo '<div>Advanced search for ' . $display_words . '</div>';

            echo '<table>';
            while ($row = mysqli_fetch_assoc($search_query)) {
                echo '<tr>
                   <td>' . $row['postTitle'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postDesc'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postCont'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postAuthor'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postPublisher'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postDate'] . '</td>
                </tr>
               ';
            }
            echo '</table></div>';
        } else {
            echo 'No results found.';
        }
        //ovde
    } /**/ elseif (isset($_GET['author']) && $_GET['author'] != '') {
        $search = trim($_GET['author']);
        $query = "SELECT * FROM blog_posts WHERE ";
        $keywords = explode(' ', $search);
        $display_words = "";

        foreach ($keywords as $word) {
            $query .= "postAuthor LIKE '%" . $word . "%' OR ";
            $display_words .= $word . " ";
        }

        // skracujemo kveri da nema dodatno OR na kraju kveri stringa
        $query = substr($query, 0, strlen($query) - 3);

        $search_query = mysqli_query($connect, $query);
        $result_count = mysqli_num_rows($search_query);

        // Stampanje rezultata
        echo '<div class="game-text">Advanced search results for: ' . $display_words;
        if ($result_count > 0) {

            echo '<br />' . $result_count . ' results found. <br>';
            echo '<div>Advanced search for ' . $display_words . '</div>';

            echo '<table>';
            while ($row = mysqli_fetch_assoc($search_query)) {
                echo '<tr>
                   <td>' . $row['postTitle'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postDesc'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postCont'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postAuthor'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postPublisher'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postDate'] . '</td>
                </tr>
               ';
            }
            echo '</table></div>';
        } else {
            echo 'No results found.';
        }
    } elseif (isset($_GET['publisher']) && $_GET['publisher'] != '') {
        $search = trim($_GET['publisher']);
        $query = "SELECT * FROM blog_posts WHERE ";
        $keywords = explode(' ', $search);
        $display_words = "";

        foreach ($keywords as $word) {
            $query .= "postPublisher LIKE '%" . $word . "%' OR ";
            $display_words .= $word . " ";
        }

        // skracujemo kveri da nema dodatno OR na kraju kveri stringa
        $query = substr($query, 0, strlen($query) - 3);

        $search_query = mysqli_query($connect, $query);
        $result_count = mysqli_num_rows($search_query);

        // Stampanje rezultata
        echo '<div class="game-text">Advanced search results for: ' . $display_words;
        if ($result_count > 0) {

            echo '<br />' . $result_count . ' results found. <br>';
            echo '<div>Advanced search for ' . $display_words . '</div>';

            echo '<table>';
            while ($row = mysqli_fetch_assoc($search_query)) {
                echo '<tr>
                   <td>' . $row['postTitle'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postDesc'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postCont'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postAuthor'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postPublisher'] . '</td>
                </tr>
                <tr>
                    <td>' . $row['postDate'] . '</td>
                </tr>';
            }
            echo '</table></div>';
        } else {
            echo 'No results found.';
        }
    } elseif (isset($_GET['keywords']) && $_GET['keywords'] != '') {
        $search = trim($_GET['keywords']);
        $query = "SELECT * FROM blog_posts WHERE ";
        $keywords = explode(' ', $search);
        $display_words = "";

        foreach ($keywords as $word) {
            $query .= "(postCont LIKE '%". $word ."%') OR (postDesc LIKE '%". $word ."%') OR ";
            $display_words .= $word . " ";
        }

        // skracujemo kveri da nema dodatno OR na kraju kveri stringa
        $query = substr($query, 0, strlen($query) - 3);

        $search_query = mysqli_query($connect, $query);
        $result_count = mysqli_num_rows($search_query);

        // Stampanje rezultata
        echo '<div class="game-text">Advanced search results for: ' . $display_words;
        if ($result_count > 0) {

            echo '<br />' . $result_count . ' results found. <br>';
            echo '<div>Advanced search for ' . $display_words . '</div>';

            echo '<table>';
            while ($row = mysqli_fetch_assoc($search_query)) {
                echo '<tr>
                               <td>' . $row['postTitle'] . '</td>
                            </tr>
                            <tr>
                                <td>' . $row['postDesc'] . '</td>
                            </tr>
                            <tr>
                                <td>' . $row['postCont'] . '</td>
                            </tr>
                            <tr>
                                <td>' . $row['postAuthor'] . '</td>
                            </tr>
                            <tr>
                                <td>' . $row['postPublisher'] . '</td>
                            </tr>
                            <tr>
                                <td>' . $row['postDate'] . '</td>
                            </tr>
                           ';
            }
            echo '</table></div>';
        } else {
            echo 'No results found.';
        }
    }/**/ else {
        echo " ";
    }
}
?>