<?php

namespace App\Jobs;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class RequestClientMegaplanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $url;
    protected $payload;
    protected $headers;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($headers, $url, $payload)
    {
        $this->url = $url;
        $this->payload = $payload;
        $this->headers = $headers;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Http::withHeaders($this->headers)->post($this->url, $this->payload);
    }
}
