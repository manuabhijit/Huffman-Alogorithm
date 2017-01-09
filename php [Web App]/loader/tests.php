<?php

require_once 'SplClassLoader.php';

$classLoader = new SplClassLoader('Spiechu\PHPHuffmanEncoder', '../library');
$classLoader->register();

use Spiechu\PHPHuffmanEncoder\HuffmanEncoder;
echo "Input: ". $_POST['text'];
$huffman = new HuffmanEncoder();
$huffman->setString($_POST['text']);
//var_dump($huffman->getBinaryTree());

echo "</br>Encrypted text: ";
var_dump($huffman->getEncodedString());
echo "</br>Decrypted text: ";
var_dump($huffman->decodeString($huffman->getEncodedString()));





?>