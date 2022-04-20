<?php

namespace Tests\Unit;
use Tests\TestCase;
Use Artisan;


class HolidaysTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_import_holidays()    {

        $this->artisan("holidays:za 2024")
        ->expectsOutput("South African Holiday [New Year's Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Human Rights Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Good Friday] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Family Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Freedom Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Workers' Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Youth Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [National Women's Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Heritage Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Day of Reconciliation] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Christmas Day] for year 2024 fetched and saved successfully")
        ->expectsOutput("South African Holiday [Day of Goodwill] for year 2024 fetched and saved successfully")
        ->assertExitCode(0);
    }
}
