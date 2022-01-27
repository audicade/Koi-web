<?php

namespace App\Http\Middleware;

use App\Models\Visitor as ModelsVisitor;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class Visitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->getClientIp();
        $data = Location::get($ip);
        $visitor = ModelsVisitor::where('ip',$ip)->first();

        if ($data) {
            $location = $data->cityName;
        } else {
            $location = 'Indonesia';
        }

        if ($visitor!=null) {
            ModelsVisitor::find($visitor->id)->update([
                'count' => $visitor->count+1,
                'location' => $location,
            ]);
        } else {
            ModelsVisitor::create([
                'ip' => $ip,
                'count' => 1,
                'location' => $location,
            ]);
        }
        return $next($request);
    }
}
