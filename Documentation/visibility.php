<?php
class Book {
    public function __construct(
        public private(set) string $title,      // anyone reads, only class writes
        public protected(set) string $author,   // anyone reads, class+children write
    ) {}
}

$book = new Book('PHP Mastery', 'Karan');

echo $book->title;   // ✅ Reading is public — works
echo $book->author;  // ✅ Reading is public — works

$book->title  = 'New Title'; // ❌ Fatal Error — write is private
$book->author = 'Someone';   // ❌ Fatal Error — write is protected
?>