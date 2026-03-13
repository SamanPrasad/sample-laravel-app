<?php

namespace App\Jobs;

use App\Models\Author as ModelsAuthor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class Author implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public string $name = "Jerome Valeskas")
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $author = new ModelsAuthor();
        $author->name = $this->name;
        $author->country = "Sri Lanka";
        $author->language = "Sinhala";
        $author->save();
    }
}
