<?php

namespace App\Http\Controllers;

use DanJohnson95\Pinout\Pinout;
use Illuminate\Http\Request;

class PinoutController extends Controller
{
    // Turn on a specific GPIO pin
    public function turnOnPin($pinNumber)
    {
        // Get the Pin instance
        $pin = Pinout::pin($pinNumber);

        // Turn the pin on
        $pin->turnOn();

        return response()->json(['message' => "Pin $pinNumber is turned on."]);
    }

    // Turn off a specific GPIO pin
    public function turnOffPin($pinNumber)
    {
        // Get the Pin instance
        $pin = Pinout::pin($pinNumber);

        // Turn the pin off
        $pin->turnOff();

        return response()->json(['message' => "Pin $pinNumber is turned off."]);
    }

    // Check the state of a specific GPIO pin
    public function checkPinState($pinNumber)
    {
        // Get the Pin instance
        $pin = Pinout::pin($pinNumber);

        // Check if the pin is on or off
        $state = $pin->isOn() ? 'on' : 'off';

        return response()->json(['pin' => $pinNumber, 'state' => $state]);
    }
}
