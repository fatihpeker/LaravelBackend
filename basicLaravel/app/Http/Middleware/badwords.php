<?php

namespace App\Http\Middleware;

use Closure;

class badwords
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $kotu_kelime=['elma','armut','muz'];
        if (in_array($request->post('adSoyad'),$kotu_kelime)){
            //return redirect()->back()->withErrors('yasaklı kelime goma ore');
            $bad=strlen($request->post('adSoyad'));
            $sansür="";
            for ($i=0;$i<$bad;$i++){
                $sansür=$sansür."*";
            }
            $request->merge([
                'adSoyad'=>$sansür,
            ]);
        }
        //print_r($request->post());
        return $next($request);
    }
}
