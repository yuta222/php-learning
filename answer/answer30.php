<?php
class Todo
{
    public function __construct(
        private string $title,
        private bool $isDone = false
    ) {
    }

    public function complete(): void
    {
        $this->isDone = true;
    }

    public function describe(): string
    {
        $mark = $this->isDone ? "x" : " ";
        return "[{$mark}] {$this->title}";
    }
}

$todos = [
    new Todo("PHPを勉強する"),
    new Todo("問題を解く"),
    new Todo("解答と比べる"),
];

echo "最初の一覧\n";
foreach ($todos as $todo) {
    echo $todo->describe() . "\n";
}

$todos[0]->complete();

echo "\n完了後の一覧\n";
foreach ($todos as $todo) {
    echo $todo->describe() . "\n";
}
