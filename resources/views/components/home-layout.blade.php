<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jastipkuy</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="/">Dashboard</a></li>
                <li><a href="/about">User</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>