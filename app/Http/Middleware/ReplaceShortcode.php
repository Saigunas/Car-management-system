<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ShortCode;
class ReplaceShortcode
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $shortCodes = ShortCode::all();

        $content=$response->getContent();
        foreach ($shortCodes as $shortCode) {
            $content = str_replace("[[" . $shortCode->shortcode . "]]", $shortCode->replace, $content);
        }

        $response->setContent($content);

        return $response;
    }
}
