<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web Design</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header, footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em;
}

header h1 {
    margin: 0;
}

main {
    display: flex;
    flex-wrap: wrap;
}

.box {
    flex: 1;
    padding: 1em;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Default layout for larger screens */
@media (min-width: 600px) {
    .box {
        flex: 1 1 calc(33.333% - 2em);
        margin: 1em;
    }
}

/* Layout for smaller screens */
@media (max-width: 599px) {
    .box {
        flex: 1 1 100%;
        margin: 0;
    }
}
    </style>
    <header>
        <h1>Responsive Web Design</h1>
    </header>
    <main>
        <section class="box">Section 1</section>
        <section class="box">Section 2</section>
        <section class="box">Section 3</section>
    </main>
    <footer>
        <p>Footer content goes here</p>
    </footer>
</body>
</html>