<?php
class Book
{
    public function __construct(
        private string $title,
        private string $author,
        private bool $isBorrowed = false
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function borrow(): bool
    {
        if ($this->isBorrowed) {
            return false;
        }

        $this->isBorrowed = true;
        return true;
    }

    public function returnBook(): bool
    {
        if (!$this->isBorrowed) {
            return false;
        }

        $this->isBorrowed = false;
        return true;
    }

    public function describe(): string
    {
        $status = $this->isBorrowed ? "貸出中" : "在庫あり";
        return "{$this->title} / {$this->author} / {$status}";
    }
}

class BookShelf
{
    /** @var Book[] */
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function listBooks(): void
    {
        foreach ($this->books as $index => $book) {
            $number = $index + 1;
            echo "{$number}. {$book->describe()}\n";
        }
    }

    public function findByTitle(string $title): ?Book
    {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }

        return null;
    }

    public function borrow(string $title): void
    {
        $book = $this->findByTitle($title);

        if ($book === null) {
            echo "「{$title}」は見つかりませんでした\n";
            return;
        }

        if ($book->borrow()) {
            echo "「{$title}」を貸し出しました\n";
            return;
        }

        echo "「{$title}」はすでに貸出中です\n";
    }

    public function returnBook(string $title): void
    {
        $book = $this->findByTitle($title);

        if ($book === null) {
            echo "「{$title}」は見つかりませんでした\n";
            return;
        }

        if ($book->returnBook()) {
            echo "「{$title}」を返却しました\n";
            return;
        }

        echo "「{$title}」は貸出中ではありません\n";
    }
}

$shelf = new BookShelf();
$shelf->addBook(new Book("PHP入門", "山田太郎"));
$shelf->addBook(new Book("はじめてのWeb", "佐藤花子"));
$shelf->addBook(new Book("データベース基礎", "鈴木一郎"));

echo "最初の一覧\n";
$shelf->listBooks();

echo "\n貸出処理\n";
$shelf->borrow("PHP入門");
$shelf->borrow("存在しない本");

echo "\n貸出後の一覧\n";
$shelf->listBooks();

echo "\n返却処理\n";
$shelf->returnBook("PHP入門");

echo "\n最後の一覧\n";
$shelf->listBooks();
