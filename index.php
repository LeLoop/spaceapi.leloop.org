<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SpaceAPI :: Le Loop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="Author" content="ToM" />
    <link href="/styles.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

<div id="content">

<h1>Le Loop</h1>
<p id="intro">SpaceAPI implementation</p>

<fieldset>
    <legend>About SpaceAPI</legend>
    <p>What is it?</p>
    <blockquote>The HackerSpace Status API proposes a unified syntax to publish information about a hackerspace for consumption by javascript widgets, mobile apps and other scripts or programs. The API is flexible, and allows for custom extensions.</blockquote>
    <p><a href="http://hackerspaces.nl/spaceapi/">read more</a> |
    <a href="http://chasmcity.sonologic.nl/spacestatusdirectory.php">directory</a> |
    <a href="https://github.com/SpaceApi">git</a> |
    <a href="http://lists.hackerspaces.org/mailman/listinfo/spaceapi-devel">mailing list</a></p>
</fieldset>

<fieldset>
    <legend>About this implementation</legend>
    <p>Our status.json resource is located at <a href="/status.json">http://spaceapi.leloop.org/status.json</a>.</p>
    <p>The file is written manually whenever we have something to update, but we don't need to update it very often (once a month is a lot).</p>
    <p>Bots, please follow this guidelines:
    <ul>
        <li>You should provide an <a href="http://www.useragentstring.com/">user-agent string</a>.</li>
        <li>A reasonable bot should poll us only once a day.</li>
    </ul>
    You can read more about these guidelines <a href="https://wiki.leloop.org/index.php/SpaceAPI">here</a>.</p>
</fieldset>

<fieldset>
    <legend>status.json</legend>
    <p><pre><?php include('status.json'); ?></pre></p>
</fieldset>

<p id="footer">
    [ <a href="https://git.leloop.org/leloop/spaceapi-leloop-org">kopimi</a> |
    <a href="mailto:spaceapi@leloop.org">contact</a> |
    <a href="https://leloop.org">LeLoop.org</a> ]
</p>

</div>

</body>
</html>
