<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class PrintController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $url = route('pdf');
        return Browsershot::url($url)
            ->setNodeBinary('/usr/bin/node')
            ->setNpmBinary('/usr/bin/npm')
            ->setIncludePath('$PATH:/usr/local/bin')
            ->base64pdf();
        // ->save('browsershot.pdf');
    }
}
