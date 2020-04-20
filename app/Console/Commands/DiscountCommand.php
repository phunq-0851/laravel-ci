<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DiscountCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'discount:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create discount';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('discounts')->insert([
            'title' => 'Nguyen Quang Phu',
            'content' => 'Day la noi dung bai viet'
        ]);
    }
}
