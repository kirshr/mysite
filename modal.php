<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sass/styles.css" />
    <title>Strawberry Fields</title>
</head>
<body>
    <div class="modal">
        <h2>Client: Strawberry Fields</h2>
        <div class="flex">
            <div class="flex-col-1">            
                <p ><span class="modal-heading">Project Description: </span> Strawberry Fields is a U-pick farm located in Edmonton, Alberta. The client originally requested a redesign of the website. However, as we spoke with the client, their needs became apparent. Currently, Strawberry Fields is using a booking system designed to book hair stylists. And while this system has worked for them, it does not have all the functionality that they want. After understanding their needs, we began development on a brand new booking system for U-Pick Farms </p>
                <p><span class="modal-heading">Role:</span> My role was to create a dynamic calendar and booking system.</p>
                <p>During the first week, I researched different ways to create a calendar, using different frameworks and languages. Eventually decided to create a WordPress Plugin</p>
                <p><span class="modal-heading">Techonogies used: </span>To create the booking system, I used PHP, jQuery, JavaScript and MySQL</p>
            </div>
            <img src="./img/sbfields-home.webp" class="flex-col-2 modal-img"alt="">
        </div>
    <h3>Process</h3>
        <p>To create the calendar I used a loop within a loop, adding details depending on the position within the loop</p>
        <p>To make it dynamic, I added new elements to each div within the calendar that would hold their value. Each div also has a dynamic class that is generated whenever the calendar is called</p>
        <p>Then using jQuery with an click event, I extract and concatenate the data from the elements and add them to an array</p>
        <p>I then pass that array using AJAX to call to a PhP file, which sends that information to the database</p>
        <p>Finally, with jQuery, I use a for loop to iterate through the records from the database, and when it finds a class name that matches what is in the database, it adds a class of 'selected'</p>
    </div>
    <div id="lightgallery">
        <img src="./img/sbfields-home.webp" alt="Homepage" class="thumbnail">
        <img src="./img/wp-plugin.webp" alt="WordPress Plugin" class="thumbnail">
        <img src="./img/front-view.webp" alt="Front facing view" class="thumbnail">
    </div>

<footer>

</footer>
</body>
</html>