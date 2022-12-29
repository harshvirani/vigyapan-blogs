<?php

namespace App\Console\Commands;

use App\Models\RequestTrack;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class IpDetailsSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:ip-details';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $ipAddresses = RequestTrack::query()->whereNull('status')->get('ip')->pluck('ip');
        $ipAddresses = $ipAddresses->unique();
        $data = Http::post('http://ip-api.com/batch',$ipAddresses->toArray());
        $ipDetails = $data->json();
        foreach ($ipDetails as $ipDetail){
            if($ipDetail['status'] == 'fail'){
                RequestTrack::query()->where('ip',$ipDetail['query'])->whereNull('status')->update(['status'=>'fail =>'.$ipDetail['message']]);
            }else{
                $ipDetail['country_code'] = $ipDetail['countryCode'];
                unset($ipDetail['countryCode']);
                $ipDetail['region_name'] = $ipDetail['regionName'];
                unset($ipDetail['regionName']);
                $ipDetail['long'] = $ipDetail['lon'];
                unset($ipDetail['lon']);
                RequestTrack::query()->where('ip',$ipDetail['query'])->whereNull('status')->update($ipDetail);
            }
        }
    }
}

