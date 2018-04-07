<?php
	$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db="group49DB"; 
	try {
		$conn = new PDO("mysql:host=$host", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS $db";
		$conn->exec($sql);
		$sql = "use $db";
		$conn->exec($sql);
		$artists = "CREATE TABLE IF NOT EXISTS Artists (
	        artistID int(11) AUTO_INCREMENT PRIMARY KEY,
	        firstname varchar(255) NOT NULL,
	        lastname varchar(255) NOT NULL,
	        dob Date, 
	        death Date, 
	        residence varchar(255),
	        genre varchar(255), 
	        famous_works varchar (255) 
	     )";
 		$artworks = "CREATE TABLE IF NOT EXISTS Artworks (
	        artworkID int(11) AUTO_INCREMENT PRIMARY KEY,
	        artistID varchar(255) NOT NULL,
	        name varchar(255) NOT NULL,
	        date_created Date, 
	        type varchar(255), 
	        location varchar(255),
	        genre varchar(255), 
	        dimensions varchar(255),
	        price decimal (10,2),
	        quantity_instore int(11)
	     )";
	     $customers = "CREATE TABLE IF NOT EXISTS Customers (
	        customerID int(11) AUTO_INCREMENT PRIMARY KEY,
	        firstname varchar(255) NOT NULL,
	        lastname varchar(255) NOT NULL,
	        residence varchar(255)
	     )";
	     $genres = "CREATE TABLE IF NOT EXISTS Genres (
	        genreID int(11) AUTO_INCREMENT PRIMARY KEY,
	        name varchar(255) NOT NULL
	     )";
	     $museums = "CREATE TABLE IF NOT EXISTS Museums (
	        museumID int(11) AUTO_INCREMENT PRIMARY KEY,
	        name varchar(255) NOT NULL,
	        location varchar(255) NOT NULL,
	        address varchar(255) NOT NULL, 
	        dateOpened Date, 
	        history varchar(2083),
	        reviews decimal(2,0) 
	     )";
	     $online = "CREATE TABLE IF NOT EXISTS OnlineOrders (
	        orderID int(11) AUTO_INCREMENT PRIMARY KEY,
	        customerID int(11) NOT NULL,
	        datePurchased Date, 
	        totalPrice decimal(2,0)
	     )";

		$tables = [$artists, $artworks, $customers, $genres, $museums, $online];

		foreach($tables as $k => $sql){
		    $query = @$conn->query($sql);

		    if(!$query)
		       $errors[] = "Table $k : Creation failed ($conn->error)";
		    else
		       $errors[] = "Table $k : Creation done";
		}


		foreach($errors as $msg) {
		   echo "$msg <br>";
		}



		echo "<br> DB created successfully";

	}catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}

	//INSERT INTO ARTISTS
	try{
		// begin the transaction
	    $conn->beginTransaction();
	    // our SQL statements
	   $conn->exec("INSERT INTO Artists (artistID, firstname, lastname, dob, death, residence, genre, famous_works)
		VALUES (01,'Eduardo', 'Mac Entyre', '1929-02-20', '2014-05-05', 'Bueno Aires, Argentina', 'abstract', 'Abstraction Bwa')");
		$conn->exec("INSERT INTO Artists (artistID, firstname, lastname, dob, death, residence, genre, famous_works)
		VALUES (02,'Aloys', 'Wach', '1892-04-30', '1940-04-18', 'Upper Austria', 'expressionist', 'Homage to the Christ Child')");
		$conn->exec("INSERT INTO Artists (artistID, firstname, lastname, dob, death, residence, genre, famous_works)
		VALUES (03,'Deena', 'Fadel', '1982-01-01', 'Inapplicable', 'Cairo, Egypt', 'Acrylic', 'On the Way to Eden')");
		$conn->exec("INSERT INTO Artists (artistID, firstname, lastname, dob, death, residence, genre, famous_works)
		VALUES (04,'Nicole', 'Nadeau', '1984-01-01', 'Inapplicable', 'United States of America', 'Structures', 'Seed Painting 03')");
		$conn->exec("INSERT INTO Artists (artistID, firstname, lastname, dob, death, residence, genre, famous_works)
		VALUES (05,'Vincent', 'van Gogh', '1853-03-30', '1890-07-23', 'Paris, France', 'post-impressionist', 'Irises')");

	    // commit the transaction
	    $conn->commit();
	    echo "Artist records created successfully<br> ";
    }
	catch(PDOException $e)
    {
	    // roll back the transaction if something failed
	    $conn->rollback();
	    echo "Error: " . $e->getMessage();
    }

    //INSERT INTO ARTWORKS
    try{
		// begin the transaction
	    $conn->beginTransaction();
	    // our SQL statements
	   $conn->exec("INSERT INTO Artworks (artworkID, artistID, name, date_created, type, location, genre, dimensions, price, quantity_instore)
		VALUES (91, 06, 'The Old Spanish Trail', '2017', 'Oil on Canvas', 'Blue Rain Gallery, Santa Fe', 'contemporary art', '168.9 × 141 cm', 60000, 3)");
		$conn->exec("INSERT INTO Artworks (artworkID, artistID, name, date_created, type, location, genre, dimensions, price, quantity_instore)
		VALUES (92, 07, 'The Kite Runner', '1892-04-30', 'Wet Plate Collodian', 'Gilman Contemporary, Ketchum', 'Collodian Photography', '50.8 × 50.8 cm', 2800, 1)");
		$conn->exec("INSERT INTO Artworks (artworkID, artistID, name, date_created, type, location, genre, dimensions, price, quantity_instore)
		VALUES (94, 08, 'Garnette Walking', '2017', 'Oil on Linen', 'FRED.GIAMPIETRO Gallery, New Haven', 'Impressionism', '260.4 × 149.9 cm', 50000, 10)");
		$conn->exec("INSERT INTO Artworks (artworkID, artistID, name, date_created, type, location, genre, dimensions, price, quantity_instore)
		VALUES (95, 09, 'American Gothic', '1930', 'Oil on Beaver Board', 'Art Institute of Chicago', 'Modernism', '78 × 65.3 cm', 7000000, 0)");
		$conn->exec("INSERT INTO Artworks (artworkID, artistID, name, date_created, type, location, genre, dimensions, price, quantity_instore)
		VALUES (93, 05, 'The Starry Night', '1889-06-01', 'Oil on Canvas','Museum of Modern Art, New York City', 'post-impressionism', '74x92cm', 1000000.00, 5)");

	    // commit the transaction
	    $conn->commit();
	    echo "Artwork records created successfully<br> ";
    }
	catch(PDOException $e)
    {
	    // roll back the transaction if something failed
	    $conn->rollback();
	    echo "Error: " . $e->getMessage();
    }

    //INSERT INTO Customers
    try{
		// begin the transaction
	    $conn->beginTransaction();
	    // our SQL statements
	   $conn->exec("INSERT INTO Customers (customerID, firstname, lastname, residence)
		VALUES (201, 'John', 'Stewart', 'Sydney Australia')");
		$conn->exec("INSERT INTO Customers (customerID, firstname, lastname, residence)
		VALUES (202, 'John', 'Goodman', 'Columbus, Ohio, United States')");
		$conn->exec("INSERT INTO Customers (customerID, firstname, lastname, residence)
		VALUES (204, 'John', 'Krasinki', 'Scranton, Pennsylvania, United States')");
		$conn->exec("INSERT INTO Customers (customerID, firstname, lastname, residence)
		VALUES (205, 'John', 'Doe', 'Toronto, Ontario, Canada')");
		$conn->exec("INSERT INTO Customers (customerID, firstname, lastname, residence)
		VALUES (203, 'John', 'Newman', 'Berlin, Germany')");

	    // commit the transaction
	    $conn->commit();
	    echo "Customer records created successfully<br> ";
    }
	catch(PDOException $e)
    {
	    // roll back the transaction if something failed
	    $conn->rollback();
	    echo "Error: " . $e->getMessage();
    }

    //INSERT INTO Genres
    try{
		// begin the transaction
	    $conn->beginTransaction();
	    // our SQL statements
	   $conn->exec("INSERT INTO Genres (genreID, name)
		VALUES (301, 'History')");
		$conn->exec("INSERT INTO Genres (genreID, name)
		VALUES (302, 'Portaiture')");
		$conn->exec("INSERT INTO Genres (genreID, name)
		VALUES (304, 'Landscape')");
		$conn->exec("INSERT INTO Genres (genreID, name)
		VALUES (305, 'Still Life')");
		$conn->exec("INSERT INTO Genres (genreID, name)
		VALUES (303, 'Genre Painting')");

	    // commit the transaction
	    $conn->commit();
	    echo "Genre records created successfully<br> ";
    }
	catch(PDOException $e)
    {
	    // roll back the transaction if something failed
	    $conn->rollback();
	    echo "Error: " . $e->getMessage();
    }


    //INSERT INTO Museums
    try{
		// begin the transaction
	    $conn->beginTransaction();
	    // our SQL statements
	   $conn->exec("INSERT INTO Museums (museumID, name, location, address, dateOpened, reviews)
		VALUES (401, 'Georgia O''Keeffe', 'Santa Fe, New Mexico', '217 Johnson St, Santa Fe, NM 87501, USA', '1997', 4.4)");
		$conn->exec("INSERT INTO Museums (museumID, name, location, address, dateOpened, reviews)
		VALUES (402, 'Royal Ontario Museum', 'Toronto, Ontario', '100 Queens Park, Toronto, ON M5S 2C6', '1914-03-14', 4.6)");
		$conn->exec("INSERT INTO Museums (museumID, name, location, address, dateOpened, reviews)
		VALUES (403, 'New Haven Museum', 'New Haven, Conneticut' ,'114 Whitney Ave, New Haven, CT 06510, USA', '1862', 4.4)");
		$conn->exec("INSERT INTO Museums (museumID, name, location, address, dateOpened, reviews)
		VALUES (404, 'Museum of Modern Art', 'New York City, NY', '11 W 53rd St, New York, NY 10019, USA', '1939-05-10', 4.5)");
		$conn->exec("INSERT INTO Museums (museumID, name, location, address, dateOpened, reviews)
		VALUES (405, 'Museo Correr', 'Venice, Italy', 'Piazza San Marco, 52, 30124 Venezia VE, Italy', '1836', 4.3)");

	    // commit the transaction
	    $conn->commit();
	    echo "Artwork records created successfully<br> ";
    }
	catch(PDOException $e)
    {
	    // roll back the transaction if something failed
	    $conn->rollback();
	    echo "Error: " . $e->getMessage();
    }

    //INSERT INTO Customers
    try{
		// begin the transaction
	    $conn->beginTransaction();
	    // our SQL statements
	   $conn->exec("INSERT INTO OnlineOrders (orderID, customerID, datePurchased, totalPrice)
		VALUES (1001, 201, '2018-04-21', 125000.00)");
		$conn->exec("INSERT INTO OnlineOrders (orderID, customerID, datePurchased, totalPrice)
		VALUES (1002, 202, '2018-01-17', 1000.00)");
		$conn->exec("INSERT INTO OnlineOrders (orderID, customerID, datePurchased, totalPrice)
		VALUES (1003, 204, '2018-06-25', 3500.00)");
		$conn->exec("INSERT INTO OnlineOrders (orderID, customerID, datePurchased, totalPrice)
		VALUES (1004, 205, '2018-01-03',  1000000.00)");
		$conn->exec("INSERT INTO OnlineOrders (orderID, customerID, datePurchased, totalPrice)
		VALUES (1005, 203, '2018-05-18', 3.00)");

	    // commit the transaction
	    $conn->commit();
	    echo "Online Order records created successfully<br> ";
    }
	catch(PDOException $e)
    {
	    // roll back the transaction if something failed
	    $conn->rollback();
	    echo "Error: " . $e->getMessage();
    }


?>

