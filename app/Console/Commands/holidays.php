<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Holiday;
use Guzzle\Http;

class holidays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "holidays:za {year}";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Fetch South African public holidays for a given year";

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
        //Fetch Holidays
        $year = $this->argument("year");
        if (is_numeric($year) && $year > 2000) {
            $client = new \GuzzleHttp\Client();
            $url = "https://kayaposoft.com/enrico/json/v2.0/";
            $response = $client->post($url, [
                "form_params" => [
                    "action" => "getHolidaysForYear",
                    "year" => $year,
                    "country" => "za",
                    "holidayType" => "public_holiday",
                ],
            ]);

            //API response code is OK (200)
            if ($response->getStatusCode() == 200) {
                $holidays = $response->getBody();
                $holidays_array = json_decode($holidays);
                foreach ($holidays_array as $holiday) {
                    $holiday_date = $holiday->date->year . "-" . $holiday->date->month . "-" . $holiday->date->day;
                    $holiday_name = $holiday->name[0]->text;
                    //Save the holiday into a database
                    $new_holiday = Holiday::firstOrCreate([
                        "holiday_date" => $holiday_date,
                        "holiday_name" => $holiday_name,
                        "holiday_year" => $year,
                    ]);

                    if ($new_holiday->wasRecentlyCreated === true) {
                        $this->info("South African Holiday [$holiday_name] for year $year fetched and saved successfully");
                    } else {
                        $this->info("Error! South African Holiday [$holiday_name] for year $year is already saved. ");
                    }
                }
            } else {
                $this->info("Error! South African Holidays could not be fetched. Invalid year supplied.");
            }
        }
    }
}
