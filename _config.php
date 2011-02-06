<?php
/**
 * DBProfiler
 * 
 * INSTALLATION
 *
 * Change your database class in the _ss_environment.php to:
 * define( 'SS_DATABASE_CLASS', 'ProfilerMySQLDatabase' );
 * 
 * Do a ?flush=1 on the site
 * 
 * USAGE
 * Try to clear all caches you might have and go to a page of your choice in
 * your browser
 *
 * The site will load as normal and at the bottom of the page you should see a
 * bar at the bottom of the page with some information
 * E.g:
 * PHP peak memory: 20.25MB | Querysize: 4.49KB | Queries: 15 (13 unique) | Time in db: 10.53ms | Read more

 * - PHP peak memory: - the peak memory used by the page
 * - Querysize - how big is the size of all sql queries combined that get sent
 *   to the database
 * - Queries - How many queries that was sent do the database and how many of
 *   them that was unique.
 * - Time in db - How long time was spent waiting for the database
 * - Read more - a link to a detailed page with more information
 *
 * To remove all queries that are duplicates, click on the link named 'unique',
 * the page will reload and you can see if this has any impact on the page load
 * time.
 *
 * You might also click on the 'Read more' link to get more detailed information
 * about all queries that was sent to the database and also find a backtrace of
 * where they originated from.
 */