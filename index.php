<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shahlal Hossain">
    <meta name="description" content="PHP CRUD Practices">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL, CRUD">
    <title>Home</title>

    <style>
        * { box-sizing: border-box; }

        body {
            font-family: Arial;
            padding: 10px;
            background: #f1f1f1;
        }

        /* Style the Top Navigation Bar */
        .topNav {
            overflow: hidden;
            background-color: #333;
        }

        .topNav .item { float:right; }

        /* Style the topNav Links */
        .topNav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change topNav Color on Hover */
        .topNav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Create Two Unequal Columns that Floats Next to Each Other */
        /* Left column */
        .leftColumn {
            float: left;
            width: 15%;
            background-color: #f1f1f1;
        }

        .leftSideMenuItem {
            background-color: #dbfde2; border-bottom: 1px darkseagreen solid; padding: 10px; margin-bottom: 2px;
        }

        /* Right column */
        .rightColumn {
            float: left;
            width: 85%;
            padding-left: 20px;
            background-color: #f1f1f1;
        }

        /* Add a Card Effect */
        .card {
            background-color: white;
            padding: 5px 20px 20px;
            margin-top: 20px;
        }

        /* Clear Floats After the Columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive Layout - When the Screen is Less than 800px wide, Make the Two Columns Stack on Top of Each Other Instead of Next to Each Other */
        @media screen and (max-width: 800px) {
            .leftColumn, .rightColumn {
                width: 100%;
                padding: 0;
            }
        }

        /* Responsive Layout - When the Screen is Less than 400px wide, Make the Navigation Links Stack on Top of Each Other Instead of Next to Each Other */
        @media screen and (max-width: 400px) {
            .topNav a {
                float: none;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="topNav">
    <a class="item" href="http://localhost/practices/crud01/fileupload/">Image Upload</a>
    <a class="item" href="http://localhost/practices/crud01/reference/">References</a>
    <a class="item" href="http://localhost/practices/crud01/traininginfo/">Training</a>
    <a class="item" href="http://localhost/practices/crud01/ictskill/">ICT Skill</a>
    <a class="item" href="http://localhost/practices/crud01/academicinfo/">Academic</a>
    <a class="item" href="http://localhost/practices/crud01/employment/">Employment</a>
    <a class="item" href="http://localhost/practices/crud01/contactinfo/">Contact</a>
    <a class="item" href="http://localhost/practices/crud01/personalinfo/">Personal</a>
    <a class="item" href="http://localhost/practices/crud01">Home</a>
</div>

<div class="row">
    <div class="leftColumn">
        <div class="card">
            <ul style="padding-left: 0; list-style-type: none;">
                <a style="text-decoration: none;" href="http://localhost/practices/crud01"><li class="leftSideMenuItem">Home</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/personalinfo/"><li class="leftSideMenuItem">Personal Details</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/contactinfo/"><li class="leftSideMenuItem">Contact Information</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/employment/"><li class="leftSideMenuItem">Employment History</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/academicinfo/"><li class="leftSideMenuItem">Academic Information</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/ictskill/"><li class="leftSideMenuItem">ICT Skills</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/traininginfo/"><li class="leftSideMenuItem">Trainings</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/certification/"><li class="leftSideMenuItem">Certifications</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/reference/"><li class="leftSideMenuItem">References</li></a>
                <a style="text-decoration: none;" href="http://localhost/practices/crud01/fileupload/"><li class="leftSideMenuItem">Image Upload</li></a>
            </ul>
        </div>
    </div>
    <div class="rightColumn">
        <div class="card">
            <h3>Home Page</h3>
            <p>Some Text/Content will be here...</p>
        </div>
    </div>
</div>

</body>
</html>