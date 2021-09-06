<?php

namespace App\Jobs;

use App\Models\Book;
use App\Models\Cover;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProcessThumbnails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $book;
    protected $imagePath;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Book $book, $imagePath)
    {
        $this->book = $book;
        $this->imagePath = $imagePath;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $image = (Storage::get($this->imagePath));
        $extension = "jpeg";
        $fileName = Str::uuid().".".$extension;
        $filePath= storage_path('app/public/covers/thumbnails/').$fileName;
        Image::make($image)->resize(90, 116, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($filePath, 75, $extension);
        
        if ($this->book->cover) {
            $this->book->cover->cover = $fileName;
            $this->book->cover->save();
        } else {
            $cover = new Cover();
            $cover->cover = $fileName;
            $this->book->cover()->save($cover);
        }
    }
}
