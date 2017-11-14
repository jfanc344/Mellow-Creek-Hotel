$it = new RecursiveIteratorIterator( new RecursiveDirectoryIterator('.'));
$regx = new RegexIterator($it, '/^.*\.php$/i', // only matched text will be returned
    RecursiveRegexIterator::GET_MATCH);
foreach ($regx as $file) {
    $file = $file[0];
    exec('php -l ' . $file); //check the syntax here
}
